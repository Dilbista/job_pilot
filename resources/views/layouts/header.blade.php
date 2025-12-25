<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Find Your Dream Job</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="cdnjs.cloudflare.com">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>

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

        .top-nav-links a.active {
            color: #0d6efd;
            font-weight: 600;
            border-bottom: 2px solid #0d6efd;
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

        .post-job-btn a {
            text-decoration: none;
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

    /* RESPONSIVE STYLES */

    /* Large devices (desktops, 1200px and up) */
    @media (max-width: 1200px) {
        .hero-container,
        .header-container,
        .top-nav-container {
            max-width: 960px;
            padding: 0 15px;
        }
        
        .search-wrapper {
            width: 450px;
        }
        
        .hero-title {
            font-size: 42px;
        }
    }

    /* Medium devices (tablets, 992px and up) */
    @media (max-width: 992px) {
        .header-container {
            flex-direction: column;
            gap: 15px;
            height: auto;
            padding: 15px 20px;
        }
        
        .search-wrapper {
            width: 100%;
            max-width: 600px;
            margin: 10px 0;
        }
        
        .user-actions {
            width: 100%;
            justify-content: space-between;
        }
        
        .hero-title {
            font-size: 36px;
        }
        
        .hero-subtitle {
            font-size: 18px;
            padding: 0 20px;
        }
        
        .hero-search {
            height: auto;
            margin: 0 20px 20px;
        }
        
        .search-form {
            flex-direction: column;
            gap: 10px;
        }
        
        .search-input,
        .search-btn {
            width: 100%;
        }
        
        .top-nav-container {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }
        
        .top-nav-right {
            flex-wrap: wrap;
            justify-content: center;
        }
    }

    /* Small devices (landscape phones, 768px and up) */
    @media (max-width: 768px) {
        .main-header {
            height: auto;
            padding: 10px 0;
        }
        
        .logo {
            font-size: 24px;
        }
        
        .hero-section {
            height: auto;
            padding: 40px 0;
        }
        
        .hero-title {
            font-size: 32px;
            padding: 0 15px;
        }
        
        .hero-subtitle {
            font-size: 16px;
            padding: 0 15px;
        }
        
        .hero-search {
            padding: 15px;
            margin: 0 15px 20px;
        }
        
        .search-wrapper {
            height: 45px;
        }
        
        .user-actions {
            gap: 20px;
        }
        
        .post-job-btn {
            padding: 10px 18px;
            font-size: 14px;
        }
        
        .top-nav-links {
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }
        
        .top-nav-links li {
            margin: 0 5px;
        }
        
        .phone-number {
            font-size: 13px;
        }
        
        .dropdown-select {
            font-size: 13px;
        }
        
        .profile-dropdown img {
            width: 35px;
            height: 35px;
        }
    }

    /* Extra small devices (portrait phones, 576px and up) */
    @media (max-width: 576px) {
        .header-container {
            padding: 10px 15px;
        }
        
        .logo {
            font-size: 22px;
        }
        
        .logo i {
            font-size: 20px;
        }
        
        .search-wrapper {
            padding: 5px 10px;
            height: 40px;
        }
        
        .search-select,
        .search-input-main {
            font-size: 14px;
        }
        
        .search-divider {
            margin: 0 8px;
            height: 20px;
        }
        
        .search-icon {
            margin-right: 10px;
            font-size: 14px;
        }
        
        .user-actions {
            gap: 15px;
            font-size: 16px;
        }
        
        .post-job-btn {
            padding: 8px 15px;
            font-size: 13px;
        }
        
        .hero-title {
            font-size: 28px;
        }
        
        .hero-subtitle {
            font-size: 15px;
        }
        
        .search-form {
            gap: 8px;
        }
        
        .search-input {
            padding: 12px 15px;
            height: 45px;
            font-size: 15px;
        }
        
        .search-btn {
            padding: 12px 15px;
            font-size: 15px;
        }
        
        .tags {
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .tag {
            padding: 6px 12px;
            font-size: 12px;
        }
        
        .dropdown-menu {
            width: 150px;
            top: 45px;
        }
        
        .dropdown-menu li a {
            padding: 8px 15px;
            font-size: 13px;
        }
        
        .logout-btn {
            padding: 8px 15px;
            font-size: 13px;
        }
        
        .top-nav-links {
            gap: 10px;
        }
        
        .top-nav-links a {
            font-size: 12px;
        }
        
        .top-nav-right {
            gap: 10px;
        }
        
        .chat-button {
            width: 50px;
            height: 50px;
            font-size: 20px;
            bottom: 20px;
            right: 20px;
        }
    }

    /* Very small devices (phones less than 400px) */
    @media (max-width: 400px) {
        .header-container {
            padding: 8px 10px;
        }
        
        .logo {
            font-size: 20px;
        }
        
        .search-wrapper {
            padding: 4px 8px;
            height: 38px;
        }
        
        .search-select,
        .search-input-main {
            font-size: 13px;
        }
        
        .user-actions {
            gap: 12px;
            font-size: 15px;
        }
        
        .profile-dropdown img {
            width: 32px;
            height: 32px;
        }
        
        .post-job-btn {
            padding: 6px 12px;
            font-size: 12px;
        }
        
        .hero-title {
            font-size: 24px;
        }
        
        .hero-subtitle {
            font-size: 14px;
        }
        
        .top-nav-links {
            gap: 8px;
        }
        
        .top-nav-links a {
            font-size: 11px;
        }
        
        .phone-number {
            font-size: 12px;
        }
        
        .dropdown-select {
            font-size: 12px;
        }
    }

    /* For devices in landscape mode */
    @media (max-height: 500px) and (orientation: landscape) {
        .hero-section {
            height: auto;
            padding: 30px 0;
        }
        
        .hero-title {
            font-size: 32px;
            margin-bottom: 15px;
        }
        
        .hero-subtitle {
            font-size: 16px;
            margin-bottom: 20px;
        }
        
        .hero-search {
            height: auto;
            padding: 15px;
            margin-bottom: 15px;
        }
    }

    /* For printing */
    @media print {
        .top-nav,
        .main-header,
        .chat-button {
            display: none;
        }
        
        body {
            background-color: white;
        }
    }

    /* Dark mode support (optional) */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        
        .top-nav {
            background-color: #1e1e1e;
            border-bottom: 1px solid #333;
        }
        
        .top-nav-links a,
        .phone-number,
        .dropdown-select {
            color: #e0e0e0;
        }
        
        .search-wrapper,
        .search-box,
        .search-input,
        .search-input-main {
            background-color: #2d2d2d;
            color: #e0e0e0;
            border-color: #444;
        }
        
        .dropdown-menu {
            background-color: #2d2d2d;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }
        
        .dropdown-menu li a,
        .logout-btn {
            color: #e0e0e0;
        }
        
        .dropdown-menu li a:hover,
        .logout-btn:hover {
            background-color: #3a3a3a;
        }
    }
</style>
</head>

<body>
    <!-- Top Navigation Bar -->
    <div class="top-nav">
        <div class="top-nav-container">
            <ul class="top-nav-links">
                <li>
                    <a href="{{ url('home') }}" class="{{ request()->is('/home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ route('company.candidates') }}"
                        class="{{ request()->is('company/candidates') ? 'active' : '' }}">
                        Candidates
                    </a>
                </li>

                <li>
                    <a href="{{ route('company.pricing') }}"
                        class="{{ request()->is('company/pricing') ? 'active' : '' }}">
                        Pricing
                    </a>
                </li>

                <li>
                    <a href="{{ route('company.index') }}"
                        class="{{ request()->is('company/dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{ route('company.myJobs') }}"
                        class="{{ request()->is('company/my-jobs') ? 'active' : '' }}">
                        My Job
                    </a>
                </li>
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
                        <li><a href="{{ route('company.index') }}">Dashboard</a></li>
                        <li><a href="{{ route('company.myJobs') }}">My Jobs</a></li>
                        <li><a href="{{ route('dashboard.billing') }}">Plans & Billing</a></li>
                        <li><a href="{{ route('dashboard.settings') }}">Settings</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="logout-btn">Log Out</button>
                            </form>
                        </li>

                    </ul>
                </div>
                <button class="post-job-btn"><a href="{{ route('company.createJob') }}">Post Job</a></button>
            </div>
        </div>
    </header>