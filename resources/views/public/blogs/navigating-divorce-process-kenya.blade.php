@extends('layouts.public')

@section('title', 'Navigating the Divorce Process in Kenya | Adams & Magoma Advocates')
@section('description', 'Complete guide to divorce proceedings in Kenya. Learn about divorce laws, procedures, child custody, alimony, and property division. Expert family law advice from Adams & Magoma Advocates.')
@section('keywords', 'divorce Kenya, divorce process Kenya, family law Kenya, child custody Kenya, divorce lawyer Nairobi')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "headline": "Navigating the Divorce Process in Kenya",
      "description": "Complete guide to divorce proceedings in Kenya covering laws, procedures, child custody, and property division.",
      "image": "https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
      "datePublished": "2025-12-10",
      "dateModified": "2025-12-10",
      "author": {
        "@type": "Person",
        "name": "Magoma",
        "jobTitle": "Managing Partner & Family Law Specialist"
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
      "articleSection": "Family Law",
      "keywords": "divorce Kenya, family law, child custody, property division"
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
          "name": "Navigating the Divorce Process in Kenya",
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
                    <li class="breadcrumb-item active">Navigating the Divorce Process in Kenya</li>
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
                    <span class="article-category-badge">Family Law</span>
                    <span class="article-date">December 10, 2025</span>
                    <span class="article-read-time">
                        <i class="far fa-clock"></i>
                        6 min read
                    </span>
                </div>
                <h1 class="article-title">Navigating the Divorce Process in Kenya: A Comprehensive Guide</h1>
                <p class="article-subtitle">Divorce can be emotionally challenging and legally complex. Understanding the process and your rights is crucial for a fair and efficient resolution.</p>
                
                <div class="article-author-header">
                    <div class="author-avatar-small">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Magoma Wanjiku">
                    </div>
                    <div class="author-info-small">
                        <h4 class="author-name">Magoma Wanjiku</h4>
                        <p class="author-role">Senior Partner & Family Law Specialist</p>
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
                        <img src="https://images.unsplash.com/photo-1590402494756-6d6b18b7b8b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Divorce Process in Kenya">
                    </div>

                    <div class="article-body">
                        <p class="article-lead">
                            Divorce is one of life's most challenging experiences, both emotionally and legally. In Kenya, the divorce process is governed by the Marriage Act, Matrimonial Causes Act, and other relevant legislation. Understanding the legal framework and procedural requirements can help you navigate this difficult time more effectively.
                        </p>

                        <h2 id="grounds-for-divorce">Grounds for Divorce in Kenya</h2>
                        <p>
                            Under Kenyan law, divorce can be granted on several grounds. The most common include:
                        </p>

                        <div class="article-info-box">
                            <h3>Fault-Based Grounds</h3>
                            <ul>
                                <li>Adultery</li>
                                <li>Cruelty or physical abuse</li>
                                <li>Desertion for at least 3 years</li>
                                <li>Insanity</li>
                            </ul>
                        </div>

                        <div class="article-info-box">
                            <h3>No-Fault Grounds</h3>
                            <ul>
                                <li>Irretrievable breakdown of marriage</li>
                                <li>Mutual consent (after 2 years separation)</li>
                                <li>Judicial separation</li>
                            </ul>
                        </div>

                        <h2 id="divorce-process">The Divorce Process Step by Step</h2>
                        <p>
                            The divorce process in Kenya follows a structured legal procedure:
                        </p>

                        <ol class="article-numbered-list">
                            <li><strong>Filing the Petition:</strong> The process begins with filing a divorce petition at the High Court. The petitioner must provide details of the marriage, grounds for divorce, and desired relief.</li>
                            <li><strong>Service of Petition:</strong> The petition is served to the respondent, who has 14 days to file a response (answer) to the petition.</li>
                            <li><strong>Court Proceedings:</strong> If the matter is contested, it proceeds to hearing. The court may attempt reconciliation or refer parties to mediation.</li>
                            <li><strong>Decree Nisi:</strong> If the court finds grounds for divorce, it issues a decree nisi, which is not yet final.</li>
                            <li><strong>Decree Absolute:</strong> After 3 months (unless children are involved), the decree nisi becomes absolute, finalizing the divorce.</li>
                        </ol>

                        <h2 id="property-division">Division of Property and Assets</h2>
                        <p>
                            One of the most contentious aspects of divorce is the division of matrimonial property. Kenyan courts consider several factors:
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <h4>Financial Contributions</h4>
                                <p>Both financial and non-financial contributions are considered.</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <h4>Duration of Marriage</h4>
                                <p>Longer marriages may result in more equal division.</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-child"></i>
                                </div>
                                <h4>Children's Needs</h4>
                                <p>The best interests of children take priority.</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <h4>Future Earning Capacity</h4>
                                <p>Courts consider each party's ability to support themselves.</p>
                            </div>
                        </div>

                        <h2 id="child-custody">Child Custody and Maintenance</h2>
                        <p>
                            When children are involved, the court's primary consideration is the best interests of the child. Key aspects include:
                        </p>

                        <ul class="article-list">
                            <li><strong>Sole custody:</strong> One parent has primary responsibility</li>
                            <li><strong>Joint custody:</strong> Both parents share decision-making</li>
                            <li><strong>Access/visitation rights:</strong> Non-custodial parent's rights to see the child</li>
                            <li><strong>Child maintenance:</strong> Financial support for children's needs</li>
                        </ul>

                        <h2 id="alternative-resolution">Alternative Dispute Resolution</h2>
                        <p>
                            Many couples opt for alternative dispute resolution methods to avoid the stress and cost of litigation:
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h4>Mediation</h4>
                                <p>Neutral third party helps couples reach agreement</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h4>Arbitration</h4>
                                <p>Private judge makes binding decision</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4>Collaborative Law</h4>
                                <p>Both parties represented by lawyers committed to settlement</p>
                            </div>
                        </div>

                        <div class="article-key-takeaways">
                            <div class="key-takeaways-header">
                                <i class="fas fa-lightbulb"></i>
                                <h3>Key Takeaways</h3>
                            </div>
                            <ul>
                                <li>Divorce can be granted on fault or no-fault grounds</li>
                                <li>The process typically takes 6-12 months or longer</li>
                                <li>Children's best interests guide custody decisions</li>
                                <li>Alternative dispute resolution can be faster and less costly</li>
                                <li>Professional legal and emotional support is essential</li>
                            </ul>
                        </div>

                        <h2 id="need-assistance">Need Family Law Assistance?</h2>
                        <p>
                            Divorce proceedings can be complex and emotionally draining. Our family law specialists at Adams & Magoma Advocates can provide:
                        </p>

                        <ul class="article-list">
                            <li>Comprehensive legal representation</li>
                            <li>Mediation and negotiation services</li>
                            <li>Child custody and support advice</li>
                            <li>Property division guidance</li>
                            <li>Emotional support referrals</li>
                        </ul>

                        <div class="article-cta-box">
                            <div class="cta-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Get Expert Family Law Support</h3>
                            <p>Navigate your divorce with confidence and clarity.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <span>Schedule Consultation</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="article-disclaimer">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <strong>Legal Disclaimer:</strong> This article provides general information about divorce law in Kenya and is not intended as legal advice. Family law matters are highly individual, and you should consult with qualified legal professionals for advice specific to your situation.
                            </div>
                        </div>
                    </div>

                    <!-- Article Tags -->
                    <div class="article-tags-section">
                        <h4>Tags:</h4>
                        <div class="article-tags">
                            <a href="{{ route('blogs') }}?category=family" class="article-tag">Divorce</a>
                            <a href="{{ route('blogs') }}?category=family" class="article-tag">Family Law</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Child Custody</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Kenyan Law</a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="article-author-bio">
                        <div class="author-bio-avatar">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=120&h=120&q=80" alt="Magoma Wanjiku">
                        </div>
                        <div class="author-bio-content">
                            <h4>About Magoma Wanjiku</h4>
                            <p>
                                Magoma Wanjiku is a Senior Partner at Adams & Magoma Advocates with extensive experience in family law, including divorce proceedings, child custody matters, and matrimonial property disputes.
                            </p>
                            <div class="author-credentials">
                                <span class="credential-badge">LLB (University of Nairobi)</span>
                                <span class="credential-badge">Certified Family Law Mediator</span>
                            </div>
                        </div>
                    </div>

                    <!-- Article Navigation -->
                    <div class="article-navigation">
                        <a href="{{ route('blogs.understanding-contract-law-kenya') }}" class="article-nav-item article-nav-prev">
                            <div class="nav-icon">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="nav-content">
                                <span class="nav-label">Previous Article</span>
                                <h5>Understanding Contract Law in Kenya</h5>
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
                            <a href="#grounds-for-divorce" class="toc-link">Grounds for Divorce in Kenya</a>
                            <a href="#divorce-process" class="toc-link">The Divorce Process Step by Step</a>
                            <a href="#property-division" class="toc-link">Division of Property and Assets</a>
                            <a href="#child-custody" class="toc-link">Child Custody and Maintenance</a>
                            <a href="#alternative-resolution" class="toc-link">Alternative Dispute Resolution</a>
                            <a href="#need-assistance" class="toc-link">Need Family Law Assistance?</a>
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
