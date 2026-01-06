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

        /* BREADCRUMB */
        .breadcrumb {
            background: #f1f3f6;
            padding: 18px 30px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .breadcrumb div{
            margin-right: 80px;
        }
        .breadcrumb h5 {
            margin-left: 100px;
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #64748b;
        }

        .breadcrumb a:hover {
            color: #2563eb;
        }

        /* Search section */
        .search-section {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1e293b;
        }

        .search-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .search-input-group {
            flex: 1;
            position: relative;
        }

        .search-input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
        }

        .search-input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 16px;
            color: #334155;
            cursor: pointer;
        }

        .search-input::placeholder {
            color: #94a3b8;
        }

        .filter-btn {
            background-color: white;
            border: 1px solid #e2e8f0;
            color: #334155;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .filter-btn:hover {
            background-color: #f8fafc;
        }

        .search-btn {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .search-btn:hover {
            background-color: #1d4ed8;
        }

        /* Popular professions */
        .popular-professions {
            margin: 25px 0;
            padding: 15px 0;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        .popular-professions span {
            font-weight: 500;
            color: #64748b;
            margin-right: 15px;
        }

        .profession-tags {
            display: inline-flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .profession-tag {
            background-color: #f1f5f9;
            color: #475569;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .profession-tag:hover {
            background-color: #e2e8f0;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background-color: white;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #64748b;
        }

        .modal-body {
            padding: 20px;
        }

        /* Profession modal */
        .profession-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        .profession-item {
            padding: 12px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 14px;
        }

        .profession-item:hover {
            background-color: #f1f5f9;
            border-color: #2563eb;
            color: #2563eb;
        }

        /* Filter sidebar - Updated with scroll */
        .filter-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .filter-overlay.active {
            display: block;
        }

        .filter-sidebar {
            position: fixed;
            top: 0;
            left: -320px;
            width: 320px;
            height: 100%;
            background-color: white;
            z-index: 1000;
            transition: left 0.3s ease;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .filter-sidebar.active {
            left: 0;
        }

        .filter-header {
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        }

        .filter-header h3 {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }

        .filter-close {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #64748b;
        }

        .filter-content {
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }

        .filter-section {
            margin-bottom: 25px;
        }

        .filter-section label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: #334155;
        }

        .filter-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 14px;
            color: #334155;
        }

        .experience-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .experience-option {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .experience-option input[type="radio"] {
            accent-color: #2563eb;
        }

        .experience-option input[type="checkbox"] {
            accent-color: #2563eb;
        }

        .apply-filter-btn {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            width: 100%;
            margin-top: 10px;
            flex-shrink: 0;
        }

        /* UPDATED: Candidate Card Styles */
        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .candidate-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: flex-start;
            gap: 20px;
            position: relative;
            transition: transform 0.2s ease;
        }

        .candidate-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        /* Left Avatar Section */
        .candidate-avatar {
            flex-shrink: 0;
        }

        .avatar-circle {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e1 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #64748b;
            overflow: hidden;
        }

        .avatar-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Right Content Section */
        .candidate-content {
            flex: 1;
            position: relative;
            padding-top: 5px;
        }

        /* Top Right Eye Icon */
        .top-right-icon {
            position: absolute;
            top: 0;
            right: 0;
            color: #64748b;
            font-size: 18px;
            cursor: pointer;
            padding: 8px;
            border-radius: 6px;
            transition: all 0.2s;
        }

        .top-right-icon:hover {
            background-color: #f1f5f9;
            color: #2563eb;
        }

        /* Name */
        .candidate-name {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin: 0 0 8px 0;
            line-height: 1.3;
        }

        /* Profession */
        .candidate-profession {
            color: #64748b;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .candidate-profession i {
            color: #94a3b8;
            font-size: 14px;
        }

        /* Availability Badge */
        .availability-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: #f0fdf4;
            color: #16a34a;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
            border: 1px solid #dcfce7;
        }

        .availability-badge i {
            font-size: 8px;
        }

        /* Not Available Variant */
        .availability-badge.not-available {
            background-color: #fef2f2;
            color: #dc2626;
            border-color: #fee2e2;
        }

        /* View Resume Button */
        .view-resume-btn {
            background-color: transparent;
            color: #2563eb;
            border: 1px solid #2563eb;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            width: 100%;
            justify-content: center;
        }

        .view-resume-btn:hover {
            background-color: #2563eb;
            color: white;
        }

        .view-resume-btn i {
            font-size: 14px;
            transition: transform 0.2s;
        }

        .view-resume-btn:hover i {
            transform: translateX(3px);
        }

        /* Resume modal */
        .resume-modal .modal-content {
            max-width: 900px;
            width: 95%;
            max-height: 90vh;
        }

        .resume-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .resume-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 32px;
            color: #64748b;
            overflow: hidden;
        }

        .resume-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .resume-candidate-info h2 {
            font-size: 24px;
            margin-bottom: 5px;
            color: #1e293b;
        }

        .resume-candidate-info p {
            color: #2563eb;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .resume-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .resume-section {
            margin-bottom: 25px;
        }

        .resume-section h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #1e293b;
        }

        .resume-section h4 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #334155;
        }

        .about-text {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .experience-item, .education-item {
            margin-bottom: 20px;
            padding-left: 15px;
            border-left: 2px solid #e2e8f0;
        }

        .exp-date, .edu-date {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 5px;
        }

        .exp-title, .edu-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: #1e293b;
        }

        .exp-company, .edu-institution {
            color: #2563eb;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .exp-description, .edu-description {
            color: #64748b;
            line-height: 1.5;
            font-size: 14px;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .skill-item {
            background-color: #f1f5f9;
            color: #334155;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
        }

        .personal-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 15px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .info-label {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .info-value {
            font-weight: 500;
            color: #1e293b;
        }

        .contact-info {
            margin-top: 20px;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #759cd1;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .social-icon:hover {
            background-color: #2563eb;
            color: white;
        }

        .resume-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .download-btn {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .message-btn {
            background-color: white;
            color: #2563eb;
            border: 1px solid #2563eb;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .candidates-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .breadcrumb {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .search-row {
                flex-direction: column;
            }
            
            .candidate-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .candidate-content {
                padding-top: 0;
            }
            
            .top-right-icon {
                position: absolute;
                top: 15px;
                right: 15px;
            }
            
            .candidate-profession {
                justify-content: center;
            }
            
            .availability-badge {
                justify-content: center;
            }
            
            .resume-content {
                grid-template-columns: 1fr;
            }
            
            .personal-info {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="breadcrumb">
        <h5>Find Candidate</h5>
        <div>
            <a href="{{ route('home') }}">Home</a>/ Find Candidate
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="container">
        <!-- Search Section -->
        <div class="search-section">
            {{-- <h2 class="section-title">Find Candidates</h2> --}}
            <div class="search-row">
                <div class="search-input-group">
                    <i class="fas fa-layer-group"></i>
                    <input type="text" class="search-input" placeholder="Select Profession" id="selectProfessionInput" readonly>
                </div>
                <div class="search-input-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" class="search-input" placeholder="Enter Location" id="locationInput">
                </div>
                <button class="filter-btn" id="openFilter">
                    <i class="fas fa-sliders-h"></i> Filter
                </button>
                <button class="search-btn" id="searchCandidates">Search Candidates</button>
            </div>
            <div class="popular-professions">
                <span>Popular Profession:</span>
                <div class="profession-tags" id="professionTags">
                    <span class="profession-tag" data-profession="Software Developer">Software Developer</span>
                    <span class="profession-tag" data-profession="Accountant">Accountant</span>
                    <span class="profession-tag" data-profession="Actor">Actor</span>
                    <span class="profession-tag" data-profession="Artist">Artist</span>
                    <span class="profession-tag" data-profession="Cashier">Cashier</span>
                    <span class="profession-tag" data-profession="Chef">Chef</span>
                    <span class="profession-tag" data-profession="Dental Hygienist">Dental Hygienist</span>
                    <span class="profession-tag" data-profession="Dentist">Dentist</span>
                    <span class="profession-tag" data-profession="Designer">Designer</span>
                    <span class="profession-tag" data-profession="Driver">Driver</span>
                    <span class="profession-tag" data-profession="Electrician">Electrician</span>
                </div>
            </div>
        </div>

        <!-- Candidates Grid -->
        <div class="candidates-grid" id="candidatesGrid">
            <!-- Candidate cards will be dynamically inserted here -->
        </div>
    </div>

    <!-- Profession Selection Modal -->
    <div class="modal" id="professionModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Select Profession</h2>
                <button class="close-modal" id="closeProfessionModal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="profession-list" id="professionList">
                    <div class="profession-item" data-profession="Software Developer">Software Developer</div>
                    <div class="profession-item" data-profession="Accountant">Accountant</div>
                    <div class="profession-item" data-profession="Actor">Actor</div>
                    <div class="profession-item" data-profession="Artist">Artist</div>
                    <div class="profession-item" data-profession="Cashier">Cashier</div>
                    <div class="profession-item" data-profession="Chef">Chef</div>
                    <div class="profession-item" data-profession="Dental Hygienist">Dental Hygienist</div>
                    <div class="profession-item" data-profession="Dentist">Dentist</div>
                    <div class="profession-item" data-profession="Designer">Designer</div>
                    <div class="profession-item" data-profession="Driver">Driver</div>
                    <div class="profession-item" data-profession="Electrician">Electrician</div>
                    <div class="profession-item" data-profession="Journalist">Journalist</div>
                    <div class="profession-item" data-profession="Lawyer">Lawyer</div>
                    <div class="profession-item" data-profession="Fisherman">Fisherman</div>
                    <div class="profession-item" data-profession="Scientist">Scientist</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resume Modal -->
    <div class="modal resume-modal" id="resumeModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Resume</h2>
                <button class="close-modal" id="closeResumeModal">&times;</button>
            </div>
            <div class="modal-body" id="resumeModalBody">
                <!-- Resume content will be dynamically loaded here -->
            </div>
        </div>
    </div>

    <!-- Filter Sidebar -->
    <div class="filter-overlay" id="filterOverlay"></div>
    <aside class="filter-sidebar" id="filterSidebar">
        <div class="filter-header">
            <h3>Filter</h3>
            <button class="filter-close" id="closeFilter">&times;</button>
        </div>
        <div class="filter-content">
            <div class="filter-section">
                <label>Skills</label>
                <select class="filter-select" id="skillSelect">
                    <option value="">Select Skill</option>
                    <option value="Web Design">Web Design</option>
                    <option value="Microsoft Excel">Microsoft Excel</option>
                    <option value="Project Management">Project Management</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="React">React</option>
                </select>
            </div>

            <div class="filter-section">
                <label>Experience</label>
                <div class="experience-options" id="experienceOptions">
                    <label class="experience-option">
                        <input type="radio" name="experience" value="all" checked> All
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="fresher"> Fresher
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="1"> 1 Year
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="2"> 2 Years
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="3"> 3+ Years
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="5"> 5+ Years
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="8"> 8+ Years
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="10"> 10+ Years
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="experience" value="15"> 15+ Years
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <label>Education</label>
                <div class="experience-options" id="educationOptions">
                    <label class="experience-option">
                        <input type="radio" name="education" value="all" checked> All
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="education" value="highschool"> High School
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="education" value="bachelor"> Bachelor's
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="education" value="master"> Master's
                    </label>
                    <label class="experience-option">
                        <input type="radio" name="education" value="phd"> PhD
                    </label>
                </div>
            </div>

            <div class="filter-section">
                <label class="experience-option">
                    <input type="checkbox" id="remoteJob"> Remote Job
                </label>
            </div>

            <button class="apply-filter-btn" id="applyFilter">Apply Filter</button>
        </div>
    </aside>

    <script>
        // Sample data for candidates (exactly matching the images)
        const candidatesData = [
            {
                id: 1,
                name: "Smilee Shrma",
                title: "Software Developer",
                available: true,
                image: "{{ asset('images/profile_images.webp') }}", 
                about: "Sometimes you may wish to stop running validation rules on an attribute after the first validation failure. To do so, assign the ball rule to the attribute.",
                experience: [
                    {
                        date: "01 Jan 2015",
                        title: "Senior Software Engineer",
                        company: "Twitter/Software",
                        description: "Execute full software development life cycle (SDLC), Develop flowcharts, layouts and documentation to identify requirements and solutions. Write well-designed, testable code, Produce specifications and determine operational feasibility."
                    },
                    {
                        date: "01 Jan 2020",
                        title: "Product Manager",
                        company: "Facebook/Software",
                        description: "Execute full software development life cycle (SDLC), Develop flowcharts, layouts and documentation to identify requirements and solutions. Write well-designed, testable code, Produce specifications and determine operational feasibility."
                    },
                    {
                        date: "01 Jan 2021",
                        title: "Software Engineer",
                        company: "Google/Software",
                        description: "Execute full software development life cycle (SDLC), Develop flowcharts, layouts and documents to identify requirements and solutions. Write well-designed, testable code, Produce specifications and determine operational feasibility."
                    }
                ],
                education: [
                    {
                        date: "2010",
                        title: "MSC",
                        institution: "MSC / Masters",
                        description: "Students who graduate with a master's degree should possess advanced knowledge of a specialized body of theoretical."
                    },
                    {
                        date: "2004",
                        title: "BSC",
                        institution: "BSC / Graduation",
                        description: "A graduate student is someone who has earned a bachelor's degree and is pursuing additional education in a specific field."
                    },
                    {
                        date: "2002",
                        title: "SSC",
                        institution: "SSC / Secondary",
                        description: "Secondary school is defined as schooling after elementary school, therefore in the U.S. that would be grades 6 through 12. However, once a student reaches grade 9, they are considered to be a high school student."
                    }
                ],
                skills: ["Web Design", "Microsoft Excel", "JavaScript", "React", "Node.js"],
                languages: ["Czech", "Italian", "English"],
                personalInfo: {
                    dob: "15 December, 1985",
                    maritalStatus: "Married",
                    country: "USA",
                    gender: "Male"
                },
                contactInfo: {
                    website: "https://johndoe.com",
                    location: "San Francisco, CA",
                    phone: "+880123456789",
                    secondaryPhone: "+880987654321",
                    email: "candidate@mail.com"
                }
            },
            {
                id: 2,
                name: "Zahidul Islam",
                title: "Journalist",
                available: true,
                image: "{{ asset('images/profle_image_2.png') }}",
                about: "Experienced journalist with a passion for investigative reporting and storytelling.",
                experience: [
                    {
                        date: "2018 - Present",
                        title: "Senior Journalist",
                        company: "The Daily News",
                        description: "Covering political events, conducting interviews, and writing feature articles."
                    }
                ],
                education: [
                    {
                        date: "2014",
                        title: "BA in Journalism",
                        institution: "University of Media Studies",
                        description: "Graduated with honors in Journalism and Mass Communication."
                    }
                ],
                skills: ["Investigative Reporting", "Interviewing", "Editing", "Fact-Checking"],
                languages: ["English", "Bengali"],
                personalInfo: {
                    dob: "10 March, 1990",
                    maritalStatus: "Single",
                    country: "Bangladesh",
                    gender: "Male"
                },
                contactInfo: {
                    website: "https://zahidulislam.com",
                    location: "Dhaka, Bangladesh",
                    phone: "+880123456789",
                    email: "zahidul@mail.com"
                }
            },
            {
                id: 3,
                name: "Sheikh Rashed",
                title: "Accountant",
                available: true,
                image: "{{ asset('profile-image/sheikh-rashed.jpg') }}",
                about: "Experienced accountant with expertise in financial analysis and tax planning.",
                experience: [
                    {
                        date: "2017 - Present",
                        title: "Senior Accountant",
                        company: "Finance Corp",
                        description: "Managing financial records, preparing reports, and ensuring compliance."
                    }
                ],
                education: [
                    {
                        date: "2016",
                        title: "BBA in Accounting",
                        institution: "Business University",
                        description: "Specialized in Accounting and Finance."
                    }
                ],
                skills: ["Financial Analysis", "Tax Planning", "QuickBooks", "Excel"],
                languages: ["English", "Arabic"],
                personalInfo: {
                    dob: "22 July, 1992",
                    maritalStatus: "Married",
                    country: "UAE",
                    gender: "Male"
                },
                contactInfo: {
                    website: "https://rashedfinance.com",
                    location: "Dubai, UAE",
                    phone: "+971501234567",
                    email: "rashed@finance.com"
                }
            },
            {
                id: 4,
                name: "Masum Billah",
                title: "Lawyer",
                available: true,
                image: "{{ asset('profile-image/masum-billah.jpg') }}",
                about: "Legal expert specializing in corporate law and contract negotiation.",
                experience: [
                    {
                        date: "2019 - Present",
                        title: "Associate Lawyer",
                        company: "Legal Associates",
                        description: "Handling corporate legal matters and contract negotiations."
                    }
                ],
                education: [
                    {
                        date: "2018",
                        title: "LLB",
                        institution: "Law College",
                        description: "Graduated with specialization in Corporate Law."
                    }
                ],
                skills: ["Contract Law", "Corporate Law", "Negotiation", "Legal Research"],
                languages: ["English", "Bengali"],
                personalInfo: {
                    dob: "15 May, 1991",
                    maritalStatus: "Single",
                    country: "Bangladesh",
                    gender: "Male"
                },
                contactInfo: {
                    website: "https://masumlaw.com",
                    location: "Dhaka, Bangladesh",
                    phone: "+880171234567",
                    email: "masum@law.com"
                }
            },
            {
                id: 5,
                name: "Zafor Iqbal",
                title: "Fisherman",
                available: true,
                image: "{{ asset('profile-image/zafor-iqbal.jpg') }}",
                about: "Experienced fisherman with knowledge of sustainable fishing practices.",
                experience: [
                    {
                        date: "2010 - Present",
                        title: "Professional Fisherman",
                        company: "Coastal Fisheries",
                        description: "Specialized in deep-sea fishing and sustainable practices."
                    }
                ],
                education: [
                    {
                        date: "2009",
                        title: "Marine Studies",
                        institution: "Marine Institute",
                        description: "Studied marine biology and sustainable fishing."
                    }
                ],
                skills: ["Fishing Techniques", "Boat Handling", "Navigation", "Marine Safety"],
                languages: ["Bengali", "English"],
                personalInfo: {
                    dob: "30 November, 1985",
                    maritalStatus: "Married",
                    country: "Bangladesh",
                    gender: "Male"
                },
                contactInfo: {
                    location: "Cox's Bazar, Bangladesh",
                    phone: "+880181234567",
                    email: "zafor@fishing.com"
                }
            },
            {
                id: 6,
                name: "Mohammad Aslam",
                title: "Scientist",
                available: true,
                image: "{{ asset('profile-image/mohammad-aslam.jpg') }}",
                about: "Research scientist with expertise in biotechnology and molecular biology.",
                experience: [
                    {
                        date: "2018 - Present",
                        title: "Research Scientist",
                        company: "BioTech Research",
                        description: "Conducting research in biotechnology and molecular biology."
                    }
                ],
                education: [
                    {
                        date: "2017",
                        title: "PhD in Biotechnology",
                        institution: "Science University",
                        description: "Doctoral research in molecular biology and genetics."
                    }
                ],
                skills: ["Molecular Biology", "Data Analysis", "Lab Techniques", "Research"],
                languages: ["English", "Bengali", "Arabic"],
                personalInfo: {
                    dob: "12 April, 1988",
                    maritalStatus: "Married",
                    country: "Bangladesh",
                    gender: "Male"
                },
                contactInfo: {
                    website: "https://aslamresearch.com",
                    location: "Dhaka, Bangladesh",
                    phone: "+880191234567",
                    email: "aslam@research.com"
                }
            }
        ];

        // DOM Elements
        const professionModal = document.getElementById('professionModal');
        const resumeModal = document.getElementById('resumeModal');
        const selectProfessionInput = document.getElementById('selectProfessionInput');
        const closeProfessionModal = document.getElementById('closeProfessionModal');
        const closeResumeModal = document.getElementById('closeResumeModal');
        const openFilterBtn = document.getElementById('openFilter');
        const closeFilterBtn = document.getElementById('closeFilter');
        const filterOverlay = document.getElementById('filterOverlay');
        const filterSidebar = document.getElementById('filterSidebar');
        const applyFilterBtn = document.getElementById('applyFilter');
        const candidatesGrid = document.getElementById('candidatesGrid');
        const searchCandidatesBtn = document.getElementById('searchCandidates');
        const locationInput = document.getElementById('locationInput');
        const skillSelect = document.getElementById('skillSelect');
        const remoteJobCheckbox = document.getElementById('remoteJob');
        const professionTags = document.querySelectorAll('.profession-tag');
        const professionItems = document.querySelectorAll('.profession-item');

        // Current filters
        let currentFilters = {
            profession: '',
            location: '',
            skill: '',
            experience: 'all',
            education: 'all',
            remoteJob: false
        };

        // Initialize page
        function initializePage() {
            renderCandidates();
            
            // Event listeners for profession modal
            selectProfessionInput.addEventListener('click', () => {
                professionModal.classList.add('active');
            });
            
            closeProfessionModal.addEventListener('click', () => {
                professionModal.classList.remove('active');
            });
            
            // Event listeners for filter sidebar
            openFilterBtn.addEventListener('click', () => {
                filterSidebar.classList.add('active');
                filterOverlay.classList.add('active');
            });
            
            closeFilterBtn.addEventListener('click', () => {
                filterSidebar.classList.remove('active');
                filterOverlay.classList.remove('active');
            });
            
            filterOverlay.addEventListener('click', () => {
                filterSidebar.classList.remove('active');
                filterOverlay.classList.remove('active');
            });
            
            // Event listener for apply filter button
            applyFilterBtn.addEventListener('click', applyFilters);
            
            // Event listener for search button
            searchCandidatesBtn.addEventListener('click', searchCandidates);
            
            // Event listeners for profession tags
            professionTags.forEach(tag => {
                tag.addEventListener('click', () => {
                    const profession = tag.getAttribute('data-profession');
                    selectProfessionInput.value = profession;
                    currentFilters.profession = profession;
                    filterCandidates();
                });
            });
            
            // Event listeners for profession items in modal
            professionItems.forEach(item => {
                item.addEventListener('click', () => {
                    const profession = item.getAttribute('data-profession');
                    selectProfessionInput.value = profession;
                    currentFilters.profession = profession;
                    professionModal.classList.remove('active');
                    filterCandidates();
                });
            });
            
            // Event listener for resume modal close
            closeResumeModal.addEventListener('click', () => {
                resumeModal.classList.remove('active');
            });
            
            // Close modals when clicking outside
            window.addEventListener('click', (e) => {
                if (e.target === professionModal) {
                    professionModal.classList.remove('active');
                }
                if (e.target === resumeModal) {
                    resumeModal.classList.remove('active');
                }
            });
        }

        // Render candidates - UPDATED to match the image layout
        function renderCandidates() {
            candidatesGrid.innerHTML = '';
            
            candidatesData.forEach(candidate => {
                const candidateCard = document.createElement('div');
                candidateCard.className = 'candidate-card';
                
                // Create avatar HTML - using image if available, otherwise icon
                const avatarHtml = candidate.image 
                    ? `<img src="${candidate.image}" alt="${candidate.name}" onerror="this.onerror=null; this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 fill=%22%23e2e8f0%22/><text x=%2250%22 y=%2255%22 font-family=%22Arial%22 font-size=%2240%22 text-anchor=%22middle%22 fill=%22%2364748b%22>${candidate.name.charAt(0)}</text></svg>'">`
                    : `<i class="fas fa-user"></i>`;
                
                candidateCard.innerHTML = `
                    <!-- Left Section - Avatar/Image -->
                    <div class="candidate-avatar">
                        <div class="avatar-circle">
                            ${avatarHtml}
                        </div>
                    </div>
                    
                    <!-- Right Section -->
                    <div class="candidate-content">
                        <!-- Top Right Eye Icon -->
                        <div class="top-right-icon" data-id="${candidate.id}">
                            <i class="fas fa-eye"></i>
                        </div>
                        
                        <!-- Name -->
                        <h3 class="candidate-name">${candidate.name}</h3>
                        
                        <!-- Profession with icon -->
                        <div class="candidate-profession">
                            <i class="fas fa-briefcase"></i> ${candidate.title}
                        </div>
                        
                        <!-- Availability Status -->
                        <div class="availability-badge ${candidate.available ? '' : 'not-available'}">
                            <i class="fas fa-circle"></i> 
                            ${candidate.available ? 'I am available' : 'Not available'}
                        </div>
                        
                        <!-- View Resume Button -->
                        <button class="view-resume-btn" data-id="${candidate.id}">
                            View Resume <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                `;
                
                candidatesGrid.appendChild(candidateCard);
            });
            
            // Add event listeners to view resume buttons
            document.querySelectorAll('.view-resume-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const candidateId = parseInt(this.getAttribute('data-id'));
                    openResumeModal(candidateId);
                });
            });
            
            // Add event listeners to eye icons
            document.querySelectorAll('.top-right-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    const candidateId = parseInt(this.getAttribute('data-id'));
                    openResumeModal(candidateId);
                });
            });
        }

        // Open resume modal
        function openResumeModal(candidateId) {
            const candidate = candidatesData.find(c => c.id === candidateId);
            
            if (!candidate) return;
            
            const resumeBody = document.getElementById('resumeModalBody');
            
            // Create avatar HTML for resume modal
            const resumeAvatarHtml = candidate.image 
                ? `<img src="${candidate.image}" alt="${candidate.name}" onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.style.display='flex';">`
                : '';
            
            // Generate resume HTML (matches images 4 and 5)
            const resumeHTML = `
                <div class="resume-header">
                    <div class="resume-avatar">
                        ${resumeAvatarHtml}
                        <i class="fas fa-user" style="${candidate.image ? 'display:none' : ''}"></i>
                    </div>
                    <div class="resume-candidate-info">
                        <h2>${candidate.name}</h2>
                        <p>${candidate.title}</p>
                        <div class="availability-badge ${candidate.available ? '' : 'not-available'}">
                            <i class="fas fa-circle"></i> 
                            ${candidate.available ? 'I am available' : 'Not available'}
                        </div>
                    </div>
                </div>
                
                <div class="resume-content">
                    <!-- Left Column -->
                    <div class="resume-left">
                        <div class="resume-section">
                            <h3>About Me</h3>
                            <h4>Biography</h4>
                            <p class="about-text">${candidate.about}</p>
                        </div>
                        
                        <div class="resume-section">
                            <h4>Experience</h4>
                            ${candidate.experience.map(exp => `
                                <div class="experience-item">
                                    <div class="exp-date">${exp.date}</div>
                                    <div class="exp-title">${exp.title}</div>
                                    <div class="exp-company">${exp.company}</div>
                                    <p class="exp-description">${exp.description}</p>
                                </div>
                            `).join('')}
                        </div>
                        
                        <div class="resume-section">
                            <h4>Education</h4>
                            ${candidate.education.map(edu => `
                                <div class="education-item">
                                    <div class="edu-date">${edu.date}</div>
                                    <div class="edu-title">${edu.title}</div>
                                    <div class="edu-institution">${edu.institution}</div>
                                    <p class="edu-description">${edu.description}</p>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="resume-right">
                        <div class="resume-section">
                            <h3>Skills</h3>
                            <div class="skills-list">
                                ${candidate.skills.map(skill => `
                                    <span class="skill-item">${skill}</span>
                                `).join('')}
                            </div>
                        </div>
                        
                        <div class="resume-section">
                            <h3>Languages</h3>
                            <div class="skills-list">
                                ${candidate.languages.map(lang => `
                                    <span class="skill-item">${lang}</span>
                                `).join('')}
                            </div>
                        </div>
                        
                        <div class="resume-section">
                            <h3>Personal Information</h3>
                            <div class="personal-info">
                                <div class="info-item">
                                    <div class="info-label">DATE OF BIRTH</div>
                                    <div class="info-value">${candidate.personalInfo.dob}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">MARITAL STATUS</div>
                                    <div class="info-value">${candidate.personalInfo.maritalStatus}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">COUNTRY</div>
                                    <div class="info-value">${candidate.personalInfo.country}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">GENDER</div>
                                    <div class="info-value">${candidate.personalInfo.gender}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="resume-section contact-info">
                            <h3>Contact Information</h3>
                            <div class="personal-info">
                                <div class="info-item">
                                    <div class="info-label">WEBSITE</div>
                                    <div class="info-value">
                                        ${candidate.contactInfo.website ? 
                                            `<a href="${candidate.contactInfo.website}" target="_blank">${candidate.contactInfo.website}</a>` : 
                                            'N/A'
                                        }
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">LOCATION</div>
                                    <div class="info-value">${candidate.contactInfo.location}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">PHONE</div>
                                    <div class="info-value">${candidate.contactInfo.phone}</div>
                                </div>
                                ${candidate.contactInfo.secondaryPhone ? `
                                <div class="info-item">
                                    <div class="info-label">SECONDARY PHONE</div>
                                    <div class="info-value">${candidate.contactInfo.secondaryPhone}</div>
                                </div>
                                ` : ''}
                                <div class="info-item">
                                    <div class="info-label">EMAIL ADDRESS</div>
                                    <div class="info-value">${candidate.contactInfo.email}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="resume-section">
                            <h3>Follow Me Social Media</h3>
                            <div class="social-icons">
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="resume-actions">
                    <button class="download-btn">
                        <i class="fas fa-download"></i> Download
                    </button>
                    <button class="message-btn">Message</button>
                </div>
            `;
            
            resumeBody.innerHTML = resumeHTML;
            resumeModal.classList.add('active');
        }

        // Apply filters
        function applyFilters() {
            // Get selected skill
            currentFilters.skill = skillSelect.value;
            
            // Get selected experience
            const experienceRadio = document.querySelector('input[name="experience"]:checked');
            currentFilters.experience = experienceRadio ? experienceRadio.value : 'all';
            
            // Get selected education
            const educationRadio = document.querySelector('input[name="education"]:checked');
            currentFilters.education = educationRadio ? educationRadio.value : 'all';
            
            // Get remote job checkbox
            currentFilters.remoteJob = remoteJobCheckbox.checked;
            
            // Close filter sidebar
            filterSidebar.classList.remove('active');
            filterOverlay.classList.remove('active');
            
            // Apply filters
            filterCandidates();
        }

        // Search candidates
        function searchCandidates() {
            currentFilters.location = locationInput.value;
            filterCandidates();
        }

        // Filter candidates based on current filters
        function filterCandidates() {
            let filteredCandidates = candidatesData;
            
            // Filter by profession
            if (currentFilters.profession) {
                filteredCandidates = filteredCandidates.filter(candidate => 
                    candidate.title.toLowerCase().includes(currentFilters.profession.toLowerCase())
                );
            }
            
            // Filter by location (if we had location data in candidates)
            if (currentFilters.location) {
                filteredCandidates = filteredCandidates.filter(candidate =>
                    candidate.contactInfo.location.toLowerCase().includes(currentFilters.location.toLowerCase())
                );
            }
            
            // Filter by skill
            if (currentFilters.skill) {
                filteredCandidates = filteredCandidates.filter(candidate =>
                    candidate.skills.some(skill => 
                        skill.toLowerCase().includes(currentFilters.skill.toLowerCase())
                    )
                );
            }
            
            // Update display
            displayFilteredCandidates(filteredCandidates);
        }

        // Display filtered candidates - UPDATED with new layout
        function displayFilteredCandidates(filteredCandidates) {
            candidatesGrid.innerHTML = '';
            
            if (filteredCandidates.length === 0) {
                candidatesGrid.innerHTML = `
                    <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #64748b;">
                        <i class="fas fa-search" style="font-size: 48px; margin-bottom: 20px; color: #cbd5e1;"></i>
                        <div style="font-size: 18px; margin-bottom: 15px;">No candidates found</div>
                        <p>Try adjusting your search or filters</p>
                    </div>
                `;
                return;
            }
            
            filteredCandidates.forEach(candidate => {
                const candidateCard = document.createElement('div');
                candidateCard.className = 'candidate-card';
                
                // Create avatar HTML
                const avatarHtml = candidate.image 
                    ? `<img src="${candidate.image}" alt="${candidate.name}" onerror="this.onerror=null; this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 fill=%22%23e2e8f0%22/><text x=%2250%22 y=%2255%22 font-family=%22Arial%22 font-size=%2240%22 text-anchor=%22middle%22 fill=%22%2364748b%22>${candidate.name.charAt(0)}</text></svg>'">`
                    : `<i class="fas fa-user"></i>`;
                
                candidateCard.innerHTML = `
                    <!-- Left Section - Avatar/Image -->
                    <div class="candidate-avatar">
                        <div class="avatar-circle">
                            ${avatarHtml}
                        </div>
                    </div>
                    
                    <!-- Right Section -->
                    <div class="candidate-content">
                        <!-- Top Right Eye Icon -->
                        <div class="top-right-icon" data-id="${candidate.id}">
                            <i class="fas fa-eye"></i>
                        </div>
                        
                        <!-- Name -->
                        <h3 class="candidate-name">${candidate.name}</h3>
                        
                        <!-- Profession with icon -->
                        <div class="candidate-profession">
                            <i class="fas fa-briefcase"></i> ${candidate.title}
                        </div>
                        
                        <!-- Availability Status -->
                        <div class="availability-badge ${candidate.available ? '' : 'not-available'}">
                            <i class="fas fa-circle"></i> 
                            ${candidate.available ? 'I am available' : 'Not available'}
                        </div>
                        
                        <!-- View Resume Button -->
                        <button class="view-resume-btn" data-id="${candidate.id}">
                            View Resume <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                `;
                
                candidatesGrid.appendChild(candidateCard);
            });
            
            // Add event listeners to view resume buttons
            document.querySelectorAll('.view-resume-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const candidateId = parseInt(this.getAttribute('data-id'));
                    openResumeModal(candidateId);
                });
            });
            
            // Add event listeners to eye icons
            document.querySelectorAll('.top-right-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    const candidateId = parseInt(this.getAttribute('data-id'));
                    openResumeModal(candidateId);
                });
            });
        }

        // Initialize page when DOM is loaded
        document.addEventListener('DOMContentLoaded', initializePage);
    </script>
@endsection