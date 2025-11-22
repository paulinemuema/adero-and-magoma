@extends('layouts.public')

@section('title', 'Employment Rights in Kenya 2025 | Adams & Magoma Advocates')
@section('description', 'Complete guide to employment rights in Kenya 2025. Learn about labor laws, employee rights, workplace disputes, and employment contracts. Expert employment law advice from Adams & Magoma Advocates.')
@section('keywords', 'employment rights Kenya, labor law Kenya, employment contracts, workplace disputes, employment lawyer Nairobi')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "headline": "Employment Rights in Kenya 2025",
      "description": "Complete guide to employment rights in Kenya covering labor laws, employee rights, and workplace disputes.",
      "image": "https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80",
      "datePublished": "2025-11-28",
      "dateModified": "2025-11-28",
      "author": {
        "@type": "Person",
        "name": "Magoma",
        "jobTitle": "Partner & Employment Law Specialist"
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
      "articleSection": "Employment Law",
      "keywords": "employment rights, labor law, employment contracts, workplace disputes"
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
          "name": "Employment Rights in Kenya 2025",
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
                    <li class="breadcrumb-item active">Employment Rights in Kenya 2025</li>
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
                    <span class="article-category-badge">Employment Law</span>
                    <span class="article-date">November 28, 2025</span>
                    <span class="article-read-time">
                        <i class="far fa-clock"></i>
                        8 min read
                    </span>
                </div>
                <h1 class="article-title">Employment Rights in Kenya 2025: What Every Worker Should Know</h1>
                <p class="article-subtitle">Understanding your employment rights is crucial in today's dynamic workplace. From minimum wage to workplace safety, here's what Kenyan workers need to know in 2025.</p>
                
                <div class="article-author-header">
                    <div class="author-avatar-small">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Sarah Njoroge">
                    </div>
                    <div class="author-info-small">
                        <h4 class="author-name">Sarah Njoroge</h4>
                        <p class="author-role">Associate & Employment Law Specialist</p>
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
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Employment Rights in Kenya">
                    </div>

                    <div class="article-body">
                        <p class="article-lead">
                            Kenya's employment landscape continues to evolve with new legislation, court decisions, and changing workplace dynamics. Whether you're an employee, employer, or job seeker, understanding your rights and obligations is essential for fair and productive working relationships. This comprehensive guide covers the key employment rights and protections available to Kenyan workers in 2025.
                        </p>

                        <h2 id="minimum-wage">Minimum Wage and Remuneration</h2>
                        <p>
                            The Employment Act requires employers to pay wages on time and provide payslips. Workers are also entitled to:
                        </p>

                        <div class="article-info-box">
                            <h3>2025 Minimum Wage Rates</h3>
                            <ul>
                                <li><strong>Nairobi Metropolitan Area:</strong> KSh 20,200 per month (approximately KSh 674 per day)</li>
                                <li><strong>Other Areas:</strong> KSh 16,160 per month (approximately KSh 539 per day)</li>
                            </ul>
                        </div>

                        <ul class="article-list">
                            <li><strong>Overtime pay:</strong> 1.5 times normal rate for work beyond 8 hours per day or 48 hours per week</li>
                            <li><strong>Public holiday pay:</strong> Double time for work on public holidays</li>
                            <li><strong>Night shift allowance:</strong> Additional compensation for night work</li>
                            <li><strong>Annual leave:</strong> 21 working days per year with full pay</li>
                            <li><strong>Sick leave:</strong> Up to 30 days per year with medical certificate</li>
                        </ul>

                        <h2 id="workplace-safety">Workplace Safety and Health</h2>
                        <p>
                            The Occupational Safety and Health Act (OSHA) 2007 establishes the right to a safe working environment. Key provisions include:
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <h4>Safe Equipment</h4>
                                <p>Employers must provide necessary safety equipment and ensure regular maintenance</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <h4>Medical Care</h4>
                                <p>Access to first aid and medical treatment for work-related injuries</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <h4>Hazard Reporting</h4>
                                <p>Right to report unsafe conditions without retaliation</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4>Safety Committees</h4>
                                <p>Worker participation in safety committees for larger workplaces</p>
                            </div>
                        </div>

                        <h2 id="discrimination">Protection from Discrimination</h2>
                        <p>
                            The Employment Act prohibits discrimination based on several protected characteristics:
                        </p>

                        <div class="article-info-box">
                            <h3>Protected Characteristics</h3>
                            <ul>
                                <li>Race, color, or ethnic origin</li>
                                <li>Sex or gender</li>
                                <li>Marital status</li>
                                <li>Religious belief</li>
                                <li>Political opinion</li>
                                <li>Age (except where bona fide)</li>
                                <li>Disability or physical condition</li>
                                <li>HIV/AIDS status</li>
                                <li>Trade union membership</li>
                                <li>Pregnancy or maternity</li>
                            </ul>
                        </div>

                        <h2 id="maternity-paternity">Maternity and Paternity Leave</h2>
                        <div class="article-info-box">
                            <h3>Parental Leave Entitlements</h3>
                            <p><strong>Maternity Leave:</strong></p>
                            <ul>
                                <li>90 consecutive days with full pay</li>
                                <li>Additional 60 days unpaid leave</li>
                                <li>Job protection during leave</li>
                                <li>Return to same or equivalent position</li>
                            </ul>
                            <p><strong>Paternity Leave:</strong></p>
                            <ul>
                                <li>14 consecutive days with full pay</li>
                                <li>Taken within 3 months of birth</li>
                                <li>Job protection guaranteed</li>
                                <li>Available to adoptive fathers too</li>
                            </ul>
                        </div>

                        <h2 id="unfair-dismissal">Unfair Dismissal and Termination</h2>
                        <p>
                            The Employment Act provides protection against unfair termination. Employees with more than 12 months service are entitled to:
                        </p>

                        <ul class="article-list">
                            <li><strong>Notice period:</strong> 1-4 weeks depending on length of service</li>
                            <li><strong>Severance pay:</strong> 15-30 days' wages per year of service (maximum 12 months)</li>
                            <li><strong>Reason for termination:</strong> Employers must provide written reasons</li>
                            <li><strong>Appeal process:</strong> Right to challenge unfair dismissal</li>
                        </ul>

                        <h2 id="trade-unions">Trade Union Rights</h2>
                        <p>
                            Workers have the right to join trade unions and engage in collective bargaining. Key protections include:
                        </p>

                        <div class="article-features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <h4>Freedom of Association</h4>
                                <p>Right to join or not join a union</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h4>Collective Bargaining</h4>
                                <p>Negotiate terms through unions</p>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4>Protection from Retaliation</h4>
                                <p>Cannot be penalized for union activities</p>
                            </div>
                        </div>

                        <h2 id="harassment">Workplace Harassment and Bullying</h2>
                        <p>
                            Recent amendments to employment law have strengthened protections against workplace harassment. This includes:
                        </p>

                        <ul class="article-list">
                            <li><strong>Sexual harassment:</strong> Unwanted sexual advances, requests for favors, or offensive conduct</li>
                            <li><strong>Bullying:</strong> Repeated unreasonable behavior that creates a risk to health and safety</li>
                            <li><strong>Reporting mechanisms:</strong> Employers must have harassment policies and reporting procedures</li>
                            <li><strong>Investigation requirements:</strong> Employers must investigate complaints promptly</li>
                            <li><strong>Protection from retaliation:</strong> Workers cannot be penalized for making complaints</li>
                        </ul>

                        <h2 id="remote-work">Remote Work and Flexible Arrangements</h2>
                        <p>
                            With the rise of remote work, new guidelines have been established for flexible work arrangements:
                        </p>

                        <div class="article-info-box">
                            <h3>Remote Work Rights</h3>
                            <ul>
                                <li><strong>Right to request:</strong> Employees can request remote work arrangements</li>
                                <li><strong>Equipment provision:</strong> Employers may need to provide necessary equipment</li>
                                <li><strong>Work-life balance:</strong> Protection from unreasonable after-hours contact</li>
                                <li><strong>Cost reimbursement:</strong> Coverage for work-related expenses</li>
                                <li><strong>Performance evaluation:</strong> Same evaluation criteria as office-based staff</li>
                            </ul>
                        </div>

                        <div class="article-key-takeaways">
                            <div class="key-takeaways-header">
                                <i class="fas fa-lightbulb"></i>
                                <h3>Key Takeaways</h3>
                            </div>
                            <ul>
                                <li>Minimum wage increased to KSh 20,200 in Nairobi, KSh 16,160 elsewhere</li>
                                <li>Workers entitled to 90 days maternity leave and 14 days paternity leave</li>
                                <li>Protection from discrimination and harassment in the workplace</li>
                                <li>Right to join trade unions and engage in collective bargaining</li>
                                <li>Unfair dismissal protections with notice periods and severance pay</li>
                                <li>Employers must provide safe working conditions and equipment</li>
                                <li>Remote work arrangements now legally recognized</li>
                            </ul>
                        </div>

                        <h2 id="need-assistance">Need Employment Law Assistance?</h2>
                        <p>
                            Employment disputes can be complex and stressful. Our employment law specialists provide comprehensive support for both employees and employers, including:
                        </p>

                        <ul class="article-list">
                            <li>Unfair dismissal claims and defense</li>
                            <li>Workplace discrimination and harassment cases</li>
                            <li>Contract disputes and negotiations</li>
                            <li>Redundancy and severance consultations</li>
                            <li>Trade union representation</li>
                            <li>Workplace policy development</li>
                        </ul>

                        <div class="article-cta-box">
                            <div class="cta-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Protect Your Employment Rights</h3>
                            <p>Get expert advice on employment law matters today.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                <span>Schedule Employment Law Consultation</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="article-disclaimer">
                            <i class="fas fa-info-circle"></i>
                            <div>
                                <strong>Legal Disclaimer:</strong> This article provides general information about employment rights in Kenya and is not intended as legal advice. Employment laws can be complex and may vary by situation. Please consult with qualified legal professionals for specific advice.
                            </div>
                        </div>
                    </div>

                    <!-- Article Tags -->
                    <div class="article-tags-section">
                        <h4>Tags:</h4>
                        <div class="article-tags">
                            <a href="{{ route('blogs') }}?category=employment" class="article-tag">Employment Law</a>
                            <a href="{{ route('blogs') }}?category=employment" class="article-tag">Labor Rights</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Minimum Wage</a>
                            <a href="{{ route('blogs') }}" class="article-tag">Workplace Safety</a>
                        </div>
                    </div>

                    <!-- Author Bio -->
                    <div class="article-author-bio">
                        <div class="author-bio-avatar">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=120&h=120&q=80" alt="Sarah Njoroge">
                        </div>
                        <div class="author-bio-content">
                            <h4>About Sarah Njoroge</h4>
                            <p>
                                Sarah Njoroge is an Associate at Adams & Magoma Advocates with extensive experience in employment law, labor relations, and workplace dispute resolution. She represents both employees and employers in complex employment matters.
                            </p>
                            <div class="author-credentials">
                                <span class="credential-badge">LLB (University of Nairobi)</span>
                                <span class="credential-badge">Certified Labor Law Practitioner</span>
                            </div>
                        </div>
                    </div>

                    <!-- Article Navigation -->
                    <div class="article-navigation">
                        <a href="{{ route('blogs.estate-planning-essentials-kenya') }}" class="article-nav-item article-nav-prev">
                            <div class="nav-icon">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="nav-content">
                                <span class="nav-label">Previous Article</span>
                                <h5>Estate Planning Essentials in Kenya</h5>
                            </div>
                        </a>
                        <a href="{{ route('blogs.property-registration-process-kenya') }}" class="article-nav-item article-nav-next">
                            <div class="nav-content">
                                <span class="nav-label">Next Article</span>
                                <h5>Property Registration Process in Kenya</h5>
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
                            <a href="#minimum-wage" class="toc-link">Minimum Wage and Remuneration</a>
                            <a href="#workplace-safety" class="toc-link">Workplace Safety and Health</a>
                            <a href="#discrimination" class="toc-link">Protection from Discrimination</a>
                            <a href="#maternity-paternity" class="toc-link">Maternity and Paternity Leave</a>
                            <a href="#unfair-dismissal" class="toc-link">Unfair Dismissal and Termination</a>
                            <a href="#trade-unions" class="toc-link">Trade Union Rights</a>
                            <a href="#harassment" class="toc-link">Workplace Harassment and Bullying</a>
                            <a href="#remote-work" class="toc-link">Remote Work and Flexible Arrangements</a>
                            <a href="#need-assistance" class="toc-link">Need Employment Law Assistance?</a>
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
                            <a href="{{ route('blogs.estate-planning-essentials-kenya') }}" class="related-article-item">
                                <div class="related-article-image">
                                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Estate Planning">
                                </div>
                                <div class="related-article-content">
                                    <h5>Estate Planning Essentials</h5>
                                    <span class="related-article-date">Dec 5, 2025</span>
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
