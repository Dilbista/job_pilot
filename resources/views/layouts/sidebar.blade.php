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


    /* Sidebar */
    .dashboard-sidebar {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 25px 0;
        height: fit-content;
    }

    .sidebar-header {
        padding: 0 25px 20px;
        border-bottom: 1px solid #eaeaea;
        margin-bottom: 15px;
    }

    .sidebar-header h3 {
        font-size: 18px;
        color: #1e293b;
        font-weight: 700;
    }

    .sidebar-menu {
        list-style: none;
    }

    .sidebar-menu li {
        margin-bottom: 2px;
    }

    .sidebar-menu a {
        display: flex;
        align-items: center;
        padding: 14px 25px;
        text-decoration: none;
        color: #475569;
        font-weight: 500;
        font-size: 15px;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }

    .sidebar-menu a:hover {
        background-color: #f1f5f9;
        color: #2563eb;
    }

    .sidebar-menu a.active {
        background-color: #f0f7ff;
        color: #2563eb;
        border-left: 3px solid #2563eb;
    }

    .sidebar-menu i {
        margin-right: 12px;
        width: 20px;
        text-align: center;
        font-size: 16px;
    }

    .item-logout {
        width: 100%;
        background: none;
        border: none;
        padding: 10px 18px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        font-size: 15px;
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
        cursor: pointer;
        text-align: left;
    }

    .item-logout i {
        font-size: 14px;
        color: #555;
    }

    .item-logout:hover {
        background-color: #f1f5f9;
        color: #2563eb;
    }
</style>

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

    /* Sidebar */
    .dashboard-sidebar {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 25px 0;
        height: fit-content;
        transition: var(--transition);
    }

    .sidebar-header {
        padding: 0 25px 20px;
        border-bottom: 1px solid #eaeaea;
        margin-bottom: 15px;
        transition: var(--transition);
    }

    .sidebar-header h3 {
        font-size: 18px;
        color: #1e293b;
        font-weight: 700;
        transition: var(--transition);
    }

    .sidebar-menu {
        list-style: none;
        transition: var(--transition);
    }

    .sidebar-menu li {
        margin-bottom: 2px;
        transition: var(--transition);
    }

    .sidebar-menu a {
        display: flex;
        align-items: center;
        padding: 14px 25px;
        text-decoration: none;
        color: #475569;
        font-weight: 500;
        font-size: 15px;
        transition: var(--transition);
        border-left: 3px solid transparent;
    }

    .sidebar-menu a:hover {
        background-color: #f1f5f9;
        color: #2563eb;
    }

    .sidebar-menu a.active {
        background-color: #f0f7ff;
        color: #2563eb;
        border-left: 3px solid #2563eb;
    }

    .sidebar-menu i {
        margin-right: 12px;
        width: 20px;
        text-align: center;
        font-size: 16px;
        transition: var(--transition);
    }

    .item-logout {
        width: 100%;
        background: none;
        border: none;
        padding: 10px 18px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        font-size: 15px;
        transition: var(--transition);
        border-left: 3px solid transparent;
        cursor: pointer;
        text-align: left;
    }

    .item-logout i {
        font-size: 14px;
        color: #555;
    }

    .item-logout:hover {
        background-color: #f1f5f9;
        color: #2563eb;
    }

    /* Mobile Menu Toggle Button */
    .mobile-menu-toggle {
        display: none;
        background: var(--primary);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 20px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        align-items: center;
        justify-content: space-between;
        transition: var(--transition);
    }

    .mobile-menu-toggle:hover {
        background: #2a75f0;
    }

    .mobile-menu-toggle i {
        font-size: 18px;
        transition: transform 0.3s ease;
    }

    .mobile-menu-toggle.active i {
        transform: rotate(180deg);
    }

    /* RESPONSIVE STYLES */

    /* Large devices (laptops/desktops, 992px and up) */
    @media (max-width: 1200px) {
        .dashboard-sidebar {
            padding: 20px 0;
        }
        
        .sidebar-header {
            padding: 0 20px 15px;
        }
        
        .sidebar-menu a {
            padding: 12px 20px;
            font-size: 14px;
        }
        
        .sidebar-menu i {
            margin-right: 10px;
            font-size: 15px;
        }
    }

    /* Medium devices (tablets, 768px to 992px) */
    @media (max-width: 992px) {
        .dashboard-sidebar {
            position: relative;
            padding: 15px 0;
        }
        
        .mobile-menu-toggle {
            display: flex;
        }
        
        .sidebar-header {
            padding: 0 20px 15px;
            margin-bottom: 10px;
        }
        
        .sidebar-header h3 {
            font-size: 16px;
        }
        
        .sidebar-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease, opacity 0.3s ease;
            opacity: 0;
        }
        
        .sidebar-menu.active {
            max-height: 800px;
            opacity: 1;
        }
        
        .sidebar-menu a {
            padding: 12px 20px;
            font-size: 14px;
        }
        
        .sidebar-menu i {
            margin-right: 10px;
            font-size: 14px;
            width: 18px;
        }
        
        .item-logout {
            padding: 10px 20px;
            font-size: 14px;
        }
    }

    /* Small devices (phones, 576px to 768px) */
    @media (max-width: 768px) {
        .dashboard-sidebar {
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .mobile-menu-toggle {
            padding: 10px 15px;
            font-size: 15px;
        }
        
        .sidebar-header {
            padding: 0 15px 10px;
        }
        
        .sidebar-header h3 {
            font-size: 15px;
        }
        
        .sidebar-menu a {
            padding: 10px 15px;
            font-size: 13.5px;
            border-left: 2px solid transparent;
        }
        
        .sidebar-menu a.active {
            border-left: 2px solid #2563eb;
        }
        
        .sidebar-menu i {
            margin-right: 8px;
            font-size: 13px;
            width: 16px;
        }
        
        .item-logout {
            padding: 10px 15px;
            font-size: 13.5px;
        }
        
        .item-logout i {
            font-size: 13px;
        }
    }

    /* Extra small devices (phones less than 576px) */
    @media (max-width: 576px) {
        .dashboard-sidebar {
            padding: 15px 0;
            border-radius: 6px;
        }
        
        .mobile-menu-toggle {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 6px;
        }
        
        .sidebar-header {
            padding: 0 12px 8px;
        }
        
        .sidebar-header h3 {
            font-size: 14px;
        }
        
        .sidebar-menu a {
            padding: 8px 12px;
            font-size: 13px;
        }
        
        .sidebar-menu i {
            margin-right: 6px;
            font-size: 12px;
            width: 15px;
        }
        
        .item-logout {
            padding: 8px 12px;
            font-size: 13px;
        }
        
        .item-logout i {
            font-size: 12px;
        }
    }

    /* Very small devices (phones less than 400px) */
    @media (max-width: 400px) {
        .mobile-menu-toggle {
            padding: 8px 10px;
            font-size: 13px;
        }
        
        .mobile-menu-toggle i {
            font-size: 16px;
        }
        
        .sidebar-header {
            padding: 0 10px 8px;
        }
        
        .sidebar-menu a {
            padding: 8px 10px;
            font-size: 12.5px;
        }
        
        .sidebar-menu i {
            margin-right: 5px;
            font-size: 11px;
        }
        
        .item-logout {
            padding: 8px 10px;
            font-size: 12.5px;
        }
    }

    /* Landscape mode for mobile */
    @media (max-height: 600px) and (orientation: landscape) {
        .sidebar-menu {
            max-height: 300px;
            overflow-y: auto;
        }
        
        .sidebar-menu.active {
            max-height: 300px;
        }
        
        .sidebar-menu a {
            padding: 8px 20px;
        }
    }

    /* For touch devices */
    @media (hover: none) and (pointer: coarse) {
        .sidebar-menu a:hover {
            background-color: transparent;
        }
        
        .sidebar-menu a:active {
            background-color: #f1f5f9;
            color: #2563eb;
        }
        
        .item-logout:hover {
            background-color: transparent;
        }
        
        .item-logout:active {
            background-color: #f1f5f9;
            color: #2563eb;
        }
    }

    /* Print styles */
    @media print {
        .dashboard-sidebar {
            display: none;
        }
    }
</style>

<div class="dashboard-sidebar">
    <!-- Mobile Toggle Button -->
    <button class="mobile-menu-toggle" id="mobileMenuToggle">
        <span>Company Dashboard</span>
        <i class="fas fa-chevron-down"></i>
    </button>
    
    <div class="sidebar-header">
        <h3>Company Dashboard</h3>
    </div>
    <ul class="sidebar-menu" id="sidebarMenu">
        <li><a href="{{ route('company.index') }}" class="{{ request()->is('company/dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-pie"></i> Overview</a></li>
        <li><a href="{{ route('dashboard.profile') }}"
                class="{{ request()->is('dashboard/profile') ? 'active' : '' }}"><i class="fas fa-user"></i> My
                Profile</a></li>
        <li><a href="{{ route('company.myJobs') }}" class="{{ request()->is('company/my-jobs') ? 'active' : '' }}"><i
                    class="fas fa-briefcase"></i> My Jobs</a></li>
        <li><a href="{{ route('company.createJob') }}"
                class="{{ request()->is('company/create-job') ? 'active' : '' }}"><i class="fas fa-plus-circle"></i>
                Post a Job</a></li>
        <li><a href="{{ route('dashboard.savedCandidates') }}"
                class="{{ request()->is('dashboard/saved-candidates') ? 'active' : '' }}"><i
                    class="fas fa-bookmark"></i> Saved Candidates</a></li>
        <li><a href="{{ route('dashboard.customQuestion') }}"
                class="{{ request()->is('dashboard/custom-question') ? 'active' : '' }}"><i
                    class="fas fa-question-circle"></i> Custom Questions</a></li>
        <li><a href="{{ route('dashboard.billing') }}"
                class="{{ request()->is('dashboard/billing') ? 'active' : '' }}"><i class="fas fa-credit-card"></i>
                Plans & Billing</a></li>
        <li><a href="{{ route('dashboard.messenger') }}"
                class="{{ request()->is('dashboard/messenger') ? 'active' : '' }}"><i class="fas fa-comments"></i>
                Messenger</a></li>
        <li><a href="{{ route('dashboard.verifyAccount') }}"
                class="{{ request()->is('dashboard/verify-account') ? 'active' : '' }}"><i
                    class="fas fa-shield-alt"></i> Verify account</a></li>
        <li><a href="{{ route('dashboard.settings') }}"
                class="{{ request()->is('dashboard/settings') ? 'active' : '' }}"><i class="fas fa-cog"></i>
                Settings</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="item-logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </button>
            </form>
        </li>
    </ul>
</div>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const sidebarMenu = document.getElementById('sidebarMenu');
        
        // Toggle mobile menu
        if (mobileMenuToggle && sidebarMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                sidebarMenu.classList.toggle('active');
                this.classList.toggle('active');
                
                // Change icon based on state
                const icon = this.querySelector('i');
                if (sidebarMenu.classList.contains('active')) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
            
            // Close menu when clicking outside on mobile
            document.addEventListener('click', function(event) {
                if (window.innerWidth <= 992) {
                    if (!sidebarMenu.contains(event.target) && 
                        !mobileMenuToggle.contains(event.target) && 
                        sidebarMenu.classList.contains('active')) {
                        sidebarMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                        
                        const icon = mobileMenuToggle.querySelector('i');
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                }
            });
            
            // Auto-close menu when clicking a link on mobile
            const menuLinks = sidebarMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 992) {
                        sidebarMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                        
                        const icon = mobileMenuToggle.querySelector('i');
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                });
            });
            
            // Close menu on window resize if needed
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (window.innerWidth > 992) {
                        // On larger screens, ensure menu is visible
                        sidebarMenu.classList.add('active');
                        sidebarMenu.style.maxHeight = '';
                    } else {
                        // On smaller screens, close menu
                        sidebarMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                        
                        const icon = mobileMenuToggle.querySelector('i');
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    }
                }, 250);
            });
        }
        
        // Add touch feedback for mobile
        const menuItems = document.querySelectorAll('.sidebar-menu a, .item-logout');
        menuItems.forEach(item => {
            item.addEventListener('touchstart', function() {
                this.style.opacity = '0.7';
            });
            
            item.addEventListener('touchend', function() {
                this.style.opacity = '1';
            });
        });
    });
</script>