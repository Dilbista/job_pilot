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
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Main Layout */
        .dashboard-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        /* Main Content */
        .dashboard-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 30px;
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            /* margin-left: 30px; */
        }

        
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 25px;
            padding: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            
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
            margin-left: 400px;
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
            border: 1.5px solid rgb(146, 172, 249);
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
            background-color: #f2f4f0;
            color: #d0f02f;
        }
        
        .applications-count {
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }
        
        
         .action-btn-table {
            background-color:rgb(237, 243, 249); 
            color: rgb(7, 7, 130);
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }

        .action-btn-table a {
            color:rgb(7, 7, 130);
            text-decoration: none;
        }
        .action-btn-table a:hover {
            color:white;
            text-decoration: none;
        }

        .action-btn-table:hover {
            background-color: #2a75ff;
            color: white;
        }

        /* Dropdown Menu Styles - FIXED */
        .job-actions {
            position: relative;
            display: inline-block;
            margin-left: 10px;
        }

        .actions-dropdown {
            position: relative;
            display: inline-block;
        }

        .actions-btn {
            background: none;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--secondary);
            transition: all 0.3s;
        }

        .actions-btn:hover {
            background-color: #f1f5f9;
            color: var(--dark);
        }

        .dropdownmenu {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            min-width: 200px;
            z-index: 100;
            display: none;
            overflow: hidden;
        }

        .dropdownmenu.show {
            display: block;
        }

        .dropdownitem {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            text-decoration: none;
            color: var(--dark);
            transition: background-color 0.3s;
            border-bottom: 1px solid #f1f5f9;
            cursor: pointer;
        }

        .dropdownitem:last-child {
            border-bottom: none;
        }

        .dropdownitem:hover {
            background-color: #f8fafc;
        }

        .dropdownitem i {
            width: 20px;
            margin-right: 0.8rem;
            color: black;
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
         <div class="dashboard-layout">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        
        <!-- Main Content -->
        <div class="dashboard-content">
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
                            <th>Job</th>
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown1')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown1">
                                            <a href="#" class="dropdownitem">
                                            <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown2')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown2">
                                            <a href="#" class="dropdownitem">
                                               <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                <span class="job-status status-pending">Job Pending</span>
                            </td>
                            <td>
                                <span class="applications-count">0 Applications</span>
                            </td>
                            <td>
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown3')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown3">
                                            <a href="#" class="dropdownitem">
                                               <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown4')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown4">
                                            <a href="#" class="dropdownitem">
                                               <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                <span class="job-status status-active">Job Active</span>
                            </td>
                            <td>
                                <span class="applications-count">3 Applications</span>
                            </td>
                           <td>
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown5')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown5">
                                            <a href="#" class="dropdownitem">
                                               <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown6')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown6">
                                            <a href="#" class="dropdownitem">
                                               <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                <span class="job-status status-active">Job Active</span>
                            </td>
                            <td>
                                <span class="applications-count">3 Applications</span>
                            </td>
                           <td>
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown7')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown7">
                                            <a href="#" class="dropdownitem">
                                               <i class="fas fa-eye"></i></i> View Details
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-clock"></i> Make It Expire
                                            </a>
                                            <a href="{{ route('company.createJob') }}" class="dropdownitem">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="{{ route('company.promoteJob') }}" class="dropdownitem">
                                                <i class="fas fa-bullhorn"></i> Promote
                                            </a>
                                            <a href="#" class="dropdownitem">
                                                <i class="fas fa-copy"></i> Clone
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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

          // Toggle dropdown menus - FIXED
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            const isVisible = dropdown.classList.contains('show');
            
            // Close all other dropdowns
            document.querySelectorAll('.dropdownmenu').forEach(menu => {
                menu.classList.remove('show');
            });
            
            // Toggle current dropdown
            if (!isVisible) {
                dropdown.classList.add('show');
            }
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function closeDropdown(e) {
                if (!dropdown.contains(e.target) && !e.target.closest('.actions-btn')) {
                    dropdown.classList.remove('show');
                    document.removeEventListener('click', closeDropdown);
                }
            });
        }
    </script>

    @endsection
