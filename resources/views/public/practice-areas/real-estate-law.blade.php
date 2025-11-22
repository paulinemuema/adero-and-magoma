@extends('layouts.public')

@section('title', 'Real Estate Law Services | Adams & Magoma Advocates')

@section('content')
    <x-navbar />

    <!-- Breadcrumb -->
    <section class="section" style="padding: 1rem 0; background: var(--background);">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin: 0; background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: var(--primary);">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('practice-areas') }}" style="color: var(--primary);">Practice Areas</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-light);">Real Estate Law</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" style="height: 50vh; min-height: 400px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Real Estate Law Services</div>
            <h1 class="hero-title">Property <span>Legal</span> Solutions</h1>
            <p class="hero-subtitle">Comprehensive real estate legal services for property transactions, disputes, and development projects.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Real Estate Law <span>Overview</span></h2>
        <p class="section-subtitle">Expert guidance for all your property-related legal matters.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>Real estate transactions form the backbone of economic development and personal wealth building. At Adams & Magoma Advocates, we provide comprehensive real estate legal services that protect your property interests and facilitate smooth transactions in Kenya's dynamic property market.</p>

                <p>Our real estate practice covers the full spectrum of property-related legal services, from residential and commercial transactions to complex development projects and dispute resolution. We work with property developers, investors, homeowners, and businesses to navigate the complexities of property law.</p>

                <p>With extensive experience in property transactions across Kenya, our attorneys bring practical knowledge combined with legal expertise to deliver solutions that protect your interests and maximize value.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">300+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Property Transactions</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">50+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Development Projects</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">95%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Client Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Real Estate Legal Consultation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Real Estate Law <span>Services</span></h2>
        <p class="section-subtitle">Comprehensive legal solutions for all property-related matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Property Transactions -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Property Transactions & Conveyancing</h3>
                <p class="service-description">Complete legal support for buying, selling, and transferring property ownership with title verification and registration.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Title search and verification</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Sale and purchase agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Property registration</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Due diligence and searches</li>
                </ul>
            </div>

            <!-- Commercial Leasing -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Commercial Leasing</h3>
                <p class="service-description">Drafting and negotiation of commercial lease agreements for offices, retail spaces, and industrial properties.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Lease agreement drafting</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Lease negotiations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Lease renewals and terminations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Commercial tenancy disputes</li>
                </ul>
            </div>

            <!-- Property Development -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3 class="service-title">Property Development</h3>
                <p class="service-description">Legal counsel for residential and commercial development projects including planning permissions and construction agreements.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Development agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Planning permissions</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Construction contracts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Subdivision and partitioning</li>
                </ul>
            </div>

            <!-- Property Disputes -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Property Disputes & Litigation</h3>
                <p class="service-description">Resolution of property-related conflicts including boundary disputes, title defects, and landlord-tenant issues.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Boundary and easement disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Title defect claims</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Landlord-tenant disputes</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Adverse possession claims</li>
                </ul>
            </div>

            <!-- Mortgage & Finance -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-money-check"></i>
                </div>
                <h3 class="service-title">Mortgage & Property Finance</h3>
                <p class="service-description">Legal support for property financing including mortgage agreements, loan security, and foreclosure proceedings.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Mortgage documentation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Loan security agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Foreclosure proceedings</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Debt recovery actions</li>
                </ul>
            </div>

            <!-- Strata & Community Schemes -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Strata & Community Schemes</h3>
                <p class="service-description">Legal services for condominiums, gated communities, and strata properties including bylaws and management.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Strata bylaws and rules</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Community association management</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Dispute resolution in communities</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Property management agreements</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Approach</span></h2>
        <p class="section-subtitle">Comprehensive, practical solutions for property matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="service-title">Thorough Due Diligence</h3>
                <p class="service-description">Comprehensive title searches, property inspections, and legal verification to protect your interests and prevent future disputes.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Practical Solutions</h3>
                <p class="service-description">Balancing legal requirements with commercial realities to achieve efficient and cost-effective outcomes for property transactions.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="service-title">Timely Execution</h3>
                <p class="service-description">Streamlined processes and proactive communication to ensure property transactions and projects are completed on schedule.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Real Estate Law <span>Team</span></h2>
        <p class="section-subtitle">Experienced attorneys specializing in property law and transactions.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Partner & Head of Real Estate Law</div>
                <p class="attorney-bio">Leading property transactions and development projects with expertise in real estate law and commercial conveyancing.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Notary Public</span>
                </div>
            </div>

            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner & Property Litigation Specialist</div>
                <p class="attorney-bio">Expert in property disputes and commercial litigation with strong experience in complex real estate conflicts and arbitration.</p>
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
        <h2 class="section-title">Real Estate Law <span>Resources</span></h2>
        <p class="section-subtitle">Download guides and checklists to help with your property matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="service-title">Property Purchase Guide</h3>
                <p class="service-description">Complete guide to buying property in Kenya, including due diligence, legal requirements, and closing process.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="service-title">Commercial Lease Checklist</h3>
                <p class="service-description">Essential checklist for commercial leasing, covering negotiation points, legal requirements, and key terms.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Property Dispute Resolution Guide</h3>
                <p class="service-description">Understanding your options for resolving property disputes, from negotiation to litigation and arbitration.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>
        </div>
    </section>

    <!-- Related Practice Areas -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Related Practice <span>Areas</span></h2>
        <p class="section-subtitle">Explore other legal services that complement real estate law.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Corporate Law</h3>
                <p class="service-description">Business formation and corporate governance for property development companies and real estate investors.</p>
                <a href="{{ route('practice-areas.corporate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Litigation</h3>
                <p class="service-description">Property dispute resolution and commercial litigation for complex real estate conflicts.</p>
                <a href="{{ route('practice-areas.litigation') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="service-title">Employment Law</h3>
                <p class="service-description">Employment contracts and workplace policies for property management companies and real estate firms.</p>
                <a href="{{ route('practice-areas.employment-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Real Estate Law <span>FAQ</span></h2>
        <p class="section-subtitle">Common questions about our property legal services.</p>
        <div class="section-divider"></div>

        <div class="faq-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How long does property registration take in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Property registration typically takes 2-4 weeks after all documentation is complete and fees are paid. The process involves title verification, stamp duty payment, and registration at the relevant land registry. We can expedite this process for our clients.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What documents are needed for property purchase?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Essential documents include the title deed, identity documents for all parties, KRA PIN certificates, bank statements, and proof of source of funds. Additional documents may be required depending on the property type and transaction structure.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How do you handle property disputes?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>We approach property disputes strategically, starting with negotiation and mediation when possible, escalating to arbitration or litigation when necessary. Our goal is to achieve efficient resolution while protecting your interests and minimizing costs.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What are the costs involved in property transactions?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Costs vary by property value and type, but typically include stamp duty (4.5% of property value), legal fees (0.5-1% of property value), registration fees, and valuation fees. We provide transparent cost estimates and can arrange payment plans.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you handle commercial property transactions?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we specialize in commercial property transactions including office buildings, retail spaces, industrial properties, and development land. Our team has extensive experience with complex commercial deals and development projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Need Real Estate Law <span>Assistance?</span></h2>
        <p class="cta-description">Get started today with a free case assessment or book a consultation with our real estate law experts.</p>
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