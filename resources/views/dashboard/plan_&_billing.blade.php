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

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }


        /* Main Layout */
        .dashboard-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }


        /* Main Content */
        .dashboard-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .content-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
        }

        .content-header h1 {
            font-size: 24px;
            color: #1e293b;
            font-weight: 700;
        }

        /* Benefits Container */
        .benefits-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 40px;
        }

        /* Free Plan Section */
        .free-plan-section {
            background-color: white;
            border-radius: 12px;
            border: 1px solid rgb(174, 171, 171);
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 400px;
        }

        .plan-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }

        .plan-description {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .upgrade-plan-btn {
            background-color: #3a86ff;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 8px 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            width: fit-content;
        }

        .upgrade-plan-btn:hover {
            background-color: #2a75f0;
        }

        .upgrade-plan-btn a {
            text-decoration: none;
            color: white;
        }

        /* Benefits Section */
        .benefits-section {
            background-color: white;
            border-radius: 12px;
            border: 1px solid rgb(174, 171, 171);
            padding: 10px;
            width: 500px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .benefits-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            padding-bottom: 8px;
            border-bottom: 1px solid #eee;
        }

        .benefits-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .benefits-column h4 {
            font-size: 14px;
            color: #555;
            margin-bottom: 6px;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }

        .benefits-list {
            list-style: none;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            margin-bottom: 4px;
        }

        .benefit-item i {
            color: rgb(8, 8, 205);
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        .benefit-text {
            color: #333;
            font-size: 14px;
        }

        .benefit-count {
            margin-left: 10px;
            font-size: 13px;
            font-weight: 600;
        }

        /* Separator Line */
        .separator-line {
            grid-column: 1 / -1;
            height: 1px;
            background-color: #eee;
            margin: 20px 0;
        }

        /* Latest Invoices Section */
        .invoices-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #e2e8f0;
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 10px;
            color: #2563eb;
        }

        .invoices-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .invoices-table th {
            text-align: left;
            padding: 15px;
            background: #eff2f5;
            color: #475569;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
            white-space: nowrap;
        }

        .invoices-table td {
            padding: 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #475569;
        }

        .invoices-table tr:last-child td {
            border-bottom: none;
        }

        .invoices-table tr:hover {
            background: #f1f5f9;
        }

        .invoice-id {
            color: #2563eb;
            font-weight: 500;
        }

        .invoice-date {
            white-space: nowrap;
        }

        .invoice-plan {
            font-weight: 500;
        }

        .invoice-amount {
            font-weight: 600;
            color: #1e293b;
        }

        .payment-provider {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            background: #e0f2fe;
            color: #0369a1;
        }

        .payment-provider.offline {
            background: #fef3c7;
            color: #92400e;
        }

        .payment-provider.paypal {
            background: #dbeafe;
            color: #1e40af;
        }

        .payment-status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .payment-status.paid {
            background: #dcfce7;
            color: #166534;
        }

        .view-invoice-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            font-size: 13px;
            transition: background 0.3s ease;
        }

        .view-invoice-btn:hover {
            background: #1d4ed8;
        }

        .category-title {
            font-size: 16px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #e2e8f0;
        }


        /* Chat Section */
        .chat-section {
            text-align: center;
            padding: 30px 20px;
            background: #f0f7ff;
            border-radius: 10px;
            border: 2px dashed #93c5fd;
        }

        .chat-icon {
            font-size: 40px;
            color: #2563eb;
            margin-bottom: 15px;
        }

        .chat-title {
            font-size: 18px;
            color: #1e293b;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .chat-description {
            color: #64748b;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .chat-btn {
            display: inline-flex;
            align-items: center;
            background: #10b981;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .chat-btn:hover {
            background: #0da271;
        }

        .chat-btn i {
            margin-right: 8px;
        }

        /* Footer */
        .footer {
            background: #1e293b;
            color: white;
            padding: 50px 0 20px;
            margin-top: 30px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }

        .footer-column h4 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #f8fafc;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #60a5fa;
        }

        .footer-top {
            border-bottom: 1px solid #334155;
            padding-bottom: 30px;
            margin-bottom: 20px;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font-size: 14px;
        }

        .contact-call {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-call i {
            color: #60a5fa;
            margin-right: 10px;
        }

        .footer-description {
            color: #94a3b8;
            font-size: 14px;
            line-height: 1.6;
        }

        @media (max-width: 992px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .header-nav {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .nav-left {
                flex-wrap: wrap;
                gap: 15px;
            }

            .search-container {
                width: 100%;
            }

            .search-container input {
                width: 100%;
            }

            .invoices-table {
                display: block;
                overflow-x: auto;
            }


        }

        /* Responsive */
        @media (max-width: 1024px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
            }

            .benefits-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .benefits-columns {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .invoices-table {
                display: block;
                overflow-x: auto;
            }

            .invoice-actions {
                flex-direction: column;
                gap: 5px;
            }

            .action-btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .dashboard-content {
                padding: 20px;
            }

            .free-plan-section,
            .benefits-section,
            .invoices-section {
                padding: 20px;
            }
        }
    </style>

    <div class="container">
        <!-- Header Navigation -->


        <!-- Dashboard Layout -->
        <div class="dashboard-layout">
            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- Main Content -->
            <div class="dashboard-content">
                <div class="content-header">
                    <h1>Plans & Billing</h1>
                </div>
                <!-- Benefits Container -->
                <div class="benefits-container">
                    <!-- Free Plan Section -->
                    <div class="free-plan-section">
                        <h2 class="plan-title">Free Plan</h2>
                        <p class="plan-description">
                            Company Essentials at No Cost: Boost Your Business
                        </p>
                        <button class="upgrade-plan-btn">
                            <a href="{{ route('company.pricing') }}" style="text-decoration:none; color: white;">Upgrade
                                Plan</a>
                        </button>
                    </div>

                    <!-- Benefits Section -->
                    <div class="benefits-section">
                        <h3 class="benefits-title">Current Plan Benefits</h3>

                        <div class="benefits-columns">
                            <!-- Left Column -->
                            <div class="benefits-column">
                                <ul class="benefits-list">
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">1</span> Active Jobs
                                        </span>
                                    </li>
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">1</span> Highlight Jobs
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Right Column -->
                            <div class="benefits-column">
                                <ul class="benefits-list">
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">1</span> Featured Jobs
                                        </span>
                                    </li>
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">3</span> Candidates Profile View
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Separator Line -->
                        <div class="separator-line"></div>

                        <!-- Remaining Benefits -->
                        <div class="benefits-columns">
                            <!-- Left Column -->
                            <div class="benefits-column">
                                <h4>Remaining</h4>
                                <ul class="benefits-list">
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">18</span> Active Jobs
                                        </span>
                                    </li>
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">1</span> Highlight Jobs
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Right Column -->
                            <div class="benefits-column">
                                <h4>&nbsp;</h4>
                                <ul class="benefits-list">
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">9</span> Featured Jobs
                                        </span>
                                    </li>
                                    <li class="benefit-item">
                                        <i class="fas fa-check"></i></i><i class="fas fa-check"></i>
                                        <span class="benefit-text">
                                            <span class="benefit-count">18</span> Candidates Profile View
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Latest Invoices Section -->
                <div class="invoices-section">
                    <div class="section-title">
                        <i class="fas fa-file-invoice"></i> Latest Invoices
                    </div>

                    <table class="invoices-table">
                        <thead>
                            <tr>
                                <th>#6942f965d6c21</th>
                                <th>Date</th>
                                <th>Plan</th>
                                <th>Amount</th>
                                <th>Payment Provider</th>
                                <th>Payment Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="invoice-id">#978504111</td>
                                <td class="invoice-date">Dec, 17 2025</td>
                                <td class="invoice-plan">Free Plan</td>
                                <td class="invoice-amount">0 USD</td>
                                <td>
                                    <span class="payment-provider offline">Offline</span>
                                </td>
                                <td>
                                    <span class="payment-status paid">Paid</span>
                                </td>
                                <td>
                                    <button class="view-invoice-btn"><a href="{{ route('dashboard.invoice') }}"
                                            style="text-decoration: none; color: white;">View Invoice</a></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="invoice-id">#6942f965d6c21</td>
                                <td class="invoice-date">Nov, 20 2025</td>
                                <td class="invoice-plan">Standard Plan</td>
                                <td class="invoice-amount">20 USD</td>
                                <td>
                                    <span class="payment-provider paypal">Paypal</span>
                                </td>
                                <td>
                                    <span class="payment-status paid">Paid</span>
                                </td>
                                <td>
                                    <button class="view-invoice-btn"><a href="{{ route('dashboard.invoice') }}"
                                            style="text-decoration: none; color: white;">View Invoice</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Upgrade Plan Button Functionality
        const upgradePlanBtn = document.querySelector('.upgrade-plan-btn');
        upgradePlanBtn.addEventListener('click', function () {
            // Show upgrade options modal
            showUpgradeOptions();
        });

        function showUpgradeOptions() {
            // Create modal for upgrade options
            const modal = document.createElement('div');
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            modal.style.display = 'flex';
            modal.style.justifyContent = 'center';
            modal.style.alignItems = 'center';
            modal.style.zIndex = '1000';

            modal.innerHTML = `
                    <div style="background: white; border-radius: 12px; padding: 30px; width: 90%; max-width: 500px; max-height: 90vh; overflow-y: auto;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <h2 style="font-size: 24px; color: #1e293b;">Upgrade Your Plan</h2>
                            <button id="closeModal" style="background: none; border: none; font-size: 24px; cursor: pointer; color: #64748b;">×</button>
                        </div>

                        <div style="margin-bottom: 25px;">
                            <h3 style="font-size: 18px; color: #475569; margin-bottom: 15px;">Select a Plan</h3>
                            <div style="display: grid; gap: 15px;">
                                <div style="border: 2px solid #e2e8f0; border-radius: 8px; padding: 20px; cursor: pointer; transition: all 0.3s ease;">
                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                        <h4 style="font-size: 18px; color: #1e293b; font-weight: 600;">Standard Plan</h4>
                                        <span style="font-size: 20px; font-weight: 700; color: #2563eb;">$20/month</span>
                                    </div>
                                    <p style="color: #64748b; margin-bottom: 15px;">Perfect for small to medium businesses</p>
                                    <ul style="color: #475569; list-style: none; padding-left: 0;">
                                        <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 20 Active Jobs</li>
                                        <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 2 Highlight Jobs</li>
                                        <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 10 Featured Jobs</li>
                                        <li><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 20 Candidates Profile View</li>
                                    </ul>
                                </div>

                                <div style="border: 2px solid #e2e8f0; border-radius: 8px; padding: 20px; cursor: pointer; transition: all 0.3s ease;">
                                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                        <h4 style="font-size: 18px; color: #1e293b; font-weight: 600;">Premium Plan</h4>
                                        <span style="font-size: 20px; font-weight: 700; color: #2563eb;">$50/month</span>
                                    </div>
                                    <p style="color: #64748b; margin-bottom: 15px;">For large businesses with extensive hiring needs</p>
                                    <ul style="color: #475569; list-style: none; padding-left: 0;">
                                        <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Unlimited Active Jobs</li>
                                        <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 5 Highlight Jobs</li>
                                        <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 20 Featured Jobs</li>
                                        <li><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Unlimited Candidates Profile View</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; justify-content: flex-end; gap: 10px;">
                            <button id="cancelUpgrade" style="padding: 10px 20px; background: #f1f5f9; color: #475569; border: none; border-radius: 6px; font-weight: 600; cursor: pointer;">Cancel</button>
                            <button id="confirmUpgrade" style="padding: 10px 20px; background: #2563eb; color: white; border: none; border-radius: 6px; font-weight: 600; cursor: pointer;">Upgrade Now</button>
                        </div>
                    </div>
                `;

            document.body.appendChild(modal);

            // Close modal when X is clicked
            document.getElementById('closeModal').addEventListener('click', function () {
                document.body.removeChild(modal);
            });

            // Close modal when Cancel is clicked
            document.getElementById('cancelUpgrade').addEventListener('click', function () {
                document.body.removeChild(modal);
            });

            // Handle upgrade confirmation
            document.getElementById('confirmUpgrade').addEventListener('click', function () {
                alert('Redirecting to payment gateway... This is a demonstration.');
                document.body.removeChild(modal);
            });

            // Add hover effects to plan options
            const planOptions = modal.querySelectorAll('div[style*="border: 2px solid #e2e8f0"]');
            planOptions.forEach(option => {
                option.addEventListener('mouseenter', function () {
                    this.style.borderColor = '#2563eb';
                    this.style.boxShadow = '0 4px 12px rgba(37, 99, 235, 0.1)';
                });

                option.addEventListener('mouseleave', function () {
                    this.style.borderColor = '#e2e8f0';
                    this.style.boxShadow = 'none';
                });

                option.addEventListener('click', function () {
                    // Remove selection from all options
                    planOptions.forEach(opt => {
                        opt.style.borderColor = '#e2e8f0';
                        opt.style.backgroundColor = 'white';
                    });

                    // Select this option
                    this.style.borderColor = '#2563eb';
                    this.style.backgroundColor = '#f0f7ff';
                });
            });
        }

        // View Invoice Button Functionality
        const viewInvoiceButtons = document.querySelectorAll('.view-invoice-btn');
        viewInvoiceButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                const invoiceId = this.closest('tr').querySelector('.invoice-id').textContent;
                const invoiceDate = this.closest('tr').querySelector('.invoice-date').textContent;
                const invoicePlan = this.closest('tr').querySelector('.invoice-plan').textContent;
                const invoiceAmount = this.closest('tr').querySelector('.invoice-amount').textContent;

                alert(`Invoice Details:\n\nID: ${invoiceId}\nDate: ${invoiceDate}\nPlan: ${invoicePlan}\nAmount: ${invoiceAmount}\n\nThis would show the invoice details in a full page or modal.`);
            });
        });

        // Chat button functionality
        const chatButtons = document.querySelectorAll('.chat-btn');
        chatButtons.forEach(button => {
            button.addEventListener('click', function () {
                alert('Opening chat window. This is a demonstration.');
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-container input');
        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                alert(`Searching for: ${searchInput.value}`);
            }
        });

        // Sidebar menu functionality
        const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove active class from all links
                sidebarLinks.forEach(item => item.classList.remove('active'));

                // Add active class to clicked link
                this.classList.add('active');

                // Update page title based on clicked menu item
                const pageName = this.textContent.trim();
                document.querySelector('h1').textContent = pageName;

                console.log(`Navigating to: ${pageName}`);
            });
        });
    </script>
@endsection
