@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <!-- Header Section -->
            <div class="page-header">
                <h1 class="page-title">Discover Companies</h1>
                <p class="page-subtitle">Find your next career opportunity with top companies</p>
            </div>

            <!-- Stats Section with Animation -->
            <section class="stats-section">
                <div class="stats-grid">
                    <div class="stat-card animate-on-scroll" data-animation="fade-up">
                        <div class="stat-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-count="200"></div>
                            <div class="stat-label">Live Jobs</div>
                        </div>
                        <div class="stat-wave"></div>
                    </div>
                    
                    <div class="stat-card animate-on-scroll" data-animation="fade-up" data-delay="100">
                        <div class="stat-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-count="1200"></div>
                            <div class="stat-label">Companies</div>
                        </div>
                        <div class="stat-wave"></div>
                    </div>
                    
                    <div class="stat-card animate-on-scroll" data-animation="fade-up" data-delay="200">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-count="15430">15430</div>
                            <div class="stat-label">Candidates</div>
                        </div>
                        <div class="stat-wave"></div>
                    </div>
                </div>
            </section>

            <!-- Search Section -->
            <section class="search-section">
                <div class="search-card animate-on-scroll" data-animation="fade-up">
                    <div class="search-header">
                        <h2><i class="fas fa-search"></i> Find Companies</h2>
                        <p>Search for companies by name, industry, or location</p>
                    </div>
                    <form class="search-form">
                        <div class="form-row">
                            <div class="form-group floating-label">
                                <input type="text" id="company-keyword" placeholder=" " autocomplete="off">
                                <label for="company-keyword">
                                    <i class="fas fa-building"></i> Company Name or Keyword
                                </label>
                                <div class="focus-line"></div>
                            </div>
                            
                            <div class="form-group floating-label">
                                <input type="text" id="location" placeholder=" " autocomplete="off">
                                <label for="location">
                                    <i class="fas fa-map-marker-alt"></i> City, State, or Country
                                </label>
                                <div class="focus-line"></div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="search-btn">
                                    <span class="btn-text">Search Companies</span>
                                    <span class="btn-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                    <div class="btn-shine"></div>
                                </button>
                            </div>
                        </div>
                        
                        <div class="filter-options">
                            <div class="filter-tags">
                                <span class="filter-tag active" data-filter="all">All Industries</span>
                                <span class="filter-tag" data-filter="IT/Development">IT/Development</span>
                                <span class="filter-tag" data-filter="Design">Design</span>
                                <span class="filter-tag" data-filter="Hotel/Restaurant">Hospitality</span>
                                <span class="filter-tag" data-filter="Finance">Finance</span>
                                <span class="filter-tag" data-filter="Healthcare">Healthcare</span>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Companies Section -->
            <section class="companies-section">
                <div class="section-header">
                    <h2 class="section-title">Featured Companies</h2>
                    <div class="section-actions">
                        <div class="view-toggle">
                            <button class="view-btn active" data-view="grid">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="view-btn" data-view="list">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="companies-container grid-view" id="companies-container">
                    <!-- Companies will be loaded here by JavaScript -->
                </div>
            </section>

            <!-- Pagination -->
            <div class="pagination-wrapper">
                <ul class="pagination" id="pagination">
                    <!-- Pagination will be generated by JavaScript -->
                </ul>
            </div>

            <!-- Subscription Section -->
            <section class="subscription-section">
                <div class="subscription-card">
                    <div class="subscription-content">
                        <div class="subscription-icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h2>Stay Ahead in Your Career</h2>
                        <p>Subscribe to our newsletter and get weekly updates on job opportunities, career tips, and industry insights directly in your inbox.</p>
                        
                        <form class="subscription-form" id="subscribe-form">
                            <div class="input-group">
                                <div class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" placeholder="Enter your email address" required>
                                <button type="submit" class="subscribe-btn">
                                    <span>Subscribe</span>
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                            <div class="form-note">
                                <i class="fas fa-shield-alt"></i> We respect your privacy. Unsubscribe at any time.
                            </div>
                        </form>
                    </div>
                    <div class="subscription-illustration">
                        <div class="illustration-circle"></div>
                        <div class="illustration-dots"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #7209b7;
            --accent: #4cc9f0;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --gray-light: #e9ecef;
            --border-radius: 12px;
            --box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            --box-shadow-hover: 0 20px 60px rgba(0, 0, 0, 0.12);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f5f7ff 0%, #f0f2ff 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--dark);
        }

        .dashboard-wrapper {
            max-width: 1200px;
            margin: 80 auto;
            padding: 2rem 1rem;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInDown 0.8s ease-out;
        }

        .page-title {
            font-size: 2.2rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Stats Section */
        .stats-section {
            margin-bottom: 1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .stat-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            display: flex;
            align-items: center;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(67, 97, 238, 0.1);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
            border-color: rgba(67, 97, 238, 0.2);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.6s cubic-bezier(0.65, 0, 0.35, 1);
        }

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-icon {
            width: 25px;
            height: 25px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            flex-shrink: 0;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }

        .stat-content {
            flex: 1;
        }

        .stat-number {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.5rem;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .stat-wave {
            position: absolute;
            bottom: -10px;
            right: -10px;
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, transparent 30%, rgba(67, 97, 238, 0.1) 50%, transparent 70%);
            opacity: 0;
            transition: var(--transition);
        }

        .stat-card:hover .stat-wave {
            opacity: 1;
            transform: rotate(15deg);
        }

        /* Search Section */
        .search-section {
            margin-bottom: 3rem;
        }

        .search-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--box-shadow);
            border: 1px solid rgba(67, 97, 238, 0.1);
            animation: fadeInUp 0.8s ease-out;
        }

        .search-header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .search-header h2 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .search-header p {
            color: var(--gray);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .form-group {
            position: relative;
        }

        .floating-label {
            position: relative;
        }

        .floating-label label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            color: var(--gray);
            transition: var(--transition);
            pointer-events: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .floating-label input {
            width: 100%;
            padding: 1rem;
            padding-left: 3rem;
            border: 2px solid var(--gray-light);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            background: white;
        }

        .floating-label input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
        }

        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label {
            top: 0;
            left: 0.75rem;
            font-size: 0.8rem;
            padding: 0 0.5rem;
            background: white;
            color: var(--primary);
            transform: translateY(-50%);
        }

        .focus-line {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .floating-label input:focus ~ .focus-line {
            width: 100%;
        }

        .search-btn {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
            min-width: 160px;
            height: 52px;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(67, 97, 238, 0.3);
        }

        .search-btn:active {
            transform: translateY(0);
        }

        .btn-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: 0.5s;
        }

        .search-btn:hover .btn-shine {
            left: 100%;
        }

        .filter-options {
            padding-top: 1.5rem;
            border-top: 1px solid var(--gray-light);
        }

        .filter-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .filter-tag {
            padding: 0.5rem 1rem;
            background: var(--gray-light);
            border-radius: 50px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .filter-tag:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        .filter-tag.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary-dark);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.2);
        }

        /* Companies Section */
        .companies-section {
            margin-bottom: 3rem;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            position: relative;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            border-radius: 2px;
        }

        .view-toggle {
            display: flex;
            gap: 0.5rem;
            background: var(--gray-light);
            padding: 0.25rem;
            border-radius: var(--border-radius);
        }

        .view-btn {
            width: 40px;
            height: 40px;
            border: none;
            background: transparent;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: var(--gray);
        }

        .view-btn:hover {
            color: var(--primary);
            background: white;
        }

        .view-btn.active {
            background: white;
            color: var(--primary);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .companies-container {
            transition: var(--transition);
        }

        .grid-view {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
        }

        .list-view {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .company-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            border: 1px solid rgba(67, 97, 238, 0.1);
            animation: fadeIn 0.6s ease-out;
            position: relative;
        }

        .company-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--box-shadow-hover);
        }

        .company-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
        }

        .company-header {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            border-bottom: 1px solid var(--gray-light);
        }

        .company-logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }

        .company-info {
            flex: 1;
        }

        .company-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 0.25rem;
        }

        .company-location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .company-body {
            padding: 1.5rem;
        }

        .company-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .company-industry {
            background: linear-gradient(135deg, var(--accent), #7209b7);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        .job-openings {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--success);
            font-weight: 600;
        }

        .company-description {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .company-footer {
            padding: 0 1.5rem 1.5rem;
        }

        .view-profile {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            padding: 0.75rem;
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            text-align: center;
        }

        .view-profile:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }

        /* List View Styles */
        .list-view .company-card {
            display: flex;
        }

        .list-view .company-header {
            flex: 0 0 200px;
            border-right: 1px solid var(--gray-light);
            border-bottom: none;
            flex-direction: column;
            text-align: center;
            justify-content: center;
        }

        .list-view .company-body {
            flex: 1;
            border-right: 1px solid var(--gray-light);
        }

        .list-view .company-footer {
            flex: 0 0 150px;
            display: flex;
            align-items: center;
            padding: 1.5rem;
        }

        @media (max-width: 768px) {
            .list-view .company-card {
                flex-direction: column;
            }
            
            .list-view .company-header,
            .list-view .company-body,
            .list-view .company-footer {
                border-right: none;
                border-bottom: 1px solid var(--gray-light);
            }
        }

        /* Pagination */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin: 3rem 0;
        }

        .pagination {
            display: flex;
            gap: 0.5rem;
            list-style: none;
        }

        .pagination li {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease-out forwards;
        }

        .pagination li:nth-child(1) { animation-delay: 0.1s; }
        .pagination li:nth-child(2) { animation-delay: 0.2s; }
        .pagination li:nth-child(3) { animation-delay: 0.3s; }
        .pagination li:nth-child(4) { animation-delay: 0.4s; }
        .pagination li:nth-child(5) { animation-delay: 0.5s; }

        .pagination a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: var(--border-radius);
            background: white;
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: 2px solid var(--gray-light);
            position: relative;
            overflow: hidden;
        }

        .pagination a:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
        }

        .pagination .active a {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-color: transparent;
            color: white;
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
        }

        .pagination a.prev-next {
            width: auto;
            padding: 0 1.5rem;
        }

        /* Subscription Section */
        .subscription-section {
            margin: 4rem 0;
        }

        .subscription-card {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: var(--border-radius);
            padding: 3rem;
            display: flex;
            align-items: center;
            gap: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        .subscription-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><path fill="rgba(255,255,255,0.05)" d="M0,0h1000v1000H0V0z M750,750H250V250h500V750z M250,250h500v500H250V250z"/></svg>');
            opacity: 0.1;
        }

        .subscription-content {
            flex: 1;
            position: relative;
            z-index: 1;
        }

        .subscription-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            opacity: 0.8;
        }

        .subscription-content h2 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .subscription-content p {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .input-group {
            display: flex;
            gap: 1rem;
            background: rgba(255, 255, 255, 0.1);
            padding: 0.5rem;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .input-icon {
            display: flex;
            align-items: center;
            padding: 0 1rem;
            color: white;
            opacity: 0.8;
        }

        .input-group input {
            flex: 1;
            background: transparent;
            border: none;
            color: white;
            font-size: 0.8rem;
            padding: 0.75rem 0;
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .input-group input:focus {
            outline: none;
        }

        .subscribe-btn {
            background: white;
            color: var(--primary);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .subscribe-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .form-note {
            margin-top: 1rem;
            font-size: 0.9rem;
            opacity: 0.8;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .subscription-illustration {
            flex: 0 0 300px;
            position: relative;
            z-index: 1;
        }

        .illustration-circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            margin: 0 auto;
            position: relative;
            animation: float 6s ease-in-out infinite;
        }

        .illustration-circle::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
        }

        .illustration-dots {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: radial-gradient(rgba(255, 255, 255, 0.2) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: moveDots 20s linear infinite;
        }

        @media (max-width: 992px) {
            .subscription-card {
                flex-direction: column;
                text-align: center;
            }
            
            .subscription-illustration {
                display: none;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes moveDots {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 30px 30px;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .grid-view {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .subscription-card {
                padding: 2rem;
            }
            
            .subscription-content h2 {
                font-size: 1.8rem;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* No Results */
        .no-results {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--gray);
            grid-column: 1 / -1;
        }

        .no-results i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .no-results h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
    </style>
    <script>

        // Count animation for stats
function animateStats() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    statNumbers.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-count'));
        const current = parseInt(stat.textContent.replace(/,/g, '')) || 0;
        const startTime = Date.now();
        const duration = 2000; // 2 seconds
        
        // If already at target, no animation needed
        if (current === target) return;
        
        function updateCounter() {
            const elapsed = Date.now() - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Use easeOutQuad easing for smooth animation
            const easedProgress = 1 - Math.pow(1 - progress, 3);
            
            const value = Math.floor(current + (target - current) * easedProgress);
            
            // Format number with commas
            stat.textContent = value.toLocaleString();
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                // Ensure final value is exactly the target
                stat.textContent = target.toLocaleString();
            }
        }
        
        requestAnimationFrame(updateCounter);
    });
}

// Animate on scroll
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                if (entry.target.classList.contains('stats-grid')) {
                    // Add a small delay to ensure the animation is visible
                    setTimeout(animateStats, 300);
                }
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    initScrollAnimations();
    
    // Also trigger stats animation when scrolled into view
    const statsSection = document.querySelector('.stats-section');
    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats();
                // Stop observing after animation starts
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    if (statsSection) {
        statsObserver.observe(statsSection);
    }
});
        // Company data
        const companies = [
            {
                id: 1,
                name: "Digital Point",
                location: "Greenland",
                industry: "IT/Development",
                openJobs: 2,
                description: "Leading digital solutions provider specializing in web and mobile applications with cutting-edge technology.",
                logo: "DP"
            },
            {
                id: 2,
                name: "Templatecookie",
                location: "Bangladesh",
                industry: "Design",
                openJobs: 1,
                description: "Creative agency focused on website templates and UI/UX design. We create beautiful digital experiences.",
                logo: "TC"
            },
            {
                id: 3,
                name: "Nextware",
                location: "Australia",
                industry: "Hotel/Restaurant",
                openJobs: 1,
                description: "Innovative tech solutions for the hospitality industry. Revolutionizing guest experiences.",
                logo: "NW"
            },
            {
                id: 4,
                name: "TechVantage",
                location: "United States",
                industry: "IT/Development",
                openJobs: 5,
                description: "Enterprise software development and consulting services for Fortune 500 companies.",
                logo: "TV"
            },
            {
                id: 5,
                name: "GreenEnergy Corp",
                location: "Germany",
                industry: "Energy",
                openJobs: 3,
                description: "Renewable energy solutions and sustainable technology for a greener tomorrow.",
                logo: "GE"
            },
            {
                id: 6,
                name: "HealthFirst",
                location: "Canada",
                industry: "Healthcare",
                openJobs: 4,
                description: "Digital health solutions and medical technology innovations improving patient care.",
                logo: "HF"
            },
            {
                id: 7,
                name: "EduTech Solutions",
                location: "United Kingdom",
                industry: "Education",
                openJobs: 2,
                description: "Online learning platforms and educational technology transforming education globally.",
                logo: "ET"
            },
            {
                id: 8,
                name: "FinancePlus",
                location: "Singapore",
                industry: "Finance",
                openJobs: 3,
                description: "Fintech solutions for modern banking and financial services. Secure, fast, reliable.",
                logo: "FP"
            },
            {
                id: 9,
                name: "RetailLogic",
                location: "Netherlands",
                industry: "Retail",
                openJobs: 2,
                description: "E-commerce solutions and retail management systems for the digital age.",
                logo: "RL"
            }
        ];

        // Pagination variables
        const companiesPerPage = 6;
        let currentPage = 1;
        let currentView = 'grid';
        let currentFilter = 'all';

        // DOM Elements
        const companiesContainer = document.getElementById('companies-container');
        const paginationContainer = document.getElementById('pagination');
        const searchForm = document.querySelector('.search-form');
        const subscribeForm = document.getElementById('subscribe-form');
        const viewButtons = document.querySelectorAll('.view-btn');
        const filterTags = document.querySelectorAll('.filter-tag');

        // Display companies for the current page
        function displayCompanies(page, filteredCompanies = null) {
            companiesContainer.innerHTML = '';
            
            const allCompanies = filteredCompanies || companies.filter(company => {
                if (currentFilter === 'all') return true;
                return company.industry === currentFilter;
            });
            
            const startIndex = (page - 1) * companiesPerPage;
            const endIndex = startIndex + companiesPerPage;
            const companiesToShow = allCompanies.slice(startIndex, endIndex);
            
            if (companiesToShow.length === 0) {
                companiesContainer.innerHTML = `
                    <div class="no-results">
                        <i class="fas fa-search"></i>
                        <h3>No companies found</h3>
                        <p>Try adjusting your search or filter criteria</p>
                    </div>
                `;
                return;
            }
            
            companiesToShow.forEach((company, index) => {
                const companyCard = document.createElement('div');
                companyCard.className = 'company-card';
                companyCard.style.animationDelay = `${index * 0.1}s`;
                
                const logoColor = getLogoColor(company.id);
                
                companyCard.innerHTML = `
                    <div class="company-header">
                        <div class="company-logo" style="background: ${logoColor}">
                            ${company.logo}
                        </div>
                        <div class="company-info">
                            <h3 class="company-name">${company.name}</h3>
                            <div class="company-location">
                                <i class="fas fa-map-marker-alt"></i> ${company.location}
                            </div>
                        </div>
                    </div>
                    <div class="company-body">
                        <div class="company-meta">
                            <span class="company-industry">${company.industry}</span>
                            <div class="job-openings">
                                <i class="fas fa-briefcase"></i>
                                ${company.openJobs} Open Job${company.openJobs > 1 ? 's' : ''}
                            </div>
                        </div>
                        <p class="company-description">${company.description}</p>
                    </div>
                    <div class="company-footer">
                        <button class="view-profile" data-company="${company.id}">
                            <span>View Profile</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                `;
                
                companiesContainer.appendChild(companyCard);
            });
            
            // Animate company cards
            setTimeout(() => {
                document.querySelectorAll('.company-card').forEach(card => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }, 100);
        }

        // Generate pagination links
        function generatePagination(totalCompanies = companies.length) {
            paginationContainer.innerHTML = '';
            const totalPages = Math.ceil(totalCompanies / companiesPerPage);
            
            if (totalPages <= 1) return;
            
            // Previous button
            if (currentPage > 1) {
                const prevLi = document.createElement('li');
                prevLi.innerHTML = `
                    <a href="#" class="prev-next" data-page="${currentPage - 1}">
                        <i class="fas fa-chevron-left"></i> Previous
                    </a>
                `;
                paginationContainer.appendChild(prevLi);
            }
            
            // Page numbers
            const startPage = Math.max(1, currentPage - 2);
            const endPage = Math.min(totalPages, currentPage + 2);
            
            for (let i = startPage; i <= endPage; i++) {
                const pageLi = document.createElement('li');
                if (i === currentPage) {
                    pageLi.className = 'active';
                }
                
                pageLi.innerHTML = `<a href="#" data-page="${i}">${i}</a>`;
                paginationContainer.appendChild(pageLi);
            }
            
            // Next button
            if (currentPage < totalPages) {
                const nextLi = document.createElement('li');
                nextLi.innerHTML = `
                    <a href="#" class="prev-next" data-page="${currentPage + 1}">
                        Next <i class="fas fa-chevron-right"></i>
                    </a>
                `;
                paginationContainer.appendChild(nextLi);
            }
            
            // Add event listeners to pagination links
            const pageLinks = paginationContainer.querySelectorAll('a');
            pageLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const page = parseInt(e.currentTarget.getAttribute('data-page'));
                    if (page) {
                        currentPage = page;
                        displayCompanies(currentPage);
                        generatePagination();
                        window.scrollTo({ top: companiesContainer.offsetTop - 100, behavior: 'smooth' });
                    }
                });
            });
        }

        // Handle search form submission
        searchForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const keyword = document.getElementById('company-keyword').value.toLowerCase();
            const location = document.getElementById('location').value.toLowerCase();
            
            // Show loading animation
            const searchBtn = searchForm.querySelector('.search-btn');
            const originalText = searchBtn.innerHTML;
            searchBtn.innerHTML = '<span class="loading"></span>';
            
            // Simulate API delay
            setTimeout(() => {
                // Filter companies based on search criteria
                const filteredCompanies = companies.filter(company => {
                    const matchesKeyword = keyword === '' || 
                        company.name.toLowerCase().includes(keyword) || 
                        company.industry.toLowerCase().includes(keyword) ||
                        company.description.toLowerCase().includes(keyword);
                    
                    const matchesLocation = location === '' || 
                        company.location.toLowerCase().includes(location);
                    
                    return matchesKeyword && matchesLocation;
                });
                
                currentPage = 1;
                displayCompanies(currentPage, filteredCompanies);
                generatePagination(filteredCompanies.length);
                
                // Restore button text
                searchBtn.innerHTML = originalText;
                
                // Scroll to results
                companiesContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 800);
        });

        // Handle view toggle
        viewButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                viewButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                currentView = btn.getAttribute('data-view');
                companiesContainer.className = `companies-container ${currentView}-view`;
            });
        });

        // Handle filter tags
        filterTags.forEach(tag => {
            tag.addEventListener('click', () => {
                filterTags.forEach(t => t.classList.remove('active'));
                tag.classList.add('active');
                currentFilter = tag.getAttribute('data-filter');
                currentPage = 1;
                displayCompanies(currentPage);
                generatePagination();
            });
        });

        // Handle subscription form submission
        subscribeForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const emailInput = subscribeForm.querySelector('input[type="email"]');
            const submitBtn = subscribeForm.querySelector('.subscribe-btn');
            const email = emailInput.value;
            
            if (email) {
                // Show loading state
                const originalContent = submitBtn.innerHTML;
                submitBtn.innerHTML = '<span class="loading"></span>';
                
                // Simulate API call
                setTimeout(() => {
                    // Show success message
                    submitBtn.innerHTML = '<i class="fas fa-check"></i> Subscribed!';
                    submitBtn.style.background = 'var(--success)';
                    
                    // Create success notification
                    const notification = document.createElement('div');
                    notification.style.cssText = `
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        background: var(--success);
                        color: white;
                        padding: 1rem 2rem;
                        border-radius: var(--border-radius);
                        box-shadow: var(--box-shadow);
                        z-index: 1000;
                        animation: fadeInUp 0.3s ease-out;
                        display: flex;
                        align-items: center;
                        gap: 0.5rem;
                    `;
                    notification.innerHTML = `
                        <i class="fas fa-check-circle"></i>
                        <span>Thank you for subscribing! Check your email for confirmation.</span>
                    `;
                    document.body.appendChild(notification);
                    
                    // Remove notification after 5 seconds
                    setTimeout(() => {
                        notification.style.animation = 'fadeInUp 0.3s ease-out reverse';
                        setTimeout(() => notification.remove(), 300);
                    }, 5000);
                    
                    // Reset form
                    emailInput.value = '';
                    
                    // Reset button after 2 seconds
                    setTimeout(() => {
                        submitBtn.innerHTML = originalContent;
                        submitBtn.style.background = '';
                    }, 2000);
                }, 1500);
            }
        });

        // Animate stats counter
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-count'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;
                
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current).toLocaleString();
                }, 16);
            });
        }

        // Animate on scroll
        function initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                        if (entry.target.classList.contains('stats-grid')) {
                            animateStats();
                        }
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });
        }

        // Get logo color based on company ID
        function getLogoColor(id) {
            const colors = [
                'linear-gradient(135deg, #4361ee, #7209b7)',
                'linear-gradient(135deg, #2ecc71, #27ae60)',
                'linear-gradient(135deg, #e74c3c, #c0392b)',
                'linear-gradient(135deg, #f39c12, #e67e22)',
                'linear-gradient(135deg, #9b59b6, #8e44ad)',
                'linear-gradient(135deg, #1abc9c, #16a085)',
                'linear-gradient(135deg, #3498db, #2980b9)',
                'linear-gradient(135deg, #e74c3c, #d35400)',
                'linear-gradient(135deg, #2c3e50, #34495e)'
            ];
            return colors[(id - 1) % colors.length];
        }

        // Handle view profile button click
        document.addEventListener('click', (e) => {
            if (e.target.closest('.view-profile')) {
                const companyId = e.target.closest('.view-profile').getAttribute('data-company');
                const company = companies.find(c => c.id == companyId);
                
                // Create modal
                const modal = document.createElement('div');
                modal.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: rgba(0, 0, 0, 0.8);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 1000;
                    padding: 1rem;
                    animation: fadeIn 0.3s ease-out;
                    backdrop-filter: blur(5px);
                `;
                
                modal.innerHTML = `
                    <div style="
                        background: white;
                        border-radius: var(--border-radius);
                        max-width: 500px;
                        width: 100%;
                        animation: fadeInUp 0.4s ease-out;
                        overflow: hidden;
                        box-shadow: var(--box-shadow-hover);
                    ">
                        <div style="
                            background: ${getLogoColor(companyId)};
                            padding: 2rem;
                            color: white;
                            text-align: center;
                        ">
                            <div style="
                                width: 80px;
                                height: 80px;
                                background: rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 2rem;
                                font-weight: 700;
                                margin: 0 auto 1rem;
                            ">
                                ${company.logo}
                            </div>
                            <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">${company.name}</h3>
                            <p>${company.location}</p>
                        </div>
                        <div style="padding: 2rem;">
                            <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
                                <span style="
                                    background: var(--gray-light);
                                    padding: 0.5rem 1rem;
                                    border-radius: 50px;
                                    font-size: 0.9rem;
                                    font-weight: 600;
                                ">
                                    ${company.industry}
                                </span>
                                <span style="
                                    background: #2ecc71;
                                    color: white;
                                    padding: 0.5rem 1rem;
                                    border-radius: 50px;
                                    font-size: 0.9rem;
                                    font-weight: 600;
                                ">
                                    ${company.openJobs} Open Position${company.openJobs > 1 ? 's' : ''}
                                </span>
                            </div>
                            <p style="margin-bottom: 2rem; line-height: 1.6; color: var(--gray);">
                                ${company.description}
                            </p>
                            <div style="display: flex; gap: 1rem;">
                                <button style="
                                    flex: 1;
                                    padding: 0.75rem;
                                    background: var(--primary);
                                    color: white;
                                    border: none;
                                    border-radius: var(--border-radius);
                                    font-weight: 600;
                                    cursor: pointer;
                                    transition: var(--transition);
                                " onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                                    View All Jobs
                                </button>
                                <button style="
                                    flex: 1;
                                    padding: 0.75rem;
                                    background: transparent;
                                    color: var(--primary);
                                    border: 2px solid var(--primary);
                                    border-radius: var(--border-radius);
                                    font-weight: 600;
                                    cursor: pointer;
                                    transition: var(--transition);
                                " onmouseover="this.style.background='var(--primary)'; this.style.color='white'" onmouseout="this.style.background='transparent'; this.style.color='var(--primary)'" onclick="this.closest('[style*=\"position: fixed\"]').remove()">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.remove();
                    }
                });
                
                document.body.appendChild(modal);
            }
        });

        // Initialize the page
        function init() {
            displayCompanies(currentPage);
            generatePagination();
            initScrollAnimations();
            
            // Add floating animation to stats
            setInterval(() => {
                document.querySelectorAll('.stat-card').forEach(card => {
                    card.style.transform = `translateY(${Math.sin(Date.now() / 2000) * 3}px)`;
                });
            }, 50);
        }

        // Initialize the application
        document.addEventListener('DOMContentLoaded', init);
    </script>
@endsection