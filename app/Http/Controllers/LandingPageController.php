<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\HeroSection;
use App\Models\Stat;
use App\Models\AboutSection;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $hero = HeroSection::first();
        $stats = Stat::orderBy('order')->get();
        $about = AboutSection::first();
        $features = Feature::orderBy('order')->get();
        $products = Product::orderBy('order')->get();
        $galleries = Gallery::orderBy('order')->get();
        $testimonials = Testimonial::orderBy('order')->get();
        $blogs = DB::table('blogs')->where('is_published', true)->orderBy('published_at', 'desc')->take(3)->get();

        return view('welcome', compact(
            'settings',
            'hero',
            'stats',
            'about',
            'features',
            'products',
            'galleries',
            'testimonials',
            'blogs'
        ));
    }

    public function showBlog($slug)
    {
        $blog = DB::table('blogs')->where('slug', $slug)->first();
        if (!$blog) abort(404);

        $settings = Setting::pluck('value', 'key');
        $hero = HeroSection::first(); // Needed for header if it uses it

        return view('blog.detail', compact('blog', 'settings', 'hero'));
    }
}
