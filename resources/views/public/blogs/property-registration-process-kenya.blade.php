@extends('layouts.public')

@section('title', 'Property Registration Process in Kenya | Adams & Magoma Advocates')
@section('description', 'Complete guide to property registration in Kenya. Learn about land registration, title deeds, property transfer, and real estate legal requirements. Expert real estate law advice from Adams & Magoma Advocates.')
@section('keywords', 'property registration Kenya, land registration, title deeds Kenya, property transfer, real estate lawyer Nairobi')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "headline": "Property Registration Process in Kenya",
      "description": "Complete guide to property registration in Kenya covering land registration, title deeds, and property transfer procedures.",
      "image": "https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
      "datePublished": "2025-11-20",
      "dateModified": "2025-11-20",
      "author": {
        "@type": "Person",
        "name": "Magoma",
        "jobTitle": "Partner & Real Estate Law Specialist"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Adams & Magoma Advocates",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ asset('assets/images/logo_law.jpg') }}"
        }
      },
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "articleSection": "Real Estate Law",
      "keywords": "property registration, land registration, title deeds, property transfer"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ route('home') }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Blogs",
          "item": "{{ route('blogs') }}"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Property Registration Process in Kenya",
          "item": "{{ url()->current() }}"
        }
      ]
    }
  ]
}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Reading Progress Bar -->
    <div class="reading-progress-bar" id="readingProgressBar"></div>

    <!-- Breadcrumb -->
    <section class="article-breadcrumb-section">
        <div class="article-breadcrumb-container">
            <nav class="article-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb-list">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="breadcrumb-separator">
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    <li class="breadcrumb-separator">
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="breadcrumb-item active">Property Registration Process in Kenya</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Article Header -->
    <section class="article-header-section">
        <div class="bg-pattern"></div>
        <div class="article-header-container">
            <div class="article-header-content">
                <div class="article-meta-top">
                    <span class="article-category-badge">Real Estate Law</span>
                    <span class="article-date">November 20, 2025</span>
                    <span class="article-read-time">
                        <i class="far fa-clock"></i>
                        6 min read
                    </span>
                </div>
                <h1 class="article-title">Property Registration Process in Kenya: A Complete Guide</h1>
                <p class="article-subtitle">Understanding the property registration process is crucial for property owners, investors, and developers in Kenya. This comprehensive guide covers everything you need to know about registering property in Kenya.</p>
                
                <div class="article-author-header">
                    <div class="author-avatar-small">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Magoma">
                    </div>
                    <div class="author-info-small">
                        <h4 class="author-name">Magoma</h4>
                        <p class="author-role">Managing Partner & Real Estate Law Specialist</p>
                    </div>
                </div>

                <div class="article-share-header">
                    <span class="share-label">Share this article:</span>
                    <div class="share-buttons">
                        <a href="#" class="share-btn" data-platform="facebook" title="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="share-btn" data-platform="twitter" title="Share on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="share-btn" data-platform="linkedin" title="Share on LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="share-btn" data-platform="email" title="Share via Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <button class="share-btn copy-link-btn" data-url="{{ url()->current() }}" title="Copy link">
                            <i class="fas fa-link"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="article-content-section">
        <div class="bg-pattern"></div>
        <div class="article-content-container">
            <div class="article-layout">
                <!-- Main Article Content -->
                <article class="article-main">
                    <div class="article-featured-image">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Property Registration in Kenya">
                    </div>

                    <div class="article-body">
                        <p class="article-lead">
                            Property ownership is a significant investment in Kenya, and proper registration is essential for legal protection and financial security. The property registration process in Kenya involves several key institutions and follows specific legal procedures.
                        </p>

                        <h2 id="why-registration">Why Property Registration Matters</h2>
                        <p>
                            Proper property registration provides legal ownership documentation and protects against disputes, fraud, and loss of property rights. Registered properties are also eligible for banking facilities and can be used as collateral for loans.
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4>Legal Protection</h4>
                                <p>Protects against disputes and fraudulent claims</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h4>Banking Facilities</h4>
                                <p>Enables use as collateral for loans</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-file-contract"></i>
                                </div>
                                <h4>Clear Title</h4>
                                <p>Provides clear proof of ownership</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h4>Investment Value</h4>
                                <p>Increases property value and marketability</p>
                            </div>
                        </div>

                        <h2 id="key-institutions">Key Institutions Involved</h2>
                        <p>
                            The property registration process involves several key institutions:
                        </p>

                        <div class="article-info-box">
                            <h3>Ministry of Lands</h3>
                            <p>Oversees land administration and registration policies</p>
                        </div>

                        <div class="article-info-box">
                            <h3>Kenya Revenue Authority (KRA)</h3>
                            <p>Handles stamp duty and property taxes</p>
                        </div>

                        <div class="article-info-box">
                            <h3>Law Society of Kenya</h3>
                            <p>Regulates legal practitioners involved in conveyancing</p>
                        </div>

                        <h2 id="registration-process">Step-by-Step Registration Process</h2>
                        <p>
                            The property registration process follows these key steps:
                        </p>

                        <ol class="article-numbered-list">
                            <li><strong>Due Diligence:</strong> Conduct thorough searches at the Lands Registry to verify ownership, encumbrances, and property boundaries.</li>
                            <li><strong>Agreement Preparation:</strong> Draft sale agreement and obtain necessary consents from relevant authorities.</li>
                            <li><strong>Stamp Duty Payment:</strong> Pay stamp duty to KRA based on property value and location.</li>
                            <li><strong>Registration:</strong> Present documents to the Lands Registry for official registration and title issuance.</li>
                        </ol>

                        <h2 id="common-challenges">Common Challenges in Property Registration</h2>
                        <p>
                            Property registration can face several challenges:
                        </p>

                        <ul class="article-list">
                            <li><strong>Title Defects:</strong> Issues with previous registrations or fraudulent activities</li>
                            <li><strong>Boundary Disputes:</strong> Conflicts over property boundaries and measurements</li>
                            <li><strong>Delayed Processing:</strong> Bureaucratic delays in government offices</li>
                            <li><strong>Tax Compliance:</strong> Ensuring all property taxes are up to date</li>
                        </ul>

                        <div class="article-key-takeaways">
                            <div class="key-takeaways-header">
                                <i class="fas fa-lightbulb"></i>
                                <h3>Key Takeaways</h3>
                            </div>
                            <ul>
                                <li>Property registration is essential for legal protection</li>
                                <li>The process involves multiple institutions and steps</li>
                                <li>Due diligence is crucial before purchase</li>
                                <li>Professional legal assistance is recommended</li>
                                <li>Proper registration increases property value</li>
                            </ul>
                        </div>

                        <h2 id="need-assistance">Need Property Law Assistance?</h2>
                        <p>
                            Property transactions can be complex and require expert legal guidance. Our experienced real estate lawyers at Adams & Magoma Advocates can help you with:
                        </p>

                        <ul class="article-list">
                            <li>Property due diligence and searches</li>
                            <li>Title verification and defect resolution</li>
                            <li>Property purchase and sale agreements</li>
                            <li>Registration assistance and documentation</li>
                            <li>Dispute resolution and litigation</li>
                        </ul>

                        <div class="article-cta-box">
                            <div class="cta-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Contact Our Property Law Experts</h3>
                            <p>Get professional assistance with your property registration needs.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <span>Schedule Consultation</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="article-disclaimer">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <strong>Legal Disclaimer:</strong> This article provides general information about property registration in Kenya and is not intended as legal advice. Property laws and procedures may vary by location and can change. Please consult with qualified legal professionals for specific situations.
                            </div>
                        </div>
                    </div>

                    <!-- Article Tags -->
                    <div class="article-tags-section">
                        <h4>Tags:</h4>
                        <div class="article-tags">
                            <a href="{{ route('blogs') }}?category=real-estate" class="article-tag">Property Law</a>
                            <a href="{{ route('blogs') }}?category=real-estate" class="article-tag">Real Estate</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Registration</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Kenyan Law</a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="article-author-bio">
                        <div class="author-bio-avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=120&h=120&q=80" alt="Magoma">
                        </div>
                        <div class="author-bio-content">
                            <h4>About Magoma</h4>
                            <p>
                                Magoma is a Managing Partner at Adams & Magoma Advocates with extensive experience in real estate law and property transactions. Magoma has successfully handled numerous property registration matters and complex real estate disputes.
                            </p>
                            <div class="author-credentials">
                                <span class="credential-badge">LLB (University of Nairobi)</span>
                                <span class="credential-badge">Advocate of the High Court</span>
                            </div>
                        </div>
                    </div>

                    <!-- Article Navigation -->
                    <div class="article-navigation">
                        <a href="{{ route('blogs.employment-rights-kenya-2025') }}" class="article-nav-item article-nav-prev">
                            <div class="nav-icon">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="nav-content">
                                <span class="nav-label">Previous Article</span>
                                <h5>Employment Rights in Kenya 2025</h5>
                            </div>
                        </a>
                        <a href="{{ route('blogs.understanding-contract-law-kenya') }}" class="article-nav-item article-nav-next">
                            <div class="nav-content">
                                <span class="nav-label">Next Article</span>
                                <h5>Understanding Contract Law in Kenya</h5>
                            </div>
                            <div class="nav-icon">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="article-sidebar">
                    <!-- Table of Contents -->
                    <div class="article-toc">
                        <h4 class="toc-title">
                            <i class="fas fa-list"></i>
                            Table of Contents
                        </h4>
                        <nav class="toc-nav">
                            <a href="#why-registration" class="toc-link">Why Property Registration Matters</a>
                            <a href="#key-institutions" class="toc-link">Key Institutions Involved</a>
                            <a href="#registration-process" class="toc-link">Step-by-Step Registration Process</a>
                            <a href="#common-challenges" class="toc-link">Common Challenges in Property Registration</a>
                            <a href="#need-assistance" class="toc-link">Need Property Law Assistance?</a>
                        </nav>
                    </div>

                    <!-- Related Articles -->
                    <div class="article-related">
                        <h4 class="related-title">
                            <i class="fas fa-book-open"></i>
                            Related Articles
                        </h4>
                        <div class="related-articles-list">
                            <a href="{{ route('blogs.understanding-contract-law-kenya') }}" class="related-article-item">
                                <div class="related-article-image">
                                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Understanding Contract Law">
                                </div>
                                <div class="related-article-content">
                                    <h5>Understanding Contract Law in Kenya</h5>
                                    <span class="related-article-date">Dec 15, 2025</span>
                                </div>
                            </a>
                            <a href="{{ route('blogs.estate-planning-essentials-kenya') }}" class="related-article-item">
                                <div class="related-article-image">
                                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Estate Planning">
                                </div>
                                <div class="related-article-content">
                                    <h5>Estate Planning Essentials</h5>
                                    <span class="related-article-date">Dec 5, 2025</span>
                                </div>
                            </a>
                            <a href="{{ route('blogs.employment-rights-kenya-2025') }}" class="related-article-item">
                                <div class="related-article-image">
                                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Employment Rights">
                                </div>
                                <div class="related-article-content">
                                    <h5>Employment Rights in Kenya 2025</h5>
                                    <span class="related-article-date">Nov 28, 2025</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- CTA Sidebar -->
                    <div class="article-sidebar-cta">
                        <div class="sidebar-cta-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>Need Legal Assistance?</h4>
                        <p>Schedule a consultation with our experts today.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-block">
                            <span>Get Started</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="article-newsletter-section">
        <div class="bg-pattern"></div>
        <div class="article-newsletter-container">
            <div class="newsletter-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2>Stay Updated with Legal Insights</h2>
            <p>Subscribe to our newsletter for the latest legal updates and expert analysis.</p>
            <form class="article-newsletter-form" id="articleNewsletterForm">
                @csrf
                <div class="newsletter-input-group">
                    <input type="email" class="newsletter-email-input" placeholder="Enter your email address" required>
                    <button type="submit" class="newsletter-submit-btn">
                        <span>Subscribe</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <x-footer />
@endsection
