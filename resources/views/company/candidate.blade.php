@include('layouts.header')
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

        body {
            background-color: #f5f7fb;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .lang-currency {
            display: flex;
            gap: 15px;
        }

        .lang-currency select {
            border: none;
            background: transparent;
            font-weight: 500;
            cursor: pointer;
            outline: none;
        }

        /* Job Search Bar */
        .job-search-bar {
            background-color: white;
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin: 20px 0;
            display: flex;
            align-items: center;
        }

        .search-box {
            flex: 1;
            display: flex;
            align-items: center;
            background-color: var(--light);
            border-radius: 30px;
            padding: 10px 20px;
            margin-right: 20px;
        }

        .search-box i {
            color: var(--gray);
            margin-right: 10px;
        }

        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            font-size: 16px;
        }

        .jobs-link {
            font-weight: 600;
            color: var(--primary);
            margin-right: 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .jobs-link i {
            margin-right: 8px;
        }

        /* Candidate Search Section */
        .candidate-search-section {
            background-color: white;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin: 30px 0;
        }

        .section-title {
            font-size: 32px;
            color: var(--dark);
            margin-bottom: 30px;
            text-align: center;
        }

        .search-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .form-group select,
        .form-group input {
            padding: 15px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 16px;
            outline: none;
            transition: var(--transition);
        }

        .form-group select:focus,
        .form-group input:focus {
            border-color: var(--primary);
        }

        .search-candidates-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: var(--transition);
            align-self: flex-end;
        }

        .search-candidates-btn:hover {
            background-color: #2a75ff;
            transform: translateY(-2px);
        }

        /* Popular Professions */
        .popular-professions {
            margin-bottom: 40px;
        }

        .popular-professions h3 {
            font-size: 18px;
            color: var(--gray);
            margin-bottom: 15px;
            text-align: center;
        }

        .profession-tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .profession-tag {
            background-color: var(--light);
            color: var(--dark);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid var(--light-gray);
        }

        .profession-tag:hover {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Candidates Grid */
        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .candidate-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 25px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--light-gray);
        }

        .candidate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .candidate-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
            border: 4px solid var(--light-gray);
        }

        .candidate-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .candidate-name {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .candidate-profession {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .availability {
            display: inline-block;
            background-color: rgba(6, 214, 160, 0.15);
            color: var(--success);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .view-resume-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
        }

        .view-resume-btn:hover {
            background-color: #2a75ff;
        }

        /* More Candidates Section */
        .more-candidates {
            margin-top: 50px;
            text-align: center;
        }

        .more-candidates h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 30px;
        }

        .candidate-mini-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .candidate-mini {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 120px;
        }

        .candidate-mini-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-bottom: 10px;
            overflow: hidden;
            border: 3px solid var(--light-gray);
        }

        .candidate-mini-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .candidate-mini-name {
            font-weight: 500;
            font-size: 14px;
            text-align: center;
        }

        /* Chat Button */
        .chat-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 5px 15px rgba(58, 134, 255, 0.4);
            cursor: pointer;
            z-index: 100;
            transition: var(--transition);
        }

        .chat-button:hover {
            background-color: #2a75ff;
            transform: scale(1.1);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .navbar {
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .job-search-bar {
                flex-direction: column;
                gap: 15px;
            }
            
            .search-box {
                width: 100%;
                margin-right: 0;
            }
            
            .jobs-link {
                margin-right: 0;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                gap: 15px;
            }
            
            .candidates-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .candidate-mini-cards {
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .nav-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .search-form {
                grid-template-columns: 1fr;
            }
            
            .candidates-grid {
                grid-template-columns: 1fr;
            }
            
            .candidate-mini {
                width: 100px;
            }
        }
    </style>


    <!-- Main Content -->
    <div class="container">
        <!-- Job Search Bar -->
        <div class="job-search-bar">
            <a href="#" class="jobs-link">
                <i class="fas fa-briefcase"></i>
                Jobs
            </a>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Job Title, Keyword">
            </div>
        </div>

        <!-- Candidate Search Section -->
        <section class="candidate-search-section">
            <h1 class="section-title">Find Candidates</h1>
            
            <form class="search-form">
                <div class="form-group">
                    <label for="profession">Select Profession</label>
                    <select id="profession">
                        <option value="">All Professions</option>
                        <option value="software-developer">Software Developer</option>
                        <option value="accountant">Accountant</option>
                        <option value="journalist">Journalist</option>
                        <option value="designer">Designer</option>
                        <option value="chef">Chef</option>
                        <option value="driver">Driver</option>
                        <option value="electrician">Electrician</option>
                        <option value="dentist">Dentist</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="location">Enter Location</label>
                    <input type="text" id="location" placeholder="City, State, or Country">
                </div>
                
                <button type="submit" class="search-candidates-btn">Search Candidates</button>
            </form>
            
            <!-- Popular Professions -->
            <div class="popular-professions">
                <h3>Popular Profession:</h3>
                <div class="profession-tags">
                    <span class="profession-tag">Accountant</span>
                    <span class="profession-tag">Actor</span>
                    <span class="profession-tag">Artist</span>
                    <span class="profession-tag">Cashier</span>
                    <span class="profession-tag">Chef</span>
                    <span class="profession-tag">Dental Hygienist</span>
                    <span class="profession-tag">Dentist</span>
                    <span class="profession-tag">Designer</span>
                    <span class="profession-tag">Driver</span>
                    <span class="profession-tag">Electrician</span>
                </div>
            </div>
            
            <!-- Candidates Grid -->
            <div class="candidates-grid">
                <!-- Candidate 1 -->
                <div class="candidate-card">
                    <div class="candidate-avatar">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
                    </div>
                    <h2 class="candidate-name">John Doe</h2>
                    <p class="candidate-profession">Software Developer</p>
                    <div class="availability">I am available</div>
                    <button class="view-resume-btn">View Resume →</button>
                </div>
                
                <!-- Candidate 2 -->
                <div class="candidate-card">
                    <div class="candidate-avatar">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Zahidul Islam">
                    </div>
                    <h2 class="candidate-name">Zahidul Islam</h2>
                    <p class="candidate-profession">Journalist</p>
                    <div class="availability">I am available</div>
                    <button class="view-resume-btn">View Resume →</button>
                </div>
                
                <!-- Candidate 3 -->
                <div class="candidate-card">
                    <div class="candidate-avatar">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Sheikh Rashed">
                    </div>
                    <h2 class="candidate-name">Sheikh Rashed</h2>
                    <p class="candidate-profession">Accountant</p>
                    <div class="availability">I am available</div>
                    <button class="view-resume-btn">View Resume →</button>
                </div>
            </div>
            
            <!-- More Candidates -->
            <div class="more-candidates">
                <h3>More Candidates</h3>
                <div class="candidate-mini-cards">
                    <div class="candidate-mini">
                        <div class="candidate-mini-avatar">
                            <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Masum Rillah">
                        </div>
                        <div class="candidate-mini-name">Masum Rillah</div>
                    </div>
                    
                    <div class="candidate-mini">
                        <div class="candidate-mini-avatar">
                            <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="Zafor Ichal">
                        </div>
                        <div class="candidate-mini-name">Zafor Ichal</div>
                    </div>
                    
                    <div class="candidate-mini">
                        <div class="candidate-mini-avatar">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Mohammad Aslam">
                        </div>
                        <div class="candidate-mini-name">Mohammad Aslam</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

    <script>
        // Interactive functionality
        document.querySelector('.search-candidates-btn').addEventListener('click', function(e) {
            e.preventDefault();
            const profession = document.getElementById('profession').value;
            const location = document.getElementById('location').value;
            
            if (!profession && !location) {
                alert('Searching for all candidates...');
            } else {
                alert(`Searching for ${profession || 'all professions'} candidates in ${location || 'all locations'}...`);
            }
        });

        document.querySelectorAll('.view-resume-btn').forEach(button => {
            button.addEventListener('click', function() {
                const candidateName = this.closest('.candidate-card').querySelector('.candidate-name').textContent;
                alert(`Viewing resume of: ${candidateName}`);
            });
        });

        document.querySelectorAll('.profession-tag').forEach(tag => {
            tag.addEventListener('click', function() {
                const profession = this.textContent;
                document.getElementById('profession').value = profession.toLowerCase().replace(/\s+/g, '-');
                document.querySelector('.search-candidates-btn').click();
            });
        });

        document.querySelector('.post-job-btn').addEventListener('click', function() {
            alert('Post a Job feature would open here');
        });

        document.querySelector('.jobs-link').addEventListener('click', function(e) {
            e.preventDefault();
            alert('Navigating to Jobs page');
        });

        document.querySelector('.chat-button').addEventListener('click', function() {
            alert('Chat with us feature would open here!');
        });

        // Search box functionality
        document.querySelector('.search-box input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Searching for jobs with keyword: "${this.value}"`);
            }
        });

        // Navigation active state
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.nav-links a').forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>