<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');

Route::view('about', 'public.about')
    ->name('about');

Route::view('practice-areas', 'public.practice-areas')
    ->name('practice-areas');

Route::view('practice-areas/corporate-law', 'public.practice-areas.corporate-law')
    ->name('practice-areas.corporate-law');

Route::view('practice-areas/real-estate-law', 'public.practice-areas.real-estate-law')
    ->name('practice-areas.real-estate-law');

Route::view('practice-areas/family-law', 'public.practice-areas.family-law')
    ->name('practice-areas.family-law');

Route::view('practice-areas/estate-planning', 'public.practice-areas.estate-planning')
    ->name('practice-areas.estate-planning');

Route::view('practice-areas/litigation', 'public.practice-areas.litigation')
    ->name('practice-areas.litigation');

Route::view('practice-areas/employment-law', 'public.practice-areas.employment-law')
    ->name('practice-areas.employment-law');

Route::view('resources', 'public.resources')
    ->name('resources');

Route::view('blogs', 'public.blogs')
    ->name('blogs');

Route::view('blogs/understanding-contract-law-kenya', 'public.blogs.understanding-contract-law-kenya')
    ->name('blogs.understanding-contract-law-kenya');

Route::view('blogs/navigating-divorce-process-kenya', 'public.blogs.navigating-divorce-process-kenya')
    ->name('blogs.navigating-divorce-process-kenya');

Route::view('blogs/estate-planning-essentials-kenya', 'public.blogs.estate-planning-essentials-kenya')
    ->name('blogs.estate-planning-essentials-kenya');

Route::view('blogs/employment-rights-kenya-2025', 'public.blogs.employment-rights-kenya-2025')
    ->name('blogs.employment-rights-kenya-2025');

Route::view('blogs/property-registration-process-kenya', 'public.blogs.property-registration-process-kenya')
    ->name('blogs.property-registration-process-kenya');

Route::view('contact', 'public.contact')
    ->name('contact');

Route::view('book-appointment', 'public.book-appointment')
    ->name('book-appointment');

Route::view('case-evaluation', 'public.case-evaluation')
    ->name('case-evaluation');

// Sitemap Route
Route::get('sitemap.xml', function() {
    $baseUrl = url('/');
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    
    // Homepage
    $sitemap .= '  <url>' . "\n";
    $sitemap .= '    <loc>' . $baseUrl . '</loc>' . "\n";
    $sitemap .= '    <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
    $sitemap .= '    <changefreq>weekly</changefreq>' . "\n";
    $sitemap .= '    <priority>1.0</priority>' . "\n";
    $sitemap .= '  </url>' . "\n";
    
    // Main Pages
    $pages = [
        ['route' => 'about', 'priority' => '0.9', 'freq' => 'monthly'],
        ['route' => 'practice-areas', 'priority' => '0.9', 'freq' => 'monthly'],
        ['route' => 'resources', 'priority' => '0.8', 'freq' => 'monthly'],
        ['route' => 'blogs', 'priority' => '0.9', 'freq' => 'weekly'],
        ['route' => 'contact', 'priority' => '0.8', 'freq' => 'monthly'],
        ['route' => 'book-appointment', 'priority' => '0.9', 'freq' => 'monthly'],
        ['route' => 'case-evaluation', 'priority' => '0.8', 'freq' => 'monthly'],
    ];
    
    foreach ($pages as $page) {
        $sitemap .= '  <url>' . "\n";
        $sitemap .= '    <loc>' . route($page['route']) . '</loc>' . "\n";
        $sitemap .= '    <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
        $sitemap .= '    <changefreq>' . $page['freq'] . '</changefreq>' . "\n";
        $sitemap .= '    <priority>' . $page['priority'] . '</priority>' . "\n";
        $sitemap .= '  </url>' . "\n";
    }
    
    // Practice Areas
    $practiceAreas = [
        'practice-areas.corporate-law',
        'practice-areas.real-estate-law',
        'practice-areas.family-law',
        'practice-areas.estate-planning',
        'practice-areas.litigation',
        'practice-areas.employment-law',
    ];
    
    foreach ($practiceAreas as $area) {
        $sitemap .= '  <url>' . "\n";
        $sitemap .= '    <loc>' . route($area) . '</loc>' . "\n";
        $sitemap .= '    <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
        $sitemap .= '    <changefreq>monthly</changefreq>' . "\n";
        $sitemap .= '    <priority>0.8</priority>' . "\n";
        $sitemap .= '  </url>' . "\n";
    }
    
    // Blog Posts
    $blogPosts = [
        ['route' => 'blogs.understanding-contract-law-kenya', 'date' => '2025-12-15'],
        ['route' => 'blogs.navigating-divorce-process-kenya', 'date' => '2025-12-10'],
        ['route' => 'blogs.estate-planning-essentials-kenya', 'date' => '2025-12-05'],
        ['route' => 'blogs.employment-rights-kenya-2025', 'date' => '2025-11-28'],
        ['route' => 'blogs.property-registration-process-kenya', 'date' => '2025-11-20'],
    ];
    
    foreach ($blogPosts as $post) {
        $sitemap .= '  <url>' . "\n";
        $sitemap .= '    <loc>' . route($post['route']) . '</loc>' . "\n";
        $sitemap .= '    <lastmod>' . $post['date'] . '</lastmod>' . "\n";
        $sitemap .= '    <changefreq>monthly</changefreq>' . "\n";
        $sitemap .= '    <priority>0.7</priority>' . "\n";
        $sitemap .= '  </url>' . "\n";
    }
    
    $sitemap .= '</urlset>';
    
    return response($sitemap, 200)
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
