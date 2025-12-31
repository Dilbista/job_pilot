@extends('layouts.master')
@section('content')
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

        /* body {
                    background-color: #f5f7fb;
                    color: var(--dark);
                    display: flex;
                    min-height: 100vh;
                } */

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
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

        .dashboard-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
        }

        .content-header h1 {
            font-size: 24px;
            color: #1e293b;
            font-weight: 700;
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


        /* Welcome Section */
        .welcome-section {
            /* background: linear-gradient(100deg, var(--primary), var(--secondary)); */
            background-color: white;
            color: black;
            padding: 25px;
            border-radius: var(--border-radius);
            margin-bottom: 25px;
            box-shadow: var(--shadow);
        }

        .welcome-section h1 {
            font-size: 28px;
            margin-bottom: 8px;
            text-align: center;
        }

        .welcome-section p {
            opacity: 0.9;
            font-size: 16px;
            text-align: center;
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
            padding: 25px;
        }

        .stat-card {
            background: white;
            width: 320px;
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

        .plan-feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(26, 115, 232, 0.2);
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
            background-color: #f8f9fa;
            ;
            color: rgb(8, 8, 163);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
            margin-left: 45px;
        }

        .upgrade-btn:hover {
            color: #2a75ff;
        }

        button a {
            text-decoration: none;
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
        tbody tr:hover{
            border: 1.5px solid rgb(146, 172, 249);
            background-color: white;
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
            background-color: rgb(237, 243, 249);
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
            color: rgb(7, 7, 130);
            text-decoration: none;
        }

        .action-btn-table a:hover {
            color: white;
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
    <!-- Main Content -->
       <div class="container">
    <div class="dashboard-layout">
        @include('layouts.sidebar')
        <!-- Dashboard Content -->
        <div id="dashboard-content" class="dashboard-content active">
            <!-- Welcome Section -->
            <div class="welcome-section">
                <h1>Hello, Company</h1>
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
                <button class="upgrade-btn"><a href="{{ route('company.pricing') }}">Upgrade Plan</a></button>
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown1')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown1">
                                            <a href="{{ route('company.viewDetails') }}" class="dropdownitem">
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown2')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown2">
                                            <a href="{{ route('company.viewDetails') }}" class="dropdownitem">
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
                                <button class="action-btn-table">
                                    <a href="{{ route('company.applicationView') }}">View Applications</a>
                                </button>
                                <div class="job-actions">
                                    <div class="actions-dropdown">
                                        <button class="actions-btn" onclick="toggleDropdown('dropdown3')">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdownmenu" id="dropdown3">
                                            <a href="{{ route('company.viewDetails') }}" class="dropdownitem">
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
                <a href="{{ route('company.myJobs') }}"
                    style="margin-left:780px; text-decoration: none; color: rgb(50, 50, 251);"> View all →</a>
            </div>
        </div>
    </div>
</div>
    <script>
        // Navigation between dashboard and post job
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
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
        document.getElementById('post-job-form').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Job posted successfully!');
        });

        // Cancel button
        document.querySelector('.cancel-btn').addEventListener('click', function () {
            if (confirm('Are you sure you want to cancel? All unsaved changes will be lost.')) {
                document.querySelector('.nav-link[data-page="dashboard"]').click();
            }
        });

        // Benefit selection
        document.querySelectorAll('.benefit-item').forEach(item => {
            item.addEventListener('click', function () {
                this.classList.toggle('selected');
            });
        });

        // Apply option selection
        document.querySelectorAll('.apply-option').forEach(option => {
            option.addEventListener('click', function () {
                document.querySelectorAll('.apply-option').forEach(item => {
                    item.classList.remove('selected');
                });
                this.classList.add('selected');
            });
        });

        // Add tag functionality
        document.querySelectorAll('.tags-input input').forEach(input => {
            input.addEventListener('keypress', function (e) {
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
                    tag.querySelector('.tag-remove').addEventListener('click', function () {
                        tag.remove();
                    });
                }
            });
        });

        // Add question button
        document.querySelectorAll('.add-question-btn').forEach(button => {
            button.addEventListener('click', function () {
                if (this.textContent.includes('Add Question')) {
                    alert('New question added!');
                } else if (this.textContent.includes('Create New Benefit')) {
                    const benefitName = prompt('Enter new benefit name:');
                    if (benefitName) {
                        const benefitGrid = document.querySelector('.benefits-grid');
                        const newBenefit = document.createElement('div');
                        newBenefit.className = 'benefit-item';
                        newBenefit.textContent = benefitName;
                        newBenefit.addEventListener('click', function () {
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
            button.addEventListener('click', function () {
                alert('Viewing applications for this job');
            });
        });

        // Upgrade plan button
        document.querySelector('.upgrade-btn').addEventListener('click', function () {
            alert('Redirecting to upgrade plan page...');
        });

        // Chat button functionality
        document.querySelector('.chat-button').addEventListener('click', function () {
            alert('Chat with us feature would open here!');
        });

        // Search box functionality
        document.querySelector('.search-box input').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                alert(`Searching for jobs with keyword: "${this.value}"`);
            }
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
</body>

</html>