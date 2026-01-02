@extends('layouts.master')
@section('content')
    <style>
        .pageheader {
            background: #f1f3f6;
            padding: 20px 40px;
            font-weight: 500;
            text-align: center;
        }

        a {
            color: rgb(103, 101, 101);
            text-decoration: none;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
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
            background-color: #f8f9fa;
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
            background-color: white;
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
            background-color: #f1f5f9;
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
            background-color: white;
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
            body {
                padding: 10px;
            }

            .page-header {
                padding: 20px;
            }

            .page-title {
                font-size: 28px;
            }

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
    <div class="pageheader">
        <h3>FAQ</h3>
        <div><a href="{{ route('home') }}">Home</a> / FAQ</div>
    </div>
    <div class="container">

        <!-- FAQ Content -->
        <div class="faq-content">
            <h2 class="faq-section-title">
                Plan
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
            <h2 class="faq-section-title">
                Mobile
            </h2>

            <!-- FAQ Items -->
            <div class="faq-item" id="faq8">
                <div class="faq-question" onclick="toggleFAQ('faq8')">
                    <h3>

                        Do you offer a price match guarantee?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer a price match guarantee. If you find the same product at a lower price elsewhere, contact us for a price match.</p>
                </div>
            </div>

            <div class="faq-item" id="faq9">
                <div class="faq-question" onclick="toggleFAQ('faq9')">
                    <h3>

                        What is your policy on product recalls?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>In the event of a product recall, we will promptly notify affected customers and provide instructions for returns or replacements.</p>
                </div>
            </div>

            <h2 class="faq-section-title">
                Computer
            </h2>

            <!-- FAQ Items -->
            <div class="faq-item" id="faq10">
                <div class="faq-question" onclick="toggleFAQ('faq10')">
                    <h3>

                        How do i change my password?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>You can change your password by logging into your account and going to the "Change Password" section in your profile settings.</p>
                </div>
            </div>

            <div class="faq-item" id="faq12">
                <div class="faq-question" onclick="toggleFAQ('faq12')">
                    <h3>

                        What is your pricing for products?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Our pricing is competitive and based on market rates. We regularly update our prices to reflect current market conditions.</p>
                </div>
            </div>

            <div class="faq-item" id="faq13">
                <div class="faq-question" onclick="toggleFAQ('faq13')">
                    <h3>

                       Do you offer price adjustments for recently purchased items?
                    </h3>
                    <div class="faq-toggle">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer price adjustments for items purchased within a specified time frame. Contact us for more information on price adjustments.</p>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        // Toggle FAQ function
        function toggleFAQ(id) {
            const faqItem = document.getElementById(id);
            const allFAQItems = document.querySelectorAll('.faq-item');

            // Toggle the clicked item
            faqItem.classList.toggle('expanded');

            // to Close other items when opening one
            // If we want only one open at a time, uncomment the code below:
            /*
            allFAQItems.forEach(item => {
                if (item.id !== id && item.classList.contains('expanded')) {
                    item.classList.remove('expanded');
                }
            });
            */
        }

        // Initialize the first FAQ as expanded
        document.a+ddEventListener('DOMContentLoaded', function () {
            // to Keep all FAQ items collapsed by default
            // Or expand the first one by default:
            // document.getElementById('faq1').classList.add('expanded');



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

@endsection