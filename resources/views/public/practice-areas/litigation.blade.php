@extends('layouts.public')

@section('title', 'Litigation Services | Adams & Magoma Advocates')

@section('content')
    <x-navbar />

    <!-- Breadcrumb -->
    <section class="section" style="padding: 1rem 0; background: var(--background);">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin: 0; background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: var(--primary);">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('practice-areas') }}" style="color: var(--primary);">Practice Areas</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-light);">Litigation</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" style="height: 50vh; min-height: 400px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Litigation Services</div>
            <h1 class="hero-title">Strategic <span>Advocacy</span></h1>
            <p class="hero-subtitle">Aggressive and effective representation in civil and commercial litigation, arbitration, and dispute resolution.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Litigation <span>Overview</span></h2>
        <p class="section-subtitle">Experienced litigation attorneys protecting your rights and interests.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>When disputes arise, you need skilled advocates who can navigate complex legal proceedings and fight for your best interests. At Adams & Magoma Advocates, our litigation team combines deep legal expertise with strategic thinking to achieve optimal outcomes in court and through alternative dispute resolution.</p>

                <p>We handle a wide range of civil and commercial disputes, from contract breaches and property conflicts to corporate disputes and professional negligence claims. Our attorneys have extensive experience in Kenyan courts, arbitration tribunals, and mediation processes.</p>

                <p>With a proven track record of successful litigation, we approach each case with thorough preparation, creative strategies, and relentless dedication to protecting our clients' rights and achieving favorable resolutions.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">85%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Success Rate in Court</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">300+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Cases Successfully Resolved</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-right: 0.5rem;"></i>4+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Years Combined Experience</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Litigation Court Representation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Litigation <span>Services</span></h2>
        <p class="section-subtitle">Comprehensive legal representation across all dispute resolution forums.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Civil Litigation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Civil Litigation</h3>
                <p class="service-description">Full-service civil litigation including case preparation, court representation, appeals, and enforcement of judgments.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Contract disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Tort claims</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Property disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Debt recovery</li>
                </ul>
            </div>

            <!-- Commercial Litigation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Commercial Litigation</h3>
                <p class="service-description">Specialized representation in business disputes, shareholder conflicts, and commercial contract litigation.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Shareholder disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Partnership disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Breach of contract</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Business torts</li>
                </ul>
            </div>

            <!-- Arbitration & Mediation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Arbitration & Mediation</h3>
                <p class="service-description">Expert representation in arbitration proceedings and mediation processes for efficient dispute resolution.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Arbitration representation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Mediation services</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Award enforcement</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Settlement negotiations</li>
                </ul>
            </div>

            <!-- Constitutional Litigation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-scroll"></i>
                </div>
                <h3 class="service-title">Constitutional & Administrative Law</h3>
                <p class="service-description">Strategic litigation involving constitutional rights, judicial review, and administrative law challenges.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Constitutional petitions</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Judicial review</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Human rights cases</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Administrative appeals</li>
                </ul>
            </div>

            <!-- Appellate Practice -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-undo-alt"></i>
                </div>
                <h3 class="service-title">Appellate Practice</h3>
                <p class="service-description">Expert appellate advocacy including appeals to the Court of Appeal and Supreme Court of Kenya.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Court of Appeal</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Supreme Court</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Appeal preparation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Judgment enforcement</li>
                </ul>
            </div>

            <!-- Class Action & Multi-Party Litigation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Class Action & Multi-Party Litigation</h3>
                <p class="service-description">Representation in complex multi-party disputes and class action lawsuits affecting groups of individuals or businesses.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Class action coordination</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Multi-party disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Group representation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Consolidated proceedings</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Approach</span></h2>
        <p class="section-subtitle">Strategic, results-oriented litigation services.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="service-title">Thorough Case Preparation</h3>
                <p class="service-description">Comprehensive case analysis, evidence gathering, and legal research to build the strongest possible case foundation.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-chess-knight"></i>
                </div>
                <h3 class="service-title">Strategic Advocacy</h3>
                <p class="service-description">Creative legal strategies and tactical approaches tailored to each case's unique circumstances and objectives.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="service-title">Settlement Focus</h3>
                <p class="service-description">While prepared to litigate aggressively, we prioritize efficient settlements that achieve our clients' goals.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Litigation <span>Team</span></h2>
        <p class="section-subtitle">Experienced litigators with proven courtroom success.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner & Lead Litigator</div>
                <p class="attorney-bio">Leading complex litigation matters with strong courtroom experience and successful practice across Kenya.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Advocate of the High Court</span>
                </div>
            </div>

            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Partner & Commercial Litigation Specialist</div>
                <p class="attorney-bio">Specialized in commercial disputes and arbitration with strong experience in corporate litigation and alternative dispute resolution.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Certified Arbitrator</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Litigation <span>Resources</span></h2>
        <p class="section-subtitle">Download guides and information to help with litigation matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="service-title">Court Process Guide</h3>
                <p class="service-description">Complete guide to civil litigation process in Kenyan courts, including timelines, procedures, and what to expect.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="service-title">Arbitration vs Litigation</h3>
                <p class="service-description">Understanding the differences between court litigation and arbitration, including costs, timelines, and outcomes.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Evidence Preparation Guide</h3>
                <p class="service-description">Essential guide to gathering, preserving, and presenting evidence in civil litigation and arbitration.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>
        </div>
    </section>

    <!-- Related Practice Areas -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Related Practice <span>Areas</span></h2>
        <p class="section-subtitle">Explore other legal services that complement litigation.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Corporate Law</h3>
                <p class="service-description">Corporate governance disputes, shareholder litigation, and business contract enforcement.</p>
                <a href="{{ route('practice-areas.corporate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Real Estate Law</h3>
                <p class="service-description">Property disputes, boundary conflicts, and landlord-tenant litigation requiring court intervention.</p>
                <a href="{{ route('practice-areas.real-estate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Family Law</h3>
                <p class="service-description">Divorce litigation, custody disputes, and family-related court proceedings requiring advocacy.</p>
                <a href="{{ route('practice-areas.family-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Litigation <span>FAQ</span></h2>
        <p class="section-subtitle">Common questions about litigation and dispute resolution.</p>
        <div class="section-divider"></div>

        <div class="faq-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How long does civil litigation take in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Civil litigation duration varies significantly. Simple cases may resolve in 6-12 months, while complex commercial disputes can take 2-5 years or longer. Factors include court backlog, case complexity, appeals, and settlement negotiations.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What are the costs of litigation?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Litigation costs include legal fees (hourly or fixed), court fees, expert witness fees, and disbursements. Costs can range from KSh 500,000 for simple cases to several million for complex disputes. We provide cost estimates and can work within budgets.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>When should I consider arbitration instead of court?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Arbitration is often faster and more cost-effective than court litigation, especially for commercial disputes. It's particularly suitable when parties want confidentiality, technical expertise in the tribunal, or enforcement in multiple jurisdictions.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Can I appeal an unfavorable court decision?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, most court decisions can be appealed to the Court of Appeal and potentially the Supreme Court. Appeals must be filed within strict time limits (usually 30-60 days) and require demonstrating legal errors in the original decision.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What should I do if I'm being sued?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Contact an attorney immediately upon receiving court documents. Do not ignore the lawsuit, as this can result in default judgment. Preserve all relevant documents and evidence, and seek legal advice to understand your options and prepare your defense.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Need Litigation <span>Support?</span></h2>
        <p class="cta-description">Get started today with a free case assessment or book a consultation with our litigation experts.</p>
        <div style="text-align: center; margin-top: 2rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('book-appointment') }}" class="btn btn-primary">
                <span>Book Appointment</span>
                <i class="fas fa-calendar-check"></i>
            </a>
            <a href="{{ route('case-evaluation') }}" class="btn btn-secondary">
                <span>Get Free Assessment</span>
                <i class="fas fa-clipboard-check"></i>
            </a>
            <a href="tel:+254700123456" class="btn btn-outline-light">
                <span>Call Us</span>
                <i class="fas fa-phone"></i>
            </a>
        </div>
    </section>

    <x-footer />
@endsection