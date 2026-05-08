<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\CmsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('welcome');
Route::get('/product/{slug}', [CmsController::class, 'showProduct'])->name('product.detail');
Route::get('/blog/{slug}', [LandingPageController::class, 'showBlog'])->name('blog.detail');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

Route::prefix('admin')
    ->middleware('auth')
    ->group(function () {

        Route::get('/', [CmsController::class, 'index'])->name('dashboard');
        
        // Settings
        Route::post('/settings', [CmsController::class, 'updateSetting'])->name('admin.settings.update');
        
        // Hero
        Route::post('/hero', [CmsController::class, 'updateHero'])->name('admin.hero.update');
        
        // About
        Route::post('/about', [CmsController::class, 'updateAbout'])->name('admin.about.update');
        
        // Products
        Route::post('/products', [CmsController::class, 'storeProduct'])->name('admin.products.store');
        Route::post('/products/{id}', [CmsController::class, 'updateProduct'])->name('admin.products.update');
        Route::delete('/products/{id}', [CmsController::class, 'deleteProduct'])->name('admin.products.delete');

        // Stats
        Route::post('/stats', [CmsController::class, 'storeStat'])->name('admin.stats.store');
        Route::post('/stats/{id}', [CmsController::class, 'updateStat'])->name('admin.stats.update');
        Route::delete('/stats/{id}', [CmsController::class, 'deleteStat'])->name('admin.stats.delete');

        // Features
        Route::post('/features', [CmsController::class, 'storeFeature'])->name('admin.features.store');
        Route::post('/features/{id}', [CmsController::class, 'updateFeature'])->name('admin.features.update');
        Route::delete('/features/{id}', [CmsController::class, 'deleteFeature'])->name('admin.features.delete');

        // Galleries
        Route::post('/galleries', [CmsController::class, 'storeGallery'])->name('admin.galleries.store');
        Route::post('/galleries/{id}', [CmsController::class, 'updateGallery'])->name('admin.galleries.update');
        Route::delete('/galleries/{id}', [CmsController::class, 'deleteGallery'])->name('admin.galleries.delete');

        // Testimonials
        Route::post('/testimonials', [CmsController::class, 'storeTestimonial'])->name('admin.testimonials.store');
        Route::post('/testimonials/{id}', [CmsController::class, 'updateTestimonial'])->name('admin.testimonials.update');
        Route::delete('/testimonials/{id}', [CmsController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');
        Route::post('/logistics', [CmsController::class, 'updateLogistics'])->name('admin.logistics.update');

        // Blog CMS (Separate)
        Route::get('/blog', [\App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blog.index');
        Route::get('/blog/create', [\App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blog.create');
        Route::post('/blog', [\App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blog.store');
        Route::post('/blog/generate-ai', [\App\Http\Controllers\Admin\BlogController::class, 'generateAi'])->name('admin.blog.generate-ai');
        Route::post('/blog/settings', [\App\Http\Controllers\Admin\BlogController::class, 'updateSettings'])->name('admin.blog.settings.update');
        Route::get('/blog/{id}/edit', [\App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::post('/blog/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('/blog/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('admin.blog.delete');

    });

require __DIR__ . '/auth.php';
