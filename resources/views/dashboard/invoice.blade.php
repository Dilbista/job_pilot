<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Invoice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        /* Invoice Header */
        .invoice-header {
            background-color: #3a86ff;
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .invoice-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }
        
        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 18px;
        }
        
        .invoice-number, .invoice-date {
            font-weight: 600;
        }
        
        /* Invoice Content */
        .invoice-content {
            padding: 20px;
        }
        
        /* Separator Line */
        .separator {
            height: 2px;
            background-color: #eee;
            margin: 30px 0;
        }
        
        /* Invoice Sections */
        .invoice-section {
            margin-bottom: 20px;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #3a86ff;
        }
        
        /* Invoice From/To */
        .address-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        .address-box {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
        }
        
        .company-name {
            font-size: 22px;
            font-weight: 700;
            color: #3a86ff;
            margin-bottom: 8px;
        }
        
        .contact-info {
            color: #666;
            line-height: 1.8;
        }
        
        .contact-info p {
            margin-bottom: 5px;
        }
        
        /* Invoice Table */
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        
        .invoice-table th {
            background-color: #f8f9fa;
            color: #555;
            font-weight: 600;
            text-align: left;
            padding: 10px;
            border-bottom: 2px solid #eee;
        }
        
        .invoice-table td {
            padding: 10px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }
        
        .plan-name {
            font-weight: 600;
            color: #333;
        }
        
        .benefits-list {
            list-style: none;
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .benefits-list li {
            margin-bottom: 5px;
        }
        
        .price, .quantity, .total {
            font-weight: 600;
            color: #333;
        }
        
        /* Payment Info */
        .payment-info {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
        }
        
        .payment-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 15px;
        }
        
        .payment-item {
            margin-bottom: 10px;
        }
        
        .payment-label {
            font-weight: 600;
            color: #555;
            margin-bottom: 5px;
        }
        
        .payment-value {
            color: #333;
        }
        
        .status-unpaid {
            display: inline-block;
            background-color: #fff3cd;
            color: #856404;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
        }
        
        /* Totals Section */
        .totals-section {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
        
        .totals-box {
            width: 300px;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
        }
        
        .total-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .total-item:last-child {
            border-bottom: none;
            font-size: 20px;
            font-weight: 700;
            color: #3a86ff;
        }
        
        .total-label {
            font-weight: 600;
            color: #555;
        }
        
        .total-value {
            font-weight: 600;
            color: #333;
        }
        
        /* Footer Actions */
        .invoice-footer {
            padding: 20px 30px;
            background-color: #f8f9fa;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary {
            background-color: #3a86ff;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #2a75f0;
        }
        
        .btn-secondary {
            background-color: white;
            color: #333;
            border: 1px solid #ddd;
        }
        
        .btn-secondary:hover {
            background-color: #f8f9fa;
        }
        
        
        /* Print Styles */
        @media print {
            body {
                background-color: white;
                padding: 0;
            }
            
            .container {
                box-shadow: none;
                border-radius: 0;
            }
            
            .invoice-footer, .btn {
                display: none;
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .address-container, .payment-details {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .totals-box {
                width: 100%;
            }
            
            .invoice-footer {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .action-buttons {
                flex-direction: column;
                width: 100%;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .invoice-table {
                display: block;
                overflow-x: auto;
            }
        }
        
        @media (max-width: 480px) {
            .invoice-header {
                padding: 20px 10px;
            }
            
            .invoice-content {
                padding: 20px 10px;
            }
            
            .invoice-title {
                font-size: 36px;
            }
            
            .invoice-info {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Invoice Header -->
        <div class="invoice-header">
            <h1 class="invoice-title">INVOICE</h1>
            <div class="invoice-info">
                <div class="invoice-number">Invoice No: #694cff7960111</div>
                <div class="invoice-date">Date: Dec 25, 2025</div>
            </div>
        </div>
        
        <!-- Invoice Content -->
        <div class="invoice-content">
            <!-- Invoice From -->
            <div class="invoice-section">
                <h2 class="section-title">Invoice From:</h2>
                <div class="address-box">
                    <div class="company-name">Jobpilot</div>
                    <div class="contact-info">
                        <p>jobpilot@templatecookie.com</p>
                        <p>https://jobpilot.lomeyolabs.com</p>
                    </div>
                </div>
            </div>
            
            <!-- Separator -->
            <div class="separator"></div>
            
            <!-- Invoice Table -->
            <div class="invoice-section">
                <table class="invoice-table">
                    <thead>
                        <tr>
                            <th>Plan</th>
                            <th>Benefits</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="plan-name">Standard Plan</td>
                            <td>
                                <ul class="benefits-list">
                                    <li>Job Limit : 20</li>
                                    <li>Featured Job Limit : 8</li>
                                    <li>Highlight Job Limit : 4</li>
                                    <li>Candidate CV View Limit : 20</li>
                                </ul>
                            </td>
                            <td class="price">$50.00</td>
                            <td class="quantity">1</td>
                            <td class="total">$50.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Separator -->
            <div class="separator"></div>
            
            <!-- Payment Info -->
            <div class="invoice-section">
                <h2 class="section-title">Payment Info:</h2>
                <div class="payment-info">
                    <div class="payment-details">
                        <div class="payment-item">
                            <div class="payment-label">Payment Method</div>
                            <div class="payment-value">- Offline</div>
                        </div>
                        <div class="payment-item">
                            <div class="payment-label">Payment Type</div>
                            <div class="payment-value">- Subscription based</div>
                        </div>
                        <div class="payment-item">
                            <div class="payment-label">Payment Status</div>
                            <div class="payment-value"><span class="status-unpaid">Unpaid</span></div>
                        </div>
                        <div class="payment-item">
                            <div class="payment-label">Amount</div>
                            <div class="payment-value">$50.00</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Separator -->
            <div class="separator"></div>
            
            <!-- Invoice To -->
            <div class="invoice-section">
                <h2 class="section-title">Invoice To:</h2>
                <div class="address-box">
                    <div class="company-name">Templatecookie</div>
                    <div class="contact-info">
                        <p>+880123456789</p>
                        <p>company@mail.com</p>
                    </div>
                </div>
            </div>
            
            <!-- Separator -->
            <div class="separator"></div>
            
            <!-- Totals -->
            <div class="totals-section">
                <div class="totals-box">
                    <div class="total-item">
                        <div class="total-label">Subtotal</div>
                        <div class="total-value">$50.00</div>
                    </div>
                    <div class="total-item">
                        <div class="total-label">Grand Total</div>
                        <div class="total-value">$50.00</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Actions -->
        <div class="invoice-footer">
            <div class="action-buttons">
                <button class="btn btn-secondary" onclick="window.print()">
                    <i class="fas fa-print"></i> Print Invoice
                </button>
                <button class="btn btn-primary" onclick="downloadInvoice()">
                    <i class="fas fa-download"></i> Download PDF
                </button>
            </div>
        </div>
        <hr>
        <div style="text-align: center; margin-bottom: 20px;"><h3>Terms & Conditions</h3>
            <a href="{{ route('company.termsCondition') }}">View Terms & Conditions</a>
        </div>
    </div>

    <script>
        // Function to simulate PDF download
        function downloadInvoice() {
            alert('Downloading invoice as PDF...');
            // In a real application, this would generate and download a PDF
            // For this demo, we'll just show an alert
            
            // Simulate download delay
            setTimeout(() => {
                const success = confirm('Invoice downloaded successfully! Would you like to view it?');
                if (success) {
                    // In a real app, this would open the PDF
                    console.log('Opening downloaded invoice...');
                }
            }, 1000);
        }
        
        // Function to format current date
        function getCurrentDate() {
            const now = new Date();
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return now.toLocaleDateString('en-US', options);
        }
        
        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            // You could dynamically update the date or invoice number here
            console.log('Invoice page loaded');
            
            // Example: Update with current date
            // document.querySelector('.invoice-date').textContent = `Date: ${getCurrentDate()}`;
        });
        
        // Add print-specific styling
        const printStyles = `
            @media print {
                body * {
                    visibility: hidden;
                }
                .container, .container * {
                    visibility: visible;
                }
                .container {
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                    box-shadow: none;
                    border-radius: 0;
                }
                .invoice-footer, .btn {
                    display: none !important;
                }
            }
        `;
        
        // Add print styles to document
        const styleSheet = document.createElement("style");
        styleSheet.type = "text/css";
        styleSheet.innerText = printStyles;
        document.head.appendChild(styleSheet);
    </script>
</body>
</html>