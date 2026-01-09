<style>
    /* Footer Styles */
    footer {
        background-color: #1a1a1a;
        color: #ddd;
        padding: 20px 10px;
        width: 100%;
        box-sizing: border-box;
    }

    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
        gap: 50px;
        margin: 0;
        max-width: auto;
        margin: 0 auto;
    }

    .footer-content .phone-number {
        color: blue;
    }

    .footer-col h3 {
        color: white;
        font-size: 20px;
        margin-bottom: 25px;
        font-weight: 600;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 12px;
    }

    .footer-col ul li a {
        color: #aaa;
        text-decoration: none;
        transition: color 0.3s;
        display: block;
        font-size: 15px;
    }

    .footer-col ul li a:hover {
        color: #1a73e8;
        padding-left: 5px;
    }

    .footer-about p {
        margin-bottom: 20px;
        max-width: 300px;
        font-size: 15px;
        line-height: 1.6;
    }

    .copyright {
        text-align: left;
        padding: 0px;
        border-top: 1px solid #333;
        color: #888;
        font-size: 14px;
        margin-top: 50px;
        padding-top: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .copyright p {
        margin-top: 0;
        width: auto;
        flex: 1;
        min-width: 200px;
    }

    .social-icons {
        margin: 0px;
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        flex-wrap: wrap;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        transition: all 0.3s ease;
        text-decoration: none;
        flex-shrink: 0;
    }

    .social-icon:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.1);
    }
    /* Chat Button Styles */
    /* CTA */
    .chat-cta {
        position: fixed;
        bottom: 40px;
        right: 100px;
        background: #fff;
        padding: 10px 18px;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, .15);
        font-weight: 600;
        cursor: pointer;
        z-index: 999;
    }

    .chat-button {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #1a73e8;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(26, 115, 232, 0.4);
        z-index: 1000;
        transition: all 0.3s ease;
        border: none;
        outline: none;
    }

    .chat-button:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(26, 115, 232, 0.6);
    }

    .chat-button.active {
        background-color: #1a73e8;
        transform: rotate(90deg);
    }

    .chat-button.active:hover {
        background-color: #1a73e8;
    }

    .chat-button .fa-comment-dots {
        display: block;
    }

    .chat-button .fa-times {
        display: none;
    }

    .chat-button.active .fa-comment-dots {
        display: none;
    }

    .chat-button.active .fa-times {
        display: block;
    }

    /* Chat Widget Styles */
    .chat-widget {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 350px;
        height: 500px;
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transform: translateY(20px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        border: 1px solid #e0e0e0;
        z-index: 999;
    }

    .chat-widget.active {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .chat-header {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        color: white;
        padding: 18px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-header h3 {
        font-weight: 600;
        font-size: 1.2rem;
    }

    .chat-close {
        background: none;
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background-color 0.2s;
    }

    .chat-close:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .chat-body {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
    }

    .chat-state {
        height: 100%;
        display: none;
        flex-direction: column;
    }

    .chat-state.active {
        display: flex;
    }

    /* Welcome State */
    .welcome-state {
        text-align: center;
        justify-content: center;
        align-items: center;
    }

    .welcome-logo {
        color: #4776E6;
        font-size: 2.5rem;
        margin-top: 50px;
        margin-bottom: 10px;
    }

    .welcome-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .welcome-text {
        color: #666;
        line-height: 1.6;
        margin-bottom: 30px;
        max-width: 280px;
    }

    .welcome-button {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        color: white;
        border: none;
        padding: 14px 28px;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        font-size: 1rem;
        box-shadow: 0 4px 15px rgba(142, 84, 233, 0.3);
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .welcome-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(142, 84, 233, 0.4);
    }

    .welcome-button i {
        font-size: 1.2rem;
    }

    .welcome-note {
        margin-top: 20px;
        font-size: 0.9rem;
        color: #666;
    }

    .welcome-nav {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 10px;
    }

    .welcome-nav button {
        background: none;
        border: none;
        color: #4776E6;
        font-weight: 600;
        cursor: pointer;
        padding: 8px 16px;
        border-radius: 6px;
        transition: background-color 0.2s;
    }

    .welcome-nav button:hover {
        background-color: #f0f4ff;
    }

    /* Form State */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #555;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: #4776E6;
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
    }

    .checkbox-group input {
        margin-right: 10px;
    }

    .message-input {
        display: flex;
        margin-top: auto;
    }

    .message-input input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px 0 0 8px;
        font-size: 1rem;
    }

    .message-input button {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        color: white;
        border: none;
        padding: 0 20px;
        border-radius: 0 8px 8px 0;
        cursor: pointer;
        font-weight: 600;
    }

    /* Message History State */
    .message-history-header {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333;
    }

    .messages-container {
        flex: 1;
        overflow-y: auto;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #eee;
        border-radius: 8px;
        background-color: #fafafa;
    }

    .message {
        margin-bottom: 15px;
        padding: 10px 15px;
        border-radius: 8px;
        max-width: 80%;
        font-size: 0.95rem;
        line-height: 1.4;
    }

    .message.user {
        background-color: #e3f2fd;
        margin-left: auto;
        border-bottom-right-radius: 4px;
    }

    .message.bot {
        background-color: #f5f5f5;
        margin-right: auto;
        border-bottom-left-radius: 4px;
    }

    .message-time {
        font-size: 0.75rem;
        color: #888;
        margin-top: 5px;
        text-align: right;
    }

    .message-input-container {
        display: flex;
        margin-top: 10px;
    }

    .message-input-container input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px 0 0 8px;
        font-size: 1rem;
    }

    .message-input-container button {
        background: linear-gradient(to right, #4776E6, #8E54E9);
        color: white;
        border: none;
        padding: 0 20px;
        border-radius: 0 8px 8px 0;
        cursor: pointer;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .message-input-container button i {
        font-size: 1.2rem;
    }

    .chat-footer {
        padding: 12px 20px;
        text-align: center;
        background-color: #f8f9fa;
        color: #777;
        font-size: 0.8rem;
        border-top: 1px solid #eee;
    }

    .chat-footer span {
        color: #4776E6;
        font-weight: 600;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .chat-widget {
            width: 320px;
            height: 450px;
            right: 20px;
            bottom: 90px;
        }

        .chat-button {
            width: 55px;
            height: 55px;
            font-size: 22px;
            bottom: 25px;
            right: 25px;
        }
    }

    @media (max-width: 480px) {
        .chat-widget {
            width: 300px;
            height: 430px;
            right: 15px;
            bottom: 85px;
        }

        .chat-button {
            width: 50px;
            height: 50px;
            font-size: 20px;
            bottom: 20px;
            right: 20px;
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


    /* Large Tablets and Small Laptops (992px to 1200px) */
    @media (max-width: 1200px) {
        .footer-content {
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 35px;
            padding: 0 20px;
        }

        footer {
            padding: 50px 25px;
        }
    }

    /* Tablets (768px to 992px) */
    @media (max-width: 992px) {
        .footer-content {
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            padding: 0 15px;
        }

        .footer-about {
            grid-column: span 3;
            text-align: center;
            margin-bottom: 20px;
        }

        .footer-about p {
            max-width: 100%;
            margin: 0 auto 20px;
        }

        footer {
            padding: 40px 20px;
        }

        .footer-col h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .footer-col ul li a {
            font-size: 14px;
        }

        .copyright {
            flex-direction: column;
            text-align: center;
            gap: 15px;
            padding-top: 20px;
            margin-top: 30px;
        }

        .copyright p {
            width: 100%;
            text-align: center;
            order: 2;
        }

        .social-icons {
            justify-content: center;
            order: 1;
            margin-bottom: 10px;
        }

    }

    /* Small Tablets and Large Phones (576px to 768px) */
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            padding: 0 10px;
        }

        .footer-about {
            grid-column: span 2;
        }

        footer {
            padding: 35px 15px;
        }

        .footer-col h3 {
            font-size: 17px;
            margin-bottom: 18px;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 14px;
        }

        .social-icon {
            width: 38px;
            height: 38px;
            font-size: 16px;
        }

        .copyright {
            margin-top: 25px;
            padding-top: 15px;
        }

    }

    /* Mobile Phones (400px to 576px) */
    @media (max-width: 576px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 0;
        }

        .footer-about {
            grid-column: span 1;
            text-align: center;
        }

        .footer-col {
            text-align: center;
            border-bottom: 1px solid #333;
            padding-bottom: 20px;
        }

        .footer-col:last-child {
            border-bottom: none;
        }

        .footer-col h3 {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .footer-col ul li a {
            font-size: 14px;
            padding: 5px 0;
        }

        footer {
            padding: 30px 15px;
        }

        .social-icons {
            gap: 10px;
        }

        .social-icon {
            width: 35px;
            height: 35px;
            font-size: 15px;
        }

        .copyright {
            margin-top: 20px;
            padding-top: 15px;
            gap: 10px;
        }

        .copyright p {
            font-size: 13px;
        }

    }

    /* Very Small Phones (less than 400px) */
    @media (max-width: 400px) {
        .footer-content {
            gap: 15px;
        }

        footer {
            padding: 25px 10px;
        }

        .footer-col h3 {
            font-size: 15px;
        }

        .footer-col ul li a {
            font-size: 13px;
        }

        .footer-about p {
            font-size: 14px;
        }

        .phone-number {
            font-size: 14px;
        }

        .social-icons {
            gap: 8px;
        }

        .social-icon {
            width: 32px;
            height: 32px;
            font-size: 14px;
        }

        .copyright p {
            font-size: 12px;
        }

    }

    /* Landscape Mode for Mobile */
    @media (max-height: 500px) and (orientation: landscape) {
        .footer-content {
            grid-template-columns: repeat(3, 1fr);
        }

        .footer-about {
            grid-column: span 3;
        }

        footer {
            padding: 25px 15px;
        }

    }

    /* Print Styles */
    @media print {
        footer {
            display: none;
        }

        /* .chat-button {
            display: none;
        } */
    }

    /* Accessibility - Focus Styles */
    .footer-col ul li a:focus,
    .social-icon:focus,
    .chat-button:focus {
        outline: 2px solid #1a73e8;
        outline-offset: 2px;
    }

    /* Reduce motion for users who prefer it */
    @media (prefers-reduced-motion: reduce) {

        .social-icon,
        .footer-col ul li a,
        .chat-button {
            transition: none;
        }

        .social-icon:hover {
            transform: none;
        }
    }
    
</style>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-col footer-about">
                <img src="{{ asset('images/logo.svg') }}" style="color:blue; margin-bottom: 20px;">
                <p>Discover tailored opportunities for job seekers and top talent for employers</p>
                <div class="phone-number">Call Now: 319-555-0115</div>
            </div>

            <div class="footer-col">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('company.pricing') }}">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Candidate</h3>
                <ul>
                    <li><a href="{{ route('dashboard.profile') }}">Browse Jobs</a></li>
                    <li><a href="{{ route('company.candidates') }}">Browse Candidates</a></li>
                    <li><a href="{{ route('company.index') }}">Candidate Dashboard</a></li>
                    <li><a href="#">Saved Jobs</a></li>
                    <li><a href="#">Candidate plan</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Employer</h3>
                <ul>
                    <li><a href="{{ route('company.createJob') }}">Post a Job</a></li>
                    <li><a href="{{ route('company.index') }}">Companies Dashboard</a></li>
                    <li><a href="{{ route('company.myJobs') }}">Applications</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Support</h3>
                <ul>
                    <li><a href="{{ route('company.faq') }}">FAQ</a></li>
                    <li><a href="{{ route('company.privacyPolicy') }}">Privacy & Policy</a></li>
                    <li><a href="{{ route('company.termsCondition') }}">Terms & Conditions</a></li>
                    <li><a href="{{ route('company.refoundPolicy') }}">Refund Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; DeepHub 2026 | All Rights Reserved</p>
            <div class="social-icons">
                <a href="https://twitter.com" class="social-icon">
                    <i class="fab fa-x-twitter"></i>
                </a>
                <a href="https://facebook.com" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://linkedin.com" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://instagram.com" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

    </div>
</footer>

<!-- Chat Button -->
{{-- <div class="chat-button">
    <i class="fas fa-comment-dots"></i>
</div> --}}

<div class="chat-cta" id="chatCTA">
    Chat with us <span>👋</span>
</div>
<!-- Chat Button -->
<button class="chat-button" id="chatButton">
    <i class="fas fa-comment-dots"></i>
    <i class="fas fa-times"></i>
</button>

<!-- Chat Widget -->
<div class="chat-widget" id="chatWidget">
    <div class="chat-header">
        <button class="chat-close" id="closeChat">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="chat-body">
        <!-- Welcome State -->
        <div class="chat-state welcome-state active" id="welcomeState">
            <div class="welcome-logo">
                <i class="fas fa-comments"></i>
            </div>
            <h3 class="welcome-title">👋 Hi there</h3>
            <p class="welcome-text">👋 #Welcome to Lomeyol.abs! We're excited to introduce TemplateCookie's new branding.
                How can we help you today?</p>
            <button class="welcome-button" id="startChat">
                <i class="fas fa-comment-dots"></i> Chat with us
            </button>
            <p class="welcome-note">We reply immediately</p>

            <div class="welcome-nav">
                <button id="navHome"><i class="fas fa-home"></i><br>Home</button>
                <button id="navChat"><i class="fas fa-message"></i><br>Chat</button>
            </div>
        </div>

        <!-- Form State -->
        <div class="chat-state form-state" id="formState">
            <div class="form-group">
                <label for="userName">Please introduce yourself:</label>
                <input type="text" id="userName" class="form-control" placeholder="name" value="">
            </div>

            <div class="form-group">
                <label for="userEmail">Email:</label>
                <input type="email" id="userEmail" class="form-control" placeholder="email@gmail.com" value="">
            </div>

            <div class="checkbox-group">
                <input type="checkbox" id="newsletter" checked>
                <label for="newsletter">Sign up for our newsletter</label>
            </div>

            <div class="form-group">
                <label for="initialMessage">Message:</label>
                <input type="text" id="initialMessage" class="form-control" placeholder="hello" value="">
            </div>

            <div class="message-input">
                <input type="text" id="formMessage" placeholder="Enter your message...">
                <button id="sendFormMessage">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>

        <!-- Message History State -->
        <div class="chat-state message-history-state" id="messageHistoryState">
            <div class="message-history-header">👋 Hi there</div>

            <div class="messages-container" id="messagesContainer">
                <div class="message bot">
                    Welcome to Lomeyol.abs! We're excited to introduce TemplateCookie's new branding. How can we help
                    you today?
                    <div class="message-time">Just now</div>
                </div>
            </div>

            <div class="message-input-container">
                <input type="text" id="chatMessage" placeholder="Enter your message...">
                <button id="sendMessage">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="chat-footer">
        POWERED BY <span>DIPA</span>
    </div>
</div>



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
    // Mobile menu toggle for profile dropdown on touch devices
    document.addEventListener('DOMContentLoaded', function () {
        const profileDropdown = document.getElementById('profileDropdown');
        let isDropdownOpen = false;

        // Toggle dropdown on mobile
        if (window.innerWidth <= 768) {
            profileDropdown.addEventListener('click', function (e) {
                e.stopPropagation();
                const dropdownMenu = this.querySelector('.dropdown-menu');
                dropdownMenu.classList.toggle('show');
                isDropdownOpen = !isDropdownOpen;
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function () {
                if (isDropdownOpen) {
                    const dropdownMenu = profileDropdown.querySelector('.dropdown-menu');
                    dropdownMenu.classList.remove('show');
                    isDropdownOpen = false;
                }
            });
        }

        // Adjust search form for mobile
        function adjustSearchForm() {
            const searchForm = document.querySelector('.search-form');
            const heroSearch = document.querySelector('.hero-search');

            if (window.innerWidth <= 576) {
                // Change button text on mobile
                const searchBtn = document.querySelector('.search-btn');
                if (searchBtn) {
                    searchBtn.innerHTML = '<i class="fas fa-search"></i>';
                    searchBtn.style.padding = '12px';
                    searchBtn.style.minWidth = '60px';
                }

                // Add placeholder for mobile
                const searchInputs = document.querySelectorAll('.search-input, .search-input-main');
                searchInputs.forEach(input => {
                    if (window.innerWidth <= 400) {
                        input.placeholder = "Search...";
                    }
                });
            }
        }

        // Adjust on load and resize
        adjustSearchForm();
        window.addEventListener('resize', adjustSearchForm);

        // Prevent zoom on iOS when focusing on inputs
        document.addEventListener('touchstart', function () {
            // This helps prevent zoom on iOS
        }, { passive: true });

        // Add active state for mobile taps
        const buttons = document.querySelectorAll('button, .search-btn, .post-job-btn, .gateway-item');
        buttons.forEach(button => {
            button.addEventListener('touchstart', function () {
                this.style.opacity = '0.8';
            });

            button.addEventListener('touchend', function () {
                this.style.opacity = '1';
            });
        });

        // Handle orientation change
        window.addEventListener('orientationchange', function () {
            // Relayout after orientation change
            setTimeout(function () {
                window.dispatchEvent(new Event('resize'));
            }, 300);
        });
    });

    // Make dropdowns work better on mobile
    document.querySelectorAll('.dropdown-select').forEach(select => {
        select.addEventListener('change', function () {
            if (window.innerWidth <= 768) {
                // Show feedback on mobile
                alert(`Selected: ${this.value}`);
            }
        });
    });
</script>




<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get elements
        const cta = document.getElementById('chatCTA');
        const chatButton = document.getElementById('chatButton');
        const chatWidget = document.getElementById('chatWidget');
        const closeChat = document.getElementById('closeChat');
        const startChat = document.getElementById('startChat');
        const navHome = document.getElementById('navHome');
        const navChat = document.getElementById('navChat');
        const sendFormMessage = document.getElementById('sendFormMessage');
        const sendMessage = document.getElementById('sendMessage');
        const formMessageInput = document.getElementById('formMessage');
        const chatMessageInput = document.getElementById('chatMessage');
        const userNameInput = document.getElementById('userName');
        const userEmailInput = document.getElementById('userEmail');
        const initialMessageInput = document.getElementById('initialMessage');
        const messagesContainer = document.getElementById('messagesContainer');

        // Chat states
        const welcomeState = document.getElementById('welcomeState');
        const formState = document.getElementById('formState');
        const messageHistoryState = document.getElementById('messageHistoryState');

        // User data
        let userData = {
            name: '',
            email: '',
            hasSubmitted: false
        };

        // Toggle chat widget
        function toggleChat() {
            chatButton.classList.toggle('active');
            chatWidget.classList.toggle('active');

            // Reset to welcome state when opening
            if (chatWidget.classList.contains('active')) {
                showState(welcomeState);
            }
        }

        // Show specific chat state
        function showState(stateElement) {
            // Hide all states
            welcomeState.classList.remove('active');
            formState.classList.remove('active');
            messageHistoryState.classList.remove('active');

            // Show the requested state
            stateElement.classList.add('active');

            // If showing form state, clear previous inputs if user hasn't submitted
            if (stateElement === formState && !userData.hasSubmitted) {
                userNameInput.value = '';
                userEmailInput.value = '';
                initialMessageInput.value = '';
                formMessageInput.value = '';
            }

            // If showing message history, focus on input
            if (stateElement === messageHistoryState) {
                setTimeout(() => {
                    chatMessageInput.focus();
                }, 100);
            }

            // If showing form state, focus on name input
            if (stateElement === formState) {
                setTimeout(() => {
                    userNameInput.focus();
                }, 100);
            }
        }

        // Handle form submission
        function submitForm() {
            const name = userNameInput.value.trim();
            const email = userEmailInput.value.trim();
            const initialMessage = initialMessageInput.value.trim();
            const formMessage = formMessageInput.value.trim();

            // Validate inputs
            if (!name) {
                alert('Please enter your name');
                userNameInput.focus();
                return;
            }

            if (!email || !isValidEmail(email)) {
                alert('Please enter a valid email address');
                userEmailInput.focus();
                return;
            }

            // Save user data
            userData = {
                name: name,
                email: email,
                hasSubmitted: true
            };

            // Add the initial message to chat if provided
            if (initialMessage) {
                addMessage(initialMessage, 'user');
            }

            // Add the form message to chat if provided
            if (formMessage) {
                addMessage(formMessage, 'user');
            }

            // Add bot response
            setTimeout(() => {
                addMessage("Thanks for introducing yourself! How can I help you today?", 'bot');
            }, 500);

            // Switch to message history state
            showState(messageHistoryState);
        }

        // Add a message to the chat
        function addMessage(text, sender) {
            const messageElement = document.createElement('div');
            messageElement.className = `message ${sender}`;

            const time = new Date();
            const timeString = time.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

            messageElement.innerHTML = `
                    ${text}
                    <div class="message-time">${timeString}</div>
                `;

            messagesContainer.appendChild(messageElement);

            // Scroll to bottom
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        // Validate email format
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Event Listeners
        chatButton.addEventListener('click', toggleChat);
        closeChat.addEventListener('click', toggleChat);

        // Welcome state buttons
        startChat.addEventListener('click', () => showState(formState));
        navChat.addEventListener('click', () => showState(formState));
        navHome.addEventListener('click', () => showState(welcomeState));

        // Form state - send message button
        sendFormMessage.addEventListener('click', submitForm);

        // Form state - pressing Enter in any input
        [userNameInput, userEmailInput, initialMessageInput, formMessageInput].forEach(input => {
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    submitForm();
                }
            });
        });

        // Message history state - send message button
        sendMessage.addEventListener('click', () => {
            const message = chatMessageInput.value.trim();
            if (message) {
                addMessage(message, 'user');
                chatMessageInput.value = '';

                // Bot auto-reply after 1 second
                setTimeout(() => {
                    const replies = [
                        "Thanks for your message! We'll get back to you soon.",
                        "I've noted your query. Our team will respond within 24 hours.",
                        "Thanks for reaching out! Is there anything specific you'd like to know?",
                        "We appreciate your message. Our support team has been notified."
                    ];
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    addMessage(randomReply, 'bot');
                }, 1000);
            }
        });

        // Message history state - pressing Enter
        chatMessageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage.click();
            }
        });

        // Close chat when clicking outside
        document.addEventListener('click', (event) => {
            const isChatButton = chatButton.contains(event.target);
            const isChatWidget = chatWidget.contains(event.target);

            if (!isChatButton && !isChatWidget && chatWidget.classList.contains('active')) {
                toggleChat();
            }
        });
    });
</script>
</body>

</html>