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

<div class="dashboard-sidebar">
    <div class="sidebar-header">
        <h3>Company Dashboard</h3>
    </div>
    <ul class="sidebar-menu">
        <li><a href="{{ route('company.index') }}" class="{{ request()->is('company/dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-pie">
                </i> Overview</a></li>
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