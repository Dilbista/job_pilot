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
        
        /* Company Details Card */
        .company-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .company-header {
            background: linear-gradient(to right, #2563eb, #3b82f6);
            color: white;
            padding: 30px;
        }
        
        .company-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .company-industry {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 20px;
        }
        
        .open-position-btn {
            display: inline-flex;
            align-items: center;
            background: white;
            color: #2563eb;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .open-position-btn:hover {
            background: #f0f7ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .open-position-btn i {
            margin-left: 8px;
            font-size: 14px;
        }
        
        .company-content {
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
        }
        
        .company-description h3, .contact-info h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #1e293b;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f5f9;
        }
        
        .company-description p {
            margin-bottom: 20px;
            color: #475569;
            font-size: 15px;
        }
        
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 25px;
        }
        
        .skill-tag {
            background: #f1f5f9;
            color: #475569;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .social-share {
            margin-top: 25px;
        }
        
        .social-share h4 {
            font-size: 16px;
            margin-bottom: 12px;
            color: #475569;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        
        .social-icons a:hover {
            transform: translateY(-3px);
        }
        
        .linkedin { background: #0077b5; }
        .facebook { background: #4267B2; }
        .twitter { background: #1DA1F2; }
        .pinterest { background: #E60023; }
        
        /* Contact Information */
        .contact-info-card {
            background: #f8fafc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .contact-icon {
            background: #e0f2fe;
            color: #0369a1;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .contact-details h4 {
            font-size: 16px;
            margin-bottom: 5px;
            color: #334155;
        }
        
        .contact-details p {
            color: #64748b;
            font-size: 14px;
        }
        
        .show-contact-btn {
            display: block;
            width: 100%;
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }
        
        .show-contact-btn:hover {
            background: #1d4ed8;
        }
        
        .map-placeholder {
            background: #e2e8f0;
            border-radius: 8px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            font-weight: 500;
            margin-bottom: 20px;
        }
        
        .chat-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background: #10b981;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .chat-btn:hover {
            background: #0da271;
        }
        
        .chat-btn i {
            margin-right: 8px;
        }
        
        /* Open Positions Section */
        .open-positions-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-bottom: 40px;
        }
        
        .open-positions-card h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #1e293b;
            padding-bottom: 10px;
            border-bottom: 2px solid #f1f5f9;
        }
        
        .no-data {
            text-align: center;
            padding: 40px 20px;
            color: #64748b;
        }
        
        .no-data i {
            font-size: 48px;
            color: #cbd5e1;
            margin-bottom: 20px;
        }
        
        .no-data h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #475569;
        }
        
        .no-data p {
            margin-bottom: 20px;
        }
        
       
        
        @media (max-width: 992px) {
            .company-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .header-nav {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .nav-left {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .search-container {
                width: 100%;
            }
            
            .search-container input {
                width: 100%;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }
    </style>

    <div class="container">
        <!-- Header Navigation -->
        

        <!-- Company Details Card -->
        <div class="company-card">
            <div class="company-header">
                <h1 class="company-title">TEMPLATECOOKIE</h1>
                <p class="company-industry">Hotel/Restaurant</p>
                <a href="#" class="open-position-btn">Open Position <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="company-content">
                <!-- Company Description -->
                <div class="company-description">
                    <h3>Company Description</h3>
                    <p>Templatecookie is a team of developers working on building quality templates and scripts! We are a team of 12+ designer and developers with 3+ years of working experience! We have experts in React Js, Vue js, Laravel, PHP, MySQL, Bootstrap, HTML, CSS, SCSS, Tailwind CSS, REST API & React Native!</p>
                    
                    <div class="skills-list">
                        <span class="skill-tag">React Js</span>
                        <span class="skill-tag">Vue js</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Bootstrap</span>
                        <span class="skill-tag">HTML</span>
                        <span class="skill-tag">CSS</span>
                        <span class="skill-tag">SCSS</span>
                        <span class="skill-tag">Tailwind CSS</span>
                        <span class="skill-tag">REST API</span>
                        <span class="skill-tag">React Native</span>
                    </div>
                    
                    <div class="social-share">
                        <h4>Share This Profile:</h4>
                        <div class="social-icons">
                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    
                    <div class="contact-info-card">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4>LOCATION</h4>
                                <p>Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="show-contact-btn">Show Contact Information</button>
                    
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i> Map Location
                    </div>
                    
                    <button class="chat-btn">
                        <i class="fas fa-comment-dots"></i> Chat with us
                    </button>
                </div>
            </div>
        </div>

        <!-- Open Positions Section -->
        <div class="open-positions-card">
            <h3>Open Positions (0)</h3>
            <div class="no-data">
                <i class="fas fa-briefcase"></i>
                <h4>No Data Found!</h4>
                <p>There are currently no open positions at this company.</p>
                <button class="chat-btn">
                    <i class="fas fa-comment-dots"></i> Chat with us
                </button>
            </div>
        </div>
    </div>

    <script>
        // Toggle contact information visibility
        const showContactBtn = document.querySelector('.show-contact-btn');
        const contactInfoCard = document.querySelector('.contact-info-card');
        
        showContactBtn.addEventListener('click', function() {
            if (contactInfoCard.style.display === 'none') {
                contactInfoCard.style.display = 'block';
                showContactBtn.textContent = 'Hide Contact Information';
            } else {
                contactInfoCard.style.display = 'none';
                showContactBtn.textContent = 'Show Contact Information';
            }
        });
        
        // Chat button functionality
        const chatButtons = document.querySelectorAll('.chat-btn');
        
        chatButtons.forEach(button => {
            button.addEventListener('click', function() {
                alert('Chat functionality would open here. This is a demonstration.');
            });
        });
        
        // Search functionality
        const searchInput = document.querySelector('.search-container input');
        
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Searching for: ${searchInput.value}`);
            }
        });
    </script>
    @endsection
</body>
</html>