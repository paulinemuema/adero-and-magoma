// Loading Screen Animation
window.addEventListener('load', function() {
    const loadingProgress = document.getElementById('loadingProgress');
    if (loadingProgress) {
        let progress = 0;
        const interval = setInterval(() => {
            progress += 2;
            loadingProgress.style.width = `${progress}%`;
            
            if (progress >= 100) {
                clearInterval(interval);
                setTimeout(() => {
                    const loadingScreen = document.getElementById('loadingScreen');
                    if (loadingScreen) {
                        loadingScreen.style.opacity = '0';
                        loadingScreen.style.visibility = 'hidden';
                        
                        // Open WhatsApp popup after loading screen is hidden
                        setTimeout(() => {
                            const whatsappPopup = document.getElementById('whatsappPopup');
                            if (whatsappPopup) {
                                whatsappPopup.classList.add('show');
                                document.body.style.overflow = 'hidden';
                            }
                        }, 500);
                    }
                }, 500);
            }
        }, 30);
    } else {
        // If no loading screen, open popup after page load
        setTimeout(() => {
            const whatsappPopup = document.getElementById('whatsappPopup');
            if (whatsappPopup) {
                whatsappPopup.classList.add('show');
                document.body.style.overflow = 'hidden';
            }
        }, 2000);
    }
});

// GSAP Animations
if (typeof gsap !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
    
    // Hero animations
    const heroTimeline = gsap.timeline();
    heroTimeline
        .to('.hero-pre-title', { duration: 1.2, opacity: 1, y: 0, ease: 'power3.out' })
        .to('.hero-title', { duration: 1.5, opacity: 1, y: 0, ease: 'power3.out' }, '-=0.8')
        .to('.hero-subtitle', { duration: 1.2, opacity: 1, y: 0, ease: 'power3.out' }, '-=0.6')
        .to('.hero-cta', { duration: 1.2, opacity: 1, y: 0, ease: 'power3.out' }, '-=0.4')
        .to('.hero-scroll-indicator', { duration: 1, opacity: 1, ease: 'power3.out' }, '-=0.2');
    
    // Animate the underline effect on hero title spans
    gsap.to('.hero-title span:after', {
        scrollTrigger: {
            trigger: '.hero-title',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        },
        duration: 1.5,
        scaleX: 1,
        ease: 'power3.inOut',
        stagger: 0.3
    });
    
    // Section animations
    gsap.utils.toArray('.fade-in').forEach(element => {
        gsap.fromTo(element, {
            opacity: 0,
            y: 50
        }, {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: element,
                start: 'top 85%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });
    
    // Service card animations
    gsap.utils.toArray('.service-card').forEach((card, i) => {
        gsap.fromTo(card, {
            opacity: 0,
            y: 60,
            rotationY: 10
        }, {
            opacity: 1,
            y: 0,
            rotationY: 0,
            duration: 1,
            delay: i * 0.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: { y: targetElement, offsetY: 80 },
                    ease: "power2.inOut"
                });
            }
        });
    });
}

// Navbar scroll effect
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    const contactInfoBar = document.querySelector('.contact-info-bar');
    
    if (navbar) {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
            if (contactInfoBar) {
                contactInfoBar.style.opacity = '0';
                contactInfoBar.style.transform = 'translateY(-100%)';
            }
        } else {
            navbar.classList.remove('scrolled');
            if (contactInfoBar) {
                contactInfoBar.style.opacity = '1';
                contactInfoBar.style.transform = 'translateY(0)';
            }
        }
    }
});

// Enhanced Stat counter animation
const statNumbers = document.querySelectorAll('.stat-number[data-target]');
statNumbers.forEach(stat => {
    const target = parseInt(stat.getAttribute('data-target'));
    const suffix = stat.nextElementSibling?.textContent || '';
    let current = 0;
    const increment = target / 50;
    const duration = 2000; // 2 seconds
    const steps = 50;
    const stepDuration = duration / steps;
    
    const updateNumber = () => {
        if (current < target) {
            current += increment;
            stat.textContent = Math.floor(current);
            setTimeout(updateNumber, stepDuration);
        } else {
            stat.textContent = target;
        }
    };
    
    // Start counting when element is in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                updateNumber();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe(stat);
});

// Hero stats counter animation
const heroStatNumbers = document.querySelectorAll('.hero-stat-number');
heroStatNumbers.forEach(stat => {
    const text = stat.textContent;
    const target = parseInt(text.replace(/[^0-9]/g, ''));
    const suffix = text.replace(/[0-9]/g, '');
    let current = 0;
    const increment = target / 50;
    
    const updateNumber = () => {
        if (current < target) {
            current += increment;
            stat.textContent = Math.floor(current) + suffix;
            setTimeout(updateNumber, 30);
        } else {
            stat.textContent = target + suffix;
        }
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                updateNumber();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe(stat);
});

// Mobile menu toggle
const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const navLinks = document.querySelector('.nav-links');

if (mobileMenuBtn && navLinks) {
    mobileMenuBtn.addEventListener('click', () => {
        navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
    });
}

// FAQ Accordion functionality
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.closest('.faq-item');
        const isActive = faqItem?.classList.contains('active');
        const answer = question.nextElementSibling;
        
        // Close all other accordions (optional - remove if you want multiple open)
        document.querySelectorAll('.faq-item').forEach(otherItem => {
            if (otherItem !== faqItem) {
                otherItem.classList.remove('active');
                const otherQuestion = otherItem.querySelector('.faq-question');
                if (otherQuestion) {
                    otherQuestion.setAttribute('aria-expanded', 'false');
                }
            }
        });
        
        // Toggle current accordion
        if (faqItem) {
            if (isActive) {
                faqItem.classList.remove('active');
                question.setAttribute('aria-expanded', 'false');
            } else {
                faqItem.classList.add('active');
                question.setAttribute('aria-expanded', 'true');
            }
        } else {
            // Fallback for FAQ items without .faq-item wrapper
            const isExpanded = question.getAttribute('aria-expanded') === 'true';
            question.setAttribute('aria-expanded', !isExpanded);
        }
    });
});

// Testimonials Carousel
let currentTestimonial = 0;
const testimonials = document.querySelectorAll('.testimonial-card');
const totalTestimonials = testimonials.length;
const prevBtn = document.getElementById('prevTestimonial');
const nextBtn = document.getElementById('nextTestimonial');
const dots = document.querySelectorAll('.testimonials-dots .dot');

function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
        testimonial.classList.remove('active');
        if (i === index) {
            setTimeout(() => {
                testimonial.classList.add('active');
            }, 50);
        }
    });
    
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
    showTestimonial(currentTestimonial);
}

function prevTestimonial() {
    currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
    showTestimonial(currentTestimonial);
}

if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', prevTestimonial);
    nextBtn.addEventListener('click', nextTestimonial);
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentTestimonial = index;
        showTestimonial(currentTestimonial);
    });
});

// Auto-rotate testimonials
if (testimonials.length > 0) {
    setInterval(nextTestimonial, 5000);
}

// Scroll to Top Button
const scrollToTopBtn = document.getElementById('scrollToTop');
if (scrollToTopBtn) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });
    
    scrollToTopBtn.addEventListener('click', () => {
        if (typeof gsap !== 'undefined' && gsap.to) {
            gsap.to(window, {
                duration: 1,
                scrollTo: { y: 0 },
                ease: "power2.inOut"
            });
        } else {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });
}

// WhatsApp Popup
const whatsappPopupBtn = document.getElementById('whatsappPopupBtn');
const whatsappPopup = document.getElementById('whatsappPopup');
const whatsappPopupClose = document.getElementById('whatsappPopupClose');
const whatsappPopupOverlay = document.getElementById('whatsappPopupOverlay');

function openWhatsAppPopup() {
    if (whatsappPopup) {
        whatsappPopup.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
}

function closeWhatsAppPopup() {
    if (whatsappPopup) {
        whatsappPopup.classList.remove('show');
        document.body.style.overflow = '';
    }
}

// Popup auto-opens after loading screen (handled in loading screen code above)

if (whatsappPopupBtn) {
    whatsappPopupBtn.addEventListener('click', (e) => {
        e.preventDefault();
        openWhatsAppPopup();
    });
}

if (whatsappPopupClose) {
    whatsappPopupClose.addEventListener('click', closeWhatsAppPopup);
}

if (whatsappPopupOverlay) {
    whatsappPopupOverlay.addEventListener('click', closeWhatsAppPopup);
}

// Close popup on escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && whatsappPopup && whatsappPopup.classList.contains('show')) {
        closeWhatsAppPopup();
    }
});

// Form Validation and Submission
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    return re.test(phone) || phone === '';
}

function showError(input, message) {
    const formGroup = input.closest('.form-group');
    const errorSpan = formGroup.querySelector('.form-error');
    formGroup.classList.add('error');
    formGroup.classList.remove('success');
    errorSpan.textContent = message;
}

function showSuccess(input) {
    const formGroup = input.closest('.form-group');
    formGroup.classList.remove('error');
    formGroup.classList.add('success');
    const errorSpan = formGroup.querySelector('.form-error');
    errorSpan.textContent = '';
}

function validateInput(input) {
    const value = input.value.trim();
    
    if (input.hasAttribute('required') && !value) {
        showError(input, 'This field is required');
        return false;
    }
    
    if (input.type === 'email' && value && !validateEmail(value)) {
        showError(input, 'Please enter a valid email address');
        return false;
    }
    
    if (input.type === 'tel' && value && !validatePhone(value)) {
        showError(input, 'Please enter a valid phone number');
        return false;
    }
    
    if (input.tagName === 'TEXTAREA' && value.length < 10) {
        showError(input, 'Message must be at least 10 characters');
        return false;
    }
    
    showSuccess(input);
    return true;
}

// Contact Form
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    const inputs = contactForm.querySelectorAll('input:not([type="checkbox"]), textarea, select');
    const checkbox = contactForm.querySelector('input[type="checkbox"][name="privacy"]');
    const checkboxGroup = checkbox?.closest('.form-group');
    
    inputs.forEach(input => {
        input.addEventListener('blur', () => validateInput(input));
        input.addEventListener('input', () => {
            if (input.closest('.form-group').classList.contains('error')) {
                validateInput(input);
            }
        });
    });
    
    // Checkbox validation
    if (checkbox) {
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                checkboxGroup?.classList.remove('error');
                checkboxGroup?.classList.add('success');
                const errorSpan = checkboxGroup?.querySelector('.form-error');
                if (errorSpan) {
                    errorSpan.textContent = '';
                }
            } else {
                checkboxGroup?.classList.remove('success');
            }
        });
    }
    
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        let isValid = true;
        
        // Validate all inputs
        inputs.forEach(input => {
            if (!validateInput(input)) {
                isValid = false;
            }
        });
        
        // Validate checkbox
        if (checkbox && !checkbox.checked) {
            isValid = false;
            checkboxGroup?.classList.add('error');
            const errorSpan = checkboxGroup?.querySelector('.form-error');
            if (errorSpan) {
                errorSpan.textContent = 'You must agree to the Privacy Policy to continue.';
            }
        } else if (checkbox) {
            checkboxGroup?.classList.remove('error');
        }
        
        if (isValid) {
            const submitBtn = contactForm.querySelector('.btn-submit');
            const successMessage = document.getElementById('formSuccessMessage');
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span><i class="fas fa-spinner fa-spin"></i>';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Send Message</span><i class="fas fa-paper-plane"></i>';
                if (successMessage) {
                    successMessage.classList.add('show');
                }
                contactForm.reset();
                
                // Remove success class from all inputs
                inputs.forEach(input => {
                    input.closest('.form-group')?.classList.remove('success');
                });
                checkboxGroup?.classList.remove('success');
                
                if (successMessage) {
                    setTimeout(() => {
                        successMessage.classList.remove('show');
                    }, 5000);
                }
            }, 1500);
        }
    });
}

// Newsletter Form
const newsletterForm = document.getElementById('newsletterForm');
if (newsletterForm) {
    const emailInput = newsletterForm.querySelector('#newsletter-email');
    
    emailInput.addEventListener('blur', () => validateInput(emailInput));
    emailInput.addEventListener('input', () => {
        if (emailInput.closest('.form-group').classList.contains('error')) {
            validateInput(emailInput);
        }
    });
    
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (validateInput(emailInput)) {
            const submitBtn = newsletterForm.querySelector('.btn-submit');
            const successMessage = document.getElementById('newsletterSuccessMessage');
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Subscribing...</span><i class="fas fa-spinner fa-spin"></i>';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Subscribe to Newsletter</span><i class="fas fa-envelope"></i>';
                successMessage.classList.add('show');
                newsletterForm.reset();
                emailInput.closest('.form-group')?.classList.remove('success');
                
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 5000);
            }, 1500);
        }
    });
}

// About Page Testimonials Carousel (separate from homepage)
let currentAboutTestimonial = 0;
const aboutTestimonials = document.querySelectorAll('#aboutTestimonialsCarousel .testimonial-card');
const totalAboutTestimonials = aboutTestimonials.length;
const prevAboutBtn = document.getElementById('prevAboutTestimonial');
const nextAboutBtn = document.getElementById('nextAboutTestimonial');
const aboutTestimonialsContainer = document.getElementById('aboutTestimonialsCarousel');
const aboutDots = aboutTestimonialsContainer 
    ? aboutTestimonialsContainer.closest('.testimonials-container')?.querySelectorAll('.testimonials-dots .dot') || []
    : [];

function showAboutTestimonial(index) {
    aboutTestimonials.forEach((testimonial, i) => {
        testimonial.classList.remove('active');
        if (i === index) {
            setTimeout(() => {
                testimonial.classList.add('active');
            }, 50);
        }
    });
    
    aboutDots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
    });
}

function nextAboutTestimonial() {
    if (totalAboutTestimonials > 0) {
        currentAboutTestimonial = (currentAboutTestimonial + 1) % totalAboutTestimonials;
        showAboutTestimonial(currentAboutTestimonial);
    }
}

function prevAboutTestimonial() {
    if (totalAboutTestimonials > 0) {
        currentAboutTestimonial = (currentAboutTestimonial - 1 + totalAboutTestimonials) % totalAboutTestimonials;
        showAboutTestimonial(currentAboutTestimonial);
    }
}

if (prevAboutBtn && nextAboutBtn) {
    prevAboutBtn.addEventListener('click', prevAboutTestimonial);
    nextAboutBtn.addEventListener('click', nextAboutTestimonial);
}

aboutDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentAboutTestimonial = index;
        showAboutTestimonial(currentAboutTestimonial);
    });
});

// Auto-rotate about page testimonials
if (aboutTestimonials.length > 0) {
    setInterval(nextAboutTestimonial, 5000);
}

// Stat Showcase Counter Animation for About Page
const statShowcaseNumbers = document.querySelectorAll('.stat-showcase-number[data-target]');
statShowcaseNumbers.forEach(stat => {
    const target = parseInt(stat.getAttribute('data-target'));
    const suffix = stat.nextElementSibling?.textContent || '';
    let current = 0;
    const increment = target / 50;
    const duration = 2000; // 2 seconds
    const steps = 50;
    const stepDuration = duration / steps;
    
    const updateNumber = () => {
        if (current < target) {
            current += increment;
            stat.textContent = Math.floor(current);
            setTimeout(updateNumber, stepDuration);
        } else {
            stat.textContent = target;
        }
    };
    
    // Start counting when element is in view
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                updateNumber();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    observer.observe(stat);
});

// Blogs Page - Search and Category Filtering
const blogSearchInput = document.getElementById('blogSearchInput');
const blogSearchBtn = document.getElementById('blogSearchBtn');
const blogCategoryBtns = document.querySelectorAll('.blog-category-btn');
const blogCards = document.querySelectorAll('.blog-card');

// Search functionality
function filterBlogsBySearch(searchTerm) {
    const term = searchTerm.toLowerCase().trim();
    
    blogCards.forEach(card => {
        const title = card.querySelector('.blog-card-title a')?.textContent.toLowerCase() || '';
        const excerpt = card.querySelector('.blog-card-excerpt')?.textContent.toLowerCase() || '';
        const category = card.querySelector('.blog-category-tag')?.textContent.toLowerCase() || '';
        
        if (title.includes(term) || excerpt.includes(term) || category.includes(term)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
    
    // Also filter featured blog
    const featuredBlog = document.querySelector('.blog-featured');
    if (featuredBlog) {
        const featuredTitle = featuredBlog.querySelector('.blog-featured-title a')?.textContent.toLowerCase() || '';
        const featuredExcerpt = featuredBlog.querySelector('.blog-featured-excerpt')?.textContent.toLowerCase() || '';
        
        if (featuredTitle.includes(term) || featuredExcerpt.includes(term)) {
            featuredBlog.style.display = 'grid';
        } else {
            featuredBlog.style.display = 'none';
        }
    }
}

// Category filtering
function filterBlogsByCategory(category) {
    blogCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        
        if (category === 'all' || cardCategory === category) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
    
    // Featured blog always shows unless filtered by search
    const featuredBlog = document.querySelector('.blog-featured');
    if (featuredBlog && !blogSearchInput?.value.trim()) {
        featuredBlog.style.display = 'grid';
    }
}

// Search input event
if (blogSearchInput) {
    blogSearchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value;
        if (searchTerm.trim()) {
            filterBlogsBySearch(searchTerm);
        } else {
            // Reset to show all when search is cleared
            const activeCategory = document.querySelector('.blog-category-btn.active')?.getAttribute('data-category') || 'all';
            filterBlogsByCategory(activeCategory);
        }
    });
    
    // Allow Enter key to trigger search
    blogSearchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            filterBlogsBySearch(e.target.value);
        }
    });
}

// Search button event
if (blogSearchBtn) {
    blogSearchBtn.addEventListener('click', () => {
        if (blogSearchInput) {
            filterBlogsBySearch(blogSearchInput.value);
        }
    });
}

// Category button events
blogCategoryBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all buttons
        blogCategoryBtns.forEach(b => b.classList.remove('active'));
        
        // Add active class to clicked button
        btn.classList.add('active');
        
        // Get category and filter
        const category = btn.getAttribute('data-category');
        filterBlogsByCategory(category);
        
        // Clear search input
        if (blogSearchInput) {
            blogSearchInput.value = '';
        }
    });
});

// Newsletter form for blogs page
const blogsNewsletterForm = document.getElementById('blogsNewsletterForm');
if (blogsNewsletterForm) {
    blogsNewsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const emailInput = blogsNewsletterForm.querySelector('.newsletter-input');
        const submitBtn = blogsNewsletterForm.querySelector('.newsletter-submit-btn');
        
        if (emailInput && validateEmail(emailInput.value)) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Subscribing...</span><i class="fas fa-spinner fa-spin"></i>';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Subscribe</span><i class="fas fa-arrow-right"></i>';
                emailInput.value = '';
                
                // Show success message (you can add a toast notification here)
                alert('Thank you for subscribing! You will receive our latest legal insights via email.');
            }, 1500);
        } else {
            emailInput?.focus();
            alert('Please enter a valid email address.');
        }
    });
}

// Article Page Functionality
// Reading Progress Bar
const readingProgressBar = document.getElementById('readingProgressBar');
if (readingProgressBar) {
    window.addEventListener('scroll', () => {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollPercent = (scrollTop / (documentHeight - windowHeight)) * 100;
        readingProgressBar.style.width = scrollPercent + '%';
    });
}

// Copy Link Functionality
const copyLinkBtn = document.querySelector('.copy-link-btn');
if (copyLinkBtn) {
    copyLinkBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const url = copyLinkBtn.getAttribute('data-url');
        navigator.clipboard.writeText(url).then(() => {
            const originalHTML = copyLinkBtn.innerHTML;
            copyLinkBtn.innerHTML = '<i class="fas fa-check"></i>';
            copyLinkBtn.style.background = 'var(--success)';
            setTimeout(() => {
                copyLinkBtn.innerHTML = originalHTML;
                copyLinkBtn.style.background = '';
            }, 2000);
        });
    });
}

// Social Sharing
const shareButtons = document.querySelectorAll('.share-btn[data-platform]');
shareButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const platform = btn.getAttribute('data-platform');
        const url = encodeURIComponent(window.location.href);
        const title = encodeURIComponent(document.title);
        let shareUrl = '';
        
        switch(platform) {
            case 'facebook':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                break;
            case 'twitter':
                shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                break;
            case 'linkedin':
                shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
                break;
            case 'email':
                shareUrl = `mailto:?subject=${title}&body=${url}`;
                break;
        }
        
        if (shareUrl) {
            window.open(shareUrl, '_blank', 'width=600,height=400');
        }
    });
});

// Table of Contents Smooth Scrolling
const tocLinks = document.querySelectorAll('.toc-link');
tocLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            const offsetTop = targetElement.offsetTop - 100;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Article Newsletter Form
const articleNewsletterForm = document.getElementById('articleNewsletterForm');
if (articleNewsletterForm) {
    articleNewsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const emailInput = articleNewsletterForm.querySelector('.newsletter-email-input');
        const submitBtn = articleNewsletterForm.querySelector('.newsletter-submit-btn');
        
        if (emailInput && validateEmail(emailInput.value)) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Subscribing...</span><i class="fas fa-spinner fa-spin"></i>';
            
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span>Subscribe</span><i class="fas fa-arrow-right"></i>';
                emailInput.value = '';
                alert('Thank you for subscribing! You will receive our latest legal insights via email.');
            }, 1500);
        } else {
            emailInput?.focus();
            alert('Please enter a valid email address.');
        }
    });
}

// Exit-Intent Popup
(function() {
    let exitIntentShown = false;
    const exitIntentCookie = 'exit_intent_shown';
    
    // Check if popup was already shown (using sessionStorage)
    if (sessionStorage.getItem(exitIntentCookie)) {
        return;
    }
    
    // Get page-specific offer
    function getPageOffer() {
        const path = window.location.pathname;
        const pageTitle = document.title.toLowerCase();
        
        if (path.includes('/practice-areas/')) {
            const practiceArea = path.split('/').pop().replace(/-/g, ' ');
            return {
                title: `Get Free Assessment for ${practiceArea.charAt(0).toUpperCase() + practiceArea.slice(1)}`,
                description: 'Answer 5 quick questions and get matched with the right attorney.',
                ctaText: 'Start Assessment',
                ctaLink: '/case-evaluation?area=' + practiceArea
            };
        } else if (path.includes('/blogs/')) {
            const blogTitle = document.querySelector('h1')?.textContent || 'Legal Guide';
            return {
                title: `Download: Complete Guide to ${blogTitle}`,
                description: 'Get our comprehensive legal guide delivered to your inbox.',
                ctaText: 'Download Guide',
                ctaLink: '/resources'
            };
        } else if (path.includes('/contact')) {
            return {
                title: 'Limited Slots Available - Book Now',
                description: 'Schedule your free consultation today. Only 3 slots remaining this week.',
                ctaText: 'Book Appointment',
                ctaLink: '/book-appointment'
            };
        } else if (path.includes('/about')) {
            return {
                title: 'Ready to Get Started?',
                description: 'Book your free 30-minute consultation with our expert attorneys.',
                ctaText: 'Book Consultation',
                ctaLink: '/book-appointment'
            };
        } else {
            return {
                title: 'Free 30-Minute Consultation',
                description: 'Book your free consultation with our expert legal team today.',
                ctaText: 'Book Now',
                ctaLink: '/book-appointment'
            };
        }
    }
    
    // Detect exit intent
    document.addEventListener('mouseout', function(e) {
        if (!e.toElement && !e.relatedTarget && e.clientY < 10) {
            if (!exitIntentShown) {
                showExitIntent();
            }
        }
    });
    
    // Also detect when user tries to close tab/window
    window.addEventListener('beforeunload', function() {
        if (!exitIntentShown) {
            showExitIntent();
        }
    });
    
    function showExitIntent() {
        exitIntentShown = true;
        sessionStorage.setItem(exitIntentCookie, 'true');
        
        const offer = getPageOffer();
        const popup = document.getElementById('exitIntentPopup');
        const overlay = document.getElementById('exitIntentOverlay');
        
        if (popup && overlay) {
            // Update popup content
            const titleEl = popup.querySelector('.exit-intent-title');
            const descEl = popup.querySelector('.exit-intent-description');
            const ctaEl = popup.querySelector('.exit-intent-cta');
            
            if (titleEl) titleEl.textContent = offer.title;
            if (descEl) descEl.textContent = offer.description;
            if (ctaEl) {
                ctaEl.textContent = offer.ctaText;
                ctaEl.href = offer.ctaLink;
            }
            
            // Show popup
            overlay.classList.add('show');
            popup.classList.add('show');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Close popup handlers
    const exitIntentClose = document.getElementById('exitIntentClose');
    const exitIntentOverlay = document.getElementById('exitIntentOverlay');
    const exitIntentDismiss = document.getElementById('exitIntentDismiss');
    
    if (exitIntentClose) {
        exitIntentClose.addEventListener('click', closeExitIntent);
    }
    
    if (exitIntentOverlay) {
        exitIntentOverlay.addEventListener('click', closeExitIntent);
    }
    
    if (exitIntentDismiss) {
        exitIntentDismiss.addEventListener('click', closeExitIntent);
    }
    
    function closeExitIntent() {
        const popup = document.getElementById('exitIntentPopup');
        const overlay = document.getElementById('exitIntentOverlay');
        
        if (popup && overlay) {
            overlay.classList.remove('show');
            popup.classList.remove('show');
            document.body.style.overflow = '';
        }
    }
})();

// Lazy Loading for Images
(function() {
    // Check if native lazy loading is supported
    if ('loading' in HTMLImageElement.prototype) {
        // Native lazy loading is supported - add loading="lazy" to images below fold
        const images = document.querySelectorAll('img:not([loading])');
        images.forEach((img, index) => {
            // Skip first 3 images (likely above fold)
            if (index > 2 && !img.closest('.hero') && !img.closest('.loading-screen')) {
                img.loading = 'lazy';
            }
        });
    } else {
        // Fallback: Use Intersection Observer for older browsers
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        img.classList.add('loaded');
                    }
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '50px'
        });

        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => {
            imageObserver.observe(img);
        });
    }
})();

// Theme Toggle Functionality
(function() {
    const themeToggle = document.getElementById('themeToggle');
    const themeToggleMobile = document.getElementById('themeToggleMobile');
    const themeIcon = document.getElementById('themeIcon');
    const themeIconMobile = document.getElementById('themeIconMobile');
    const html = document.documentElement;
    
    // Get saved theme or default to dark
    const getTheme = () => {
        const savedTheme = localStorage.getItem('theme');
        return savedTheme || 'dark';
    };
    
    // Set theme
    const setTheme = (theme) => {
        html.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        updateIcons(theme);
    };
    
    // Update icons based on theme
    const updateIcons = (theme) => {
        if (theme === 'light') {
            if (themeIcon) {
                themeIcon.className = 'fas fa-sun';
            }
            if (themeIconMobile) {
                themeIconMobile.className = 'fas fa-sun me-2';
                const mobileText = themeToggleMobile?.querySelector('span');
                if (mobileText) mobileText.textContent = 'Light Mode';
            }
        } else {
            if (themeIcon) {
                themeIcon.className = 'fas fa-moon';
            }
            if (themeIconMobile) {
                themeIconMobile.className = 'fas fa-moon me-2';
                const mobileText = themeToggleMobile?.querySelector('span');
                if (mobileText) mobileText.textContent = 'Dark Mode';
            }
        }
    };
    
    // Toggle theme
    const toggleTheme = () => {
        const currentTheme = html.getAttribute('data-theme') || getTheme();
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    };
    
    // Initialize theme on page load
    const initTheme = () => {
        const theme = getTheme();
        setTheme(theme);
    };
    
    // Event listeners
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
    }
    
    if (themeToggleMobile) {
        themeToggleMobile.addEventListener('click', toggleTheme);
    }
    
    // Initialize on page load
    initTheme();
})();

