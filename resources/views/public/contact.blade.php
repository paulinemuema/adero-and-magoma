@extends('layouts.public')

@section('title', 'Contact Us | Adams & Magoma Advocates')
@section('description', 'Contact Adams & Magoma Advocates in Nairobi, Kenya. Get in touch for free consultations, book appointments, or send us a message. Phone: +254 700 123 456. Located at 123 Justice Avenue, Westlands.')
@section('keywords', 'contact lawyer Nairobi, legal consultation Kenya, law firm contact, book appointment, free consultation Nairobi')

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
      'name' => 'Contact Us',
      'item' => url()->current()
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="bg-pattern"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Get in Touch</div>
            <h1 class="hero-title">Contact <span>Our</span> Team</h1>
            <p class="hero-subtitle">We're here to help. Reach out to us through any of the methods below, and we'll respond promptly to assist with your legal needs.</p>
            <div class="hero-trust-indicators">
                <span class="trust-item">
                    <i class="fas fa-clock"></i>
                    <span>24/7 Emergency Support</span>
                </span>
                <span class="divider">|</span>
                <span class="trust-item">
                    <i class="fas fa-shield-check"></i>
                    <span>100% Confidential</span>
                </span>
                <span class="divider">|</span>
                <span class="trust-item">
                    <i class="fas fa-reply"></i>
                    <span>Response within 24hrs</span>
                </span>
            </div>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="section contact-methods-section">
        <div class="bg-pattern"></div>
        <div class="contact-methods-container">
            <div class="contact-method-card fade-in">
                <div class="method-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 class="method-title">Call Us</h3>
                <p class="method-description">Speak directly with our team</p>
                <a href="tel:+254700123456" class="method-link">
                    <span>+254 700 123 456</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <p class="method-hours">Mon-Fri: 8:00 AM - 6:00 PM</p>
            </div>

            <div class="contact-method-card fade-in">
                <div class="method-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="method-title">Email Us</h3>
                <p class="method-description">Send us a detailed message</p>
                <a href="mailto:info@adamsmagoma.com" class="method-link">
                    <span>info@adamsmagoma.com</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <p class="method-hours">We respond within 24 hours</p>
            </div>

            <div class="contact-method-card fade-in">
                <div class="method-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3 class="method-title">WhatsApp</h3>
                <p class="method-description">Quick chat with our team</p>
                <a href="https://wa.me/254700123456" target="_blank" class="method-link">
                    <span>Chat on WhatsApp</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <p class="method-hours">Available during business hours</p>
            </div>

            <div class="contact-method-card fade-in">
                <div class="method-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="method-title">Visit Us</h3>
                <p class="method-description">Come to our office</p>
                <a href="#locations" class="method-link">
                    <span>View Office Location</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <p class="method-hours">123 Justice Avenue, Westlands</p>
            </div>
        </div>
    </section>

    <!-- Contact Options Section -->
    <section class="section" id="contact-options">
        <div class="bg-pattern"></div>
        <div class="contact-form-container">
            <div class="contact-form-header">
                <h2 class="section-title">How Can We <span>Help You?</span></h2>
                <p class="section-subtitle">Choose the best way to get started. We're here to assist you with your legal needs.</p>
                <div class="section-divider"></div>
            </div>
            
            <div class="contact-options-grid">
                <a href="{{ route('case-evaluation') }}" class="contact-option-card">
                    <div class="option-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Get Free Case Assessment</h3>
                    <p>Answer 5 quick questions and get a preliminary assessment with recommended next steps.</p>
                    <span class="option-link">
                        Start Assessment
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
                
                <a href="{{ route('book-appointment') }}" class="contact-option-card">
                    <div class="option-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Book Appointment</h3>
                    <p>Schedule a free 30-minute consultation with one of our expert attorneys.</p>
                    <span class="option-link">
                        Book Now
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
                
                <a href="#contact-form" class="contact-option-card">
                    <div class="option-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Send Us a Message</h3>
                    <p>Fill out our contact form and we'll get back to you within 24 hours.</p>
                    <span class="option-link">
                        Send Message
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section contact-form-section" id="contact-form">
        <div class="bg-pattern"></div>
        <div class="contact-form-container">
            <div class="contact-form-header">
                <h2 class="section-title">Send Us a <span>Message</span></h2>
                <p class="section-subtitle">Fill out the form below and our team will get back to you within 24 hours. All inquiries are confidential.</p>
                <div class="section-divider"></div>
            </div>

            <div class="contact-form-layout">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <form action="#" method="POST" class="contact-form" id="contactForm">
                        @csrf
                        <div class="form-success-message" id="formSuccessMessage">
                            <i class="fas fa-check-circle"></i>
                            <span>Thank you! Your message has been sent successfully. We'll get back to you soon.</span>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">
                                    <span>Full Name</span>
                                    <span class="required">*</span>
                                </label>
                                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                                <span class="form-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    <span>Email Address</span>
                                    <span class="required">*</span>
                                </label>
                                <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                                <span class="form-error"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">
                                    <span>Phone Number</span>
                                    <span class="required">*</span>
                                </label>
                                <input type="tel" id="phone" name="phone" placeholder="+254 700 123 456" required>
                                <span class="form-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="service">
                                    <span>Practice Area</span>
                                    <span class="required">*</span>
                                </label>
                                <select id="service" name="service" required>
                                    <option value="">Select a practice area</option>
                                    <option value="corporate">Corporate Law</option>
                                    <option value="real-estate">Real Estate Law</option>
                                    <option value="family">Family Law</option>
                                    <option value="estate">Estate Planning</option>
                                    <option value="litigation">Litigation</option>
                                    <option value="employment">Employment Law</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="form-error"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">
                                <span>Subject</span>
                                <span class="required">*</span>
                            </label>
                            <input type="text" id="subject" name="subject" placeholder="Brief description of your inquiry" required>
                            <span class="form-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">
                                <span>Message</span>
                                <span class="required">*</span>
                            </label>
                            <textarea id="message" name="message" rows="6" placeholder="Tell us about your legal matter or question..." required></textarea>
                            <span class="form-error"></span>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="privacy" required>
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">
                                    I agree to the <a href="#" target="_blank">Privacy Policy</a> and consent to being contacted by Adams & Magoma Advocates.
                                </span>
                            </label>
                            <span class="form-error"></span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>

                <!-- Emergency Assistance Card -->
                <div class="emergency-card-wrapper">
                    <div class="emergency-card">
                        <div class="emergency-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="emergency-title">Emergency Legal Assistance</h3>
                        <p class="emergency-description">Need urgent legal assistance? Our emergency hotline is available 24/7 for critical matters.</p>

                        <div class="emergency-hotline">
                            <div class="hotline-badge">
                                <i class="fas fa-exclamation-triangle"></i>
                                <span>24/7 EMERGENCY HOTLINE</span>
                            </div>
                            <a href="tel:+254700999999" class="hotline-number">
                                +254 700 999 999
                            </a>
                            <p class="hotline-note">Available for urgent legal emergencies only</p>
                        </div>

                        <div class="emergency-divider"></div>

                        <div class="business-hours">
                            <h4>Business Hours</h4>
                            <div class="hours-list">
                                <div class="hours-item">
                                    <span class="hours-day">Monday - Friday</span>
                                    <span class="hours-time">8:00 AM - 6:00 PM</span>
                                </div>
                                <div class="hours-item">
                                    <span class="hours-day">Saturday</span>
                                    <span class="hours-time">9:00 AM - 1:00 PM</span>
                                </div>
                                <div class="hours-item">
                                    <span class="hours-day">Sunday</span>
                                    <span class="hours-time">Closed</span>
                                </div>
                            </div>
                        </div>

                        <div class="emergency-cta">
                            <a href="tel:+254700123456" class="btn btn-secondary">
                                <i class="fas fa-phone"></i>
                                <span>Call Main Office</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Locations Section -->
    <section class="section locations-section" id="locations">
        <div class="bg-pattern"></div>
        <div class="locations-header-container">
            <h2 class="section-title">Our <span>Office</span> Locations</h2>
            <p class="section-subtitle">Visit us at our conveniently located office. We're here to serve you with excellence.</p>
            <div class="section-divider"></div>
        </div>

        <div class="location-card-full-width fade-in">
            <div class="location-header">
                <div class="location-badge">Headquarters</div>
                <h3 class="location-name">Nairobi Main Office</h3>
            </div>
            
            <div class="location-content-full">
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
                        height="100%"
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
    </section>

    <!-- FAQ Section -->
    <section class="section contact-faq-section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
        <p class="section-subtitle">Quick answers to common questions about contacting us.</p>
        <div class="section-divider"></div>

        <div class="contact-faq-container">
            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>How quickly will I receive a response?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We aim to respond to all inquiries within 24 hours during business days. For urgent matters, please call our emergency hotline at +254 700 999 999.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>Is my information confidential?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Absolutely. All communications with our firm are strictly confidential. We adhere to the highest standards of client confidentiality and data protection.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>Do you offer free consultations?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer a free 30-minute initial consultation to discuss your legal matter and determine how we can assist you.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>What should I bring to my first consultation?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Please bring any relevant documents related to your legal matter, identification, and a list of questions you'd like to discuss. Our team will guide you on what's needed.</p>
                </div>
            </div>

            <div class="faq-item fade-in">
                <div class="faq-question">
                    <h4>Can I schedule an appointment online?</h4>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can schedule an appointment by filling out the contact form above, calling us, or sending an email. We'll confirm your appointment within 24 hours.</p>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@endsection
