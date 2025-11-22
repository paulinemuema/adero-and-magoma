@extends('layouts.public')

@section('title', 'Estate Planning Essentials in Kenya | Adams & Magoma Advocates')
@section('description', 'Essential guide to estate planning in Kenya. Learn about wills, trusts, probate, and succession planning. Protect your legacy with expert advice from Adams & Magoma Advocates.')
@section('keywords', 'estate planning Kenya, wills Kenya, trusts Kenya, probate Kenya, succession planning, estate lawyer Nairobi')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "headline": "Estate Planning Essentials in Kenya",
      "description": "Essential guide to estate planning in Kenya covering wills, trusts, probate, and succession planning strategies.",
      "image": "https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
      "datePublished": "2025-12-05",
      "dateModified": "2025-12-05",
      "author": {
        "@type": "Person",
        "name": "Magoma",
        "jobTitle": "Senior Partner & Estate Planning Specialist"
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
      "articleSection": "Estate Planning",
      "keywords": "estate planning, wills, trusts, probate, succession"
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
          "name": "Estate Planning Essentials in Kenya",
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
                    <li class="breadcrumb-item active">Estate Planning Essentials in Kenya</li>
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
                    <span class="article-category-badge">Estate Planning</span>
                    <span class="article-date">December 5, 2025</span>
                    <span class="article-read-time">
                        <i class="far fa-clock"></i>
                        7 min read
                    </span>
                </div>
                <h1 class="article-title">Estate Planning Essentials in Kenya: Protecting Your Legacy</h1>
                <p class="article-subtitle">Proper estate planning ensures your assets are distributed according to your wishes and provides security for your loved ones after you're gone.</p>
                
                <div class="article-author-header">
                    <div class="author-avatar-small">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="David Kiprop">
                    </div>
                    <div class="author-info-small">
                        <h4 class="author-name">David Kiprop</h4>
                        <p class="author-role">Senior Associate & Estate Planning Specialist</p>
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
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Estate Planning in Kenya">
                    </div>

                    <div class="article-body">
                        <p class="article-lead">
                            Estate planning is about more than just writing a will. It's about creating a comprehensive strategy to protect your assets, minimize taxes, and ensure your loved ones are cared for according to your wishes. In Kenya, proper estate planning can help avoid family disputes, reduce estate duty, and provide financial security for your beneficiaries.
                        </p>

                        <h2 id="why-estate-planning">Why Estate Planning Matters in Kenya</h2>
                        <p>
                            Without proper estate planning, your assets may be distributed according to intestate succession laws, which might not align with your wishes. Key benefits of estate planning include:
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4>Asset Protection</h4>
                                <p>Safeguard your wealth from creditors and disputes</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4>Family Security</h4>
                                <p>Ensure your loved ones are financially protected</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h4>Avoid Disputes</h4>
                                <p>Prevent costly family conflicts over inheritance</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <h4>Tax Optimization</h4>
                                <p>Minimize estate duty and other taxes</p>
                            </div>
                        </div>

                        <h2 id="essential-documents">Essential Estate Planning Documents</h2>
                        <p>
                            A comprehensive estate plan includes several key documents:
                        </p>

                        <div class="article-info-box">
                            <h3>Last Will and Testament</h3>
                            <p>A legal document that specifies how your assets should be distributed after your death. In Kenya, wills must be in writing and witnessed by two independent witnesses.</p>
                            <ul>
                                <li>Appoints executors to administer your estate</li>
                                <li>Names guardians for minor children</li>
                                <li>Specifies beneficiaries and their shares</li>
                                <li>Can include specific bequests</li>
                            </ul>
                        </div>

                        <div class="article-info-box">
                            <h3>Trust Deed</h3>
                            <p>A trust allows you to transfer assets to trustees who manage them for beneficiaries. Trusts can help avoid probate, provide asset protection, and offer tax benefits.</p>
                            <ul>
                                <li>Provides privacy and avoids public probate</li>
                                <li>Can protect assets from creditors</li>
                                <li>Allows for professional management of assets</li>
                                <li>Can provide for minor or disabled beneficiaries</li>
                            </ul>
                        </div>

                        <div class="article-info-box">
                            <h3>Power of Attorney</h3>
                            <p>Grants someone the authority to make financial and legal decisions on your behalf if you become incapacitated.</p>
                            <ul>
                                <li>Can be general or limited in scope</li>
                                <li>Springing power activates upon incapacity</li>
                                <li>Allows for property management</li>
                                <li>Can handle business affairs</li>
                            </ul>
                        </div>

                        <h2 id="estate-duty">Estate Duty in Kenya</h2>
                        <p>
                            Kenya imposes estate duty on the net value of an estate exceeding KSh 1 million. Understanding the tax implications can help you plan effectively:
                        </p>

                        <div class="article-info-box">
                            <h3>Estate Duty Rates (2025)</h3>
                            <ul>
                                <li><strong>1,000,001 - 5,000,000:</strong> 0.6%</li>
                                <li><strong>5,000,001 - 10,000,000:</strong> 1.2%</li>
                                <li><strong>10,000,001 - 20,000,000:</strong> 2.4%</li>
                                <li><strong>Above 20,000,000:</strong> 4.8%</li>
                            </ul>
                        </div>

                        <h2 id="common-mistakes">Common Estate Planning Mistakes to Avoid</h2>
                        <p>
                            Avoid these common pitfalls in estate planning:
                        </p>

                        <ul class="article-list">
                            <li><strong>Not updating documents:</strong> Life changes require estate plan updates</li>
                            <li><strong>Choosing wrong executors:</strong> Select trustworthy and capable individuals</li>
                            <li><strong>Ignoring tax implications:</strong> Estate duty can significantly reduce inheritance</li>
                            <li><strong>Not considering family dynamics:</strong> Plan for potential disputes</li>
                            <li><strong>Keeping plans secret:</strong> Discuss your plans with family</li>
                        </ul>

                        <h2 id="getting-started">Getting Started with Estate Planning</h2>
                        <p>
                            Estate planning doesn't have to be overwhelming. Start with these essential steps:
                        </p>

                        <ol class="article-numbered-list">
                            <li><strong>Take inventory of your assets:</strong> Make a comprehensive list of all your property, investments, and valuables.</li>
                            <li><strong>Identify your beneficiaries:</strong> Decide who should inherit your assets and in what proportions.</li>
                            <li><strong>Choose executors and trustees:</strong> Select reliable individuals or institutions to manage your estate.</li>
                            <li><strong>Consider tax implications:</strong> Plan to minimize estate duty and other taxes.</li>
                            <li><strong>Consult professionals:</strong> Work with experienced estate planning attorneys.</li>
                            <li><strong>Review regularly:</strong> Update your plan as circumstances change.</li>
                        </ol>

                        <div class="article-key-takeaways">
                            <div class="key-takeaways-header">
                                <i class="fas fa-lightbulb"></i>
                                <h3>Key Takeaways</h3>
                            </div>
                            <ul>
                                <li>Estate planning protects your legacy and loved ones</li>
                                <li>A will is essential but not the only document needed</li>
                                <li>Trusts offer privacy and asset protection benefits</li>
                                <li>Estate duty can significantly impact inheritance</li>
                                <li>Regular reviews ensure your plan remains current</li>
                                <li>Professional guidance is crucial for comprehensive planning</li>
                            </ul>
                        </div>

                        <h2 id="need-assistance">Need Estate Planning Assistance?</h2>
                        <p>
                            Estate planning is too important to leave to chance. Our estate planning specialists can help you create a comprehensive plan that protects your assets and ensures your wishes are carried out. We offer:
                        </p>

                        <ul class="article-list">
                            <li>Will drafting and execution</li>
                            <li>Trust establishment and administration</li>
                            <li>Estate duty planning and optimization</li>
                            <li>Power of attorney documentation</li>
                            <li>Estate administration services</li>
                            <li>Ongoing estate plan reviews</li>
                        </ul>

                        <div class="article-cta-box">
                            <div class="cta-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Secure Your Legacy Today</h3>
                            <p>Don't let intestate succession laws decide your family's future.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <span>Schedule Estate Planning Consultation</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="article-disclaimer">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <strong>Legal Disclaimer:</strong> This article provides general information about estate planning in Kenya and is not intended as legal or tax advice. Estate planning laws and tax rates can change, and individual circumstances vary. Please consult with qualified legal and tax professionals for advice specific to your situation.
                            </div>
                        </div>
                    </div>

                    <!-- Article Tags -->
                    <div class="article-tags-section">
                        <h4>Tags:</h4>
                        <div class="article-tags">
                            <a href="{{ route('blogs') }}?category=estate" class="article-tag">Estate Planning</a>
                            <a href="{{ route('blogs') }}?category=estate" class="article-tag">Wills</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Trusts</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Estate Duty</a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="article-author-bio">
                        <div class="author-bio-avatar">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=120&h=120&q=80" alt="David Kiprop">
                        </div>
                        <div class="author-bio-content">
                            <h4>About David Kiprop</h4>
                            <p>
                                David Kiprop is a Senior Associate at Adams & Magoma Advocates specializing in estate planning, wills, trusts, and estate administration. He has helped numerous clients protect their legacies and minimize tax liabilities.
                            </p>
                            <div class="author-credentials">
                                <span class="credential-badge">LLB (University of Nairobi)</span>
                                <span class="credential-badge">Certified Estate Planner</span>
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
                        <a href="{{ route('blogs.employment-rights-kenya-2025') }}" class="article-nav-item article-nav-next">
                            <div class="nav-content">
                                <span class="nav-label">Next Article</span>
                                <h5>Employment Rights in Kenya 2025</h5>
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
                            <a href="#why-estate-planning" class="toc-link">Why Estate Planning Matters</a>
                            <a href="#essential-documents" class="toc-link">Essential Estate Planning Documents</a>
                            <a href="#estate-duty" class="toc-link">Estate Duty in Kenya</a>
                            <a href="#common-mistakes" class="toc-link">Common Estate Planning Mistakes</a>
                            <a href="#getting-started" class="toc-link">Getting Started with Estate Planning</a>
                            <a href="#need-assistance" class="toc-link">Need Estate Planning Assistance?</a>
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
                            <a href="{{ route('blogs.navigating-divorce-process-kenya') }}" class="related-article-item">
                                <div class="related-article-image">
                                    <img src="https://images.unsplash.com/photo-1590402494756-6d6b18b7b8b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Navigating Divorce">
                                </div>
                                <div class="related-article-content">
                                    <h5>Navigating the Divorce Process in Kenya</h5>
                                    <span class="related-article-date">Dec 10, 2025</span>
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
