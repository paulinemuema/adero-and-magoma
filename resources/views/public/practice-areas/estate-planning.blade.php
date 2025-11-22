@extends('layouts.public')

@section('title', 'Estate Planning Services | Adams & Magoma Advocates')

@section('content')
    <x-navbar />

    <!-- Breadcrumb -->
    <section class="section" style="padding: 1rem 0; background: var(--background);">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin: 0; background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: var(--primary);">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('practice-areas') }}" style="color: var(--primary);">Practice Areas</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-light);">Estate Planning</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" style="height: 50vh; min-height: 400px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Estate Planning Services</div>
            <h1 class="hero-title">Securing Your <span>Legacy</span></h1>
            <p class="hero-subtitle">Comprehensive estate planning to protect your assets and ensure your wishes are honored.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Estate Planning <span>Overview</span></h2>
        <p class="section-subtitle">Protecting your family's future through thoughtful estate planning.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>Estate planning is about more than just writing a will—it's about creating a comprehensive strategy to protect your assets, minimize taxes, and ensure your loved ones are cared for according to your wishes. At Adams & Magoma Advocates, we help individuals and families develop estate plans that provide peace of mind and financial security.</p>

                <p>Our estate planning services cover wills, trusts, succession planning, and tax optimization strategies tailored to Kenya's legal framework. We work closely with our clients to understand their unique circumstances and goals, creating personalized plans that adapt to changing family dynamics and legal requirements.</p>

                <p>With extensive experience in estate matters, we ensure your legacy is preserved and your beneficiaries are protected through careful planning and professional execution.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">200+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Estate Plans Created</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">98%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Plans Executed Successfully</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">4+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Years Experience</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Estate Planning Consultation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Estate Planning <span>Services</span></h2>
        <p class="section-subtitle">Comprehensive solutions for protecting and transferring your wealth.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Wills & Testament -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="service-title">Wills & Testament Drafting</h3>
                <p class="service-description">Professional will drafting that clearly expresses your wishes for asset distribution, guardianship, and estate administration.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Simple and complex wills</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Guardianship appointments</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Executor nominations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Will updates and codicils</li>
                </ul>
            </div>

            <!-- Trust Planning -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="service-title">Trust Planning & Administration</h3>
                <p class="service-description">Establishing trusts for asset protection, tax planning, and controlled distribution of wealth to beneficiaries.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Living trusts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Testamentary trusts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Asset protection trusts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Trust administration</li>
                </ul>
            </div>

            <!-- Probate & Estate Administration -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Probate & Estate Administration</h3>
                <p class="service-description">Complete probate services and estate administration to ensure proper distribution of assets according to your will.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Grant of probate applications</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Estate inventory and valuation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Asset collection and distribution</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Tax compliance</li>
                </ul>
            </div>

            <!-- Succession Planning -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Succession Planning for Businesses</h3>
                <p class="service-description">Strategic planning for business succession, including share transfers, management transitions, and family business continuity.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Business succession planning</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Share transfer agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Management buyouts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Family business structures</li>
                </ul>
            </div>

            <!-- Tax Planning -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3 class="service-title">Estate Tax Planning & Optimization</h3>
                <p class="service-description">Strategic tax planning to minimize estate taxes and maximize the value transferred to your beneficiaries.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Estate tax assessment</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Tax-efficient structures</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Gift tax planning</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>International estate planning</li>
                </ul>
            </div>

            <!-- Power of Attorney -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-hand-paper"></i>
                </div>
                <h3 class="service-title">Power of Attorney & Advance Directives</h3>
                <p class="service-description">Legal documents appointing trusted individuals to make decisions on your behalf if you become incapacitated.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Lasting power of attorney</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Financial powers</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Healthcare directives</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Living wills</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Approach</span></h2>
        <p class="section-subtitle">Personalized, comprehensive estate planning solutions.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 class="service-title">Personalized Planning</h3>
                <p class="service-description">Every estate plan is tailored to your unique family circumstances, assets, and goals for optimal protection and tax efficiency.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3 class="service-title">Regular Reviews</h3>
                <p class="service-description">We recommend annual reviews of your estate plan to ensure it remains current with changes in law, family circumstances, and assets.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3 class="service-title">Privacy & Security</h3>
                <p class="service-description">Your estate planning documents and discussions are handled with the utmost confidentiality and secure storage.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Estate Planning <span>Team</span></h2>
        <p class="section-subtitle">Experienced attorneys specializing in estate and succession matters.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Partner & Estate Planning Specialist</div>
                <p class="attorney-bio">Leading estate planning matters with expertise in wills, trusts, and succession planning across Kenya.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">STEP Qualified</span>
                </div>
            </div>

            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner & Tax Law Expert</div>
                <p class="attorney-bio">Specialized in estate tax planning and business succession with strong experience in complex estate structures.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Tax Law Specialist</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Estate Planning <span>Resources</span></h2>
        <p class="section-subtitle">Download guides and checklists to help with your estate planning.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="service-title">Estate Planning Checklist</h3>
                <p class="service-description">Comprehensive checklist covering all essential estate planning documents and considerations for Kenyan residents.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="service-title">Will Writing Guide</h3>
                <p class="service-description">Step-by-step guide to writing a valid will in Kenya, including legal requirements and common pitfalls to avoid.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Probate Process Guide</h3>
                <p class="service-description">Understanding the probate process in Kenya, timelines, costs, and what to expect during estate administration.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>
        </div>
    </section>

    <!-- Related Practice Areas -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Related Practice <span>Areas</span></h2>
        <p class="section-subtitle">Explore other legal services that complement estate planning.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Family Law</h3>
                <p class="service-description">Family law matters including divorce, custody, and asset division that impact estate planning decisions.</p>
                <a href="{{ route('practice-areas.family-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Corporate Law</h3>
                <p class="service-description">Business succession planning and corporate restructuring for smooth ownership transitions.</p>
                <a href="{{ route('practice-areas.corporate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Real Estate Law</h3>
                <p class="service-description">Property ownership, transfer, and inheritance matters that form part of comprehensive estate planning.</p>
                <a href="{{ route('practice-areas.real-estate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Estate Planning <span>FAQ</span></h2>
        <p class="section-subtitle">Common questions about estate planning and succession.</p>
        <div class="section-divider"></div>

        <div class="faq-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Do I need a will in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>While not strictly mandatory, having a will ensures your assets are distributed according to your wishes rather than intestacy laws. Without a will, your estate may be distributed according to the Law of Succession Act, which may not reflect your preferences.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How long does probate take in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Probate typically takes 6-12 months, depending on estate complexity, court schedules, and whether there are disputes. Simple estates may be processed faster, while complex estates with multiple assets or beneficiaries may take longer.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What are the costs involved in estate planning?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Costs vary by complexity, but typically include legal fees for document preparation (KSh 50,000-200,000), court fees for probate (0.6% of estate value), and executor commissions (up to 5% of estate value). We provide transparent cost estimates upfront.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Can I change my will after it's made?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can change your will at any time by making a new will or adding codicils. Major life changes like marriage, divorce, births, or significant asset changes should prompt a will review. We recommend annual reviews of your estate plan.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What happens if someone dies without a will?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>If someone dies intestate, their estate is distributed according to the Law of Succession Act. Spouses and children are prioritized, but the distribution may not reflect the deceased's wishes. This process is often more complex and costly than probate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Protect Your <span>Legacy Today</span></h2>
        <p class="cta-description">Get started today with a free case assessment or book a consultation with our estate planning experts.</p>
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