@include('layouts.header')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <h1 class="hero-title">The #1 Jobpilot Jobs for<br>Hiring or Finding your next job</h1>

            <p class="hero-subtitle">
                Each month, more than 3 million job seekers turn to website in their search for work,
                making over 13.0,000 applications every single day
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

</body>

</html>