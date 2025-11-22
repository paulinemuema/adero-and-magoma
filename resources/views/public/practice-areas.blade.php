@extends('layouts.public')

@section('title', 'Practice Areas | Adams & Magoma Advocates')
@section('description', 'Comprehensive legal services in Nairobi, Kenya. Our practice areas include Corporate Law, Real Estate Law, Family Law, Estate Planning, Litigation, and Employment Law. Expert attorneys ready to help.')
@section('keywords', 'practice areas, legal services Kenya, corporate law, real estate law, family law, estate planning, litigation, employment law Nairobi')

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
      'name' => 'Practice Areas',
      'item' => url()->current()
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Hero Section -->
    <section class="hero" style="height: 60vh; min-height: 480px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Legal Expertise</div>
            <h1 class="hero-title">Our <span>Practice</span> Areas</h1>
            <p class="hero-subtitle">Comprehensive legal solutions across diverse practice areas, delivered with excellence and integrity.</p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Comprehensive <span>Legal Solutions</span></h2>
        <p class="section-subtitle">We provide expert legal counsel across a wide range of practice areas, combining deep expertise with personalized service.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>Since our founding in 2021, our attorneys have specialized in various areas of law, offering strategic counsel and effective representation. Each practice area is led by experienced professionals who understand the unique challenges and opportunities within their field.</p>
                <p>We approach every case with diligence, creativity, and a commitment to achieving the best possible outcomes for our clients. Whether you're an individual, business, or institution, we have the expertise to address your legal needs.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">150+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Cases Resolved</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">4+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Years Experience</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">98%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Client Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Professional Legal Consultation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Practice Areas Grid -->
    <section class="section" id="practice-areas">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Practice Areas</span></h2>
        <p class="section-subtitle">Explore our specialized legal services and find the expertise you need.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Corporate Law -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Corporate Law</h3>
                <p class="service-description">Comprehensive corporate legal services including business formation, governance, mergers, acquisitions, and regulatory compliance.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Business Formation & Registration</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Corporate Governance</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Mergers & Acquisitions</li>
                </ul>
                <a href="{{ route('practice-areas.corporate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <!-- Real Estate Law -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Real Estate Law</h3>
                <p class="service-description">Expert guidance on property transactions, land disputes, leasing agreements, and real estate development projects.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Property Transactions</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Land Disputes & Litigation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Leasing & Development</li>
                </ul>
                <a href="{{ route('practice-areas.real-estate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <!-- Family Law -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Family Law</h3>
                <p class="service-description">Compassionate and effective representation in divorce, child custody, adoption, and other family-related legal matters.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Divorce & Separation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Child Custody & Support</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Adoption & Guardianship</li>
                </ul>
                <a href="{{ route('practice-areas.family-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <!-- Estate Planning -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="service-title">Estate Planning</h3>
                <p class="service-description">Comprehensive estate planning services including wills, trusts, probate, and succession planning for individuals and families.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Wills & Testament</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Trusts & Estate Planning</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Probate & Administration</li>
                </ul>
                <a href="{{ route('practice-areas.estate-planning') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <!-- Litigation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Litigation</h3>
                <p class="service-description">Aggressive and strategic representation in civil and commercial litigation, arbitration, and alternative dispute resolution.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Civil Litigation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Commercial Disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Arbitration & Mediation</li>
                </ul>
                <a href="{{ route('practice-areas.litigation') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <!-- Employment Law -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="service-title">Employment Law</h3>
                <p class="service-description">Expert counsel on employment contracts, workplace disputes, labor relations, and compliance with employment legislation.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Employment Contracts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Workplace Disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Labor Relations</li>
                </ul>
                <a href="{{ route('practice-areas.employment-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>

    <!-- Why Choose Us Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Why Choose <span>Our Firm</span></h2>
        <p class="section-subtitle">What sets Adams & Magoma Advocates apart in delivering exceptional legal services.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="service-title">Proven Track Record</h3>
                <p class="service-description">Successful case resolution across all practice areas since 2021, with a 98% client satisfaction rate.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="service-title">Personalized Approach</h3>
                <p class="service-description">We understand that every client and case is unique, providing tailored legal strategies for optimal results.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="service-title">Timely Resolution</h3>
                <p class="service-description">Efficient case management and clear communication ensure swift resolution without compromising quality.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Need Legal Assistance in a <span>Specific Area?</span></h2>
        <p class="cta-description">Contact us today for a confidential consultation. Our experienced attorneys are ready to help with your legal needs.</p>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="{{ route('contact') }}" class="btn btn-primary" style="margin-right: 1rem;">Schedule Consultation</a>
            <a href="tel:+254700123456" class="btn btn-secondary">Call Now: +254 700 123 456</a>
        </div>
    </section>

    <x-footer />
@endsection