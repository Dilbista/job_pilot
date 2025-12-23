<style>
    /* Footer Styles */
    footer {
        background-color: #1a1a1a;
        color: #ddd;
        padding: 60px 30px;
    }

    .footer-content {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
        gap: 40px;
        margin: 5px;
    }
    .footer-content .phone-number{
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
    }

    .footer-col ul li {
        margin-bottom: 12px;
    }

    .footer-col ul li a {
        color: #aaa;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-col ul li a:hover {
        color: #1a73e8;
    }

    .footer-about p {
        margin-bottom: 20px;
        max-width: 300px;
    }

    .copyright {
        text-align: left;
        padding: 0px;
        border-top: 1px solid #333;
        color: #888;
        font-size: 14px;
    }
    .copyright p{
        margin-top: 10px;
        width: 48%;
    }
    .social-icons {
            margin: 0px;
            display: flex;
            justify-content: right;
            gap: 20px;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-icon:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
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
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Candidate</h3>
                <ul>
                    <li><a href="#">Browse Jobs</a></li>
                    <li><a href="#">Browse Candidates</a></li>
                    <li><a href="#">Candidate Dashboard</a></li>
                    <li><a href="#">Saved Jobs</a></li>
                    <li><a href="#">Candidate plan</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Employer</h3>
                <ul>
                    <li><a href="#">Post a Job</a></li>
                    <li><a href="#">Companies Dashboard</a></li>
                    <li><a href="#">Applications</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy & Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>© Jobpilot 2023 | All Rights Reserved</p>
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

