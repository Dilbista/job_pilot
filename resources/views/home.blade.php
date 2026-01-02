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
        background-color: #f8f9fa;
        color: #333;
        line-height: 1.6;
    }
        

    .my-job {
        background-color: #1a73e8;
        color: white;
        padding: 6px 15px;
        border-radius: 4px;
    }

    /* Categories Section */
    .section-title {
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 40px 0 30px;
    }

    .categories-section {
        padding: 30px 0 60px;
        position: relative;
        overflow: hidden;
        background-color: rgb(236, 241, 252);
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
        margin-bottom: 50px;
    }

    .category-card {
        background-color: white;
        border-radius: 10px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative;
        z-index: 2;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .category-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .open-positions {
        color: #1a73e8;
        font-weight: 500;
    }

    .profile-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
        margin-top: 40px;
        position: relative;
        z-index: 2;
        /* box-shadow: 0 10px 30px rgba(26, 115, 232, 0.2); */
    }

    .profile-section {
        background-image: url("{{ asset('images/profilesection.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 40px;
        border-radius: 12px;
        height: 350px;
        margin-left: 50px;
        /* box-shadow: 0 10px 30px rgba(26, 115, 232, 0.2); */
    }
    .profile-section:hover{
        box-shadow: 0 10px 30px rgba(26, 115, 232, 0.2);
    }

    .profile-content h2 {
        font-size: 28px;
        margin-bottom: 20px;
    }

    .profile-content p {
        margin-bottom: 25px;
        opacity: 0.9;
    }

    .profile-btn {
        background-color: blue;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .profile-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* Working Process Section */
    .process-section {
        padding: 60px 0;
        background-color: white;
        position: relative;
        overflow: hidden;
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 50px;
        margin-top: 40px;
    }

    .process-card {
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        background-color: #f8f9fa;
        transition: transform 0.3s;
        position: relative;
        z-index: 2;
    }

    .process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(26, 115, 232, 0.2);
    }

    .process-icon {
        width: 70px;
        height: 70px;
        background-color: #e8f0fe;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: #1a73e8;
        font-size: 28px;
        /* box-shadow: 0 10px 30px rgba(26, 115, 232, 0.2); */
    }

    .process-card h4 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #1a1a1a;
    }
    .has-arrow {
        position: absolute;
        top: -35px;         
        right: -55px;        
        width: 160px;
        pointer-events: none;
        transition: transform 0.4s ease, opacity 0.4s ease;
    }
    .has-arrow.middle {
        position: absolute;
        top: 70px;          
        right: -35px;       
        width: 150px;
        pointer-events: none;
        transition: transform 0.4s ease, opacity 0.4s ease;
    }
    .has-arrow img {
        width: 100%;
        opacity: 0.7;
    }
    .has-arrow.first {
        transform: rotate(0deg);
    }

    .has-arrow.middle {
        transform: rotate(10deg);
    }

    .has-arrow.last {
        transform: rotate(-5deg);
    }
    .process-card:last-child .has-arrow {
        display: none;
    }
    .process-card:hover .has-arrow {
        transform: translateX(10px) scale(1.05);
        opacity: 1;
    }

    /* Featured Jobs Section */
    .featured-jobs {
        padding: 60px 0;
        width: 100%;
        margin-top: 50px;
        background-color: rgb(236, 241, 252);
        text-align: center;
        height: 200px;
    }

    .view-all {
        display: inline-block;
        margin-top: 20px;
        color: #1a73e8;
        text-decoration: none;
        font-weight: 600;
        font-size: 18px;
    }

    /* .view-all {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
         */
        /* .view-all:hover {
            text-decoration: underline;
        } */
        .subscribe {
            /* max-width: 1200px; */
            width: 100%;
            color: white;
            text-align: center;
            padding: 40px 20px;
            background-color: rgb(13, 13, 121);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            box-align: center;
            height: 400px;
        }
        
        /* Animated background elements */
        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 15s infinite ease-in-out;
            z-index: 0;
        }
        
        .bg-circle:nth-child(1) {
            width: 150px;
            height: 150px;
            top: -50px;
            left: -50px;
            animation-delay: 0s;
        }
        
        .bg-circle:nth-child(2) {
            width: 120px;
            height: 120px;
            bottom: 30px;
            right: -40px;
            animation-delay: 3s;
        }
        
        .bg-circle:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 40%;
            right: 20%;
            animation-delay: 6s;
        }
        
        .bg-circle:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 10%;
            animation-delay: 9s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            33% { transform: translateY(-20px) rotate(120deg); }
            66% { transform: translateY(10px) rotate(240deg); }
        }
        
        .content {
            position: relative;
            z-index: 1;
        }
        
        .title {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .subtitle {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 30px;
            color: #ffeb3b;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .subscription-form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            border-radius: 60px;
            padding: 5px;
            display: flex;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .subscription-form:focus-within {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }
        
        .email-input {
            flex: 1;
            border: none;
            padding: 20px 25px;
            font-size: 18px;
            border-radius: 60px 0 0 60px;
            outline: none;
            color: #333;
        }
        
        .email-input::placeholder {
            color: #aaa;
        }
        
        .subscribe-btn {
            background: linear-gradient(to right, #ff9800, #ff5722);
            color: white;
            border: none;
            padding: 20px 40px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 60px;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 1px;
            text-transform: uppercase;
            min-width: 180px;
        }
        
        .subscribe-btn:hover {
            background: linear-gradient(to right, #ff5722, #ff9800);
            transform: scale(1.05);
        }
        
        .subscribe-btn:active {
            transform: scale(0.98);
        }
        
        .note {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.8;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }
        
        .pulse-dot {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #ffeb3b;
            border-radius: 50%;
            top: 50px;
            right: 50px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(0.8); opacity: 0.7; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(0.8); opacity: 0.7; }
        }
        
        .back-home {
            position: absolute;
            top: 30px;
            left: 30px;
            color: white;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            opacity: 0.8;
            transition: opacity 0.3s;
            z-index: 10;
        }
        
        .back-home:hover {
            opacity: 1;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .subscribe {
                padding: 40px 20px;
            }
            
            .title {
                font-size: 36px;
            }
            
            .subtitle {
                font-size: 28px;
            }
            
            .subscription-form {
                flex-direction: column;
                border-radius: 20px;
                padding: 0;
                background: transparent;
                box-shadow: none;
            }
            
            .email-input {
                border-radius: 60px;
                margin-bottom: 15px;
                padding: 18px 25px;
                width: 100%;
            }
            
            .subscribe-btn {
                border-radius: 60px;
                padding: 18px;
                width: 100%;
            }
            
            .pulse-dot {
                top: 20px;
                right: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .title {
                font-size: 28px;
            }
            
            .subtitle {
                font-size: 22px;
            }
            
            .email-input, .subscribe-btn {
                font-size: 16px;
                padding: 16px 20px;
            }
        }

    /* Animation for blue section */
    @keyframes floatAnimation {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .categories-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .process-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .footer-content {
            grid-template-columns: repeat(3, 1fr);
        }

        .profile-section {
            grid-template-columns: 1fr;
        }

        .search-form {
            flex-direction: column;
        }

        .location-box {
            width: 100%;
        }

        .process-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .has-arrow {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .hero-title {
            font-size: 32px;
        }

        .categories-grid {
            grid-template-columns: 1fr;
        }

        .process-grid {
            grid-template-columns: 1fr;
        }

        .footer-content {
            grid-template-columns: repeat(2, 1fr);
        }

        .top-bar-content {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .footer-content {
            grid-template-columns: 1fr;
        }

        .hero-title {
            font-size: 28px;
        }

        .section-title {
            font-size: 26px;
        }
        .process-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        <h1 class="hero-title">The #1 Jobpilot Jobs for<br>Hiring or Finding your next job</h1>

        <p class="hero-subtitle">
            Each month, more than 3 million job seekers turn to website in their search for work,
            making over 1400,000 applications every single day
        </p>

        <div class="hero-search">
            <form class="search-form">
                <input type="text" class="search-input" placeholder="Job Title, Keyword">
                <input type="text" class="search-input" placeholder="Enter Location">
                <button type="submit" class="search-btn">Find Job Now</button>
            </form>
        </div>

        <div class="tags">
            <span class="tag">Suggestion:</span>
            <a href="#" class="tag">Design/Creative,</a>
            <a href="#" class="tag">Driving/Motor Technician.</a>
            <a href="#" class="tag">IT & Telecommunication</a>
            <a href="#" class="tag">Hospitality/Travel/Tourism</a>
        </div>
    </div>
</section>

<!-- Chat Button -->
<div class="chat-button">
    <i class="fas fa-comment"></i>
</div>

<!-- Categories Section -->
<section class="categories-section">
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>

    <div class="container">
        <h2 class="section-title">Top Categories</h2>

        <div class="categories-grid">
            <div class="category-card">
                <h3 class="category-title">Engineer/Architectsss</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">IT & Telecommunication</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">Garments/Textile</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">Medical/Pharma</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">Design/Creative</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">Driving/Motor Technician</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">Hospitality/ Travel/ Tourism</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>

            <div class="category-card">
                <h3 class="category-title">Law/Legal</h3>
                <div class="open-positions">0 Open Positions</div>
            </div>
        </div>


    </div>
</section>
<div class="profile-content">
    <div class="profile-section">

    </div>
    <div class="profile-text">
        <h3 style="color: blue;">Create Profile</h3>
        <h2>Create Your Personal Account Profile</h3>
            <p>Work Profile is a personally assessment that measures an individual's work personality through their
                workplace traits, social and emotional traits; as well as the values and aspirations that drive them
                forward.</p>
            <button class="profile-btn">Create Profile</button>
    </div>
</div>

<!-- Working Process Section -->
<section class="process-section">
    <div class="process-floating"></div>
    <div class="process-floating"></div>

    <div class="container">
        <h2 class="section-title">Jobpilot Working Process</h2>

        <div class="process-grid">
            <div class="process-card">
                <div class="has-arrow first">
                    <img src="{{ asset('images/arrow-1.png') }}" alt="arrow-up"/>
                </div>
                <div class="process-icon">
                    <i class="fas fa-search"></i>
                    {{-- <i class="ph-user-plus"></i> --}}
                </div>
                <h4>Explore Opportunities</h4>
                <p>Browse through a diverse range of job listings tailored to your interests and expertise</p>
            </div>

            <div class="process-card">
                <div class="has-arrow middle">
                    <img src="{{ asset('images/arrow-2.png') }}" alt="arrow-up"/>
                </div>
                <div class="process-icon">
                    <i class="fas fa-user-circle"></i>
                </div>
                <h4>Create Your Profile</h4>
                <p>Build a standard profile highlighting your skills, experience, and qualifications</p>
            </div>

            <div class="process-card">
                <div class="has-arrow last">
                    <img src="{{ asset('images/arrow-1.png') }}" alt="arrow-up" draggable="false" loading="lazy"/>
                </div>
                <div class="process-icon">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <h4>Apply with Ease</h4>
                <p>Effortlessly apply to jobs that match your preferences with just a few clicks</p>
            </div>

            <div class="process-card">
                <div class="process-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4>Track Your Progress</h4>
                <p>Stay informed on your applications and manage your job-seeking journey effectively</p>
            </div>
        </div>
       
    </div>
     <div class="featured-jobs">
            <h3>Top Featured Job</h3>
            <a href="#" class="view-all">view all</a>
        </div>
    
<!-- Animated background circles -->
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
    <div class="bg-circle"></div>
    
    <!-- Pulse notification dot -->
    <div class="pulse-dot"></div>
    
    <!-- Back to home link -->
    <a href="#" class="back-home">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Home</span>
    </a>
    
    <!-- Main content container -->
    <div class="subscribe">
        <div class="content">
            <h1 class="title">New Things Will Always</h1>
            <h2 class="subtitle">Update Regularly</h2>
            
            <form class="subscription-form">
                <input type="email" class="email-input" placeholder="Enter your email here" required>
                <button type="submit" class="subscribe-btn">Subscribe</button>
            </form>
            
            <p class="note">Stay updated with the latest features, job opportunities, and career tips. We send updates regularly, never spam.</p>
            
            <div class="social-icons">
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
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

</section>
    
<script>
    // Interactive functionality

    // Post Job button
    document.querySelector('.post-job-btn').addEventListener('click', function () {
        alert('Post a Job feature would open here');
    });

    // Find Job Now button
    document.querySelector('.search-btn').addEventListener('click', function (e) {
        e.preventDefault();
        const jobTitle = document.querySelector('.search-form .search-input').value;
        const location = document.querySelectorAll('.search-form .search-input')[1].value;
        alert(`Searching for jobs with title: "${jobTitle}" in location: "${location}"`);
    });

    // Main search box
    document.querySelector('.search-box').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            alert(`Searching for: "${this.value}"`);
        }
    });

    // Dashboard navigation active state
    document.querySelectorAll('.dashboard-links a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelectorAll('.dashboard-links a').forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    // Top navigation
    document.querySelectorAll('.top-nav-links a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            alert(`Navigating to: ${this.textContent}`);
        });
    });

    // Chat button
    document.querySelector('.chat-button').addEventListener('click', function () {
        alert('Chat with us feature would open here!');
    });

    // Jobs link
    document.querySelector('.jobs-link').addEventListener('click', function (e) {
        e.preventDefault();
        alert('Navigating to Jobs page');
    });

    // Logo click
    document.querySelector('.logo').addEventListener('click', function (e) {
        e.preventDefault();
        alert('Navigating to Home page');
    });
</script>

<script>
    const profile = document.getElementById('profileDropdown');

    profile.addEventListener('click', function (e) {
        e.stopPropagation();
        this.querySelector('.dropdown-menu').classList.toggle('show');
    });

    document.addEventListener('click', function () {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.remove('show');
        });
    });
</script>

<script>
    // Simple interactivity for the chat button
    document.querySelector('.chat-button').addEventListener('click', function () {
        alert('Chat feature would open here! This is a demonstration.');
    });

    // Add hover effects to category cards
    const categoryCards = document.querySelectorAll('.category-card');
    categoryCards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-8px)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0)';
        });
    });

    // Add animation to process cards on scroll
    window.addEventListener('scroll', function () {
        const processCards = document.querySelectorAll('.process-card');
        const windowHeight = window.innerHeight;

        processCards.forEach(card => {
            const cardPosition = card.getBoundingClientRect().top;

            if (cardPosition < windowHeight - 100) {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }
        });
    });

    // Trigger the animation on load
    window.dispatchEvent(new Event('scroll'));
</script>

 <script>
        // Form submission handling
        document.querySelector('.subscription-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = document.querySelector('.email-input');
            const email = emailInput.value;
            
            if (email && email.includes('@')) {
                // Show success message
                const originalBtnText = document.querySelector('.subscribe-btn').textContent;
                document.querySelector('.subscribe-btn').textContent = 'Subscribed!';
                document.querySelector('.subscribe-btn').style.background = 'linear-gradient(to right, #4CAF50, #8BC34A)';
                
                // Reset after 3 seconds
                setTimeout(() => {
                    document.querySelector('.subscribe-btn').textContent = originalBtnText;
                    document.querySelector('.subscribe-btn').style.background = 'linear-gradient(to right, #ff9800, #ff5722)';
                    emailInput.value = '';
                    emailInput.focus();
                }, 3000);
                
                // In a real application, you would send the email to a server here
                console.log('Subscribed email:', email);
            } else {
                // Show error
                emailInput.style.border = '2px solid #ff4444';
                emailInput.placeholder = 'Please enter a valid email';
                emailInput.value = '';
                
                setTimeout(() => {
                    emailInput.style.border = 'none';
                    emailInput.placeholder = 'Enter your email here';
                }, 3000);
            }
        });
        
        // Add focus effect to input
        const emailInput = document.querySelector('.email-input');
        emailInput.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-5px)';
            this.parentElement.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.4)';
        });
        
        emailInput.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
            this.parentElement.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.3)';
        });
        
        // Animate elements on load
        document.addEventListener('DOMContentLoaded', function() {
            const title = document.querySelector('.title');
            const subtitle = document.querySelector('.subtitle');
            const form = document.querySelector('.subscription-form');
            
            // Initial state
            title.style.opacity = '0';
            title.style.transform = 'translateY(20px)';
            subtitle.style.opacity = '0';
            subtitle.style.transform = 'translateY(20px)';
            form.style.opacity = '0';
            form.style.transform = 'translateY(20px)';
            
            // Animate in
            setTimeout(() => {
                title.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                title.style.opacity = '1';
                title.style.transform = 'translateY(0)';
            }, 300);
            
            setTimeout(() => {
                subtitle.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                subtitle.style.opacity = '1';
                subtitle.style.transform = 'translateY(0)';
            }, 600);
            
            setTimeout(() => {
                form.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                form.style.opacity = '1';
                form.style.transform = 'translateY(0)';
            }, 900);
        });
    </script>


@endsection