@extends('layouts.master')
@section('content')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #fff;
            color: #1f2937;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* BREADCRUMB */
        .breadcrumb {
            background: #f1f3f6;
            padding: 18px 40px;
            font-weight: 500;
        }

        /* MAIN */
        .container {
            max-width: 1300px;
            margin: 10px auto;
            padding: 0 20px;
        }

        .job-card {
            background: #fff;
            border-radius: 14px;
            padding: 28px;
        }

        .job-header {
            display: flex;
            align-items: center;
            gap: 16px;
            background-color: white;
            position: sticky;
            top: 0;
            z-index: 100;
            height: 100px;
            border-bottom: 0.5px solid #f1f3f6;
        }

        .job-logo {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background: #0a2540;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 26px;
        }

        .badge {
            background: #22c55e;
            color: #fff;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 12px;
            margin-left: 10px;
        }

        /* CONTENT GRID */
        .content {
            display: grid;
            grid-template-columns: 2.3fr 1fr;
            gap: 30px;
            margin-top: 25px;
        }

        /* LEFT */
        .section h5 {
            font-size: 18px;
            margin-bottom: 12px;
        }


        .section p {
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .section ul {
            padding-left: 18px;
        }

        .section li {
            margin-bottom: 10px;
        }

        /* RIGHT SIDEBAR */
        .sidebar-box {
            background: #fff;
            border-radius: 14px;
            padding: 22px;
            margin-bottom: 20px;
            border: 1px solid #e5e7eb;
        }

        .salary-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: center;
            /* margin-top:12px; */
        }

        .salary-info p {
            font-weight: 600;
            margin-bottom: 2px;
        }

        .salary-info span {
            font-size: 13px;
            color: #6b7280;
        }

        .separator-line {
            width: 1px;
            height: 50px;
            background: #e1eaf7;
            margin: 0 16px;
        }


        .job-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 6px;
        }

        .job-info i {
            font-size: 22px;
            color: #2563eb;
        }

        .job-info p {
            font-weight: 600;
            margin: 0;
        }

        .job-info small {
            font-size: 13px;
            color: #6b7280;
        }

        .icon-box {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 16px;
        }

        .icon {
            font-size: 22px;
            color: #0a63c9;
        }

        /* TAGS */
        .tags span {
            display: inline-block;
            background: #eafff2;
            color: #16a34a;
            padding: 4px 8px;
            border-radius: 8px;
            font-size: 13px;
            margin: 0px;
        }

        /* OVERVIEW */
        .overview {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            text-align: center;
        }

        .overview i {
            color: #0a63c9;
            font-size: 22px;
            margin-bottom: 6px;
        }

        .overview p {
            font-size: 13px;
            color: #6b7280;
        }

        /* SHARE */
        .share-icons i {
            background: #eef2ff;
            color: #0a63c9;
            padding: 10px;
            border-radius: 8px;
            margin: 5px;
        }

        .favourite {
            margin-top: -30px;
            margin-left: 600px;
        }

        .favourite button {
            width: 50px;
            height: 50px;
            color: blue;
            border: none;
            background: #fff;
        }

        .favourite button:hover {
            background-color: #cbdff2
        }

        /* Modal Overlay */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        /* Modal Box */
        .modal-box {
            background: #fff;
            width: 360px;
            padding: 30px 25px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Icon */
        .modal-icon i {
            font-size: 48px;
            color: #f59e0b;
            margin-bottom: 15px;
        }

        /* Text */
        .modal-box h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .modal-box p {
            font-size: 15px;
            color: #6b7280;
            margin-bottom: 22px;
        }

        /* OK Button */
        .ok-btn {
            background: #2563eb;
            color: #fff;
            border: none;
            padding: 10px 28px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
        }

        .ok-btn:hover {
            background: #1e40af;
        }

        .copy-link {
            display: flex;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 14px;
        }

        .copy-link input {
            border: none;
            padding: 10px;
            flex: 1;
            font-size: 13px;
            color: #374151;
        }

        .copy-link button {
            background: #2563eb;
            border: none;
            color: #fff;
            padding: 0 16px;
            cursor: pointer;
        }

        .copy-link button:hover {
            background: #1e40af;
        }

        .share-icons i {
            background: #eef2ff;
            color: #2563eb;
            padding: 10px;
            border-radius: 8px;
            margin: 5px;
            cursor: pointer;
        }

        .sidebar-box h4 {
            margin-bottom: 12px;
        }

        /* RESPONSIVE STYLES */
        @media (max-width: 1200px) {
            .content {
                grid-template-columns: 2fr 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 992px) {
            .content {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .favourite {
                margin-left: auto;
                margin-right: auto;
            }

            .job-header {
                flex-direction: column;
                height: auto;
                gap: 10px;
                padding: 10px 20px;
            }
        }

        @media (max-width: 768px) {
            .breadcrumb {
                padding: 12px 20px;
                font-size: 14px;
            }

            .job-card {
                padding: 20px;
            }

            .job-logo {
                width: 50px;
                height: 50px;
                font-size: 22px;
            }

            .salary-row {
                flex-direction: column;
                gap: 10px;
            }

            .separator-line {
                display: none;
            }

            .overview {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .breadcrumb {
                padding: 10px 15px;
                font-size: 13px;
            }

            .job-card {
                padding: 15px;
            }

            .overview {
                grid-template-columns: 1fr;
            }

            .job-info i,
            .overview i {
                font-size: 18px;
            }
        }
    </style>

    <!-- BREADCRUMB -->
    <div class="breadcrumb">
        <h5 style="margin-left: 100px;">Job Details</h5><a href="{{ route('home') }}" style="margin-left: 1000px;">Home</a> / Job Details
    </div>

    <!-- MAIN -->
    <div class="container">
        <div class="job-card">

            <div class="job-header">
                <div class="job-logo"><img src="{{ asset('images/logo.png') }}"></i></div>
                <div>
                    <h2>UI/UX Designer
                        <span class="badge">CONTRACTUAL</span>
                    </h2>
                    <p style="color:#6b7280;">Templatecookie</p>

                </div>
                <!-- Favourite Button -->
                <div class="favourite">
                    <button onclick="openUnauthorizedModal()">
                        <i class="fa-regular fa-bookmark"></i>
                    </button>
                </div>

                <!-- Unauthorized Modal -->
                <div class="modal-overlay" id="unauthorizedModal">
                    <div class="modal-box">
                        <div class="modal-icon">
                            <i class="fa-solid fa-circle-exclamation"></i>
                        </div>
                        <h2>Unauthorized Access</h2>
                        <p>You don't have permission to perform this action</p>
                        <button class="ok-btn" onclick="closeUnauthorizedModal()">OK</button>
                    </div>
                </div>

            </div>

            <div class="content">

                <!-- LEFT -->
                <div>
                    <div class="section">
                        <h5>Job Description</h5>
                        <p><strong>Title:</strong> UI/UX Designer</p>
                        <p><strong>Company:</strong> Templatecookie</p>
                        <p><strong>Location:</strong> Remote</p>
                        <p><strong>Position Type:</strong> Contractual</p>

                        <p>Templatecookie is a dynamic and innovative company delivering exceptional digital products and
                            services globally.</p>
                    </div>

                    <div class="section">
                        <h5>Who Are We?</h5>
                        <p>Templatecookie is a dynamic and innovative [industry] company with a passion for delivering
                            exceptional products and services to our customers.
                            We're on a mission to provide unparalleled customer experiences, and we're looking for a
                            talented
                            Customer Support Specialist to
                            join our remote team and help us achieve our goals. If you're a dedicated professional who
                            excels in
                            communication, problem-solving, and
                            customer service, we want you to be part of our team.
                        </p>
                    </div>
                    <div class="section">
                        <h5>Who We Are Looking For:</h5>
                        <p>
                            We need someone who is able to work on multiple projects without hand holding,
                            be a team player who wants to work remotely but also be active in our company culture,
                            values a good work/life balance and believes in getting results.
                        </p>
                        <p>We build technology solutions for small and medium sized businesses which means you will
                            get to work on a wide range of technologies including single page web applications,
                            complex systems integration and large-scale eCommerce deployments. You will play a crucial
                            role in ensuring our customers receive top-notch assistance and solutions.
                            You will be the first point of contact for customers seeking help, support, or information,
                            and your dedication to delivering excellent service will be instrumental in our continued
                            success.
                        </p>
                    </div>
                    <div class="section">
                        <h5>Requirements</h5>
                        <ul>
                            <li>Experience building real-world PHP applications</li>
                            <li>Extensive use of Laravel</li>
                            <li>Experience with AWS infrastructure</li>
                            <li>Strong frontend skills (HTML, CSS, JS)</li>
                            <li>Experience with Vue.js</li>
                            <li>Understanding of UI/UX principles</li>
                            <li>Git & Linux knowledge</li>
                        </ul>
                    </div>

                    <div class="section">
                        <h5>Qualifications</h5>
                        <ul>
                            <li>Excellent English communication</li>
                            <li>Problem-solving mindset</li>
                            <li>Self-motivated and remote-ready</li>
                            <li>Flexible working hours</li>
                        </ul>
                    </div>
                    <div class="section">
                        <h5>Benefits:</h5>
                        <ul>
                            <li>Paid time off and holiday pay</li>
                            <li>Health, dental, and retirement benefits</li>
                            <li>Ongoing training and professional development opportunities</li>
                            <li>Remote work flexibility with a supportive and collaborative team</li>
                            <li>Performance-based bonuses</li>
                            <li>Competitive salary</li>
                            <li>Dental insurance</li>
                            <li>Flexible schedule</li>
                            <li>Health insurance</li>
                            <li>Paid time off</li>
                            <li>Vision insurance</li>
                        </ul>
                    </div>
                    <div class="section">
                        <h5>Visa Sponsorship Potentially Available:</h5>
                        <ul>
                            <li>No: Not providing sponsorship for this job</li>
                        </ul>
                        <h5>Schedule:</h5>
                        <ul>
                            <li>Monday to Friday</li>
                        </ul>
                        <h5>Company's website:</h5>
                        <ul>
                            <li>https://lomeyolabs.com</li>
                        </ul>
                        <h5>Pay:</h5>
                        <ul>
                            <li>200 - 500 USD</li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT -->
                <div>

                    <div class="sidebar-box salary">

                        <div class="salary-row">
                            <!-- Salary Info -->
                            <div class="salary-info">

                                <p>Salary <br>Competitive</p>
                                <span>Hourly</span>
                            </div>

                            <!-- Separator -->
                            <div class="separator-line"></div>


                            <!-- Job Type -->
                            <div class="job-info">
                                <i class="fa-solid fa-briefcase"></i>
                                <div>
                                    <p>Remote Job</p>
                                    <small>Worldwide</small>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-box">
                        <h4>Job Benefits</h4>
                        <div class="tags">
                            <span>400k</span>
                            <span>Distribution team</span>
                            <span>Async</span>
                            <span>Vision Insurance</span>
                            <span>Company Retreats</span>
                            <span>Home Office Budget</span>
                            <span>Pay in Crypto</span>
                            <span>Profit Sharing</span>
                        </div>
                    </div>


                    <div class="sidebar-box">
                        <h4>Job Overview</h4>
                        <div class="overview">
                            <div>
                                <i class="fa-regular fa-calendar"></i>
                                <p>Posted<br><b>2 weeks ago</b></p>
                            </div>

                            <div>
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Type<br><b>Contractual</b></p>
                            </div>

                            <div>
                                <i class="fa-solid fa-user-tie"></i>
                                <p>Role<br><b>Director</b></p>
                            </div>

                            <div>
                                <i class="fa-regular fa-clock"></i>
                                <p>JOB PERIOD<br><b>15/12/2025 →<br>20/12/2025</b></p>
                            </div>

                            <div>
                                <i class="fa-solid fa-graduation-cap"></i>
                                <p>EDUCATION<br><b>Graduated</b></p>
                            </div>

                            <div>
                                <i class="fa-solid fa-chart-line"></i>
                                <p>EXPERIENCE<br><b>10+ Years</b></p>
                            </div>

                            <div>
                                <i class="fa-solid fa-users"></i>
                                <p>TOTAL VACANCIES<br><b>3-5</b></p>
                            </div>

                            <div>
                                <i class="fa-solid fa-briefcase"></i>
                                <p>PROFESSION<br><b>Chef</b></p>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-box">
                        <h4>Job Tags</h4>
                        <div class="tags">
                            <span>Laravel</span>
                            <span>Frontend</span>
                            <span>Marketing</span>
                            <span>Technology</span>
                            <span>HR</span>
                            <span>Delivery Driver</span>
                            <span>Data Scientist</span>
                            <span>Cybersecurity Engineer</span>
                            <span>Product Manager</span>
                            <span>Receptionist</span>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h4>Share This Job:</h4>

                        <div class="copy-link">
                            <input type="text" id="jobLink"
                                value="https://jobpilot.lomeyolabs.com/job/uiux-designer_1765771590_2093013452" readonly>
                            <button onclick="copyJobLink()">
                                <i class="fa-solid fa-link"></i>
                            </button>
                        </div>

                        <div class="share-icons">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-linkedin-in"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-whatsapp"></i>
                            <i class="fab fa-telegram"></i>
                            <i class="fab fa-pinterest"></i>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h4>Location</h4>
                        <p><i class="fa-solid fa-location-dot"></i> USA</p>

                        <iframe src="https://www.google.com/maps?q=USA&output=embed" width="100%" height="220"
                            style="border:0;border-radius:12px;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script>
        function openUnauthorizedModal() {
            document.getElementById('unauthorizedModal').style.display = 'flex';
        }

        function closeUnauthorizedModal() {
            document.getElementById('unauthorizedModal').style.display = 'none';
        }
    </script>
    <script>
        function copyJobLink() {
            const input = document.getElementById("jobLink");
            input.select();
            input.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(input.value);
            alert("Job link copied!");
        }
    </script>


@endsection