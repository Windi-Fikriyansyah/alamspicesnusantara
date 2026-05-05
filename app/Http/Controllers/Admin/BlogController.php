<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->get();
        $settings = DB::table('settings')->whereIn('key', ['blog_badge', 'blog_title', 'blog_description'])->pluck('value', 'key');
        return view('admin.blog.index', compact('blogs', 'settings'));
    }

    public function updateSettings(Request $request)
    {
        $keys = ['blog_badge', 'blog_title', 'blog_description'];
        foreach ($keys as $key) {
            if ($request->has($key)) {
                DB::table('settings')->updateOrInsert(
                    ['key' => $key],
                    ['value' => $request->get($key)]
                );
            }
        }
        return back()->with('success', 'Blog section settings updated successfully');
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    private function uploadImageAsWebp($file, $prefix = '')
    {
        $extension = strtolower($file->getClientOriginalExtension());
        $fileName = ($prefix ? $prefix . '_' : '') . time() . '.webp';
        $destinationPath = storage_path('app/public/uploads');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        switch ($extension) {
            case 'jpeg':
            case 'jpg':
                $image = imagecreatefromjpeg($file->getRealPath());
                break;
            case 'png':
                $image = imagecreatefrompng($file->getRealPath());
                imagepalettetotruecolor($image);
                imagealphablending($image, true);
                imagesavealpha($image, true);
                break;
            case 'gif':
                $image = imagecreatefromgif($file->getRealPath());
                break;
            case 'webp':
                $image = imagecreatefromwebp($file->getRealPath());
                break;
            default:
                return null;
        }

        if ($image) {
            imagewebp($image, $destinationPath . '/' . $fileName, 80);
            imagedestroy($image);
            return 'storage/uploads/' . $fileName;
        }

        return null;
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'is_published' => $request->has('is_published'),
            'published_at' => $request->has('is_published') ? now() : null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'blog');
            if ($path) $data['image'] = $path;
        } elseif ($request->ai_image_path) {
            $data['image'] = $request->ai_image_path;
        }

        DB::table('blogs')->insert($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        if (!$blog) abort(404);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'is_published' => $request->has('is_published'),
            'updated_at' => now(),
        ];

        if ($request->has('is_published') && !DB::table('blogs')->where('id', $id)->value('published_at')) {
            $data['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'blog');
            if ($path) $data['image'] = $path;
        }

        DB::table('blogs')->where('id', $id)->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully');
    }

    public function destroy($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return back()->with('success', 'Blog deleted successfully');
    }

    public function generateAi(Request $request)
    {
        $topic = $request->topic;
        $apiKey = config('services.gemini.key');

        if (!$apiKey) {
            return response()->json(['error' => 'Gemini API Key not found in .env'], 400);
        }

        $prompt = "Create an SEO-friendly blog article in English about the topic: '{$topic}'. 
        Output must be in JSON format with keys: 'title', 'excerpt', 'content', and 'image_prompt'. 
        'content' must contain well-formatted HTML. 
        'excerpt' is a short summary of maximum 150 characters.
        'image_prompt' is a highly descriptive English prompt to generate a high-quality featured image for this article.
        Do not provide any additional text besides the JSON.";

        try {
            $response = Http::post("https://generativelanguage.googleapis.com/v1beta/models/gemini-flash-latest:generateContent?key={$apiKey}", [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]);

            if ($response->successful()) {
                $result = $response->json();
                $text = $result['candidates'][0]['content']['parts'][0]['text'] ?? '';
                
                $jsonStr = trim(str_replace(['```json', '```'], '', $text));
                $data = json_decode($jsonStr, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    return response()->json(['error' => 'Failed to parse AI response'], 500);
                }

                // Generate AI Image using Pollinations.ai (Free & No Key Needed)
                if (isset($data['image_prompt'])) {
                    $imagePrompt = urlencode($data['image_prompt']);
                    $imageUrl = "https://image.pollinations.ai/prompt/{$imagePrompt}?width=1200&height=800&nologo=true&seed=" . rand(1, 1000);
                    
                    $imageContent = @file_get_contents($imageUrl);
                    if ($imageContent) {
                        $fileName = 'ai_blog_' . time() . '.jpg';
                        $destinationPath = storage_path('app/public/uploads');
                        if (!file_exists($destinationPath)) mkdir($destinationPath, 0755, true);
                        
                        file_put_contents($destinationPath . '/' . $fileName, $imageContent);
                        $data['image_path'] = 'storage/uploads/' . $fileName;
                    }
                }

                return response()->json($data);
            }

            $errorData = $response->json();
            $errorMessage = $errorData['error']['message'] ?? 'Unknown API Error';
            
            return response()->json([
                'error' => 'AI Generation failed: ' . $errorMessage,
                'details' => $errorData
            ], 500);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
