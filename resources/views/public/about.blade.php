@extends('layouts.public')

@section('title', 'About Us | Adams & Magoma Advocates')
@section('description', 'Learn about Adams & Magoma Advocates - Premier law firm in Nairobi, Kenya since 2021. Our experienced attorneys provide exceptional legal services with integrity and dedication. 150+ cases resolved, 98% client satisfaction.')
@section('keywords', 'about Adams Magoma Advocates, law firm Nairobi, legal services Kenya, experienced lawyers, law firm history')

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
      'name' => 'About Us',
      'item' => url()->current()
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Hero -->
    <section class="hero about-hero">
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
            <h1 class="hero-title">About <span>Adams</span> & <span>Magoma</span></h1>
            <p class="hero-subtitle">A premier full-service law firm delivering strategic counsel, courtroom excellence, and client-first results since 2021.</p>
            <div class="hero-cta">
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <span>Schedule Consultation</span>
                    <i class="fas fa-calendar-check"></i>
                </a>
                <a href="{{ route('practice-areas') }}" class="btn btn-secondary">
                    <span>Our Services</span>
                    <i class="fas fa-briefcase"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Key Statistics Section -->
    <section class="section stats-showcase-section">
        <div class="bg-pattern"></div>
        <div class="stats-showcase-container">
            <div class="stat-showcase-item fade-in">
                <div class="stat-showcase-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <div class="stat-showcase-content">
                    <span class="stat-showcase-number" data-target="150">0</span>
                    <span class="stat-showcase-suffix">+</span>
                    <span class="stat-showcase-label">Cases Successfully Resolved</span>
                </div>
            </div>
            <div class="stat-showcase-item fade-in">
                <div class="stat-showcase-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-showcase-content">
                    <span class="stat-showcase-number" data-target="4">0</span>
                    <span class="stat-showcase-suffix">+</span>
                    <span class="stat-showcase-label">Years of Excellence</span>
                </div>
            </div>
            <div class="stat-showcase-item fade-in">
                <div class="stat-showcase-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="stat-showcase-content">
                    <span class="stat-showcase-number" data-target="98">0</span>
                    <span class="stat-showcase-suffix">%</span>
                    <span class="stat-showcase-label">Client Satisfaction Rate</span>
                </div>
            </div>
            <div class="stat-showcase-item fade-in">
                <div class="stat-showcase-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-showcase-content">
                    <span class="stat-showcase-number" data-target="150">0</span>
                    <span class="stat-showcase-suffix">+</span>
                    <span class="stat-showcase-label">Cases Resolved</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Firm Overview -->
    <section class="section about-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Who <span>We Are</span></h2>
        <p class="section-subtitle">We combine deep legal expertise with business insight to solve complex challenges and protect what matters most to our clients.</p>
        <div class="section-divider"></div>

        <div class="about-container">
            <div class="about-content">
                <h2>Client-Centered, <span>Results-Driven</span></h2>
                <p>Adams & Magoma Advocates is a trusted legal partner to corporations, institutions, and individuals across the region. Our attorneys bring extensive experience across corporate transactions, litigation, real estate, family law, employment, and estate planning.</p>
                <p>We align legal strategy to business goals, prioritize clarity and communication, and execute with precision. Our culture is built on integrity, excellence, and relentless advocacy.</p>
                
                <div class="about-features">
                    <div class="about-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Full-Service Legal Solutions</span>
                    </div>
                    <div class="about-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Multi-Jurisdictional Expertise</span>
                    </div>
                    <div class="about-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>24/7 Client Support</span>
                    </div>
                    <div class="about-feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Transparent Fee Structure</span>
                    </div>
                </div>

                <div class="about-cta-inline">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        <span>Get Started Today</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
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

    <!-- Why Choose Us Section -->
    <section class="section why-choose-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Why <span>Choose</span> Us</h2>
        <p class="section-subtitle">Experience the difference of working with a law firm that puts your success first.</p>
        <div class="section-divider"></div>

        <div class="why-choose-grid">
            <div class="why-choose-card fade-in">
                <div class="why-choose-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="why-choose-title">Proven Track Record</h3>
                <p class="why-choose-description">With over 500 successful cases and a 98% client satisfaction rate, we deliver results that matter.</p>
                <div class="why-choose-metric">
                    <span class="metric-value">98%</span>
                    <span class="metric-label">Success Rate</span>
                </div>
            </div>
            <div class="why-choose-card fade-in">
                <div class="why-choose-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="why-choose-title">Rapid Response</h3>
                <p class="why-choose-description">We understand legal matters are time-sensitive. Our team responds within 24 hours, often sooner.</p>
                <div class="why-choose-metric">
                    <span class="metric-value">&lt;24hrs</span>
                    <span class="metric-label">Response Time</span>
                </div>
            </div>
            <div class="why-choose-card fade-in">
                <div class="why-choose-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="why-choose-title">Transparent Pricing</h3>
                <p class="why-choose-description">No hidden fees or surprises. We provide clear, upfront pricing so you know exactly what to expect.</p>
                <div class="why-choose-metric">
                    <span class="metric-value">100%</span>
                    <span class="metric-label">Transparency</span>
                </div>
            </div>
            <div class="why-choose-card fade-in">
                <div class="why-choose-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3 class="why-choose-title">Personalized Service</h3>
                <p class="why-choose-description">Every client receives dedicated attention from experienced attorneys who understand your unique needs.</p>
                <div class="why-choose-metric">
                    <span class="metric-value">1-on-1</span>
                    <span class="metric-label">Dedicated Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="section values-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Mission</span> & Values</h2>
        <p class="section-subtitle">Principles that guide every engagement and define how we show up for our clients and communities.</p>
        <div class="section-divider"></div>

        <div class="values-container">
            <div class="values-main">
                <div class="value-card-large fade-in">
                    <div class="value-icon-large">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="value-title-large">Our Mission</h3>
                    <p class="value-description-large">To deliver exceptional legal solutions with unwavering integrity, strategic foresight, and a relentless focus on client success. We are committed to being the trusted legal partner that helps our clients achieve their goals while upholding the highest standards of the legal profession.</p>
                </div>
            </div>
            <div class="values-grid">
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Integrity</h3>
                    <p class="value-description">We uphold the highest ethical standards, ensuring transparency, accountability, and trust in all matters.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Excellence</h3>
                    <p class="value-description">We bring rigor, creativity, and precision to every case, seeking the most advantageous outcomes.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="value-title">Advocacy</h3>
                    <p class="value-description">We stand firmly for our clients' interests, combining diplomacy with decisive action when it matters most.</p>
                </div>
                <div class="value-card fade-in">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="value-title">Compassion</h3>
                    <p class="value-description">We understand that legal matters are personal. We approach every case with empathy and understanding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section class="section process-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">How <span>We Work</span></h2>
        <p class="section-subtitle">Our proven process ensures you receive the best possible legal representation from start to finish.</p>
        <div class="section-divider"></div>

        <div class="process-timeline">
            <div class="process-step fade-in">
                <div class="process-number">01</div>
                <div class="process-content">
                    <h3 class="process-title">Initial Consultation</h3>
                    <p class="process-description">We start with a comprehensive consultation to understand your legal needs, goals, and concerns. This free 30-minute session helps us determine the best approach for your situation.</p>
                </div>
            </div>
            <div class="process-step fade-in">
                <div class="process-number">02</div>
                <div class="process-content">
                    <h3 class="process-title">Case Analysis & Strategy</h3>
                    <p class="process-description">Our team conducts thorough research and analysis to develop a customized legal strategy tailored to your specific circumstances and objectives.</p>
                </div>
            </div>
            <div class="process-step fade-in">
                <div class="process-number">03</div>
                <div class="process-content">
                    <h3 class="process-title">Transparent Proposal</h3>
                    <p class="process-description">We provide a clear, detailed proposal outlining our approach, timeline, and transparent fee structure. No surprises, just honest communication.</p>
                </div>
            </div>
            <div class="process-step fade-in">
                <div class="process-number">04</div>
                <div class="process-content">
                    <h3 class="process-title">Dedicated Execution</h3>
                    <p class="process-description">Your dedicated attorney team works diligently on your case, keeping you informed at every step and ensuring your voice is heard.</p>
                </div>
            </div>
            <div class="process-step fade-in">
                <div class="process-number">05</div>
                <div class="process-content">
                    <h3 class="process-title">Resolution & Support</h3>
                    <p class="process-description">We work tirelessly to achieve the best possible outcome, and our relationship doesn't end there—we're here for ongoing support.</p>
                </div>
            </div>
        </div>

        <div class="process-cta">
            <a href="{{ route('contact') }}" class="btn btn-primary">
                <span>Start Your Journey</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- Our History -->
    <section class="section history-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>History</span></h2>
                <p class="section-subtitle">A growing legacy of legal leadership and client service since our founding.</p>
        <div class="section-divider"></div>

        <div class="history-timeline">
            <div class="timeline-item fade-in">
                <div class="timeline-marker">2021</div>
                <div class="timeline-content">
                    <h3>Firm Founded</h3>
                    <p>Adams & Magoma Advocates opens its doors with a bold vision: to deliver world-class legal services with a uniquely personal touch. Founded by Brian Adams Adero and Magoma, the firm begins with a commitment to excellence and client-centered service.</p>
                    <div class="timeline-meta">Vision Established • Client-Focused Approach • Excellence Commitment</div>
                </div>
            </div>

            <div class="timeline-item fade-in">
                <div class="timeline-marker">2023</div>
                <div class="timeline-content">
                    <h3>Growing Reputation</h3>
                    <p>The firm builds a strong reputation for effective legal representation across multiple practice areas. We successfully resolve numerous cases and establish ourselves as a trusted legal partner in the region.</p>
                    <div class="timeline-meta">Strong Track Record • Trusted Partner • Growing Recognition</div>
                </div>
            </div>

            <div class="timeline-item fade-in">
                <div class="timeline-marker">2025</div>
                <div class="timeline-content">
                    <h3>Established Excellence</h3>
                    <p>We continue to grow, serving organizations and families with dedication and professionalism. Today, we've resolved over 150 matters with a 98% client satisfaction rate, building on our foundation of excellence.</p>
                    <div class="timeline-meta">150+ Matters Resolved • 98% Client Satisfaction • Established Excellence</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="section attorneys-section" id="leadership">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Firm <span>Leadership</span></h2>
        <p class="section-subtitle">Experienced attorneys leading with strategy, empathy, and excellence.</p>
        <div class="section-divider"></div>

        <div class="attorneys-grid">
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <img src="{{ asset('assets/images/attorneys/brian-adams-adero.jpg') }}" alt="Brian Adams Adero" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="attorney-placeholder" style="display: none;">BA</div>
                </div>
                <h3 class="attorney-name">Brian Adams Adero</h3>
                <div class="attorney-role">Senior Partner</div>
                <p class="attorney-bio">Advisor to businesses and individuals on corporate law, litigation, and legal strategy. Specializes in corporate transactions, dispute resolution, and providing strategic legal counsel to help clients achieve their objectives.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Advocate of the High Court</span>
                    <span class="credential">Corporate Law Specialist</span>
                </div>
                <div class="attorney-social">
                    <a href="#" class="attorney-social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="attorney-social-link"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="attorney-card fade-in">
                <div class="attorney-image">
                    <img src="{{ asset('assets/images/attorneys/magoma.jpg') }}" alt="Magoma" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="attorney-placeholder" style="display: none;">M</div>
                </div>
                <h3 class="attorney-name">Magoma</h3>
                <div class="attorney-role">Managing Partner</div>
                <p class="attorney-bio">Experienced attorney with expertise in real estate law, family law, and employment matters. Specializes in property transactions, family legal matters, and workplace disputes, providing practical solutions and dedicated representation.</p>
                <div class="attorney-credentials">
                    <span class="credential">LLB (University of Nairobi)</span>
                    <span class="credential">Advocate of the High Court</span>
                    <span class="credential">Multi-Practice Specialist</span>
                </div>
                <div class="attorney-social">
                    <a href="#" class="attorney-social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="attorney-social-link"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="section testimonials-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">What Our <span>Clients</span> Say</h2>
        <p class="section-subtitle">Hear from clients who have experienced our commitment to excellence firsthand.</p>
        <div class="section-divider"></div>

        <div class="testimonials-container">
            <div class="testimonials-carousel" id="aboutTestimonialsCarousel">
                <div class="testimonial-card active">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Working with Adams & Magoma was a game-changer for our business. Their strategic approach to our corporate restructuring not only saved us millions but positioned us for unprecedented growth. The team's expertise and dedication are unmatched.</p>
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
                    <p class="testimonial-text">During one of the most difficult times in my life, the team at Adams & Magoma provided not just legal expertise, but genuine compassion and support. They guided me through my divorce with professionalism and care, achieving a fair outcome.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MW</div>
                        <div class="author-info">
                            <h4>Mary Wanjiku</h4>
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
                    <p class="testimonial-text">Their real estate team helped us navigate a complex commercial property acquisition. Their attention to detail and negotiation skills saved us significant costs and ensured a smooth transaction. Highly recommend!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">DK</div>
                        <div class="author-info">
                            <h4>David Kamau</h4>
                            <p>Property Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials-controls">
                <button class="testimonial-btn prev" id="prevAboutTestimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="testimonials-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
                <button class="testimonial-btn next" id="nextAboutTestimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition -->
    <section class="section awards-section">
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

    <!-- Team Culture Section -->
    <section class="section culture-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Our <span>Culture</span></h2>
        <p class="section-subtitle">A workplace built on collaboration, innovation, and mutual respect—where excellence thrives.</p>
        <div class="section-divider"></div>

        <div class="culture-container">
            <div class="culture-content">
                <div class="culture-item fade-in">
                    <div class="culture-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="culture-title">Collaborative Environment</h3>
                    <p class="culture-description">We believe the best solutions come from teamwork. Our attorneys collaborate across practice areas to deliver comprehensive legal strategies.</p>
                </div>
                <div class="culture-item fade-in">
                    <div class="culture-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="culture-title">Continuous Learning</h3>
                    <p class="culture-description">We invest in ongoing education and training to stay at the forefront of legal developments and industry best practices.</p>
                </div>
                <div class="culture-item fade-in">
                    <div class="culture-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="culture-title">Work-Life Balance</h3>
                    <p class="culture-description">We support our team's well-being, recognizing that a balanced life leads to better service and happier clients.</p>
                </div>
                <div class="culture-item fade-in">
                    <div class="culture-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="culture-title">Community Impact</h3>
                    <p class="culture-description">We're committed to giving back through pro bono work, mentorship programs, and community initiatives.</p>
                </div>
            </div>
            <div class="culture-visual">
                <div class="culture-image-grid">
                    <div class="culture-image-item">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Team Collaboration">
                    </div>
                    <div class="culture-image-item">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Office Environment">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Differentiators -->
    <section class="section differentiators-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">What Sets <span>Us</span> Apart</h2>
        <p class="section-subtitle">Strategic counsel, responsive service, and unwavering advocacy—powered by a team that treats your goals as our own.</p>
        <div class="section-divider"></div>

        <div class="differentiators-grid">
            <div class="differentiator-card fade-in">
                <div class="differentiator-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3 class="differentiator-title">Business-Aligned Strategy</h3>
                <p class="differentiator-description">Advice grounded in commercial realities, not legal theory alone. We understand your business goals and align our legal strategy accordingly.</p>
            </div>
            <div class="differentiator-card fade-in">
                <div class="differentiator-icon">
                    <i class="fas fa-stopwatch"></i>
                </div>
                <h3 class="differentiator-title">Responsiveness</h3>
                <p class="differentiator-description">Clear, prompt communication and proactive updates at every stage. We respond to your inquiries within 24 hours, often much sooner.</p>
            </div>
            <div class="differentiator-card fade-in">
                <div class="differentiator-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="differentiator-title">Courtroom Strength</h3>
                <p class="differentiator-description">Proven litigators who prepare meticulously and advocate fearlessly. Our track record speaks for itself.</p>
            </div>
            <div class="differentiator-card fade-in">
                <div class="differentiator-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3 class="differentiator-title">Community Impact</h3>
                <p class="differentiator-description">Commitment to pro bono, mentorship, and meaningful social initiatives. We believe in using our expertise to make a difference.</p>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="section final-cta-section">
        <div class="bg-pattern"></div>
        <div class="final-cta-container">
            <h2 class="final-cta-title">Ready to Experience <span>Excellence</span>?</h2>
            <p class="final-cta-description">Join hundreds of satisfied clients who have trusted Adams & Magoma Advocates with their most important legal matters. Schedule your free consultation today.</p>
            <div class="final-cta-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <span>Schedule Free Consultation</span>
                    <i class="fas fa-calendar-check"></i>
                </a>
                <a href="tel:+254700123456" class="btn btn-secondary">
                    <span>Call Us Now</span>
                    <i class="fas fa-phone"></i>
                </a>
            </div>
            <div class="final-cta-trust">
                <div class="trust-badge-mini">
                    <i class="fas fa-shield-check"></i>
                    <span>100% Confidential</span>
                </div>
                <div class="trust-badge-mini">
                    <i class="fas fa-clock"></i>
                    <span>Free 30-Min Consultation</span>
                </div>
                <div class="trust-badge-mini">
                    <i class="fas fa-star"></i>
                    <span>98% Client Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <x-footer />

    <!-- Floating Action Buttons -->
    <div class="floating-actions">
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
