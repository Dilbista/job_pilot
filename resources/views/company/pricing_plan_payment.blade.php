@extends('layouts.master')
@section('content')


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }


        /* Main Content */
        .container {
            display: flex;
            min-height: calc(100vh - 130px);
        }

        /* Main Content Area */
        .main-content {
            flex: 1;
            padding: 30px;
            width: 100%;
            background-color: #f5f7fa;
        }

        .payment-container {
            display: flex;
            gap: 10px;
            width: 100%;
        }

        /* Payment Details */
        .payment-details {
            flex: 2;
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .amount-box {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            text-align: center;
        }

        .amount-label {
            font-size: 18px;
            color: #777;
            margin-bottom: 10px;
        }

        .amount {
            font-size: 42px;
            font-weight: 700;
            color: #3a86ff;
        }

        /* Coupon Section */
        .coupon-section {
            background-color: white;
            border-radius: 12px;
            width: 50%;
            margin-bottom: 40px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }

        .coupon-form {
            display: flex;
            gap: 10px;
        }

        .coupon-input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            transition: border-color 0.3s;
        }

        .coupon-input:focus {
            outline: none;
            border-color: #1a73e8;
        }

        .apply-btn {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .apply-btn:hover {
            background-color: #0d5bb5;
        }

        /* Payment Methods */
        .payment-methods {
            margin-top: 30px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .online-gateways,
        .manual-gateways {
            margin-bottom: 40px;
        }

        .gateways-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Exactly 3 columns */
            gap: 20px;
        }

        .gateway-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            /* width: 400px; */
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s;
            border: 2px solid transparent;
            cursor: pointer;
        }


        .gateway-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            border-color: #3a86ff;
        }

        .gateways-manual-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Exactly 2 columns */
            gap: 20px;
        }

        .gateway-manual-item {
             background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: all 0.3s;
            border: 2px solid transparent;
            cursor: pointer;
        }
         .gateway-manual-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            border-color: #3a86ff;
        }

        .gateway-logo {
            font-size: 32px;
            margin-bottom: 15px;
            color: #3a86ff;
        }

        .gateway-name {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .pay-now-btn {
            background-color: rgb(227, 238, 252);
            color: rgb(5, 5, 142);
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .pay-now-btn:hover {
            color: white;
            background-color: #2a75f0;
        }

        /* Stripe Payment Modal */
        .stripe-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .stripe-modal-content {
            background-color: white;
            width: 400px;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .stripe-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .stripe-title {
            font-size: 22px;
            color: #333;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #777;
        }

        .stripe-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        .form-group input {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            width: 100%
        }

        .card-details {
            display: flex;
            gap: 15px;
        }

        .card-details .form-group {
            flex: 1;
        }

        .stripe-submit-btn {
            background-color: #3a86ff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .stripe-submit-btn:hover {
            background-color: #2a75f0;
        }

        /* Plan Info Sidebar */
        .plan-info {
            flex: 1;
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: fit-content;
        }

        .plan-card {
            background-color: #f0f7ff;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            text-align: center;
        }

        .plan-name {
            font-size: 22px;
            font-weight: 700;
            color: #3a86ff;
            margin-bottom: 10px;
        }

        .plan-description {
            color: #666;
            margin-bottom: 20px;
        }

        .plan-features {
            list-style: none;
            text-align: left;
            margin-top: 20px;
        }

        .plan-features li {
            padding: 8px 0;
            border-bottom: 1px solid #e6e6e6;
            display: flex;
            align-items: center;
        }

        .plan-features li:last-child {
            border-bottom: none;
        }

        .plan-features i {
            color: #4CAF50;
            margin-right: 10px;
        }

        .change-plan-btn {
            background-color: #f0f7ff;
            color: #3a86ff;
            border: 2px solid #3a86ff;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s;
            margin-top: 15px;
        }

        .change-plan-btn:hover {
            background-color: #3a86ff;
            color: white;
        }

        .chat-section {
            margin-top: 30px;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .chat-btn {
            background-color: #f8f9fa;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
        }

        .chat-btn:hover {
            background-color: #3a86ff;
            color: white;
            border-color: #3a86ff;
        }

        /* Footer */
        footer {
            background-color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            border-top: 1px solid #eee;
            color: #777;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .payment-container {
                flex-direction: column;
            }

            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 20px;
            }

            .sidebar-menu {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .sidebar-menu li {
                margin-bottom: 0;
            }

            .sidebar-menu a {
                padding: 10px 15px;
            }
        }

        @media (max-width: 768px) {
            .top-nav {
                flex-direction: column;
                gap: 15px;
            }

            .search-bar {
                width: 100%;
            }

            .gateways-grid {
                grid-template-columns: 1fr;
            }

            .stripe-modal-content {
                width: 90%;
            }
        }
    </style>


    <div class="container">

        <!-- Main Content -->
        <div class="main-content">
            <div class="coupon-section">
                <h2 class="section-title">Have a coupon?</h2>
                <div class="coupon-form">
                    <input type="text" class="coupon-input" placeholder="Enter coupon code">
                    <button class="apply-btn">Apply</button>
                </div>
            </div>

            <div class="payment-container">
                <!-- Payment Details -->
                <div class="payment-details">
                    <div class="amount-box">
                        <div class="amount-label">Total Amount to pay:</div>
                        <div class="amount" id="planAmount">$ 50</div>
                    </div>

                    {{-- <div class="coupon-section">
                        <input type="text" class="coupon-input" placeholder="Enter coupon code">
                        <button class="apply-btn">Apply</button>
                    </div> --}}

                    <!-- Online Payment Gateways -->
                    <div class="payment-methods">
                        <h2 class="section-title">Online Payment Gateways</h2>

                        <div class="online-gateways">
                            <div class="gateways-grid">
                                <div class="gateway-item">
                                    <div class="gateway-logo">
                                        <i class="fab fa-cc-paypal"></i>
                                    </div>
                                    <div class="gateway-name">Paypal</div>
                                    <button class="pay-now-btn">PAY NOW</button>
                                </div>

                                <div class="gateway-item" id="stripeGateway">
                                    <div class="gateway-logo">
                                        <i class="fab fa-cc-stripe"></i>
                                    </div>
                                    <div class="gateway-name">Stripe</div>
                                    <button class="pay-now-btn" id="stripeBtn">PAY NOW</button>
                                </div>

                                <div class="gateway-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-credit-card"></i>
                                    </div>
                                    <div class="gateway-name">Razorpay</div>
                                    <button class="pay-now-btn">PAY NOW</button>
                                </div>

                                <div class="gateway-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-wave-square"></i>
                                    </div>
                                    <div class="gateway-name">Flutterwave</div>
                                    <button class="pay-now-btn">PAY NOW</button>
                                </div>
                                <div class="gateway-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-mobile"></i>
                                    </div>
                                    <div class="gateway-name">Mobile</div>
                                    <button class="pay-now-btn">PAY NOW</button>
                                </div>
                            </div>
                        </div>

                        <!-- Manual Payment Gateways -->
                        <div class="manual-gateways">
                            <h2 class="section-title">Manual Payment Gateways</h2>

                            <div class="gateways-manual-grid">
                                <div class="gateway-manual-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="gateway-name">Bank</div>
                                    <p>Payment made by bank</p>
                                    <button class="pay-now-btn" id="bankPaymentBtn">PAY NOW</button>
                                </div>

                                <div class="gateway-manual-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <div class="gateway-name">Cash On</div>
                                    <p>Payment made by cash</p>
                                    <button class="pay-now-btn" id="cashPaymentBtn">PAY NOW</button>
                                </div>
                                <div class="gateway-manual-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-money-check"></i>
                                        
                                    </div>
                                    <div class="gateway-name">Cheque</div>
                                    <p>Payment made by cheque</p>
                                    <button class="pay-now-btn" id="cashPaymentBtn">PAY NOW</button>
                                </div>
                                <div class="gateway-manual-item">
                                    <div class="gateway-logo">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="gateway-name">Custom</div>
                                    <p>Payment made by custom</p>
                                    <button class="pay-now-btn" id="cashPaymentBtn">PAY NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plan Information -->
                {{-- <div class="plan-info">
                    <div class="plan-card">
                        <div class="plan-name" id="planName">Standard Plan</div>
                        <div class="plan-description">Enhanced features for growing businesses</div>

                        <ul class="plan-features">
                            <li><i class="fas fa-check"></i> 20 Active Jobs</li>
                            <li><i class="fas fa-check"></i> 10 Featured Jobs</li>
                            <li><i class="fas fa-check"></i> 20 Candidates Profile View</li>
                            <li><i class="fas fa-check"></i> Priority Support</li>
                            <li><i class="fas fa-check"></i> Advanced Analytics</li>
                        </ul>

                        <button class="change-plan-btn" id="changePlanBtn">Change Plan</button>
                    </div>

                    <div class="chat-section">
                        <button class="chat-btn">
                            <i class="fas fa-comment-dots"></i> Chat with us
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Stripe Payment Modal -->
    <div class="stripe-modal" id="stripeModal">
        <div class="stripe-modal-content">
            <div class="stripe-header">
                <h3 class="stripe-title">Pay with Stripe</h3>
                <button class="close-modal" id="closeModalBtn">&times;</button>
            </div>

            <form class="stripe-form">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="your.email@example.com" required>
                </div>

                <div class="form-group">
                    <label for="cardNumber">Card number</label>
                    <input type="text" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                </div>

                <div class="card-details">
                    <div class="form-group">
                        <label for="expiry">MM / YY</label>
                        <input type="text" id="expiry" placeholder="MM/YY" required>
                    </div>

                    <div class="form-group">
                        <label for="cvc">CVC</label>
                        <input type="text" id="cvc" placeholder="123" required>
                    </div>
                </div>

                <button type="submit" class="stripe-submit-btn">Pay <span id="stripeAmount">$50.00</span></button>
            </form>
        </div>
    </div>

    <script>
        // Get URL parameters to determine which plan was selected
        const urlParams = new URLSearchParams(window.location.search);
        const plan = urlParams.get('plan') || 'standard'; // Default to standard

        // Plan configurations
        const plans = {
            'basic': {
                name: 'Basic Plan',
                amount: 20,
                description: 'Essential features for startups',
                features: [
                    '5 Active Jobs',
                    '3 Featured Jobs',
                    '10 Candidates Profile View',
                    'Basic Support',
                    'Standard Analytics'
                ]
            },
            'standard': {
                name: 'Standard Plan',
                amount: 50,
                description: 'Enhanced features for growing businesses',
                features: [
                    '20 Active Jobs',
                    '10 Featured Jobs',
                    '20 Candidates Profile View',
                    'Priority Support',
                    'Advanced Analytics'
                ]
            }
        };

        // DOM Elements
        const planAmountElement = document.getElementById('planAmount');
        const planNameElement = document.getElementById('planName');
        const planFeaturesElement = document.querySelector('.plan-features');
        const stripeAmountElement = document.getElementById('stripeAmount');
        const stripeModal = document.getElementById('stripeModal');
        const stripeBtn = document.getElementById('stripeBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const changePlanBtn = document.getElementById('changePlanBtn');
        const bankPaymentBtn = document.getElementById('bankPaymentBtn');
        const cashPaymentBtn = document.getElementById('cashPaymentBtn');

        // Initialize the page with the selected plan
        function initializePage() {
            const selectedPlan = plans[plan];

            // Update plan amount
            planAmountElement.textContent = `$ ${selectedPlan.amount}`;
            stripeAmountElement.textContent = `$${selectedPlan.amount}.00`;

            // Update plan name
            planNameElement.textContent = selectedPlan.name;

            // Update plan features
            planFeaturesElement.innerHTML = '';
            selectedPlan.features.forEach(feature => {
                const li = document.createElement('li');
                li.innerHTML = `<i class="fas fa-check"></i> ${feature}`;
                planFeaturesElement.appendChild(li);
            });

            // Store selected plan in localStorage for invoice generation
            localStorage.setItem('selectedPlan', JSON.stringify(selectedPlan));
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', initializePage);

        // Stripe Payment Modal
        stripeBtn.addEventListener('click', () => {
            stripeModal.style.display = 'flex';
        });

        closeModalBtn.addEventListener('click', () => {
            stripeModal.style.display = 'none';
        });

        // Close modal when clicking outside
        window.addEventListener('click', (event) => {
            if (event.target === stripeModal) {
                stripeModal.style.display = 'none';
            }
        });

        // Handle Stripe form submission
        document.querySelector('.stripe-form').addEventListener('submit', (event) => {
            event.preventDefault();

            // Get form values
            const email = document.getElementById('email').value;
            const cardNumber = document.getElementById('cardNumber').value;
            const expiry = document.getElementById('expiry').value;
            const cvc = document.getElementById('cvc').value;

            // Simple validation
            if (!email || !cardNumber || !expiry || !cvc) {
                alert('Please fill in all fields');
                return;
            }

            // In a real application, you would process the payment here
            // For this demo, we'll just show a success message
            alert(`Payment of $${plans[plan].amount} processed successfully!`);
            stripeModal.style.display = 'none';

            // Clear form
            document.querySelector('.stripe-form').reset();

            // Redirect to dashboard after successful payment
            setTimeout(() => {
                window.location.href = 'dashboard.html?payment=success';
            }, 1000);
        });

        // Change Plan button
        changePlanBtn.addEventListener('click', () => {
            // Toggle between basic and standard plans
            const newPlan = plan === 'basic' ? 'standard' : 'basic';

            // Update URL without reloading the page
            const newUrl = window.location.pathname + `?plan=${newPlan}`;
            window.history.pushState({}, '', newUrl);

            // Update the page for the new plan
            const urlParams = new URLSearchParams(window.location.search);
            const updatedPlan = urlParams.get('plan');

            // Reinitialize page with the new plan
            const selectedPlan = plans[updatedPlan];
            planAmountElement.textContent = `$ ${selectedPlan.amount}`;
            stripeAmountElement.textContent = `$${selectedPlan.amount}.00`;
            planNameElement.textContent = selectedPlan.name;

            // Update plan features
            planFeaturesElement.innerHTML = '';
            selectedPlan.features.forEach(feature => {
                const li = document.createElement('li');
                li.innerHTML = `<i class="fas fa-check"></i> ${feature}`;
                planFeaturesElement.appendChild(li);
            });

            // Update localStorage
            localStorage.setItem('selectedPlan', JSON.stringify(selectedPlan));
        });

        // Manual Payment - Bank Transfer
        bankPaymentBtn.addEventListener('click', () => {
            const selectedPlan = plans[plan];

            // Create invoice data
            const invoiceData = {
                id: 'INV-' + Date.now(),
                date: new Date().toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                }),
                amount: selectedPlan.amount,
                provider: 'Offline (Bank Transfer)',
                status: 'Pending',
                plan: selectedPlan.name
            };

            // Save invoice to localStorage
            saveInvoiceToStorage(invoiceData);

            // Redirect to dashboard (Plans & Billing page)
            window.location.href = 'dashboard.html?payment=pending&type=bank';
        });

        // Manual Payment - Cash
        cashPaymentBtn.addEventListener('click', () => {
            const selectedPlan = plans[plan];

            // Create invoice data
            const invoiceData = {
                id: 'INV-' + Date.now(),
                date: new Date().toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'short',
                    day: 'numeric'
                }),
                amount: selectedPlan.amount,
                provider: 'Offline (Cash)',
                status: 'Pending',
                plan: selectedPlan.name
            };

            // Save invoice to localStorage
            saveInvoiceToStorage(invoiceData);

            // Redirect to dashboard (Plans & Billing page)
            window.location.href = 'dashboard.html?payment=pending&type=cash';
        });

        // Function to save invoice to localStorage
        function saveInvoiceToStorage(invoiceData) {
            // Get existing invoices from localStorage
            let invoices = JSON.parse(localStorage.getItem('invoices')) || [];

            // Add new invoice
            invoices.unshift(invoiceData);

            // Save back to localStorage
            localStorage.setItem('invoices', JSON.stringify(invoices));
        }

        // Apply coupon button functionality
        document.querySelector('.apply-btn').addEventListener('click', () => {
            const couponInput = document.querySelector('.coupon-input');
            const couponCode = couponInput.value.trim();

            if (!couponCode) {
                alert('Please enter a coupon code');
                return;
            }

            // Simple coupon validation (in a real app, this would be done server-side)
            if (couponCode.toUpperCase() === 'SAVE10') {
                const selectedPlan = plans[plan];
                const discountAmount = selectedPlan.amount * 0.1; // 10% discount
                const discountedAmount = selectedPlan.amount - discountAmount;

                // Update displayed amount
                planAmountElement.textContent = `$ ${discountedAmount.toFixed(2)}`;
                stripeAmountElement.textContent = `$${discountedAmount.toFixed(2)}`;

                // Show success message
                alert(`Coupon applied! You saved $${discountAmount.toFixed(2)}.`);
                couponInput.value = '';
            } else {
                alert('Invalid coupon code. Please try again.');
            }
        });
    </script>

@endsection
