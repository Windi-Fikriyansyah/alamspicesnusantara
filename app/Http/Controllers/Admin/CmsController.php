<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->get();
        $hero = DB::table('hero_sections')->first();
        $stats = DB::table('stats')->orderBy('order')->get();
        $about = DB::table('about_sections')->first();
        $features = DB::table('features')->orderBy('order')->get();
        $products = DB::table('products')->orderBy('order')->get();
        $galleries = DB::table('galleries')->orderBy('order')->get();
        $testimonials = DB::table('testimonials')->orderBy('order')->get();

        return view('admin.dashboard', compact(
            'settings', 'hero', 'stats', 'about', 'features', 'products', 'galleries', 'testimonials'
        ));
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

    public function updateSetting(Request $request)
    {
        foreach ($request->settings as $key => $value) {
            DB::table('settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return back()->with('success', 'Settings updated successfully');
    }

    public function updateHero(Request $request)
    {
        $data = $request->only([
            'badge_text', 'title', 'title_highlight', 'description', 
            'primary_button_text', 'secondary_button_text'
        ]);

        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'hero');
            if ($path) $data['image'] = $path;
        }

        DB::table('hero_sections')->where('id', 1)->update($data);

        return back()->with('success', 'Hero section updated successfully');
    }

    public function updateAbout(Request $request)
    {
        $data = $request->only([
            'badge_text', 'title', 'content', 'experience_label', 'experience_value'
        ]);

        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'about');
            if ($path) $data['image'] = $path;
        }

        DB::table('about_sections')->where('id', 1)->update($data);

        return back()->with('success', 'About section updated successfully');
    }

    // CRUD for Products
    public function storeProduct(Request $request)
    {
        $data = $request->only(['name', 'category', 'order']);
        
        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'product');
            if ($path) $data['image'] = $path;
        }

        DB::table('products')->insert($data);

        return back()->with('success', 'Product added successfully');
    }

    public function updateProduct(Request $request, $id)
    {
        $data = $request->only(['name', 'category', 'order']);

        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'product');
            if ($path) $data['image'] = $path;
        }

        DB::table('products')->where('id', $id)->update($data);

        return back()->with('success', 'Product updated successfully');
    }

    public function deleteProduct($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return back()->with('success', 'Product deleted successfully');
    }

    // CRUD for Stats
    public function storeStat(Request $request)
    {
        $data = $request->only(['value', 'label', 'order']);
        DB::table('stats')->insert($data);
        return back()->with('success', 'Stat added successfully');
    }

    public function updateStat(Request $request, $id)
    {
        $data = $request->only(['value', 'label', 'order']);
        DB::table('stats')->where('id', $id)->update($data);
        return back()->with('success', 'Stat updated successfully');
    }

    public function deleteStat($id)
    {
        DB::table('stats')->where('id', $id)->delete();
        return back()->with('success', 'Stat deleted successfully');
    }

    // CRUD for Features
    public function storeFeature(Request $request)
    {
        $data = $request->only(['title', 'description', 'order']);
        DB::table('features')->insert($data);
        return back()->with('success', 'Feature added successfully');
    }

    public function updateFeature(Request $request, $id)
    {
        $data = $request->only(['title', 'description', 'order']);
        DB::table('features')->where('id', $id)->update($data);
        return back()->with('success', 'Feature updated successfully');
    }

    public function deleteFeature($id)
    {
        DB::table('features')->where('id', $id)->delete();
        return back()->with('success', 'Feature deleted successfully');
    }

    // CRUD for Galleries
    public function storeGallery(Request $request)
    {
        $data = $request->only(['title', 'subtitle', 'order']);
        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'gallery');
            if ($path) $data['image'] = $path;
        }
        DB::table('galleries')->insert($data);
        return back()->with('success', 'Gallery item added successfully');
    }

    public function updateGallery(Request $request, $id)
    {
        $data = $request->only(['title', 'subtitle', 'order']);
        if ($request->hasFile('image')) {
            $path = $this->uploadImageAsWebp($request->file('image'), 'gallery');
            if ($path) $data['image'] = $path;
        }
        DB::table('galleries')->where('id', $id)->update($data);
        return back()->with('success', 'Gallery item updated successfully');
    }

    public function deleteGallery($id)
    {
        DB::table('galleries')->where('id', $id)->delete();
        return back()->with('success', 'Gallery item deleted successfully');
    }

    // CRUD for Testimonials
    public function storeTestimonial(Request $request)
    {
        $data = $request->only(['content', 'author_name', 'author_role', 'author_initials', 'order']);
        DB::table('testimonials')->insert($data);
        return back()->with('success', 'Testimonial added successfully');
    }

    public function updateTestimonial(Request $request, $id)
    {
        $data = $request->only(['content', 'author_name', 'author_role', 'author_initials', 'order']);
        DB::table('testimonials')->where('id', $id)->update($data);
        return back()->with('success', 'Testimonial updated successfully');
    }

    public function deleteTestimonial($id)
    {
        DB::table('testimonials')->where('id', $id)->delete();
        return back()->with('success', 'Testimonial deleted successfully');
    }

    public function updateLogistics(Request $request)
    {
        $keys = ['logistics_title', 'logistics_description', 'logistics_button_text'];
        
        foreach ($keys as $key) {
            if ($request->has($key)) {
                DB::table('settings')->updateOrInsert(
                    ['key' => $key],
                    ['value' => $request->get($key)]
                );
            }
        }

        if ($request->hasFile('logistics_image')) {
            $path = $this->uploadImageAsWebp($request->file('logistics_image'), 'logistics');
            if ($path) {
                DB::table('settings')->updateOrInsert(
                    ['key' => 'logistics_image'],
                    ['value' => $path]
                );
            }
        }

        return back()->with('success', 'Logistics section updated successfully');
    }
}
