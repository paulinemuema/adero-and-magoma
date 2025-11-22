@extends('layouts.public')

@section('title', 'Family Law Services | Adams & Magoma Advocates')

@section('content')
    <x-navbar />

    <!-- Breadcrumb -->
    <section class="section" style="padding: 1rem 0; background: var(--background);">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin: 0; background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: var(--primary);">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('practice-areas') }}" style="color: var(--primary);">Practice Areas</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-light);">Family Law</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" style="height: 50vh; min-height: 400px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Family Law Services</div>
            <h1 class="hero-title">Protecting Your <span>Family's</span> Future</h1>
            <p class="hero-subtitle">Compassionate and effective legal representation in family matters, divorce, custody, and child welfare.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Family Law <span>Overview</span></h2>
        <p class="section-subtitle">Supporting families through life's most challenging transitions.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>Family law matters touch the most personal aspects of our lives. At Adams & Magoma Advocates, we understand that family disputes require not only legal expertise but also sensitivity and compassion. Our family law practice combines deep legal knowledge with a genuine commitment to helping families navigate difficult situations.</p>

                <p>We represent clients in all aspects of family law, from divorce and separation to child custody, adoption, and domestic violence matters. Our goal is to achieve fair and sustainable resolutions that protect the best interests of children and all family members involved.</p>

                <p>With years of experience in family law matters across Kenya, we provide strategic counsel and dedicated representation to ensure your family's future is secure.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">85%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Cases Resolved Amicably</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">150+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Family Cases Handled</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">95%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Client Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Family Law Consultation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Family Law <span>Services</span></h2>
        <p class="section-subtitle">Comprehensive legal support for all family-related matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Divorce & Separation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-heart-broken"></i>
                </div>
                <h3 class="service-title">Divorce & Legal Separation</h3>
                <p class="service-description">Compassionate representation in divorce proceedings, legal separation, and annulment cases with focus on fair asset division.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Contested & uncontested divorce</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Legal separation agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Annulment proceedings</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Asset and debt division</li>
                </ul>
            </div>

            <!-- Child Custody & Support -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-child"></i>
                </div>
                <h3 class="service-title">Child Custody & Support</h3>
                <p class="service-description">Dedicated advocacy for children's best interests in custody arrangements, visitation rights, and child support matters.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Custody arrangements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Visitation and access rights</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Child support calculations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Parental responsibility</li>
                </ul>
            </div>

            <!-- Adoption & Guardianship -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Adoption & Guardianship</h3>
                <p class="service-description">Complete legal guidance through adoption processes and guardianship appointments for children's welfare and protection.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Domestic adoption</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>International adoption</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Guardianship applications</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Foster care arrangements</li>
                </ul>
            </div>

            <!-- Domestic Violence Protection -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="service-title">Domestic Violence Protection</h3>
                <p class="service-description">Urgent legal protection and support for victims of domestic violence, including protection orders and restraining measures.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Protection orders</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Restraining orders</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Emergency court applications</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Victim support coordination</li>
                </ul>
            </div>

            <!-- Marriage & Cohabitation Agreements -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-ring"></i>
                </div>
                <h3 class="service-title">Marriage & Cohabitation Agreements</h3>
                <p class="service-description">Pre-nuptial agreements, post-nuptial agreements, and cohabitation contracts to protect assets and clarify rights.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Pre-nuptial agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Post-nuptial agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Cohabitation agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Asset protection planning</li>
                </ul>
            </div>

            <!-- Family Mediation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="service-title">Family Mediation & Dispute Resolution</h3>
                <p class="service-description">Alternative dispute resolution services to help families reach amicable agreements without court intervention.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Mediation services</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Collaborative law</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Settlement negotiations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Arbitration support</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Approach</span></h2>
        <p class="section-subtitle">Compassionate, child-centered solutions for family matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="service-title">Compassionate Representation</h3>
                <p class="service-description">We understand the emotional nature of family disputes and provide sensitive, supportive legal representation throughout the process.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Child-Centered Focus</h3>
                <p class="service-description">Children's best interests remain our primary consideration in all custody, support, and welfare matters.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="service-title">Efficient Resolution</h3>
                <p class="service-description">We prioritize amicable settlements when possible, while being fully prepared to advocate vigorously in court when necessary.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Family Law <span>Team</span></h2>
        <p class="section-subtitle">Experienced family law attorneys dedicated to protecting families.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Partner & Family Law Specialist</div>
                <p class="attorney-bio">Leading family law matters with expertise in divorce, custody, and child welfare cases across Kenya.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Certified Family Mediator</span>
                </div>
            </div>

            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner & Child Law Expert</div>
                <p class="attorney-bio">Specialized in child custody, adoption, and protection matters with strong experience in family court proceedings.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Child Rights Advocate</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Family Law <span>Resources</span></h2>
        <p class="section-subtitle">Download guides and information to help with family law matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="service-title">Divorce Process Guide</h3>
                <p class="service-description">Complete guide to divorce proceedings in Kenya, including timelines, requirements, and what to expect.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="service-title">Child Custody Rights</h3>
                <p class="service-description">Understanding parental rights and responsibilities, custody arrangements, and child support obligations.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Domestic Violence Protection Guide</h3>
                <p class="service-description">Information on protection orders, emergency procedures, and support services for domestic violence victims.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>
        </div>
    </section>

    <!-- Related Practice Areas -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Related Practice <span>Areas</span></h2>
        <p class="section-subtitle">Explore other legal services that complement family law.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="service-title">Estate Planning</h3>
                <p class="service-description">Wills, trusts, and succession planning to protect your family's financial future and asset distribution.</p>
                <a href="{{ route('practice-areas.estate-planning') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Litigation</h3>
                <p class="service-description">Court representation for complex family disputes and enforcement of family court orders.</p>
                <a href="{{ route('practice-areas.litigation') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="service-title">Real Estate Law</h3>
                <p class="service-description">Property matters including matrimonial homes, asset division, and family property disputes.</p>
                <a href="{{ route('practice-areas.real-estate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Family Law <span>FAQ</span></h2>
        <p class="section-subtitle">Common questions about our family law services.</p>
        <div class="section-divider"></div>

        <div class="faq-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How long does a divorce take in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Uncontested divorces can be completed in 3-6 months, while contested divorces may take 1-2 years or longer depending on complexity. The timeline depends on court schedules, mediation attempts, and whether children are involved.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How is child custody determined?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Custody is determined based on the child's best interests, considering factors like parental capability, living arrangements, child's preferences (for older children), and maintaining family relationships. Courts prioritize the child's welfare above all else.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What is the difference between legal separation and divorce?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Legal separation allows couples to live apart and address custody, support, and property issues without ending the marriage. Divorce terminates the marriage entirely. Separation can be a step toward divorce or a long-term arrangement.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Can I get a protection order for domestic violence?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can apply for a protection order under the Protection Against Domestic Violence Act. These orders can prohibit contact, remove the abuser from the home, and provide custody arrangements. Applications can be made urgently in cases of immediate danger.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What should I do if my spouse wants a divorce?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Consult a family law attorney immediately to understand your rights and options. Preserve financial records, consider temporary arrangements for children, and avoid making major financial decisions. Early legal advice can significantly impact the outcome.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Need Family Law <span>Assistance?</span></h2>
        <p class="cta-description">Get started today with a free case assessment or book a consultation with our family law experts.</p>
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