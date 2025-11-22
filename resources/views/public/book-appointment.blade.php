@extends('layouts.public')

@section('title', 'Book Appointment | Adams & Magoma Advocates')
@section('description', 'Book your free 30-minute consultation with Adams & Magoma Advocates. Schedule an appointment with expert attorneys in Nairobi, Kenya. Choose your practice area, attorney, and preferred time slot online.')
@section('keywords', 'book appointment, legal consultation, schedule consultation, free consultation Nairobi, book lawyer appointment')

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
      'name' => 'Book Appointment',
      'item' => url()->current()
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="bg-pattern"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-pre-title">Schedule Your Consultation</div>
            <h1 class="hero-title">Book Your <span>Appointment</span></h1>
            <p class="hero-subtitle">Choose your preferred practice area, select an attorney, and pick a convenient time slot. We'll confirm your appointment within 24 hours.</p>
            <div class="hero-trust-indicators">
                <span class="trust-item">
                    <i class="fas fa-clock"></i>
                    <span>30-Minute Free Consultation</span>
                </span>
                <span class="divider">|</span>
                <span class="trust-item">
                    <i class="fas fa-shield-check"></i>
                    <span>100% Confidential</span>
                </span>
                <span class="divider">|</span>
                <span class="trust-item">
                    <i class="fas fa-calendar-check"></i>
                    <span>Flexible Scheduling</span>
                </span>
            </div>
        </div>
    </section>

    <!-- Booking Form Section -->
    <section class="section contact-form-section" id="booking-form">
        <div class="bg-pattern"></div>
        <div class="contact-form-container">
            <div class="contact-form-header">
                <h2 class="section-title">Schedule Your <span>Consultation</span></h2>
                <p class="section-subtitle">Fill out the form below to book your appointment. All fields marked with * are required.</p>
                <div class="section-divider"></div>
            </div>

            <form action="#" method="POST" class="booking-form" id="bookingForm">
                @csrf
                
                <!-- Step 1: Practice Area Selection -->
                <div class="booking-step active" id="step1">
                    <h3 class="step-title">
                        <span class="step-number">1</span>
                        Select Practice Area
                    </h3>
                    <div class="practice-areas-grid">
                        <label class="practice-area-option">
                            <input type="radio" name="practice_area" value="corporate" required>
                            <div class="practice-area-card">
                                <i class="fas fa-building"></i>
                                <h4>Corporate Law</h4>
                                <p>Business formation, M&A, compliance</p>
                            </div>
                        </label>
                        <label class="practice-area-option">
                            <input type="radio" name="practice_area" value="real-estate" required>
                            <div class="practice-area-card">
                                <i class="fas fa-home"></i>
                                <h4>Real Estate Law</h4>
                                <p>Property transactions, development</p>
                            </div>
                        </label>
                        <label class="practice-area-option">
                            <input type="radio" name="practice_area" value="family" required>
                            <div class="practice-area-card">
                                <i class="fas fa-user-friends"></i>
                                <h4>Family Law</h4>
                                <p>Divorce, custody, adoption</p>
                            </div>
                        </label>
                        <label class="practice-area-option">
                            <input type="radio" name="practice_area" value="estate" required>
                            <div class="practice-area-card">
                                <i class="fas fa-file-contract"></i>
                                <h4>Estate Planning</h4>
                                <p>Wills, trusts, legacy planning</p>
                            </div>
                        </label>
                        <label class="practice-area-option">
                            <input type="radio" name="practice_area" value="litigation" required>
                            <div class="practice-area-card">
                                <i class="fas fa-balance-scale"></i>
                                <h4>Litigation</h4>
                                <p>Civil disputes, court representation</p>
                            </div>
                        </label>
                        <label class="practice-area-option">
                            <input type="radio" name="practice_area" value="employment" required>
                            <div class="practice-area-card">
                                <i class="fas fa-briefcase"></i>
                                <h4>Employment Law</h4>
                                <p>Workplace disputes, contracts</p>
                            </div>
                        </label>
                    </div>
                    <button type="button" class="btn btn-primary btn-next" onclick="nextStep(2)">
                        <span>Next: Select Attorney</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <!-- Step 2: Attorney Selection -->
                <div class="booking-step" id="step2">
                    <h3 class="step-title">
                        <span class="step-number">2</span>
                        Choose Your Attorney
                    </h3>
                    <p class="step-description">Select an attorney or let us match you with the best expert for your case.</p>
                    <div class="attorneys-selection-grid" id="attorneysGrid">
                        <!-- Attorneys will be populated based on practice area -->
                    </div>
                    <label class="attorney-option">
                        <input type="radio" name="attorney" value="any" checked>
                        <div class="attorney-card">
                            <i class="fas fa-random"></i>
                            <h4>Match Me with Best Available</h4>
                            <p>We'll assign the most qualified attorney for your case</p>
                        </div>
                    </label>
                    <div class="step-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(1)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-next" onclick="nextStep(3)">
                            <span>Next: Select Date & Time</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Date & Time Selection -->
                <div class="booking-step" id="step3">
                    <h3 class="step-title">
                        <span class="step-number">3</span>
                        Select Date & Time
                    </h3>
                    <div class="booking-datetime-container">
                        <div class="calendar-section">
                            <h4>Choose Date</h4>
                            <div class="calendar-wrapper">
                                <input type="date" name="appointment_date" id="appointmentDate" class="form-control" required min="{{ date('Y-m-d', strtotime('+1 day')) }}">
                            </div>
                        </div>
                        <div class="time-slots-section">
                            <h4>Available Time Slots</h4>
                            <div class="time-slots-grid" id="timeSlotsGrid">
                                <!-- Time slots will be populated -->
                            </div>
                        </div>
                    </div>
                    <div class="step-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(2)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-next" onclick="nextStep(4)">
                            <span>Next: Your Details</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 4: Contact Information -->
                <div class="booking-step" id="step4">
                    <h3 class="step-title">
                        <span class="step-number">4</span>
                        Your Contact Information
                    </h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="booking_name">Full Name *</label>
                            <input type="text" id="booking_name" name="name" required>
                            <span class="form-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="booking_email">Email Address *</label>
                            <input type="email" id="booking_email" name="email" required>
                            <span class="form-error"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="booking_phone">Phone Number *</label>
                            <input type="tel" id="booking_phone" name="phone" placeholder="+254 700 000 000" required>
                            <span class="form-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="booking_preferred_contact">Preferred Contact Method</label>
                            <select id="booking_preferred_contact" name="preferred_contact">
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                                <option value="whatsapp">WhatsApp</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="booking_message">Brief Description of Your Legal Matter (Optional)</label>
                        <textarea id="booking_message" name="message" rows="4" placeholder="Tell us briefly about your legal issue..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy" required>
                            <span>I agree to the <a href="#" target="_blank">Privacy Policy</a> and consent to being contacted by Adams & Magoma Advocates.</span>
                        </label>
                        <span class="form-error"></span>
                    </div>
                    <div class="step-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevStep(3)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="submit" class="btn btn-primary btn-submit">
                            <span>Confirm Booking</span>
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </div>

                <!-- Success Message -->
                <div class="booking-success" id="bookingSuccess" style="display: none;">
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Appointment Booked Successfully!</h3>
                    <p>We've received your booking request. Our team will confirm your appointment within 24 hours via your preferred contact method.</p>
                    <div class="success-details" id="successDetails"></div>
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <span>Return to Home</span>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <!-- Why Book With Us Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Why Book With <span>Us</span></h2>
        <p class="section-subtitle">Experience the difference of working with Kenya's premier legal team.</p>
        <div class="section-divider"></div>
        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="service-title">30-Minute Free Consultation</h3>
                <p class="service-description">Get expert legal advice at no cost during your initial consultation.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h3 class="service-title">Expert Attorneys</h3>
                <p class="service-description">Work with experienced lawyers who specialize in your specific legal matter.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="service-title">100% Confidential</h3>
                <p class="service-description">Your information is protected by attorney-client privilege.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3 class="service-title">Flexible Scheduling</h3>
                <p class="service-description">Choose from multiple time slots that fit your schedule.</p>
            </div>
        </div>
    </section>

    <x-footer />
@endsection

@push('scripts')
<script>
// Booking Form Step Navigation
let currentStep = 1;
const totalSteps = 4;

function nextStep(step) {
    // Validate current step
    if (currentStep === 1) {
        const practiceArea = document.querySelector('input[name="practice_area"]:checked');
        if (!practiceArea) {
            alert('Please select a practice area');
            return;
        }
        loadAttorneys(practiceArea.value);
    } else if (currentStep === 2) {
        // Attorney selection is optional (can use "any")
    } else if (currentStep === 3) {
        const date = document.getElementById('appointmentDate').value;
        const timeSlot = document.querySelector('input[name="appointment_time"]:checked');
        if (!date) {
            alert('Please select a date');
            return;
        }
        if (!timeSlot) {
            alert('Please select a time slot');
            return;
        }
        loadTimeSlots(date);
    }
    
    // Hide current step
    document.getElementById(`step${currentStep}`).classList.remove('active');
    // Show next step
    document.getElementById(`step${step}`).classList.add('active');
    currentStep = step;
}

function prevStep(step) {
    document.getElementById(`step${currentStep}`).classList.remove('active');
    document.getElementById(`step${step}`).classList.add('active');
    currentStep = step;
}

// Load attorneys based on practice area
function loadAttorneys(practiceArea) {
    const attorneys = {
        'corporate': [
            { id: 'brian-adams-adero', name: 'Brian Adams Adero', role: 'Senior Partner', specialization: 'Corporate Law' }
        ],
        'real-estate': [
            { id: 'magoma', name: 'Magoma', role: 'Managing Partner', specialization: 'Real Estate Law' }
        ],
        'family': [
            { id: 'magoma', name: 'Magoma', role: 'Managing Partner', specialization: 'Family Law' }
        ],
        'estate': [
            { id: 'magoma', name: 'Magoma', role: 'Managing Partner', specialization: 'Estate Planning' }
        ],
        'litigation': [
            { id: 'brian-adams-adero', name: 'Brian Adams Adero', role: 'Senior Partner', specialization: 'Litigation' }
        ],
        'employment': [
            { id: 'magoma', name: 'Magoma', role: 'Managing Partner', specialization: 'Employment Law' }
        ]
    };
    
    const grid = document.getElementById('attorneysGrid');
    grid.innerHTML = '';
    
    if (attorneys[practiceArea]) {
        attorneys[practiceArea].forEach(attorney => {
            const label = document.createElement('label');
            label.className = 'attorney-option';
            label.innerHTML = `
                <input type="radio" name="attorney" value="${attorney.id}">
                <div class="attorney-card">
                    <div class="attorney-avatar">${attorney.name.split(' ').map(n => n[0]).join('')}</div>
                    <h4>${attorney.name}</h4>
                    <p>${attorney.role} • ${attorney.specialization}</p>
                </div>
            `;
            grid.appendChild(label);
        });
    }
}

// Load time slots based on selected date
function loadTimeSlots(date) {
    const slots = [
        '09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM',
        '02:00 PM', '03:00 PM', '04:00 PM', '05:00 PM'
    ];
    
    const grid = document.getElementById('timeSlotsGrid');
    grid.innerHTML = '';
    
    slots.forEach(slot => {
        const label = document.createElement('label');
        label.className = 'time-slot-option';
        label.innerHTML = `
            <input type="radio" name="appointment_time" value="${slot}" required>
            <span class="time-slot">${slot}</span>
        `;
        grid.appendChild(label);
    });
}

// Date change handler
document.getElementById('appointmentDate')?.addEventListener('change', function() {
    if (this.value) {
        loadTimeSlots(this.value);
    }
});

// Practice area change handler
document.querySelectorAll('input[name="practice_area"]').forEach(radio => {
    radio.addEventListener('change', function() {
        if (this.checked) {
            loadAttorneys(this.value);
        }
    });
});

// Form submission
document.getElementById('bookingForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate form
    const formData = new FormData(this);
    const privacy = formData.get('privacy');
    
    if (!privacy) {
        alert('Please agree to the Privacy Policy');
        return;
    }
    
    // Show success message
    document.querySelectorAll('.booking-step').forEach(step => step.style.display = 'none');
    document.getElementById('bookingSuccess').style.display = 'block';
    
    // Populate success details
    const details = document.getElementById('successDetails');
    details.innerHTML = `
        <p><strong>Practice Area:</strong> ${document.querySelector('input[name="practice_area"]:checked')?.parentElement.querySelector('h4').textContent}</p>
        <p><strong>Date:</strong> ${formData.get('appointment_date')}</p>
        <p><strong>Time:</strong> ${formData.get('appointment_time')}</p>
        <p><strong>Contact:</strong> ${formData.get('email')}</p>
    `;
    
    // Scroll to success
    document.getElementById('bookingSuccess').scrollIntoView({ behavior: 'smooth' });
    
    // In production, send data to server here
    console.log('Booking submitted:', Object.fromEntries(formData));
});
</script>
@endpush

