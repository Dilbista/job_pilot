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



        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 30px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title:before {
            content: '';
            display: block;
            width: 4px;
            height: 20px;
            background-color: #1a73e8;
            border-radius: 2px;
        }

        /* Form Sections */
        .form-section {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #444;
            font-size: 15px;
        }

        .form-label span {
            color: #e53935;
        }

        .form-input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #1a73e8;
        }

        .form-textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            min-height: 120px;
            resize: vertical;
            transition: border-color 0.3s;
        }

        .form-textarea:focus {
            outline: none;
            border-color: #1a73e8;
        }

        .tags-input {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            min-height: 46px;
            align-items: center;
        }

        .tag {
            background-color: #e8f0fe;
            color: #1a73e8;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .tag-remove {
            cursor: pointer;
            font-size: 12px;
        }

        .tag-input {
            border: none;
            outline: none;
            flex: 1;
            min-width: 100px;
            font-size: 15px;
        }

        /* Salary Section */
        .salary-options {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .salary-option {
            flex: 1;
        }

        .salary-option input[type="radio"] {
            display: none;
        }

        .salary-option label {
            display: block;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
        }

        .salary-option input[type="radio"]:checked+label {
            border-color: #1a73e8;
            background-color: #e8f0fe;
            color: #1a73e8;
        }

        .salary-range-inputs {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .salary-input {
            flex: 1;
            position: relative;
        }

        .salary-input .currency {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
            font-weight: 500;
        }

        .salary-input input {
            padding-left: 35px;
            padding-right: 15px;
        }

        .salary-type-select {
            margin-top: 15px;
        }

        /* Two Column Layout */
        .two-column {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Benefits Section */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        .benefit-item {
            background-color: #f8fafc;
            border: 1px solid #e8f0fe;
            border-radius: 8px;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #444;
        }

        .benefit-item i {
            color: #1a73e8;
            font-size: 16px;
        }

        .create-benefit-btn {
            background-color: #e8f0fe;
            color: #1a73e8;
            border: 2px dashed #1a73e8;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .create-benefit-btn:hover {
            background-color: #dbe7fd;
        }

        /* Text Editor Toolbar */
        .editor-toolbar {
            display: flex;
            gap: 5px;
            margin-bottom: 10px;
            flex-wrap: wrap;
            padding: 10px 15px;
            background-color: #f8fafc;
            border: 1px solid #ddd;
            border-radius: 8px 8px 0 0;
            border-bottom: none;
        }

        .editor-btn {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            color: #555;
            transition: all 0.3s;
        }

        .editor-btn:hover {
            background-color: #f5f7fb;
            border-color: #bbb;
        }

        .editor-btn.active {
            background-color: #1a73e8;
            color: white;
            border-color: #1a73e8;
        }

        .editor-content {
            border: 1px solid #ddd;
            border-radius: 0 0 8px 8px;
            padding: 15px;
            min-height: 200px;
            font-size: 15px;
            line-height: 1.6;
        }

        /* Screening Questions */
        .screening-options {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .screening-option {
            flex: 1;
            background-color: #f8fafc;
            border: 1px solid #e8f0fe;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .screening-option h4 {
            margin-bottom: 10px;
            color: #333;
            font-size: 16px;
        }

        .screening-option p {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .screening-option-btn {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .screening-option-btn:hover {
            background-color: #0d5bb5;
        }

        .selected-questions {
            background-color: #f8fafc;
            border: 1px solid #e8f0fe;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .selected-questions h4 {
            margin-bottom: 15px;
            color: #333;
            font-size: 16px;
        }
         .create-qn-btn {
            background-color: #e8f0fe;
            color: #1a73e8;
            border: 2px dashed #1a73e8;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .create-qn-btn:hover {
            background-color: #dbe7fd;
        }
        .question-item {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



    .qn-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }


        .question-item p {
            font-size: 14px;
            color: #444;
        }

        .question-remove {
            color: #e53935;
            cursor: pointer;
            font-size: 16px;
        }

        /* Apply Options */
        .apply-options {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .apply-option {
            background-color: #f8fafc;
            border: 2px solid #e8f0fe;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .apply-option:hover {
            border-color: #1a73e8;
            background-color: #e8f0fe;
        }

        .apply-option.selected {
            border-color: #1a73e8;
            background-color: #e8f0fe;
        }

        .apply-option i {
            font-size: 32px;
            color: #1a73e8;
            margin-bottom: 15px;
        }

        .apply-option h4 {
            margin-bottom: 10px;
            color: #333;
            font-size: 16px;
        }

        .apply-option p {
            color: #666;
            font-size: 14px;
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

        .submit-btn {
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

        .submit-btn:hover {
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
            .nav-links {
                display: none;
            }

            .two-column {
                grid-template-columns: 1fr;
            }

            .benefits-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .apply-options {
                grid-template-columns: 1fr;
            }

            .screening-options {
                flex-direction: column;
            }

            .salary-options {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .header-search {
                max-width: 100%;
            }

            .main-content {
                padding: 20px 15px;
            }

            .form-section {
                padding: 20px;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .salary-range-inputs {
                flex-direction: column;
            }

            .form-actions {
                flex-direction: column;
            }

            .submit-btn,
            .cancel-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <!-- Header -->


    <!-- Main Container -->
    <div class="container">
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            <h1 class="page-title">Post a Job</h1>

            <!-- Job Title Section -->
            <div class="form-section">
                <h2 class="section-title">Job Title *</h2>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder="Job Title">
                </div>
                <div class="form-group">
                    <label class="form-label">Tags (Search or write tag and hit enter)</label>
                    <div class="tags-input">
                        <div class="tag">
                            <span>Design</span>
                            <span class="tag-remove">×</span>
                        </div>
                        <div class="tag">
                            <span>Creative</span>
                            <span class="tag-remove">×</span>
                        </div>
                        <input type="text" class="tag-input" placeholder="Add a tag...">
                    </div>
                </div>
            </div>

            <!-- Professional Section -->
            <div class="form-section">
                <h2 class="section-title">Professional *</h2>
                <div class="form-group">
                    <select class="form-input">
                        <option value="">Select Profession</option>
                        <option value="designer">Designer</option>
                        <option value="developer">Developer</option>
                        <option value="manager">Manager</option>
                    </select>
                </div>
            </div>

            <!-- Salary Section -->
            <div class="form-section">
                <h2 class="section-title">Salary</h2>
                <div class="salary-options">
                    <div class="salary-option">
                        <input type="radio" id="salary-range" name="salary-type" checked>
                        <label for="salary-range">Salary Range</label>
                    </div>
                    <div class="salary-option">
                        <input type="radio" id="custom-salary" name="salary-type">
                        <label for="custom-salary">Custom Salary</label>
                    </div>
                </div>
                <div class="salary-range-inputs">
                    <div class="salary-input">
                        <span class="currency">$</span>
                        <input type="text" class="form-input" placeholder="100.00" value="100.00">
                    </div>
                    <div class="salary-input">
                        <span class="currency">$</span>
                        <input type="text" class="form-input" placeholder="100.00">
                    </div>
                </div>
                <div class="salary-type-select">
                    <select class="form-input">
                        <option value="monthly" selected>Monthly</option>
                        <option value="yearly">Yearly</option>
                        <option value="hourly">Hourly</option>
                    </select>
                </div>
            </div>

            <!-- Job Category Section -->
            <div class="form-section">
                <h2 class="section-title">Job Category *</h2>
                <div class="two-column">
                    <div class="form-group">
                        <select class="form-input">
                            <option value="">Design/Creative</option>
                            <option value="it">IT & Telecommunication</option>
                            <option value="engineering">Engineering</option>
                            <option value="medical">Medical/Pharma</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-input">
                            <option value="">--Select Role --</option>
                            <option value="administrator">Administrator</option>
                            <option value="manager">Manager</option>
                            <option value="director">Director</option>
                            <option value="specialist">Specialist</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Advanced Information Section -->
            <div class="form-section">
                <h2 class="section-title">Advance Information</h2>
                <div class="two-column">
                    <div class="form-group">
                        <label class="form-label">Education *</label>
                        <select class="form-input">
                            <option value="high-school" selected>High School</option>
                            <option value="bachelor">Bachelor's Degree</option>
                            <option value="master">Master's Degree</option>
                            <option value="phd">PhD</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Experience *</label>
                        <select class="form-input">
                            <option value="fresher" selected>Fresher</option>
                            <option value="1-2">1-2 Years</option>
                            <option value="3-5">3-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Job Type *</label>
                        <select class="form-input">
                            <option value="full-time" selected>Full Time</option>
                            <option value="part-time">Part Time</option>
                            <option value="contract">Contract</option>
                            <option value="freelance">Freelance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Total Vacancies *</label>
                        <input type="text" class="form-input" placeholder="1" value="1">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deadline Expired *</label>
                        <input type="date" class="form-input" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Job Period</label>
                        <input type="date" class="form-input" placeholder="Job Period">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Location * (Click to add a pointer)</label>
                    <input type="text" class="form-input" placeholder="Enter city name">
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="form-section">
                <h2 class="section-title">Benefits</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <i class="fas fa-calendar-week"></i>
                        <span>4 day workweek</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-home"></i>
                        <span>Fully Remote Position-Worldwide</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-flag"></i>
                        <span>Country: Bangladesh</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Full Address: Dhaka District, Dhaka Division</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-sync-alt"></i>
                        <span>Async</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-mountain"></i>
                        <span>Company retreats</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-building"></i>
                        <span>Coworking budget</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-users"></i>
                        <span>Distribution team</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-chart-pie"></i>
                        <span>Equity compensation</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-dumbbell"></i>
                        <span>Free gym membership</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-home-office"></i>
                        <span>Home office budget</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Learning budget</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-ban"></i>
                        <span>No policies at work</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-clock"></i>
                        <span>Paid time off</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-chart-line"></i>
                        <span>Profit sharing</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-umbrella-beach"></i>
                        <span>Unlimited vacation</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-eye"></i>
                        <span>Vision insurance</span>
                    </div>
                    <div class="benefit-item">
                        <i class="fas fa-code"></i>
                        <span>Vibe Coder</span>
                    </div>
                </div>
                <div class="create-benefit-btn">
                    <i class="fas fa-plus"></i> Create New Benefit
                </div>
            </div>

            <!-- Skills Section -->
            <div class="form-section">
                <h2 class="section-title">Skills</h2>
                <div class="form-group">
                    <div class="tags-input">
                        <div class="tag">
                            <span>React</span>
                            <span class="tag-remove">×</span>
                        </div>
                        <div class="tag">
                            <span>JavaScript</span>
                            <span class="tag-remove">×</span>
                        </div>
                        <div class="tag">
                            <span>UI/UX</span>
                            <span class="tag-remove">×</span>
                        </div>
                        <input type="text" class="tag-input" placeholder="Add a skill...">
                    </div>
                </div>
            </div>

            <!-- Job Description Section -->
            <div class="form-section">
                <h2 class="section-title">Job Description *</h2>
                <div class="editor-toolbar">
                    <button class="editor-btn" title="Paragraph"><i class="fas fa-paragraph"></i></button>
                    <button class="editor-btn" title="Bold"><i class="fas fa-bold"></i></button>
                    <button class="editor-btn" title="Italic"><i class="fas fa-italic"></i></button>
                    <button class="editor-btn" title="Ordered List"><i class="fas fa-list-ol"></i></button>
                    <button class="editor-btn" title="Unordered List"><i class="fas fa-list-ul"></i></button>
                    <button class="editor-btn" title="Link"><i class="fas fa-link"></i></button>
                    <button class="editor-btn" title="Image"><i class="fas fa-image"></i></button>
                    <button class="editor-btn" title="Code"><i class="fas fa-code"></i></button>
                    <button class="editor-btn" title="Table"><i class="fas fa-table"></i></button>
                </div>
                <div class="editor-content" contenteditable="true">
                    <p>Enter job description here...</p>
                    <p>You can format text using the toolbar above.</p>
                </div>
            </div>

            <!-- Screening Questions Section -->
            <div class="form-section">
                <h2 class="section-title">Add Screening Questions</h2>
                <div class="screening-options">
                    <div class="screening-option">
                        <h4>Create new screening question</h4>
                        <p>Add custom questions for applicants</p>
                        <div class="create-qn-btn">
                            <i class="fas fa-plus"></i> Create New Benefit
                        </div>
                        {{-- <button class="screening-option-btn">Add Question</button> --}}
                    </div>
                    <div class="screening-option">
                        <h4>Choose from existing question</h4>
                        <p>Select from your previous questions</p>
                        <button class="screening-option-btn">Select Questions</button>
                    </div>
                </div>
                <div class="selected-questions">
                    <h4>Selected Screening Questions</h4>
                    <div class="question-item">
                        <p>What is your experience with React?</p>
                        <span class="question-remove"><i class="fas fa-times"></i></span>
                    </div>
                    <div class="question-item">
                        <p>Why do you want to work with us?</p>
                        <span class="question-remove"><i class="fas fa-times"></i></span>
                    </div>
                </div>
                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px;">
                        <input type="checkbox" checked>
                        <span>Required (Candidate must answer)</span>
                    </label>
                </div>
                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 10px;">
                        <input type="checkbox">
                        <span>Save for later</span>
                    </label>
                </div>
            </div>

            <!-- Apply Options Section -->
            <div class="form-section">
                <h2 class="section-title">Apply for Job On:</h2>
                <div class="apply-options">
                    <div class="apply-option selected">
                        <i class="fas fa-briefcase"></i>
                        <h4>On Jobpilot</h4>
                        <p>Candidate will apply for a job using Jobpilot & All applications will show on your dashboard.</p>
                    </div>
                    <div class="apply-option">
                        <i class="fas fa-external-link-alt"></i>
                        <h4>External Platform</h4>
                        <p>Candidate apply for a job on your website, all applications on your own website.</p>
                    </div>
                    <div class="apply-option">
                        <i class="fas fa-envelope"></i>
                        <h4>On Your Email</h4>
                        <p>Candidate apply for a job on your email address and all application in your email.</p>
                    </div>
                </div>

                <div class="form-actions">
                    <button class="cancel-btn">Cancel</button>
                    <button class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        Post Job →
                    </button>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Tag input functionality
        const tagInputs = document.querySelectorAll('.tag-input');
        tagInputs.forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Enter' && this.value.trim() !== '') {
                    e.preventDefault();
                    const tagContainer = this.parentElement;
                    const tag = document.createElement('div');
                    tag.className = 'tag';
                    tag.innerHTML = `
                            <span>${this.value.trim()}</span>
                            <span class="tag-remove">×</span>
                        `;
                    tagContainer.insertBefore(tag, this);
                    this.value = '';

                    // Add remove functionality
                    tag.querySelector('.tag-remove').addEventListener('click', function () {
                        tag.remove();
                    });
                }
            });
        });

        // Remove existing tags
        document.querySelectorAll('.tag-remove').forEach(removeBtn => {
            removeBtn.addEventListener('click', function () {
                this.parentElement.remove();
            });
        });

        // Salary option selection
        document.querySelectorAll('.salary-option input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.id === 'custom-salary') {
                    // Show custom salary input
                    document.querySelector('.salary-range-inputs').style.display = 'none';
                } else {
                    // Show salary range inputs
                    document.querySelector('.salary-range-inputs').style.display = 'flex';
                }
            });
        });

        // Apply option selection
        document.querySelectorAll('.apply-option').forEach(option => {
            option.addEventListener('click', function () {
                document.querySelectorAll('.apply-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                this.classList.add('selected');
            });
        });

        // Editor button functionality
        document.querySelectorAll('.editor-btn').forEach(button => {
            button.addEventListener('click', function () {
                this.classList.toggle('active');
            });
        });

        // Screening question buttons
        document.querySelectorAll('.screening-option-btn').forEach(button => {
            button.addEventListener('click', function () {
                const optionTitle = this.closest('.screening-option').querySelector('h4').textContent;
                alert(`Opening ${optionTitle}...`);
            });
        });

        // Remove question functionality
        document.querySelectorAll('.question-remove').forEach(removeBtn => {
            removeBtn.addEventListener('click', function () {
                this.closest('.question-item').remove();
            });
        });
        document.querySelector('.create-qn-btn').addEventListener('click', function () {
            const question = prompt('Enter new question :');
            if (question) {
                const qnGrid = document.querySelector('.qn-grid');
                const newQn = document.createElement('div');
                newQn.className = 'question-item';
                newQn.innerHTML = `
                        <i class="fas fa-plus"></i>
                        <span>${question}</span>
                    `;
                qnGrid.appendChild(newQn);
            }
        });

        // Create benefit button
        document.querySelector('.create-benefit-btn').addEventListener('click', function () {
            const benefitName = prompt('Enter new benefit name:');
            if (benefitName) {
                const benefitsGrid = document.querySelector('.benefits-grid');
                const newBenefit = document.createElement('div');
                newBenefit.className = 'benefit-item';
                newBenefit.innerHTML = `
                        <i class="fas fa-plus"></i>
                        <span>${benefitName}</span>
                    `;
                benefitsGrid.appendChild(newBenefit);
            }
        });


        // Form submission
        document.querySelector('.submit-btn').addEventListener('click', function () {
            const jobTitle = document.querySelector('input[placeholder="Job Title"]').value;
            if (!jobTitle) {
                alert('Please enter a job title');
                return;
            }

            if (confirm('Are you sure you want to post this job?')) {
                alert('Job posted successfully!');
                // In a real app, you would submit the form here
            }
        });

        // Cancel button
        document.querySelector('.cancel-btn').addEventListener('click', function () {
            if (confirm('Are you sure you want to cancel? All unsaved changes will be lost.')) {
                // In a real app, you would redirect or clear the form
                alert('Form cancelled');
            }
        });

        // Chat button
        document.querySelector('.chat-button').addEventListener('click', function () {
            alert('Opening chat interface...');
        });

        // Sidebar menu active state
        const menuItems = document.querySelectorAll('.sidebar-menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', function (e) {
                if (!this.classList.contains('active')) {
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });
    </script>
@endsection
</body>

</html>