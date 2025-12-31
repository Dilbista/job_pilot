<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Promote Job</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #64748b;
            --dark: #1e293b;
            --light: #f8fafc;
            --border: #e2e8f0;
            --gray: #94a3b8;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        body {
            background: #ffffff;
            color: #111827;
        }

        /* Header Navigation */
        .navbar {
            background-color: white;
            position: sticky;
            top: 0;
            z-index: 100;
            height: 80px;
            border-bottom: 1px solid rgb(196, 194, 194);
            border-top: 1px solid rgb(196, 194, 194);
        }

        /* PAGE */
        .page-wrapper {
            max-width: 1100px;
            margin: 30px auto;
            padding: 15px;
        }

        /* HEADER */
        .job-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .job-header h1 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .job-info h2 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .job-info p {
            font-size: 18px;
            margin: 5px 0;
        }

        /* PROMOTION OPTIONS */
        .promotion-options {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .promo-card {
            cursor: pointer;
        }

        .promo-card input {
            display: none;
        }

        .card-content {
            width: 360px;
            background: rgb(247, 250, 254);
            border-radius: 12px;
            padding: 20px;
            border: 2px solid transparent;
            transition: 0.3s ease;
        }

        .card-title {
            font-size: 13px;
            font-weight: 600;
            color: #6b7280;
            margin-bottom: 10px;
        }

        /* IMAGE FIT */
        .card-content img {
            width: 100%;
            height: 190px;
            object-fit: contain;
            background: #ffffff;
            border-radius: 8px;
            padding: 10px;
        }

        /* RADIO TEXT */
        .radio-text {
            margin-top: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
        }

        /* RADIO CIRCLE */
        .radio-text::before {
            content: "";
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid #cbd5e1;
        }

        /* SELECTED STATE */
        .promo-card input:checked+.card-content {
            border-color: #2563eb;
            background-color: rgb(237, 239, 244);
        }

        .promo-card input:checked+.card-content .radio-text::before {
            border-color: #2563eb;
            background: radial-gradient(#2563eb 45%, transparent 46%);
        }

        /* FOOTER */
        .footer-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .skip-link {
            color: #111827;
            font-weight: 500;
            text-decoration: none;
            padding: 10px 20px;
            margin-left: 150px;
        }

        .promote-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-right: 150px;
        }

        .promote-btn:hover {
            background: #0344f7;
        }

        /* ============================= */
        /* RESPONSIVE STYLES */
        /* ============================= */

        /* Large tablets / small laptops */
        @media (max-width: 1024px) {
            .page-wrapper {
                max-width: 95%;
            }

            .promotion-options {
                gap: 25px;
            }

            .card-content {
                width: 320px;
            }

            .skip-link {
                margin-left: 0;
            }

            .promote-btn {
                margin-right: 0;
            }
        }

        /* Tablets */
        @media (max-width: 768px) {
            .navbar {
                height: auto;
                padding: 10px 0;
            }

            .job-header h1 {
                font-size: 22px;
            }

            .job-info h2 {
                font-size: 20px;
            }

            .job-info p {
                font-size: 16px;
            }

            .promotion-options {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .card-content {
                width: 100%;
                max-width: 420px;
            }

            .footer-actions {
                flex-direction: column;
                gap: 15px;
            }

            .skip-link,
            .promote-btn {
                margin: 0;
            }
        }

        /* Mobile phones */
        @media (max-width: 480px) {
            .page-wrapper {
                margin: 20px auto;
                padding: 10px;
            }

            .job-header h1 {
                font-size: 20px;
            }

            .job-info h2 {
                font-size: 18px;
            }

            .job-info p {
                font-size: 15px;
            }

            .card-content {
                padding: 16px;
            }

            .card-content img {
                height: 160px;
            }

            .radio-text {
                font-size: 14px;
            }

            .promote-btn {
                width: 100%;
                justify-content: center;
                font-size: 15px;
            }

            .skip-link {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>

</head>

<body>
    <!-- Header Navigation -->
    <nav class="navbar">
        <div class="nav-container">

        </div>
    </nav>

    <div class="page-wrapper">

        <!-- HEADER -->
        <div class="job-header">
            <h1>Promote Job: UI/UX Designer</h1>

            <div class="job-info">
                <h2>Job Description</h2>
                {{-- <p><strong>Title:</strong> UI/UX Designer</p> --}}
                <p>Title: UI/UX Designer</p>
                <p>Company: Templatecookie</p>
                <p>Location: Remote</p>
                <p>...</p>
            </div>
        </div>

        <!-- PROMOTION OPTIONS -->
        <div class="promotion-options">

            <!-- FEATURED -->
            <label class="promo-card">
                <input type="radio" name="promotion" checked>
                <div class="card-content">
                    {{-- <p class="card-title">ALWAYS ON THE TOP</p> --}}
                    <img src="{{ asset('images/always-on-top.png') }}" alt="Always on Top">
                    <div class="radio-text">Featured (On the top)</div>
                </div>
            </label>

            <!-- HIGHLIGHT -->
            <label class="promo-card">
                <input type="radio" name="promotion">
                <div class="card-content">
                    {{-- <p class="card-title">HIGHLIGHT JOB WITH COLOR</p> --}}
                    <img src="{{ asset('images/highlight-job.png') }}" alt="Highlight Job">
                    <div class="radio-text">Highlight</div>
                </div>
            </label>

        </div>

        <!-- FOOTER ACTIONS -->
        <div class="footer-actions">
            <a href="{{ route('company.index') }}" class="skip-link">Skip Now</a>

            <button class="promote-btn">
                <a href="{{ route('company.viewDetails') }}" style="color: white; text-decoration: none;">Promote Job
                    →</a>
            </button>
        </div>

    </div>