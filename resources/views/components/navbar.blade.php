<!-- Contact Information Bar -->
<div class="contact-info-bar d-none d-lg-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="contact-item me-4">
                    <i class="fas fa-phone me-1"></i>
                    <a href="tel:+254700123456" class="text-light text-decoration-none">+254 700 123 456</a>
                </div>
            </div>
            <div class="col-auto">
                <div class="contact-item me-4">
                    <i class="fas fa-map-marker-alt me-1"></i>
                    <span class="text-light">Nairobi CBD, Kenya</span>
                </div>
            </div>
            <div class="col-auto">
                <div class="contact-item">
                    <i class="fas fa-envelope me-1"></i>
                    <a href="mailto:info@adamsmagomaadvocates.com" class="text-light text-decoration-none">info@adamsmagomaadvocates.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent site-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo_law.jpg') }}" alt="Adams & Magoma Advocates Logo" class="logo-image">
            <div class="brand-text d-none d-md-flex flex-column">
                <span class="brand-name">Adams &amp; Magoma Advocates</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Mobile Contact Info (shown when navbar is expanded) -->
            <div class="navbar-contact-info-mobile d-lg-none mb-3">
                <div class="contact-item-mobile text-center mb-2">
                    <i class="fas fa-phone me-1"></i>
                    <a href="tel:+254700123456" class="text-light text-decoration-none">+254 700 123 456</a>
                </div>
                <div class="contact-item-mobile text-center mb-2">
                    <i class="fas fa-map-marker-alt me-1"></i>
                    <span class="text-light">Nairobi CBD, Kenya</span>
                </div>
                <div class="contact-item-mobile text-center mb-3">
                    <i class="fas fa-envelope me-1"></i>
                    <a href="mailto:info@adamsmagomaadvocates.com" class="text-light text-decoration-none">info@adamsmagomaadvocates.com</a>
                </div>
                <!-- Mobile Theme Toggle -->
                <div class="mobile-theme-toggle text-center">
                    <button class="theme-toggle-btn-mobile" id="themeToggleMobile" aria-label="Toggle theme">
                        <i class="fas fa-moon me-2" id="themeIconMobile"></i>
                        <span>Dark Mode</span>
                    </button>
                </div>
            </div>

            <ul class="navbar-nav me-auto justify-content-center flex-grow-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <span>About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('practice-areas*') ? 'active' : '' }}" href="{{ route('practice-areas') }}">
                        <span>Practice Areas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('resources') ? 'active' : '' }}" href="{{ route('resources') }}">
                        <span>Resources</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('blogs*') ? 'active' : '' }}" href="{{ route('blogs') }}">
                        <span>Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            <div class="navbar-cta-group d-none d-lg-flex align-items-center">
                <button class="theme-toggle-btn" id="themeToggle" aria-label="Toggle theme" title="Toggle Light/Dark Mode">
                    <i class="fas fa-moon" id="themeIcon"></i>
                </button>
                <a href="{{ route('book-appointment') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-calendar-check me-1"></i>
                    <span>Book Appointment</span>
                </a>
            </div>
            
        </div>
    </div>
</nav>

<!-- Mobile Quick Action Bar -->
<div class="mobile-action-bar d-lg-none">
    <a href="tel:+254700123456" class="mobile-action">
        <i class="fas fa-phone"></i>
        <span>Call Us</span>
    </a>
    <a href="https://wa.me/254700123456" target="_blank" rel="noopener" class="mobile-action">
        <i class="fab fa-whatsapp"></i>
        <span>WhatsApp</span>
    </a>
    <a href="{{ route('book-appointment') }}" class="mobile-action">
        <i class="fas fa-calendar-check"></i>
        <span>Book Appointment</span>
    </a>
</div>
