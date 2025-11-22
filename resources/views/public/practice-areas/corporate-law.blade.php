@extends('layouts.public')

@section('title', 'Corporate Law Services | Adams & Magoma Advocates')

@section('content')
    <x-navbar />

    <!-- Breadcrumb -->
    <section class="section" style="padding: 1rem 0; background: var(--background);">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin: 0; background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: var(--primary);">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('practice-areas') }}" style="color: var(--primary);">Practice Areas</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-light);">Corporate Law</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" style="height: 50vh; min-height: 400px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Corporate Law Services</div>
            <h1 class="hero-title">Strategic <span>Corporate</span> Solutions</h1>
            <p class="hero-subtitle">Comprehensive legal counsel for business formation, governance, transactions, and regulatory compliance.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Corporate Law <span>Overview</span></h2>
        <p class="section-subtitle">Expert guidance for businesses navigating complex corporate legal landscapes.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>In today's dynamic business environment, corporate legal matters require strategic thinking, deep expertise, and proactive counsel. At Adams & Magoma Advocates, we provide comprehensive corporate law services that protect your business interests while enabling growth and innovation.</p>

                <p>Our corporate law practice encompasses the full spectrum of business legal needs, from entity formation and governance to complex mergers, acquisitions, and regulatory compliance. We work closely with entrepreneurs, startups, established corporations, and investors to structure deals, mitigate risks, and achieve business objectives.</p>

                <p>Our attorneys bring practical business acumen combined with legal expertise to deliver solutions that drive value for our clients in corporate transactions and governance matters.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">200+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Corporate Transactions</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">50+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Business Formations</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">95%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Client Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Corporate Law Consultation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Corporate Law <span>Services</span></h2>
        <p class="section-subtitle">Comprehensive legal solutions for every stage of your business journey.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Business Formation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Business Formation & Registration</h3>
                <p class="service-description">Complete incorporation services for companies, partnerships, LLCs, and other business entities with all necessary regulatory filings.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Company registration and incorporation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Partnership and LLC formations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Regulatory compliance and filings</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Name reservation and trademark registration</li>
                </ul>
            </div>

            <!-- Corporate Governance -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3 class="service-title">Corporate Governance & Compliance</h3>
                <p class="service-description">Ongoing governance support including board meetings, shareholder agreements, and regulatory compliance monitoring.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Board meeting facilitation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Shareholder agreement drafting</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Annual compliance filings</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Corporate secretarial services</li>
                </ul>
            </div>

            <!-- Mergers & Acquisitions -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="service-title">Mergers & Acquisitions</h3>
                <p class="service-description">Strategic counsel for mergers, acquisitions, divestitures, and joint ventures with comprehensive due diligence and negotiation support.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Due diligence and valuation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Transaction structuring</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Negotiation and documentation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Regulatory approvals and filings</li>
                </ul>
            </div>

            <!-- Contract Drafting -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="service-title">Commercial Contracts</h3>
                <p class="service-description">Drafting and negotiation of commercial agreements including supply contracts, distribution agreements, and licensing arrangements.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Supply and distribution agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Service and consulting contracts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Licensing and franchise agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Non-disclosure and confidentiality agreements</li>
                </ul>
            </div>

            <!-- Regulatory Compliance -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h3 class="service-title">Regulatory Compliance</h3>
                <p class="service-description">Ongoing compliance monitoring and advisory services for corporate governance, securities regulations, and industry-specific requirements.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Securities law compliance</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Industry regulatory requirements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Risk management strategies</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Compliance training and audits</li>
                </ul>
            </div>

            <!-- Intellectual Property -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="service-title">Intellectual Property in Business</h3>
                <p class="service-description">IP protection strategies for trademarks, copyrights, and trade secrets in corporate transactions and business development.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>IP due diligence in transactions</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Trademark and brand protection</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>IP licensing and transfer agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Trade secret protection strategies</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Approach</span></h2>
        <p class="section-subtitle">Strategic, practical solutions tailored to your business objectives.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="service-title">Strategic Counsel</h3>
                <p class="service-description">We align legal strategy with your business goals, providing proactive advice that enables growth while managing risk effectively.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Practical Solutions</h3>
                <p class="service-description">Our solutions are commercially viable and implementable, balancing legal requirements with business realities.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="service-title">Efficient Execution</h3>
                <p class="service-description">We streamline processes and leverage technology to deliver timely results without compromising quality or attention to detail.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Corporate Law <span>Team</span></h2>
        <p class="section-subtitle">Experienced attorneys specializing in corporate law and business transactions.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner & Head of Corporate Law</div>
                <p class="attorney-bio">Leading corporate transactions and M&A with expertise in complex business deals and regulatory compliance.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Admitted to the Kenyan Bar</span>
                </div>
            </div>

            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Partner & Corporate Governance Specialist</div>
                <p class="attorney-bio">Expert in corporate governance, compliance, and business formation with strong knowledge of regulatory frameworks.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Certified Public Secretary</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Corporate Law <span>Resources</span></h2>
        <p class="section-subtitle">Download guides and checklists to help with your corporate legal needs.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="service-title">Company Formation Guide</h3>
                <p class="service-description">Step-by-step guide to registering your company in Kenya, including required documents and timelines.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="service-title">M&A Checklist</h3>
                <p class="service-description">Comprehensive checklist for mergers and acquisitions, covering due diligence, valuation, and regulatory requirements.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Corporate Compliance Handbook</h3>
                <p class="service-description">Essential guide to corporate governance and regulatory compliance requirements for Kenyan companies.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>
        </div>
    </section>

    <!-- Related Practice Areas -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Related Practice <span>Areas</span></h2>
        <p class="section-subtitle">Explore other legal services that complement corporate law.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Real Estate Law</h3>
                <p class="service-description">Property transactions, commercial leasing, and real estate development legal services.</p>
                <a href="{{ route('practice-areas.real-estate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Litigation</h3>
                <p class="service-description">Commercial litigation and dispute resolution for business conflicts and contractual disputes.</p>
                <a href="{{ route('practice-areas.litigation') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="service-title">Employment Law</h3>
                <p class="service-description">Employment contracts, workplace policies, and labor law compliance for businesses.</p>
                <a href="{{ route('practice-areas.employment-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Corporate Law <span>FAQ</span></h2>
        <p class="section-subtitle">Common questions about our corporate legal services.</p>
        <div class="section-divider"></div>

        <div class="faq-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How long does company registration take in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Company registration typically takes 2-3 weeks, depending on the complexity and completeness of documentation. We can expedite this process for our clients through our established relationships with regulatory authorities.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What are the costs involved in forming a company?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Costs vary based on company type and structure, but typically range from KSh 50,000 to KSh 200,000 including registration fees, legal fees, and initial compliance requirements. We provide transparent pricing and can offer payment plans for qualifying clients.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Do you handle international business registrations?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, we assist with cross-border business formations and can help establish Kenyan subsidiaries for international companies, including regulatory compliance, tax structuring, and ongoing corporate governance support.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What ongoing services do you provide after company formation?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>We provide comprehensive ongoing corporate services including annual compliance filings, board meeting facilitation, shareholder agreements, regulatory updates, and strategic corporate governance advice to ensure your business remains compliant and well-positioned for growth.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How do you handle mergers and acquisitions?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Our M&A process includes comprehensive due diligence, valuation analysis, transaction structuring, negotiation support, and regulatory approvals. We work closely with financial advisors and other professionals to ensure seamless execution and optimal outcomes for all parties involved.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Need Corporate Law <span>Assistance?</span></h2>
        <p class="cta-description">Get started today with a free case assessment or book a consultation with our corporate law experts.</p>
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