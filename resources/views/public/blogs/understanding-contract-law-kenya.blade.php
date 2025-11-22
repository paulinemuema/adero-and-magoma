@extends('layouts.public')

@section('title', 'Understanding Contract Law in Kenya | Adams & Magoma Advocates')
@section('description', 'Comprehensive guide to contract law in Kenya. Learn about essential elements, types of contracts, common disputes, and how to protect your business interests. Expert legal advice from Adams & Magoma Advocates.')
@section('keywords', 'contract law Kenya, business contracts, contract disputes Kenya, legal contracts, contract law guide, Kenyan contract law')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'Article',
      'headline' => 'Understanding Contract Law in Kenya: Essential Guide for Businesses',
      'description' => 'Comprehensive guide to contract law in Kenya covering essential elements, types of contracts, common disputes, and business protection strategies.',
      'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
      'datePublished' => '2025-12-15',
      'dateModified' => '2025-12-15',
      'author' => [
        '@type' => 'Person',
        'name' => 'Brian Adams Adero',
        'jobTitle' => 'Senior Partner & Corporate Law Specialist'
      ],
      'publisher' => [
        '@type' => 'Organization',
        'name' => 'Adams & Magoma Advocates',
        'logo' => [
          '@type' => 'ImageObject',
          'url' => asset('assets/images/logo_law.jpg')
        ]
      ],
      'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id' => url()->current()
      ],
      'articleSection' => 'Corporate Law',
      'keywords' => 'contract law Kenya, business contracts, contract disputes, legal contracts',
      'wordCount' => '1200',
      'timeRequired' => 'PT5M'
    ],
    [
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
          'item' => route('blogs')
        ],
        [
          '@type' => 'ListItem',
          'position' => 3,
          'name' => 'Understanding Contract Law in Kenya',
          'item' => url()->current()
        ]
      ]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
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
                    <li class="breadcrumb-item active">Understanding Contract Law in Kenya</li>
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
                    <span class="article-category-badge">Corporate Law</span>
                    <span class="article-date">December 15, 2025</span>
                    <span class="article-read-time">
                        <i class="far fa-clock"></i>
                        5 min read
                    </span>
                </div>
                <h1 class="article-title">Understanding Contract Law in Kenya: Essential Guide for Businesses</h1>
                <p class="article-subtitle">Contracts form the backbone of business relationships in Kenya. Understanding the legal framework governing contracts is crucial for protecting your interests and ensuring enforceable agreements.</p>
                
                <div class="article-author-header">
                    <div class="author-avatar-small">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Brian Adams Adero">
                    </div>
                    <div class="author-info-small">
                        <h4 class="author-name">Brian Adams Adero</h4>
                        <p class="author-role">Senior Partner & Corporate Law Specialist</p>
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
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Contract Law in Kenya">
                    </div>

                    <div class="article-body">
                        <p class="article-lead">
                            In the dynamic business environment of Kenya, contracts serve as the foundation of commercial relationships. Whether you're entering into a supply agreement, service contract, or partnership arrangement, understanding the legal principles governing contracts is essential for protecting your business interests.
                        </p>

                        <h2 id="what-is-contract">What is a Contract Under Kenyan Law?</h2>
                        <p>
                            According to the Contract Act (Chapter 23) of the Laws of Kenya, a contract is an agreement between two or more parties that creates legally binding obligations. For a contract to be valid, it must satisfy several essential elements:
                        </p>

                        <ul class="article-list">
                            <li><strong>Offer and Acceptance:</strong> One party must make a clear offer, and the other must accept it unconditionally.</li>
                            <li><strong>Consideration:</strong> Something of value must be exchanged between the parties.</li>
                            <li><strong>Legal Capacity:</strong> Parties must have the legal capacity to enter into contracts.</li>
                            <li><strong>Free Consent:</strong> Agreement must be entered into voluntarily, without coercion or undue influence.</li>
                            <li><strong>Lawful Object:</strong> The contract's purpose must not be illegal or contrary to public policy.</li>
                        </ul>

                        <h2 id="types-of-contracts">Types of Contracts in Kenya</h2>
                        <div class="article-info-box">
                            <h3>Written vs Oral Contracts</h3>
                            <p>While oral contracts are generally enforceable in Kenya, certain types of contracts must be in writing to be valid:</p>
                            <ul>
                                <li>Contracts for sale of land</li>
                                <li>Contracts that cannot be performed within one year</li>
                                <li>Surety agreements</li>
                                <li>Contracts governed by specific legislation</li>
                            </ul>
                        </div>

                        <h2 id="common-disputes">Common Contract Disputes</h2>
                        <p>
                            Despite the best intentions, contract disputes can arise. Common issues include:
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <h4>Breach of Contract</h4>
                                <p>Failure to perform contractual obligations as agreed.</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h4>Misrepresentation</h4>
                                <p>False statements that induce the contract.</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-hand-paper"></i>
                                </div>
                                <h4>Duress or Undue Influence</h4>
                                <p>Pressure that prevents free consent.</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-ban"></i>
                                </div>
                                <h4>Frustration</h4>
                                <p>Events that make performance impossible.</p>
                            </div>
                        </div>

                        <h2 id="protecting-interests">Protecting Your Business Interests</h2>
                        <p>
                            To minimize contract-related risks, consider implementing these best practices:
                        </p>

                        <ol class="article-numbered-list">
                            <li><strong>Clear Terms:</strong> Ensure all terms are clearly defined and unambiguous.</li>
                            <li><strong>Professional Review:</strong> Have all contracts reviewed by legal professionals.</li>
                            <li><strong>Dispute Resolution:</strong> Include clear dispute resolution mechanisms.</li>
                            <li><strong>Regular Reviews:</strong> Periodically review and update contracts.</li>
                            <li><strong>Documentation:</strong> Maintain thorough records of all communications.</li>
                        </ol>

                        <div class="article-key-takeaways">
                            <div class="key-takeaways-header">
                                <i class="fas fa-lightbulb"></i>
                                <h3>Key Takeaways</h3>
                            </div>
                            <ul>
                                <li>Contracts must satisfy essential legal elements to be enforceable</li>
                                <li>Certain contracts must be in writing to be valid</li>
                                <li>Professional legal review is crucial for business contracts</li>
                                <li>Clear dispute resolution mechanisms prevent costly litigation</li>
                                <li>Regular contract reviews protect ongoing business relationships</li>
                            </ul>
                        </div>

                        <h2 id="need-assistance">Need Contract Law Assistance?</h2>
                        <p>
                            Contract disputes can be complex and costly. Our experienced team at Adams & Magoma Advocates specializes in contract law and can help you:
                        </p>

                        <ul class="article-list">
                            <li>Draft and review contracts</li>
                            <li>Resolve contract disputes</li>
                            <li>Enforce contract terms</li>
                            <li>Provide ongoing contract management</li>
                        </ul>

                        <div class="article-cta-box">
                            <div class="cta-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Contact Our Contract Law Experts</h3>
                            <p>Get professional advice on your contract matters today.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <span>Schedule Consultation</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="article-disclaimer">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <strong>Legal Disclaimer:</strong> This article provides general information about contract law in Kenya and is not intended as legal advice. For specific legal matters, please consult with qualified legal professionals.
                            </div>
                        </div>
                    </div>

                    <!-- Article Tags -->
                    <div class="article-tags-section">
                        <h4>Tags:</h4>
                        <div class="article-tags">
                            <a href="{{ route('blogs') }}?category=corporate" class="article-tag">Contract Law</a>
                            <a href="{{ route('blogs') }}?category=corporate" class="article-tag">Business Law</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Kenyan Law</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Legal Guide</a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="article-author-bio">
                        <div class="author-bio-avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=120&h=120&q=80" alt="Brian Adams Adero">
                        </div>
                        <div class="author-bio-content">
                            <h4>About Brian Adams Adero</h4>
                            <p>
                                Brian Adams Adero is a Senior Partner at Adams & Magoma Advocates with expertise in corporate and commercial law. He specializes in contract law, corporate governance, and dispute resolution.
                            </p>
                            <div class="author-credentials">
                                <span class="credential-badge">LLB (University of Nairobi)</span>
                                <span class="credential-badge">Advocate of the High Court</span>
                            </div>
                        </div>
                    </div>

                    <!-- Article Navigation -->
                    <div class="article-navigation">
                        <a href="{{ route('blogs.navigating-divorce-process-kenya') }}" class="article-nav-item article-nav-prev">
                            <div class="nav-icon">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="nav-content">
                                <span class="nav-label">Previous Article</span>
                                <h5>Navigating the Divorce Process in Kenya</h5>
                            </div>
                        </a>
                        <a href="{{ route('blogs.estate-planning-essentials-kenya') }}" class="article-nav-item article-nav-next">
                            <div class="nav-content">
                                <span class="nav-label">Next Article</span>
                                <h5>Estate Planning Essentials</h5>
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
                            <a href="#what-is-contract" class="toc-link">What is a Contract Under Kenyan Law?</a>
                            <a href="#types-of-contracts" class="toc-link">Types of Contracts in Kenya</a>
                            <a href="#common-disputes" class="toc-link">Common Contract Disputes</a>
                            <a href="#protecting-interests" class="toc-link">Protecting Your Business Interests</a>
                            <a href="#need-assistance" class="toc-link">Need Contract Law Assistance?</a>
                        </nav>
                    </div>

                    <!-- Related Articles -->
                    <div class="article-related">
                        <h4 class="related-title">
                            <i class="fas fa-book-open"></i>
                            Related Articles
                        </h4>
                        <div class="related-articles-list">
                            <a href="{{ route('blogs.navigating-divorce-process-kenya') }}" class="related-article-item">
                                <div class="related-article-image">
                                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Navigating the Divorce Process">
                                </div>
                                <div class="related-article-content">
                                    <h5>Navigating the Divorce Process in Kenya</h5>
                                    <span class="related-article-date">Dec 10, 2025</span>
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
