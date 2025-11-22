@extends('layouts.public')

@section('title', 'Employment Law Services | Adams & Magoma Advocates')

@section('content')
    <x-navbar />

    <!-- Breadcrumb -->
    <section class="section" style="padding: 1rem 0; background: var(--background);">
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="margin: 0; background: transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: var(--primary);">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('practice-areas') }}" style="color: var(--primary);">Practice Areas</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: var(--text-light);">Employment Law</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" style="height: 50vh; min-height: 400px;">
        <div class="bg-pattern"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Employment Law Services</div>
            <h1 class="hero-title">Workplace <span>Rights</span> Protection</h1>
            <p class="hero-subtitle">Expert guidance on employment contracts, workplace disputes, and compliance with labor legislation.</p>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Employment Law <span>Overview</span></h2>
        <p class="section-subtitle">Protecting employee and employer rights in the workplace.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <p>Employment relationships form the foundation of business success and personal livelihood. At Adams & Magoma Advocates, we provide comprehensive employment law services that protect both employers and employees, ensuring fair treatment and legal compliance in the workplace.</p>

                <p>Our employment law practice covers the full spectrum of workplace issues, from contract drafting and dispute resolution to regulatory compliance and workplace investigations. We represent individuals, small businesses, and large corporations in navigating Kenya's complex employment legislation.</p>

                <p>With deep expertise in labor law and practical experience across industries, we help our clients achieve fair resolutions while maintaining productive workplace relationships and avoiding costly litigation.</p>

                <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">95%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Dispute Resolution Rate</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">400+</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Employment Cases Handled</div>
                    </div>
                    <div class="stat-item" style="text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">98%</div>
                        <div style="color: var(--text-light); font-size: 0.9rem;">Compliance Success Rate</div>
                    </div>
                </div>
            </div>
            <div class="about-visual">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Employment Law Consultation" class="about-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Employment Law <span>Services</span></h2>
        <p class="section-subtitle">Comprehensive legal support for employers and employees.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1200px; margin: 0 auto;">
            <!-- Employment Contracts -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3 class="service-title">Employment Contracts & Policies</h3>
                <p class="service-description">Drafting and review of employment contracts, handbooks, and workplace policies ensuring legal compliance and clarity.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Contract drafting</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Policy development</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Handbook creation</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Contract reviews</li>
                </ul>
            </div>

            <!-- Workplace Disputes -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Workplace Disputes & Grievances</h3>
                <p class="service-description">Resolution of workplace conflicts, disciplinary matters, and employee grievances through mediation and legal processes.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Disciplinary procedures</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Grievance handling</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Mediation services</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Conflict resolution</li>
                </ul>
            </div>

            <!-- Termination & Redundancy -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-user-times"></i>
                </div>
                <h3 class="service-title">Termination & Redundancy</h3>
                <p class="service-description">Legal guidance on employee terminations, layoffs, and redundancy processes ensuring fair treatment and legal compliance.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Fair dismissal procedures</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Redundancy planning</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Severance agreements</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Unfair dismissal claims</li>
                </ul>
            </div>

            <!-- Discrimination & Harassment -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="service-title">Discrimination & Harassment</h3>
                <p class="service-description">Protection against workplace discrimination and harassment, including investigations and legal remedies.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Discrimination claims</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Harassment investigations</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Workplace bullying</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Equal opportunity compliance</li>
                </ul>
            </div>

            <!-- Regulatory Compliance -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h3 class="service-title">Labor Law Compliance & Audits</h3>
                <p class="service-description">Ensuring workplace compliance with employment laws, conducting audits, and implementing corrective measures.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Compliance audits</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Regulatory filings</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Risk assessments</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Training programs</li>
                </ul>
            </div>

            <!-- Executive Compensation -->
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-money-check"></i>
                </div>
                <h3 class="service-title">Executive Compensation & Benefits</h3>
                <p class="service-description">Structuring executive employment agreements, compensation packages, and benefits for senior management.</p>
                <ul style="list-style: none; padding: 0; margin: 1rem 0; color: var(--text-gray); font-size: 0.9rem;">
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Executive contracts</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Compensation planning</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Benefits structuring</li>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--primary); margin-right: 0.5rem;"></i>Non-compete agreements</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Approach</span></h2>
        <p class="section-subtitle">Balanced, practical solutions for workplace challenges.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Balanced Advocacy</h3>
                <p class="service-description">We represent both employers and employees, ensuring fair treatment and legal compliance while protecting legitimate business interests.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="service-title">Preventive Counseling</h3>
                <p class="service-description">We focus on preventing disputes through proactive advice, proper documentation, and workplace policies that minimize legal risks.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="service-title">Timely Resolution</h3>
                <p class="service-description">Quick assessment and resolution of employment issues to minimize disruption and maintain productive workplace relationships.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our Employment Law <span>Team</span></h2>
        <p class="section-subtitle">Experienced employment attorneys serving employers and employees.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Partner & Employment Law Specialist</div>
                <p class="attorney-bio">Leading employment law matters with expertise in workplace disputes, compliance, and labor relations across Kenya.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Labor Law Specialist</span>
                </div>
            </div>

            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <div class="attorney-placeholder">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner & Workplace Dispute Expert</div>
                <p class="attorney-bio">Specialized in workplace investigations, disciplinary matters, and employment litigation with strong corporate experience.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Employment Mediator</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Employment Law <span>Resources</span></h2>
        <p class="section-subtitle">Download guides and checklists for employment matters.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3 class="service-title">Employment Contract Guide</h3>
                <p class="service-description">Essential guide to employment contracts in Kenya, including key clauses, legal requirements, and common pitfalls.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="service-title">Workplace Discipline Handbook</h3>
                <p class="service-description">Complete guide to fair disciplinary procedures, investigations, and dismissal processes under Kenyan labor law.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="service-title">Labor Law Compliance Checklist</h3>
                <p class="service-description">Comprehensive checklist for employers to ensure compliance with employment laws, regulations, and best practices.</p>
                <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Download PDF</a>
            </div>
        </div>
    </section>

    <!-- Related Practice Areas -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Related Practice <span>Areas</span></h2>
        <p class="section-subtitle">Explore other legal services that complement employment law.</p>
        <div class="section-divider"></div>

        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="service-title">Corporate Law</h3>
                <p class="service-description">Business formation, corporate governance, and workplace policies for growing companies and organizations.</p>
                <a href="{{ route('practice-areas.corporate-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3 class="service-title">Litigation</h3>
                <p class="service-description">Employment dispute litigation, unfair dismissal claims, and workplace conflict resolution through courts.</p>
                <a href="{{ route('practice-areas.litigation') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="service-title">Family Law</h3>
                <p class="service-description">Family-related employment issues and work-life balance matters that intersect with family law concerns.</p>
                <a href="{{ route('practice-areas.family-law') }}" class="btn btn-primary" style="margin-top: 1rem;">Learn More</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Employment Law <span>FAQ</span></h2>
        <p class="section-subtitle">Common questions about employment rights and workplace law.</p>
        <div class="section-divider"></div>

        <div class="faq-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What are the minimum employment rights in Kenya?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Employees are entitled to written contracts, minimum wage, paid annual leave (21-30 days), sick leave, maternity leave (3 months), and protection from unfair dismissal. The Employment Act 2007 governs most private sector employment relationships.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>How much notice must an employer give for termination?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Notice periods vary by length of service: 1 month for 1-5 years, 2 months for 5-10 years, and 3 months for over 10 years. Employers can pay salary in lieu of notice. Immediate termination is allowed only for gross misconduct with valid reasons.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What constitutes unfair dismissal?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Unfair dismissal occurs when termination lacks valid reason, proper procedure isn't followed, or dismissal is discriminatory. Valid reasons include poor performance, misconduct, or redundancy. Employees can claim reinstatement, compensation, or damages.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>Can employers require non-compete agreements?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Non-compete clauses are enforceable if reasonable in scope, duration (typically 1-2 years), and geographic area. They must protect legitimate business interests and not unduly restrict employment opportunities. Courts can modify unreasonable restrictions.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <button class="faq-question" aria-expanded="false">
                    <span>What should I do if I face workplace harassment?</span>
                    <i class="fas fa-chevron-down faq-icon"></i>
                </button>
                <div class="faq-answer">
                    <p>Document incidents, report to HR/supervisor, and seek legal advice. Kenya's Occupational Safety and Health Act prohibits harassment. You may be entitled to protection orders, compensation, or constructive dismissal claims if the situation becomes unbearable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section cta-section">
        <div class="bg-pattern"></div>
        <h2 class="cta-title">Need Employment Law <span>Assistance?</span></h2>
        <p class="cta-description">Get started today with a free case assessment or book a consultation with our employment law experts.</p>
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