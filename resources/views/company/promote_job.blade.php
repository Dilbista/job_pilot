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
            height: 70px;
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
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .job-info p {
            font-size: 15px;
            margin: 5px 0;
        }

        /* PROMOTION OPTIONS */
        .promotion-options {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 30px;
            margin-top: 0px;
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
            height: 180px;
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
            background: #1d4ed8;
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
                Promote Job →
            </button>
        </div>

    </div>

</body>

</html>