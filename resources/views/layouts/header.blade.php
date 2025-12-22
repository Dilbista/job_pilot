<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Find Your Dream Job</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cdnjs.cloudflare.com">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            body {
                background-color: #f8f9fa;
                color: #333;
            }

            /* Top Navigation Bar */
            .top-nav {
                background-color: #f0f0f0;
                padding: 8px 0;
                border-bottom: 1px solid #ddd;
            }

            .top-nav-container {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0 20px;
            }

            .top-nav-links {
                display: flex;
                list-style: none;
                gap: 25px;
            }

            .top-nav-links a {
                text-decoration: none;
                color: #333;
                font-size: 14px;
                font-weight: 500;
                transition: color 0.3s;
            }

            .top-nav-links a:hover {
                color: #3a86ff;
            }

            .top-nav-right {
                display: flex;
                align-items: center;
                gap: 20px;
            }

            .phone-number {
                font-size: 14px;
                color: #333;
                font-weight: 500;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-select {
                background: transparent;
                border: none;
                font-size: 14px;
                color: #333;
                font-weight: 500;
                cursor: pointer;
                outline: none;
                padding: 5px;
            }

            .dropdown-select option {
                background: white;
                color: #333;
            }

            /* Main Header */
            .main-header {
                background-color: rgb(83, 22, 214);
                padding: 15px 0;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                width: 100%;
                height: 85px;
            }

            .header-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                font-size: 28px;
                font-weight: 700;
                color: white;
                text-decoration: none;
                display: flex;
                align-items: center;
            }

            .logo i {
                margin-right: 8px;
                color: #ece8f2;
            }

            .search-wrapper {
                display: flex;
                align-items: center;
                background: #fff;
                border-radius: 6px;
                padding: 6px 12px;
                width: 570px;
                height: 50px;
                max-width: 100%;
            }

            .search-select {
                border: none;
                font-size: 15px;
                font-weight: 600;
                outline: none;
                cursor: pointer;
                background: transparent;
            }

            .search-divider {
                width: 1px;
                height: 25px;
                background: #ddd;
                margin: 0 12px;
            }

            .search-icon {
                color: #1019c0;
                margin-right: 20px;
                padding: 10px;
            }

            .search-input-main {
                border: none;
                outline: none;
                font-size: 15px;
                flex: 1;
            }



            .jobs-link {
                font-size: 16px;
                font-weight: 600;
                color: #333;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .jobs-link i {
                color: #3a86ff;
            }

            .search-container {
                flex: 1;
                max-width: 500px;
                position: relative;
            }

            .search-box {
                width: 100%;
                padding: 12px 20px;
                padding-left: 45px;
                border: 2px solid #e0e0e0;
                /* border-radius: 30px; */
                font-size: 15px;
                outline: none;
                transition: border-color 0.3s;
            }

            .search-box:focus {
                border-color: #3a86ff;
            }

            .search-icon {
                position: absolute;
                left: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: #666;
                font-size: 18px;
                padding: 10px 20px;
            }


            .post-job-btn {
                background-color: #f0f2f5;
                color: blue;
                border: none;
                padding: 12px 24px;
                border-radius: 5px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.2s;
            }

            .post-job-btn:hover {
                color: black;
                transform: translateY(-2px);
            }

            .user-actions {
                display: flex;
                align-items: center;
                gap: 30px;
                color: white;
                font-size: 18px;
            }

            .profile-dropdown {
                position: relative;
                cursor: pointer;
            }

            .profile-dropdown img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                object-fit: cover;
                border: 2px solid white;
                background-color: black;
            }

            /* Dropdown menu */
            .dropdown-menu {
                position: absolute;
                right: 0;
                top: 55px;
                background: white;
                list-style: none;
                padding: 10px 0;
                border-radius: 8px;
                width: 180px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
                display: none;
                z-index: 999;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-menu li a {
                display: block;
                padding: 10px 18px;
                text-decoration: none;
                color: #333;
                font-size: 14px;
            }

            .dropdown-menu li a:hover {
                background: #f0f2f5;
                color: blue;
            }

            /* Show on hover */
            .profile-dropdown:hover .dropdown-menu,
            .profile-dropdown .dropdown-menu:hover {
                display: block;
            }

            .logout-btn {
                background: none;
                border: none;
                padding: 10px 18px;
                width: 100%;
                text-align: left;
                font-size: 14px;
                cursor: pointer;
                color: #333;
            }

            .logout-btn:hover {
                background: #f0f2f5;
                color: blue;
            }


            /* Hero Section */
            .hero-section {
                padding: 50px 0;
                background-image: url("{{ asset('images/group-job-seekers-shaking-hands.webp') }}");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 450px;
                /* background: linear-gradient(rgba(205, 230, 234, 0.4), rgba(140, 139, 139, 0.4)); */
            }

            .hero-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 30px;
                text-align: center;
            }

            .hero-title {
                font-size: 48px;
                font-weight: 700;
                color: white;
                margin-bottom: 20px;
                line-height: 1.2;
            }

            .hero-subtitle {
                font-size: 20px;
                color: white;
                margin-bottom: 40px;
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
                line-height: 1.6;
            }

            /* Hero Search */
            .hero-search {
                background-color: white;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                max-width: 900px;
                height: 90px;
                margin: 0 auto 20px;
            }

            .search-form {
                display: flex;
                gap: 15px;
            }

            .search-input {
                flex: 1;
                padding: 15px 20px;
                border: 2px solid #e0e0e0;
                border-radius: 10px;
                font-size: 16px;
                outline: none;
                height: 50px;
                transition: border-color 0.3s;
            }

            .search-input:focus {
                border-color: #3a86ff;
            }

            .search-btn {
                background-color: #3a86ff;
                color: white;
                border: none;
                padding: 15px 30px;
                border-radius: 10px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .search-btn:hover {
                background-color: #2a75ff;
            }

            /* Tags */
            .tags {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
                margin-bottom: 5px;
                color: white;
            }

            .tag {
                color: white;
                padding: 8px 16px;
                border-radius: 20px;
                font-size: 14px;
                font-weight: 500;
                justify-content: center;
            }

            /* Chat Button */
            .chat-button {
                position: fixed;
                bottom: 30px;
                right: 30px;
                background-color: #3a86ff;
                color: white;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 24px;
                box-shadow: 0 5px 15px rgba(58, 134, 255, 0.3);
                cursor: pointer;
                z-index: 100;
                transition: all 0.3s;
            }

            .chat-button:hover {
                background-color: #2a75ff;
                transform: scale(1.1);
            }

            /* Responsive */
            @media (max-width: 992px) {
                .nav-center {
                    flex-direction: column;
                    gap: 15px;
                }

                .search-container {
                    max-width: 100%;
                }

                .search-form {
                    flex-direction: column;
                }

                .hero-title {
                    font-size: 36px;
                }

                .dashboard-links {
                    overflow-x: auto;
                    padding-bottom: 10px;
                }
            }

            @media (max-width: 768px) {
                .top-nav-container {
                    flex-direction: column;
                    gap: 10px;
                }

                .header-container {
                    flex-direction: column;
                    gap: 20px;
                }

                .hero-title {
                    font-size: 28px;
                }

                .hero-subtitle {
                    font-size: 16px;
                }
            }
        </style>
    </head>

<body>
    <!-- Top Navigation Bar -->
    <div class="top-nav">
        <div class="top-nav-container">
            <ul class="top-nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Candidates</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">My Job</a></li>
            </ul>

            <div class="top-nav-right">
                <div class="phone-number">987-555-0115</div>
                <div class="dropdown">
                    <select class="dropdown-select">
                        <option>English</option>
                        <option>Spanish</option>
                        <option>French</option>
                    </select>
                </div>
                <div class="dropdown">
                    <select class="dropdown-select">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>NR</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="header-container">
            <a href="#" class="logo">
                <i class="fas fa-briefcase"></i>
                Jobpilot
            </a>

            <div class="search-wrapper">
                <select class="search-select">
                    <option>Jobs</option>
                    <option>Companies</option>
                    <option>Candidates</option>
                </select>

                <div class="search-divider"></div>

                <i class="fas fa-search "></i>
                <input type="text" class="search-input-main" placeholder="   Job Title, Keyword">
            </div>

            <div class="user-actions">
                <i class="fas fa-bell"></i>
                <i class="fas fa-comment"></i>

                <div class="profile-dropdown" id="profileDropdown">
                    <img src="/images/profile.png" alt="Profile">

                    <ul class="dropdown-menu">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">My Jobs</a></li>
                        <li><a href="#">Plans & Billing</a></li>
                        <li><a href="#">Settings</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="logout-btn">Log Out</button>
                            </form>
                        </li>

                    </ul>
                </div>
                <button class="post-job-btn">Post Job</button>
            </div>
        </div>
    </header>