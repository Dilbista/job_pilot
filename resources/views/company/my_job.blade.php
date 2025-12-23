@extends('layouts.master')
@section('content')


<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f5f7fb;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Header Styles */
       
        .my-job {
            background-color: #1a73e8;
            color: white;
            padding: 6px 15px;
            border-radius: 4px;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 30px;
        }
        
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 25px;
        }
        
        /* Jobs Section */
        .jobs-section {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .filters-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .filters-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .filter-label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }
        
        .filter-dropdown {
            position: relative;
        }
        
        .filter-dropdown select {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: white;
            font-size: 14px;
            color: #333;
            cursor: pointer;
            appearance: none;
            padding-right: 40px;
            min-width: 120px;
        }
        
        .filter-dropdown:after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #777;
            font-size: 12px;
        }
        
        /* Jobs Table */
        .jobs-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .jobs-table thead {
            background-color: #f8fafc;
            border-bottom: 2px solid #eee;
        }
        
        .jobs-table th {
            padding: 16px 20px;
            text-align: left;
            font-weight: 600;
            color: #555;
            font-size: 15px;
        }
        
        .jobs-table tbody tr {
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s;
        }
        
        .jobs-table tbody tr:hover {
            background-color: #f9f9f9;
        }
        
        .jobs-table td {
            padding: 20px;
            vertical-align: middle;
        }
        
        .job-title {
            font-weight: 600;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }
        
        .job-type {
            display: inline-block;
            background-color: #e8f0fe;
            color: #1a73e8;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
            margin-right: 8px;
        }
        
        .job-time {
            color: #777;
            font-size: 13px;
            display: inline-block;
        }
        
        .job-status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            min-width: 70px;
            text-align: center;
        }
        
        .status-active {
            background-color: #e7f7ef;
            color: #0a9c4d;
        }
        
        .status-expire {
            background-color: #feefee;
            color: #e53935;
        }
        .status-pending {
            background-color: #feefee;
            color: #d0f02f;
        }
        
        .applications-count {
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }
        
        .view-applications {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 14px;
        }
        
        .view-applications:hover {
            background-color: #0d5bb5;
        }
        
        /* Responsive Styles */
        @media (max-width: 1200px) {
            .container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
                margin-bottom: 20px;
                padding: 20px;
            }
            
            .sidebar-menu {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }
            
            .sidebar-menu a {
                border-left: none;
                border-radius: 6px;
                padding: 10px 15px;
            }
            
            .sidebar-menu a:hover {
                border-left: none;
            }
            
            .sidebar-divider {
                display: none;
            }
        }
        
        @media (max-width: 992px) {
            .jobs-table {
                display: block;
                overflow-x: auto;
            }
            
            .nav-links {
                display: none;
            }
            
            .filters-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .filters-left {
                flex-wrap: wrap;
            }
        }
        
        @media (max-width: 768px) {
            .header-search {
                max-width: 100%;
            }
            
            .main-content {
                padding: 20px 15px;
            }
            
            .jobs-section {
                padding: 20px;
            }
            
            .jobs-table td, .jobs-table th {
                padding: 12px 15px;
            }
        }
        
        @media (max-width: 576px) {
            .jobs-table {
                font-size: 14px;
            }
            
            .view-applications {
                padding: 8px 15px;
                font-size: 13px;
            }
            
            .job-title {
                font-size: 15px;
            }
        }
    </style>

    <!-- Main Container -->
    <div class="container">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        
        <!-- Main Content -->
        <div class="main-content">
            <h1 class="page-title">My Jobs(<span>100</span>)</h1>
            
            <!-- Jobs Table Section -->
            <div class="jobs-section">
                <div class="filters-section">
                    <div class="filters-left">
                        <div class="filter-label">Job Status</div>
                        <div class="filter-dropdown">
                            <select>
                                <option value="all" selected>All</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="expired">Expired</option>
                            </select>
                        </div>
                        <div class="filter-label">Apply On</div>
                        <div class="filter-dropdown">
                            <select>
                                <option value="all" selected>All</option>
                                <option value="app">App</option>
                                <option value="email">Email</option>
                                <option value="custom">Custom URL</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <table class="jobs-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Status</th>
                            <th>Applications</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Job Row 1 -->
                        <tr>
                            <td>
                                <div class="job-title">Software Engineer</div>
                                <div>
                                    <span class="job-type">Full Time</span>
                                    <span class="job-time">2w 1d Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-active">Active</span>
                            </td>
                            <td>
                                <span class="applications-count">0 Application</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                        
                        <!-- Job Row 2 -->
                        <tr>
                            <td>
                                <div class="job-title">Software Engineer</div>
                                <div>
                                    <span class="job-type">Full Time</span>
                                    <span class="job-time">2w 1d Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-active">Active</span>
                            </td>
                            <td>
                                <span class="applications-count">0 Application</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                        
                        <!-- Job Row 3 -->
                        <tr>
                            <td>
                                <div class="job-title">React Developer - SSSS</div>
                                <div>
                                    <span class="job-type">Freelance</span>
                                    <span class="job-time">1w 1d Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-pending">Job Expire</span>
                            </td>
                            <td>
                                <span class="applications-count">0 Applications</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                        
                        <!-- Job Row 4 -->
                        <tr>
                            <td>
                                <div class="job-title">React Developer</div>
                                <div>
                                    <span class="job-type">Freelance</span>
                                    <span class="job-time">1mo 1w Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-expire">Job Expire</span>
                            </td>
                            <td>
                                <span class="applications-count">3 Applications</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="job-title">UI/UX Developer</div>
                                <div>
                                    <span class="job-type">Freelance</span>
                                    <span class="job-time">1mo 1w Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-active">Job Expire</span>
                            </td>
                            <td>
                                <span class="applications-count">3 Applications</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="job-title">Mobile App Developer</div>
                                <div>
                                    <span class="job-type">Freelance</span>
                                    <span class="job-time">1mo 1w Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-expire">Job Expire</span>
                            </td>
                            <td>
                                <span class="applications-count">3 Applications</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="job-title">Web Developer</div>
                                <div>
                                    <span class="job-type">Freelance</span>
                                    <span class="job-time">1mo 1w Remaining</span>
                                </div>
                            </td>
                            <td>
                                <span class="job-status status-active">Job Expire</span>
                            </td>
                            <td>
                                <span class="applications-count">3 Applications</span>
                            </td>
                            <td>
                                <button class="view-applications">View Applications</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
    <script>
        // View Applications button functionality
        const viewButtons = document.querySelectorAll('.view-applications');
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const jobTitle = this.closest('tr').querySelector('.job-title').textContent;
                alert(`Viewing applications for: ${jobTitle}`);
            });
        });
        
        // Chat button functionality
        document.querySelector('.chat-button').addEventListener('click', function() {
            alert('Opening chat interface...');
        });
        
        // Sidebar menu active state
        const menuItems = document.querySelectorAll('.sidebar-menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                if(!this.classList.contains('active')) {
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
        
        // Make table rows clickable
        const tableRows = document.querySelectorAll('.jobs-table tbody tr');
        tableRows.forEach(row => {
            row.addEventListener('click', function(e) {
                if(!e.target.classList.contains('view-applications')) {
                    const jobTitle = this.querySelector('.job-title').textContent;
                    alert(`Job details: ${jobTitle}`);
                }
            });
        });
        
        // Filter dropdown functionality
        const filterSelects = document.querySelectorAll('.filter-dropdown select');
        filterSelects.forEach(select => {
            select.addEventListener('change', function() {
                console.log(`Filter changed: ${this.value}`);
            });
        });
    </script>

    @endsection
</body>
</html>