@extends('layouts.master')
@section('content')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #3a86ff;
            --secondary: #8338ec;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --success: #06d6a0;
            --warning: #ffd166;
            --danger: #ef476f;
            --border-radius: 10px;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            background-color: #f5f7fb;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }


        /* Pricing Hero Section */
        .pricing-hero {
            padding: 60px 0 40px;
            text-align: center;
        }

        .breadcrumb {
            color: var(--gray);
            margin-bottom: 20px;
            font-size: 14px;
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }

        .pricing-hero h1 {
            font-size: 42px;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .pricing-hero p {
            font-size: 18px;
            color: var(--gray);
            max-width: 800px;
            margin: 0 auto 40px;
        }

        /* Unlock Premium Section */
        .unlock-premium {
            background-color: #f5f7fb;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 40px;
            text-align: center;
        }

        .unlock-premium h2 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .unlock-premium p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Select Plan Section */
        .select-plan-section {
            text-align: center;
            margin: 50px 0 30px;
        }

        .select-plan-section h2 {
            font-size: 32px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .select-plan-section p {
            font-size: 18px;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Pricing Plans */
        .pricing-plans {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .pricing-card {
            background-color: #f5f7fb;
            border-radius: var(--border-radius);
            padding: 40px 30px;
            box-shadow: var(--shadow);
            position: relative;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .pricing-card.recommended {
            border-color: var(--primary);
            transform: scale(1.05);
        }

        .pricing-card.recommended:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .recommended-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--primary);
            color: white;
            padding: 6px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .plan-title {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .plan-description {
            color: var(--gray);
            margin-bottom: 25px;
            font-size: 15px;
            min-height: 60px;
        }

        .plan-price {
            font-size: 48px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 30px;
        }

        .plan-price span {
            font-size: 24px;
            color: var(--gray);
            font-weight: 400;
        }

        .plan-features {
            list-style: none;
            text-align: left;
            margin-bottom: 30px;
        }

        .plan-features li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .plan-features li i {
            color: var(--success);
            margin-right: 10px;
            margin-top: 3px;
            font-size: 18px;
        }

        .plan-features li.excluded i {
            color: var(--danger);
        }

        .get-started-btn {
            background-color:rgb(237, 243, 252);
            color: rgb(10, 10, 145);
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
        }

        .get-started-btn:hover {
            background-color: rgb(194, 212, 240);
        }

        .pricing-card.recommended .get-started-btn {
            background-color: rgb(237, 243, 252);
        }
        .pricing-card.recommended .get-started-btn:hover {
            background-color: rgb(194, 212, 240);
        }

        /* Pay Per Job Section */
        .pay-per-job {
            text-align: center;
            margin: 50px 0;
            padding: 30px;
            background-color: #f5f7fb;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .pay-per-job h3 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .pay-per-job p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 30px;
        }
        .per-job-btn {
            background-color:rgb(26, 26, 203);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
        }

        .per-job-btn:hover {
            background-color: blue;
        }

        .or-divider {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 40px 0;
            color: var(--gray);
        }

        .or-divider::before,
        .or-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: var(--light-gray);
            margin: 0 20px;
        }

        /* FAQ Section */
         .faq-section {
            background-color: #f5f7fb;
            padding: 60px 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin: 50px 0;
        }
/*
        .faq-section h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 40px;
            text-align: center;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .faq-item {
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            padding: 25px;
            transition: var(--transition);
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .faq-item h3 {
            font-size: 20px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .faq-item p {
            color: var(--gray);
            line-height: 1.6;
        } */

        /* Connect With Us Section */
        .connect-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin: 50px 0;
            padding: 40px;
            background-color: #f5f7fb;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .connect-info h3 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 25px;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: var(--gray);
        }

        .contact-item i {
            color: var(--primary);
            margin-right: 10px;
            font-size: 18px;
            width: 24px;
        }

        .register-cta {
            background-color: var(--light);
            padding: 25px;
            border-radius: var(--border-radius);
            text-align: center;
        }

        .register-cta h4 {
            font-size: 20px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .register-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
        }

        .register-btn:hover {
            background-color: #2a75ff;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .navbar {
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .job-search-bar {
                flex-direction: column;
                gap: 15px;
            }
            
            .search-box {
                width: 100%;
                margin-right: 0;
            }
            
            .jobs-link {
                margin-right: 0;
            }
            
            .pricing-card.recommended {
                transform: none;
            }
            
            .pricing-card.recommended:hover {
                transform: translateY(-10px);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                gap: 15px;
            }
            
            .pricing-hero h1 {
                font-size: 32px;
            }
            
            .pricing-plans {
                grid-template-columns: 1fr;
            }
            
            .connect-section {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .nav-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .pricing-hero h1 {
                font-size: 28px;
            }
            
            .faq-section {
                padding: 40px 20px;
            }
            
            .unlock-premium {
                padding: 30px 20px;
            }
        }
         /* FAQ Content */
        .faq-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .faq-section-title {
            font-size: 24px;
            font-weight: 700;
            color: blue;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }

        .faq-section-title i {
            margin-right: 10px;
            color: #2563eb;
        }

        /* FAQ Items */
        .faq-item {
            margin-bottom: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
            background-color: #f5f7fb;
            transition: all 0.3s ease;
        }

        .faq-item.expanded {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-color: #2563eb;
        }

        .faq-question {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f7fb;
            transition: background-color 0.3s;
        }

        .faq-question:hover {
            background-color: #f8fafc;
        }

        .faq-question h3 {
            font-size: 16px;
            font-weight: 500;
            color: #1a1a1a;
            margin: 0;
            flex: 1;
            display: flex;
            align-items: center;
        }

        .faq-checkmark {
            color: #10b981;
            font-size: 18px;
            margin-right: 15px;
            min-width: 24px;
        }

        .faq-toggle {
            width: 24px;
            height: 24px;
            background-color: #f5f7fb;
            color: #475569;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            transition: all 0.3s;
            margin-left: 10px;
            flex-shrink: 0;
        }

        .faq-item.expanded .faq-toggle {
            background-color: #2563eb;
            color: white;
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s, padding 0.3s;
            background-color: #f5f7fb;
            border-top: 1px solid #e2e8f0;
        }

        .faq-item.expanded .faq-answer {
            padding: 20px;
            max-height: 500px;
        }

        .faq-answer p {
            color: #475569;
            line-height: 1.6;
            margin: 0;
            font-size: 15px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            .faq-content {
                padding: 20px;
            }

        }

        @media (max-width: 576px) {
            .faq-question {
                padding: 15px;
            }

            .faq-answer {
                padding: 0 15px;
            }

            .faq-item.expanded .faq-answer {
                padding: 15px;
            }

            .faq-question h3 {
                font-size: 15px;
            }
        }
    </style>


    <!-- Main Content -->
    <div class="container">

        <!-- Pricing Hero Section -->
        <section class="pricing-hero">
            <div class="breadcrumb" style="margin-left: 500px;">
                <a href="{{ route('home') }}">Home</a> / Pricing
            </div>
            <h1>Unlock the Power of Premium Job Postings</h1>
            <p>Elevate your job postings with a premium subscription. Get expanded reach, targeted promotion, and advanced applicant filtering.</p>
        </section>

        <!-- Select Plan Section -->
        <section class="select-plan-section">
            <h2>Select Your Ideal Pricing Plan</h2>
            <p>Select Your Plan</p>
            <p>Explore the perfect pricing plan that suits your needs and take your journey to new heights</p>
        </section>

        <!-- Pricing Plans -->
        <div class="pricing-plans">
            <!-- Free Plan -->
            <div class="pricing-card">
                <h3 class="plan-title">Free Plan</h3>
                <p class="plan-description">Company Essentials at No Cost: Boost Your Business</p>
                <div class="plan-price">$ <span>0</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Post 1 Jobs</li>
                    <li><i class="fas fa-check"></i> 1 Featured Job</li>
                    <li><i class="fas fa-check"></i> 1 Highlights Job</li>
                    <li><i class="fas fa-check"></i> 3 Candidates Profile View</li>
                    <li><i class="fas fa-minus"></i> Ability to verify company profile</li>
                </ul>
                <button class="get-started-btn">Get Started →</button>
            </div>

            <!-- Basic Plan -->
            <div class="pricing-card">
                <h3 class="plan-title">Basic Plan</h3>
                <p class="plan-description">Foundational Solutions: Propel Your Company Forward</p>
                <div class="plan-price">$ <span>20</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Post 5 Jobs</li>
                    <li><i class="fas fa-check"></i> 3 Featured Job</li>
                    <li><i class="fas fa-check"></i> 2 Highlights Job</li>
                    <li><i class="fas fa-check"></i> 10 Candidates Profile View</li>
                    <li><i class="fas fa-minus"></i> Ability to verify company profile</li>
                </ul>
                <button class="get-started-btn"><a href="{{ route('company.pricePlanPayment') }}" style="text-decoration: none;">Get Started →</a></button>
            </div>

            <!-- Standard Plan -->
            <div class="pricing-card recommended">
                <div class="recommended-badge">Recommended</div>
                <h3 class="plan-title">Standard Plan</h3>
                <p class="plan-description">Premium Growth Tools: Accelerate Your Business Success</p>
                <div class="plan-price">$ <span>50</span></div>
                <ul class="plan-features">
                    <li><i class="fas fa-check"></i> Post 20 Jobs</li>
                    <li><i class="fas fa-check"></i> 8 Featured Job</li>
                    <li><i class="fas fa-check"></i> 4 Highlights Job</li>
                    <li><i class="fas fa-check"></i> 20 Candidates Profile View</li>
                    <li><i class="fas fa-check"></i> Ability to verify company profile</li>
                </ul>
                <button class="get-started-btn"><a href="{{ route('company.pricePlanPayment') }}" style="text-decoration: none;">Get Started →</a></button>
            </div>
        </div>

        <!-- OR Divider -->
        <div class="or-divider">OR CHOOSE PAY PER JOB POSTING</div>

        <!-- Pay Per Job Section -->
        <section class="pay-per-job">
            <h3>Pay Per Job</h3>
            <p>Pay only for individual job creations. Highlight or feature your postings to attract top talent</p>
            <button class="per-job-btn"><a href="{{ route('company.createJob') }}" style="color: white; text-decoration: none;">Create Pay Per Job →</a></button>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            {{-- <h2>FAQ</h2> --}}
            {{-- <div class="faq-grid">
                <div class="faq-item">
                    <h3>What is your product quality guarantee?</h3>
                    <p>We guarantee the quality of our products. If you encounter any issues, please contact our customer support for assistance.</p>
                </div>
                <div class="faq-item">
                    <h3>Can I add multiple items to my cart?</h3>
                    <p>Yes, you can add multiple items to your cart. There's no limit to the number of items you can add for purchase.</p>
                </div>
                <div class="faq-item">
                    <h3>How do I check the availability of a product in a specific size or color?</h3>
                    <p>You can check product availability by selecting the desired size or color on the product page. Real-time inventory status will be displayed.</p>
                </div>
                <div class="faq-item">
                    <h3>What is your return shipping cost policy?</h3>
                    <p>We offer free returns within 30 days of purchase. Return shipping costs are covered by us for any defective or incorrect items.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you offer technical support for your products?</h3>
                    <p>Yes, we provide comprehensive technical support for all our products. Contact our support team via phone or email for assistance.</p>
                </div>
                <div class="faq-item">
                    <h3>What is your product delivery guarantee?</h3>
                    <p>We guarantee delivery within the estimated timeframe. If your order is delayed, we'll notify you and provide compensation options.</p>
                </div>
                <div class="faq-item">
                    <h3>What is your policy on environmental sustainability?</h3>
                    <p>We're committed to environmental sustainability through eco-friendly packaging, carbon-neutral shipping, and responsible sourcing.</p>
                </div>
            </div> --}}

            <div class="faq-content">
            <h2 class="faq-section-title">
                FAQ
            </h2>

            <!-- FAQ Items -->
            <div class="faq-item" id="faq1">
                <div class="faq-question" onclick="toggleFAQ('faq1')">
                    <h3>

                        What is your product quality guarantee?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>We guarantee the quality of our products. If you encounter any issues, please contact our customer
                        support for assistance.</p>
                </div>
            </div>

            <div class="faq-item" id="faq2">
                <div class="faq-question" onclick="toggleFAQ('faq2')">
                    <h3>

                        Can I add multiple items to my cart?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can add multiple items to your cart by clicking "Add to Cart" for each item you want to
                        purchase.</p>
                </div>
            </div>

            <div class="faq-item" id="faq3">
                <div class="faq-question" onclick="toggleFAQ('faq3')">
                    <h3>

                        How do I check the availability of a product in a specific size or color?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>To check the availability of a specific size or color, select the product and use the dropdown menus on the product page.</p>
                </div>
            </div>

            <div class="faq-item" id="faq4">
                <div class="faq-question" onclick="toggleFAQ('faq4')">
                    <h3>

                        What is your return shipping cost policy?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Return shipping costs may be covered by us for eligible returns. Contact our customer support for return instructions and shipping labels.</p>
                </div>
            </div>

            <div class="faq-item" id="faq5">
                <div class="faq-question" onclick="toggleFAQ('faq5')">
                    <h3>

                        Do you offer technical support for your products?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer technical support for our products. Contact our technical support team for assistance with product-related issues.</p>
                </div>
            </div>

            <div class="faq-item" id="faq6">
                <div class="faq-question" onclick="toggleFAQ('faq6')">
                    <h3>

                        What is your product delivery guarantee?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>We guarantee on-time product delivery. If your order is delayed, please contact our customer support for assistance.</p>
                </div>
            </div>
            <div class="faq-item" id="faq7">
                <div class="faq-question" onclick="toggleFAQ('faq7')">
                    <h3>

                        What is your policy on environmental sustainability?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>We are committed to environmental sustainability and follow eco-friendly practices in our operations. Learn more on our sustainability page.</p>
                </div>
            </div>
        </div>
        </section>

        <!-- Connect With Us Section -->
        <section class="connect-section">
            <div class="connect-info">
                <h3>Connect With Us</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>319-555-0115</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>jobpilot@templatecookie.com</span>
                    </div>
                </div>
            </div>
            <div class="register-cta">
                <h4>Are you interested with us?</h4>
                <button class="register-btn">Register Now</button>
            </div>
        </section>
    </div>

    <script>
        // Interactive functionality
        document.querySelectorAll('.get-started-btn').forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent.includes('Create Pay Per Job')) {
                    alert('Redirecting to Pay Per Job creation page...');
                } else {
                    const planTitle = this.closest('.pricing-card').querySelector('.plan-title').textContent;
                    alert(`Starting subscription process for: ${planTitle}`);
                }
            });
        });

        document.querySelector('.register-btn').addEventListener('click', function() {
            alert('Redirecting to registration page...');
        });

        document.querySelector('.post-job-btn').addEventListener('click', function() {
            alert('Post a Job feature would open here');
        });

        document.querySelector('.jobs-link').addEventListener('click', function(e) {
            e.preventDefault();
            alert('Navigating to Jobs page');
        });

        document.querySelector('.chat-button').addEventListener('click', function() {
            alert('Chat with us feature would open here!');
        });

        // Search box functionality
        document.querySelector('.search-box input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Searching for jobs with keyword: "${this.value}"`);
            }
        });

        // Navigation active state
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.nav-links a').forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        // FAQ item interaction
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', function() {
                const question = this.querySelector('h3').textContent;
                alert(`FAQ: ${question}\n\nClick OK to view more details.`);
            });
        });
    </script>
<script>
        // Toggle FAQ function
        function toggleFAQ(id) {
            const faqItem = document.getElementById(id);
            const allFAQItems = document.querySelectorAll('.faq-item');

            // Toggle the clicked item
            faqItem.classList.toggle('expanded');
        }

        // Initialize the first FAQ as expanded
        document.a+ddEventListener('DOMContentLoaded', function () {

            // Add keyboard support for accessibility
            document.querySelectorAll('.faq-question').forEach(question => {
                question.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        const faqId = this.closest('.faq-item').id;
                        toggleFAQ(faqId);
                    }
                });

                // Make FAQ questions focusable for keyboard navigation
                question.setAttribute('tabindex', '0');
            });
        });
    </script>
    @include('layouts.sub_footer')
    @endsection
