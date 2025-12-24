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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
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

        .col-lg-9,
        .col-xl-4,
        .col-lg-6,
        .col-md-6 {
            padding: 0 15px;
        }

        .col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%;

        }

        .col-lg-9 {
            margin-top: -25px;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-xl-4 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }

        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-6 {
            flex: 0 0 33%;
            max-width: 38%;
        }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, var(--primary-500) 0%, var(--primary-600) 100%);
            /* color: white; */
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

        .n-header--top {
            background: rgb(44, 80, 242);
            color: black;
        }

        .n-header--top,
        .n-header--bottom {
            padding: 11px 0;
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

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
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
            background: ffffff;
            border: none;
            border-radius: 12px;
            padding: 25px;
            height: fit-content;
            position: sticky;
            top: 143px;
        }

        .d-sidebar h3 {
            font-size: 15px;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 20px;
        }

        .sidebar-menu {
            font-size: 10px;
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 8px;
            animation: slideInLeft 0.5s ease-out;
            animation-fill-mode: both;
        }

        .sidebar-menu li:nth-child(1) {
            animation-delay: 0.1s;
        }

        .sidebar-menu li:nth-child(2) {
            animation-delay: 0.2s;
        }

        .sidebar-menu li:nth-child(3) {
            animation-delay: 0.3s;
        }

        .sidebar-menu li:nth-child(4) {
            animation-delay: 0.4s;
        }

        .sidebar-menu li:nth-child(5) {
            animation-delay: 0.5s;
        }

        .sidebar-menu li:nth-child(6) {
            animation-delay: 0.6s;
        }

        .sidebar-menu li:nth-child(7) {
            animation-delay: 0.7s;
        }

        .sidebar-menu li:nth-child(8) {
            animation-delay: 0.8s;
        }

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
            padding: 5px 12px;
            color: var(--gray-600);
            text-decoration: none;
            border-radius: 1px;
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
            height: fit-content;
            background: white;
            padding: 25px;
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
            font-size: 16px;
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
            padding: 15px;
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
            font-size: 20px;
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
            font-size: 12px;
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
            width: 120%;
            border-collapse: collapse;
        }

        .db-job-card-table thead {
            background: #e0e0e045;
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

        .db-job-card-table tbody tr:nth-child(1) {
            animation-delay: 0.1s;
        }

        .db-job-card-table tbody tr:nth-child(2) {
            animation-delay: 0.2s;
        }

        .db-job-card-table tbody tr:nth-child(3) {
            animation-delay: 0.3s;
        }

        .db-job-card-table tbody tr:nth-child(4) {
            animation-delay: 0.4s;
        }

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
            padding: 8px 15px;
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

        table {
            border-collapse: separate;
            border-spacing: 0;
        }

        tr {
            height: 40px;
            transition: border 0.2s ease, background-color 0.2s ease;
        }

        tr:hover {
            border: 2px solid #2563eb;
            /* blue */
        }


        .tw-w-\[68px\],
        .tw-h-\[68px\] {
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
            padding: 5px 19px;
            font-size: 10px;
            font-weight: 500;
            border-radius: 15px;
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

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
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
        .togglesearch,
        .mblTogglesearch {
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

            .col-lg-3,
            .col-lg-9 {
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
        .tw-px-0 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .tw-mb-3 {
            margin-bottom: 12px;
        }

        .tw-ml-2 {
            margin-left: 8px;
        }

        .tw-mt-6 {
            margin-top: 24px;
        }

        .tw-gap-2 {
            gap: 8px;
        }

        .tw-gap-5 {
            gap: 12px;
        }

        .tw-gap-6 {
            gap: 24px;
        }

        .tw-ps-3 {
            padding-left: 12px;
        }

        .tw-pe-3 {
            padding-right: 12px;
        }

        .tw-flex {
            display: flex;
        }

        .tw-items-center {
            align-items: center;
        }

        .tw-justify-between {
            justify-content: space-between;
        }

        .tw-text-white {
            color: white;
        }

        .tw-text-2xl {
            font-size: 24px;
        }

        .tw-font-semibold {
            font-weight: 600;
        }

        .tw-text-\[#18191C\] {
            color: #18191C;
        }

        .tw-bg-white {
            background: white;
        }

        .tw-rounded-md {
            border-radius: 8px;
        }

        .tw-relative {
            position: relative;
        }

        .tw-w-full {
            width: 100%;
        }

        .tw-justify-end {
            justify-content: flex-end;
        }

        .tw-gap-1\.5 {
            gap: 6px;
        }

        .tw-cursor-pointer {
            cursor: pointer;
        }

        .tw-hidden {
            display: none;
        }

        .tw-inline-flex {
            display: inline-flex;
        }

        .pointer {
            cursor: pointer;
        }

        .relative {
            position: relative;
        }

        .position-relative {
            position: relative;
        }

        .position-absolute {
            position: absolute;
        }

        .d-none {
            display: none;
        }

        .d-block {
            display: block;
        }

        .d-lg-block {
            display: block;
        }

        .d-lg-none {
            display: none;
        }

        .text-center {
            text-align: center;
        }

        .bg-primary-500 {
            background: var(--primary-500);
        }

        .rounded {
            border-radius: 8px;
        }

        .shadow {
            box-shadow: var(--shadow-md);
        }

        .w-100 {
            width: 100%;
        }

        .w-sm-75 {
            width: 75%;
        }

        .p-3 {
            padding: 12px;
        }

        .p-2 {
            padding: 8px;
        }

        .py-md-3 {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .px-md-5 {
            padding-left: 20px;
            padding-right: 20px;
        }

        .mx-width-300 {
            max-width: 350px;
        }

        .list-unstyled {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .bg-gray-50 {
            background: var(--gray-50);
        }

        .text-gray-500 {
            color: var(--gray-500);
        }

        .text-gray-900 {
            color: var(--gray-900);
        }

        .text-gray-600 {
            color: var(--gray-600);
        }

        .hover\:text-primary-500:hover {
            color: var(--primary-500);
        }

        .f-size-16 {
            font-size: 13px;
        }

        .f-size-20 {
            font-size: 20px;
        }

        .ft-wt-5 {
            font-weight: 500;
        }

        .body-font-4 {
            font-size: 14px;
        }

        .rt-mb-15 {
            margin-bottom: 15px;
        }

        .rt-ml-8 {
            margin-left: 8px;
        }

        .rt-mr-8 {
            margin-right: 8px;
        }

        .pt-2 {
            padding-top: 8px;
        }

        .lh-1 {
            line-height: 1;
        }

        .m-0 {
            margin: 0;
        }

        .underCs {
            text-decoration: underline;
            cursor: pointer;
        }

        .devider {
            height: 1px;
            background: var(--gray-100);
            margin: 15px 0;
        }

        .body-font-1 {
            font-size: 14px;
        }

        .m-2 {
            margin: 8px;
        }
    </style>
</head>
