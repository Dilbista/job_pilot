<style>
    /* Footer Styles */
    footer {
        background-color: #1a1a1a;
        color: #ddd;
        padding: 60px 30px;
        width: 100%;
        box-sizing: border-box;
    }

    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
        gap: 40px;
        margin: 5px;
        max-width: 1200px;
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

    /* Chat Button */
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
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .chat-button:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(26, 115, 232, 0.6);
    }

    /* Animation for blue section */
    @keyframes floatAnimation {
        0%, 100% {
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
        
        .chat-button {
            width: 55px;
            height: 55px;
            font-size: 22px;
            bottom: 25px;
            right: 25px;
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
        
        .chat-button {
            width: 50px;
            height: 50px;
            font-size: 20px;
            bottom: 20px;
            right: 20px;
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
        
        .chat-button {
            width: 45px;
            height: 45px;
            font-size: 18px;
            bottom: 15px;
            right: 15px;
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
        
        .chat-button {
            width: 40px;
            height: 40px;
            font-size: 16px;
            bottom: 10px;
            right: 10px;
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
        
        .chat-button {
            bottom: 15px;
            right: 15px;
        }
    }

    /* Print Styles */
    @media print {
        footer {
            display: none;
        }
        
        .chat-button {
            display: none;
        }
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
        
        .chat-button:hover {
            transform: none;
        }
    }
</style>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-col footer-about">
                <h3>Jobpilot</h3>
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
            <p>&copy; DeepHub 2025 | All Rights Reserved</p>
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
<div class="chat-button">
    <i class="fas fa-comment-dots"></i>
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
    document.addEventListener('DOMContentLoaded', function() {
        const profileDropdown = document.getElementById('profileDropdown');
        let isDropdownOpen = false;
        
        // Toggle dropdown on mobile
        if (window.innerWidth <= 768) {
            profileDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
                const dropdownMenu = this.querySelector('.dropdown-menu');
                dropdownMenu.classList.toggle('show');
                isDropdownOpen = !isDropdownOpen;
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
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
        document.addEventListener('touchstart', function() {
            // This helps prevent zoom on iOS
        }, { passive: true });
        
        // Add active state for mobile taps
        const buttons = document.querySelectorAll('button, .search-btn, .post-job-btn, .gateway-item');
        buttons.forEach(button => {
            button.addEventListener('touchstart', function() {
                this.style.opacity = '0.8';
            });
            
            button.addEventListener('touchend', function() {
                this.style.opacity = '1';
            });
        });
        
        // Handle orientation change
        window.addEventListener('orientationchange', function() {
            // Relayout after orientation change
            setTimeout(function() {
                window.dispatchEvent(new Event('resize'));
            }, 300);
        });
    });
    
    // Make dropdowns work better on mobile
    document.querySelectorAll('.dropdown-select').forEach(select => {
        select.addEventListener('change', function() {
            if (window.innerWidth <= 768) {
                // Show feedback on mobile
                alert(`Selected: ${this.value}`);
            }
        });
    });
</script>
</body>
</html>

