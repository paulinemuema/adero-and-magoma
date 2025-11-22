@extends('layouts.public')

@section('title', 'Adams & Magoma | Premier Legal Advocates')
@section('description', 'Adams & Magoma Advocates - Premier legal services in Nairobi, Kenya. Expert attorneys specializing in Corporate Law, Real Estate, Family Law, Estate Planning, Litigation, and Employment Law. Established 2021. Free consultations available.')
@section('keywords', 'lawyer Nairobi, legal services Kenya, corporate law Kenya, real estate lawyer Nairobi, family law attorney Kenya, estate planning Kenya, litigation lawyer Nairobi, employment law Kenya, best law firm Nairobi')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'LegalService',
      '@id' => url('/') . '#legalservice',
      'name' => 'Adams & Magoma Advocates',
      'image' => asset('assets/images/logo_law.jpg'),
      'description' => 'Premier legal advocates providing comprehensive legal services in Nairobi, Kenya since 2021',
      'url' => url('/'),
      'telephone' => '+254700123456',
      'email' => 'info@adamsmagoma.com',
      'priceRange' => '$$',
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '123 Justice Avenue, Westlands',
        'addressLocality' => 'Nairobi',
        'addressRegion' => 'Nairobi County',
        'postalCode' => '00100',
        'addressCountry' => 'KE'
      ],
      'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => -1.2644,
        'longitude' => 36.8219
      ],
      'areaServed' => [
        '@type' => 'Country',
        'name' => 'Kenya'
      ],
      'serviceType' => [
        'Corporate Law',
        'Real Estate Law',
        'Family Law',
        'Estate Planning',
        'Litigation',
        'Employment Law'
      ],
      'openingHoursSpecification' => [
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
          'opens' => '08:00',
          'closes' => '18:00'
        ],
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => 'Saturday',
          'opens' => '09:00',
          'closes' => '13:00'
        ]
      ],
      'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '127'
      ]
    ],
    [
      '@type' => 'Organization',
      '@id' => url('/') . '#organization',
      'name' => 'Adams & Magoma Advocates',
      'url' => url('/'),
      'logo' => [
        '@type' => 'ImageObject',
        'url' => asset('assets/images/logo_law.jpg')
      ],
      'image' => asset('assets/images/logo_law.jpg'),
      'description' => 'Premier legal advocates providing comprehensive legal services in Nairobi, Kenya',
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '123 Justice Avenue, Westlands',
        'addressLocality' => 'Nairobi',
        'addressRegion' => 'Nairobi County',
        'postalCode' => '00100',
        'addressCountry' => 'KE'
      ],
      'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+254700123456',
        'contactType' => 'Customer Service',
        'areaServed' => 'KE',
        'availableLanguage' => ['English', 'Swahili']
      ],
      'sameAs' => [
        'https://www.facebook.com/adamsmagoma',
        'https://www.linkedin.com/company/adams-magoma-advocates',
        'https://twitter.com/adamsmagoma'
      ],
      'foundingDate' => '2021',
      'numberOfEmployees' => [
        '@type' => 'QuantitativeValue',
        'value' => '50+'
      ]
    ],
    [
      '@type' => 'LocalBusiness',
      '@id' => url('/') . '#localbusiness',
      'name' => 'Adams & Magoma Advocates',
      'image' => asset('assets/images/logo_law.jpg'),
      'description' => 'Premier legal services in Nairobi, Kenya',
      'url' => url('/'),
      'telephone' => '+254700123456',
      'priceRange' => '$$',
      'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '123 Justice Avenue, Westlands',
        'addressLocality' => 'Nairobi',
        'addressRegion' => 'Nairobi County',
        'postalCode' => '00100',
        'addressCountry' => 'KE'
      ],
      'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => -1.2644,
        'longitude' => 36.8219
      ],
      'openingHoursSpecification' => [
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
          'opens' => '08:00',
          'closes' => '18:00'
        ],
        [
          '@type' => 'OpeningHoursSpecification',
          'dayOfWeek' => 'Saturday',
          'opens' => '09:00',
          'closes' => '13:00'
        ]
      ]
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-logo">
            <img src="{{ asset('assets/images/logo_law.jpg') }}" alt="Adams & Magoma Advocates Logo" class="loading-logo-image">
            <span>ADAMS &amp; MAGOMA</span>
        </div>
        <div class="loading-bar">
            <div class="loading-progress" id="loadingProgress"></div>
        </div>
    </div>

    <!-- Navigation -->
    <x-navbar />

    <!-- Hero Section -->
    <section class="hero">
        <div class="bg-pattern"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-pre-title">
                <span class="hero-badge">Established 2021</span>
                <span class="hero-trust-indicators">
                    <i class="fas fa-award"></i> Award-Winning Firm
                    <span class="divider">|</span>
                    <i class="fas fa-shield-alt"></i> Licensed & Certified
                </span>
            </div>
            <h1 class="hero-title">Where <span>Justice</span> Meets <span>Excellence</span></h1>
            <p class="hero-subtitle">Since 2021, Adams & Magoma Advocates has been dedicated to providing exceptional legal services, combining expertise with unwavering commitment to our clients' success.</p>
            <div class="hero-cta">
                <a href="{{ route('book-appointment') }}" class="btn btn-primary">
                    <span>Book Appointment</span>
                    <i class="fas fa-calendar-check"></i>
                </a>
                <a href="{{ route('practice-areas') }}" class="btn btn-secondary">
                    <span>Explore Our Services</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat-item">
                    <span class="hero-stat-number">150+</span>
                    <span class="hero-stat-label">Cases Resolved</span>
                </div>
                <div class="hero-stat-item">
                    <span class="hero-stat-number">98%</span>
                    <span class="hero-stat-label">Success Rate</span>
                </div>
                <div class="hero-stat-item">
                    <span class="hero-stat-number">4+</span>
                    <span class="hero-stat-label">Years Experience</span>
                </div>
            </div>
        </div>
        <div class="hero-scroll-indicator">
            <span>Scroll to Explore</span>
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- Trust Badges & Client Logos Section -->
    <section class="trust-section">
        <div class="container-fluid">
            <div class="trust-badges">
                <div class="trust-badge-item">
                    <i class="fas fa-certificate"></i>
                    <span>Bar Association Certified</span>
                </div>
                <div class="trust-badge-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>Fully Licensed</span>
                </div>
                <div class="trust-badge-item">
                    <i class="fas fa-star"></i>
                    <span>5-Star Rated</span>
                </div>
                <div class="trust-badge-item">
                    <i class="fas fa-handshake"></i>
                    <span>Trusted by 150+ Clients</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about-section" id="about">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Legacy</span> of Excellence</h2>
        <p class="section-subtitle">Since our founding in 2021, we have built a reputation for excellence, integrity, and success in the legal field.</p>
        <div class="section-divider"></div>
        <div class="about-container">
            <div class="about-content">
                <h2>A Tradition of <span>Legal Excellence</span></h2>
                <p>Founded in 2021, Adams & Magoma Advocates has quickly established itself as a trusted law firm in the region. Our founding partners envisioned a practice that would not only provide exceptional legal counsel but would also serve as a pillar of integrity in the legal community.</p>
                <p>Over the past 4 years, we have built a strong foundation of success by approaching each case with meticulous attention to detail, strategic foresight, and an unwavering commitment to our clients' objectives.</p>
                
                <div class="about-stats">
                    <div class="stat-item fade-in">
                        <div class="stat-icon">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <span class="stat-number" data-target="150">0</span>
                        <span class="stat-suffix">+</span>
                        <span class="stat-label">Cases Resolved</span>
                    </div>
                    <div class="stat-item fade-in">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <span class="stat-number" data-target="4">0</span>
                        <span class="stat-suffix">+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item fade-in">
                        <div class="stat-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <span class="stat-number" data-target="98">0</span>
                        <span class="stat-suffix">%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                    <div class="stat-item fade-in">
                        <div class="stat-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <span class="stat-number" data-target="150">0</span>
                        <span class="stat-suffix">+</span>
                        <span class="stat-label">Cases Resolved</span>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Adams & Magoma Advocates - Legal Excellence" class="about-image">
                    <div class="about-image-overlay"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Practice</span> Areas</h2>
        <p class="section-subtitle">Comprehensive legal services tailored to meet your unique needs and achieve your desired outcomes.</p>
        <div class="section-divider"></div>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Corporate Law</h3>
                <p class="service-description">Strategic counsel for business formation, mergers & acquisitions, compliance, and corporate governance. We help organizations navigate complex legal landscapes to achieve their business objectives.</p>
                <a href="{{ route('practice-areas.corporate-law') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Real Estate Law</h3>
                <p class="service-description">Comprehensive guidance on property transactions, development projects, leasing agreements, zoning issues, and dispute resolution for all real estate matters.</p>
                <a href="{{ route('practice-areas.real-estate-law') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 class="service-title">Family Law</h3>
                <p class="service-description">Compassionate representation for divorce, child custody, adoption, prenuptial agreements, and other sensitive family legal matters handled with discretion and care.</p>
                <a href="{{ route('practice-areas.family-law') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="service-title">Estate Planning</h3>
                <p class="service-description">Thoughtful preparation of wills, trusts, powers of attorney, and comprehensive estate plans to protect your legacy and provide for your loved ones according to your wishes.</p>
                <a href="{{ route('practice-areas.estate-planning') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Litigation</h3>
                <p class="service-description">Aggressive representation in civil litigation, alternative dispute resolution, and courtroom proceedings with a proven track record of achieving favorable outcomes for our clients.</p>
                <a href="{{ route('practice-areas.litigation') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="service-title">Employment Law</h3>
                <p class="service-description">Expert guidance on workplace issues, employment contracts, compliance with labor laws, discrimination claims, and resolution of employment disputes for both employers and employees.</p>
                <a href="{{ route('practice-areas.employment-law') }}" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Case Assessment Section -->
    <section class="section case-assessment-section" id="case-assessment">
        <div class="bg-pattern"></div>
        <div class="case-assessment-container">
            <div class="case-assessment-content">
                <div class="assessment-badge">Free Assessment</div>
                <h2 class="section-title">Not Sure What You <span>Need?</span></h2>
                <p class="section-subtitle">Get your free case evaluation in just 5 minutes. Answer a few quick questions and receive a preliminary assessment with recommended next steps.</p>
                <div class="assessment-features">
                    <div class="assessment-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>5-Minute Questionnaire</span>
                    </div>
                    <div class="assessment-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Instant Preliminary Assessment</span>
                    </div>
                    <div class="assessment-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Attorney Matching</span>
                    </div>
                    <div class="assessment-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>100% Free & Confidential</span>
                    </div>
                </div>
                <div class="assessment-cta">
                    <a href="{{ route('case-evaluation') }}" class="btn btn-primary btn-lg">
                        <span>Start Free Assessment</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('book-appointment') }}" class="btn btn-secondary btn-lg">
                        <span>Or Book Appointment Directly</span>
                        <i class="fas fa-calendar-check"></i>
                    </a>
                </div>
            </div>
            <div class="case-assessment-visual">
                <div class="assessment-image-wrapper">
                    <div class="assessment-icon-large">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="assessment-stats">
                        <div class="assessment-stat">
                        <span class="stat-number">150+</span>
                        <span class="stat-label">Assessments Completed</span>
                        </div>
                        <div class="assessment-stat">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Attorneys Section -->
    <section class="section attorneys-section" id="attorneys">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Legal</span> Team</h2>
        <p class="section-subtitle">Meet the dedicated attorneys who bring expertise, passion, and commitment to every case.</p>
        <div class="section-divider"></div>
        <div class="attorneys-grid">
            <div class="attorney-card fade-in">
                <div class="attorney-image">BA</div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner</div>
                <p class="attorney-bio">Brian specializes in corporate law and litigation, bringing strategic counsel and effective representation to businesses and individuals. His dedication to client success and attention to detail have earned him a strong reputation in the legal community.</p>
            </div>
            <div class="attorney-card fade-in">
                <div class="attorney-image">M</div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Managing Partner</div>
                <p class="attorney-bio">Magoma specializes in real estate law, family law, and employment matters. With a focus on practical solutions and client-centered service, Magoma has successfully handled numerous cases across various practice areas.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials-section" id="testimonials">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Client <span>Testimonials</span></h2>
        <p class="section-subtitle">Hear what our clients have to say about their experience working with our legal team.</p>
        <div class="section-divider"></div>
        <div class="testimonials-container">
            <div class="testimonials-carousel" id="testimonialsCarousel">
                <div class="testimonial-card active">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Adams & Magoma Advocates provided exceptional representation during a complex corporate merger that involved multiple international jurisdictions. Their strategic approach and attention to detail not only saved our company millions but ensured a seamless transition that positioned us for unprecedented growth.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RJ</div>
                        <div class="author-info">
                            <h4>Robert Johnson</h4>
                            <p>CEO, Tech Innovations Ltd.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">When I needed help with a complex real estate transaction, the team at Adams & Magoma went above and beyond. They were responsive, professional, and incredibly knowledgeable. Thanks to their expertise, we closed the deal smoothly and avoided potential legal pitfalls.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MW</div>
                        <div class="author-info">
                            <h4>Mary Wanjiku</h4>
                            <p>Property Developer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">The family law team provided compassionate and expert guidance during one of the most difficult times in my life. They handled my case with sensitivity and professionalism, achieving a favorable outcome while minimizing stress. I couldn't have asked for better representation.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">DK</div>
                        <div class="author-info">
                            <h4>David Kamau</h4>
                            <p>Business Owner</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Their employment law expertise helped us navigate complex labor regulations and resolve a sensitive workplace dispute. The team's strategic approach and deep understanding of employment law protected our business interests while ensuring fair treatment for all parties involved.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AN</div>
                        <div class="author-info">
                            <h4>Anne Njeri</h4>
                            <p>HR Director, Global Corp</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-controls">
                <button class="testimonial-btn prev" id="prevTestimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="testimonials-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                    <span class="dot" data-slide="3"></span>
                </div>
                <button class="testimonial-btn next" id="nextTestimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="section case-studies-section" id="case-studies">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Success <span>Stories</span></h2>
        <p class="section-subtitle">Real results from real cases. See how we've helped our clients achieve their legal objectives.</p>
        <div class="section-divider"></div>
        <div class="case-studies-grid">
            <div class="case-study-card fade-in">
                <div class="case-study-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="case-study-title">Corporate Merger Success</h3>
                <p class="case-study-description">Successfully facilitated a complex corporate merger involving multiple parties, resulting in a seamless transaction and favorable terms for our client.</p>
                <div class="case-study-results">
                    <div class="result-item">
                        <span class="result-value">100%</span>
                        <span class="result-label">Client Satisfaction</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">6 Months</span>
                        <span class="result-label">Completion Time</span>
                    </div>
                </div>
            </div>
            <div class="case-study-card fade-in">
                <div class="case-study-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="case-study-title">Commercial Property Acquisition</h3>
                <p class="case-study-description">Navigated complex zoning regulations and negotiated favorable terms for a commercial property acquisition, ensuring a smooth transaction and protecting the client's interests.</p>
                <div class="case-study-results">
                    <div class="result-item">
                        <span class="result-value">100%</span>
                        <span class="result-label">Success Rate</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">100%</span>
                        <span class="result-label">Success Rate</span>
                    </div>
                </div>
            </div>
            <div class="case-study-card fade-in">
                <div class="case-study-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="case-study-title">Landmark Employment Case</h3>
                <p class="case-study-description">Secured a favorable verdict in a high-profile employment discrimination case, setting a precedent and protecting our client's reputation while achieving justice.</p>
                <div class="case-study-results">
                    <div class="result-item">
                        <span class="result-value">Won</span>
                        <span class="result-label">Case Outcome</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">Precedent</span>
                        <span class="result-label">Legal Impact</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition Section -->
    <section class="section awards-section" id="awards">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Awards & <span>Recognition</span></h2>
        <p class="section-subtitle">Our commitment to excellence has been recognized by leading legal organizations and industry publications.</p>
        <div class="section-divider"></div>
        <div class="awards-grid">
            <div class="award-card fade-in">
                <div class="award-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="award-title">Best Law Firm 2023</h3>
                <p class="award-organization">Kenya Legal Awards</p>
                <p class="award-year">2023</p>
            </div>
            <div class="award-card fade-in">
                <div class="award-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h3 class="award-title">Excellence in Corporate Law</h3>
                <p class="award-organization">East Africa Legal Excellence</p>
                <p class="award-year">2022</p>
            </div>
            <div class="award-card fade-in">
                <div class="award-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="award-title">Top Real Estate Law Firm</h3>
                <p class="award-organization">Property Law Association</p>
                <p class="award-year">2023</p>
            </div>
            <div class="award-card fade-in">
                <div class="award-icon">
                    <i class="fas fa-star"></i>
                </div>
                <h3 class="award-title">Client Choice Award</h3>
                <p class="award-organization">Legal Services Review</p>
                <p class="award-year">2022-2023</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section testimonials-section" id="faq">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
        <p class="section-subtitle">Find answers to common questions about our legal services and how we can help you.</p>
        <div class="section-divider"></div>
        <div class="faq-container">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How much do your services cost?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Our fee structure varies depending on the complexity and type of legal matter. We offer both hourly billing and fixed-fee arrangements. During your initial consultation, we'll provide a transparent estimate based on your specific needs.</p>
                </div>
            </div>
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How long does a typical case take?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Case duration depends on various factors including complexity, court schedules, and opposing party cooperation. Simple matters may resolve in weeks, while complex litigation can take months or years. We'll provide realistic timelines during your consultation.</p>
                </div>
            </div>
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you offer free consultations?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we offer a complimentary 30-minute initial consultation to discuss your legal needs, assess your case, and determine how we can best assist you. This allows you to understand your options before making any commitment.</p>
                </div>
            </div>
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What areas of law do you specialize in?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>We specialize in Corporate Law, Real Estate Law, Family Law, Estate Planning, Litigation, and Employment Law. Our team of experienced attorneys brings deep expertise in each practice area to serve your diverse legal needs.</p>
                </div>
            </div>
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What should I bring to my initial consultation?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Please bring any relevant documents related to your case, such as contracts, correspondence, court documents, or any other paperwork. If you're unsure what to bring, our team will guide you when you schedule your consultation.</p>
                </div>
            </div>
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you handle cases outside of your main office location?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we serve clients across multiple jurisdictions and can handle cases in various locations. We have experience working with clients nationwide and internationally, adapting our approach to meet the specific requirements of different legal systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Locations Section -->
    <section class="section" id="locations">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Office</span> Locations</h2>
        <p class="section-subtitle">Visit us at one of our conveniently located offices. We're here to serve you across multiple locations.</p>
        <div class="section-divider"></div>
        
        <div class="locations-container">
            <!-- Main Office -->
            <div class="location-card fade-in">
                <div class="location-header">
                    <h3 class="location-name">Nairobi Main Office</h3>
                    <div class="location-badge">Headquarters</div>
                </div>
                <div class="location-content">
                    <div class="location-info">
                        <div class="location-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Address:</strong>
                                <p>123 Justice Avenue, Westlands<br>Nairobi, Kenya 00100</p>
                            </div>
                        </div>
                        <div class="location-detail">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone:</strong>
                                <p>+254 700 123 456</p>
                            </div>
                        </div>
                        <div class="location-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong>
                                <p>nairobi@adamsmagoma.com</p>
                            </div>
                        </div>
                        <div class="location-detail">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Office Hours:</strong>
                                <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7905!2d36.8219!3d-1.2644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTUnNTIuMCJTIDM2wrA0OScxOC44IkU!5e0!3m2!1sen!2ske!4v1234567890123!5m2!1sen!2ske" 
                            width="100%" 
                            height="300" 
                            style="border:0; border-radius: 0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <a href="https://maps.google.com/?q=Westlands+Nairobi" target="_blank" class="btn btn-secondary" style="margin-top: 1rem; display: inline-block;">
                            <i class="fas fa-directions"></i> Get Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section cta-section" id="contact">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Contact <span>Us</span></h2>
        <p class="cta-description">Ready to discuss your legal needs or stay updated with our latest insights? Get in touch or subscribe to our newsletter below.</p>
        <div class="cta-grid">
            <div class="cta-left">
                <h3 class="cta-form-title">Send us a Message</h3>
                <p class="cta-form-subtitle">Fill out the form below and we'll get back to you within 24 hours.</p>
                <form action="#" method="POST" class="contact-form" id="contactForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                            <span class="form-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                            <span class="form-error"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+254 700 000 000">
                            <span class="form-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="service">Practice Area</label>
                            <select id="service" name="service">
                                <option value="">Select a practice area</option>
                                <option value="corporate">Corporate Law</option>
                                <option value="real-estate">Real Estate Law</option>
                                <option value="family">Family Law</option>
                                <option value="estate">Estate Planning</option>
                                <option value="litigation">Litigation</option>
                                <option value="employment">Employment Law</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tell us about your legal needs..."></textarea>
                        <span class="form-error"></span>
                    </div>
                    <div class="form-submit-wrapper">
                        <button type="submit" class="btn btn-primary btn-submit">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <div class="form-success-message" id="formSuccessMessage">
                            <i class="fas fa-check-circle"></i>
                            <span>Thank you! Your message has been sent successfully.</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="cta-right">
                <h3 class="cta-form-title">Stay Updated</h3>
                <p class="cta-form-subtitle">Subscribe to our newsletter for the latest legal insights, case updates, and industry news.</p>
                <form action="#" method="POST" class="newsletter-form" id="newsletterForm">
                    @csrf
                    <div class="form-group">
                        <label for="newsletter-email">Email Address *</label>
                        <input type="email" id="newsletter-email" name="email" required>
                        <span class="form-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="newsletter-name">Full Name</label>
                        <input type="text" id="newsletter-name" name="name" placeholder="Optional">
                    </div>
                    <div class="form-submit-wrapper">
                        <button type="submit" class="btn btn-secondary btn-submit">
                            <span>Subscribe to Newsletter</span>
                            <i class="fas fa-envelope"></i>
                        </button>
                        <div class="form-success-message" id="newsletterSuccessMessage">
                            <i class="fas fa-check-circle"></i>
                            <span>Successfully subscribed! Check your email for confirmation.</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <!-- Floating Action Buttons -->
    <div class="floating-actions">
        <a href="{{ route('book-appointment') }}" class="fab-btn fab-booking" title="Book Appointment">
            <span class="ripple-effect"></span>
            <i class="fas fa-calendar-check"></i>
        </a>
        <a href="tel:+254700123456" class="fab-btn fab-phone" title="Call Us">
            <span class="ripple-effect"></span>
            <i class="fas fa-phone"></i>
        </a>
        <button class="fab-btn fab-whatsapp" id="whatsappPopupBtn" title="WhatsApp Us">
            <span class="ripple-effect"></span>
            <i class="fab fa-whatsapp"></i>
        </button>
        <a href="#contact" class="fab-btn fab-email" title="Contact Us">
            <span class="ripple-effect"></span>
            <i class="fas fa-envelope"></i>
        </a>
        <button class="fab-btn fab-scroll-top" id="scrollToTop" title="Back to Top">
            <span class="ripple-effect"></span>
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <!-- WhatsApp Popup Widget -->
    <div class="whatsapp-popup" id="whatsappPopup">
        <div class="whatsapp-popup-overlay" id="whatsappPopupOverlay"></div>
        <div class="whatsapp-popup-container">
            <!-- Header -->
            <div class="whatsapp-popup-header">
                <div class="whatsapp-popup-profile">
                    <div class="whatsapp-profile-picture">
                        <img src="{{ asset('assets/images/logo_law.jpg') }}" alt="Adams & Magoma Advocates">
                        <span class="whatsapp-online-indicator"></span>
                    </div>
                    <div class="whatsapp-profile-info">
                        <h3>Adams & Magoma Advocates</h3>
                        <p>Typically replies within minutes</p>
                    </div>
                </div>
                <button class="whatsapp-popup-close" id="whatsappPopupClose">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Chat Area -->
            <div class="whatsapp-popup-chat">
                <div class="whatsapp-chat-bubble">
                    <p>We offer free consultation. Send a message to speak to an advocate.</p>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="whatsapp-popup-footer">
                <a href="https://wa.me/254700123456" target="_blank" class="whatsapp-popup-button" id="whatsappOpenBtn">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp Us</span>
                </a>
                <div class="whatsapp-popup-status">
                    <span class="whatsapp-status-indicator"></span>
                    <span>Online</span>
                    <span class="whatsapp-divider">|</span>
                    <a href="#" class="whatsapp-privacy-link">Privacy policy</a>
                </div>
            </div>
        </div>
    </div>
@endsection
