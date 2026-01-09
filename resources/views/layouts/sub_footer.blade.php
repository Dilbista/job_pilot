<style>
    /* Footer Styles */
    footer {
        background-color: #1a1a1a;
        color: #ddd;
        padding: 60px 30px;
        width: 100%;
        box-sizing: border-box;
    }

    /* Footer Top Section with Numbers */
    .footer-top {
        background-color: #1a1a1a;
        padding: 20px 10px;
        border-radius: 10px;
        margin-bottom: 0px;
        max-width: auto;
        margin-left: auto;
        margin-right: auto;
    }

    .footer-top-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 30px;
    }

    .subscription-form {
        flex: 1;
        min-width: 200px;
    }

    .subscription-form h4 {
        color: white;
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: 400;
    }

    .subscription-form form {
        display: flex;
        gap: 10px;
    }

    .input-with-icon {
        position: relative;
        flex: 1;
    }

    .input-with-icon i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
        font-size: 16px;
    }

    .subscription-form input {
        width: 100%;
        padding: 14px 20px 14px 45px;
        border: none;
        border-radius: 8px;
        background-color: #1a1a1a;
        border: 1px solid rgb(127, 123, 123);
        color: white;
        font-size: 16px;
    }

    .subscription-form input::placeholder {
        color: #aaa;
    }

    .subscription-form button {
        background-color: #1a73e8;
        color: white;
        border: none;
        padding: 0 30px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px;
    }

    .subscription-form button:hover {
        background-color: #0d5bb5;
    }

    .footer-numbers {
        display: flex;
        gap: 80px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .number-item {
        text-align: center;
    }

    .count {
        display: block;
        font-size: 30px;
        font-weight: 400;
        color: white;
        line-height: 1;
        margin-bottom: 8px;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    .count-label {
        color: #aaa;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    hr {
        border: none;
        height: 1px;
        background-color: #333;
        margin: 30px 0;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .footer-top-content {
            flex-direction: column;
            text-align: center;
        }

        .footer-numbers {
            gap: 40px;
        }

        .subscription-form {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .footer-numbers {
            gap: 30px;
        }

        .count {
            font-size: 36px;
        }

        .footer-top {
            padding: 30px 20px;
        }

        footer {
            padding: 40px 20px;
        }
    }

    @media (max-width: 576px) {
        .footer-numbers {
            gap: 20px;
        }

        .number-item {
            min-width: 100px;
        }

        .count {
            font-size: 32px;
        }

        .subscription-form form {
            flex-direction: column;
        }

        .subscription-form input,
        .subscription-form button {
            width: 100%;
        }

        .subscription-form button {
            padding: 14px;
        }

        .footer-top {
            padding: 25px 15px;
        }
    }

    @media (max-width: 400px) {
        .footer-numbers {
            gap: 15px;
        }

        .count {
            font-size: 28px;
        }

        .count-label {
            font-size: 14px;
        }
    }
</style>

<!-- Footer Section -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-content">
                <!-- Email Subscription Form -->
                <div class="subscription-form">
                    <form id="subscribeForm">
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email Address" required>
                        </div>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>

                <!-- Counting Numbers -->
                <div class="footer-numbers">
                    <div class="number-item">
                        <span class="count" id="liveJobsCount">0</span>
                        <span class="count-label">Live Jobs</span>
                    </div>
                    <div class="number-item">
                        <span class="count" id="companiesCount">13</span>
                        <span class="count-label">Companies</span>
                    </div>
                    <div class="number-item">
                        <span class="count" id="candidatesCount">31</span>
                        <span class="count-label">Candidates</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</footer>
<script>
    // Animated Counting Function
    function animateCount(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16); // 60fps
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 16);
    }

    // Initialize counting animation when page loads
    document.addEventListener('DOMContentLoaded', function () {
        // Get the count elements
        const liveJobsCount = document.getElementById('liveJobsCount');
        const companiesCount = document.getElementById('companiesCount');
        const candidatesCount = document.getElementById('candidatesCount');

        // Get the target values
        const liveJobsTarget = parseInt(liveJobsCount.textContent);
        const companiesTarget = parseInt(companiesCount.textContent);
        const candidatesTarget = parseInt(candidatesCount.textContent);

        // Start counting animation
        animateCount(liveJobsCount, liveJobsTarget);
        animateCount(companiesCount, companiesTarget);
        animateCount(candidatesCount, candidatesTarget);

        // Subscription form handler
        const subscribeForm = document.getElementById('subscribeForm');
        subscribeForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();

            if (email) {
                alert(`Thank you for subscribing with email: ${email}`);
                emailInput.value = '';
            }
        });
    });
</script>