
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Company Dashboard</title>
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
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background: white;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .logo {
            padding: 25px 20px;
            font-size: 26px;
            font-weight: 700;
            color: var(--primary);
            border-bottom: 1px solid var(--light-gray);
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--secondary);
        }

        .nav-section {
            padding: 25px 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .nav-title {
            font-size: 12px;
            font-weight: 600;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 0 20px 10px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 14px 20px;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
            position: relative;
        }

        .nav-link:hover, .nav-link.active {
            background-color: rgba(58, 134, 255, 0.08);
            color: var(--primary);
            border-left: 4px solid var(--primary);
        }

        .nav-link i {
            width: 24px;
            margin-right: 12px;
            font-size: 18px;
        }

        .badge {
            background-color: var(--primary);
            color: white;
            font-size: 12px;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 20px;
            margin-left: auto;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 260px;
            padding: 20px;
        }

        /* Top Bar */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 15px 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 25px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background-color: var(--light);
            border-radius: 30px;
            padding: 10px 20px;
            width: 350px;
        }

        .search-box i {
            color: var(--gray);
            margin-right: 10px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            font-size: 15px;
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-menu select {
            border: none;
            background: transparent;
            font-weight: 500;
            cursor: pointer;
            outline: none;
        }

        /* Welcome Section */
        .welcome-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 25px;
            border-radius: var(--border-radius);
            margin-bottom: 25px;
            box-shadow: var(--shadow);
        }

        .welcome-section h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .welcome-section p {
            opacity: 0.9;
            font-size: 16px;
        }

        /* Dashboard Content */
        .dashboard-content {
            display: none;
        }

        .dashboard-content.active {
            display: block;
        }

        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 24px;
        }

        .stat-icon.jobs {
            background-color: rgba(58, 134, 255, 0.1);
            color: var(--primary);
        }

        .stat-icon.candidates {
            background-color: rgba(6, 214, 160, 0.1);
            color: var(--success);
        }

        .stat-icon.pending {
            background-color: rgba(255, 209, 102, 0.1);
            color: #e6b400;
        }

        .stat-icon.featured {
            background-color: rgba(131, 56, 236, 0.1);
            color: var(--secondary);
        }

        .stat-info h3 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .stat-info p {
            color: var(--gray);
            font-size: 15px;
        }

        /* Pricing Plan Section */
        .pricing-plan {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 25px;
            margin-bottom: 30px;
        }

        .pricing-plan h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .plan-features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .plan-feature {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
        }

        .plan-feature .count {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .plan-feature .label {
            font-size: 14px;
            color: var(--gray);
        }

        .upgrade-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
        }

        .upgrade-btn:hover {
            background-color: #2a75ff;
        }

        /* Jobs Table */
        .jobs-table-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 25px;
            margin-bottom: 30px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .section-header h2 {
            font-size: 22px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: var(--light);
        }

        th {
            text-align: left;
            padding: 15px;
            font-weight: 600;
            color: var(--gray);
            border-bottom: 2px solid var(--light-gray);
        }

        td {
            padding: 15px;
            border-bottom: 1px solid var(--light-gray);
        }

        .job-title {
            font-weight: 600;
            color: var(--dark);
        }

        .job-type {
            background-color: rgba(58, 134, 255, 0.1);
            color: var(--primary);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .status.active {
            background-color: rgba(6, 214, 160, 0.15);
            color: var(--success);
        }

        .status.expired {
            background-color: rgba(239, 71, 111, 0.15);
            color: var(--danger);
        }

        .applications-count {
            font-weight: 600;
            color: var(--dark);
        }

        .action-btn-table {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .action-btn-table:hover {
            background-color: #2a75ff;
        }

        /* Post Job Content */
        .post-job-content {
            display: none;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
            margin-bottom: 30px;
        }

        .post-job-content.active {
            display: block;
        }

        .post-job-header {
            margin-bottom: 30px;
        }

        .post-job-header h1 {
            font-size: 32px;
            color: var(--dark);
            margin-bottom: 10px;
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--light-gray);
        }

        .form-section:last-child {
            border-bottom: none;
        }

        .form-section h2 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .form-section h3 {
            font-size: 18px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-group label.required::after {
            content: " *";
            color: var(--danger);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        .form-control.error {
            border-color: var(--danger);
        }

        .error-message {
            color: var(--danger);
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        /* Salary Options */
        .salary-options {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .salary-option {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .salary-option input[type="radio"] {
            width: 18px;
            height: 18px;
        }

        .salary-inputs {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .salary-input {
            flex: 1;
        }

        /* Tags Input */
        .tags-input {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 10px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            min-height: 50px;
            align-items: center;
        }

        .tag {
            background-color: rgba(58, 134, 255, 0.1);
            color: var(--primary);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .tag-remove {
            background: none;
            border: none;
            color: var(--primary);
            cursor: pointer;
            font-size: 16px;
        }

        .tags-input input {
            flex: 1;
            min-width: 150px;
            border: none;
            outline: none;
            padding: 5px;
            font-size: 16px;
        }

        /* Checkboxes and Radio */
        .checkbox-group, .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 10px;
        }

        .checkbox-item, .radio-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .benefit-item {
            padding: 12px;
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            border: 1px solid var(--light-gray);
            cursor: pointer;
            transition: var(--transition);
        }

        .benefit-item:hover {
            background-color: rgba(58, 134, 255, 0.1);
            border-color: var(--primary);
        }

        .benefit-item.selected {
            background-color: rgba(58, 134, 255, 0.1);
            border-color: var(--primary);
            color: var(--primary);
        }

        /* Map Placeholder */
        .map-placeholder {
            height: 200px;
            background-color: #f8f9fa;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            margin-top: 15px;
        }

        /* Screening Questions */
        .screening-section {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: var(--border-radius);
            margin-top: 20px;
        }

        .screening-options {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .screening-option {
            flex: 1;
        }

        .add-question-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-question-btn:hover {
            background-color: #2a75ff;
        }

        .selected-questions {
            margin-top: 20px;
            padding: 15px;
            background-color: white;
            border-radius: var(--border-radius);
            border: 1px solid var(--light-gray);
        }

        /* Apply Options */
        .apply-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .apply-option {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: var(--border-radius);
            border: 2px solid var(--light-gray);
            cursor: pointer;
            transition: var(--transition);
        }

        .apply-option:hover {
            border-color: var(--primary);
        }

        .apply-option.selected {
            border-color: var(--primary);
            background-color: rgba(58, 134, 255, 0.05);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid var(--light-gray);
        }

        .post-job-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .post-job-btn:hover {
            background-color: #2a75ff;
        }

        .cancel-btn {
            background-color: var(--light-gray);
            color: var(--dark);
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .cancel-btn:hover {
            background-color: #dee2e6;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            color: var(--gray);
            font-size: 14px;
            border-top: 1px solid var(--light-gray);
            margin-top: 30px;
        }

        /* Chat Button */
        .chat-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 5px 15px rgba(58, 134, 255, 0.4);
            cursor: pointer;
            z-index: 100;
            transition: var(--transition);
        }

        .chat-button:hover {
            background-color: #2a75ff;
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .sidebar {
                width: 80px;
            }
            
            .sidebar .nav-link span, 
            .sidebar .nav-title,
            .sidebar .badge {
                display: none;
            }
            
            .main-content {
                margin-left: 80px;
            }
            
            .logo span {
                display: none;
            }
            
            .logo {
                justify-content: center;
            }
            
            .logo i {
                margin-right: 0;
            }
        }

        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .top-bar {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .search-box {
                width: 100%;
            }
            
            .top-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .salary-inputs {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .main-content {
                padding: 15px;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
            
            .plan-features {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .apply-options {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <i class="fas fa-briefcase"></i>
            <span>Jobpilot</span>
        </div>
        
        <div class="nav-section">
            <div class="nav-title">Main</div>
            <a href="#" class="nav-link active" data-page="dashboard">
                <i class="fas fa-chart-pie"></i>
                <span>Overview</span>
            </a>
            <a href="#" class="nav-link" data-page="profile">
                <i class="fas fa-user"></i>
                <span>My Profile</span>
            </a>
            <a href="#" class="nav-link" data-page="jobs">
                <i class="fas fa-briefcase"></i>
                <span>My Jobs</span>
                <span class="badge">97</span>
            </a>
            <a href="#" class="nav-link" data-page="post-job">
                <i class="fas fa-plus-circle"></i>
                <span>Post a Job</span>
            </a>
            <a href="#" class="nav-link" data-page="candidates">
                <i class="fas fa-user-friends"></i>
                <span>Saved Candidates</span>
                <span class="badge">5</span>
            </a>
            <a href="#" class="nav-link" data-page="questions">
                <i class="fas fa-question-circle"></i>
                <span>Custom Questions</span>
            </a>
            <a href="#" class="nav-link" data-page="billing">
                <i class="fas fa-credit-card"></i>
                <span>Plans & Billing</span>
            </a>
        </div>
        
        <div class="nav-section">
            <div class="nav-title">Account</div>
            <a href="#" class="nav-link" data-page="messenger">
                <i class="fas fa-comments"></i>
                <span>Messenger</span>
            </a>
            <a href="#" class="nav-link" data-page="verify">
                <i class="fas fa-shield-alt"></i>
                <span>Verify account</span>
            </a>
            <a href="#" class="nav-link" data-page="settings">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
            <a href="#" class="nav-link" data-page="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Log Out</span>
            </a>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Job Title, Keyword">
            </div>
            
            <div class="top-actions">
                <div class="user-menu">
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
        </div>
        
        <!-- Dashboard Content -->
        <div id="dashboard-content" class="dashboard-content active">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h1>Hello, Templatecookie</h1>
                <p>Here are your daily activities & career opportunities</p>
            </div>
            
            <!-- Stats Cards -->
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon jobs">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="stat-info">
                        <h3>97</h3>
                        <p>Open Job</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon candidates">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div class="stat-info">
                        <h3>5</h3>
                        <p>Saved Candidates</p>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon pending">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-info">
                        <h3>1</h3>
                        <p>Pending Jobs</p>
                    </div>
                </div>
            </div>
            
            <!-- Pricing Plan Section -->
            <div class="pricing-plan">
                <h3>Pricing Plan - Feature Remaining</h3>
                <div class="plan-features">
                    <div class="plan-feature">
                        <div class="count">18</div>
                        <div class="label">Active Jobs</div>
                    </div>
                    <div class="plan-feature">
                        <div class="count">1</div>
                        <div class="label">Highlight Jobs</div>
                    </div>
                    <div class="plan-feature">
                        <div class="count">9</div>
                        <div class="label">Featured Jobs</div>
                    </div>
                    <div class="plan-feature">
                        <div class="count">23</div>
                        <div class="label">Profile View</div>
                    </div>
                </div>
                <button class="upgrade-btn">Upgrade Plan</button>
            </div>
            
            <!-- Recent Jobs Table -->
            <div class="jobs-table-container">
                <div class="section-header">
                    <h2>Recent Jobs</h2>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>Job</th>
                            <th>Status</th>
                            <th>Applications</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="job-title">Software Engineer</div>
                                <div class="job-type">Full Time • 2w 5d Remaining</div>
                            </td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <span class="applications-count">Applications</span>
                            </td>
                            <td>
                                <button class="action-btn-table">View Applications</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="job-title">Software Engineer</div>
                                <div class="job-type">Full Time • 2w 5d Remaining</div>
                            </td>
                            <td>
                                <span class="status active">Active</span>
                            </td>
                            <td>
                                <span class="applications-count">Applications</span>
                            </td>
                            <td>
                                <button class="action-btn-table">View Applications</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="job-title">React Developer</div>
                                <div class="job-type">Full Time • 1w 3d Remaining</div>
                            </td>
                            <td>
                                <span class="status expired">Job Expire</span>
                            </td>
                            <td>
                                <span class="applications-count">Applications</span>
                            </td>
                            <td>
                                <button class="action-btn-table">View Applications</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Post Job Content -->
        <div id="post-job-content" class="post-job-content">
            <div class="post-job-header">
                <h1>Post a Job</h1>
            </div>
            
            <form id="post-job-form">
                <!-- Job Title Section -->
                <div class="form-section">
                    <h2>Jobpilot</h2>
                    <div class="form-group">
                        <label class="required">Job Title *</label>
                        <input type="text" class="form-control" placeholder="Job Title" required>
                        <span class="error-message">The title field is required.</span>
                    </div>
                    
                    <div class="form-group">
                        <label>Tags (Search or write tag and hit enter)</label>
                        <div class="tags-input">
                            <input type="text" placeholder="Add tags...">
                        </div>
                    </div>
                </div>
                
                <!-- Profession & Category Section -->
                <div class="form-section">
                    <h3>Profession *</h3>
                    <div class="form-group">
                        <select class="form-control" required>
                            <option value="">Select Profession</option>
                            <option value="design">Design/Creative</option>
                            <option value="it">IT & Telecommunication</option>
                            <option value="medical">Medical/Pharma</option>
                            <option value="engineering">Engineer/Architects</option>
                        </select>
                        <span class="error-message">The profession id field is required.</span>
                    </div>
                    
                    <h3>Job Category *</h3>
                    <div class="form-group">
                        <select class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="administrator">Administrator</option>
                            <option value="executive">Executive</option>
                            <option value="team-leader">Team Leader</option>
                            <option value="director">Director</option>
                            <option value="manager">Manager</option>
                        </select>
                    </div>
                    
                    <h3>Job Role *</h3>
                    <div class="form-group">
                        <select class="form-control" required>
                            <option value="">Select Role</option>
                            <option value="administrator">Administrator</option>
                            <option value="manager">Manager</option>
                            <option value="executive">Executive</option>
                        </select>
                    </div>
                </div>
                
                <!-- Salary Section -->
                <div class="form-section">
                    <h2>Salary</h2>
                    <div class="salary-options">
                        <div class="salary-option">
                            <input type="radio" name="salary-type" id="salary-range" checked>
                            <label for="salary-range">Salary Range</label>
                        </div>
                        <div class="salary-option">
                            <input type="radio" name="salary-type" id="custom-salary">
                            <label for="custom-salary">Custom Salary</label>
                        </div>
                    </div>
                    
                    <h3>Minimum Salary</h3>
                    <div class="form-group">
                        <input type="number" class="form-control" value="50.00" step="0.01">
                        <span class="salary-suffix">$</span>
                    </div>
                    
                    <h3>Salary Type *</h3>
                    <div class="form-group">
                        <select class="form-control" required>
                            <option value="monthly" selected>Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="hourly">Hourly</option>
                            <option value="project">Project Basis</option>
                        </select>
                    </div>
                </div>
                
                <!-- Advance Information Section -->
                <div class="form-section">
                    <h2>Advance Information</h2>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="required">Education *</label>
                            <select class="form-control" required>
                                <option value="high-school" selected>High School</option>
                                <option value="diploma">Diploma</option>
                                <option value="bachelor">Bachelor's Degree</option>
                                <option value="master">Master's Degree</option>
                                <option value="phd">PhD</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="required">Experience *</label>
                            <select class="form-control" required>
                                <option value="fresher" selected>Fresher</option>
                                <option value="1-2">1-2 Years</option>
                                <option value="3-5">3-5 Years</option>
                                <option value="5+">5+ Years</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="required">Job Type *</label>
                            <select class="form-control" required>
                                <option value="full-time" selected>Full Time</option>
                                <option value="part-time">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="internship">Internship</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="required">Total Vacancies *</label>
                            <input type="number" class="form-control" value="1" min="1" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="required">Deadline Expired *</label>
                            <input type="date" class="form-control" required>
                            <span class="error-message">The deadline field is required. Maximum deadline limit: 30 Days</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Job Period</label>
                        <input type="text" class="form-control" placeholder="Job Period">
                    </div>
                </div>
                
                <!-- Location Section -->
                <div class="form-section">
                    <h2>Location * (Click to add a pointer)</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter city name">
                    </div>
                    
                    <div class="checkbox-item">
                        <input type="checkbox" id="remote-position">
                        <label for="remote-position">Fully Remote Position-Worldwide</label>
                    </div>
                    
                    <div class="map-placeholder">
                        <div style="text-align: center;">
                            <i class="fas fa-map-marker-alt" style="font-size: 48px; margin-bottom: 15px; color: #ccc;"></i>
                            <p>Map would appear here</p>
                            <small style="color: #999;">Country: Country is not selected</small><br>
                            <small style="color: #999;">Full Address: District is not selected, Division is not selected</small>
                        </div>
                    </div>
                </div>
                
                <!-- Benefits Section -->
                <div class="form-section">
                    <h2>Benefits</h2>
                    <div class="benefits-grid">
                        <div class="benefit-item">4 day workweek</div>
                        <div class="benefit-item">Async</div>
                        <div class="benefit-item">Company retreats</div>
                        <div class="benefit-item">Coworking budget</div>
                        <div class="benefit-item">Distribution team</div>
                        <div class="benefit-item">Equity compensation</div>
                        <div class="benefit-item">Free gym membership</div>
                        <div class="benefit-item">Home office budget</div>
                        <div class="benefit-item">Learning budget</div>
                        <div class="benefit-item">No policies at work</div>
                        <div class="benefit-item">Paid time off</div>
                        <div class="benefit-item">Pay in crypto</div>
                        <div class="benefit-item">Profit sharing</div>
                        <div class="benefit-item">Unlimited vacation</div>
                        <div class="benefit-item">Vision insurance</div>
                        <div class="benefit-item">Vibe Coder</div>
                    </div>
                    
                    <button type="button" class="add-question-btn" style="margin-top: 15px;">
                        <i class="fas fa-plus"></i> Create New Benefit
                    </button>
                </div>
                
                <!-- Skills Section -->
                <div class="form-section">
                    <h2>Skills</h2>
                    <div class="form-group">
                        <div class="tags-input">
                            <input type="text" placeholder="Add skills...">
                        </div>
                    </div>
                </div>
                
                <!-- Job Description Section -->
                <div class="form-section">
                    <h2>Job Description *</h2>
                    <div class="form-group">
                        <textarea class="form-control" rows="8" placeholder="Paragraph" required></textarea>
                        <span class="error-message">The description field is required.</span>
                    </div>
                </div>
                
                <!-- Screening Questions Section -->
                <div class="form-section">
                    <h2>Add Screening Questions</h2>
                    
                    <div class="screening-options">
                        <div class="screening-option">
                            <h3>Create new screening question</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter question">
                            </div>
                        </div>
                        
                        <div class="screening-option">
                            <h3>Choose from existing question</h3>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="">Select existing question</option>
                                    <option value="experience">What is your experience level?</option>
                                    <option value="salary">What are your salary expectations?</option>
                                    <option value="availability">When can you start?</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <button type="button" class="add-question-btn">
                        <i class="fas fa-plus"></i> Add Question
                    </button>
                    
                    <div class="checkbox-item" style="margin-top: 20px;">
                        <input type="checkbox" id="save-for-later">
                        <label for="save-for-later">Save for later</label>
                    </div>
                    
                    <div class="checkbox-item">
                        <input type="checkbox" id="required-question">
                        <label for="required-question">Required (Candidate must answer)</label>
                    </div>
                    
                    <button type="button" class="add-question-btn" style="margin-top: 15px;">
                        <i class="fas fa-save"></i> Save
                    </button>
                    
                    <div class="selected-questions">
                        <h3>Selected Screening Questions</h3>
                        <p>No questions selected yet</p>
                    </div>
                </div>
                
                <!-- Apply for Job Section -->
                <div class="form-section">
                    <h2>Apply for Job On:</h2>
                    
                    <div class="apply-options">
                        <div class="apply-option selected">
                            <h3>On Jobpilot</h3>
                            <p>Candidate will apply for a job using Jobpilot & All applications will show on your dashboard.</p>
                        </div>
                        
                        <div class="apply-option">
                            <h3>External Platform</h3>
                            <p>Candidate apply for a job on your website, all applications on your own website.</p>
                        </div>
                        
                        <div class="apply-option">
                            <h3>On Your Email</h3>
                            <p>Candidate apply for a job on your email address and all application in your email...</p>
                        </div>
                    </div>
                </div>
                
                <!-- Form Actions -->
                <div class="form-actions">
                    <button type="button" class="cancel-btn">Cancel</button>
                    <button type="submit" class="post-job-btn">Post Job →</button>
                </div>
            </form>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>© 2023 Jobpilot. All rights reserved. | <a href="#" style="color: var(--primary); text-decoration: none;">Privacy Policy</a> • <a href="#" style="color: var(--primary); text-decoration: none;">Terms of Service</a></p>
        </div>
    </div>
    
    <!-- Chat Button -->
    <div class="chat-button">
        <i class="fas fa-comment"></i>
    </div>

    <script>
        // Navigation between dashboard and post job
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Update active state in sidebar
                document.querySelectorAll('.nav-link').forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
                
                // Get the page to show
                const page = this.getAttribute('data-page');
                
                // Hide all content sections
                document.querySelectorAll('.dashboard-content, .post-job-content').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show the selected page
                if (page === 'post-job') {
                    document.getElementById('post-job-content').classList.add('active');
                } else {
                    document.getElementById('dashboard-content').classList.add('active');
                }
            });
        });
        
        // Post Job Form Submission
        document.getElementById('post-job-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Job posted successfully!');
        });
        
        // Cancel button
        document.querySelector('.cancel-btn').addEventListener('click', function() {
            if (confirm('Are you sure you want to cancel? All unsaved changes will be lost.')) {
                document.querySelector('.nav-link[data-page="dashboard"]').click();
            }
        });
        
        // Benefit selection
        document.querySelectorAll('.benefit-item').forEach(item => {
            item.addEventListener('click', function() {
                this.classList.toggle('selected');
            });
        });
        
        // Apply option selection
        document.querySelectorAll('.apply-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.apply-option').forEach(item => {
                    item.classList.remove('selected');
                });
                this.classList.add('selected');
            });
        });
        
        // Add tag functionality
        document.querySelectorAll('.tags-input input').forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && this.value.trim() !== '') {
                    e.preventDefault();
                    const tag = document.createElement('div');
                    tag.className = 'tag';
                    tag.innerHTML = `
                        ${this.value.trim()}
                        <button type="button" class="tag-remove">&times;</button>
                    `;
                    
                    this.parentElement.insertBefore(tag, this);
                    this.value = '';
                    
                    // Add remove functionality
                    tag.querySelector('.tag-remove').addEventListener('click', function() {
                        tag.remove();
                    });
                }
            });
        });
        
        // Add question button
        document.querySelectorAll('.add-question-btn').forEach(button => {
            button.addEventListener('click', function() {
                if (this.textContent.includes('Add Question')) {
                    alert('New question added!');
                } else if (this.textContent.includes('Create New Benefit')) {
                    const benefitName = prompt('Enter new benefit name:');
                    if (benefitName) {
                        const benefitGrid = document.querySelector('.benefits-grid');
                        const newBenefit = document.createElement('div');
                        newBenefit.className = 'benefit-item';
                        newBenefit.textContent = benefitName;
                        newBenefit.addEventListener('click', function() {
                            this.classList.toggle('selected');
                        });
                        benefitGrid.appendChild(newBenefit);
                    }
                } else if (this.textContent.includes('Save')) {
                    alert('Question saved!');
                }
            });
        });
        
        // Table action buttons
        document.querySelectorAll('.action-btn-table').forEach(button => {
            button.addEventListener('click', function() {
                alert('Viewing applications for this job');
            });
        });
        
        // Upgrade plan button
        document.querySelector('.upgrade-btn').addEventListener('click', function() {
            alert('Redirecting to upgrade plan page...');
        });
        
        // Chat button functionality
        document.querySelector('.chat-button').addEventListener('click', function() {
            alert('Chat with us feature would open here!');
        });
        
        // Search box functionality
        document.querySelector('.search-box input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Searching for jobs with keyword: "${this.value}"`);
            }
        });
    </script>
</body>
</html>