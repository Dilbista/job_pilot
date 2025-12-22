<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Find Your Perfect Job</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        /* Header & Navigation */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .top-bar {
            background-color: var(--primary);
            color: white;
            padding: 8px 0;
            text-align: center;
            font-size: 14px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            font-size: 16px;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .post-job-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .post-job-btn:hover {
            background-color: #2a75ff;
            transform: translateY(-2px);
        }

        .lang-currency {
            display: flex;
            gap: 15px;
        }

        .lang-currency select {
            border: none;
            background: transparent;
            font-weight: 500;
            cursor: pointer;
            outline: none;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(58, 134, 255, 0.9), rgba(131, 56, 236, 0.9)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .search-box {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            gap: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .search-input {
            flex: 1;
            padding: 15px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 16px;
            outline: none;
            transition: var(--transition);
        }

        .search-input:focus {
            border-color: var(--primary);
        }

        .search-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-btn:hover {
            background-color: #2a75ff;
        }

        .suggestions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
        }

        .suggestion-tag {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
            background-color: white;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item {
            padding: 30px;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .stat-text {
            font-size: 18px;
            color: var(--gray);
        }

        /* Why Choose Us */
        .why-us {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
            font-size: 18px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: rgba(58, 134, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
            color: var(--primary);
        }

        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .feature-card p {
            color: var(--gray);
            margin-bottom: 20px;
        }

        .contact-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .contact-btn:hover {
            background-color: #2a75ff;
        }

        /* Popular Vacancies & Categories */
        .popular-section {
            padding: 80px 0;
            background-color: white;
        }

        .popular-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .popular-box {
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            padding: 30px;
        }

        .popular-box h3 {
            font-size: 24px;
            margin-bottom: 25px;
            color: var(--dark);
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-gray);
        }

        .vacancy-list, .category-list {
            list-style: none;
        }

        .vacancy-item, .category-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .vacancy-item:last-child, .category-item:last-child {
            border-bottom: none;
        }

        .vacancy-info, .category-info {
            display: flex;
            align-items: center;
        }

        .vacancy-icon, .category-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background-color: rgba(58, 134, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
        }

        .vacancy-text h4, .category-text h4 {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .vacancy-text p, .category-text p {
            font-size: 14px;
            color: var(--gray);
        }

        .positions {
            background-color: var(--primary);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .view-all-btn {
            display: block;
            width: 100%;
            text-align: center;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            padding: 15px;
            border-radius: var(--border-radius);
            font-weight: 600;
            margin-top: 20px;
            transition: var(--transition);
        }

        .view-all-btn:hover {
            background-color: #2a75ff;
        }

        /* Working Process */
        .working-process {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .step {
            position: relative;
        }

        .step-number {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            margin: 0 auto 20px;
        }

        .step h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .step p {
            color: var(--gray);
        }

        /* Featured Jobs */
        .featured-jobs {
            padding: 80px 0;
            background-color: white;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 36px;
            color: var(--dark);
        }

        .view-all-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .view-all-link i {
            margin-left: 8px;
            transition: var(--transition);
        }

        .view-all-link:hover i {
            transform: translateX(5px);
        }

        .job-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .job-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--shadow);
            border: 1px solid var(--light-gray);
            transition: var(--transition);
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .job-title h3 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .job-type {
            background-color: rgba(58, 134, 255, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
        }

        .job-details {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        .job-detail {
            display: flex;
            align-items: center;
            color: var(--gray);
            font-size: 14px;
        }

        .job-detail i {
            margin-right: 8px;
            color: var(--primary);
        }

        .job-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .time-remaining {
            color: var(--danger);
            font-weight: 600;
            font-size: 14px;
        }

        .apply-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .apply-btn:hover {
            background-color: #2a75ff;
        }

        /* Top Companies */
        .top-companies {
            padding: 80px 0;
            background-color: #f8f9fa;
        }

        .company-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .company-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }

        .company-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .company-logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            margin: 0 auto 20px;
        }

        .company-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .company-location, .company-industry {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 5px;
        }

        .open-positions {
            background-color: rgba(6, 214, 160, 0.1);
            color: var(--success);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
            margin: 15px 0;
        }

        .view-profile-btn {
            display: inline-block;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: var(--transition);
        }

        .view-profile-btn:hover {
            color: #2a75ff;
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background-color: white;
        }

        .testimonial-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            padding: 30px;
            position: relative;
        }

        .testimonial-text {
            font-style: italic;
            color: var(--dark);
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--light-gray);
            margin-right: 15px;
        }

        .author-info h4 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .author-info p {
            color: var(--gray);
            font-size: 14px;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 70px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 25px;
            color: white;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 12px;
        }

        .footer-column ul li a {
            color: #adb5bd;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-column ul li a:hover {
            color: white;
            padding-left: 5px;
        }

        .footer-logo {
            font-size: 28px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .footer-logo i {
            margin-right: 10px;
            color: var(--primary);
        }

        .phone-number {
            font-size: 20px;
            margin: 20px 0;
            display: flex;
            align-items: center;
        }

        .phone-number i {
            margin-right: 10px;
            color: var(--primary);
        }

        .footer-description {
            color: #adb5bd;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #343a40;
            color: #adb5bd;
            font-size: 14px;
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
            
            .hero h1 {
                font-size: 36px;
            }
            
            .search-box {
                flex-direction: column;
            }
            
            .testimonial-cards {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                gap: 15px;
            }
            
            .hero h1 {
                font-size: 28px;
            }
            
            .hero p {
                font-size: 16px;
            }
            
            .section-title h2 {
                font-size: 28px;
            }
            
            .job-cards {
                grid-template-columns: 1fr;
            }
            
            .company-cards {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .nav-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .company-cards {
                grid-template-columns: 1fr;
            }
            
            .stat-number {
                font-size: 36px;
            }
            
            .popular-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="top-bar">
            <div class="container">
                Discover Your Perfect Job: Matching Your Interests and Skills
            </div>
        </div>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <i class="fas fa-rocket"></i>
                    Jobpilot
                </div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Candidates</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">My Job</a></li>
                </ul>
                <div class="nav-actions">
                    <button class="post-job-btn">Post Job</button>
                    <div class="lang-currency">
                        <select>
                            <option>English</option>
                            <option>Spanish</option>
                        </select>
                        <select>
                            <option>USD</option>
                            <option>EUR</option>
                        </select>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Discover Your Perfect Job:<br>Matching Your Interests and Skills</h1>
            <p>Unlock Your Potential, Embrace Your Future.</p>
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Job Title, Keyword">
                <input type="text" class="search-input" placeholder="Enter Location">
                <button class="search-btn">Find Job Now</button>
            </div>
            <div class="suggestions">
                <span class="suggestion-tag">Design/Creative</span>
                <span class="suggestion-tag">Driving/Motor Technician</span>
                <span class="suggestion-tag">IT & Telecommunication</span>
                <span class="suggestion-tag">Hospitality Travel Tourism</span>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">2+</div>
                    <div class="stat-text">Live Jobs</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">14+</div>
                    <div class="stat-text">Companies</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">31+</div>
                    <div class="stat-text">Candidates</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5+</div>
                    <div class="stat-text">Total New Jobs</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-us">
        <div class="container">
            <div class="section-title">
                <h2>Why choose us</h2>
            </div>
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Effective</h3>
                    <p>Whether you choose to post your jobs directly or have them induced automatically, our pricing model is highly competitive and cost-effective.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3>Easy to Use</h3>
                    <p>We have created a streamlined user-intention so you can easily manage your jobs and candidates.</p>
                    <button class="contact-btn">Have a question ? Contact us</button>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Quality Candidate</h3>
                    <p>Irrespective of your organization's size, we have a large pool of candidates with diverse skill sets and experience levels.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Vacancies & Categories -->
    <section class="popular-section">
        <div class="container">
            <div class="popular-container">
                <div class="popular-box">
                    <h3>Most Popular Vacancies</h3>
                    <ul class="vacancy-list">
                        <li class="vacancy-item">
                            <div class="vacancy-info">
                                <div class="vacancy-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="vacancy-text">
                                    <h4>Administrator</h4>
                                    <p>2 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">2</span>
                        </li>
                        <li class="vacancy-item">
                            <div class="vacancy-info">
                                <div class="vacancy-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="vacancy-text">
                                    <h4>Executive</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="vacancy-item">
                            <div class="vacancy-info">
                                <div class="vacancy-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="vacancy-text">
                                    <h4>Team Leader</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="vacancy-item">
                            <div class="vacancy-info">
                                <div class="vacancy-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="vacancy-text">
                                    <h4>Director</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="vacancy-item">
                            <div class="vacancy-info">
                                <div class="vacancy-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="vacancy-text">
                                    <h4>Manager</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="vacancy-item">
                            <div class="vacancy-info">
                                <div class="vacancy-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="vacancy-text">
                                    <h4>Assistant Manager</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                    </ul>
                </div>
                <div class="popular-box">
                    <h3>Popular Category</h3>
                    <ul class="category-list">
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-tshirt"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Garments/Textile</h4>
                                    <p>1 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">1</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="category-text">
                                    <h4>IT & Telecommunication</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-plane"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Hospitality/Travel/Tourism</h4>
                                    <p>1 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">1</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Medical/Pharma</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Engineer/Architects</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Driving/Motor Technician</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Design/Creative</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                        <li class="category-item">
                            <div class="category-info">
                                <div class="category-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <div class="category-text">
                                    <h4>Law/Legal</h4>
                                    <p>0 Open Positions</p>
                                </div>
                            </div>
                            <span class="positions">0</span>
                        </li>
                    </ul>
                    <a href="#" class="view-all-btn">View All Jobs →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Working Process -->
    <section class="working-process">
        <div class="container">
            <div class="section-title">
                <h2>Jobpilot Working Process</h2>
                <p>Follow these simple steps to find your perfect job</p>
            </div>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Explore Opportunities</h3>
                    <p>Browse through a diverse range of job listings tailored to your interests and expertise.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Create Your Profile</h3>
                    <p>Build a standard profile highlighting your skills, experiences, and qualifications.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Apply with Ease</h3>
                    <p>Effortlessly apply to jobs that match your preferences with just a few clicks.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Track Your Progress</h3>
                    <p>Stay informed on your applications and manage your job-seeking journey effectively.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Jobs -->
    <section class="featured-jobs">
        <div class="container">
            <div class="section-header">
                <h2>Featured Job</h2>
                <a href="#" class="view-all-link">View All → <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="job-cards">
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-title">
                            <h3>Mid level Laravel Developer</h3>
                            <span class="job-type">Full Time</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="job-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ankara</span>
                        </div>
                        <div class="job-detail">
                            <i class="fas fa-dollar-sign"></i>
                            <span>$200 - $14 Project Basis</span>
                        </div>
                    </div>
                    <div class="job-footer">
                        <div class="time-remaining">10s 57m Remaining</div>
                        <button class="apply-btn">Apply Now →</button>
                    </div>
                </div>
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-title">
                            <h3>MERN Stack Developer</h3>
                            <span class="job-type">Contractual</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="job-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ankara</span>
                        </div>
                        <div class="job-detail">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Competitive</span>
                        </div>
                    </div>
                    <div class="job-footer">
                        <div class="time-remaining">14 16th Remaining</div>
                        <button class="apply-btn">Apply Now →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Companies -->
    <section class="top-companies">
        <div class="container">
            <div class="section-title">
                <h2>Top Companies</h2>
                <p>Explore opportunities with leading companies</p>
            </div>
            <div class="company-cards">
                <div class="company-card">
                    <div class="company-logo">DP</div>
                    <h3>Digital Point</h3>
                    <p class="company-location">Greenland</p>
                    <p class="company-industry">NGO/Development</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">AT</div>
                    <h3>Add Tek Software Co.</h3>
                    <p class="company-location">Dominica</p>
                    <p class="company-industry">Information Technology</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">FA</div>
                    <h3>Fiscal Analytics</h3>
                    <p class="company-location">Sylhet, Bangladesh</p>
                    <p class="company-industry">Logistics/Transportation</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">TC</div>
                    <h3>Templatescookie</h3>
                    <p class="company-location">Bangladesh</p>
                    <p class="company-industry">Hotel/Restaurant</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">QC</div>
                    <h3>Quantum Comp Solutions</h3>
                    <p class="company-location">Tanzania</p>
                    <p class="company-industry">Telecommunication</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">RS</div>
                    <h3>Radiance Software</h3>
                    <p class="company-location">Jordan</p>
                    <p class="company-industry">Wholesale/Retail/Export Import</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">N</div>
                    <h3>Neróware</h3>
                    <p class="company-location">Australia</p>
                    <p class="company-industry">Hotel/Restaurant</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">TT</div>
                    <h3>TriTech International</h3>
                    <p class="company-location">Belgium</p>
                    <p class="company-industry">Media/Marketing/News Way</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
                <div class="company-card">
                    <div class="company-logo">IW</div>
                    <h3>IntelliWare</h3>
                    <p class="company-location">United Kingdom</p>
                    <p class="company-industry">Software/IT</p>
                    <div class="open-positions">Open Position</div>
                    <a href="#" class="view-profile-btn">View Profile →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
            </div>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p class="testimonial-text">Jobpilot has been a game-changer for my job search. I found my dream job in no time, thanks to their user-friendly interface and extensive job listings tailored to my skills and preferences. The application process was seamless, and I received responses faster than I expected.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-info">
                            <h4>Emily Johnson</h4>
                            <p>Tech Solutions Inc.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">I can't thank Jobpilot enough for their exceptional services. Their personalized job recommendations and application tracking made my job hunt a breeze. I landed my ideal position within weeks of using the platform. The career resources and support provided were invaluable throughout the process.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-info">
                            <h4>David Rodriguez</h4>
                            <p>Innovation Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <i class="fas fa-rocket"></i>
                        Jobpilot
                    </div>
                    <div class="phone-number">
                        <i class="fas fa-phone"></i>
                        310-856-0115
                    </div>
                    <p class="footer-description">Discover tailored opportunities for job seekers and top talent for employers. Connect with the perfect match for your career or hiring needs.</p>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Candidate</h3>
                    <ul>
                        <li><a href="#">Browse Jobs</a></li>
                        <li><a href="#">Browse Candidates</a></li>
                        <li><a href="#">Candidate Dashboard</a></li>
                        <li><a href="#">Saved Jobs</a></li>
                        <li><a href="#">Candidate Plan</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Employer</h3>
                    <ul>
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">Companies Dashboard</a></li>
                        <li><a href="#">Applications</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                © Jobpilot 2023 | All Rights Reserved
            </div>
        </div>
    </footer>

    <script>
        // Add interactivity
        document.querySelectorAll('.apply-btn').forEach(button => {
            button.addEventListener('click', function() {
                const jobTitle = this.closest('.job-card').querySelector('.job-title h3').textContent;
                alert(`Applying for: ${jobTitle}`);
            });
        });

        document.querySelector('.post-job-btn').addEventListener('click', function() {
            alert('Post a Job feature would open here');
        });

        document.querySelector('.search-btn').addEventListener('click', function() {
            const keyword = document.querySelector('.search-input').value;
            const location = document.querySelectorAll('.search-input')[1].value;
            alert(`Searching for jobs with keyword: "${keyword}" in location: "${location}"`);
        });

        document.querySelectorAll('.view-profile-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const companyName = this.closest('.company-card').querySelector('h3').textContent;
                alert(`Viewing profile of: ${companyName}`);
            });
        });

        document.querySelectorAll('.view-all-link, .view-all-btn').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Viewing all items in this section');
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                if(href === '#') return;
                
                alert(`Navigating to: ${href}`);
            });
        });
    </script>
</body>
</html>