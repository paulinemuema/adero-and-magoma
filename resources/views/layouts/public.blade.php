<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Adams & Magoma | Premier Legal Advocates')</title>
    <script>
        // Prevent theme flash - apply theme immediately before page renders
        (function() {
            const theme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
    <meta name="description" content="@yield('description', 'Adams & Magoma Advocates - Premier legal services in Nairobi, Kenya. Expert attorneys specializing in Corporate Law, Real Estate, Family Law, Estate Planning, Litigation, and Employment Law. Free consultations available.')">
    <meta name="keywords" content="@yield('keywords', 'lawyer Nairobi, legal services Kenya, corporate law Kenya, real estate lawyer, family law attorney, estate planning Kenya, litigation lawyer, employment law Kenya, Adams Magoma Advocates')">
    <meta name="author" content="Adams & Magoma Advocates">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Local SEO Meta Tags -->
    <meta name="geo.region" content="KE-110">
    <meta name="geo.placename" content="Nairobi">
    <meta name="geo.position" content="-1.2644;36.8219">
    <meta name="ICBM" content="-1.2644, 36.8219">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Adams & Magoma | Premier Legal Advocates')">
    <meta property="og:description" content="@yield('description', 'Premier legal services in Nairobi, Kenya')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo_law.jpg'))">
    <meta property="og:locale" content="en_KE">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Adams & Magoma | Premier Legal Advocates')">
    <meta name="twitter:description" content="@yield('description', 'Premier legal services in Nairobi, Kenya')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/logo_law.jpg'))">
    
    <link rel="icon" href="{{ asset('assets/images/logo_law.jpg') }}" type="image/jpeg">
    
    <!-- External Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- External Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollToPlugin.min.js"></script>
    
    <!-- Vite Assets -->
    @if(app()->environment('production'))
        @php
            $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            $cssFile = $manifest['resources/css/public.css']['file'] ?? 'assets/public-hs9Cu0jg.css';
            $jsFile = $manifest['resources/js/public.js']['file'] ?? 'assets/public-BVyuNFMk.js';
        @endphp
        <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
        <script type="module" src="{{ asset('build/' . $jsFile) }}"></script>
    @else
        @vite(['resources/css/public.css', 'resources/js/public.js'])
    @endif
    
    @stack('head_meta')
    @stack('styles')
    @stack('schema')
</head>
<body>
    @yield('content')
    
    <!-- Exit-Intent Popup -->
    <div class="exit-intent-overlay" id="exitIntentOverlay"></div>
    <div class="exit-intent-popup" id="exitIntentPopup">
        <button class="exit-intent-close" id="exitIntentClose">
            <i class="fas fa-times"></i>
        </button>
        <div class="exit-intent-content">
            <div class="exit-intent-icon">
                <i class="fas fa-gift"></i>
            </div>
            <h2 class="exit-intent-title">Free 30-Minute Consultation</h2>
            <p class="exit-intent-description">Book your free consultation with our expert legal team today.</p>
            <div class="exit-intent-actions">
                <a href="/book-appointment" class="btn btn-primary exit-intent-cta">
                    Book Now
                </a>
                <button class="exit-intent-dismiss" id="exitIntentDismiss">
                    Maybe Later
                </button>
            </div>
        </div>
    </div>
    
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

