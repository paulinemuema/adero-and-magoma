@extends('layouts.public')

@section('title', 'Legal Blog | Adams & Magoma Advocates')
@section('description', 'Expert legal insights and updates from Adams & Magoma Advocates. Read articles on contract law, family law, estate planning, employment rights, and property registration in Kenya.')
@section('keywords', 'legal blog Kenya, law articles, legal insights, Kenyan law updates, legal advice blog')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => [
    [
      '@type' => 'ListItem',
      'position' => 1,
      'name' => 'Home',
      'item' => route('home')
    ],
    [
      '@type' => 'ListItem',
      'position' => 2,
      'name' => 'Blogs',
      'item' => url()->current()
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Hero Section -->
    <section class="blogs-hero">
        <div class="bg-pattern"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Legal Insights & Updates</div>
            <h1 class="hero-title">Stay <span>Informed</span></h1>
            <p class="hero-subtitle">Expert legal analysis, practical advice, and the latest developments in Kenyan law.</p>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="blogs-filter-section">
        <div class="bg-pattern"></div>
        <div class="blogs-filter-container">
            <!-- Search Bar -->
            <div class="blogs-search-wrapper">
                <div class="blogs-search-box">
                    <i class="fas fa-search blogs-search-icon"></i>
                    <input type="text" class="blogs-search-input" id="blogSearchInput" placeholder="Search articles by keyword, topic, or category...">
                    <button class="blogs-search-btn" type="button" id="blogSearchBtn">
                        <span>Search</span>
                    </button>
                </div>
            </div>

            <!-- Category Filters -->
            <div class="blogs-categories">
                <button class="blog-category-btn active" data-category="all">
                    <span>All Articles</span>
                </button>
                <button class="blog-category-btn" data-category="corporate">
                    <span>Corporate Law</span>
                </button>
                <button class="blog-category-btn" data-category="family">
                    <span>Family Law</span>
                </button>
                <button class="blog-category-btn" data-category="estate">
                    <span>Estate Planning</span>
                </button>
                <button class="blog-category-btn" data-category="employment">
                    <span>Employment Law</span>
                </button>
                <button class="blog-category-btn" data-category="real-estate">
                    <span>Real Estate</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="section blogs-content-section">
        <div class="bg-pattern"></div>
        <div class="blogs-container">
            <!-- Featured Blog Post -->
            <div class="blog-featured fade-in">
                <div class="blog-featured-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Understanding Contract Law in Kenya">
                    <div class="blog-featured-badge">
                        <i class="fas fa-star"></i>
                        <span>Featured Article</span>
                    </div>
                </div>
                <div class="blog-featured-content">
                    <div class="blog-featured-meta">
                        <span class="blog-category-tag" style="background: var(--primary);">Corporate Law</span>
                        <span class="blog-date">December 15, 2025</span>
                        <span class="blog-read-time">5 min read</span>
                    </div>
                    <h2 class="blog-featured-title">
                        <a href="{{ route('blogs.understanding-contract-law-kenya') }}">Understanding Contract Law in Kenya: Essential Guide for Businesses</a>
                    </h2>
                    <p class="blog-featured-excerpt">Contracts form the backbone of business relationships in Kenya. Understanding the legal framework, key provisions, and common pitfalls can protect your business interests and ensure successful commercial transactions. This comprehensive guide covers everything you need to know about contract law in Kenya.</p>
                    <a href="{{ route('blogs.understanding-contract-law-kenya') }}" class="btn btn-primary blog-featured-btn">
                        <span>Read Full Article</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Blog Grid -->
            <div class="blogs-grid">
                <!-- Blog Post 1 -->
                <article class="blog-card fade-in" data-category="family">
                    <div class="blog-card-image">
                        <a href="{{ route('blogs.navigating-divorce-process-kenya') }}">
                            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Navigating the Divorce Process in Kenya">
                        </a>
                        <div class="blog-card-overlay">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-category-tag">Family Law</span>
                            <span class="blog-date">Dec 10, 2025</span>
                        </div>
                        <h3 class="blog-card-title">
                            <a href="{{ route('blogs.navigating-divorce-process-kenya') }}">Navigating the Divorce Process in Kenya: A Complete Guide</a>
                        </h3>
                        <p class="blog-card-excerpt">Divorce can be emotionally challenging and legally complex. Understanding the process, requirements, and your rights can help you navigate this difficult time with confidence.</p>
                        <div class="blog-card-footer">
                            <span class="blog-read-time">
                                <i class="far fa-clock"></i>
                                4 min read
                            </span>
                            <a href="{{ route('blogs.navigating-divorce-process-kenya') }}" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="blog-card fade-in" data-category="estate">
                    <div class="blog-card-image">
                        <a href="{{ route('blogs.estate-planning-essentials-kenya') }}">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Estate Planning Essentials">
                        </a>
                        <div class="blog-card-overlay">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-category-tag">Estate Planning</span>
                            <span class="blog-date">Dec 5, 2025</span>
                        </div>
                        <h3 class="blog-card-title">
                            <a href="{{ route('blogs.estate-planning-essentials-kenya') }}">Estate Planning Essentials: Protecting Your Family's Future</a>
                        </h3>
                        <p class="blog-card-excerpt">Estate planning goes beyond writing a will. Learn about trusts, powers of attorney, and other essential tools to protect your family's future and ensure your wishes are carried out.</p>
                        <div class="blog-card-footer">
                            <span class="blog-read-time">
                                <i class="far fa-clock"></i>
                                6 min read
                            </span>
                            <a href="{{ route('blogs.estate-planning-essentials-kenya') }}" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="blog-card fade-in" data-category="employment">
                    <div class="blog-card-image">
                        <a href="{{ route('blogs.employment-rights-kenya-2025') }}">
                            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Employment Rights in Kenya">
                        </a>
                        <div class="blog-card-overlay">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-category-tag">Employment Law</span>
                            <span class="blog-date">Nov 28, 2025</span>
                        </div>
                        <h3 class="blog-card-title">
                            <a href="{{ route('blogs.employment-rights-kenya-2025') }}">Employment Rights in Kenya 2025: What You Need to Know</a>
                        </h3>
                        <p class="blog-card-excerpt">Recent changes to employment law in Kenya affect both employers and employees. Stay informed about your rights, obligations, and the latest legal developments.</p>
                        <div class="blog-card-footer">
                            <span class="blog-read-time">
                                <i class="far fa-clock"></i>
                                4 min read
                            </span>
                            <a href="{{ route('blogs.employment-rights-kenya-2025') }}" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 4 -->
                <article class="blog-card fade-in" data-category="real-estate">
                    <div class="blog-card-image">
                        <a href="{{ route('blogs.property-registration-process-kenya') }}">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Property Registration Process">
                        </a>
                        <div class="blog-card-overlay">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <span class="blog-category-tag">Real Estate Law</span>
                            <span class="blog-date">Nov 20, 2025</span>
                        </div>
                        <h3 class="blog-card-title">
                            <a href="{{ route('blogs.property-registration-process-kenya') }}">Property Registration Process in Kenya: Complete Guide</a>
                        </h3>
                        <p class="blog-card-excerpt">Buying property in Kenya involves several legal steps. This guide walks you through the registration process, required documents, and common challenges to avoid.</p>
                        <div class="blog-card-footer">
                            <span class="blog-read-time">
                                <i class="far fa-clock"></i>
                                5 min read
                            </span>
                            <a href="{{ route('blogs.property-registration-process-kenya') }}" class="blog-read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="blogs-pagination">
                <button class="pagination-btn pagination-prev" disabled>
                    <i class="fas fa-chevron-left"></i>
                    <span>Previous</span>
                </button>
                <div class="pagination-numbers">
                    <button class="pagination-number active">1</button>
                    <button class="pagination-number">2</button>
                    <button class="pagination-number">3</button>
                    <span class="pagination-ellipsis">...</span>
                    <button class="pagination-number">10</button>
                </div>
                <button class="pagination-btn pagination-next">
                    <span>Next</span>
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter CTA Section -->
    <section class="section blogs-newsletter-section">
        <div class="bg-pattern"></div>
        <div class="blogs-newsletter-container">
            <div class="blogs-newsletter-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2 class="blogs-newsletter-title">Stay Updated with Legal Insights</h2>
            <p class="blogs-newsletter-description">Subscribe to our newsletter and receive expert legal advice, industry updates, and practical tips delivered to your inbox.</p>
            <form class="blogs-newsletter-form" id="blogsNewsletterForm">
                @csrf
                <div class="newsletter-input-wrapper">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
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
