@extends('layouts.public')

@section('title', 'Free Case Evaluation | Adams & Magoma Advocates')
@section('description', 'Get your free case evaluation in 5 minutes. Answer quick questions about your legal matter and receive a preliminary assessment with recommended next steps. 100% free and confidential.')
@section('keywords', 'free case evaluation, legal assessment, case evaluation tool, free legal consultation, legal case analysis')

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
      'name' => 'Case Evaluation',
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
            <div class="hero-pre-title">Get Your Free Assessment</div>
            <h1 class="hero-title">Case <span>Evaluation</span></h1>
            <p class="hero-subtitle">Answer a few quick questions about your legal matter, and we'll provide a preliminary assessment and match you with the right attorney.</p>
            <div class="hero-trust-indicators">
                <span class="trust-item">
                    <i class="fas fa-clock"></i>
                    <span>5 Minutes</span>
                </span>
                <span class="divider">|</span>
                <span class="trust-item">
                    <i class="fas fa-gift"></i>
                    <span>100% Free</span>
                </span>
                <span class="divider">|</span>
                <span class="trust-item">
                    <i class="fas fa-shield-check"></i>
                    <span>Confidential</span>
                </span>
            </div>
        </div>
    </section>

    <!-- Evaluation Form Section -->
    <section class="section contact-form-section" id="evaluation-form">
        <div class="bg-pattern"></div>
        <div class="contact-form-container">
            <div class="contact-form-header">
                <h2 class="section-title">Tell Us About Your <span>Case</span></h2>
                <p class="section-subtitle">This assessment helps us understand your needs and provide the best legal guidance.</p>
                <div class="section-divider"></div>
            </div>

            <form action="#" method="POST" class="evaluation-form" id="evaluationForm">
                @csrf
                
                <!-- Progress Bar -->
                <div class="evaluation-progress">
                    <div class="progress-bar" id="progressBar"></div>
                    <span class="progress-text" id="progressText">Question 1 of 5</span>
                </div>

                <!-- Question 1: Legal Issue Type -->
                <div class="evaluation-question active" id="question1">
                    <h3 class="question-title">What type of legal issue are you facing?</h3>
                    <p class="question-description">Select the category that best describes your situation.</p>
                    <div class="question-options">
                        <label class="question-option">
                            <input type="radio" name="legal_issue" value="corporate" required>
                            <div class="option-card">
                                <i class="fas fa-building"></i>
                                <span>Corporate / Business Law</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="legal_issue" value="real-estate">
                            <div class="option-card">
                                <i class="fas fa-home"></i>
                                <span>Real Estate / Property</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="legal_issue" value="family">
                            <div class="option-card">
                                <i class="fas fa-user-friends"></i>
                                <span>Family Law</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="legal_issue" value="estate">
                            <div class="option-card">
                                <i class="fas fa-file-contract"></i>
                                <span>Estate Planning</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="legal_issue" value="litigation">
                            <div class="option-card">
                                <i class="fas fa-balance-scale"></i>
                                <span>Litigation / Dispute</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="legal_issue" value="employment">
                            <div class="option-card">
                                <i class="fas fa-briefcase"></i>
                                <span>Employment Law</span>
                            </div>
                        </label>
                    </div>
                    <button type="button" class="btn btn-primary btn-question-next" onclick="nextQuestion(2)">
                        <span>Next</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <!-- Question 2: Urgency -->
                <div class="evaluation-question" id="question2">
                    <h3 class="question-title">How urgent is your legal matter?</h3>
                    <p class="question-description">This helps us prioritize your case.</p>
                    <div class="question-options">
                        <label class="question-option">
                            <input type="radio" name="urgency" value="urgent" required>
                            <div class="option-card">
                                <i class="fas fa-exclamation-triangle"></i>
                                <span>Very Urgent (Within 24-48 hours)</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="urgency" value="soon">
                            <div class="option-card">
                                <i class="fas fa-clock"></i>
                                <span>Soon (Within 1-2 weeks)</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="urgency" value="planning">
                            <div class="option-card">
                                <i class="fas fa-calendar"></i>
                                <span>Planning Ahead (1+ months)</span>
                            </div>
                        </label>
                    </div>
                    <div class="question-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevQuestion(1)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-question-next" onclick="nextQuestion(3)">
                            <span>Next</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Question 3: Case Complexity -->
                <div class="evaluation-question" id="question3">
                    <h3 class="question-title">How would you describe the complexity of your case?</h3>
                    <p class="question-description">Help us understand the scope of your legal matter.</p>
                    <div class="question-options">
                        <label class="question-option">
                            <input type="radio" name="complexity" value="simple" required>
                            <div class="option-card">
                                <i class="fas fa-check-circle"></i>
                                <span>Simple / Straightforward</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="complexity" value="moderate">
                            <div class="option-card">
                                <i class="fas fa-balance-scale"></i>
                                <span>Moderate Complexity</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="complexity" value="complex">
                            <div class="option-card">
                                <i class="fas fa-puzzle-piece"></i>
                                <span>Highly Complex</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="complexity" value="unsure">
                            <div class="option-card">
                                <i class="fas fa-question-circle"></i>
                                <span>Not Sure</span>
                            </div>
                        </label>
                    </div>
                    <div class="question-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevQuestion(2)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-question-next" onclick="nextQuestion(4)">
                            <span>Next</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Question 4: Previous Legal Action -->
                <div class="evaluation-question" id="question4">
                    <h3 class="question-title">Have you taken any legal action yet?</h3>
                    <p class="question-description">This helps us understand where you are in the process.</p>
                    <div class="question-options">
                        <label class="question-option">
                            <input type="radio" name="previous_action" value="none" required>
                            <div class="option-card">
                                <i class="fas fa-times-circle"></i>
                                <span>No, just starting</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="previous_action" value="consultation">
                            <div class="option-card">
                                <i class="fas fa-comments"></i>
                                <span>Had initial consultation</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="previous_action" value="filed">
                            <div class="option-card">
                                <i class="fas fa-file-alt"></i>
                                <span>Filed documents / Case in progress</span>
                            </div>
                        </label>
                        <label class="question-option">
                            <input type="radio" name="previous_action" value="other">
                            <div class="option-card">
                                <i class="fas fa-ellipsis-h"></i>
                                <span>Other</span>
                            </div>
                        </label>
                    </div>
                    <div class="question-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevQuestion(3)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-question-next" onclick="nextQuestion(5)">
                            <span>Next</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Question 5: Contact Information -->
                <div class="evaluation-question" id="question5">
                    <h3 class="question-title">How can we reach you?</h3>
                    <p class="question-description">We'll send your assessment and next steps to this information.</p>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="eval_name">Full Name *</label>
                            <input type="text" id="eval_name" name="name" required>
                            <span class="form-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="eval_email">Email Address *</label>
                            <input type="email" id="eval_email" name="email" required>
                            <span class="form-error"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="eval_phone">Phone Number *</label>
                            <input type="tel" id="eval_phone" name="phone" placeholder="+254 700 000 000" required>
                            <span class="form-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="eval_preferred_contact">Preferred Contact Method</label>
                            <select id="eval_preferred_contact" name="preferred_contact">
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                                <option value="whatsapp">WhatsApp</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="eval_description">Brief Description (Optional)</label>
                        <textarea id="eval_description" name="description" rows="4" placeholder="Tell us more about your legal situation..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy" required>
                            <span>I agree to the <a href="#" target="_blank">Privacy Policy</a> and consent to being contacted.</span>
                        </label>
                        <span class="form-error"></span>
                    </div>
                    <div class="question-actions">
                        <button type="button" class="btn btn-secondary" onclick="prevQuestion(4)">
                            <i class="fas fa-arrow-left"></i>
                            <span>Back</span>
                        </button>
                        <button type="submit" class="btn btn-primary btn-submit">
                            <span>Get My Assessment</span>
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </div>

                <!-- Results Section -->
                <div class="evaluation-results" id="evaluationResults" style="display: none;">
                    <div class="results-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Assessment Complete!</h3>
                    <p>Based on your responses, here's our preliminary assessment:</p>
                    <div class="results-content" id="resultsContent"></div>
                    <div class="results-cta">
                        <a href="{{ route('book-appointment') }}" class="btn btn-primary">
                            <span>Schedule Consultation</span>
                            <i class="fas fa-calendar-check"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-secondary">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section">
        <div class="bg-pattern"></div>
        <h2 class="section-title">Why Get a Case <span>Evaluation</span></h2>
        <p class="section-subtitle">Understanding your legal situation is the first step toward resolution.</p>
        <div class="section-divider"></div>
        <div class="services-grid" style="max-width: 1000px; margin: 0 auto;">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="service-title">Expert Insight</h3>
                <p class="service-description">Get preliminary guidance from experienced attorneys who understand Kenyan law.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <h3 class="service-title">Right Attorney Match</h3>
                <p class="service-description">We'll match you with the attorney best suited for your specific case.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h3 class="service-title">Clear Next Steps</h3>
                <p class="service-description">Receive actionable recommendations on how to proceed with your case.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <h3 class="service-title">100% Free</h3>
                <p class="service-description">No cost, no obligation. Get valuable legal insights at no charge.</p>
            </div>
        </div>
    </section>

    <x-footer />
@endsection

@push('scripts')
<script>
// Evaluation Form Logic
let currentQuestion = 1;
const totalQuestions = 5;

function updateProgress() {
    const progress = (currentQuestion / totalQuestions) * 100;
    document.getElementById('progressBar').style.width = progress + '%';
    document.getElementById('progressText').textContent = `Question ${currentQuestion} of ${totalQuestions}`;
}

function nextQuestion(questionNum) {
    // Validate current question
    const currentQ = document.getElementById(`question${currentQuestion}`);
    const requiredInput = currentQ.querySelector('input[required]');
    
    if (requiredInput) {
        const checked = currentQ.querySelector('input[type="radio"]:checked') || 
                       (currentQ.querySelector('input[type="text"]') && currentQ.querySelector('input[type="text"]').value) ||
                       (currentQ.querySelector('input[type="email"]') && currentQ.querySelector('input[type="email"]').value);
        
        if (!checked) {
            alert('Please answer this question before continuing.');
            return;
        }
    }
    
    // Hide current question
    currentQ.classList.remove('active');
    // Show next question
    document.getElementById(`question${questionNum}`).classList.add('active');
    currentQuestion = questionNum;
    updateProgress();
    
    // Scroll to top of form
    document.getElementById('evaluation-form').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function prevQuestion(questionNum) {
    document.getElementById(`question${currentQuestion}`).classList.remove('active');
    document.getElementById(`question${questionNum}`).classList.add('active');
    currentQuestion = questionNum;
    updateProgress();
    
    document.getElementById('evaluation-form').scrollIntoView({ behavior: 'smooth', block: 'start' });
}

// Form submission
document.getElementById('evaluationForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const privacy = formData.get('privacy');
    
    if (!privacy) {
        alert('Please agree to the Privacy Policy');
        return;
    }
    
    // Hide all questions
    document.querySelectorAll('.evaluation-question').forEach(q => q.style.display = 'none');
    
    // Show results
    const results = document.getElementById('evaluationResults');
    results.style.display = 'block';
    
    // Generate assessment
    const legalIssue = formData.get('legal_issue');
    const urgency = formData.get('urgency');
    const complexity = formData.get('complexity');
    
    const assessments = {
        'corporate': {
            title: 'Corporate Law Assessment',
            description: 'Based on your responses, you may benefit from our corporate law services. Our team specializes in business formation, compliance, and corporate governance.',
            recommendations: [
                'Schedule a consultation to discuss your specific business needs',
                'Review any existing contracts or agreements',
                'Consider compliance requirements for your industry'
            ]
        },
        'real-estate': {
            title: 'Real Estate Law Assessment',
            description: 'Your case appears to involve real estate matters. Our real estate attorneys can help with property transactions, disputes, and development projects.',
            recommendations: [
                'Gather all property-related documents',
                'Schedule a consultation to review your situation',
                'Consider property valuation if needed'
            ]
        },
        'family': {
            title: 'Family Law Assessment',
            description: 'Family law matters require sensitive handling. Our experienced family law attorneys provide compassionate representation for divorce, custody, and related issues.',
            recommendations: [
                'Document all relevant information and communications',
                'Schedule a confidential consultation',
                'Consider mediation as an alternative to litigation'
            ]
        },
        'estate': {
            title: 'Estate Planning Assessment',
            description: 'Estate planning ensures your wishes are carried out. Our attorneys can help you create comprehensive estate plans, wills, and trusts.',
            recommendations: [
                'List your assets and beneficiaries',
                'Consider your estate planning goals',
                'Schedule a consultation to discuss your options'
            ]
        },
        'litigation': {
            title: 'Litigation Assessment',
            description: 'Legal disputes require strategic representation. Our litigation team has a proven track record of achieving favorable outcomes for clients.',
            recommendations: [
                'Preserve all relevant documents and evidence',
                'Schedule an urgent consultation if time-sensitive',
                'Consider alternative dispute resolution options'
            ]
        },
        'employment': {
            title: 'Employment Law Assessment',
            description: 'Workplace legal matters can be complex. Our employment law experts can help with contracts, disputes, and compliance issues.',
            recommendations: [
                'Document all workplace incidents or communications',
                'Review your employment contract or agreement',
                'Schedule a consultation to discuss your rights'
            ]
        }
    };
    
    const assessment = assessments[legalIssue] || assessments['corporate'];
    
    const resultsContent = document.getElementById('resultsContent');
    resultsContent.innerHTML = `
        <div class="result-section">
            <h4>${assessment.title}</h4>
            <p>${assessment.description}</p>
        </div>
        <div class="result-section">
            <h4>Recommended Next Steps:</h4>
            <ul>
                ${assessment.recommendations.map(rec => `<li>${rec}</li>`).join('')}
            </ul>
        </div>
        <div class="result-section">
            <p><strong>Urgency Level:</strong> ${urgency.charAt(0).toUpperCase() + urgency.slice(1)}</p>
            <p><strong>Complexity:</strong> ${complexity.charAt(0).toUpperCase() + complexity.slice(1)}</p>
        </div>
    `;
    
    results.scrollIntoView({ behavior: 'smooth' });
    
    // In production, send data to server here
    console.log('Evaluation submitted:', Object.fromEntries(formData));
});

// Initialize progress
updateProgress();
</script>
@endpush

