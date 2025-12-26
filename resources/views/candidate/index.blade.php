@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    @include('candidate.layouts.sidebar')

                    <div class="col-lg-9" style="margin-top: 18px; ">
                        <div class="dashboard-right">
                            <div class="dashboard-right-header">
                                <div class="left-text">
                                    <h5>Hello, John Doe</h5>
                                    <p class="m-0 r-c">Here are your daily activities & career opportunities</p>
                                </div>
                                <span class="sidebar-open-nav">
                                    <i class="ph-list">≡</i>
                                </span>
                            </div>

                            <!-- Stats Cards -->
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <a href="{{ route('candidate.appliedjobs') }}" class="feature-link">
                                        <div class="single-feature-box">
                                            <div class="single-feature-data">
                                                <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold">100</h6>
                                                <p>Job Applied</p>
                                            </div>

                                            <div class="single-feature-icon">
                                                <svg width="38" height="38" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 6H18M4 6V16C4 16.5304 4.21071 17.0391 4.58579 17.4142C4.96086 17.7893 5.46957 18 6 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V6M7 6V4C7 3.73478 7.10536 3.48043 7.29289 3.29289C7.48043 3.10536 7.73478 3 8 3H12C12.2652 3 12.5196 3.10536 12.7071 3.29289C12.8946 3.48043 13 3.73478 13 4V6"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="single-feature-box">
                                        <div class="single-feature-data">
                                            <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold">5</h6>
                                            <p>Favorite Jobs</p>
                                        </div>
                                        <div class="single-feature-icon">
                                            <svg width="38" height="38" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 2L15.09 10.26H24L17.55 15.46L20.64 23.72L12 18.52L3.36 23.72L6.45 15.46L0 10.26H8.91L12 2Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" fill="none" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="single-feature-box">
                                        <div class="single-feature-data">
                                            <h6 class="tw-text-[#18191C] tw-text-2xl tw-font-semibold">7</h6>
                                            <p>Job Alert</p>
                                        </div>
                                        <div class="single-feature-icon">
                                            <svg width="38" height="38" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.26904 10.5002C5.26657 9.61461 5.43885 8.73727 5.77603 7.91841C6.1132 7.09956 6.60864 6.35528 7.23394 5.72822C7.85925 5.10116 8.60214 4.60365 9.42006 4.26419C10.238 3.92474 11.1148 3.75 12.0004 3.75C12.8859 3.75 13.7628 3.92474 14.5807 4.26419C15.3986 4.60365 16.1415 5.10116 16.7668 5.72822C17.3921 6.35528 17.8876 7.09956 18.2247 7.91841C18.5619 8.73727 18.7342 9.61461 18.7317 10.5002V10.5002C18.7317 13.8579 19.4342 15.8063 20.0529 16.8712C20.1196 16.985 20.1551 17.1144 20.1558 17.2462C20.1565 17.3781 20.1224 17.5078 20.0569 17.6223C19.9915 17.7368 19.8971 17.832 19.7831 17.8984C19.6691 17.9647 19.5397 17.9998 19.4078 18.0002H4.59222C4.46034 17.9998 4.33087 17.9647 4.21689 17.8984C4.1029 17.832 4.00844 17.7368 3.94301 17.6223C3.87759 17.5077 3.84352 17.378 3.84425 17.2461C3.84498 17.1142 3.88048 16.9849 3.94716 16.8711C4.56622 15.8061 5.26904 13.8577 5.26904 10.5002H5.26904Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M9 18V18.75C9 19.5456 9.31607 20.3087 9.87868 20.8713C10.4413 21.4339 11.2044 21.75 12 21.75C12.7956 21.75 13.5587 21.4339 14.1213 20.8713C14.6839 20.3087 15 19.5456 15 18.75V18"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recently Applied Section -->
                            <div class="recently-applied-wrap d-flex justify-content-between align-items-center rt-mb-15">
                                <h3 class="f-size-16 lh-1 m-0">Recently Applied</h3>
                                <a class="view-all text-gray-500 f-size-16 d-flex align-items-center hover:text-primary-500"
                                    href="https://jobpilot.lomeyolabs.com/candidate/applied-jobs">
                                    View All
                                    <i class="ph-arrow-right f-size-20 rt-ml-8">→</i>
                                </a>
                            </div>

                            <!-- Jobs Table -->
                            <div class="db-job-card-table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Job</th>
                                            <th>Date Applied</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="rt-single-icon-box tw-gap-5">
                                                    <div class="tw-w-[68px] tw-h-[68px]">
                                                        <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md"
                                                            src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-06.png"
                                                            alt="logo" draggable="false">
                                                    </div>
                                                    <div class="iconbox-content">
                                                        <div class="post-info2">
                                                            <div class="post-main-title">
                                                                <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771595_5494544167"
                                                                    class="text-gray-900 f-size-16 ft-wt-5">
                                                                    Mid level Laravel Developer
                                                                </a>
                                                                <span
                                                                    class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                    Part Time
                                                                </span>
                                                            </div>
                                                            <div class="body-font-4 text-gray-600 pt-2">
                                                                <span class="info-tools rt-mr-8">
                                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                    Yemen
                                                                </span>
                                                                <span class="info-tools">
                                                                    <svg width="14" height="16" viewBox="0 0 14 16"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375"
                                                                            stroke="#C5C9D6" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    200 - 1K Monthly
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dec 15, 2025 38:12</td>
                                            <td class="text-danger-500">
                                                <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                            stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10" />
                                                        <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Expired
                                                </div>
                                            </td>
                                            <td>
                                                <div class="db-job-btn-wrap d-flex justify-content-end">
                                                    <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771595_5494544167"
                                                        class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                        <span class="button-text">View Details</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="rt-single-icon-box tw-gap-5">
                                                    <div class="tw-w-[68px] tw-h-[68px]">
                                                        <img class="tw-w-[60px] tw-h-[60px] tw-rounded-md"
                                                            src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-07.png"
                                                            alt="logo" draggable="false">
                                                    </div>
                                                    <div class="iconbox-content">
                                                        <div class="post-info2">
                                                            <div class="post-main-title">
                                                                <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771594_8560104575"
                                                                    class="text-gray-900 f-size-16 ft-wt-5">
                                                                    Mid level Laravel Developer
                                                                </a>
                                                                <span
                                                                    class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                    Part Time
                                                                </span>
                                                            </div>
                                                            <div class="body-font-4 text-gray-600 pt-2">
                                                                <span class="info-tools rt-mr-8">
                                                                    <svg width="18" height="18"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    Samoa
                                                                </span>
                                                                <span class="info-tools">
                                                                    <svg width="14" height="16"
                                                                        viewBox="0 0 14 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375"
                                                                            stroke="#C5C9D6" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    Competitive
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dec 15, 2025 38:12</td>
                                            <td class="text-danger-500">
                                                <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                            stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10" />
                                                        <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Expired
                                                </div>
                                            </td>
                                            <td>
                                                <div class="db-job-btn-wrap d-flex justify-content-end">
                                                    <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771594_8560104575"
                                                        class="btn bg-gray-50 text-primary-500 rt-mr-10 ">
                                                        <span class="button-text">View Details</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="rt-single-icon-box tw-gap-5">
                                                    <div class="tw-w-[68px] tw-h-[68px]">
                                                        <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md"
                                                            src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-02.jpg"
                                                            alt="logo" draggable="false">
                                                    </div>
                                                    <div class="iconbox-content">
                                                        <div class="post-info2">
                                                            <div class="post-main-title">
                                                                <a href="https://jobpilot.lomeyolabs.com/job/mern-stack-developer_1765771594_4728221878"
                                                                    class="text-gray-900 f-size-16 ft-wt-5">
                                                                    MERN Stack Developer
                                                                </a>
                                                                <span
                                                                    class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                    Freelance
                                                                </span>
                                                            </div>
                                                            <div class="body-font-4 text-gray-600 pt-2">
                                                                <span class="info-tools rt-mr-8">
                                                                    <svg width="18" height="18"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    Samoa
                                                                </span>
                                                                <span class="info-tools">
                                                                    <svg width="14" height="16"
                                                                        viewBox="0 0 14 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375"
                                                                            stroke="#C5C9D6" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    500 - 2K Project Basis
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dec 15, 2025 38:12</td>
                                            <td class="text-danger-500">
                                                <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                            stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10" />
                                                        <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Expired
                                                </div>
                                            </td>
                                            <td>
                                                <div class="db-job-btn-wrap d-flex justify-content-end">
                                                    <a href="https://jobpilot.lomeyolabs.com/job/mern-stack-developer_1765771594_4728221878"
                                                        class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                        <span class="button-text">View Details</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="rt-single-icon-box tw-gap-5">
                                                    <div class="tw-w-[68px] tw-h-[68px]">
                                                        <img class="tw-w-[68px] tw-h-[68px] tw-rounded-md"
                                                            src="https://jobpilot.lomeyolabs.com/dummy-data/images/companies/company-logo-06.png"
                                                            alt="logo" draggable="false">
                                                    </div>
                                                    <div class="iconbox-content">
                                                        <div class="post-info2">
                                                            <div class="post-main-title">
                                                                <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771592_8348806881"
                                                                    class="text-gray-900 f-size-16 ft-wt-5">
                                                                    Mid level Laravel Developer
                                                                </a>
                                                                <span
                                                                    class="badge rounded-pill bg-primary-50 text-primary-500">
                                                                    Contractual
                                                                </span>
                                                            </div>
                                                            <div class="body-font-4 text-gray-600 pt-2">
                                                                <span class="info-tools rt-mr-8">
                                                                    <svg width="18" height="18"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.75 7.5C15.75 12.75 9 17.25 9 17.25C9 17.25 2.25 12.75 2.25 7.5C2.25 5.70979 2.96116 3.9929 4.22703 2.72703C5.4929 1.46116 7.20979 0.75 9 0.75C10.7902 0.75 12.5071 1.46116 13.773 2.72703C15.0388 3.9929 15.75 5.70979 15.75 7.5Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M9 9.75C10.2426 9.75 11.25 8.74264 11.25 7.5C11.25 6.25736 10.2426 5.25 9 5.25C7.75736 5.25 6.75 6.25736 6.75 7.5C6.75 8.74264 7.75736 9.75 9 9.75Z"
                                                                            stroke="#939AAD" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    Saint Vincent and the Grenadines
                                                                </span>
                                                                <span class="info-tools">
                                                                    <svg width="14" height="16"
                                                                        viewBox="0 0 14 16" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M11.8125 4.5625C11.8125 4.11108 11.7236 3.66408 11.5508 3.24703C11.3781 2.82997 11.1249 2.45102 10.8057 2.13182C10.4865 1.81262 10.1075 1.55941 9.69047 1.38666C9.27342 1.21391 8.82642 1.125 8.375 1.125H5.28125C4.36957 1.125 3.49523 1.48716 2.85057 2.13182C2.20591 2.77648 1.84375 3.65082 1.84375 4.5625C1.84375 5.47418 2.20591 6.34852 2.85057 6.99318C3.49523 7.63784 4.36957 8 5.28125 8H9.0625C9.97418 8 10.8485 8.36216 11.4932 9.00682C12.1378 9.65148 12.5 10.5258 12.5 11.4375C12.5 12.3492 12.1378 13.2235 11.4932 13.8682C10.8485 14.5128 9.97418 14.875 9.0625 14.875H4.9375C4.02582 14.875 3.15148 14.5128 2.50682 13.8682C1.86216 13.2235 1.5 12.3492 1.5 11.4375"
                                                                            stroke="#C5C9D6" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    200 - 1K Monthly
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dec 15, 2025 38:12</td>
                                            <td class="text-danger-500">
                                                <div class="tw-flex tw-gap-1.5 tw-items-center">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                            stroke="#E05151" stroke-width="1.5" stroke-miterlimit="10" />
                                                        <path d="M12.5 7.5L7.5 12.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M12.5 12.5L7.5 7.5" stroke="#E05151" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    Expired
                                                </div>
                                            </td>
                                            <td>
                                                <div class="db-job-btn-wrap d-flex justify-content-end">
                                                    <a href="https://jobpilot.lomeyolabs.com/job/mid-level-laravel-developer_1765771592_8348806881"
                                                        class="btn bg-gray-50 text-primary-500 rt-mr-8">
                                                        <span class="button-text">View Details</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
