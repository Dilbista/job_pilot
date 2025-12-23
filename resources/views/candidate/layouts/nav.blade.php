    <header class="header rt-fixed-top">
        <div class="n-header">
            <div class="n-header--top relative" style="color: black">
                <div class="container tw-px-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="n-header--top__left main-menu">
                            <!-- Mobile Top Bar -->
                            <div
                                class="mbl-top d-flex align-items-center justify-content-between container position-relative d-lg-none">
                                <div class="d-flex align-items-center">
                                    <a href="https://jobpilot.lomeyolabs.com" class="brand-logo">
                                        <img src="https://jobpilot.lomeyolabs.com/frontend/assets/images/logo/logo.svg"
                                            alt="logo">
                                    </a>
                                </div>
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <div class="search-icon d-lg-none tw-text-white">
                                            <svg id="mblSearchIcon" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M20.9999 21L16.6499 16.65" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="mblTogglesearch bg-primary-500 rounded">
                                            <form action="https://jobpilot.lomeyolabs.com/jobs" method="GET"
                                                id="search-form"
                                                class="shadow px-md-5 py-md-3 p-3 !tw-bg-white rounded w-sm-75 w-100">
                                                <div class="form-item">
                                                    <input name="keyword" class="search-input w-100" type="text"
                                                        placeholder="Job Title, Keyword" value=""
                                                        id="mobile_search_input">
                                                </div>
                                            </form>
                                        </div>
                                        <ul
                                            class="custom-border list-unstyled d-flex align-items-center justify-content-end">
                                            <li>
                                                <div class="notification-icon position-relative pointer tw-text-white">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M17.1968 2.24902C18.7229 3.21245 19.9531 4.57885 20.7516 6.19736"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M3.24829 6.19736C4.04681 4.57885 5.27703 3.21245 6.80315 2.24902"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <svg id="unNotifications" class="circle" width="14"
                                                        height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="7" cy="7" r="6" fill="#E05151"
                                                            stroke="white" stroke-width="2"></circle>
                                                    </svg>
                                                    <div class="notification-bar">
                                                        <a href="#" class="notification-header">
                                                            <h2>Notifications</h2>
                                                            <p>Mark all as read</p>
                                                        </a>
                                                        <div class="devider"></div>
                                                        <div class="notification-list">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="40" height="40"
                                                                                fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256"
                                                                                    fill="none"></rect>
                                                                                <rect x="32" y="72" width="192"
                                                                                    height="144" rx="8"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></rect>
                                                                                <path
                                                                                    d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></path>
                                                                                <line x1="32" y1="160"
                                                                                    x2="224" y2="160"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>2 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="40" height="40"
                                                                                fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256"
                                                                                    fill="none"></rect>
                                                                                <rect x="32" y="72" width="192"
                                                                                    height="144" rx="8"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></rect>
                                                                                <path
                                                                                    d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></path>
                                                                                <line x1="32" y1="160"
                                                                                    x2="224" y2="160"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="40" height="40"
                                                                                fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256"
                                                                                    fill="none"></rect>
                                                                                <rect x="32" y="72" width="192"
                                                                                    height="144" rx="8"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></rect>
                                                                                <path
                                                                                    d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></path>
                                                                                <line x1="32" y1="160"
                                                                                    x2="224" y2="160"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="40" height="40"
                                                                                fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256"
                                                                                    fill="none"></rect>
                                                                                <rect x="32" y="72" width="192"
                                                                                    height="144" rx="8"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></rect>
                                                                                <path
                                                                                    d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></path>
                                                                                <line x1="32" y1="160"
                                                                                    x2="224" y2="160"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="40" height="40"
                                                                                fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256"
                                                                                    fill="none"></rect>
                                                                                <rect x="32" y="72" width="192"
                                                                                    height="144" rx="8"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></rect>
                                                                                <path
                                                                                    d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></path>
                                                                                <line x1="32" y1="160"
                                                                                    x2="224" y2="160"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="d-flex">
                                                                        <div class="notification-thumb">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="40" height="40"
                                                                                fill="#000000" viewBox="0 0 256 256">
                                                                                <rect width="256" height="256"
                                                                                    fill="none"></rect>
                                                                                <rect x="32" y="72" width="192"
                                                                                    height="144" rx="8"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></rect>
                                                                                <path
                                                                                    d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></path>
                                                                                <line x1="32" y1="160"
                                                                                    x2="224" y2="160"
                                                                                    fill="none" stroke="#000000"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="16"></line>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="">
                                                                            <h4>New job posted suiting your profile</h4>
                                                                            <p>5 days ago</p>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="text-center bg-gray-50 p-2">
                                                            <a
                                                                href="https://jobpilot.lomeyolabs.com/company/all/notifications">
                                                                <span class="body-font-1 ft-wt-5 m-2 underCs">View All
                                                                    Notifications</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="relative">
                                                <a href="https://jobpilot.lomeyolabs.com/user/dashboard"
                                                    class="candidate-profile p-0">
                                                    <img src="https://jobpilot.lomeyolabs.com/dummy-data/images/candidates/candidate-04.jpg"
                                                        alt="user logo">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Desktop Navigation -->
                            <div class="container">
                                <ul class="menu-active-classes">
                                    <li class="menu-item"><a href="{{ route('candidate.dashboard') }}">Home</a></li>
                                    <li class="menu-item"><a href="/jobs">Find Job</a></li>
                                    <li class="menu-item"><a href="/employers">Companies</a></li>
                                    <li class="menu-item"><a href={{ route('candidate.index') }}
                                            class="text-primary active">Dashboard</a></li>
                                    <li class="menu-item"><a href={{ route('candidate.jobalert') }}>Job Alert</a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Header -->

            <div class="n-header--bottom" style="border-top: 1px solid rgba(255, 255, 255, 0.2);">
                <div class="container position-relative">
                    <div class="d-flex flex-wrap tw-gap-2 tw-items-center">
                        <div class="n-header--bottom__left d-flex align-items-center">
                            <a href="https://jobpilot.lomeyolabs.com" class="brand-logo">
                                <img src="https://jobpilot.lomeyolabs.com/frontend/assets/images/logo/logo.svg"
                                    alt="logo">
                            </a>
                            <form action="https://jobpilot.lomeyolabs.com/jobs" method="GET" id="search-form"
                                class="mx-width-350 header-search-form d-lg-block d-none"
                                style="margin: 0 auto;margin-left: 50px;">
                                <div class="search-box">
                                    <select id="headerSearchs" class="form-select"
                                        aria-label="Default select example"
                                        style="border: none; background: transparent; box-shadow: none; padding-left: 0; padding-right: 0; width: auto; min-width: 100px; font-size: 14px; font-weight: 500; color: #0A65CC;"
                                        onchange="showContent(this.value)">
                                        <option value="job"
                                            style="border: none; background: transparent; box-shadow: none; ">Jobs
                                        </option>
                                        <option value="candidate">Candidate</option>
                                        <option value="company">Company</option>
                                    </select>
                                    <div id="contentDisplay" style="display:none; margin-top: 10px;">
                                        <!-- Content to display based on selection -->
                                    </div>
                                    <script>
                                        function showContent(value) {
                                            const contentDisplay = document.getElementById('contentDisplay');
                                            contentDisplay.style.display = 'block';
                                            contentDisplay.innerHTML = '';

                                            if (value === 'job') {
                                                contentDisplay.innerHTML = '<p>Job related content goes here.</p>';
                                            } else if (value === 'candidate') {
                                                contentDisplay.innerHTML = '<p>Candidate related content goes here.</p>';
                                            } else if (value === 'company') {
                                                contentDisplay.innerHTML = '<p>Company related content goes here.</p>';
                                            }
                                        }
                                    </script>
                                    <div class="d-flex flex-column flex-md-row align-items-center tw-ps-3">
                                        <svg class="searcbox-searchicon" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M21 20.9999L16.65 16.6499" stroke="#0A65CC" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <input name="keyword" class="search-input" type="text"
                                            placeholder="Job Title, Keyword" value="" id="global_search">
                                    </div>
                                    <span id="autocomplete_job_results"></span>
                                </div>
                            </form>
                        </div>

                        <!-- Bottom Right Section -->
                        <div class="n-header--bottom__right " style="margin: 0 auto;margin-right: 50px;">
                            <div class="d-flex align-items-center">
                                <div class="search-icon tw-ml-2 d-lg-none !tw-cursor-pointer">
                                    <span>
                                        <svg id="searchIcon" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M20.9999 21L16.6499 16.65" stroke="#FFFFFF" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="togglesearch">
                                    <form action="https://jobpilot.lomeyolabs.com/jobs" method="GET"
                                        id="search-form"
                                        class="shadow px-md-5 py-md-3 p-3 !tw-bg-white rounded w-sm-75 w-100">
                                        <div class="search-box form-item position-relative">
                                            <svg class="" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                    stroke="#0A65CC" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M21 20.9999L16.65 16.6499" stroke="#0A65CC"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <input name="keyword" class="search-input w-100" type="text"
                                                placeholder="Job Title, Keyword" value="" id="search_input">
                                        </div>
                                    </form>
                                </div>
                                <ul class="list-unstyled tw-gap-6 tw-flex tw-items-center tw-justify-between">
                                    <li>
                                        <div class="notification-icon position-relative pointer tw-text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M17.1968 2.24902C18.7229 3.21245 19.9531 4.57885 20.7516 6.19736"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M3.24829 6.19736C4.04681 4.57885 5.27703 3.21245 6.80315 2.24902"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <svg id="unNotifications" class="circle" width="14" height="14"
                                                viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7" cy="7" r="6" fill="#E05151"
                                                    stroke="white" stroke-width="2"></circle>
                                            </svg>
                                            <div class="notification-bar">
                                                <a href="#" class="notification-header">
                                                    <h2>Notifications</h2>
                                                    <p>Mark all as read</p>
                                                </a>
                                                <div class="devider"></div>
                                                <div class="notification-list">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="40" height="40" fill="#000000"
                                                                        viewBox="0 0 256 256">
                                                                        <rect width="256" height="256"
                                                                            fill="none"></rect>
                                                                        <rect x="32" y="72" width="192"
                                                                            height="144" rx="8"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </rect>
                                                                        <path
                                                                            d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </path>
                                                                        <line x1="32" y1="160"
                                                                            x2="224" y2="160"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>2 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="40" height="40" fill="#000000"
                                                                        viewBox="0 0 256 256">
                                                                        <rect width="256" height="256"
                                                                            fill="none"></rect>
                                                                        <rect x="32" y="72" width="192"
                                                                            height="144" rx="8"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </rect>
                                                                        <path
                                                                            d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </path>
                                                                        <line x1="32" y1="160"
                                                                            x2="224" y2="160"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="40" height="40" fill="#000000"
                                                                        viewBox="0 0 256 256">
                                                                        <rect width="256" height="256"
                                                                            fill="none"></rect>
                                                                        <rect x="32" y="72" width="192"
                                                                            height="144" rx="8"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </rect>
                                                                        <path
                                                                            d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </path>
                                                                        <line x1="32" y1="160"
                                                                            x2="224" y2="160"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="40" height="40" fill="#000000"
                                                                        viewBox="0 0 256 256">
                                                                        <rect width="256" height="256"
                                                                            fill="none"></rect>
                                                                        <rect x="32" y="72" width="192"
                                                                            height="144" rx="8"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </rect>
                                                                        <path
                                                                            d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </path>
                                                                        <line x1="32" y1="160"
                                                                            x2="224" y2="160"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="40" height="40" fill="#000000"
                                                                        viewBox="0 0 256 256">
                                                                        <rect width="256" height="256"
                                                                            fill="none"></rect>
                                                                        <rect x="32" y="72" width="192"
                                                                            height="144" rx="8"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </rect>
                                                                        <path
                                                                            d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </path>
                                                                        <line x1="32" y1="160"
                                                                            x2="224" y2="160"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="d-flex">
                                                                <div class="notification-thumb">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="40" height="40" fill="#000000"
                                                                        viewBox="0 0 256 256">
                                                                        <rect width="256" height="256"
                                                                            fill="none"></rect>
                                                                        <rect x="32" y="72" width="192"
                                                                            height="144" rx="8"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </rect>
                                                                        <path
                                                                            d="M168,72V56a16,16,0,0,0-16-16H104A16,16,0,0,0,88,56V72"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </path>
                                                                        <line x1="32" y1="160"
                                                                            x2="224" y2="160"
                                                                            fill="none" stroke="#000000"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="16">
                                                                        </line>
                                                                    </svg>
                                                                </div>
                                                                <div class="">
                                                                    <h4>New job posted suiting your profile</h4>
                                                                    <p>5 days ago</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center bg-gray-50 p-2">
                                                    <a
                                                        href="https://jobpilot.lomeyolabs.com/company/all/notifications">
                                                        <span class="body-font-1 ft-wt-5 m-2 underCs">View All
                                                            Notifications</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="https://jobpilot.lomeyolabs.com/candidate/messages"
                                            class="tw-relative tw-text-white">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 9.5H12M8 13H15M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.1971 3.23374 14.3397 3.65806 15.3845C3.73927 15.5845 3.77988 15.6845 3.798 15.7653C3.81572 15.8443 3.8222 15.9028 3.82221 15.9839C3.82222 16.0667 3.80718 16.1569 3.77711 16.3374L3.18413 19.8952C3.12203 20.2678 3.09098 20.4541 3.14876 20.5888C3.19933 20.7067 3.29328 20.8007 3.41118 20.8512C3.54589 20.909 3.73218 20.878 4.10476 20.8159L7.66265 20.2229C7.84309 20.1928 7.9333 20.1778 8.01613 20.1778C8.09715 20.1778 8.15566 20.1843 8.23472 20.202C8.31554 20.2201 8.41552 20.2607 8.61549 20.3419C9.6603 20.7663 10.8029 21 12 21Z"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <svg class="circle d-none unread-message-part" width="14"
                                                height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="7" cy="7" r="6" fill="#E05151"
                                                    stroke="white" stroke-width="2"></circle>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="dropdown dropstart">
                                        <a href="javascript:void(0)" class="candidate-profile position-relative">
                                            <img src="https://jobpilot.lomeyolabs.com/dummy-data/images/candidates/candidate-04.jpg"
                                                alt="photo">
                                            <span class="available-alert-header">
                                                <svg class="circle" width="14" height="14"
                                                    viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="7" cy="7" r="6" fill="#2ecc71"
                                                        stroke="white" stroke-width="2"></circle>
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item active"
                                                href="candidate/index">Dashboard</a>
                                            <a class="dropdown-item"
                                                href="#">Settings</a>
                                            <a class="dropdown-item" href="#">Log
                                                Out</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
     <!-- JavaScript -->
 <script>
     $(document).ready(function() {
         // Search box toggle
         $('#searchIcon, #mblSearchIcon').click(function() {
             const searchBox = $(this).closest('.n-header--bottom__right, .mbl-top').find(
                 '.togglesearch, .mblTogglesearch');
             searchBox.slideToggle(300, function() {
                 if ($(this).is(':visible')) {
                     $(this).find('.search-input').focus().addClass('glow');
                     setTimeout(() => {
                         $(this).find('.search-input').removeClass('glow');
                     }, 1000);
                 }
             });
         });

         // Mobile menu toggle
         $('.menu-click button').click(function() {
             $(this).find('span').toggleClass('active');
             $('.main-menu').toggleClass('active');
         });

         // Notification handling
         $('.notification-icon').click(function(e) {
             e.stopPropagation();
             $('.notification-bar').toggleClass('show');
             if ($('.notification-bar').hasClass('show')) {
                 $('.notification-bar').css({
                     'opacity': '1',
                     'visibility': 'visible',
                     'transform': 'translateY(0)'
                 });
             } else {
                 $('.notification-bar').css({
                     'opacity': '0',
                     'visibility': 'hidden',
                     'transform': 'translateY(-10px)'
                 });
             }
         });

         // Close notification when clicking outside
         $(document).click(function(e) {
             if (!$(e.target).closest('.notification-bar, .notification-icon').length) {
                 $('.notification-bar').removeClass('show').css({
                     'opacity': '0',
                     'visibility': 'hidden',
                     'transform': 'translateY(-10px)'
                 });
             }
         });

         // Mark all notifications as read
         $('.notification-header p').click(function(e) {
             e.preventDefault();
             $('.notification-list li').each(function(index) {
                 const item = $(this);
                 setTimeout(() => {
                     item.fadeOut(300, function() {
                         $(this).remove();
                         if (index === $('.notification-list li').length - 1) {
                             $('#unNotifications').fadeOut(300);
                         }
                     });
                 }, index * 100);
             });
         });

         // Profile dropdown
         $('.candidate-profile').click(function(e) {
             e.preventDefault();
             $(this).next('.dropdown-menu').toggle();
         });

         // Close dropdowns when clicking outside
         $(document).click(function(e) {
             if (!$(e.target).closest('.dropdown, .candidate-profile').length) {
                 $('.dropdown-menu').hide();
             }
         });

         // Table row hover effects
         $('.db-job-card-table tbody tr').hover(
             function() {
                 $(this).addClass('hovered');
                 $(this).find('.btn').addClass('pulse');
             },
             function() {
                 $(this).removeClass('hovered');
                 $(this).find('.btn').removeClass('pulse');
             }
         );

         // View job details with animation
         $('.db-job-btn-wrap .btn').click(function(e) {
             e.preventDefault();
             const $btn = $(this);
             const url = $btn.attr('href');

             // Add loading animation
             $btn.addClass('loading').prop('disabled', true);

             // Simulate loading and redirect
             setTimeout(() => {
                 window.location.href = url;
             }, 500);
         });

         // Sidebar toggle for mobile
         $('.sidebar-open-nav').click(function() {
             $('.d-sidebar').toggleClass('mobile-open');
             $(this).toggleClass('open');

             if ($(this).hasClass('open')) {
                 $(this).html('<i class="ph-x">✕</i>');
             } else {
                 $(this).html('<i class="ph-list">≡</i>');
             }
         });

         // Auto-hide sidebar on mobile when clicking outside
         $(document).click(function(e) {
             if ($(window).width() <= 992) {
                 if (!$(e.target).closest('.d-sidebar, .sidebar-open-nav').length &&
                     $('.d-sidebar').hasClass('mobile-open')) {
                     $('.d-sidebar').removeClass('mobile-open');
                     $('.sidebar-open-nav').removeClass('open').html('<i class="ph-list">≡</i>');
                 }
             }
         });

         // Smooth scrolling
         $('a[href^="#"]').click(function(e) {
             const href = $(this).attr('href');
             if (href !== '#' && href.startsWith('#')) {
                 e.preventDefault();
                 $('html, body').animate({
                     scrollTop: $(href).offset().top - 100
                 }, 600);
             }
         });

         // Form submission animations
         $('form').submit(function(e) {
             const $form = $(this);
             const $submitBtn = $form.find('button[type="submit"], input[type="submit"]');

             if ($submitBtn.length) {
                 $submitBtn.addClass('loading').prop('disabled', true);
                 $submitBtn.html('<span class="spinner">Loading...</span>');
             }
         });

         // Add ripple effect to buttons
         $('.btn').click(function(e) {
             const $btn = $(this);
             const x = e.pageX - $btn.offset().left;
             const y = e.pageY - $btn.offset().top;

             $btn.append('<span class="ripple"></span>');

             const $ripple = $btn.find('.ripple').last();
             $ripple.css({
                 left: x + 'px',
                 top: y + 'px'
             });

             setTimeout(() => {
                 $ripple.remove();
             }, 600);
         });

         // Counter animation
         function animateCounter(element, target) {
             const $element = $(element);
             const current = parseInt($element.text());
             const increment = target > current ? 1 : -1;

             let timer = setInterval(function() {
                 const newValue = parseInt($element.text()) + increment;
                 $element.text(newValue);

                 if (newValue === target) {
                     clearInterval(timer);
                 }
             }, 20);
         }

         // Initialize dashboard animations
         function initializeDashboard() {
             // Animate dashboard cards with delay
             $('.single-feature-box').each(function(index) {
                 $(this).css({
                     'animation-delay': (index * 0.1) + 's',
                     'opacity': '0'
                 }).animate({
                     opacity: 1
                 }, 500);
             });

             // Animate table rows
             $('.db-job-card-table tbody tr').each(function(index) {
                 $(this).css({
                     'animation-delay': (index * 0.1) + 's',
                     'opacity': '0'
                 });
             });

             // Trigger animations
             setTimeout(() => {
                 $('.single-feature-box').addClass('animated');
                 $('.db-job-card-table tbody tr').addClass('animated');
             }, 100);
         }

         // Call initialization
         initializeDashboard();

         // Global notification functions
         window.ReadNotification = function() {
             $('.notification-list li').each(function(index) {
                 const item = $(this);
                 setTimeout(() => {
                     item.fadeOut(300, function() {
                         $(this).remove();
                         if (index === $('.notification-list li').length - 1) {
                             $('#unNotifications').fadeOut(300);
                         }
                     });
                 }, index * 100);
             });
         }

         window.readSingleNotification = function(url, id) {
             const notificationItem = $('[onclick*="' + id + '"]').closest('li');

             // Animation
             notificationItem.fadeOut(300, function() {
                 $(this).remove();
                 if ($('.notification-list li').length === 0) {
                     $('#unNotifications').fadeOut(300);
                 }
             });

             // Redirect after animation
             setTimeout(() => {
                 window.location.href = url;
             }, 300);
         }
     });
 </script>