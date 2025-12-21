<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jobpilot Dashboard">
    <meta property="og:image" content="">
    <title>Dashboard - Jobpilot</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://jobpilot.lomeyolabs.com/frontend/assets/images/logo/fav.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        /* Custom Dashboard Styles with Animations and Hover Effects */
        :root {
            --primary-500: #0A65CC;
            --primary-600: #0851a4;
            --primary-200: #b6d1f0;
            --primary-100: #cee1f5;
            --primary-50: #eef5fc;
            --gray-20: #fbfcfe;
            --success: #2ecc71;
            --danger: #E05151;
            --warning: #F2B60D;
            --transition: all 0.3s ease;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-900: #111827;
        }

        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1f2937;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col-lg-3, .col-lg-9, .col-xl-4, .col-lg-6, .col-md-6 {
            padding: 0 15px;
        }

        .col-lg-3 { flex: 0 0 25%; max-width: 25%; }
        .col-lg-9 { flex: 0 0 75%; max-width: 75%; }
        .col-xl-4 { flex: 0 0 33.333%; max-width: 33.333%; }
        .col-lg-6 { flex: 0 0 50%; max-width: 50%; }
        .col-md-6 { flex: 0 0 50%; max-width: 50%; }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, var(--primary-500) 0%, var(--primary-600) 100%);
            color: white;
            z-index: 1000;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .n-header--top, .n-header--bottom {
            padding: 15px 0;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-center {
            align-items: center;
        }

        /* Logo */
        .brand-logo img {
            height: 40px;
        }

        /* Navigation */
        .menu-active-classes {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .menu-active-classes a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .menu-active-classes a:hover {
            color: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
        }

        .menu-active-classes a.active {
            font-weight: 600;
        }

        .menu-active-classes a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: white;
            border-radius: 2px;
        }

        /* Search Box */
        .search-box {
            background: white;
            border-radius: 8px;
            padding: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .search-box:hover {
            box-shadow: var(--shadow-md);
        }

        .search-input {
            border: none;
            outline: none;
            flex: 1;
            padding: 8px;
            font-size: 14px;
            background: transparent;
        }

        .search-input:focus {
            box-shadow: none;
        }

        /* Notification Icon */
        .notification-icon {
            position: relative;
            cursor: pointer;
            transition: var(--transition);
        }

        .notification-icon:hover {
            transform: translateY(-2px);
        }

        .notification-icon .circle {
            position: absolute;
            top: -3px;
            right: -3px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Notification Bar */
        .notification-bar {
            position: absolute;
            top: 100%;
            right: 0;
            width: 400px;
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: var(--transition);
            z-index: 1000;
            margin-top: 10px;
        }

        .notification-icon:hover .notification-bar {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .notification-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid var(--gray-100);
        }

        .notification-header h2 {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-900);
        }

        .notification-header p {
            color: var(--primary-500);
            font-size: 14px;
            cursor: pointer;
        }

        .notification-list {
            max-height: 400px;
            overflow-y: auto;
        }

        .notification-list ul {
            list-style: none;
        }

        .notification-list li {
            padding: 15px 20px;
            border-bottom: 1px solid var(--gray-100);
            transition: var(--transition);
        }

        .notification-list li:hover {
            background: var(--gray-20);
        }

        .notification-list a {
            display: flex;
            gap: 15px;
            text-decoration: none;
            color: inherit;
        }

        .notification-thumb {
            flex-shrink: 0;
        }

        .notification-list h4 {
            font-size: 14px;
            font-weight: 500;
            color: var(--gray-900);
            margin-bottom: 5px;
        }

        .notification-list p {
            font-size: 12px;
            color: var(--gray-500);
        }

        /* Profile Image */
        .candidate-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid transparent;
            transition: var(--transition);
        }

        .candidate-profile:hover img {
            transform: scale(1.1);
            border-color: var(--primary-500);
            box-shadow: var(--shadow-md);
        }

        .available-alert-header .circle {
            position: absolute;
            bottom: 0;
            right: 0;
            animation: blink 2s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Dropdown */
        .dropdown-menu {
            position: absolute;
            background: white;
            border-radius: 8px;
            box-shadow: var(--shadow-lg);
            min-width: 200px;
            z-index: 1000;
            animation: fadeInUp 0.3s ease-out;
            border: none;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            display: block;
            padding: 10px 15px;
            color: var(--gray-700);
            text-decoration: none;
            transition: var(--transition);
        }

        .dropdown-item:hover {
            background: var(--gray-100);
            color: var(--primary-500);
        }

        .dropdown-item.active {
            background: var(--primary-50);
            color: var(--primary-500);
        }

        /* Dashboard Wrapper */
        .dashboard-wrapper {
            margin-top: 100px;
            padding: 30px 0;
            animation: pageLoad 0.8s ease-out;
        }

        @keyframes pageLoad {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Sidebar */
        .d-sidebar {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: var(--shadow-sm);
            height: fit-content;
            position: sticky;
            top: 120px;
        }

        .d-sidebar h3 {
            font-size: 20px;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 20px;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 8px;
            animation: slideInLeft 0.5s ease-out;
            animation-fill-mode: both;
        }

        .sidebar-menu li:nth-child(1) { animation-delay: 0.1s; }
        .sidebar-menu li:nth-child(2) { animation-delay: 0.2s; }
        .sidebar-menu li:nth-child(3) { animation-delay: 0.3s; }
        .sidebar-menu li:nth-child(4) { animation-delay: 0.4s; }
        .sidebar-menu li:nth-child(5) { animation-delay: 0.5s; }
        .sidebar-menu li:nth-child(6) { animation-delay: 0.6s; }
        .sidebar-menu li:nth-child(7) { animation-delay: 0.7s; }
        .sidebar-menu li:nth-child(8) { animation-delay: 0.8s; }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .sidebar-menu a {
            display: block;
            padding: 12px 15px;
            color: var(--gray-600);
            text-decoration: none;
            border-radius: 8px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .sidebar-menu a:hover {
            background: var(--primary-50);
            color: var(--primary-500);
            padding-left: 20px;
        }

        .sidebar-menu a.active {
            background: var(--primary-50);
            color: var(--primary-500);
            font-weight: 600;
        }

        .sidebar-menu a::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: var(--primary-500);
            transform: translateX(-100%);
            transition: var(--transition);
        }

        .sidebar-menu a:hover::before,
        .sidebar-menu a.active::before {
            transform: translateX(0);
        }

        .button-content-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .button-icon {
            font-size: 20px;
        }

        /* Dashboard Right */
        .dashboard-right {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--shadow-sm);
        }

        .dashboard-right-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            animation: fadeIn 0.8s ease-out;
        }

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

        .dashboard-right-header h5 {
            font-size: 24px;
            font-weight: 600;
            color: var(--gray-900);
        }

        .dashboard-right-header p {
            color: var(--gray-600);
            margin-top: 5px;
        }

        /* Feature Boxes */
        .single-feature-box {
            background: white;
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #e5e7eb;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            animation: fadeIn 0.6s ease-out;
            margin-bottom: 20px;
        }

        .single-feature-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-500);
        }

        .single-feature-box:hover .single-feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .single-feature-data h6 {
            font-size: 32px;
            font-weight: 600;
            color: var(--gray-900);
            animation: countUp 1s ease-out;
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .single-feature-data p {
            color: var(--gray-600);
            margin-top: 5px;
        }

        .single-feature-icon {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 48px;
            color: var(--primary-500);
            opacity: 0.2;
            transition: var(--transition);
        }

        /* Recently Applied */
        .recently-applied-wrap {
            margin: 40px 0 20px;
        }

        .recently-applied-wrap h3 {
            font-size: 20px;
            font-weight: 600;
            color: var(--gray-900);
        }

        .view-all {
            color: var(--gray-500);
            text-decoration: none;
            transition: var(--transition);
            position: relative;
        }

        .view-all:hover {
            color: var(--primary-500) !important;
            transform: translateX(5px);
        }

        .view-all::after {
            content: '→';
            position: absolute;
            right: -20px;
            opacity: 0;
            transition: var(--transition);
        }

        .view-all:hover::after {
            right: -25px;
            opacity: 1;
        }

        /* Table */
        .db-job-card-table {
            overflow-x: auto;
        }

        .db-job-card-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .db-job-card-table thead {
            background: var(--gray-50);
        }

        .db-job-card-table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--gray-900);
            border-bottom: 2px solid var(--gray-100);
        }

        .db-job-card-table tbody tr {
            border-bottom: 1px solid var(--gray-100);
            animation: slideInRight 0.5s ease-out;
            animation-fill-mode: both;
            transition: var(--transition);
        }

        .db-job-card-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .db-job-card-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
        .db-job-card-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
        .db-job-card-table tbody tr:nth-child(4) { animation-delay: 0.4s; }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .db-job-card-table tbody tr:hover {
            background-color: var(--gray-20);
            transform: translateX(5px);
        }

        .db-job-card-table td {
            padding: 20px 15px;
            vertical-align: middle;
        }

        /* Job Cards */
        .rt-single-icon-box {
            display: flex;
            gap: 15px;
            transition: var(--transition);
        }

        .rt-single-icon-box:hover {
            transform: translateX(5px);
        }

        .rt-single-icon-box:hover .tw-rounded-md {
            transform: scale(1.05);
        }

        .tw-rounded-md {
            border-radius: 8px;
            transition: var(--transition);
        }

        .tw-w-\[68px\], .tw-h-\[68px\] {
            width: 68px;
            height: 68px;
        }

        .post-main-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .post-main-title a {
            color: var(--gray-900);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .post-main-title a:hover {
            color: var(--primary-500);
        }

        .badge {
            padding: 4px 12px;
            font-size: 12px;
            font-weight: 500;
            border-radius: 20px;
        }

        .bg-primary-50 {
            background: var(--primary-50);
        }

        .text-primary-500 {
            color: var(--primary-500);
        }

        .info-tools {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: var(--gray-600);
            font-size: 14px;
            margin-right: 20px;
        }

        /* Status */
        .text-danger-500 {
            color: var(--danger);
        }

        .text-danger-500 .tw-flex {
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            background: var(--primary-500);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            text-decoration: none;
        }

        .btn:hover {
            background: var(--primary-600);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .bg-gray-50 {
            background: var(--gray-50) !important;
            color: var(--primary-500) !important;
        }

        .bg-gray-50:hover {
            background: var(--primary-50) !important;
        }

        .rt-mr-8 {
            margin-right: 8px;
        }

        /* Buttons Ripple Effect */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.7);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            width: 100px;
            height: 100px;
            margin-left: -50px;
            margin-top: -50px;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        /* Loading States */
        .btn.loading {
            position: relative;
            color: transparent !important;
        }

        .btn.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid #fff;
            border-radius: 50%;
            border-top-color: transparent;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Pulse Animation */
        .btn.pulse {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(10, 101, 204, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(10, 101, 204, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(10, 101, 204, 0);
            }
        }

        /* Footer */
        .dashboard-footer {
            padding: 30px 0;
            color: var(--gray-500);
            border-top: 1px solid var(--gray-100);
            margin-top: 50px;
        }

        /* Mobile Menu Button */
        .effect1 {
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        .effect1 span {
            display: block;
            width: 25px;
            height: 2px;
            background: white;
            margin: 5px 0;
            transition: var(--transition);
        }

        .effect1 span.active {
            transform: rotate(45deg);
        }

        /* Mobile Search */
        .togglesearch, .mblTogglesearch {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 1000;
            margin-top: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .d-sidebar {
                position: fixed;
                left: 0;
                top: 0;
                height: 100vh;
                width: 300px;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
                z-index: 1001;
                overflow-y: auto;
            }
            
            .d-sidebar.mobile-open {
                transform: translateX(0);
            }
            
            .sidebar-open-nav {
                display: block;
                cursor: pointer;
            }
            
            .notification-bar {
                width: 300px;
                right: -50px;
            }
            
            .col-lg-3, .col-lg-9 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .menu-active-classes {
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (min-width: 993px) {
            .sidebar-open-nav {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 10px 0;
            }
            
            .single-feature-box {
                margin-bottom: 15px;
            }
            
            .notification-bar {
                width: 280px;
            }
            
            .mx-width-300 {
                max-width: 100% !important;
            }
            
            .d-lg-none {
                display: none;
            }
        }

        /* Utilities */
        .tw-px-0 { padding-left: 0 !important; padding-right: 0 !important; }
        .tw-mb-3 { margin-bottom: 12px; }
        .tw-ml-2 { margin-left: 8px; }
        .tw-mt-6 { margin-top: 24px; }
        .tw-gap-2 { gap: 8px; }
        .tw-gap-5 { gap: 20px; }
        .tw-gap-6 { gap: 24px; }
        .tw-ps-3 { padding-left: 12px; }
        .tw-pe-3 { padding-right: 12px; }
        .tw-flex { display: flex; }
        .tw-items-center { align-items: center; }
        .tw-justify-between { justify-content: space-between; }
        .tw-text-white { color: white; }
        .tw-text-2xl { font-size: 24px; }
        .tw-font-semibold { font-weight: 600; }
        .tw-text-\[#18191C\] { color: #18191C; }
        .tw-bg-white { background: white; }
        .tw-rounded-md { border-radius: 8px; }
        .tw-relative { position: relative; }
        .tw-w-full { width: 100%; }
        .tw-justify-end { justify-content: flex-end; }
        .tw-gap-1\.5 { gap: 6px; }
        .tw-cursor-pointer { cursor: pointer; }
        .tw-hidden { display: none; }
        .tw-inline-flex { display: inline-flex; }
        .pointer { cursor: pointer; }
        .relative { position: relative; }
        .position-relative { position: relative; }
        .position-absolute { position: absolute; }
        .d-none { display: none; }
        .d-block { display: block; }
        .d-lg-block { display: block; }
        .d-lg-none { display: none; }
        .text-center { text-align: center; }
        .bg-primary-500 { background: var(--primary-500); }
        .rounded { border-radius: 8px; }
        .shadow { box-shadow: var(--shadow-md); }
        .w-100 { width: 100%; }
        .w-sm-75 { width: 75%; }
        .p-3 { padding: 12px; }
        .p-2 { padding: 8px; }
        .py-md-3 { padding-top: 12px; padding-bottom: 12px; }
        .px-md-5 { padding-left: 20px; padding-right: 20px; }
        .mx-width-300 { max-width: 300px; }
        .list-unstyled { list-style: none; padding: 0; margin: 0; }
        .bg-gray-50 { background: var(--gray-50); }
        .text-gray-500 { color: var(--gray-500); }
        .text-gray-900 { color: var(--gray-900); }
        .text-gray-600 { color: var(--gray-600); }
        .hover\:text-primary-500:hover { color: var(--primary-500); }
        .f-size-16 { font-size: 16px; }
        .f-size-20 { font-size: 20px; }
        .ft-wt-5 { font-weight: 500; }
        .body-font-4 { font-size: 14px; }
        .rt-mb-15 { margin-bottom: 15px; }
        .rt-ml-8 { margin-left: 8px; }
        .rt-mr-8 { margin-right: 8px; }
        .pt-2 { padding-top: 8px; }
        .lh-1 { line-height: 1; }
        .m-0 { margin: 0; }
        .underCs { text-decoration: underline; cursor: pointer; }
        .devider { height: 1px; background: var(--gray-100); margin: 15px 0; }
        .body-font-1 { font-size: 14px; }
        .m-2 { margin: 8px; }
    </style>
</head>
<body dir="ltr">
    <input type="hidden" value="AW" id="current_country_code">
    <input type="hidden" id="auth_user" value="1">
    <input type="hidden" id="auth_user_id" value="15">
    
    <header class="header rt-fixed-top">
        <div class="n-header">
            <div class="n-header--top relative">
                <div class="container tw-px-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="n-header--top__left main-menu">
                            <!-- Mobile Top Bar -->
                            <div class="mbl-top d-flex align-items-center justify-content-between container position-relative d-lg-none">
                                <div class="d-flex align-items-center">
                                    <a href="https://jobpilot.lomeyolabs.com" class="brand-logo">
                                        <img src="https://jobpilot.lomeyolabs.com/frontend/assets/images/logo/logo.svg" alt="logo">
                                    </a>
                                </div>
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <div class="search-icon d-lg-none tw-text-white">
                                            <svg id="mblSearchIcon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.9999 21L16.6499 16.65" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="mblTogglesearch bg-primary-500 rounded">
                                            <form action="https://jobpilot.lomeyolabs.com/jobs" method="GET" id="search-form" class="shadow px-md-5 py-md-3 p-3 !tw-bg-white rounded w-sm-75 w-100">
                                                <div class="form-item">
                                                    <input name="keyword" class="search-input w-100" type="text" placeholder="Job Title, Keyword" value="" id="mobile_search_input">
                                                </div>
                                            </form>
                                        </div>
                                        <ul class="custom-border list-unstyled d-flex align-items-center justify-content-end">
                                            <li>
                                                <div class="notification-icon position-relative pointer tw-text-white">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M17.1968 2.24902C18.7229 3.21245 19.9531 4.57885 20.7516 6.19736" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M3.24829 6.19736C4.04681 4.57885 5.27703 3.21245 6.80315 2.24902" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <svg id="unNotifications" class="circle" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="7" cy="7" r="6" fill="#E05151" stroke="white" stroke-width="2"></circle>
                                                    </svg>
                                                    <div class="notification-bar">
                                                        <a href="#" class="notification-header">
                                                            <h2>Notifications</h2>
                                                            <p>Mark all as read</p>
                                                        </a>
                                                        <div class="devider"></div>
                                                        <div class="notification-list">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256" fill="none"></rect>
                                                                                <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>2 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256" fill="none"></rect>
                                                                                <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256" fill="none"></rect>
                                                                                <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256" fill="none"></rect>
                                                                                <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256" fill="none"></rect>
                                                                                <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256" fill="none"></rect>
                                                                                <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                                <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                                <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-center bg-gray-50 p-2">
                                                            <a href="https://jobpilot.lomeyolabs.com/company/all/notifications">
                                                                <span class="body-font-1 ft-wt-5 m-2 underCs">View All Notifications</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="relative">
                                                <a href="https://jobpilot.lomeyolabs.com/user/dashboard" class="candidate-profile p-0">
                                                    <img src="https://jobpilot.lomeyolabs.com/dummy-data/images/candidates/candidate-04.jpg" alt="user logo">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Desktop Navigation -->
                            <div class="container">
                                <ul class="menu-active-classes">
                                    <li class="menu-item"><a href="/">Home</a></li>
                                    <li class="menu-item"><a href="/jobs">Find Job</a></li>
                                    <li class="menu-item"><a href="/employers">Companies</a></li>
                                    <li class="menu-item"><a href="/candidate/dashboard" class="text-primary active">Dashboard</a></li>
                                    <li class="menu-item"><a href="/candidate/job/alerts">Job Alert</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Top Right Section -->
                        <div class="n-header--top__right d-flex align-items-center tw-px-3">
                            <div class="mobile-menu">
                                <div class="menu-click tw-pe-3">
                                    <button class="effect1">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Header -->
            
            <div class="n-header--bottom" style="border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <div class="container position-relative">
                    <div class="d-flex flex-wrap tw-gap-2 tw-items-center">
                        <div class="n-header--bottom__left d-flex align-items-center">
                            <a href="https://jobpilot.lomeyolabs.com" class="brand-logo">
                                <img src="https://jobpilot.lomeyolabs.com/frontend/assets/images/logo/logo.svg" alt="logo">
                            </a>
                            <form action="https://jobpilot.lomeyolabs.com/jobs" method="GET" id="search-form" class="mx-width-300 header-search-form d-lg-block d-none" style="margin: 0 auto;margin-left: 50px;">
                                <div class="search-box">
                                    <select id="headerSearchs" class="form-select" aria-label="Default select example" style="border: none; background: transparent; box-shadow: none; padding-left: 0; padding-right: 0; width: auto; min-width: 100px; font-size: 14px; font-weight: 500; color: #0A65CC;" onchange="showContent(this.value)">
                                        <option value="job" style="border: none; background: transparent; box-shadow: none; ">Jobs</option>
                                        <option value="candidate">Candidate</option>
                                        <option value="company">Company</option>
                                    </select>
                                    <div id="contentDisplay" style="display:none; margin-top: 10px;">
                                        <!-- Content to display based on selection -->
                                    </div>
                                    <script>
                                        function showContent(value) {
                                            const contentDisplay = document.getElementById('contentDisplay');
                                            contentDisplay.style.display = 'block';
                                            contentDisplay.innerHTML = '';

                                            if (value === 'job') {
                                                contentDisplay.innerHTML = '<p>Job related content goes here.</p>';
                                            } else if (value === 'candidate') {
                                                contentDisplay.innerHTML = '<p>Candidate related content goes here.</p>';
                                            } else if (value === 'company') {
                                                contentDisplay.innerHTML = '<p>Company related content goes here.</p>';
                                            }
                                        }
                                    </script>
                                    <div class="d-flex flex-column flex-md-row align-items-center tw-ps-3">
                                        <svg class="searcbox-searchicon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21 20.9999L16.65 16.6499" stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <input name="keyword" class="search-input" type="text" placeholder="Job Title, Keyword" value="" id="global_search">
                                    </div>
                                    <span id="autocomplete_job_results"></span>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Bottom Right Section -->
                        <div class="n-header--bottom__right " style="margin: 0 auto;margin-right: 50px;">
                            <div class="d-flex align-items-center">
                                <div class="search-icon tw-ml-2 d-lg-none !tw-cursor-pointer">
                                    <span>
                                        <svg id="searchIcon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M20.9999 21L16.6499 16.65" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="togglesearch">
                                    <form action="https://jobpilot.lomeyolabs.com/jobs" method="GET" id="search-form" class="shadow px-md-5 py-md-3 p-3 !tw-bg-white rounded w-sm-75 w-100">
                                        <div class="search-box form-item position-relative">
                                            <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M21 20.9999L16.65 16.6499" stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <input name="keyword" class="search-input w-100" type="text" placeholder="Job Title, Keyword" value="" id="search_input">
                                        </div>
                                    </form>
                                </div>
                                <ul class="list-unstyled tw-gap-6 tw-flex tw-items-center tw-justify-between">
                                    <li>
                                        <div class="notification-icon position-relative pointer tw-text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M17.1968 2.24902C18.7229 3.21245 19.9531 4.57885 20.7516 6.19736" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M3.24829 6.19736C4.04681 4.57885 5.27703 3.21245 6.80315 2.24902" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <svg id="unNotifications" class="circle" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7" cy="7" r="6" fill="#E05151" stroke="white" stroke-width="2"></circle>
                                            </svg>
                                            <div class="notification-bar">
                                                <a href="#" class="notification-header">
                                                    <h2>Notifications</h2>
                                                    <p>Mark all as read</p>
                                                </a>
                                                <div class="devider"></div>
                                                <div class="notification-list">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                        <rect width="256" height="256" fill="none"></rect>
                                                                        <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                        <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                        <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>2 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                        <rect width="256" height="256" fill="none"></rect>
                                                                        <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                        <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                        <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                        <rect width="256" height="256" fill="none"></rect>
                                                                        <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                        <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                        <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                        <rect width="256" height="256" fill="none"></rect>
                                                                        <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                        <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                        <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                        <rect width="256" height="256" fill="none"></rect>
                                                                        <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                        <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                        <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                                                        <rect width="256" height="256" fill="none"></rect>
                                                                        <rect x="32" y="72" width="192" height="144" rx="8" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                                                                        <path d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                                                                        <line x1="32" y1="160" x2="224" y2="160" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center bg-gray-50 p-2">
                                                    <a href="https://jobpilot.lomeyolabs.com/company/all/notifications">
                                                        <span class="body-font-1 ft-wt-5 m-2 underCs">View All Notifications</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://jobpilot.lomeyolabs.com/candidate/messages" class="tw-relative tw-text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 9.5H12M8 13H15M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.1971 3.23374 14.3397 3.65806 15.3845C3.73927 15.5845 3.77988 15.6845 3.798 15.7653C3.81572 15.8443 3.8222 15.9028 3.82221 15.9839C3.82222 16.0667 3.80718 16.1569 3.77711 16.3374L3.18413 19.8952C3.12203 20.2678 3.09098 20.4541 3.14876 20.5888C3.19933 20.7067 3.29328 20.8007 3.41118 20.8512C3.54589 20.909 3.73218 20.878 4.10476 20.8159L7.66265 20.2229C7.84309 20.1928 7.9333 20.1778 8.01613 20.1778C8.09715 20.1778 8.15566 20.1843 8.23472 20.202C8.31554 20.2201 8.41552 20.2607 8.61549 20.3419C9.6603 20.7663 10.8029 21 12 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <svg class="circle d-none unread-message-part" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7" cy="7" r="6" fill="#E05151" stroke="white" stroke-width="2"></circle>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="dropdown dropstart">
                                        <a href="javascript:void(0)" class="candidate-profile position-relative">
                                            <img src="https://jobpilot.lomeyolabs.com/dummy-data/images/candidates/candidate-04.jpg" alt="photo">
                                            <span class="available-alert-header">
                                                <svg class="circle" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="7" cy="7" r="6" fill="#2ecc71" stroke="white" stroke-width="2"></circle>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item active" href="https://jobpilot.lomeyolabs.com/candidate/dashboard">Dashboard</a>
                                            <a class="dropdown-item" href="https://jobpilot.lomeyolabs.com/candidate/settings">Settings</a>
                                            <a class="dropdown-item" href="https://jobpilot.lomeyolabs.com/logout">Log Out</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Dashboard Content -->
    <div class="dashboard-wrapper">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="d-sidebar">
                        <h3 class="tw-mb-3">Candidate Dashboard</h3>
                        <ul class="sidebar-menu">
                            <li>
                                <a class="active" href="https://jobpilot.lomeyolabs.com/candidate/dashboard">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 18H18M4 14H6V10H4V14ZM9 6H11V14H9V6ZM14 10H16V14H14V10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Overview</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/candidate/applied-jobs">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 6H18M4 6V16C4 16.5304 4.21071 17.0391 4.58579 17.4142C4.96086 17.7893 5.46957 18 6 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V6M7 6V4C7 3.73478 7.10536 3.48043 7.29289 3.29289C7.48043 3.10536 7.73478 3 8 3H12C12.2652 3 12.5196 3.10536 12.7071 3.29289C12.8946 3.48043 13 3.73478 13 4V6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Applied Jobs</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/candidate/bookmarks">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 2L12.39 8.26H19L13.81 12.46L16.2 18.71L10 14.5L3.8 18.71L6.19 12.46L1 8.26H7.61L10 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Favorite Jobs</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/candidate/job/alerts">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.1968 2.24902C18.7229 3.21245 19.9531 4.57885 20.7516 6.19736" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.24829 6.19736C4.04681 4.57885 5.27703 3.21245 6.80315 2.24902" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Job Alert</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/candidate/messages">
                                    <span class="button-content-wrapper tw-items-center">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 9.5H12M8 13H15M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.1971 3.23374 14.3397 3.65806 15.3845C3.73927 15.5845 3.77988 15.6845 3.798 15.7653C3.81572 15.8443 3.8222 15.9028 3.82221 15.9839C3.82222 16.0667 3.80718 16.1569 3.77711 16.3374L3.18413 19.8952C3.12203 20.2678 3.09098 20.4541 3.14876 20.5888C3.19933 20.7067 3.29328 20.8007 3.41118 20.8512C3.54589 20.909 3.73218 20.878 4.10476 20.8159L7.66265 20.2229C7.84309 20.1928 7.9333 20.1778 8.01613 20.1778C8.09715 20.1778 8.15566 20.1843 8.23472 20.202C8.31554 20.2201 8.41552 20.2607 8.61549 20.3419C9.6603 20.7663 10.8029 21 12 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Messenger</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/candidate/my-plan">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 4C2 2.89543 2.89543 2 4 2H16C17.1046 2 18 2.89543 18 4V16C18 17.1046 17.1046 18 16 18H4C2.89543 18 2 17.1046 2 16V4Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M2 6H18M5 10H5.01M10 10H10.01M15 10H15.01" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Plans & Billing</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/candidate/settings">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 12.5C11.3807 12.5 12.5 11.3807 12.5 10C12.5 8.61929 11.3807 7.5 10 7.5C8.61929 7.5 7.5 8.61929 7.5 10C7.5 11.3807 8.61929 12.5 10 12.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 2V3.5M10 16.5V18M2 10H3.5M16.5 10H18M3.66 3.66L4.88 4.88M15.12 15.12L16.34 16.34M3.66 16.34L4.88 15.12M15.12 4.88L16.34 3.66" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Settings</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://jobpilot.lomeyolabs.com/logout">
                                    <span class="button-content-wrapper">
                                        <span class="button-icon align-icon-left tw-flex tw-items-center">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13 6L19 12M19 12L13 18M19 12H7M13 2H3C2.44772 2 2 2.44772 2 3V17C2 17.5523 2.44772 18 3 18H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                        <span class="button-text">Log Out</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="dashboard-right">
                        <div class="dashboard-right-header">
                            <div class="left-text">
                                <h5>Hello, John Doe</h5>
                                <p class="m-0 r-c">Here are your daily activities & career opportunities</p>
                            </div>
                            <span class="sidebar-open-nav">
                                <i class="ph-list">≡</i>
                            </span>
                        </div>
                        
                        <!-- Stats Cards -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="single-feature-box">
                                    <div class="single-feature-data">
                                        <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold">100</h6>
                                        <p>Job Applied</p>
                                    </div>
                                    <div class="single-feature-icon">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6H18M4 6V16C4 16.5304 4.21071 17.0391 4.58579 17.4142C4.96086 17.7893 5.46957 18 6 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V6M7 6V4C7 3.73478 7.10536 3.48043 7.29289 3.29289C7.48043 3.10536 7.73478 3 8 3H12C12.2652 3 12.5196 3.10536 12.7071 3.29289C12.8946 3.48043 13 3.73478 13 4V6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="single-feature-box">
                                    <div class="single-feature-data">
                                        <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold">5</h6>
                                        <p>Favorite Jobs</p>
                                    </div>
                                    <div class="single-feature-icon">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2L15.09 10.26H24L17.55 15.46L20.64 23.72L12 18.52L3.36 23.72L6.45 15.46L0 10.26H8.91L12 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="single-feature-box">
                                    <div class="single-feature-data">
                                        <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold">7</h6>
                                        <p>Job Alert</p>
                                    </div>
                                    <div class="single-feature-icon">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recently Applied Section -->
                        <div class="recently-applied-wrap d-flex justify-content-between align-items-center rt-mb-15">
                            <h3 class="f-size-16 lh-1 m-0">Recently Applied</h3>
                            <a class="view-all text-gray-500 f-size-16 d-flex align-items-center hover:text-primary-500" href="https://jobpilot.lomeyolabs.com/candidate/applied-jobs">
                                View All
                                <i class="ph-arrow-right f-size-20 rt-ml-8">→</i>
                            </a>
                        </div>
                        
                        <!-- Jobs Table -->
                        <div class="db-job-card-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Job</th>
                                        <th>Date Applied</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="rt-single-icon-box tw-gap-5">
                                                <div class="tw-w-[68px] tw-h-[68px]">
                                                    <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md" src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-06.png" alt="logo" draggable="false">
                                                </div>
                                                <div class="iconbox-content">
                                                    <div class="post-info2">
                                                        <div class="post-main-title">
                                                            <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771595_5494544167" class="text-gray-900 f-size-16 ft-wt-5">
                                                                Mid level Laravel Developer
                                                            </a>
                                                            <span class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                Part Time
                                                            </span>
                                                        </div>
                                                        <div class="body-font-4 text-gray-600 pt-2">
                                                            <span class="info-tools rt-mr-8">
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                Yemen
                                                            </span>
                                                            <span class="info-tools">
                                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375" stroke="#C5C9D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                200 - 1K Monthly
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dec 15, 2025 38:12</td>
                                        <td class="text-danger-500">
                                            <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10"/>
                                                    <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Expired
                                            </div>
                                        </td>
                                        <td>
                                            <div class="db-job-btn-wrap d-flex justify-content-end">
                                                <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771595_5494544167" class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                    <span class="button-text">View Details</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="rt-single-icon-box tw-gap-5">
                                                <div class="tw-w-[68px] tw-h-[68px]">
                                                    <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md" src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-07.png" alt="logo" draggable="false">
                                                </div>
                                                <div class="iconbox-content">
                                                    <div class="post-info2">
                                                        <div class="post-main-title">
                                                            <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771594_8560104575" class="text-gray-900 f-size-16 ft-wt-5">
                                                                Mid level Laravel Developer
                                                            </a>
                                                            <span class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                Part Time
                                                            </span>
                                                        </div>
                                                        <div class="body-font-4 text-gray-600 pt-2">
                                                            <span class="info-tools rt-mr-8">
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                Samoa
                                                            </span>
                                                            <span class="info-tools">
                                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375" stroke="#C5C9D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                Competitive
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dec 15, 2025 38:12</td>
                                        <td class="text-danger-500">
                                            <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10"/>
                                                    <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Expired
                                            </div>
                                        </td>
                                        <td>
                                            <div class="db-job-btn-wrap d-flex justify-content-end">
                                                <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771594_8560104575" class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                    <span class="button-text">View Details</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="rt-single-icon-box tw-gap-5">
                                                <div class="tw-w-[68px] tw-h-[68px]">
                                                    <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md" src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-02.jpg" alt="logo" draggable="false">
                                                </div>
                                                <div class="iconbox-content">
                                                    <div class="post-info2">
                                                        <div class="post-main-title">
                                                            <a href="https://jobpilot.lomeyolabs.com/job/mern-stack-developer_1765771594_4728221878" class="text-gray-900 f-size-16 ft-wt-5">
                                                                MERN Stack Developer
                                                            </a>
                                                            <span class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                Freelance
                                                            </span>
                                                        </div>
                                                        <div class="body-font-4 text-gray-600 pt-2">
                                                            <span class="info-tools rt-mr-8">
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                Samoa
                                                            </span>
                                                            <span class="info-tools">
                                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375" stroke="#C5C9D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                500 - 2K Project Basis
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dec 15, 2025 38:12</td>
                                        <td class="text-danger-500">
                                            <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10"/>
                                                    <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Expired
                                            </div>
                                        </td>
                                        <td>
                                            <div class="db-job-btn-wrap d-flex justify-content-end">
                                                <a href="https://jobpilot.lomeyolabs.com/job/mern-stack-developer_1765771594_4728221878" class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                    <span class="button-text">View Details</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="rt-single-icon-box tw-gap-5">
                                                <div class="tw-w-[68px] tw-h-[68px]">
                                                    <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md" src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-06.png" alt="logo" draggable="false">
                                                </div>
                                                <div class="iconbox-content">
                                                    <div class="post-info2">
                                                        <div class="post-main-title">
                                                            <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771592_8348806881" class="text-gray-900 f-size-16 ft-wt-5">
                                                                Mid level Laravel Developer
                                                            </a>
                                                            <span class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                Contractual
                                                            </span>
                                                        </div>
                                                        <div class="body-font-4 text-gray-600 pt-2">
                                                            <span class="info-tools rt-mr-8">
                                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                Saint Vincent and the Grenadines
                                                            </span>
                                                            <span class="info-tools">
                                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375" stroke="#C5C9D6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                200 - 1K Monthly
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Dec 15, 2025 38:12</td>
                                        <td class="text-danger-500">
                                            <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10"/>
                                                    <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Expired
                                            </div>
                                        </td>
                                        <td>
                                            <div class="db-job-btn-wrap d-flex justify-content-end">
                                                <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771592_8348806881" class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                    <span class="button-text">View Details</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="dashboard-footer text-center body-font-4 text-gray-500">
        &copy; Jobpilot 2025 | All Rights Reserved
    </div>

    <!-- JavaScript -->
    <script>
        $(document).ready(function() {
            // Search box toggle
            $('#searchIcon, #mblSearchIcon').click(function() {
                const searchBox = $(this).closest('.n-header--bottom__right, .mbl-top').find('.togglesearch, .mblTogglesearch');
                searchBox.slideToggle(300, function() {
                    if ($(this).is(':visible')) {
                        $(this).find('.search-input').focus().addClass('glow');
                        setTimeout(() => {
                            $(this).find('.search-input').removeClass('glow');
                        }, 1000);
                    }
                });
            });

            // Mobile menu toggle
            $('.menu-click button').click(function() {
                $(this).find('span').toggleClass('active');
                $('.main-menu').toggleClass('active');
            });

            // Notification handling
            $('.notification-icon').click(function(e) {
                e.stopPropagation();
                $('.notification-bar').toggleClass('show');
                if ($('.notification-bar').hasClass('show')) {
                    $('.notification-bar').css({
                        'opacity': '1',
                        'visibility': 'visible',
                        'transform': 'translateY(0)'
                    });
                } else {
                    $('.notification-bar').css({
                        'opacity': '0',
                        'visibility': 'hidden',
                        'transform': 'translateY(-10px)'
                    });
                }
            });

            // Close notification when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('.notification-bar, .notification-icon').length) {
                    $('.notification-bar').removeClass('show').css({
                        'opacity': '0',
                        'visibility': 'hidden',
                        'transform': 'translateY(-10px)'
                    });
                }
            });

            // Mark all notifications as read
            $('.notification-header p').click(function(e) {
                e.preventDefault();
                $('.notification-list li').each(function(index) {
                    const item = $(this);
                    setTimeout(() => {
                        item.fadeOut(300, function() {
                            $(this).remove();
                            if (index === $('.notification-list li').length - 1) {
                                $('#unNotifications').fadeOut(300);
                            }
                        });
                    }, index * 100);
                });
            });

            // Profile dropdown
            $('.candidate-profile').click(function(e) {
                e.preventDefault();
                $(this).next('.dropdown-menu').toggle();
            });

            // Close dropdowns when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('.dropdown, .candidate-profile').length) {
                    $('.dropdown-menu').hide();
                }
            });

            // Table row hover effects
            $('.db-job-card-table tbody tr').hover(
                function() {
                    $(this).addClass('hovered');
                    $(this).find('.btn').addClass('pulse');
                },
                function() {
                    $(this).removeClass('hovered');
                    $(this).find('.btn').removeClass('pulse');
                }
            );

            // View job details with animation
            $('.db-job-btn-wrap .btn').click(function(e) {
                e.preventDefault();
                const $btn = $(this);
                const url = $btn.attr('href');
                
                // Add loading animation
                $btn.addClass('loading').prop('disabled', true);
                
                // Simulate loading and redirect
                setTimeout(() => {
                    window.location.href = url;
                }, 500);
            });

            // Sidebar toggle for mobile
            $('.sidebar-open-nav').click(function() {
                $('.d-sidebar').toggleClass('mobile-open');
                $(this).toggleClass('open');
                
                if ($(this).hasClass('open')) {
                    $(this).html('<i class="ph-x">✕</i>');
                } else {
                    $(this).html('<i class="ph-list">≡</i>');
                }
            });

            // Auto-hide sidebar on mobile when clicking outside
            $(document).click(function(e) {
                if ($(window).width() <= 992) {
                    if (!$(e.target).closest('.d-sidebar, .sidebar-open-nav').length && 
                        $('.d-sidebar').hasClass('mobile-open')) {
                        $('.d-sidebar').removeClass('mobile-open');
                        $('.sidebar-open-nav').removeClass('open').html('<i class="ph-list">≡</i>');
                    }
                }
            });

            // Smooth scrolling
            $('a[href^="#"]').click(function(e) {
                const href = $(this).attr('href');
                if (href !== '#' && href.startsWith('#')) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(href).offset().top - 100
                    }, 600);
                }
            });

            // Form submission animations
            $('form').submit(function(e) {
                const $form = $(this);
                const $submitBtn = $form.find('button[type="submit"], input[type="submit"]');
                
                if ($submitBtn.length) {
                    $submitBtn.addClass('loading').prop('disabled', true);
                    $submitBtn.html('<span class="spinner">Loading...</span>');
                }
            });

            // Add ripple effect to buttons
            $('.btn').click(function(e) {
                const $btn = $(this);
                const x = e.pageX - $btn.offset().left;
                const y = e.pageY - $btn.offset().top;
                
                $btn.append('<span class="ripple"></span>');
                
                const $ripple = $btn.find('.ripple').last();
                $ripple.css({
                    left: x + 'px',
                    top: y + 'px'
                });
                
                setTimeout(() => {
                    $ripple.remove();
                }, 600);
            });

            // Counter animation
            function animateCounter(element, target) {
                const $element = $(element);
                const current = parseInt($element.text());
                const increment = target > current ? 1 : -1;
                
                let timer = setInterval(function() {
                    const newValue = parseInt($element.text()) + increment;
                    $element.text(newValue);
                    
                    if (newValue === target) {
                        clearInterval(timer);
                    }
                }, 20);
            }

            // Initialize dashboard animations
            function initializeDashboard() {
                // Animate dashboard cards with delay
                $('.single-feature-box').each(function(index) {
                    $(this).css({
                        'animation-delay': (index * 0.1) + 's',
                        'opacity': '0'
                    }).animate({
                        opacity: 1
                    }, 500);
                });
                
                // Animate table rows
                $('.db-job-card-table tbody tr').each(function(index) {
                    $(this).css({
                        'animation-delay': (index * 0.1) + 's',
                        'opacity': '0'
                    });
                });
                
                // Trigger animations
                setTimeout(() => {
                    $('.single-feature-box').addClass('animated');
                    $('.db-job-card-table tbody tr').addClass('animated');
                }, 100);
            }

            // Call initialization
            initializeDashboard();

            // Global notification functions
            window.ReadNotification = function() {
                $('.notification-list li').each(function(index) {
                    const item = $(this);
                    setTimeout(() => {
                        item.fadeOut(300, function() {
                            $(this).remove();
                            if (index === $('.notification-list li').length - 1) {
                                $('#unNotifications').fadeOut(300);
                            }
                        });
                    }, index * 100);
                });
            }

            window.readSingleNotification = function(url, id) {
                const notificationItem = $('[onclick*="' + id + '"]').closest('li');
                
                // Animation
                notificationItem.fadeOut(300, function() {
                    $(this).remove();
                    if ($('.notification-list li').length === 0) {
                        $('#unNotifications').fadeOut(300);
                    }
                });
                
                // Redirect after animation
                setTimeout(() => {
                    window.location.href = url;
                }, 300);
            }
        });
    </script>
</body>
</html>