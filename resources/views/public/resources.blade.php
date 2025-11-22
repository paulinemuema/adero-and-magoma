@extends('layouts.public')

@section('title', 'Legal Resources & Client Guides | Adams & Magoma Advocates')
@section('description', 'Free legal resources and client guides from Adams & Magoma Advocates. Download toolkits, checklists, and guides for corporate law, family law, estate planning, and more. 35+ downloadable resources.')
@section('keywords', 'legal resources Kenya, legal guides, legal toolkits, client resources, legal checklists, free legal downloads')

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
      'name' => 'Resources',
      'item' => url()->current()
    ]
  ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
    <x-navbar />

    <!-- Hero -->
    <section class="resources-hero section">
        <div class="bg-pattern"></div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="resources-hero-content">
                        <span class="resources-tagline">Client Resource Hub</span>
                        <h1 class="resources-title">Expertly Crafted Guides for Every Legal Milestone</h1>
                        <p class="resources-subtitle">
                            From pre-consultation checklists to post-settlement planning, access actionable tools curated by Adams &amp; Magoma Advocates to help you make informed decisions at every stage.
                        </p>
                        <div class="resources-hero-cta">
                            <a href="#resource-downloads" class="btn btn-primary">
                                <span>Browse Guides</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light">
                                <span>Talk to an Attorney</span>
                            </a>
                        </div>
                        <div class="resource-stats">
                            <div class="resource-stat-card">
                                <span class="stat-label">Downloadable Toolkits</span>
                                <h3>35+</h3>
                                <p>Covering corporate, family, estate &amp; litigation matters</p>
                            </div>
                            <div class="resource-stat-card">
                                <span class="stat-label">Client Satisfaction</span>
                                <h3>4.9/5</h3>
                                <p>Average rating from resource users</p>
                            </div>
                            <div class="resource-stat-card">
                                <span class="stat-label">Time Saved</span>
                                <h3>12 hrs</h3>
                                <p>Average preparation time saved per client</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="resources-hero-panel">
                        <div class="panel-badge">New Releases</div>
                        <h3>2025 Legal Preparedness Kit</h3>
                        <p>Step-by-step blueprint for corporate, property, and family readiness.</p>
                        <ul class="panel-list">
                            <li><i class="fas fa-check"></i> Due diligence &amp; compliance scorecards</li>
                            <li><i class="fas fa-check"></i> High-stakes negotiation playbook</li>
                            <li><i class="fas fa-check"></i> Emergency response &amp; crisis guidance</li>
                        </ul>
                        <a href="#resource-downloads" class="panel-link">
                            Download starter kit
                            <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="resource-categories-section section">
        <div class="container-fluid">
            <div class="section-header text-center">
                <span class="section-tagline">Structured for every need</span>
                <h2 class="section-title">Resource Collections by Practice Focus</h2>
                <p class="section-subtitle">Navigate confidently with curated tools tailored to the matters we handle every day.</p>
            </div>
            <div class="resource-categories-grid">
                <div class="resource-category-card">
                    <div class="category-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Corporate &amp; Commercial</h4>
                    <p>Board readiness kits, contract negotiation templates, compliance checklists.</p>
                    <ul>
                        <li>Vendor vetting worksheet</li>
                        <li>M&amp;A data room checklist</li>
                        <li>Corporate governance calendar</li>
                    </ul>
                    <span class="category-meta">12 Guides</span>
                </div>
                <div class="resource-category-card">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Real Estate &amp; Property</h4>
                    <p>Registration roadmaps, due diligence matrices, lease review tools.</p>
                    <ul>
                        <li>Land transfer document tracker</li>
                        <li>Developer compliance workflow</li>
                        <li>Property inspection checklist</li>
                    </ul>
                    <span class="category-meta">9 Guides</span>
                </div>
                <div class="resource-category-card">
                    <div class="category-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h4>Family &amp; Estate</h4>
                    <p>Custody preparation planners, succession templates, mediation scripts.</p>
                    <ul>
                        <li>Divorce documentation kit</li>
                        <li>Estate asset inventory sheet</li>
                        <li>Child support negotiation prompts</li>
                    </ul>
                    <span class="category-meta">11 Guides</span>
                </div>
                <div class="resource-category-card">
                    <div class="category-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h4>Dispute Resolution</h4>
                    <p>Litigation readiness guides, witness prep playbooks, settlement planners.</p>
                    <ul>
                        <li>Case evidence organizer</li>
                        <li>Hearing day checklist</li>
                        <li>Alternative dispute roadmap</li>
                    </ul>
                    <span class="category-meta">8 Guides</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Downloads -->
    <section id="resource-downloads" class="resource-downloads-section section">
        <div class="container-fluid">
            <div class="section-header">
                <span class="section-tagline">Featured toolkits</span>
                <h2 class="section-title">Download-Ready Guides</h2>
                <p class="section-subtitle">Every resource is authored by our attorneys and updated quarterly for accuracy.</p>
            </div>
            <div class="resource-downloads-grid">
                <article class="resource-download-card">
                    <div class="resource-format">PDF • 18 pages</div>
                    <h3>Pre-Consultation Master Checklist</h3>
                    <p>Comprehensive intake workbook covering financials, timelines, and key facts to accelerate your first consultation.</p>
                    <div class="resource-meta">
                        <span><i class="fas fa-user-shield"></i> Ideal for: Corporate &amp; Family Clients</span>
                        <span><i class="fas fa-clock"></i> Prep Time: 30 minutes</span>
                    </div>
                    <div class="resource-actions">
                        <a href="#" class="btn btn-primary btn-sm">Download Guide</a>
                        <button class="btn btn-outline-light btn-sm">Preview</button>
                    </div>
                </article>
                <article class="resource-download-card">
                    <div class="resource-format">Video • 12 mins</div>
                    <h3>Property Registration Explained</h3>
                    <p>Attorney-led walkthrough of the Kenyan property registration journey with timelines, fees, and risk controls.</p>
                    <div class="resource-meta">
                        <span><i class="fas fa-map-marked-alt"></i> Includes county-specific notes</span>
                        <span><i class="fas fa-file-export"></i> Checklist download attached</span>
                    </div>
                    <div class="resource-actions">
                        <a href="#" class="btn btn-primary btn-sm">Watch &amp; Download</a>
                        <button class="btn btn-outline-light btn-sm">Share</button>
                    </div>
                </article>
                <article class="resource-download-card">
                    <div class="resource-format">Template • Editable Doc</div>
                    <h3>Emergency Custody Response Plan</h3>
                    <p>Step-by-step action plan for urgent family law matters, including documentation guidance and contact matrix.</p>
                    <div class="resource-meta">
                        <span><i class="fas fa-heart"></i> Family Law Priority Access</span>
                        <span><i class="fas fa-lock"></i> Secure &amp; client-ready</span>
                    </div>
                    <div class="resource-actions">
                        <a href="#" class="btn btn-primary btn-sm">Get Template</a>
                        <button class="btn btn-outline-light btn-sm">Request Attorney Review</button>
                    </div>
                </article>
                <article class="resource-download-card">
                    <div class="resource-format">Toolkit • Bundle</div>
                    <h3>Corporate Crisis Communications Pack</h3>
                    <p>Messaging scripts, regulator notification forms, and stakeholder updates to manage high-stakes events.</p>
                    <div class="resource-meta">
                        <span><i class="fas fa-bullhorn"></i> Draft emails &amp; press statements</span>
                        <span><i class="fas fa-sync"></i> Updated for 2025 legislation</span>
                    </div>
                    <div class="resource-actions">
                        <a href="#" class="btn btn-primary btn-sm">Download Pack</a>
                        <button class="btn btn-outline-light btn-sm">Schedule Strategy Call</button>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="resource-process-section section">
        <div class="bg-pattern"></div>
        <div class="container-fluid">
            <div class="section-header text-center">
                <span class="section-tagline">How to use the hub</span>
                <h2 class="section-title">From Download to Done</h2>
                <p class="section-subtitle">Each resource is designed to guide you through preparation, collaboration, and action.</p>
            </div>
            <div class="resource-process-grid">
                <div class="resource-process-card">
                    <span class="step-number">01</span>
                    <h4>Identify Your Goal</h4>
                    <p>Select the matter that matches your current priority—whether it’s contract review, succession planning, or dispute response.</p>
                    <span class="step-meta">Filter by practice area &amp; complexity</span>
                </div>
                <div class="resource-process-card">
                    <span class="step-number">02</span>
                    <h4>Download &amp; Customize</h4>
                    <p>Use editable templates, checklists, and scorecards to gather facts, documents, and questions ahead of your consultation.</p>
                    <span class="step-meta">Built for collaborative editing</span>
                </div>
                <div class="resource-process-card">
                    <span class="step-number">03</span>
                    <h4>Engage with Confidence</h4>
                    <p>Share your completed toolkit with our team to accelerate strategy sessions, negotiations, or filings.</p>
                    <span class="step-meta">Secure upload links provided</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Video & Insights -->
    <section class="resource-insights-section section">
        <div class="container-fluid">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="resource-video-card">
                        <div class="video-badge">Watch • Expert Briefing</div>
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/1zG1gkga3nQ" title="Legal Briefing" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-meta">
                            <h4>Preparing for High-Value Transactions in 2025</h4>
                            <p>Senior Partner Brian Adams Adero covers regulatory shifts, due diligence trends, and negotiation best practices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="resource-insight-panel">
                        <span class="panel-tag">Insight Pack</span>
                        <h3>Monthly Legal Readiness Brief</h3>
                        <p>Stay ahead with curated alerts, upcoming compliance deadlines, and proactive risk mitigation steps.</p>
                        <ul class="insight-list">
                            <li><i class="fas fa-envelope-open"></i> Delivered every first Monday</li>
                            <li><i class="fas fa-file-alt"></i> Includes editable action tracker</li>
                            <li><i class="fas fa-link"></i> Direct links to relevant guides</li>
                        </ul>
                        <form class="insight-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your work email" required>
                                <button class="btn btn-primary" type="submit">
                                    Subscribe
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            <small>By subscribing you agree to receive curated legal insights. You can unsubscribe anytime.</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="resource-faq-section section">
        <div class="container-fluid">
            <div class="section-header text-center">
                <span class="section-tagline">Knowledge on demand</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Still unsure which toolkit fits your situation? Start with these quick answers.</p>
            </div>
            <div class="resource-faq-grid">
                <div class="faq-item active">
                    <button class="faq-question" aria-expanded="true">
                        How often are the resources updated?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        We refresh every guide at least quarterly, with immediate updates when legislation or court practice directions change.
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        Can I request a custom template?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        Yes—submit a request through the contact form, and our team will tailor a resource or schedule a workshop for your organization.
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        Are these resources legal advice?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        They are educational aids. Formal advice requires an engagement letter so we can review your unique facts and jurisdictional requirements.
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        Do you offer training sessions?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        We host monthly virtual briefings and bespoke in-house workshops. Use the CTA below to schedule a learning session.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="resource-cta-section section">
        <div class="bg-pattern"></div>
        <div class="container-fluid">
            <div class="resource-cta-card">
                <div>
                    <span class="section-tagline">Ready when you are</span>
                    <h2 class="section-title">Turn Preparation into Progress</h2>
                    <p class="section-subtitle">Share your completed toolkit or schedule a bespoke strategy session with our attorneys.</p>
                </div>
                <div class="resource-cta-actions">
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        Book Strategy Call
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="mailto:info@adamsmagomaadvocates.com" class="btn btn-outline-light">
                        Submit Resources
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@endsection

