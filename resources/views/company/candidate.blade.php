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
            padding: 18px 40px;
            font-weight: 500;
            color: rgb(76, 75, 75);
        }
        .profession{
            margin-top: 10px;
            margin-bottom: 30px;
            padding: 20px 10px;
            border-bottom: 1px solid rgb(221, 214, 214);
            
            
        }
        .profession a{
            padding: 10px;
            color: black;
            text-decoration: none;
            gap: 10px;
        }
        .btn-cat {
            background-color: #f5f7fa;
            border: none;
            margin-left: 500px;
            font-size: 20px;
            height: 50px
        }

        .btn-cat a {
            text-decoration: none;
            padding: 30px;
            margin: 5px;
        }

        /* Main Content Area */
        .main-content {
            flex: 1;
            padding: 40px;
        }

        .page-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }

        /* Candidates Grid */
        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .candidate-card {
            background-color: #f5f7fa;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            border: 2px solid transparent;
        }

        .candidate-card:hover {
            border-color: #3a86ff;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .candidate-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .candidate-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #3a86ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-right: 15px;
        }

        .candidate-info h3 {
            font-size: 20px;
            margin-bottom: 5px;
            color: #333;
            text-decoration: none;
        }

        .candidate-info p {
            color: #777;
            font-size: 15px;
        }

        .candidate-bio {
            margin-bottom: 20px;
            color: #666;
            line-height: 1.6;
            font-size: 15px;
        }

        .candidate-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .skill-tag {
            background-color: #f0f7ff;
            color: #3a86ff;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 500;
        }

        .candidate-actions {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: #3a86ff;
            color: white;
            flex: 1;
        }

        .btn-primary:hover {
            background-color: #2a75f0;
        }

        .btn-outline {
            background-color: white;
            color: #3a86ff;
            border: 1px solid #3a86ff;
            flex: 1;
        }

        .btn-outline:hover {
            background-color: #f0f7ff;
        }

        .btn-icon {
            background-color: #f8f9fa;
            color: #555;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .btn-icon:hover {
            background-color: #e9ecef;
        }

        /* Filters */
        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            background-color: #f5f7fa;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgb(230, 224, 224);
            /* box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); */
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-label {
            font-weight: 600;
            color: #555;
        }

        .filter-select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f5f7fa;
            font-size: 14px;
            min-width: 150px;
        }

        .search-candidates {
            flex: 1;
            max-width: 400px;
        }

        .search-input {
            width: 100%;
            padding: 10px 15px;
            background-color: #f5f7fa;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
        }

        /* Profile Modal */
        .profile-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow-y: auto;
        }

        .modal-content {
            background-color: #f5f7fa;
            width: 90%;
            max-width: 900px;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 30px 30px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .modal-title {
            font-size: 24px;
            color: #333;
        }

        .modal-subtitle {
            color: #777;
            font-size: 16px;
            margin-top: 5px;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #777;
            line-height: 1;
        }

        .modal-body {
            padding: 30px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .profile-section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .section-subtitle {
            font-size: 18px;
            margin-bottom: 15px;
            color: #555;
        }

        .about-text {
            color: #666;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .experience-item,
        .education-item {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid #f0f0f0;
        }

        .experience-item:last-child,
        .education-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .exp-date,
        .edu-date {
            color: #777;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .exp-title,
        .edu-title {
            font-weight: 700;
            font-size: 17px;
            margin-bottom: 5px;
            color: #333;
        }

        .exp-company,
        .edu-institution {
            color: #3a86ff;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .exp-description,
        .edu-description {
            color: #666;
            line-height: 1.6;
            font-size: 15px;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .skill-item {
            background-color: #f5f7fa;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 14px;
            color: #3a86ff;
        }

        .personal-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 20px;
        }

        .info-item {
            margin-bottom: 15px;
        }

        .info-label {
            font-size: 13px;
            color: #777;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-weight: 600;
            color: #333;
        }

        .contact-info {
            margin-top: 25px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #555;
            font-size: 18px;
            transition: all 0.3s;
        }

        .social-icon:hover {
            background-color: #3a86ff;
            color: white;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 20px;
            }

            .sidebar-menu {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .sidebar-menu li {
                margin-bottom: 0;
            }

            .sidebar-menu a {
                padding: 10px 15px;
            }

            .modal-body {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .top-nav {
                flex-direction: column;
                gap: 15px;
            }

            .search-bar {
                width: 100%;
            }

            .candidates-grid {
                grid-template-columns: 1fr;
            }

            .filters {
                flex-direction: column;
            }

            .search-candidates {
                max-width: 100%;
            }

            .personal-info {
                grid-template-columns: 1fr;
            }

            .breadcrumb {
                padding: 10px 15px;
                font-size: 13px;
            }
        }
    </style>

    <div class="breadcrumb">
        <h5 style="margin-left: 100px;">Find Candidate</h5><a href="{{ route('home') }}"
            style="margin-left: 1000px; text-decoration: none; color: rgb(108, 105, 105);">Home</a> / Find Candidate
    </div>
    <!-- Main Content -->
    <div class="container">

        <!-- Filters -->
        <div class="filters">
            <div class="filter-group">
                <span class="filter-label">Filter</span>
                <select class="filter-select">
                    <option value="all">All</option>
                    <option value="recent">Most Recent</option>
                    <option value="experience">By Experience</option>
                    <option value="education">By Education</option>
                </select>
            </div>

            <div class="filter-group">
                <span class="filter-label">Category</span>
                <select class="filter-select">
                    <option value="all">All Categories</option>
                    <option value="developer">Developer</option>
                    <option value="designer">Designer</option>
                    <option value="marketing">Marketing</option>
                    <option value="journalist">Journalist</option>
                </select>
            </div>
            <div class="filter-about">
                <input type="text" class="search-input" placeholder="Filters">
            </div>
            <div class="search-candidates">
                <input type="text" class="search-input" placeholder="Search candidates...">
            </div>
        </div>
      <div class="profession">
            <span>Popular Profession :</span>
            <a href="#" >Account,</a>
            <a href="#" >Actor</a>
            <a href="#" >Developer</a>
            <a href="#" >Doctor</a>
        </div>
        <!-- Candidates Grid -->
        <div class="candidates-grid" id="candidatesGrid">
            <!-- Candidate cards will be dynamically inserted here -->
        </div>

        <!-- Profile Modal -->
        <div class="profile-modal" id="profileModal">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h2 class="modal-title" id="modalName">Ariful Islam</h2>
                        <p class="modal-subtitle" id="modalTitle">Journalist</p>
                    </div>
                    <button class="close-modal" id="closeModalBtn">&times;</button>
                </div>

                <div class="modal-body">
                    <!-- Left Column -->
                    <div class="profile-left">
                        <!-- About Me -->
                        <div class="profile-section">
                            <h3 class="section-title">About Me</h3>

                            <h4 class="section-subtitle">Biography</h4>
                            <p class="about-text" id="modalBio">
                                Fugit explicabo ex earum sed quia. Molestias incidunt quis distinctio doloribus. Repellat
                                quaerat dicta nihil iste. Autem aliquid nam doloribus veritatis impedit voluptatibus.
                            </p>

                            <h4 class="section-subtitle">Experience</h4>

                            <div class="experience-item">
                                <div class="exp-date">01 Jun 2015</div>
                                <div class="exp-title">Senior Software Engineer</div>
                                <div class="exp-company">Twitter/Software</div>
                                <p class="exp-description">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts and
                                    documentation to identify requirements and solutions, Write well-designed, testable
                                    code, Produce specifications and determine operational feasibility.
                                </p>
                            </div>

                            <div class="experience-item">
                                <div class="exp-date">01 Jan 2020</div>
                                <div class="exp-title">Product Manager</div>
                                <div class="exp-company">Facebook/Software</div>
                                <p class="exp-description">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts and
                                    documentation to identify requirements and solutions, Write well-designed, testable
                                    code, Produce specifications and determine operational feasibility.
                                </p>
                            </div>

                            <div class="experience-item">
                                <div class="exp-date">01 Jan 2021</div>
                                <div class="exp-title">Software Engineer</div>
                                <div class="exp-company">Google/Software</div>
                                <p class="exp-description">
                                    Execute full software development life cycle (SDLC), Develop flowcharts, layouts and
                                    documentation to identify requirements and solutions. Write well-designed, testable
                                    code, Produce specifications and determine operational feasibility.
                                </p>
                            </div>
                        </div>

                        <!-- Education -->
                        <div class="profile-section">
                            <h4 class="section-subtitle">Education</h4>

                            <div class="education-item">
                                <div class="edu-date">2010</div>
                                <div class="edu-title">MSC</div>
                                <div class="edu-institution">MSC / Masters</div>
                                <p class="edu-description">
                                    Students who graduate with a master's degree should possess advanced knowledge of a
                                    specialized body of theoretical.
                                </p>
                            </div>

                            <div class="education-item">
                                <div class="edu-date">2004</div>
                                <div class="edu-title">BSC</div>
                                <div class="edu-institution">BSC / Graduation</div>
                                <p class="edu-description">
                                    A graduate student is someone who has earned a bachelor's degree and is pursuing
                                    additional education in a specific field.
                                </p>
                            </div>

                            <div class="education-item">
                                <div class="edu-date">2002</div>
                                <div class="edu-title">SSC</div>
                                <div class="edu-institution">SSC / Secondary</div>
                                <p class="edu-description">
                                    Secondary school is defined as schooling after elementary school, therefore in the U.S.
                                    that would be grades 6 through 12. However, once a student reaches grade 9, they are
                                    considered to be a high school student.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="profile-right">
                        <!-- Skills -->
                        <div class="profile-section">
                            <h3 class="section-title">Skills</h3>
                            <div class="skills-list">
                                <span class="skill-item">Newsletters</span>
                                <span class="skill-item">Pinia</span>
                                <span class="skill-item">Languages</span>
                                <span class="skill-item">Corsican</span>
                                <span class="skill-item">Yoruba</span>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="profile-section">
                            <h3 class="section-title">Personal Information</h3>
                            <div class="personal-info">
                                <div class="info-item">
                                    <div class="info-label">DATE OF BIRTH</div>
                                    <div class="info-value" id="modalDob">15 December, 2025</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">MARITAL STATUS</div>
                                    <div class="info-value" id="modalMarital">Single</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">COUNTRY</div>
                                    <div class="info-value" id="modalCountry">N/A</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">GENDER</div>
                                    <div class="info-value" id="modalGender">Other</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">EXPERIENCE</div>
                                    <div class="info-value">1 Year</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">EDUCATION</div>
                                    <div class="info-value">PhD</div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="profile-section contact-info">
                            <h3 class="section-title">Contact Information</h3>
                            <div class="personal-info">
                                <div class="info-item">
                                    <div class="info-label">WEBSITE</div>
                                    <div class="info-value" id="modalWebsite">http://www.altenwerth.net/</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">LOCATION</div>
                                    <div class="info-value" id="modalLocation">Angola</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">PHONE</div>
                                    <div class="info-value" id="modalPhone">N/A</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">SECONDARY PHONE</div>
                                    <div class="info-value">N/A</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label">EMAIL ADDRESS</div>
                                    <div class="info-value" id="modalEmail">N/A</div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="profile-section">
                            <h3 class="section-title">Follow Me Social Media</h3>
                            <div class="social-icons">
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Sample data for candidates
        const candidatesData = [
            {
                id: 1,
                name: "Ariful Islam",
                title: "Journalist",
                bio: "Fugit explicabo ex earum sed quia. Molestias incidunt quis distinctio doloribus. Repellat quaerat dicta nihil iste. Autem aliquid nam doloribus veritatis impedit voluptatibus.",
                skills: ["Newsletters", "Pinia", "Languages", "Corsican", "Yoruba"],
                experience: "1 Year",
                education: "PhD",
                dob: "15 December, 2025",
                maritalStatus: "Single",
                country: "N/A",
                gender: "Other",
                website: "http://www.altenwerth.net/",
                location: "Angola",
                phone: "N/A",
                email: "N/A"
            },
            {
                id: 2,
                name: "Shelkh Rashed",
                title: "Accountant",
                bio: "Experienced accountant with 5+ years in corporate finance and auditing. Specialized in tax planning and financial reporting.",
                skills: ["Financial Analysis", "Tax Planning", "QuickBooks", "Excel", "Auditing"],
                experience: "5 Years",
                education: "MCom",
                dob: "10 March, 1990",
                maritalStatus: "Married",
                country: "USA",
                gender: "Male",
                website: "http://www.example.com/",
                location: "New York",
                phone: "+1 (555) 123-4567",
                email: "rashed@example.com"
            },
            {
                id: 3,
                name: "Jihadul Islam",
                title: "Electrician",
                bio: "Licensed electrician with expertise in residential and commercial electrical systems. Focus on safety and code compliance.",
                skills: ["Wiring", "Electrical Systems", "Safety Compliance", "Troubleshooting", "Installation"],
                experience: "8 Years",
                education: "Diploma",
                dob: "22 July, 1985",
                maritalStatus: "Single",
                country: "Canada",
                gender: "Male",
                website: "N/A",
                location: "Toronto",
                phone: "+1 (416) 555-7890",
                email: "j.islam@example.com"
            },
            {
                id: 4,
                name: "Riyad Hossain",
                title: "Chef",
                bio: "Award-winning chef with expertise in French and Asian fusion cuisine. Passionate about creating innovative culinary experiences.",
                skills: ["French Cuisine", "Asian Fusion", "Menu Planning", "Food Safety", "Pastry"],
                experience: "12 Years",
                education: "Culinary Arts",
                dob: "5 November, 1980",
                maritalStatus: "Married",
                country: "France",
                gender: "Male",
                website: "http://www.riyadcuisine.com/",
                location: "Paris",
                phone: "+33 1 23 45 67 89",
                email: "riyad@chef.com"
            },
            {
                id: 5,
                name: "Rakibul Islam",
                title: "Pharmacist",
                bio: "Clinical pharmacist with expertise in medication therapy management and patient counseling. Focus on optimizing drug regimens.",
                skills: ["Medication Therapy", "Patient Counseling", "Pharmaceutical Care", "Drug Interactions", "Compounding"],
                experience: "6 Years",
                education: "PharmD",
                dob: "30 April, 1992",
                maritalStatus: "Single",
                country: "UK",
                gender: "Male",
                website: "N/A",
                location: "London",
                phone: "+44 20 7946 0958",
                email: "r.islam@pharmacy.co.uk"
            },
            {
                id: 6,
                name: "Emma Johnson",
                title: "Software Engineer",
                bio: "Full-stack developer with expertise in JavaScript frameworks and cloud technologies. Passionate about building scalable web applications.",
                skills: ["JavaScript", "React", "Node.js", "AWS", "Python"],
                experience: "4 Years",
                education: "MSc Computer Science",
                dob: "12 August, 1993",
                maritalStatus: "Single",
                country: "USA",
                gender: "Female",
                website: "http://www.emmajohnson.dev/",
                location: "San Francisco",
                phone: "+1 (415) 555-2468",
                email: "emma@johnson.dev"
            }
        ];

        // DOM Elements
        const candidatesGrid = document.getElementById('candidatesGrid');
        const profileModal = document.getElementById('profileModal');
        const closeModalBtn = document.getElementById('closeModalBtn');

        // Modal elements
        const modalName = document.getElementById('modalName');
        const modalTitle = document.getElementById('modalTitle');
        const modalBio = document.getElementById('modalBio');
        const modalDob = document.getElementById('modalDob');
        const modalMarital = document.getElementById('modalMarital');
        const modalCountry = document.getElementById('modalCountry');
        const modalGender = document.getElementById('modalGender');
        const modalWebsite = document.getElementById('modalWebsite');
        const modalLocation = document.getElementById('modalLocation');
        const modalPhone = document.getElementById('modalPhone');
        const modalEmail = document.getElementById('modalEmail');

        // Initialize the page
        function initializePage() {
            renderCandidates();

            // Load from localStorage if available
            const savedCandidates = localStorage.getItem('jobpilotCandidates');
            if (savedCandidates) {
                candidatesData = JSON.parse(savedCandidates);
                renderCandidates();
            }
        }

        // Render candidates
        function renderCandidates() {
            candidatesGrid.innerHTML = '';

            // Render each candidate
            candidatesData.forEach(candidate => {
                const candidateCard = document.createElement('div');
                candidateCard.className = 'candidate-card';

                // Get first letter for avatar
                const firstLetter = candidate.name.charAt(0);

                // Limit bio to 100 characters for card view
                const shortBio = candidate.bio.length > 100
                    ? candidate.bio.substring(0, 100) + '...'
                    : candidate.bio;

                candidateCard.innerHTML = `
                                    <div class="candidate-header">
                                        <div class="candidate-avatar">${firstLetter}</div>
                                        <div class="candidate-info">
                                            <h3>${candidate.name}</h3>
                                            <p>${candidate.title}</p>
                                        </div>
                                    </div>

                                    <div class="candidate-bio">
                                        ${shortBio}
                                    </div>

                                    <div class="candidate-skills">
                                        ${candidate.skills.slice(0, 3).map(skill =>
                    `<span class="skill-tag">${skill}</span>`
                ).join('')}
                                        ${candidate.skills.length > 3 ?
                        `<span class="skill-tag">+${candidate.skills.length - 3} more</span>` : ''
                    }
                                    </div>

                                    <div class="candidate-actions">
                                        <button class="btn btn-primary view-resume-btn" data-id="${candidate.id}">
                                            <i class="fas fa-eye"></i> View Resume
                                        </button>
                                        <button class="btn btn-outline">
                                            <i class="fas fa-envelope"></i> Message
                                        </button>
                                    </div>
                                `;

                candidatesGrid.appendChild(candidateCard);
            });

            // Add event listeners to view profile buttons
            document.querySelectorAll('.view-resume-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const candidateId = parseInt(this.getAttribute('data-id'));
                    openProfileModal(candidateId);
                });
            });
        }

        // Open profile modal with candidate data
        function openProfileModal(candidateId) {
            const candidate = candidatesData.find(c => c.id === candidateId);

            if (!candidate) return;

            // Update modal content
            modalName.textContent = candidate.name;
            modalTitle.textContent = candidate.title;
            modalBio.textContent = candidate.bio;
            modalDob.textContent = candidate.dob;
            modalMarital.textContent = candidate.maritalStatus;
            modalCountry.textContent = candidate.country;
            modalGender.textContent = candidate.gender;
            modalWebsite.textContent = candidate.website;
            modalLocation.textContent = candidate.location;
            modalPhone.textContent = candidate.phone;
            modalEmail.textContent = candidate.email;

            // Show modal
            profileModal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        // Close profile modal
        function closeProfileModal() {
            profileModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Re-enable scrolling
        }

        // Event Listeners
        document.addEventListener('DOMContentLoaded', initializePage);

        closeModalBtn.addEventListener('click', closeProfileModal);

        // Close modal when clicking outside
        window.addEventListener('click', (event) => {
            if (event.target === profileModal) {
                closeProfileModal();
            }
        });

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();

            // Filter candidates
            const filteredCandidates = candidatesData.filter(candidate =>
                candidate.name.toLowerCase().includes(searchTerm) ||
                candidate.title.toLowerCase().includes(searchTerm) ||
                candidate.bio.toLowerCase().includes(searchTerm) ||
                candidate.skills.some(skill => skill.toLowerCase().includes(searchTerm))
            );

            // Update display
            renderFilteredCandidates(filteredCandidates);
        });

        // Filter by category
        const categorySelect = document.querySelectorAll('.filter-select')[1];
        categorySelect.addEventListener('change', function () {
            const category = this.value;

            if (category === 'all') {
                renderCandidates();
                return;
            }

            // Filter candidates by category (title)
            const filteredCandidates = candidatesData.filter(candidate =>
                candidate.title.toLowerCase().includes(category)
            );

            // Update display
            renderFilteredCandidates(filteredCandidates);
        });

        // Render filtered candidates
        function renderFilteredCandidates(filteredCandidates) {
            candidatesGrid.innerHTML = '';

            if (filteredCandidates.length === 0) {
                candidatesGrid.innerHTML = `
                                    <div class="empty-state" style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                                        <div style="font-size: 60px; color: #ddd; margin-bottom: 20px;">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        <div style="font-size: 18px; margin-bottom: 15px; color: #777;">No candidates found</div>
                                        <p>Try adjusting your search or filters</p>
                                    </div>
                                `;
                return;
            }

            // Render each filtered candidate
            filteredCandidates.forEach(candidate => {
                const candidateCard = document.createElement('div');
                candidateCard.className = 'candidate-card';

                // Get first letter for avatar
                const firstLetter = candidate.name.charAt(0);

                // Limit bio to 100 characters for card view
                const shortBio = candidate.bio.length > 100
                    ? candidate.bio.substring(0, 100) + '...'
                    : candidate.bio;

                candidateCard.innerHTML = `
                                    <div class="candidate-header">
                                        <div class="candidate-avatar">${firstLetter}</div>
                                        <div class="candidate-info">
                                            <h3>${candidate.name}</h3>
                                            <p>${candidate.title}</p>
                                        </div>
                                    </div>

                                    <div class="candidate-bio">
                                        ${shortBio}
                                    </div>

                                    <div class="candidate-skills">
                                        ${candidate.skills.slice(0, 3).map(skill =>
                    `<span class="skill-tag">${skill}</span>`
                ).join('')}
                                        ${candidate.skills.length > 3 ?
                        `<span class="skill-tag">+${candidate.skills.length - 3} more</span>` : ''
                    }
                                    </div>

                                    <div class="candidate-actions">
                                        <button class="btn btn-primary view-resume-btn" data-id="${candidate.id}">
                                            <i class="fas fa-eye"></i> View Profile
                                        </button>
                                        <button class="btn btn-outline">
                                            <i class="fas fa-envelope"></i> Message
                                        </button>
                                    </div>
                                `;

                candidatesGrid.appendChild(candidateCard);
            });

            // Add event listeners to view profile buttons
            document.querySelectorAll('.view-resume-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const candidateId = parseInt(this.getAttribute('data-id'));
                    openProfileModal(candidateId);
                });
            });
        }
    </script>
@endsection