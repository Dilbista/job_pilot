@extends('layouts.master')
@section('content')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        .container {
            /* max-width: 1300px; */
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

        /* Post Job Form */
        .post-job-form {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin-bottom: 40px;
        }

        .form-header {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f1f5f9;
        }

        .form-header h1 {
            font-size: 28px;
            color: #1e293b;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #64748b;
            font-size: 16px;
        }

        .form-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e2e8f0;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 12px;
            color: #2563eb;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #475569;
        }

        .form-label span {
            color: #ef4444;
        }

        .form-input,
        .form-select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            outline: none;
            transition: border-color 0.3s ease;
            background: white;
        }

        .form-input:focus,
        .form-select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-input::placeholder {
            color: #94a3b8;
        }

        /* Tags Input */
        .tags-container {
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 10px;
            min-height: 46px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
        }

        .tag-item {
            background: #e0f2fe;
            color: #0369a1;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .tag-remove {
            background: none;
            border: none;
            color: #0369a1;
            cursor: pointer;
            font-size: 14px;
        }

        .tag-input {
            flex: 1;
            border: none;
            outline: none;
            padding: 8px;
            font-size: 15px;
            min-width: 150px;
        }

        .tags-hint {
            font-size: 13px;
            color: #64748b;
            margin-top: 8px;
        }

        /* Salary Range */
        .salary-range-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .salary-input-group {
            flex: 1;
        }

        .salary-input {
            position: relative;
        }

        .currency-symbol {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            font-weight: 500;
        }

        .salary-input input {
            padding-left: 30px;
        }

        .salary-type-select {
            min-width: 150px;
        }

        /* Checkbox and Radio Styles */
        .checkbox-group,
        .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .checkbox-input,
        .radio-input {
            width: 18px;
            height: 18px;
            margin-right: 10px;
            cursor: pointer;
            accent-color: #2563eb;
        }

        .checkbox-label,
        .radio-label {
            color: #475569;
            cursor: pointer;
            font-weight: 500;
        }

        /* Job Period Options */
        .job-period-options {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .job-period-option {
            flex: 1;
            min-width: 150px;
        }

        .job-period-option input {
            width: 100%;
        }

        /* Location Input */
        .location-input-container {
            position: relative;
        }

        .location-hint {
            font-size: 13px;
            color: #64748b;
            margin-top: 8px;
        }

        /* Map */
        .map-box {
            height: 260px;
            background: #e9ecef;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            margin: 15px 0px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }

        .map-box iframe {
            width: 100%;
            height: 100%;
        }


        /* Benefits Section */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .benefit-item {
            background: #f1f5f9;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            color: #475569;
        }

        .benefit-item:hover {
            background: #e2e8f0;
        }

        .benefit-item.selected {
            background: #dbeafe;
            border-color: #2563eb;
            color: #1e40af;
        }

        .create-benefit-btn {
            background: #10b981;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 10px;
        }

        .create-benefit-btn:hover {
            background: #0da271;
        }

        /* Skills Section */
        .skills-input-container {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .skills-input {
            flex: 1;
        }

        .add-skill-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .add-skill-btn:hover {
            background: #1d4ed8;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-tag {
            background: #e0f2fe;
            color: #0369a1;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remove-skill {
            background: none;
            border: none;
            color: #0369a1;
            cursor: pointer;
            font-size: 14px;
        }

        /* Job Description Editor */
        .editor-container {
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            overflow: hidden;
        }

        .editor-toolbar {
            display: flex;
            background: #f1f5f9;
            padding: 10px 15px;
            border-bottom: 1px solid #cbd5e1;
            flex-wrap: wrap;
            gap: 5px;
        }

        .editor-btn {
            background: white;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #475569;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .editor-btn:hover {
            background: #f8fafc;
            border-color: #94a3b8;
        }

        .editor-textarea {
            width: 100%;
            min-height: 200px;
            padding: 20px;
            border: none;
            outline: none;
            font-size: 15px;
            line-height: 1.6;
            color: #333;
            resize: vertical;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Screening Questions */
        .screening-options {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .screening-option {
            flex: 1;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .screening-option:hover {
            border-color: #2563eb;
            background: #f0f7ff;
        }

        .screening-option.selected {
            border-color: #2563eb;
            background: #f0f7ff;
        }

        .screening-option-icon {
            font-size: 24px;
            color: #2563eb;
            margin-bottom: 10px;
        }

        .screening-option-title {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .screening-option-desc {
            font-size: 14px;
            color: #64748b;
        }

        .add-question-section {
            background: #f8fafc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .question-textarea {
            width: 100%;
            min-height: 100px;
            padding: 15px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 15px;
            resize: vertical;
        }

        .add-question-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .add-question-btn:hover {
            background: #1d4ed8;
        }

        .selected-questions-list {
            background: #f8fafc;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .selected-question-item {
            background: white;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .remove-question-btn {
            background: #fee2e2;
            color: #991b1b;
            border: none;
            padding: 5px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
        }

        /* Apply Platform Options */
        .platform-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .platform-option {
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .platform-option:hover {
            border-color: #2563eb;
            background: #f0f7ff;
        }

        .platform-option.selected {
            border-color: #2563eb;
            background: #f0f7ff;
        }

        .platform-icon {
            font-size: 32px;
            color: #2563eb;
            margin-bottom: 15px;
        }

        .platform-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 10px;
        }

        .platform-desc {
            font-size: 14px;
            color: #64748b;
            line-height: 1.5;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .post-job-submit-btn {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .post-job-submit-btn:hover {
            background-color: #0d5bb5;
        }

        .cancel-btn {
            background-color: #f5f7fb;
            color: #666;
            border: 1px solid #ddd;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .cancel-btn:hover {
            background-color: #eaeaea;
        }

        /* Extra Inputs */
        .platform-extra {
            display: none;
            margin-top: 20px;
        }

        .platform-extra label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }

        .platform-extra input {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #d1d5db;
        }

        @media (max-width: 992px) {

            .form-grid,
            .benefits-grid,
            .platform-options {
                grid-template-columns: 1fr;
            }

            .salary-range-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .screening-options {
                flex-direction: column;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .top-nav {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .top-nav-left {
                flex-wrap: wrap;
                gap: 15px;
            }

            .top-nav-right {
                flex-wrap: wrap;
                gap: 15px;
            }

            .main-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .search-post-container {
                width: 100%;
            }

            .search-container {
                width: 100%;
            }

            .search-container input {
                width: 100%;
            }

            .post-job-btn {
                width: 100%;
            }

            .post-job-form {
                padding: 20px;
            }


        }
    </style>

    <div class="container">
        <!-- Dashboard Layout -->
        <div class="dashboard-layout">
            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="dashboard-content">
                <!-- Post Job Form -->
                <form class="post-job-form" id="postJobForm">
                    <div class="form-header">
                        <h1>Post a Job</h1>
                    </div>

                    <!-- Job Basic Information -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-info-circle"></i> Job Information
                        </h2>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Job Title <span>*</span></label>
                                <input type="text" class="form-input" placeholder="Job Title" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Job Category <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="">Design/Creative</option>
                                    <option value="development">Development</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="sales">Sales</option>
                                    <option value="customer-service">Customer Service</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Job Role <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="">Administrator</option>
                                    <option value="manager">Manager</option>
                                    <option value="senior">Senior</option>
                                    <option value="junior">Junior</option>
                                    <option value="intern">Intern</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Profession <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="">Select Profession</option>
                                    <option value="web-developer">Web Developer</option>
                                    <option value="graphic-designer">Graphic Designer</option>
                                    <option value="project-manager">Project Manager</option>
                                    <option value="data-analyst">Data Analyst</option>
                                    <option value="content-writer">Content Writer</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Tags (Search or write tag and hit enter)</label>
                            <div class="tags-container" id="tagsContainer">
                                <span class="tag-item">
                                    Laravel
                                    <button type="button" class="tag-remove">&times;</button>
                                </span>
                                <span class="tag-item">
                                    PHP
                                    <button type="button" class="tag-remove">&times;</button>
                                </span>
                                <input type="text" class="tag-input" placeholder="Add a tag" id="tagInput">
                            </div>
                            <div class="tags-hint">Press Enter to add a tag</div>
                        </div>
                    </div>

                    <!-- Salary Information -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-money-bill-wave"></i> Salary Information
                        </h2>

                        <div class="form-group">
                            <label class="form-label">Salary Range</label>
                            <div class="salary-range-container">
                                <div class="salary-input-group">
                                    <label class="form-label">Minimum Salary</label>
                                    <div class="salary-input">
                                        <span class="currency-symbol">£</span>
                                        <input type="number" class="form-input" placeholder="50.00" step="0.01">
                                    </div>
                                </div>

                                <div class="salary-input-group">
                                    <label class="form-label">Maximum Salary</label>
                                    <div class="salary-input">
                                        <span class="currency-symbol">£</span>
                                        <input type="number" class="form-input" placeholder="100.00" step="0.01">
                                    </div>
                                </div>

                                <div class="salary-input-group">
                                    <label class="form-label">Salary Type <span>*</span></label>
                                    <select class="form-select salary-type-select">
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                        <option value="hourly">Hourly</option>
                                        <option value="weekly">Weekly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advance Information -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-chart-line"></i> Advance Information
                        </h2>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Education <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="high-school">High School</option>
                                    <option value="bachelor">Bachelor's Degree</option>
                                    <option value="master">Master's Degree</option>
                                    <option value="phd">PhD</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Experience <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="fresher">Fresher</option>
                                    <option value="1-2">1-2 Years</option>
                                    <option value="3-5">3-5 Years</option>
                                    <option value="5+">5+ Years</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Job Type <span>*</span></label>
                                <select class="form-select" required>
                                    <option value="full-time">Full Time</option>
                                    <option value="part-time">Part Time</option>
                                    <option value="contract">Contract</option>
                                    <option value="internship">Internship</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Total Vacancies <span>*</span></label>
                                <input type="number" class="form-input" value="1" min="1" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Deadline Expired <span>*</span></label>
                                <input type="date" class="form-input" required>
                                <div class="location-hint">Maximum deadline limit: 30 Days</div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Job Period</label>
                                <input type="date" class="form-input" required>
                                {{-- <div class="job-period-options">
                                    <div class="job-period-option">
                                        <input type="number" class="form-input" placeholder="Months" min="1">
                                    </div>
                                    <div class="job-period-option">
                                        <input type="number" class="form-input" placeholder="Years" min="1">
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Location <span>*</span> (Click to add a pointer)</label>
                            <div class="location-input-container">
                                <input type="text" class="form-input" placeholder="Enter city name" required>
                            </div>
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps?q=Kathmandu,Nepal&output=embed" width="100%"
                                    height="250" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>

                        <div class="checkbox-group">
                            <input type="checkbox" id="remotePosition" class="checkbox-input" checked>
                            <label for="remotePosition" class="checkbox-label">Fully Remote Position - Worldwide</label>
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-gift"></i> Benefits
                        </h2>

                        <div class="benefits-grid" id="benefitsGrid">
                            <div class="benefit-item selected">4 day workweek</div>
                            <div class="benefit-item">400k</div>
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

                        <button type="button" class="create-benefit-btn">
                            <i class="fas fa-plus"></i> Create New Benefit
                        </button>
                    </div>

                    <!-- Skills -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-tools"></i> Skills
                        </h2>

                        <div class="skills-input-container">
                            <div class="skills-input">
                                <input type="text" class="form-input" id="skillInput" placeholder="Add a skill">
                            </div>
                            <button type="button" class="add-skill-btn" id="addSkillBtn">Add</button>
                        </div>

                        <div class="skills-list" id="skillsList">
                            <div class="skill-tag">
                                React
                                <button type="button" class="remove-skill">&times;</button>
                            </div>
                            <div class="skill-tag">
                                JavaScript
                                <button type="button" class="remove-skill">&times;</button>
                            </div>
                            <div class="skill-tag">
                                HTML/CSS
                                <button type="button" class="remove-skill">&times;</button>
                            </div>
                        </div>
                    </div>

                    <!-- Job Description -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-file-alt"></i> Job Description <span>*</span>
                        </h2>

                        <div class="editor-container">
                            <div class="editor-toolbar">
                                <button type="button" class="editor-btn" title="Paragraph">P</button>
                                <button type="button" class="editor-btn" title="Bold"><b>B</b></button>
                                <button type="button" class="editor-btn" title="Italic"><i>I</i></button>
                                <button type="button" class="editor-btn" title="Ordered List">O</button>
                                <button type="button" class="editor-btn" title="Unordered List">::</button>
                                <button type="button" class="editor-btn" title="Insert Image"><i
                                        class="fas fa-image"></i></button>
                                <button type="button" class="editor-btn" title="Insert Link"><i
                                        class="fas fa-link"></i></button>
                            </div>

                            <textarea class="editor-textarea" id="jobDescription"
                                placeholder="Enter job description here..." required></textarea>
                        </div>
                    </div>

                    <!-- Screening Questions -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-question-circle"></i> Add Screening Questions
                        </h2>

                        <div class="screening-options">
                            <div class="screening-option selected" id="createNewQuestion">
                                <div class="screening-option-icon">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                                <div class="screening-option-title">Create new screening question</div>
                                <div class="screening-option-desc">Create a custom question for this job</div>
                            </div>

                            <div class="screening-option" id="chooseExistingQuestion">
                                <div class="screening-option-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                <div class="screening-option-title">Choose from existing question</div>
                                <div class="screening-option-desc">Select from your previously created questions</div>
                            </div>
                        </div>

                        <div id="newQuestionSection">
                            <div class="add-question-section">
                                <textarea class="question-textarea" id="questionTextarea"
                                    placeholder="Enter your screening question here..."></textarea>

                                <div class="checkbox-group">
                                    <input type="checkbox" id="saveForLater" class="checkbox-input">
                                    <label for="saveForLater" class="checkbox-label">Save for later</label>
                                </div>

                                <div class="checkbox-group">
                                    <input type="checkbox" id="questionRequired" class="checkbox-input" checked>
                                    <label for="questionRequired" class="checkbox-label">Required (Candidate must
                                        answer)</label>
                                </div>

                                <button type="button" class="add-question-btn" id="addQuestionBtn">
                                    <i class="fas fa-plus"></i> Add Question
                                </button>
                            </div>
                        </div>

                        <div id="selectedQuestionsSection" style="display: none;">
                            <div class="selected-questions-list" id="selectedQuestionsList">
                                <div class="selected-question-item">
                                    <span>No. of experience?</span>
                                    <button type="button" class="remove-question-btn">Remove</button>
                                </div>
                                <div class="selected-question-item">
                                    <span>What role are you applying for?</span>
                                    <button type="button" class="remove-question-btn">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Apply Platform -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-laptop"></i> Apply for Job On
                        </h2>

                        <!-- Hidden radio inputs -->
                        <input type="radio" name="apply_platform" id="jobpilot" checked hidden>
                        <input type="radio" name="apply_platform" id="external" hidden>
                        <input type="radio" name="apply_platform" id="email" hidden>

                        <div class="platform-options">

                            <label class="platform-option selected" for="jobpilot" id="platformJobpilot">
                                <div class="platform-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="platform-title">On Jobpilot</div>
                                <div class="platform-desc">
                                    Candidate will apply for a job using Jobpilot & All applications will show on your
                                    dashboard.
                                </div>
                            </label>

                            <label class="platform-option" for="external" id="platformExternal">
                                <div class="platform-icon">
                                    <i class="fas fa-external-link-alt"></i>
                                </div>
                                <div class="platform-title">External Platform</div>
                                <div class="platform-desc">
                                    Candidate apply for a job on your website, all applications on your own website.
                                </div>
                            </label>

                            <label class="platform-option" for="email" id="platformEmail">
                                <div class="platform-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="platform-title">On Your Email</div>
                                <div class="platform-desc">
                                    Candidate apply for a job on your email address and all application in your email.
                                </div>
                            </label>

                        </div>

                        <!-- Conditional Inputs -->
                        <div class="platform-extra" id="externalInput">
                            <label>Application URL *</label>
                            <input type="url" placeholder="https://yourwebsite.com/apply">
                        </div>

                        <div class="platform-extra" id="emailInput">
                            <label>Application Email *</label>
                            <input type="email" placeholder="jobs@company.com">
                        </div>
                    </div>


                    <div class="form-actions">
                        <button class="cancel-btn">Cancel</button>
                        <button type="submit" class="post-job-submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Post Job →
                        </button>
                    </div>
                </form>

                <!-- Chat Section -->
                {{-- <div class="chat-section">
                    <div class="chat-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="chat-title">Chat with us</div>
                    <div class="chat-description">Need help posting a job? Our support team is here to assist you.</div>
                    <button class="chat-btn">
                        <i class="fas fa-comment-dots"></i> Chat with us
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    <script>
        const map = L.map('map').setView([23.8103, 90.4125], 7); // Dhaka default

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        let marker;

        map.on('click', function (e) {
            if (marker) {
                map.removeLayer(marker);
            }
            marker = L.marker(e.latlng).addTo(map);
        });
    </script>

    <script>
        // DOM Elements
        const tagInput = document.getElementById('tagInput');
        const tagsContainer = document.getElementById('tagsContainer');
        const benefitsGrid = document.getElementById('benefitsGrid');
        const skillInput = document.getElementById('skillInput');
        const addSkillBtn = document.getElementById('addSkillBtn');
        const skillsList = document.getElementById('skillsList');
        const createNewQuestion = document.getElementById('createNewQuestion');
        const chooseExistingQuestion = document.getElementById('chooseExistingQuestion');
        const newQuestionSection = document.getElementById('newQuestionSection');
        const selectedQuestionsSection = document.getElementById('selectedQuestionsSection');
        const addQuestionBtn = document.getElementById('addQuestionBtn');
        const questionTextarea = document.getElementById('questionTextarea');
        const selectedQuestionsList = document.getElementById('selectedQuestionsList');
        const platformJobpilot = document.getElementById('platformJobpilot');
        const platformExternal = document.getElementById('platformExternal');
        const platformEmail = document.getElementById('platformEmail');
        const postJobForm = document.getElementById('postJobForm');

        // Tags functionality
        tagInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const tagText = tagInput.value.trim();

                if (tagText) {
                    // Create new tag element
                    const tagElement = document.createElement('span');
                    tagElement.className = 'tag-item';
                    tagElement.innerHTML = `
                                                        ${tagText}
                                                        <button type="button" class="tag-remove">&times;</button>
                                                    `;

                    // Insert before the input
                    tagsContainer.insertBefore(tagElement, tagInput);

                    // Clear input
                    tagInput.value = '';

                    // Add event listener to remove button
                    tagElement.querySelector('.tag-remove').addEventListener('click', function () {
                        tagElement.remove();
                    });
                }
            }
        });

        // Remove existing tag buttons
        document.querySelectorAll('.tag-remove').forEach(button => {
            button.addEventListener('click', function () {
                this.closest('.tag-item').remove();
            });
        });

        // Benefits selection
        benefitsGrid.addEventListener('click', function (e) {
            if (e.target.classList.contains('benefit-item')) {
                e.target.classList.toggle('selected');
            }
        });

        // Create new benefit button
        document.querySelector('.create-benefit-btn').addEventListener('click', function () {
            const benefitText = prompt('Enter a new benefit:');
            if (benefitText && benefitText.trim()) {
                const benefitElement = document.createElement('div');
                benefitElement.className = 'benefit-item';
                benefitElement.textContent = benefitText.trim();

                benefitsGrid.appendChild(benefitElement);
            }
        });

        // Add skill functionality
        function addSkill() {
            const skillText = skillInput.value.trim();

            if (skillText) {
                const skillElement = document.createElement('div');
                skillElement.className = 'skill-tag';
                skillElement.innerHTML = `
                                                    ${skillText}
                                                    <button type="button" class="remove-skill">&times;</button>
                                                `;

                skillsList.appendChild(skillElement);

                // Clear input
                skillInput.value = '';

                // Add event listener to remove button
                skillElement.querySelector('.remove-skill').addEventListener('click', function () {
                    skillElement.remove();
                });
            }
        }

        addSkillBtn.addEventListener('click', addSkill);
        skillInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addSkill();
            }
        });

        // Remove existing skill buttons
        document.querySelectorAll('.remove-skill').forEach(button => {
            button.addEventListener('click', function () {
                this.closest('.skill-tag').remove();
            });
        });

        // Screening questions toggle
        createNewQuestion.addEventListener('click', function () {
            // Update UI
            createNewQuestion.classList.add('selected');
            chooseExistingQuestion.classList.remove('selected');

            newQuestionSection.style.display = 'block';
            selectedQuestionsSection.style.display = 'none';
        });

        chooseExistingQuestion.addEventListener('click', function () {
            // Update UI
            chooseExistingQuestion.classList.add('selected');
            createNewQuestion.classList.remove('selected');

            newQuestionSection.style.display = 'none';
            selectedQuestionsSection.style.display = 'block';
        });

        // Add screening question
        addQuestionBtn.addEventListener('click', function () {
            const questionText = questionTextarea.value.trim();
            const isRequired = document.getElementById('questionRequired').checked;
            const saveForLater = document.getElementById('saveForLater').checked;

            if (questionText) {
                // Create question element
                const questionElement = document.createElement('div');
                questionElement.className = 'selected-question-item';
                questionElement.innerHTML = `
                                                    <span>${questionText} ${isRequired ? '(Required)' : ''}</span>
                                                    <button type="button" class="remove-question-btn">Remove</button>
                                                `;

                selectedQuestionsList.appendChild(questionElement);

                // Clear textarea
                questionTextarea.value = '';

                // Add event listener to remove button
                questionElement.querySelector('.remove-question-btn').addEventListener('click', function () {
                    questionElement.remove();
                });

                // Show success message
                alert('Question added successfully!');

                // If "Save for later" is checked, show message
                if (saveForLater) {
                    alert('Question saved for later use.');
                }
            } else {
                alert('Please enter a question.');
            }
        });

        // Remove existing question buttons
        document.querySelectorAll('.remove-question-btn').forEach(button => {
            button.addEventListener('click', function () {
                this.closest('.selected-question-item').remove();
            });
        });

        // Platform selection
        function selectPlatform(platformElement) {
            // Remove selected class from all platforms
            platformJobpilot.classList.remove('selected');
            platformExternal.classList.remove('selected');
            platformEmail.classList.remove('selected');

            // Add selected class to clicked platform
            platformElement.classList.add('selected');
        }

        platformJobpilot.addEventListener('click', () => selectPlatform(platformJobpilot));
        platformExternal.addEventListener('click', () => selectPlatform(platformExternal));
        platformEmail.addEventListener('click', () => selectPlatform(platformEmail));

        // Form submission
        postJobForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Show loading state
            const submitBtn = this.querySelector('.post-job-submit-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Posting Job...';
            submitBtn.disabled = true;

            // Simulate form submission
            setTimeout(() => {
                alert('Job posted successfully!');

                // Reset form
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
        // Cancel button
        document.querySelector('.cancel-btn').addEventListener('click', function () {
            if (confirm('Are you sure you want to cancel? All unsaved changes will be lost.')) {
                // In a real app, you would redirect or clear the form
                alert('Form cancelled');
            }
        });

        // Chat button functionality
        const chatButtons = document.querySelectorAll('.chat-btn');
        chatButtons.forEach(button => {
            button.addEventListener('click', function () {
                alert('Opening chat window. This is a demonstration.');
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-container input');
        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                alert(`Searching for: ${searchInput.value}`);
            }
        });

        // Post Job button in header
        const postJobHeaderBtn = document.querySelector('.post-job-btn');
        postJobHeaderBtn.addEventListener('click', function () {
            // Scroll to form
            document.querySelector('.post-job-form').scrollIntoView({ behavior: 'smooth' });
        });

        // Cancel button
        document.querySelector('.cancel-btn').addEventListener('click', function () {
            if (confirm('Are you sure you want to cancel? All unsaved changes will be lost.')) {
                // In a real app, you would redirect or clear the form
                alert('Form cancelled');
            }
        });
    </script>

    <script>
        const jobpilot = document.getElementById('jobpilot');
        const external = document.getElementById('external');
        const email = document.getElementById('email');

        const externalInput = document.getElementById('externalInput');
        const emailInput = document.getElementById('emailInput');

        const cards = document.querySelectorAll('.platform-option');

        function resetCards() {
            cards.forEach(card => card.classList.remove('selected'));
            externalInput.style.display = 'none';
            emailInput.style.display = 'none';
        }

        jobpilot.addEventListener('change', () => {
            resetCards();
            document.getElementById('platformJobpilot').classList.add('selected');
        });

        external.addEventListener('change', () => {
            resetCards();
            document.getElementById('platformExternal').classList.add('selected');
            externalInput.style.display = 'block';
        });

        email.addEventListener('change', () => {
            resetCards();
            document.getElementById('platformEmail').classList.add('selected');
            emailInput.style.display = 'block';
        });
    </script>

@endsection
</body>

</html>