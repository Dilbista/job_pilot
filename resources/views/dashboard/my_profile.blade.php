@extends('layouts.master')
@section('content')

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
            --semi-gov: #f59e0b;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: #f1f5f9;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: #f1f5f9;
            padding: 12px 40px;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            width: 100%;
        }

        /* Banner */
        .banner img {
            width: 100%;
            height: 270px;
            object-fit: cover;
        }

        /* Company Card */
        .company-card {
            background: #fff;
            max-width: 1000px;
            margin: -90px auto 30px;
            padding: 20px 30px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            position: relative;
            z-index: 10;
        }


        .company-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .company-logo {
            width: 64px;
            height: 64px;
            border-radius: 10px;
            background: white;
            padding: 6px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }


        .btn-primary {
            background: #2563eb;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
        }

        open-position-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .open-position-btn:hover {
            background-color: var(--primary-dark);
        }

        /* Open Positions Section */
        .open-positions-section {
            background-color: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: var(--shadow);
            grid-column: 1 / -1;
            margin-top: 1rem;
            scroll-margin-top: 100px;
            margin-bottom: 20px;
        }

        .no-data {
            text-align: center;
            padding: 3rem;
            color: var(--gray);
        }

        .no-data i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #cbd5e1;
        }

        .section-title {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.8rem;
            border-bottom: 1px solid var(--border);
        }



        /* Layout */
        .containner {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        /* Left */
        .left-content h3 {
            margin-bottom: 15px;
        }

        .left-content p {
            line-height: 1.7;
            font-size: 15px;
        }

        .share {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .share a {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 13px;
            cursor: pointer;
            background: #e2e8f0;
        }

        /* Sidebar */
        .sidebar .card {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .info-box {
            display: flex;
            justify-content: space-between;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .label {
            font-size: 12px;
            color: #64748b;
        }

        .map {
            width: 100%;
            height: 220px;
            border: none;
            border-radius: 8px;
        }

        .social-icons i {
            font-size: 18px;
            margin-right: 10px;
            cursor: pointer;
        }

        .link {
            color: #2563eb;
            font-size: 13px;
            cursor: pointer;
        }
    </style>

    <div class="container">
        <!-- Top Breadcrumb -->
        <div class="breadcrumb">
            <span>Company Details</span>
            <span class="path"><a href="{{ route('home') }}" style="text-decoration: none; color: black;">Home</a> / Templatecookie</span>
        </div>

        <!-- Banner -->
        <div class="banner">
            <img src="{{ asset('images/programming-languages.png') }}" alt="Banner">
        </div>

        <!-- Company Card -->
        <div class="company-card">
            <div class="company-left">
                <img src="{{ asset('images/profile.png') }}" class="company-logo">
                <div>
                    <h2>Templatecookie</h2>
                    <p>Hotel/Restaurant</p>
                </div>
            </div>

            <a href="#open-positions" class="btn-primary" class="open-position-btn" id="top-open-position-btn">
                Open Position <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <!-- Main Content -->
        <div class="containner">

            <!-- Left Content -->
            <div class="left-content">
                <h3>Company Description</h3>
                <p>
                    Templatecookie is a team of developers working on building quality templates and scripts.
                    We are a team of 12+ designer developers with 3+ years of working experiences!
                    We have experts in React JS, Vue JS, Laravel, PHP, MySQL, Bootstrap, HTML, CSS, SCSS,
                    Tailwind CSS, REST API & React Native!
                </p>

                <div class="share">
                    <span>Share This Profile:</span>
                    <a class="linkedin">Linkedin</a>
                    <a class="facebook">Facebook</a>
                    <a class="twitter">Twitter</a>
                    <a class="pinterest">Pinterest</a>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="sidebar">

                <div class="info-box">
                    <div>
                        <i class="fas fa-building"></i>
                        <p class="label">Organization Type</p>
                        <p>Semi Government</p>
                    </div>
                    <div>
                        <i class="fas fa-users"></i>
                        <p class="label">Company Size</p>
                        <p>100–200 Members</p>
                    </div>
                </div>

                <div class="card">
                    <h4>Contact Information</h4>
                    <p><i class="fas fa-location-dot"></i> Bangladesh</p>
                    <span class="link">Show Contact Information</span>
                </div>

                <div class="card">
                    <h4>Map Location</h4>
                    <iframe
                        src="https://www.openstreetmap.org/export/embed.html?bbox=90.3563%2C23.6850%2C90.4563%2C23.7850&layer=mapnik"
                        class="map" loading="lazy">
                    </iframe>
                </div>

                <div class="card">
                    <h4>Follow us on:</h4>
                    <div class="social-icons">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <!-- Open Positions Section -->
        <div class="open-positions-section" id="open-positions">
            <h2 class="section-title">Open Positions (0)</h2>
            <div class="no-data">
                <i class="fas fa-clipboard-list"></i>
                <h3>No Data Found!</h3>
                <p>There are currently no open positions available.</p>
            </div>
        </div>

    </div>
    <script>
        // Scroll to open positions section when clicking the button
        document.getElementById('top-open-position-btn').addEventListener('click', function (e) {
            e.preventDefault();
            const openPositionsSection = document.getElementById('open-positions');

            // Add highlight animation
            openPositionsSection.classList.add('highlight-section');

            // Smooth scroll to the section
            openPositionsSection.scrollIntoView({ behavior: 'smooth' });

            // Remove the highlight class after animation completes
            setTimeout(() => {
                openPositionsSection.classList.remove('highlight-section');
            }, 2000);
        });
    </script>

@endsection
</body>

</html>