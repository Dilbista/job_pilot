<div class="col-lg-3">
    <div class="d-sidebar">
        <h3 class="tw-mb-3">Candidate Dashboard</h3>

        <ul class="sidebar-menu">
            <!-- Overview -->
            <li class="menu-item">
                <a href="{{ route('candidate.index') }}"
                    class="{{ request()->routeIs('candidate.index') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M3 13h7V3H3v10Zm11 8h7V3h-7v18ZM3 21h7v-6H3v6Z" stroke="currentColor"
                                    stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="button-text">Overview</span>
                    </span>
                </a>
            </li>

            <!-- Applied Jobs -->
            <li class="menu-item">
                <a href="{{ route('candidate.appliedjobs') }}"
                    class="{{ request()->routeIs('candidate.appliedjobs') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M4 7h16M6 7v13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" />
                                <path d="M9 7V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                        </span>
                        <span class="button-text">Applied Jobs</span>
                    </span>
                </a>
            </li>

            <!-- Favorite Jobs -->
            <li class="menu-item">
                <a href="{{ route('candidate.favoritejob') }}"
                    class="{{ request()->routeIs('candidate.favoritejob') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M12 17.3l-6.18 3.25 1.18-6.9L2 8.9l6.91-1L12 1.8l3.09 6.1 6.91 1-5 4.75 1.18 6.9L12 17.3Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="button-text">Favorite Jobs</span>
                    </span>
                </a>
            </li>

            <!-- Job Alert -->
            <li class="menu-item">
                <a href="{{ route('candidate.jobalert') }}"
                    class="{{ request()->routeIs('candidate.jobalert') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M18 16v-5a6 6 0 1 0-12 0v5l-2 2h16l-2-2Z" stroke="currentColor"
                                    stroke-width="1.5" stroke-linejoin="round" />
                                <path d="M9 18a3 3 0 0 0 6 0" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </span>
                        <span class="button-text">Job Alert</span>
                    </span>
                </a>
            </li>

            <!-- Messenger -->
            <li class="menu-item">
                <a href="{{ route('candidate.messenger') }}"
                    class="{{ request()->routeIs('candidate.messenger') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M21 12a9 9 0 1 0-4 7.5L21 21v-9Z" stroke="currentColor" stroke-width="1.5"
                                    stroke-linejoin="round" />
                                <path d="M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="button-text">Messenger</span>
                    </span>
                </a>
            </li>

            <!-- Plans & Billing -->
            <li class="menu-item">
                <a href="{{ route('candidate.billing') }}"
                    class="{{ request()->routeIs('candidate.billing') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor"
                                    stroke-width="1.5" />
                                <path d="M3 9h18" stroke="currentColor" stroke-width="1.5" />
                            </svg>
                        </span>
                        <span class="button-text">Plans & Billing</span>
                    </span>
                </a>
            </li>

            <!-- Settings -->
            <li class="menu-item">
                <a href="{{ route('candidate.settings') }}"
                    class="{{ request()->routeIs('candidate.settings') ? 'active' : '' }}">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" stroke="currentColor"
                                    stroke-width="1.5" />
                                <path
                                    d="M19.4 15a1.7 1.7 0 0 0 .34 1.87l-1.8 3.1a2 2 0 0 0-2.3.6H8.4a2 2 0 0 0-2.3-.6l-1.8-3.1a1.7 1.7 0 0 0 .34-1.87V11a1.7 1.7 0 0 0-.34-1.87l1.8-3.1a2 2 0 0 0 2.3-.6h6.8a2 2 0 0 0 2.3.6l1.8 3.1a1.7 1.7 0 0 0-.34 1.87v4Z"
                                    stroke="currentColor" stroke-width="1.2" />
                            </svg>
                        </span>
                        <span class="button-text">Settings</span>
                    </span>
                </a>
            </li>

            <!-- Logout -->
            <li class="menu-item">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="button-content-wrapper">
                        <span class="button-icon tw-flex tw-items-center">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M15 3h-8a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" stroke="currentColor"
                                    stroke-width="1.5" />
                                <path d="M10 12h11M18 8l3 4-3 4" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="button-text">Log Out</span>
                    </span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
</div>
<style>
    .sidebar-menu .menu-item a {
        display: block;
        padding: 8px 12px;
        color: #333;
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 4px;
        transition: all 0.3s ease;
    }

    .sidebar-menu .menu-item a:hover {
        background-color: #f5f5f5;
        color: #007bff;
    }

    .sidebar-menu .menu-item a.active {
        background-color: #007bff;
        color: white;
        font-weight: 500;
        box-shadow: 0 2px 8px rgba(0, 123, 255, 0.3);
    }

    .sidebar-menu .menu-item a.active .button-icon svg {
        stroke: white;
    }
</style>
<script>
    $(document).ready(function() {
        const currentUrl = window.location.href;

        // Function to update active state
        function updateActiveState() {
            // Remove active class from all links
            $('.sidebar-menu .menu-item a').removeClass('active');

            // Add active class to current page link
            $('.sidebar-menu .menu-item a').each(function() {
                // Check both exact URL match and route match
                if (this.href === currentUrl ||
                    $(this).hasClass('active')) {
                    $(this).addClass('active');
                    return false; // Stop checking once found
                }
            });
        }

        // Set active state on page load
        updateActiveState();

        // Click behavior: toggle active class
        $('.sidebar-menu .menu-item a').on('click', function(e) {
            // Don't prevent default for logout or external links
            if (this.href.includes('/logout')) {
                return true;
            }

            // Remove active class from all links
            $('.sidebar-menu .menu-item a').removeClass('active');

            // Add active class to clicked link
            $(this).addClass('active');

            // If you want to prevent page reload and use AJAX navigation, uncomment below:
            // e.preventDefault();
            // const url = $(this).attr('href');
            // window.history.pushState({}, '', url);
            // loadContent(url); // You'd need to implement loadContent function

            return true;
        });

        // Handle browser back/forward buttons
        window.addEventListener('popstate', function() {
            setTimeout(updateActiveState, 100);
        });
    });
</script>
