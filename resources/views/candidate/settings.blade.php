@extends('candidate.layouts.master')
@section('content')
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/png" href="https://jobpilot.lomeyolabs.com/frontend/assets/images/logo/fav.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="preload"
        as="style">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/frontend/assets/css/bootstrap-datepicker.min.css">
    <style>
        #addExperienceModal .modal-dialog,
        #editExperienceModal .modal-dialog {
            z-index: 999999 !important;
            max-width: 950px !important;
            padding: 20px !important;
        }
    </style>

    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/frontend/assets/css/bootstrap-datepicker.min.css">
    <style>
        #addEducationModal .modal-dialog,
        #editEducationModal .modal-dialog {
            z-index: 999999 !important;
            max-width: 950px !important;
            padding: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/frontend/assets/css/bootstrap-datepicker.min.css">
    <!-- >=>Leaflet Map<=< -->
    <link href="https://jobpilot.lomeyolabs.com/backend/css/leaflet.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/frontend/plugins/leaflet/autocomplete.min.css">
    <style>
        .mymap {
            width: 100%;
            min-height: 300px;
            /* border-radius: 12px; */
        }

        .p-half {
            padding: 1px;
        }

        .mapClass {
            border: 1px solid transparent;
            margin-top: 15px;
            border-radius: 4px 0 0 4px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 35px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #searchInput {
            font-family: 'Roboto';
            background-color: #fff;
            font-size: 16px;
            text-overflow: ellipsis;
            margin-left: 16px;
            font-weight: 400;
            padding: 0 11px 0 13px;
        }

        #searchInput:focus {
            border-color: #4d90fe;
        }

        #searchInput {
            width: 100%;
        }

        @media (max-width: 991px) {
            .jobsearchBox .fromGroup.banner-select {
                width: auto !important;
            }

            #searchInput {
                padding-left: 36px !important;
                margin: 0px !important;
            }
        }
    </style>

    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }

        .w-100-percent {
            width: 100% !important;
        }

        #jobrole #basic-addon1 {
            width: 50px !important;
            margin-left: 28px !important;
        }

        .border-cutom {
            border-radius: 5px 0 0 5px !important;
        }

        .input-group-text-custom {
            max-height: 48px;
            padding: 12px;
            background-color: #e9ecef;
            border-radius: 0 5px 5px 0;
        }

        .has-badge-cutom {
            top: 34% !important;
        }
    </style>


    <style>
        .mymap {
            border-radius: 12px;
            z-index: 999;
        }
    </style>
    <link rel="preload" as="style" href="https://jobpilot.lomeyolabs.com/build/assets/app.d36a4fa8.css" />
    <link rel="preload" as="style" href="https://jobpilot.lomeyolabs.com/build/assets/app.0e75c4b0.css" />
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/build/assets/app.d36a4fa8.css"
        data-navigate-track="reload" />
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/build/assets/app.0e75c4b0.css"
        data-navigate-track="reload" />
    <!--only for our live site -->
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/frontend/assets/css/free-guide.css">
    <style>
        :root {
            --primary-500: #0A65CC !important;
            --primary-600: #0851a4 !important;
            --primary-200: #b6d1f0 !important;
            --primary-100: #cee1f5 !important;
            --primary-50: #eef5fc !important;
            --gray-20: #fbfcfe !important;
        }
    </style>
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    @include('candidate.layouts.sidebar')
                    <div class="col-lg-9" style="margin-top: 36px;">
                        <div class="dashboard-right">
                            <div class="dashboard-right-header rt-mb-32">
                                <div class="left-text m-0">
                                    <h3 class="f-size-18 lh-1 m-0">Settings</h3>
                                </div>
                                <span class="sidebar-open-nav">
                                    <i class="ph-list"></i>
                                </span>
                            </div>
                            <div class="cadidate-dashboard-tabs candidate">
                                <div class="tw-overflow-x-auto">
                                    <ul class="nav nav-pills tw-gap-x-8" id="pills-tab" role="tablist">

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-personal" type="button" role="tab"
                                                aria-controls="pills-personal" aria-selected="true">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M2.9043 20.2491C3.82638 18.6531 5.15225 17.3278 6.74869 16.4064C8.34513 15.485 10.1559 15 11.9992 15C13.8424 15 15.6532 15.4851 17.2497 16.4065C18.8461 17.3279 20.1719 18.6533 21.094 20.2493"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Basic
                                            </button>
                                        </li>


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M12 15C14.0711 15 15.75 13.3211 15.75 11.25C15.75 9.17893 14.0711 7.5 12 7.5C9.92893 7.5 8.25 9.17893 8.25 11.25C8.25 13.3211 9.92893 15 12 15Z"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path
                                                        d="M5.98047 18.6913C6.54542 17.5806 7.40671 16.6478 8.469 15.9963C9.53128 15.3448 10.7531 15 11.9993 15C13.2455 15 14.4673 15.3448 15.5296 15.9963C16.5919 16.6478 17.4532 17.5806 18.0181 18.6913"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Profile
                                            </button>
                                        </li>


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="pills-experience-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-experience" type="button" role="tab"
                                                aria-controls="pills-experience" aria-selected="false">
                                                <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1754_47894)">
                                                        <path
                                                            d="M27.001 9H5.00098C4.44869 9 4.00098 9.44772 4.00098 10V26C4.00098 26.5523 4.44869 27 5.00098 27H27.001C27.5533 27 28.001 26.5523 28.001 26V10C28.001 9.44772 27.5533 9 27.001 9Z"
                                                            stroke="#0A65CC" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M21 9V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H13C12.4696 5 11.9609 5.21071 11.5858 5.58579C11.2107 5.96086 11 6.46957 11 7V9"
                                                            stroke="#0A65CC" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M28.0012 15.7891C24.354 17.8991 20.2137 19.007 16.0002 19.0004C11.7873 19.007 7.64768 17.8995 4.00098 15.7901"
                                                            stroke="#0A65CC" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M14.5 15H17.5" stroke="#0A65CC" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1754_47894">
                                                            <rect width="32" height="32" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Experience &amp; Education
                                            </button>
                                        </li>


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="pills-social-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-social" type="button" role="tab"
                                                aria-controls="pills-social" aria-selected="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path d="M3 12H21" stroke="#767F8C" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M12 20.758C14.0711 20.758 15.75 16.8367 15.75 11.9996C15.75 7.16248 14.0711 3.24121 12 3.24121C9.92893 3.24121 8.25 7.16248 8.25 11.9996C8.25 16.8367 9.92893 20.758 12 20.758Z"
                                                        stroke="#767F8C" stroke-width="1.5" stroke-miterlimit="10" />
                                                </svg>
                                                Social Media
                                            </button>
                                        </li>


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link   " id="pills-setting-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-setting" type="button" role="tab"
                                                aria-controls="pills-setting" aria-selected="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.90236 8.58739C5.07111 8.23114 5.26799 7.89364 5.49299 7.56551L5.45549 5.12801C5.45549 4.90301 5.54924 4.68739 5.72736 4.53739C6.59924 3.80614 7.59299 3.21551 8.68986 2.82176C8.90549 2.74676 9.13986 2.76551 9.32736 2.88739L11.418 4.14364C11.8117 4.11551 12.2055 4.11551 12.5992 4.14364L14.6899 2.88739C14.8867 2.77489 15.1211 2.74676 15.3367 2.82176C16.4055 3.20614 17.4086 3.77801 18.2992 4.52801C18.468 4.66864 18.5711 4.89364 18.5617 5.11864L18.5242 7.55614C18.7492 7.88426 18.9461 8.22176 19.1149 8.57801L21.243 9.75926C21.4399 9.87176 21.5805 10.0593 21.618 10.2843C21.8149 11.3999 21.8242 12.5624 21.618 13.6968C21.5805 13.9218 21.4399 14.1093 21.243 14.2218L19.1149 15.403C18.9461 15.7593 18.7492 16.0968 18.5242 16.4249L18.5617 18.8624C18.5617 19.0874 18.468 19.303 18.2899 19.453C17.418 20.1843 16.4242 20.7749 15.3274 21.1686C15.1117 21.2436 14.8774 21.2249 14.6899 21.103L12.5992 19.8468C12.2055 19.8749 11.8117 19.8749 11.418 19.8468L9.32736 21.103C9.13049 21.2155 8.89611 21.2436 8.68049 21.1686C7.61174 20.7843 6.60861 20.2124 5.71799 19.4624C5.54924 19.3218 5.44611 19.0968 5.45549 18.8718L5.49299 16.4343C5.26799 16.1061 5.07111 15.7686 4.90236 15.4124L2.77424 14.2311C2.57736 14.1186 2.43674 13.9311 2.39924 13.7061C2.20236 12.5905 2.19299 11.428 2.39924 10.2936C2.43674 10.0686 2.57736 9.88114 2.77424 9.76864L4.90236 8.58739Z"
                                                        stroke="var(--primary-500)" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5Z"
                                                        stroke="var(--primary-500)" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Account Setting
                                            </button>
                                        </li>
                                        <span class="glider"></span>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">

                                    <div class="tab-pane fade show active" id="pills-personal" role="tabpanel"
                                        aria-labelledby="pills-personal-tab">
                                        <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                            method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="_token"
                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                            <input type="hidden" name="_method" value="put"> <input type="hidden"
                                                name="type" value="basic">
                                            <div class="dashboard-account-setting-item tw-py-0">
                                                <h6> Basic Information</h6>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label
                                                            class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Profile Picture

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>

                                                        <div id="photo-uploadMode" class="d-none">
                                                            <div class="profile-image-upload-wrap">
                                                                <input name="image" class="profile-file-upload-input"
                                                                    type='file' onchange="readURL(this);"
                                                                    accept="image/*" />
                                                                <div class="drag-text">
                                                                    <svg width="48" height="49"
                                                                        viewBox="0 0 48 49" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA"
                                                                            stroke-width="3" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M24 24.5V42.5" stroke="#ADB2BA"
                                                                            stroke-width="3" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                                            stroke="#ADB2BA" stroke-width="3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA"
                                                                            stroke-width="3" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                    <h3>Browse photo or drop here</h3>
                                                                    <p>A photo larger than 1520x312 pixels work best. Max
                                                                        photo size 5 MB.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="profile-file-upload-content">
                                                                <img class="profile-file-upload-image" src="#"
                                                                    alt="your image" />
                                                                <div class="image-title-wrap">
                                                                    <button type="button"
                                                                        class="profile-remove-image"><svg width="20"
                                                                            height="20" viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M16.875 4.375L3.125 4.37501"
                                                                                stroke="#E05151" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8.125 8.125V13.125" stroke="#E05151"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M11.875 8.125V13.125" stroke="#E05151"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                                                                                stroke="#E05151" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                                                                                stroke="#E05151" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="photo-oldMode" class="">
                                                            <div class="profile-file-upload-content2">
                                                                <img class="profile-file-upload-image"
                                                                    src="https://jobpilot.lomeyolabs.com/dummy-data/images/candidates/candidate-04.jpg"
                                                                    alt="your image" />
                                                                <div onclick="UploadMode('photo')"
                                                                    class="image-title-wrap">
                                                                    <button type="button"
                                                                        class="profile-remove-image"><svg width="20"
                                                                            height="20" viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M16.875 4.375L3.125 4.37501"
                                                                                stroke="#E05151" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M8.125 8.125V13.125" stroke="#E05151"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M11.875 8.125V13.125" stroke="#E05151"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                                                                                stroke="#E05151" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                                                                                stroke="#E05151" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <p class="tw-text-gray-500 tw-text-xs tw-text-left mt-2">Image
                                                            Size: 164x164</p>
                                                    </div>
                                                    <div class="row col-lg-8">
                                                        <div class="col-lg-6 mb-3">
                                                            <label
                                                                class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                                for="for">
                                                                Full Name

                                                                <span class="form-label-required text-danger">*</span>


                                                            </label>
                                                            <div class="fromGroup">
                                                                <div class="form-control-icon">
                                                                    <input type="text" name="name" id="id"
                                                                        class="form-control  " value="John Doe"
                                                                        placeholder="Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label
                                                                class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                                for="for">
                                                                Professional Title/Tagline



                                                            </label>
                                                            <div class="fromGroup">
                                                                <div class="form-control-icon">
                                                                    <input type="text" name="title" id="id"
                                                                        class="form-control  "
                                                                        value="This is candidate Title !"
                                                                        placeholder="Title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label
                                                                class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                                for="for">
                                                                Experience Level

                                                                <span class="form-label-required text-danger">*</span>


                                                            </label>
                                                            <select name="experience" class="select2-taggable w-100-p">
                                                                <option value="1">Fresher
                                                                </option>
                                                                <option value="2">1 Year
                                                                </option>
                                                                <option value="3">2 Years
                                                                </option>
                                                                <option value="4">3+ Years
                                                                </option>
                                                                <option selected value="5">5+ Years
                                                                </option>
                                                                <option value="6">8+ Years
                                                                </option>
                                                                <option value="7">10+ Years
                                                                </option>
                                                                <option value="8">15+ Years
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label
                                                                class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                                for="for">
                                                                Education Level

                                                                <span class="form-label-required text-danger">*</span>


                                                            </label>
                                                            <select name="education" class="select2-taggable w-100-p">
                                                                <option value="1">High School
                                                                </option>
                                                                <option value="2">Intermediate
                                                                </option>
                                                                <option value="3">Bachelor Degree
                                                                </option>
                                                                <option selected value="4">Master Degree
                                                                </option>
                                                                <option value="5">Graduated
                                                                </option>
                                                                <option value="6">PhD
                                                                </option>
                                                                <option value="7">Any
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <label
                                                                class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                                for="for">
                                                                Personal Website



                                                            </label>
                                                            <div class="fromGroup has-icon2">
                                                                <div class="form-control-icon">
                                                                    <input type="url" name="website" id="id"
                                                                        class="form-control  " value="https://johndoe.com"
                                                                        placeholder="Website">
                                                                    <div class="icon-badge-2">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M8.81738 15.1813L15.1813 8.81738"
                                                                                stroke="var(--primary-500)"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M13.5909 16.7731L10.9392 19.4248C10.0953 20.2685 8.95077 20.7424 7.75743 20.7423C6.56409 20.7422 5.41965 20.2681 4.57583 19.4242C3.73201 18.5804 3.25791 17.436 3.25781 16.2426C3.25771 15.0493 3.73161 13.9048 4.57529 13.0608L7.22694 10.4092"
                                                                                stroke="var(--primary-500)"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M16.7731 13.5899L19.4248 10.9383C20.2685 10.0943 20.7424 8.94979 20.7423 7.75645C20.7422 6.56311 20.2681 5.41867 19.4243 4.57486C18.5804 3.73104 17.436 3.25694 16.2427 3.25684C15.0493 3.25673 13.9048 3.73064 13.0608 4.57431L10.4092 7.22596"
                                                                                stroke="var(--primary-500)"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                                for="for">
                                                                Date Of Birth

                                                                <span class="form-label-required text-danger">*</span>


                                                            </label>
                                                            <div class="fromGroup">
                                                                <div
                                                                    class="d-flex align-items-center form-control-icon date datepicker">
                                                                    <input type="text" name="birth_date"
                                                                        value="15-12-2025" id="date"
                                                                        placeholder="dd/mm/yyyy"
                                                                        class="form-control border-cutom " />
                                                                    <span
                                                                        class="input-group-addon input-group-text-custom">
                                                                        <svg width="22" height="22"
                                                                            viewBox="0 0 22 22" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.875 3.4375H4.125C3.7453 3.4375 3.4375 3.7453 3.4375 4.125V17.875C3.4375 18.2547 3.7453 18.5625 4.125 18.5625H17.875C18.2547 18.5625 18.5625 18.2547 18.5625 17.875V4.125C18.5625 3.7453 18.2547 3.4375 17.875 3.4375Z"
                                                                                stroke="#18191C" stroke-width="1.3"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M15.125 2.0625V4.8125"
                                                                                stroke="#18191C" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M6.875 2.0625V4.8125" stroke="#18191C"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M3.4375 7.5625H18.5625"
                                                                                stroke="#18191C" stroke-width="1.5"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mt-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Save Changes
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                        <div>
                                            <h6 class="resume">Your CV/Resume</h6>
                                            <div class="resume-lists">
                                                <div class="resume-item">
                                                    <div class="resume-icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M24.999 28H6.99805C6.73283 28 6.47848 27.8946 6.29094 27.7071C6.1034 27.5196 5.99805 27.2652 5.99805 27V5C5.99805 4.73478 6.1034 4.48043 6.29094 4.29289C6.47848 4.10536 6.73283 4 6.99805 4H18.999L25.999 11V27C25.999 27.1313 25.9732 27.2614 25.9229 27.3827C25.8727 27.504 25.799 27.6143 25.7061 27.7071C25.6133 27.8 25.503 27.8736 25.3817 27.9239C25.2604 27.9741 25.1303 28 24.999 28Z"
                                                                stroke="#0A65CC" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M19 4V11H26.001" stroke="#0A65CC" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M12 17H20" stroke="#0A65CC" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M12 21H20" stroke="#0A65CC" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="resume-title">RESUME</h4>
                                                        <h6 class="resume-size">0.0784 MB</h6>
                                                    </div>
                                                    <div class="dot-icon ms-auto">
                                                        <button type="button" class="btn p-0" id="dropdownMenuButton5"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="5.5" cy="12" r="1.5"
                                                                    fill="#767F8C" />
                                                                <circle cx="12" cy="12" r="1.5"
                                                                    fill="#767F8C" />
                                                                <circle cx="18.5" cy="12" r="1.5"
                                                                    fill="#767F8C" />
                                                            </svg>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                            aria-labelledby="dropdownMenuButton5">
                                                            <li>
                                                                <form id="cv_show_22"
                                                                    action="https://jobpilot.lomeyolabs.com/candidate/cv/show"
                                                                    method="POST">
                                                                    <input type="hidden" name="_token"
                                                                        value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                        autocomplete="off"> <input type="hidden"
                                                                        name="cv" value="22" class="d-none">
                                                                    <button type="submit"
                                                                        class="dropdown-item cv-show-submit-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="20" height="20"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3">
                                                                            </circle>
                                                                        </svg>
                                                                        View
                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <button onclick="editResume(22,'RESUME', '0.0784 MB')"
                                                                    type="button" class="dropdown-item">
                                                                    <svg width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                            stroke="#0A65CC" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M10.625 5L15 9.375" stroke="#0A65CC"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M16.8753 16.8743H7.50027L3.16504 12.5391"
                                                                            stroke="#0A65CC" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    Edit
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <form
                                                                    action="https://jobpilot.lomeyolabs.com/candidate/resume/delete/22"
                                                                    method="POST" id="resumeForm">
                                                                    <input type="hidden" name="_token"
                                                                        value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                        autocomplete="off"> <input type="hidden"
                                                                        name="_method" value="DELETE"> <button
                                                                        type="button" onclick="resumeDelete()"
                                                                        class="dropdown-item">
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                stroke="#FF4F4F" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M14 11V17" stroke="#FF4F4F"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path d="M10 11V17" stroke="#FF4F4F"
                                                                                stroke-width="1.5" stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="resume-item add-resume" data-bs-toggle="modal"
                                                    data-bs-target="#resumeModal">
                                                    <div class="resume-icon">
                                                        <svg width="32" height="32" viewBox="0 0 32 32"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.9961 28C22.6235 28 27.9961 22.6274 27.9961 16C27.9961 9.37258 22.6235 4 15.9961 4C9.36868 4 3.99609 9.37258 3.99609 16C3.99609 22.6274 9.36868 28 15.9961 28Z"
                                                                stroke="#0A65CC" stroke-width="2"
                                                                stroke-miterlimit="10" />
                                                            <path d="M11.0039 16H21.0039" stroke="#0A65CC"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M15.9961 11V21" stroke="#0A65CC" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="resume-title">Add a CV/Resume</h4>
                                                        <h6 class="resume-size">Choose a new file - pdf</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade " id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                            method="POST">
                                            <input type="hidden" name="_token"
                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                            <input type="hidden" name="_method" value="put">
                                            <div class="dashboard-account-setting-item pb-0">
                                                <input type="hidden" name="type" value="profile">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Gender

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>
                                                        <select class="rt-selectactive w-100-p " name="gender">
                                                            <option selected value="male">
                                                                Male
                                                            </option>
                                                            <option value="female">
                                                                Female
                                                            </option>
                                                            <option value="other">
                                                                Other
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Marital Status



                                                        </label>
                                                        <select name="marital_status" class="rt-selectactive w-100-p">
                                                            <option value="">Select One</option>
                                                            <option selected value="married">Married</option>
                                                            <option value="single">Single</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Profession

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>
                                                        <select name="profession" class="select2-taggable w-100-p">
                                                            <option value="8">Accountant
                                                            </option>
                                                            <option value="10">Actor
                                                            </option>
                                                            <option value="15">Artist
                                                            </option>
                                                            <option value="18">Cashier
                                                            </option>
                                                            <option value="3">Chef
                                                            </option>
                                                            <option value="9">Dental Hygienist
                                                            </option>
                                                            <option value="7">Dentist
                                                            </option>
                                                            <option value="5">Designer
                                                            </option>
                                                            <option value="25">Driver
                                                            </option>
                                                            <option value="11">Electrician
                                                            </option>
                                                            <option value="2">Engineer
                                                            </option>
                                                            <option value="23">Farmer
                                                            </option>
                                                            <option value="26">Fishermen
                                                            </option>
                                                            <option value="22">Gardener
                                                            </option>
                                                            <option value="17">Journalist
                                                            </option>
                                                            <option value="6">Labourer
                                                            </option>
                                                            <option value="4">Lawyer
                                                            </option>
                                                            <option value="24">Librarian
                                                            </option>
                                                            <option value="13">Pharmacist
                                                            </option>
                                                            <option value="1">Physician
                                                            </option>
                                                            <option value="27">Police Officer
                                                            </option>
                                                            <option value="20">Scientist
                                                            </option>
                                                            <option value="19">Secretary
                                                            </option>
                                                            <option selected value="12">Software Developer
                                                            </option>
                                                            <option value="21">Soldier
                                                            </option>
                                                            <option value="28">Tailor
                                                            </option>
                                                            <option value="16">Teacher
                                                            </option>
                                                            <option value="14">Technician
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Your availability

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>
                                                        <select id="available_status" name="status"
                                                            class="rt-selectactive form-control w-100-p">
                                                            <option value="">Select One</option>
                                                            <option selected value="available">Available</option>
                                                            <option value="not_available">Not Available</option>
                                                            <option value="available_in">Available In</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 d-none" id="available_in_status">
                                                        <div>
                                                            <h4 class="f-size-14 ft-wt-5 rt-mb-20 lh-1">
                                                                Available In</h4>
                                                            <div
                                                                class="d-flex align-items-center form-control-icon date datepicker">
                                                                <input type="text" id="available_id_date"
                                                                    name="available_in" value="01-01-1970"
                                                                    placeholder="dd/mm/yyyy"
                                                                    class="form-control border-cutom ">
                                                                <span class="input-group-addon input-group-text-custom">
                                                                    <svg width="22" height="22"
                                                                        viewBox="0 0 22 22" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.875 3.4375H4.125C3.7453 3.4375 3.4375 3.7453 3.4375 4.125V17.875C3.4375 18.2547 3.7453 18.5625 4.125 18.5625H17.875C18.2547 18.5625 18.5625 18.2547 18.5625 17.875V4.125C18.5625 3.7453 18.2547 3.4375 17.875 3.4375Z"
                                                                            stroke="#18191C" stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15.125 2.0625V4.8125" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M6.875 2.0625V4.8125" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M3.4375 7.5625H18.5625" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linejoin="round" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Skills you have



                                                        </label>
                                                        <select name="skills[]" class="select2-taggable w-100-p" multiple>
                                                            <option value="103">.NET Framework
                                                            </option>
                                                            <option value="176">10-Key Typing
                                                            </option>
                                                            <option value="172">401(k) Retirement Savings Plans
                                                            </option>
                                                            <option value="251">A++
                                                            </option>
                                                            <option value="213">ASP.NET
                                                            </option>
                                                            <option value="290">AWS
                                                            </option>
                                                            <option value="204">Account Management
                                                            </option>
                                                            <option value="173">Accounting
                                                            </option>
                                                            <option value="32">Adobe Creative Suite
                                                            </option>
                                                            <option value="137">Adobe Illustrator
                                                            </option>
                                                            <option value="140">Adobe InDesign
                                                            </option>
                                                            <option value="76">Adobe Photoshop
                                                            </option>
                                                            <option value="240">Advanced Product Quality Planning
                                                                (APQP)
                                                            </option>
                                                            <option value="254">Advertising
                                                            </option>
                                                            <option value="257">Agile Methodologies
                                                            </option>
                                                            <option value="269">Alpine JS
                                                            </option>
                                                            <option value="238">Analytical Skills
                                                            </option>
                                                            <option value="285">Angular JS
                                                            </option>
                                                            <option value="258">Auditing
                                                            </option>
                                                            <option value="252">AutoCAD
                                                            </option>
                                                            <option value="262">Banking
                                                            </option>
                                                            <option value="264">Blogging
                                                            </option>
                                                            <option value="287">Bootstrap
                                                            </option>
                                                            <option value="266">Brand Development
                                                            </option>
                                                            <option value="268">Brand Management
                                                            </option>
                                                            <option value="261">Budgeting
                                                            </option>
                                                            <option value="253">Business Analysis
                                                            </option>
                                                            <option value="33">Business Development
                                                            </option>
                                                            <option value="139">Business Intelligence (BI)
                                                            </option>
                                                            <option value="81">Business Planning
                                                            </option>
                                                            <option value="265">Business Process
                                                            </option>
                                                            <option value="82">Business Process Improvement
                                                            </option>
                                                            <option value="259">Business Strategy
                                                            </option>
                                                            <option value="263">Business-to-Business (B2B)
                                                            </option>
                                                            <option value="16">C (Programming Language)
                                                            </option>
                                                            <option value="14">C#
                                                            </option>
                                                            <option value="13">C++
                                                            </option>
                                                            <option value="25">Cascading Style Sheets (CSS)
                                                            </option>
                                                            <option value="17">Change Management
                                                            </option>
                                                            <option value="250">Clinical Research
                                                            </option>
                                                            <option value="289">Cloud Computing
                                                            </option>
                                                            <option value="19">Coaching
                                                            </option>
                                                            <option value="278">Codignator
                                                            </option>
                                                            <option value="18">Communication
                                                            </option>
                                                            <option value="26">Community Outreach
                                                            </option>
                                                            <option value="130">Computer Hardware
                                                            </option>
                                                            <option value="22">Construction
                                                            </option>
                                                            <option value="31">Construction Management
                                                            </option>
                                                            <option value="24">Continuous Improvement
                                                            </option>
                                                            <option value="29">Contract Management
                                                            </option>
                                                            <option value="21">Contract Negotiation
                                                            </option>
                                                            <option value="157">Core Java
                                                            </option>
                                                            <option value="99">Corporate Finance
                                                            </option>
                                                            <option value="114">Corporate Governance
                                                            </option>
                                                            <option value="195">Corporate Law
                                                            </option>
                                                            <option value="161">Criminal Justice
                                                            </option>
                                                            <option value="218">Critical Care Nursing
                                                            </option>
                                                            <option value="28">Cross-functional Team Leadership
                                                            </option>
                                                            <option value="47">Curriculum Development
                                                            </option>
                                                            <option value="20">Customer Relationship Management (CRM)
                                                            </option>
                                                            <option value="23">Customer Satisfaction
                                                            </option>
                                                            <option value="15">Customer Service
                                                            </option>
                                                            <option value="35">Data Analysis
                                                            </option>
                                                            <option value="42">Data Entry
                                                            </option>
                                                            <option value="45">Databases
                                                            </option>
                                                            <option value="39">Digital Marketing
                                                            </option>
                                                            <option value="51">Digital Media
                                                            </option>
                                                            <option value="276">Drupal
                                                            </option>
                                                            <option value="59">E-Commerce
                                                            </option>
                                                            <option value="62">E-Learning
                                                            </option>
                                                            <option value="58">Editing
                                                            </option>
                                                            <option value="193">Educational Leadership
                                                            </option>
                                                            <option value="70">Email Marketing
                                                            </option>
                                                            <option value="63">Employee Relations
                                                            </option>
                                                            <option value="69">Employee Training
                                                            </option>
                                                            <option value="67">Energy
                                                            </option>
                                                            <option value="56">Engineering
                                                            </option>
                                                            <option value="54">English
                                                            </option>
                                                            <option value="71">Enterprise Resource Planning (ERP)
                                                            </option>
                                                            <option value="60">Entrepreneurship
                                                            </option>
                                                            <option value="57">Event Management
                                                            </option>
                                                            <option value="55">Event Planning
                                                            </option>
                                                            <option value="89">F#
                                                            </option>
                                                            <option value="97">Facebook
                                                            </option>
                                                            <option value="101">Fashion
                                                            </option>
                                                            <option value="113">Fast-Moving Consumer Goods (FMCG)
                                                            </option>
                                                            <option value="91">Finance
                                                            </option>
                                                            <option value="95">Financial Accounting
                                                            </option>
                                                            <option value="90">Financial Analysis
                                                            </option>
                                                            <option value="100">Financial Modeling
                                                            </option>
                                                            <option value="92">Financial Reporting
                                                            </option>
                                                            <option value="102">Financial Services
                                                            </option>
                                                            <option value="279">Flask
                                                            </option>
                                                            <option value="96">Food and Beverage Operations
                                                            </option>
                                                            <option value="94">Forecasting
                                                            </option>
                                                            <option value="98">French
                                                            </option>
                                                            <option value="93">Fundraising
                                                            </option>
                                                            <option value="105">G++
                                                            </option>
                                                            <option value="109">Gas
                                                            </option>
                                                            <option value="115">General Ledgers
                                                            </option>
                                                            <option value="121">German
                                                            </option>
                                                            <option value="108">Git
                                                            </option>
                                                            <option value="120">Good Manufacturing Practice (GMP)
                                                            </option>
                                                            <option value="112">Google Analytics
                                                            </option>
                                                            <option value="106">Government
                                                            </option>
                                                            <option value="110">Grant Writing
                                                            </option>
                                                            <option value="293">GraphQL
                                                            </option>
                                                            <option value="38">Graphic Design
                                                            </option>
                                                            <option value="117">Graphics
                                                            </option>
                                                            <option value="135">HR Consulting
                                                            </option>
                                                            <option value="127">HTML5
                                                            </option>
                                                            <option value="122">Healthcare
                                                            </option>
                                                            <option value="131">Healthcare Information Technology (HIT)
                                                            </option>
                                                            <option value="125">Healthcare Management
                                                            </option>
                                                            <option value="61">Higher Education
                                                            </option>
                                                            <option value="126">Hospitality Industry
                                                            </option>
                                                            <option value="129">Hospitality Management
                                                            </option>
                                                            <option value="124">Hospitals
                                                            </option>
                                                            <option value="128">Hotel Management
                                                            </option>
                                                            <option value="123">Human Resources (HR)
                                                            </option>
                                                            <option value="138">IT Integration
                                                            </option>
                                                            <option value="148">IT Service Management
                                                            </option>
                                                            <option value="142">ITIL
                                                            </option>
                                                            <option value="272">Inertia JS
                                                            </option>
                                                            <option value="145">Information Technology
                                                            </option>
                                                            <option value="141">Insurance
                                                            </option>
                                                            <option value="146">Internal Controls
                                                            </option>
                                                            <option value="147">Interpersonal Skills
                                                            </option>
                                                            <option value="144">Interviewing
                                                            </option>
                                                            <option value="136">Inventory Management
                                                            </option>
                                                            <option value="143">Investments
                                                            </option>
                                                            <option value="152">J#
                                                            </option>
                                                            <option value="281">JEST
                                                            </option>
                                                            <option value="158">JSON
                                                            </option>
                                                            <option value="154">Jakarta EE
                                                            </option>
                                                            <option value="149">Java
                                                            </option>
                                                            <option value="150">JavaScript
                                                            </option>
                                                            <option value="160">JavaServer Pages (JSP)
                                                            </option>
                                                            <option value="163">Jenkins
                                                            </option>
                                                            <option value="155">Jira
                                                            </option>
                                                            <option value="165">Joint Ventures
                                                            </option>
                                                            <option value="166">Joomla!
                                                            </option>
                                                            <option value="164">Journal Entries (Accounting)
                                                            </option>
                                                            <option value="153">Journalism
                                                            </option>
                                                            <option value="168">K-12 Education
                                                            </option>
                                                            <option value="178">KPI Reporting
                                                            </option>
                                                            <option value="180">KYC Verification
                                                            </option>
                                                            <option value="167">Kaizen
                                                            </option>
                                                            <option value="170">Kanban
                                                            </option>
                                                            <option value="169">Key Account Development
                                                            </option>
                                                            <option value="171">Key Performance Indicators
                                                            </option>
                                                            <option value="181">Keynote
                                                            </option>
                                                            <option value="182">Keyword Research
                                                            </option>
                                                            <option value="183">Knitwear
                                                            </option>
                                                            <option value="174">Knowledge Management
                                                            </option>
                                                            <option value="179">Kubernetes
                                                            </option>
                                                            <option value="242">Language Integrated Query (LINQ)
                                                            </option>
                                                            <option value="111">Lead Generation
                                                            </option>
                                                            <option value="104">Leadership
                                                            </option>
                                                            <option value="40">Leadership Development
                                                            </option>
                                                            <option value="187">Lean Manufacturing
                                                            </option>
                                                            <option value="189">Legal Research
                                                            </option>
                                                            <option value="191">Legal Writing
                                                            </option>
                                                            <option value="186">Linux
                                                            </option>
                                                            <option value="192">Litigation
                                                            </option>
                                                            <option value="270">Livewire
                                                            </option>
                                                            <option value="196">Loans
                                                            </option>
                                                            <option value="185">Logistics Management
                                                            </option>
                                                            <option value="194">Logo Design
                                                            </option>
                                                            <option value="283">MS Sql
                                                            </option>
                                                            <option value="190">Management
                                                            </option>
                                                            <option value="30">Management Consulting
                                                            </option>
                                                            <option value="80">Manufacturing Process Improvement
                                                            </option>
                                                            <option value="247">Market Research
                                                            </option>
                                                            <option value="199">Marketing
                                                            </option>
                                                            <option value="200">Marketing Strategy
                                                            </option>
                                                            <option value="132">Mental Health
                                                            </option>
                                                            <option value="255">Mergers &amp; Acquisitions (M&amp;A)
                                                            </option>
                                                            <option value="235">Micro Focus Quality Center
                                                            </option>
                                                            <option selected value="53">Microsoft Excel
                                                            </option>
                                                            <option value="65">Microsoft Office
                                                            </option>
                                                            <option value="220">Microsoft Outlook
                                                            </option>
                                                            <option value="73">Microsoft PowerPoint
                                                            </option>
                                                            <option value="197">Microsoft Word
                                                            </option>
                                                            <option value="207">N+
                                                            </option>
                                                            <option value="208">Negotiation
                                                            </option>
                                                            <option value="212">Network Administration
                                                            </option>
                                                            <option value="219">Network Design
                                                            </option>
                                                            <option value="214">Network Security
                                                            </option>
                                                            <option value="210">Networking
                                                            </option>
                                                            <option value="34">New Business Development
                                                            </option>
                                                            <option value="215">New Media
                                                            </option>
                                                            <option value="216">Newsletters
                                                            </option>
                                                            <option value="284">Node
                                                            </option>
                                                            <option value="156">Node.js
                                                            </option>
                                                            <option value="209">Nonprofit Organizations
                                                            </option>
                                                            <option value="211">Nursing
                                                            </option>
                                                            <option value="217">Nutrition
                                                            </option>
                                                            <option value="224">Office Administration
                                                            </option>
                                                            <option value="107">Oil and Gas
                                                            </option>
                                                            <option value="223">Online Advertising
                                                            </option>
                                                            <option value="162">Online Journalism
                                                            </option>
                                                            <option value="222">Online Marketing
                                                            </option>
                                                            <option value="226">Operating Systems
                                                            </option>
                                                            <option value="206">Operations Management
                                                            </option>
                                                            <option value="282">Oracal
                                                            </option>
                                                            <option value="50">Oracle Database
                                                            </option>
                                                            <option value="225">Organization Skills
                                                            </option>
                                                            <option value="43">Organizational Development
                                                            </option>
                                                            <option value="188">P&amp;L Management
                                                            </option>
                                                            <option value="274">PEST PHP
                                                            </option>
                                                            <option value="288">PHPmyadmin
                                                            </option>
                                                            <option value="84">Photography
                                                            </option>
                                                            <option value="280">Pinia
                                                            </option>
                                                            <option value="83">Problem Solving
                                                            </option>
                                                            <option value="36">Product Development
                                                            </option>
                                                            <option value="177">Product Knowledge
                                                            </option>
                                                            <option value="87">Product Management
                                                            </option>
                                                            <option value="52">Program Development
                                                            </option>
                                                            <option value="79">Program Management
                                                            </option>
                                                            <option value="66">Project Engineering
                                                            </option>
                                                            <option value="72">Project Management
                                                            </option>
                                                            <option value="175">Project Management Body of Knowledge
                                                                (PMBOK)
                                                            </option>
                                                            <option value="77">Project Planning
                                                            </option>
                                                            <option value="133">Public Health
                                                            </option>
                                                            <option value="88">Public Policy
                                                            </option>
                                                            <option value="78">Public Relations
                                                            </option>
                                                            <option value="75">Public Speaking
                                                            </option>
                                                            <option value="86">Python (Programming Language)
                                                            </option>
                                                            <option value="237">Q#
                                                            </option>
                                                            <option value="229">Qualitative Research
                                                            </option>
                                                            <option value="227">Quality Assurance
                                                            </option>
                                                            <option value="234">Quality Auditing
                                                            </option>
                                                            <option value="231">Quality Control
                                                            </option>
                                                            <option value="228">Quality Management
                                                            </option>
                                                            <option value="232">Quality System
                                                            </option>
                                                            <option value="233">Quantitative Research
                                                            </option>
                                                            <option value="241">Quantity Surveying
                                                            </option>
                                                            <option value="230">QuickBooks
                                                            </option>
                                                            <option value="249">R (Programming Language)
                                                            </option>
                                                            <option value="243">R&amp;R
                                                            </option>
                                                            <option value="292">REST API
                                                            </option>
                                                            <option value="159">React.js
                                                            </option>
                                                            <option value="64">Real Estate
                                                            </option>
                                                            <option value="245">Recruiting
                                                            </option>
                                                            <option value="248">Requirements Analysis
                                                            </option>
                                                            <option value="119">Requirements Gathering
                                                            </option>
                                                            <option value="118">Research Skills
                                                            </option>
                                                            <option value="41">Research and Development (R&amp;D)
                                                            </option>
                                                            <option value="244">Retail
                                                            </option>
                                                            <option value="246">Risk Management
                                                            </option>
                                                            <option value="286">Ruby On Rails
                                                            </option>
                                                            <option value="85">SAP Products
                                                            </option>
                                                            <option value="239">SQL
                                                            </option>
                                                            <option value="116">Sales
                                                            </option>
                                                            <option value="201">Sales Management
                                                            </option>
                                                            <option value="221">Sales Operations
                                                            </option>
                                                            <option value="68">Search Engine Optimization (SEO)
                                                            </option>
                                                            <option value="267">Small Business
                                                            </option>
                                                            <option value="198">Social Media
                                                            </option>
                                                            <option value="205">Social Media Marketing
                                                            </option>
                                                            <option value="37">Software Development
                                                            </option>
                                                            <option value="48">Software Development Life Cycle (SDLC)
                                                            </option>
                                                            <option value="236">Software Quality Assurance
                                                            </option>
                                                            <option value="256">Software as a Service (SaaS)
                                                            </option>
                                                            <option value="49">Staff Development
                                                            </option>
                                                            <option value="74">Strategic Planning
                                                            </option>
                                                            <option value="27">Supply Chain Management
                                                            </option>
                                                            <option value="277">Symfony
                                                            </option>
                                                            <option value="273">TDD
                                                            </option>
                                                            <option value="271">Tailwind css
                                                            </option>
                                                            <option value="260">Team Building
                                                            </option>
                                                            <option value="184">Team Leadership
                                                            </option>
                                                            <option value="203">Team Management
                                                            </option>
                                                            <option value="202">Time Management
                                                            </option>
                                                            <option value="134">U.S. Health Insurance Portability and
                                                                Accountability Act (HIPAA)
                                                            </option>
                                                            <option value="291">Valet
                                                            </option>
                                                            <option selected value="46">Web Design
                                                            </option>
                                                            <option value="44">Web Development
                                                            </option>
                                                            <option value="275">Wordpress
                                                            </option>
                                                            <option value="2">css
                                                            </option>
                                                            <option value="12">django
                                                            </option>
                                                            <option value="10">expressjs
                                                            </option>
                                                            <option value="1">html
                                                            </option>
                                                            <option value="151">jQuery
                                                            </option>
                                                            <option value="3">js
                                                            </option>
                                                            <option value="5">laravel
                                                            </option>
                                                            <option value="6">mysql
                                                            </option>
                                                            <option value="9">nodejs
                                                            </option>
                                                            <option value="4">php
                                                            </option>
                                                            <option value="11">python
                                                            </option>
                                                            <option value="8">reactjs
                                                            </option>
                                                            <option value="7">vuejs
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Languages you know



                                                        </label>
                                                        <select name="languages[]" class="rt-selectactive w-100-p"
                                                            multiple>
                                                            <option value="1">Abkhaz
                                                            </option>
                                                            <option value="2">Afar
                                                            </option>
                                                            <option value="3">Afrikaans
                                                            </option>
                                                            <option value="4">Akan
                                                            </option>
                                                            <option value="5">Albanian
                                                            </option>
                                                            <option value="6">Amharic
                                                            </option>
                                                            <option value="7">Arabic
                                                            </option>
                                                            <option value="8">Aragonese
                                                            </option>
                                                            <option value="9">Armenian
                                                            </option>
                                                            <option value="10">Assamese
                                                            </option>
                                                            <option value="11">Avaric
                                                            </option>
                                                            <option value="12">Avestan
                                                            </option>
                                                            <option value="13">Aymara
                                                            </option>
                                                            <option value="14">Azerbaijani
                                                            </option>
                                                            <option value="15">Bambara
                                                            </option>
                                                            <option value="16">Bashkir
                                                            </option>
                                                            <option value="17">Basque
                                                            </option>
                                                            <option value="18">Belarusian
                                                            </option>
                                                            <option value="19">Bengali
                                                            </option>
                                                            <option value="20">Bihari
                                                            </option>
                                                            <option value="21">Bislama
                                                            </option>
                                                            <option value="22">Bosnian
                                                            </option>
                                                            <option value="23">Breton
                                                            </option>
                                                            <option value="24">Bulgarian
                                                            </option>
                                                            <option value="25">Burmese
                                                            </option>
                                                            <option value="26">Catalan; Valencian
                                                            </option>
                                                            <option value="27">Chamorro
                                                            </option>
                                                            <option value="28">Chechen
                                                            </option>
                                                            <option value="29">Chichewa; Chewa; Nyanja
                                                            </option>
                                                            <option value="30">Chinese
                                                            </option>
                                                            <option value="31">Chuvash
                                                            </option>
                                                            <option value="32">Cornish
                                                            </option>
                                                            <option value="33">Corsican
                                                            </option>
                                                            <option value="34">Cree
                                                            </option>
                                                            <option value="35">Croatian
                                                            </option>
                                                            <option selected value="36">Czech
                                                            </option>
                                                            <option value="37">Danish
                                                            </option>
                                                            <option value="38">Divehi; Dhivehi; Maldivian;
                                                            </option>
                                                            <option value="39">Dutch
                                                            </option>
                                                            <option value="40">English
                                                            </option>
                                                            <option value="41">Esperanto
                                                            </option>
                                                            <option value="42">Estonian
                                                            </option>
                                                            <option value="43">Ewe
                                                            </option>
                                                            <option value="44">Faroese
                                                            </option>
                                                            <option value="45">Fijian
                                                            </option>
                                                            <option value="46">Finnish
                                                            </option>
                                                            <option value="47">French
                                                            </option>
                                                            <option value="48">Fula; Fulah; Pulaar; Pular
                                                            </option>
                                                            <option value="49">Galician
                                                            </option>
                                                            <option value="50">Georgian
                                                            </option>
                                                            <option value="51">German
                                                            </option>
                                                            <option value="52">Greek, Modern
                                                            </option>
                                                            <option value="53">Guaraní
                                                            </option>
                                                            <option value="54">Gujarati
                                                            </option>
                                                            <option value="55">Haitian; Haitian Creole
                                                            </option>
                                                            <option value="56">Hausa
                                                            </option>
                                                            <option value="57">Hebrew
                                                            </option>
                                                            <option value="58">Hebrew
                                                            </option>
                                                            <option value="59">Herero
                                                            </option>
                                                            <option value="60">Hindi
                                                            </option>
                                                            <option value="61">Hiri Motu
                                                            </option>
                                                            <option value="62">Hungarian
                                                            </option>
                                                            <option value="63">Interlingua
                                                            </option>
                                                            <option value="64">Indonesian
                                                            </option>
                                                            <option value="65">Interlingue
                                                            </option>
                                                            <option value="66">Irish
                                                            </option>
                                                            <option value="67">Igbo
                                                            </option>
                                                            <option value="68">Inupiaq
                                                            </option>
                                                            <option value="69">Ido
                                                            </option>
                                                            <option value="70">Icelandic
                                                            </option>
                                                            <option selected value="71">Italian
                                                            </option>
                                                            <option value="72">Inuktitut
                                                            </option>
                                                            <option value="73">Japanese
                                                            </option>
                                                            <option value="74">Javanese
                                                            </option>
                                                            <option value="75">Kalaallisut, Greenlandic
                                                            </option>
                                                            <option value="76">Kannada
                                                            </option>
                                                            <option value="77">Kanuri
                                                            </option>
                                                            <option value="78">Kashmiri
                                                            </option>
                                                            <option value="79">Kazakh
                                                            </option>
                                                            <option value="80">Khmer
                                                            </option>
                                                            <option value="81">Kikuyu, Gikuyu
                                                            </option>
                                                            <option value="82">Kinyarwanda
                                                            </option>
                                                            <option value="83">Kirghiz, Kyrgyz
                                                            </option>
                                                            <option value="84">Komi
                                                            </option>
                                                            <option value="85">Kongo
                                                            </option>
                                                            <option value="86">Korean
                                                            </option>
                                                            <option value="87">Kurdish
                                                            </option>
                                                            <option value="88">Kwanyama, Kuanyama
                                                            </option>
                                                            <option value="89">Latin
                                                            </option>
                                                            <option value="90">Luxembourgish, Letzeburgesch
                                                            </option>
                                                            <option value="91">Luganda
                                                            </option>
                                                            <option value="92">Limburgish, Limburgan, Limburger
                                                            </option>
                                                            <option value="93">Lingala
                                                            </option>
                                                            <option value="94">Lao
                                                            </option>
                                                            <option value="95">Lithuanian
                                                            </option>
                                                            <option value="96">Luba-Katanga
                                                            </option>
                                                            <option value="97">Latvian
                                                            </option>
                                                            <option value="98">Manx
                                                            </option>
                                                            <option value="99">Macedonian
                                                            </option>
                                                            <option value="100">Malagasy
                                                            </option>
                                                            <option value="101">Malay
                                                            </option>
                                                            <option value="102">Malayalam
                                                            </option>
                                                            <option value="103">Maltese
                                                            </option>
                                                            <option value="104">Māori
                                                            </option>
                                                            <option value="105">Marathi (Marāṭhī)
                                                            </option>
                                                            <option value="106">Marshallese
                                                            </option>
                                                            <option value="107">Mongolian
                                                            </option>
                                                            <option value="108">Nauru
                                                            </option>
                                                            <option value="109">Navajo, Navaho
                                                            </option>
                                                            <option value="110">Norwegian Bokmål
                                                            </option>
                                                            <option value="111">North Ndebele
                                                            </option>
                                                            <option value="112">Nepali
                                                            </option>
                                                            <option value="113">Ndonga
                                                            </option>
                                                            <option value="114">Norwegian Nynorsk
                                                            </option>
                                                            <option value="115">Norwegian
                                                            </option>
                                                            <option value="116">Nuosu
                                                            </option>
                                                            <option value="117">South Ndebele
                                                            </option>
                                                            <option value="118">Occitan
                                                            </option>
                                                            <option value="119">Ojibwe, Ojibwa
                                                            </option>
                                                            <option value="120">Old Church Slavonic, Church Slavic,
                                                                Church Slavonic, Old Bulgarian, Old Slavonic
                                                            </option>
                                                            <option value="121">Oromo
                                                            </option>
                                                            <option value="122">Oriya
                                                            </option>
                                                            <option value="123">Ossetian, Ossetic
                                                            </option>
                                                            <option value="124">Panjabi, Punjabi
                                                            </option>
                                                            <option value="125">Pāli
                                                            </option>
                                                            <option value="126">Persian
                                                            </option>
                                                            <option value="127">Polish
                                                            </option>
                                                            <option value="128">Pashto, Pushto
                                                            </option>
                                                            <option value="129">Portuguese
                                                            </option>
                                                            <option value="130">Quechua
                                                            </option>
                                                            <option value="131">Romansh
                                                            </option>
                                                            <option value="132">Kirundi
                                                            </option>
                                                            <option value="133">Romanian, Moldavian, Moldovan
                                                            </option>
                                                            <option value="134">Russian
                                                            </option>
                                                            <option value="135">Sanskrit (Saṁskṛta)
                                                            </option>
                                                            <option value="136">Sardinian
                                                            </option>
                                                            <option value="137">Sindhi
                                                            </option>
                                                            <option value="138">Northern Sami
                                                            </option>
                                                            <option value="139">Samoan
                                                            </option>
                                                            <option value="140">Sango
                                                            </option>
                                                            <option value="141">Serbian
                                                            </option>
                                                            <option value="142">Scottish Gaelic; Gaelic
                                                            </option>
                                                            <option value="143">Shona
                                                            </option>
                                                            <option value="144">Sinhala, Sinhalese
                                                            </option>
                                                            <option value="145">Slovak
                                                            </option>
                                                            <option value="146">Slovene
                                                            </option>
                                                            <option value="147">Somali
                                                            </option>
                                                            <option value="148">Southern Sotho
                                                            </option>
                                                            <option value="149">Spanish; Castilian
                                                            </option>
                                                            <option value="150">Sundanese
                                                            </option>
                                                            <option value="151">Swahili
                                                            </option>
                                                            <option value="152">Swati
                                                            </option>
                                                            <option value="153">Swedish
                                                            </option>
                                                            <option value="154">Tamil
                                                            </option>
                                                            <option value="155">Telugu
                                                            </option>
                                                            <option value="156">Tajik
                                                            </option>
                                                            <option value="157">Thai
                                                            </option>
                                                            <option value="158">Tigrinya
                                                            </option>
                                                            <option value="159">Tibetan Standard, Tibetan, Central
                                                            </option>
                                                            <option value="160">Turkmen
                                                            </option>
                                                            <option value="161">Tagalog
                                                            </option>
                                                            <option value="162">Tswana
                                                            </option>
                                                            <option value="163">Tonga (Tonga Islands)
                                                            </option>
                                                            <option value="164">Turkish
                                                            </option>
                                                            <option value="165">Tsonga
                                                            </option>
                                                            <option value="166">Tatar
                                                            </option>
                                                            <option value="167">Twi
                                                            </option>
                                                            <option value="168">Tahitian
                                                            </option>
                                                            <option value="169">Uighur, Uyghur
                                                            </option>
                                                            <option value="170">Ukrainian
                                                            </option>
                                                            <option value="171">Urdu
                                                            </option>
                                                            <option value="172">Uzbek
                                                            </option>
                                                            <option value="173">Venda
                                                            </option>
                                                            <option value="174">Vietnamese
                                                            </option>
                                                            <option value="175">Volapük
                                                            </option>
                                                            <option value="176">Walloon
                                                            </option>
                                                            <option value="177">Welsh
                                                            </option>
                                                            <option value="178">Wolof
                                                            </option>
                                                            <option value="179">Western Frisian
                                                            </option>
                                                            <option value="180">Xhosa
                                                            </option>
                                                            <option value="181">Yiddish
                                                            </option>
                                                            <option value="182">Yoruba
                                                            </option>
                                                            <option value="183">Zhuang, Chuang
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-12 mb-3">
                                                        <label class="body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            biography



                                                        </label>
                                                        <textarea name="bio" id="image_ckeditor">Sometimes you may wish to stop running validation rules on an attribute after the first validation  failure. To do so, assign the bail rule to the attribute:</textarea>
                                                    </div>
                                                    <div class="col-lg-12 mt-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="tab-pane fade " id="pills-experience" role="tabpanel"
                                        aria-labelledby="pills-experience-tab">
                                        <div class="tw-flex rt-mb-32 lg:tw-mt-0 tw-items-center tw-justify-between">
                                            <h3 class="f-size-18 tw-flex-shrink-0 lh-1 m-0">Experience</h3>
                                            <button id="addExperience" type="button" class="btn btn-primary">
                                                Add Experience
                                            </button>
                                        </div>
                                        <div class="db-job-card-table -tw-mx-2 tw-pb-16">
                                            <table class="tw-px-2">
                                                <thead>
                                                    <tr>
                                                        <th class="!tw-text-base !tw-font-medium">Company</th>
                                                        <th class="!tw-text-base !tw-font-medium">Department</th>
                                                        <th class="!tw-text-base !tw-font-medium">Designation</th>
                                                        <th class="!tw-text-base !tw-font-medium">Period</th>
                                                        <th class="!tw-text-base !tw-font-medium tw-text-right">Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Google</td>
                                                        <td>Software</td>
                                                        <td>Software Engineer</td>
                                                        <td>
                                                            01 Jan 2021 -
                                                            01 Jan 2022
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-icon"
                                                                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                    </svg>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                                    aria-labelledby="dropdownMenuButton5">
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                            class="dropdown-item"
                                                                            onclick="experienceDetail({&quot;id&quot;:1,&quot;candidate_id&quot;:1,&quot;company&quot;:&quot;Google&quot;,&quot;department&quot;:&quot;Software&quot;,&quot;designation&quot;:&quot;Software Engineer&quot;,&quot;start&quot;:&quot;2021-01-01&quot;,&quot;end&quot;:&quot;2022-01-01&quot;,&quot;responsibilities&quot;:&quot;Execute full software development life cycle (SDLC), Develop flowcharts, layouts and documentation to identify requirements and solutions, Write well-designed, testable code, Produce specifications and determine operational feasibility&quot;,&quot;created_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;currently_working&quot;:0,&quot;formatted_start&quot;:&quot;01 Jan 2021&quot;,&quot;formatted_end&quot;:&quot;01 Jan 2022&quot;}, '01-01-2021', '01-01-2022')">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M10.625 5L15 9.375"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.8743 16.8743H7.4993L3.16406 12.5391"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form method="POST"
                                                                            action="https://jobpilot.lomeyolabs.com/candidate/experiences/1">
                                                                            <input type="hidden" name="_token"
                                                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                                autocomplete="off"> <input
                                                                                type="hidden" name="_method"
                                                                                value="Delete"> <button type="submit"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Are you sure you want to delete this item ?');">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                        stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M14 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M10 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Facebook</td>
                                                        <td>Software</td>
                                                        <td>Product Manager</td>
                                                        <td>
                                                            01 Jan 2020 -
                                                            01 Dec 2021
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-icon"
                                                                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                    </svg>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                                    aria-labelledby="dropdownMenuButton5">
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                            class="dropdown-item"
                                                                            onclick="experienceDetail({&quot;id&quot;:2,&quot;candidate_id&quot;:1,&quot;company&quot;:&quot;Facebook&quot;,&quot;department&quot;:&quot;Software&quot;,&quot;designation&quot;:&quot;Product Manager&quot;,&quot;start&quot;:&quot;2020-01-01&quot;,&quot;end&quot;:&quot;2021-12-01&quot;,&quot;responsibilities&quot;:&quot;Execute full software development life cycle (SDLC), Develop flowcharts, layouts and documentation to identify requirements and solutions, Write well-designed, testable code, Produce specifications and determine operational feasibility&quot;,&quot;created_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;currently_working&quot;:0,&quot;formatted_start&quot;:&quot;01 Jan 2020&quot;,&quot;formatted_end&quot;:&quot;01 Dec 2021&quot;}, '01-01-2020', '01-12-2021')">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M10.625 5L15 9.375"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.8743 16.8743H7.4993L3.16406 12.5391"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form method="POST"
                                                                            action="https://jobpilot.lomeyolabs.com/candidate/experiences/2">
                                                                            <input type="hidden" name="_token"
                                                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                                autocomplete="off"> <input
                                                                                type="hidden" name="_method"
                                                                                value="Delete"> <button type="submit"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Are you sure you want to delete this item ?');">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                        stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M14 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M10 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Twitter</td>
                                                        <td>Software</td>
                                                        <td>Senior Software Engineer</td>
                                                        <td>
                                                            01 Jun 2015 -
                                                            01 Dec 2019
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-icon"
                                                                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                    </svg>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                                    aria-labelledby="dropdownMenuButton5">
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                            class="dropdown-item"
                                                                            onclick="experienceDetail({&quot;id&quot;:3,&quot;candidate_id&quot;:1,&quot;company&quot;:&quot;Twitter&quot;,&quot;department&quot;:&quot;Software&quot;,&quot;designation&quot;:&quot;Senior Software Engineer&quot;,&quot;start&quot;:&quot;2015-06-01&quot;,&quot;end&quot;:&quot;2019-12-01&quot;,&quot;responsibilities&quot;:&quot;Execute full software development life cycle (SDLC), Develop flowcharts, layouts and documentation to identify requirements and solutions, Write well-designed, testable code, Produce specifications and determine operational feasibility&quot;,&quot;created_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;currently_working&quot;:0,&quot;formatted_start&quot;:&quot;01 Jun 2015&quot;,&quot;formatted_end&quot;:&quot;01 Dec 2019&quot;}, '01-06-2015', '01-12-2019')">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M10.625 5L15 9.375"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.8743 16.8743H7.4993L3.16406 12.5391"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form method="POST"
                                                                            action="https://jobpilot.lomeyolabs.com/candidate/experiences/3">
                                                                            <input type="hidden" name="_token"
                                                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                                autocomplete="off"> <input
                                                                                type="hidden" name="_method"
                                                                                value="Delete"> <button type="submit"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Are you sure you want to delete this item ?');">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                        stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M14 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M10 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <br>
                                        <div class="tw-flex rt-mb-32 lg:tw-mt-0 tw-items-center tw-justify-between">
                                            <h3 class="f-size-18 lh-1 m-0">Educations</h3>
                                            <button id="addEducation" type="button" class="btn btn-primary ">
                                                Add Education
                                            </button>
                                        </div>
                                        <div class="db-job-card-table -tw-mx-2">
                                            <table class="tw-px-2">
                                                <thead>
                                                    <tr>
                                                        <th class="!tw-text-base !tw-font-medium">Education Level</th>
                                                        <th class="!tw-text-base !tw-font-medium">Degree</th>
                                                        <th class="!tw-text-base !tw-font-medium">Year</th>
                                                        <th class="!tw-text-base !tw-font-medium tw-text-right">Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Secondary</td>
                                                        <td>SSC</td>
                                                        <td>2002</td>
                                                        <td>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-icon"
                                                                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                    </svg>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                                    aria-labelledby="dropdownMenuButton5">
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                            class="dropdown-item"
                                                                            onclick="educationDetail({&quot;id&quot;:1,&quot;candidate_id&quot;:1,&quot;level&quot;:&quot;Secondary&quot;,&quot;degree&quot;:&quot;SSC&quot;,&quot;year&quot;:2002,&quot;notes&quot;:&quot;Secondary school is defined as schooling after elementary school, therefore in the U.S. that would be grades 6 through 12. However, once a student reaches grade 9, they are considered to be a high school student.&quot;,&quot;created_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;})">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M10.625 5L15 9.375"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.8743 16.8743H7.4993L3.16406 12.5391"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form method="POST"
                                                                            action="https://jobpilot.lomeyolabs.com/candidate/educations/1">
                                                                            <input type="hidden" name="_token"
                                                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                                autocomplete="off"> <input
                                                                                type="hidden" name="_method"
                                                                                value="Delete"> <button type="submit"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Are you sure you want to delete this item ?');">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                        stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M14 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M10 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Graduation</td>
                                                        <td>BSC</td>
                                                        <td>2004</td>
                                                        <td>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-icon"
                                                                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                    </svg>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                                    aria-labelledby="dropdownMenuButton5">
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                            class="dropdown-item"
                                                                            onclick="educationDetail({&quot;id&quot;:2,&quot;candidate_id&quot;:1,&quot;level&quot;:&quot;Graduation&quot;,&quot;degree&quot;:&quot;BSC&quot;,&quot;year&quot;:2004,&quot;notes&quot;:&quot;A graduate student is someone who has earned a bachelor&#039;s degree and is pursuing additional education in a specific field.&quot;,&quot;created_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;})">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M10.625 5L15 9.375"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.8743 16.8743H7.4993L3.16406 12.5391"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form method="POST"
                                                                            action="https://jobpilot.lomeyolabs.com/candidate/educations/2">
                                                                            <input type="hidden" name="_token"
                                                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                                autocomplete="off"> <input
                                                                                type="hidden" name="_method"
                                                                                value="Delete"> <button type="submit"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Are you sure you want to delete this item ?');">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                        stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M14 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M10 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Masters</td>
                                                        <td>MSC</td>
                                                        <td>2010</td>
                                                        <td>
                                                            <div class="d-flex justify-content-end">
                                                                <button type="button" class="btn btn-icon"
                                                                    id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 6.65039C12.6213 6.65039 13.125 6.14671 13.125 5.52539C13.125 4.90407 12.6213 4.40039 12 4.40039C11.3787 4.40039 10.875 4.90407 10.875 5.52539C10.875 6.14671 11.3787 6.65039 12 6.65039Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                        <path
                                                                            d="M12 19.6094C12.6213 19.6094 13.125 19.1057 13.125 18.4844C13.125 17.8631 12.6213 17.3594 12 17.3594C11.3787 17.3594 10.875 17.8631 10.875 18.4844C10.875 19.1057 11.3787 19.6094 12 19.6094Z"
                                                                            fill="#767F8C" stroke="#767F8C" />
                                                                    </svg>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end company-dashboard-dropdown"
                                                                    aria-labelledby="dropdownMenuButton5">
                                                                    <li>
                                                                        <a href="javascript:void(0)"
                                                                            class="dropdown-item"
                                                                            onclick="educationDetail({&quot;id&quot;:3,&quot;candidate_id&quot;:1,&quot;level&quot;:&quot;Masters&quot;,&quot;degree&quot;:&quot;MSC&quot;,&quot;year&quot;:2010,&quot;notes&quot;:&quot;Students who graduate with a master&#039;s degree should possess advanced knowledge of a specialized body of theoretical&quot;,&quot;created_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2025-12-15T04:07:13.000000Z&quot;})">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M7.5 16.8759H3.75C3.58424 16.8759 3.42527 16.81 3.30806 16.6928C3.19085 16.5756 3.125 16.4166 3.125 16.2509V12.7598C3.125 12.6777 3.14117 12.5964 3.17258 12.5206C3.20398 12.4448 3.25002 12.3759 3.30806 12.3178L12.6831 2.94282C12.8003 2.82561 12.9592 2.75977 13.125 2.75977C13.2908 2.75977 13.4497 2.82561 13.5669 2.94282L17.0581 6.43394C17.1753 6.55115 17.2411 6.71012 17.2411 6.87588C17.2411 7.04164 17.1753 7.20061 17.0581 7.31782L7.5 16.8759Z"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M10.625 5L15 9.375"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.8743 16.8743H7.4993L3.16406 12.5391"
                                                                                    stroke="#5E6670" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            Edit
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <form method="POST"
                                                                            action="https://jobpilot.lomeyolabs.com/candidate/educations/3">
                                                                            <input type="hidden" name="_token"
                                                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                                                autocomplete="off"> <input
                                                                                type="hidden" name="_method"
                                                                                value="Delete"> <button type="submit"
                                                                                class="dropdown-item"
                                                                                onclick="return confirm('Are you sure you want to delete this item ?');">
                                                                                <svg width="20" height="20"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M3 6H5H21" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path
                                                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                                                        stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M14 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                    <path d="M10 11V17" stroke="#FF4F4F"
                                                                                        stroke-width="1.5"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round" />
                                                                                </svg>
                                                                                Delete
                                                                            </button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>


                                    <div class="tab-pane fade " id="pills-social" role="tabpanel"
                                        aria-labelledby="pills-social-tab">
                                        <div class="dashboard-account-setting-item">
                                            <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                                method="POST">
                                                <input type="hidden" name="_token"
                                                    value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                                <input type="hidden" name="_method" value="put"> <input
                                                    type="hidden" name="type" value="social">
                                                <div class="row">
                                                    <div class="col-12 custom-select-padding">
                                                        <div class="d-flex tw-items-center">
                                                            <div class="d-flex mborder">
                                                                <div class="position-relative">
                                                                    <select
                                                                        class="w-100-p border-0 new-select form-control"
                                                                        name="social_media[]">
                                                                        <option value="" class="d-none" disabled>
                                                                            Select One</option>
                                                                        <option selected value="facebook">Facebook
                                                                        </option>
                                                                        <option value="twitter">Twitter</option>
                                                                        <option value="instagram">Instagram
                                                                        </option>
                                                                        <option value="youtube">Youtube</option>
                                                                        <option value="linkedin">Linkedin</option>
                                                                        <option value="pinterest">Pinterest
                                                                        </option>
                                                                        <option value="reddit">Reddit</option>
                                                                        <option value="github">GitHub</option>
                                                                        <option value="other">Other</option>
                                                                    </select>
                                                                </div>
                                                                <div class="w-100">
                                                                    <input class="border-0" type="url"
                                                                        name="url[]" id=""
                                                                        placeholder="Profile Link / URL..."
                                                                        value="https://www.facebook.com/zakirsoft">
                                                                </div>
                                                            </div>
                                                            <div class="tw-ms-2">
                                                                <button
                                                                    class="tw-w-12 tw-h-12 tw-border-0 tw-rounded tw-bg-[#F1F2F4] tw-inline-flex tw-justify-center tw-items-center"
                                                                    type="button" id="remove_item">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                                            stroke="#18191C" stroke-width="1.5"
                                                                            stroke-miterlimit="10" />
                                                                        <path d="M15 9L9 15" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 15L9 9" stroke="#18191C"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="multiple_feature_part">
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn tw-bg-[#F1F2F4] w-100 mt-4 add-new-social"
                                                            onclick="add_features_field()" type="button">
                                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                    stroke="#18191C" stroke-width="1.5"
                                                                    stroke-miterlimit="10" />
                                                                <path d="M6.875 10H13.125" stroke="#18191C"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path d="M10 6.875V13.125" stroke="#18191C"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                            <span>Add New Social Link</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">
                                                    Save Changes
                                                </button>
                                        </div>

                                        </form>
                                    </div>


                                    <div class="tab-pane fade  " id="pills-setting" role="tabpanel"
                                        aria-labelledby="pills-setting-tab">
                                        <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                            method="POST">
                                            <input type="hidden" name="_token"
                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                            <input type="hidden" name="_method" value="put"> <input
                                                type="hidden" name="type" value="contact">
                                            <div class="dashboard-account-setting-item pb-0">
                                                <h6>Location</h6>
                                                <div class="row">

                                                    <div class="col-lg-12 mb-3">
                                                        <div class="alert alert-danger d-none mt-0" role="alert"
                                                            id="map_wrong_key_warning"></div>
                                                        <div id="google-map-div" class="d-none">
                                                            <input id="searchInput" class="mapClass" type="text"
                                                                placeholder="Enter a location">
                                                            <div class="map mymap" id="google-map"></div>
                                                        </div>
                                                        <div class="">
                                                            <input type="text" autocomplete="off"
                                                                id="leaflet_search" placeholder="Enter city name"
                                                                class="full-width placeholder:tw-normal-case"
                                                                value="" />
                                                            <br>
                                                            <div id="leaflet-map"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer row mt-4 border-0">
                                                    <span>
                                                        <img src="https://jobpilot.lomeyolabs.com/frontend/assets/images/loader.gif"
                                                            alt="loading" width="50px" height="50px"
                                                            class="loader_position d-none">
                                                    </span>
                                                    <div class="location_secion">
                                                        Country: <span class="location_country">Bangladesh</span>
                                                        <br>
                                                        Full Address: <span class="location_full_address">Dhaka
                                                            District,Dhaka Division,Bangladesh</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dashboard-account-setting-item">
                                                <h6>Your Contact Information</h6>
                                                <div class="row">
                                                    <div class="col-lg-6 mb-3">
                                                        <label
                                                            class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Phone



                                                        </label>
                                                        <input type="text" name="phone" id="phone"
                                                            class="form-control phonecode " value="+880123456789"
                                                            placeholder="Phone">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label
                                                            class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Secondary Phone



                                                        </label>
                                                        <input type="text" name="secondary_phone" id="phone2"
                                                            class="form-control phonecode " value="+880123456789"
                                                            placeholder="Phone">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label
                                                            class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Whatsapp Number



                                                        </label>
                                                        <input type="text" name="whatsapp_number"
                                                            id="whatsapp_number" class="form-control phonecode "
                                                            value="" placeholder="Whatsapp Number">
                                                    </div>
                                                    <div class="col-lg-6 mb-3">
                                                        <label
                                                            class="pointer body-font-4 d-block text-gray-900 rt-mb-8 mb-2"
                                                            for="for">
                                                            Email



                                                        </label>
                                                        <div class="fromGroup has-icon2">
                                                            <div class="form-control-icon">
                                                                <input type="email" name="email" id="email"
                                                                    class="form-control  " value="jhondoe@gmail.com"
                                                                    placeholder="Email Address">
                                                                <div class="icon-badge-2">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M21 5.25L12 13.5L3 5.25"
                                                                            stroke="var(--primary-500)"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M3 5.25H21V18C21 18.1989 20.921 18.3897 20.7803 18.5303C20.6397 18.671 20.4489 18.75 20.25 18.75H3.75C3.55109 18.75 3.36032 18.671 3.21967 18.5303C3.07902 18.3897 3 18.1989 3 18V5.25Z"
                                                                            stroke="var(--primary-500)"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M10.3628 12L3.23047 18.538"
                                                                            stroke="var(--primary-500)"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M20.7692 18.5381L13.6367 12"
                                                                            stroke="var(--primary-500)"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">
                                                    Save Changes
                                                </button>
                                            </div>

                                        </form>

                                        <hr>
                                        <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                            method="POST">
                                            <input type="hidden" name="_token"
                                                value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                            <input type="hidden" name="_method" value="put"> <input
                                                type="hidden" name="type" value="account">
                                            <div class="dashboard-account-setting-item">
                                                <h6>Change Account Email Address </h6>
                                                <div class="row tw-mb-8">
                                                    <div class="col-lg-6 mt-2">
                                                        <label class="f-size-14 text-gray-700 rt-mb-8 mb-2"
                                                            for="for">
                                                            Email

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>
                                                        <div class="fromGroup rt-mb-15">
                                                            <input name="account_email" value="candidate@mail.com"
                                                                class="form-control " id="account_email"
                                                                type="email" placeholder="Email Address" required>

                                                        </div>
                                                    </div>


                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Update Email
                                                </button>
                                            </div>
                                        </form>

                                        <hr>
                                        <div class="dashboard-account-setting-item setting-border">




                                            <div class="row">
                                                <form id="alert"
                                                    action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                        autocomplete="off"> <input type="hidden" name="_method"
                                                        value="put"> <input type="hidden" name="type"
                                                        value="alert">
                                                    <input type="hidden" name="alert_type" value="status">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6>Job Alert</h6>
                                                        <div class="input-group-text bg-transparent border-0"
                                                            id="basic-addon1">
                                                            <div class="form-check form-switch">
                                                                <input type="hidden" value="0"
                                                                    name="received_job_alert">
                                                                <input name="received_job_alert"
                                                                    class="form-check-input" type="checkbox"
                                                                    id="flexSwitchCheckDefault" value="1" checked>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                                    method="POST">
                                                    <input type="hidden" name="_token"
                                                        value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                        autocomplete="off"> <input type="hidden" name="_method"
                                                        value="put"> <input type="hidden" name="type"
                                                        value="alert">
                                                    <input type="hidden" name="alert_type" value="role">
                                                    <div class="col-lg-12">
                                                        <label class="f-size-14 text-gray-700 mb-2" for="for">
                                                            Choose Job Role



                                                        </label>
                                                        <div>
                                                            <div class="tw-flex tw-justify-between tw-gap-3">
                                                                <select class="select2-taggable w-100-p" multiple
                                                                    name="job_roles[]">
                                                                    <option selected value="6">
                                                                        Administrator</option>
                                                                    <option selected value="3">
                                                                        Assistant Manager</option>
                                                                    <option selected value="5">
                                                                        Director</option>
                                                                    <option selected value="4">
                                                                        Executive</option>
                                                                    <option selected value="2">
                                                                        Manager</option>
                                                                    <option selected value="1">
                                                                        Team Leader</option>
                                                                </select>
                                                                <div>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Save Changes
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <p>
                                                                [Note: You will be notified for the selected roles only]
                                                            </p>
                                                            <div class="form-control-icon">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="dashboard-account-setting-item setting-border">
                                            <form id="visibility"
                                                action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                                method="POST">
                                                <input type="hidden" name="_token"
                                                    value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                                <input type="hidden" name="_method" value="put"> <input
                                                    type="hidden" name="type" value="visibility">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label class="text-gray-900 rt-mb-15 fw-medium">Profile
                                                            Privacy</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-text bg-transparent border border-gray-50 extra-design"
                                                                id="basic-addon1">
                                                                <div class="form-check form-switch">
                                                                    <input name="profile_visibility"
                                                                        class="form-check-input" type="checkbox"
                                                                        id="flexSwitchCheckDefault" checked>
                                                                    <span class="form-check-label f-size-14">Yes</span>
                                                                </div>
                                                            </div>
                                                            <input disabled type="text" class="form-control"
                                                                placeholder="Your profile is now Public" id="msalary">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="text-gray-900 rt-mb-15 fw-medium mb-2"
                                                            for="for">
                                                            Resume Privacy



                                                        </label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-text bg-transparent border border-gray-50 extra-design"
                                                                id="basic-addon1">
                                                                <div class="form-check form-switch">
                                                                    <input name="cv_visibility" class="form-check-input"
                                                                        type="checkbox" id="flexSwitchCheckDefault"
                                                                        checked>
                                                                    <span class="form-check-label f-size-14">Yes</span>
                                                                </div>
                                                            </div>
                                                            <input disabled type="text" class="form-control"
                                                                placeholder="Your resume is now Public" id="msalary">
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="dashboard-account-setting-item setting-border">
                                            <h6>Change Password</h6>
                                            <form action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                                method="POST">
                                                <input type="hidden" name="_token"
                                                    value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n" autocomplete="off">
                                                <input type="hidden" name="_method" value="put"> <input
                                                    type="hidden" name="type" value="password">
                                                <div class="row">
                                                    <div class="col-lg-6 rt-mb-32">
                                                        <label class="f-size-14 text-gray-700 rt-mb-6 mb-2"
                                                            for="for">
                                                            New Password

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>
                                                        <div class="fromGroup rt-mb-15">
                                                            <div class="d-flex">
                                                                <input name="password" class="form-control "
                                                                    id="password-hide_show" type="password"
                                                                    placeholder="Password" required>
                                                                <div class="has-badge ">
                                                                    <i class="ph-eye "></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 rt-mb-32">
                                                        <label class="f-size-14 text-gray-700 rt-mb-6 mb-2"
                                                            for="for">
                                                            Confirm Password

                                                            <span class="form-label-required text-danger">*</span>


                                                        </label>
                                                        <div class="fromGroup rt-mb-15">
                                                            <input name="password_confirmation" class="form-control "
                                                                id="password-hide_show1" type="password"
                                                                placeholder="Confirm Password" required>
                                                            <div class="has-badge  select-icon__one">
                                                                <i class="ph-eye"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="dashboard-account-setting-item setting-border">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h4>Close/Delete Account</h4>
                                                    <p>If you delete your account, you&#039;ll lose access to matched jobs,
                                                        followed employers, job alerts, shortlisted jobs, and other services
                                                    </p>
                                                    <form
                                                        action="https://jobpilot.lomeyolabs.com/candidate/settings/update"
                                                        id="AccountDelete" method="POST">
                                                        <input type="hidden" name="_token"
                                                            value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="put"> <input type="hidden" name="type"
                                                            value="account-delete">
                                                        <button type="button" onclick="AccountDelete()"
                                                            class="btn p-0 text-danger-500">
                                                            <span class="button-content-wrapper ">
                                                                <span class="button-icon">
                                                                    <i class="ph-x-circle"></i>
                                                                </span>
                                                                <span class="button-text">
                                                                    Close Account
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-footer text-center body-font-4 text-gray-500">
                &copy; Jobpilot 2025 | All Rights Reserved
            </div>
        </div>


        <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog tw-max-w-[536px]">
                <div class="modal-content">
                    <form action="https://jobpilot.lomeyolabs.com/candidate/resume/store" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                            autocomplete="off">
                        <div class="modal-body">
                            <h5 class="tw-text-lg tw-text-[#18191C] tw-font-semibold tw-mb-[18px]" id="cvModalLabel">
                                Add a CV/Resume</h5>
                            <div class="from-group py-2">
                                <label class="tw-mb-2 tw-text-sm tw-text-[#18191C] mb-2" for="for">
                                    Cv/Resume Name

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <input type="text" name="resume_name" id="">
                            </div>
                            <div class="form-group tw-mb-6">
                                <label class="tw-mb-2 tw-text-sm tw-text-[#18191C] mb-2" for="for">
                                    Upload Cv/Resume

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <div class="cv-image-upload-wrap">
                                    <input name="resume_file" class="resume-file-upload-input" type="file"
                                        onchange="resumeManageReadURL(this, 'add');"
                                        accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                        id="resume_add_input" />
                                    <div class="drag-text">
                                        <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                stroke="#ADB2BA" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <h3>Browse file</h3>
                                        <p>Available format - pdf,doc,docx<br>
                                            Maximum file size - 5 MB</p>
                                    </div>
                                </div>
                                <div class="resume-file-upload-content none ">
                                    <div class="wrap">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.999 28H6.99805C6.73283 28 6.47848 27.8946 6.29094 27.7071C6.1034 27.5196 5.99805 27.2652 5.99805 27V5C5.99805 4.73478 6.1034 4.48043 6.29094 4.29289C6.47848 4.10536 6.73283 4 6.99805 4H18.999L25.999 11V27C25.999 27.1313 25.9732 27.2614 25.9229 27.3827C25.8727 27.504 25.799 27.6143 25.7061 27.7071C25.6133 27.8 25.503 27.8736 25.3817 27.9239C25.2604 27.9741 25.1303 28 24.999 28Z"
                                                stroke="#0A65CC" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19 4V11H26.001" stroke="#0A65CC" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 17H20" stroke="#0A65CC" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 21H20" stroke="#0A65CC" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <h3 class="resume_selected_file_name">file</h3>
                                        <p>
                                            <span><span class="resume_selected_file_size">2.3</span> MB</span> <br>
                                            <span class="resume_selected_file_type">.pdf</span>
                                        </p>
                                        <div class="image-title-wrap">
                                            <button type="button" class="cv-remove-image">
                                                <svg width="20" height="20" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 6H5H21" stroke="#FF4F4F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                        stroke="#FF4F4F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14 11V17" stroke="#FF4F4F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 11V17" stroke="#FF4F4F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tw-flex tw-justify-between">
                                <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                    data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">
                                            Add a CV/Resume
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <button type="button"
                                class="tw-rounded-full tw-flex tw-items-center tw-justify-center tw-p-3 tw-absolute -tw-top-[25px] -tw-right-[25px] tw-bg-white tw-border-2 tw-border-[#E7F0FA]"
                                data-bs-dismiss="modal" aria-label="Close">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.75 5.25L5.25 18.75" stroke="#0A65CC" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 18.75L5.25 5.25" stroke="#0A65CC" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="resumeEditModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog tw-max-w-[536px]">
                <div class="modal-content">
                    <form action="https://jobpilot.lomeyolabs.com/candidate/resume/update" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                            autocomplete="off"> <input type="hidden" name="resume_id" id="resume_id_input">
                        <div class="modal-body">
                            <h5 class="tw-text-lg tw-text-[#18191C] tw-font-semibold tw-mb-[18px]" id="cvModalLabel">
                                Update Cv/Resume</h5>
                            <div class="from-group py-2">
                                <label class="tw-mb-2 tw-text-sm tw-text-[#18191C] mb-2" for="for">
                                    Cv/Resume Name

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <input type="text" name="resume_name" id="resume_name_input">
                            </div>
                            <div class="form-group tw-mb-6">
                                <label class="tw-mb-2 tw-text-sm tw-text-[#18191C] mb-2" for="for">
                                    Upload Cv/Resume

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <div class="cv-image-upload-wrap">
                                    <input name="resume_file" class="resume-file-upload-input" type="file"
                                        onchange="resumeManageReadURL(this, 'edit');"
                                        accept="application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                        id="resume_edit_input" />
                                    <div class="drag-text">
                                        <svg width="48" height="49" viewBox="0 0 48 49" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M24 24.5V42.5" stroke="#ADB2BA" stroke-width="3"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M40.7809 37.2809C42.7316 36.2175 44.2726 34.5347 45.1606 32.4982C46.0487 30.4617 46.2333 28.1874 45.6853 26.0343C45.1373 23.8812 43.8879 21.972 42.1342 20.6078C40.3806 19.2437 38.2226 18.5024 36.0009 18.5009H33.4809C32.8755 16.1594 31.7472 13.9856 30.1808 12.1429C28.6144 10.3002 26.6506 8.83664 24.4371 7.86216C22.2236 6.88767 19.818 6.42766 17.4011 6.51671C14.9843 6.60576 12.619 7.24154 10.4833 8.37628C8.34747 9.51101 6.49672 11.1152 5.07014 13.0681C3.64356 15.0211 2.67828 17.272 2.24686 19.6517C1.81544 22.0314 1.92911 24.478 2.57932 26.8075C3.22954 29.1369 4.39938 31.2887 6.0009 33.1009"
                                                stroke="#ADB2BA" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M32 32.5L24 24.5L16 32.5" stroke="#ADB2BA" stroke-width="3"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <h3>Change file</h3>
                                        <p>Current resume size: <span id="resume_file_size"></span></p>
                                    </div>
                                </div>
                                <div class="resume-file-upload-content none ">
                                    <div class="wrap">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.999 28H6.99805C6.73283 28 6.47848 27.8946 6.29094 27.7071C6.1034 27.5196 5.99805 27.2652 5.99805 27V5C5.99805 4.73478 6.1034 4.48043 6.29094 4.29289C6.47848 4.10536 6.73283 4 6.99805 4H18.999L25.999 11V27C25.999 27.1313 25.9732 27.2614 25.9229 27.3827C25.8727 27.504 25.799 27.6143 25.7061 27.7071C25.6133 27.8 25.503 27.8736 25.3817 27.9239C25.2604 27.9741 25.1303 28 24.999 28Z"
                                                stroke="#0A65CC" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M19 4V11H26.001" stroke="#0A65CC" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 17H20" stroke="#0A65CC" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 21H20" stroke="#0A65CC" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <h3 class="resume_selected_file_name">file</h3>
                                        <p>
                                            <span><span class="resume_selected_file_size">2.3</span> MB</span> <br>
                                            <span class="resume_selected_file_type">.pdf</span>
                                        </p>
                                        <div class="image-title-wrap">
                                            <button type="button" class="cv-remove-image">
                                                <svg width="20" height="20" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 6H5H21" stroke="#FF4F4F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                        stroke="#FF4F4F" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14 11V17" stroke="#FF4F4F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10 11V17" stroke="#FF4F4F" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tw-flex tw-justify-between">
                                <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                    data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">
                                            Add a CV/Resume
                                        </span>
                                    </span>
                                </button>
                            </div>
                            <button type="button"
                                class="tw-rounded-full tw-flex tw-items-center tw-justify-center tw-p-3 tw-absolute -tw-top-[25px] -tw-right-[25px] tw-bg-white tw-border-2 tw-border-[#E7F0FA]"
                                data-bs-dismiss="modal" aria-label="Close">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.75 5.25L5.25 18.75" stroke="#0A65CC" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 18.75L5.25 5.25" stroke="#0A65CC" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="addEducationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="https://jobpilot.lomeyolabs.com/candidate/educations/store" method="POST">
                        <input type="hidden" name="_token" value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                            autocomplete="off">
                        <div class="modal-body">
                            <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel">Add Education</h5>
                            <div class="from-group rt-mb-18">
                                <label class="rt-mb-8 mb-2" for="for">
                                    Education Level

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <input type="text" name="level" required class=""
                                    placeholder="Enter Education Level">
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Degree

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input type="text" name="degree" required class=""
                                        placeholder="Enter Degree">
                                </div>
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Year

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input type="text" name="year" value="" placeholder="Year"
                                        class="year_picker form-control border-cutom ">
                                </div>
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-12">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Notes



                                    </label>
                                    <textarea class="form-control " placeholder="Enter Notes" name="notes" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                                <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                    onclick="closeAddEducationModal()">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">
                                            Add Education
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn-close" onclick="closeAddEducationModal()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>



        <div class="modal fade" id="editEducationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="https://jobpilot.lomeyolabs.com/candidate/educations/update" method="POST">
                        <input type="hidden" name="_token" value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                            autocomplete="off"> <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body">
                            <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel">Edit Education</h5>
                            <input type="hidden" name="education_id" id="education-modal-id">
                            <div class="from-group rt-mb-18">
                                <label class="rt-mb-8 mb-2" for="for">
                                    Education Level

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <input id="education-modal-level" type="text" name="level" required
                                    placeholder="Enter Education Level">
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Degree

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input id="education-modal-degree" type="text" name="degree" required
                                        placeholder="Enter Degree">
                                </div>
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Year

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input id="education-modal-year" type="text" name="year" value=""
                                        placeholder="dd-mm-yyyy" class="year_picker form-control border-cutom "
                                        required>
                                </div>
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-12">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Notes



                                    </label>
                                    <textarea id="education-notes" class="form-control " placeholder="Enter Notes" name="notes" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                                <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                    onclick="closeEditEducationModal()">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">
                                            Update Education
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn-close" onclick="closeEditEducationModal()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <div class="modal fade" id="addExperienceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="https://jobpilot.lomeyolabs.com/candidate/experiences/store" method="POST">
                        <input type="hidden" name="_token" value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                            autocomplete="off">
                        <div class="modal-body">
                            <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel">Add Experience</h5>
                            <div class="from-group rt-mb-18">
                                <label class="rt-mb-8 mb-2" for="for">
                                    Company

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <input type="text" name="company" required class=""
                                    placeholder="Enter Company">

                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Department

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input type="text" name="department" required placeholder="Enter Department">
                                </div>
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Designation

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input type="text" name="designation" required placeholder="Enter Designation">
                                </div>
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Start Date

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input type="text" name="start" value="" placeholder="yyyy-mm-dd"
                                        class="date_picker form-control border-cutom " required>
                                </div>
                                <div class="col-lg-6 experience_end_date">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        End Date

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input type="text" name="end" value="" placeholder="yyyy-mm-dd"
                                        class="date_picker form-control border-cutom ">
                                </div>
                            </div>
                            <div class="from-group d-flex gap-2 align-items-center rt-mb-24 custom-checkbox">
                                <input type="checkbox" name="currently_working" id="experience-modal-checkbox_create"
                                    value="1">
                                <label class="!tw-mb-0 tw-cursor-pointer mb-2" for="experience-modal-checkbox_create">
                                    I am currently working



                                </label>
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-12">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Responsibilities



                                    </label>
                                    <textarea class="form-control " placeholder="Enter Responsibilities" name="responsibilities" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                                <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                    onclick="closeAddExperienceModal()">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">
                                            Add Experience
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn-close" onclick="closeAddExperienceModal()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>



        <div class="modal fade" id="editExperienceModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="https://jobpilot.lomeyolabs.com/candidate/experiences/update" method="POST">
                        <input type="hidden" name="_token" value="K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                            autocomplete="off"> <input type="hidden" name="_method" value="PUT">
                        <div class="modal-body">
                            <h5 class="modal-title rt-mb-18 f-size-18" id="cvModalLabel">Edit Experience</h5>
                            <input type="hidden" name="experience_id" id="experience-modal-id">
                            <div class="from-group rt-mb-18">
                                <label class="rt-mb-8 mb-2" for="for">
                                    Company

                                    <span class="form-label-required text-danger">*</span>


                                </label>
                                <input id="experience-modal-company" type="text" name="company" required
                                    placeholder="Enter Company">
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Department

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input id="experience-modal-department" type="text" name="department" required
                                        placeholder="Enter Department">
                                </div>
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Designation

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input id="experience-modal-designation" type="text" name="designation"
                                        required placeholder="Enter Designation">
                                </div>
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-6">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Start Date

                                        <span class="form-label-required text-danger">*</span>


                                    </label>
                                    <input id="experience-modal-start" type="text" name="start" value=""
                                        placeholder="yyyy-mm-dd" class="date_picker form-control border-cutom "
                                        required>
                                </div>
                                <div class="col-lg-6 experience_end_date">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        End Date



                                    </label>
                                    <input id="experience-modal-end" type="text" name="end" value=""
                                        placeholder="yyyy-mm-dd" class="date_picker form-control border-cutom ">
                                </div>
                            </div>
                            <div class="from-group d-flex gap-2 align-items-center rt-mb-24">
                                <input type="checkbox" name="currently_working" id="experience-modal-checkbox_edit"
                                    value="1">
                                <label class="!tw-mb-0 !tw-cursor-pointer mb-2" for="experience-modal-checkbox_edit">
                                    I am currently working



                                </label>
                            </div>
                            <div class="row rt-mb-18">
                                <div class="col-lg-12">
                                    <label class="rt-mb-8 mb-2" for="for">
                                        Responsibilities



                                    </label>
                                    <textarea id="experience-responsibilities" class="form-control " placeholder="Enter Responsibilities"
                                        name="responsibilities" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="d-flex tw-flex-wrap tw-gap-4 justify-content-between">
                                <button type="button" class="bg-priamry-50 btn btn-primary-50"
                                    onclick="closeEditExperienceModal()">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span class="button-content-wrapper ">
                                        <span class="button-icon align-icon-right"><i class="ph-arrow-right"></i></span>
                                        <span class="button-text">
                                            Update Experience
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn-close" onclick="closeEditExperienceModal()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 5.25L5.25 18.75" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.75 18.75L5.25 5.25" stroke="var(--primary-500)" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



    <!-- scripts -->
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/bootstrap.bundle.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/jquery.scrollUp.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/OverlayScrollbars.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/scrollax.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/backend/plugins/select2/js/select2.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/waypoints.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/jquery-ui.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/backend/plugins/toastr/toastr.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/backend/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/aos.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/slick.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/sortable.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/ckeditor.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/axios.min.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/frontend/assets/js/app.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/backend/js/livewire.js"></script>
    <link rel="preload" as="style" href="https://jobpilot.lomeyolabs.com/build/assets/app.7c9c1c97.css" />
    <link rel="preload" as="style" href="https://jobpilot.lomeyolabs.com/build/assets/app.0e75c4b0.css" />
    <link rel="modulepreload" href="https://jobpilot.lomeyolabs.com/build/assets/app.2a1a5220.js" />
    <link rel="modulepreload" href="https://jobpilot.lomeyolabs.com/build/assets/index.esm.d4482f2e.js" />
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/build/assets/app.7c9c1c97.css"
        data-navigate-track="reload" />
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/build/assets/app.0e75c4b0.css"
        data-navigate-track="reload" />
    <script type="module" src="https://jobpilot.lomeyolabs.com/build/assets/app.2a1a5220.js" data-navigate-track="reload">
    </script>
    <script>
        var auth_check = $('#auth_user').val();

        if (auth_check == 1) {
            loadUnreadMessageCount();

            function playAudio() {
                const audio = new Audio("/frontend/assets/sound.mp3");
                audio.play();
            }

            function loadUnreadMessageCount() {
                $.ajax({
                    url: "https://jobpilot.lomeyolabs.com/load-unread-count",
                    type: "GET",
                    success: function(response) {
                        if (response > 0) {
                            $('.unread-message-part').removeClass('d-none');
                        } else {
                            $('.unread-message-part').addClass('d-none');
                        }
                    }
                });
            }
        }

        // autocomplete
        var path = "https://jobpilot.lomeyolabs.com/job/autocomplete";

        $('.global_header_search').keyup(function(e) {
            var keyword = $(this).val();

            if (keyword != '') {
                $.ajax({
                    url: path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: keyword
                    },
                    success: function(data) {
                        $('#autocomplete_job_results').fadeIn();
                        $('#autocomplete_job_results').html(data);
                    }
                });
            } else {
                $('#autocomplete_job_results').fadeOut();
            }
        });

        $('#global_search').keypress(function(e) {
            var key = e.which;

            if (key == 13) {
                $('#search-form').submit();
            }
        });

        $("#searchIcon").click(function() {
            $(".togglesearch").toggle();
            $("#search_input").focus();
        });

        $("#mblSearchIcon").click(function() {

            $(".mblTogglesearch").toggle();
            $('#mobile_search_input').focus();
        });


        $('button.effect1').on('click', function() {
            $(this).find('span').toggleClass('active');
        });

        $('.rt-mobile-menu-overlay').on('click', function() {
            $('button.effect1').find('span').removeClass('active');
        });

        //image upload scripts
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if (input.className === 'profile-file-upload-input') {
                        $('.profile-image-upload-wrap').hide();
                        $('.profile-file-upload-image').attr('src', e.target.result);
                        $('.profile-file-upload-content').show();

                        // $('.image-title').html(input.files[0].name);
                    }
                    if (input.className === 'banner-file-upload-input') {
                        $('.banner-image-upload-wrap').hide();

                        $('.banner-file-upload-image').attr('src', e.target.result);
                        $('.banner-file-upload-content').show();

                        // $('.image-title').html(input.files[0].name);
                    }
                    if (input.className === 'resume-file-upload-input') {
                        $('.cv-image-upload-wrap').hide();
                        $('.resume-file-upload-content.none').show();
                    }
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                $('.profile-remove-image').on('click', function() {
                    $('.profile-file-upload-input').replaceWith($('.profile-file-upload-input').clone());
                    $('.profile-file-upload-content').hide();
                    $('.profile-file-upload-image').attr('src', '');
                    $('.profile-image-upload-wrap').show();
                })
                $('.banner-remove-image').on('click', function() {
                    $('.banner-file-upload-input').replaceWith($('.banner-file-upload-input').clone());
                    $('.banner-file-upload-content').hide();
                    $('.banner-file-upload-image').attr('src', '');
                    $('.banner-image-upload-wrap').show();
                })
            }
        }
        $('.profile-remove-image').on('click', function() {
            $('.profile-file-upload-input').replaceWith($('.profile-file-upload-input').clone());
            $('.profile-file-upload-content').hide();
            $('.profile-image-upload-wrap').show();
        })
        $('.banner-remove-image').on('click', function() {
            $('.banner-file-upload-input').replaceWith($('.banner-file-upload-input').clone());
            $('.banner-file-upload-content').hide();
            $('.banner-image-upload-wrap').show();
        })
        $('.cv-remove-image').on('click', function() {
            $('.resume-file-upload-input').replaceWith($('.resume-file-upload-input').clone());
            $('.resume-file-upload-content').hide();
            $('.cv-image-upload-wrap').show();
        })

        $('.image-upload-wrap').bind('dragover', function() {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function() {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#addExperience').on('click', function() {
                $('#addExperienceModal').modal('show');
            });

            $('.date_picker').datepicker({
                format: "yyyy-mm-dd",
                autoclose: true
            });

            function closeAddExperienceModal() {
                $('#addExperienceModal').find('form')[0].reset();
                $('#addExperienceModal').modal('hide')
            }

            function closeEditExperienceModal() {
                $('#editExperienceModal').find('form')[0].reset();
                $('#editExperienceModal').modal('hide')
            }

            function experienceDetail(experience, start, end) {
                $('#experience-modal-id').val(experience.id);
                $('#experience-modal-company').val(experience.company);
                $('#experience-modal-department').val(experience.department);
                $('#experience-modal-designation').val(experience.designation);
                $('#experience-modal-start').val(start);
                $('#experience-modal-end').val(end);
                $('#experience-responsibilities').val(experience.responsibilities);
                $('#experience-modal-checkbox_edit').prop("checked", experience.currently_working ? true : false);

                $('#editExperienceModal').modal('show');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#addEducation').on('click', function() {
                $('#addEducationModal').modal('show');
            });

            $('.year_picker').datepicker({
                format: 'yyyy',
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });

            function closeAddEducationModal() {
                $('#addEducationModal').find('form')[0].reset();
                $('#addEducationModal').modal('hide')
            }

            function closeEditEducationModal() {
                $('#editEducationModal').find('form')[0].reset();
                $('#editEducationModal').modal('hide')
            }

            function educationDetail(education, start, end) {
                $('#education-modal-id').val(education.id);
                $('#education-modal-level').val(education.level);
                $('#education-modal-degree').val(education.degree);
                $('#education-modal-year').val(education.year);
                $('#education-notes').val(education.notes);

                $('#editEducationModal').modal('show');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.select21').select2();
        })
    </script>
    <script>
        //init datepicker
        $("#available_id_date").attr("autocomplete", "off");

        availableStatus('available');

        $('#available_status').on('change', function() {
            availableStatus(this.value);
        });

        function availableStatus(status) {
            if (status == 'available_in') {
                $('#available_in_status').removeClass('d-none');
            } else {
                $('#available_in_status').addClass('d-none');
                $('#available_id_date').val('');
            }
        }
        //init datepicker
        $(document).ready(function() {
            $('#available_id_date').datepicker({
                format: 'dd-mm-yyyy',
                isRTL: "",
                language: "en",
            });
        });

        function UploadMode(param) {
            if (param === 'photo') {
                $('#photo-uploadMode').removeClass('d-none');
                $('#photo-oldMode').addClass('d-none');
            } else {
                $('#banner-uploadMode').removeClass('d-none');
                $('#banner-oldMode').addClass('d-none');
            }
        }
        //init datepicker
        $("#date").attr("autocomplete", "off");
        //init datepicker
        $('#date').datepicker({
            format: 'dd-mm-yyyy',
            isRTL: "",
            language: "en",
        });
    </script>
    <script>
        $('#visibility').on('change', function() {
            $(this).submit();
        });
        $('#alert').on('change', function() {
            $(this).submit();
        });

        function AccountDelete() {
            if (confirm("Are you sure ?") == true) {
                $('#AccountDelete').submit();
            } else {
                return false;
            }
        }

        function resumeDelete() {
            if (confirm("Are you sure ?") == true) {
                $('#resumeForm').submit();
            } else {
                return false;
            }
        }

        function editResume(id, name, size) {
            $('#resume_id_input').val(id);
            $('#resume_name_input').val(name);
            $('#resume_file_size').html(size);
            $('#resumeEditModal').modal('show');
        }
        $('.cv-remove-image').on('click', function() {
            $('.resume-file-upload-input').replaceWith($('.resume-file-upload-input').clone());
            $('.resume-file-upload-content').hide();
            $('.cv-image-upload-wrap').show();
            $('.resume-file-upload-input').val('');
        })

        function resumeManageReadURL(input, type) {
            if (type == 'add') {
                var fileName = document.querySelector('#resume_add_input').files[0].name;
                var fileSize = document.querySelector('#resume_add_input').files[0].size / 1024 / 1024;
                var fileType = document.querySelector('#resume_add_input').files[0].type;
            } else {
                var fileName = document.querySelector('#resume_edit_input').files[0].name;
                var fileSize = document.querySelector('#resume_edit_input').files[0].size / 1024 / 1024;
                var fileType = document.querySelector('#resume_edit_input').files[0].type;
            }
            $('.resume_selected_file_name').html(fileName);
            $('.resume_selected_file_size').html(fileSize.toFixed(4));
            $('.resume_selected_file_type').html(fileType);
            if (input.files && input.files[0]) {
                console.log(input.className)
                var reader = new FileReader();
                reader.onload = function(e) {
                    if (input.className === 'profile-file-upload-input') {
                        $('.profile-image-upload-wrap').hide();
                        $('.profile-file-upload-image').attr('src', e.target.result);
                        $('.profile-file-upload-content').show();
                        // $('.image-title').html(input.files[0].name);
                    }
                    if (input.className === 'banner-file-upload-input') {
                        $('.banner-image-upload-wrap').hide();
                        $('.banner-file-upload-image').attr('src', e.target.result);
                        $('.banner-file-upload-content').show();
                        // $('.image-title').html(input.files[0].name);
                    }
                    if (input.className === 'resume-file-upload-input') {
                        $('.cv-image-upload-wrap').hide();
                        $('.resume-file-upload-content.none').show();
                    }
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                $('.profile-remove-image').on('click', function() {
                    // console.log(this.className)
                    $('.profile-file-upload-input').replaceWith($('.profile-file-upload-input').clone());
                    $('.profile-file-upload-content').hide();
                    $('.profile-file-upload-image').attr('src', '');
                    $('.profile-image-upload-wrap').show();
                })
                $('.banner-remove-image').on('click', function() {
                    // console.log(this.className)
                    $('.banner-file-upload-input').replaceWith($('.banner-file-upload-input').clone());
                    $('.banner-file-upload-content').hide();
                    $('.banner-file-upload-image').attr('src', '');
                    $('.banner-image-upload-wrap').show();
                })
            }
        }
        setTimeout(function() {

        }, 10000);
    </script>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://jobpilot.lomeyolabs.com/backend/js/autocomplete.min.js"></script>
    <script>
        new Autocomplete("leaflet_search", {
            // default selects the first item in
            // the list of results
            selectFirst: true,

            // The number of characters entered should start searching
            howManyCharacters: 3,

            // onSearch
            onSearch: ({
                currentValue
            }) => {
                // You can also use static files
                // const api = '../static/search.json'
                const countryName = "";
                if (countryName) {
                    var api =
                        `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&city=${encodeURI(currentValue)}&country=${encodeURI(countryName)}`;
                } else {
                    var api =
                        `https://nominatim.openstreetmap.org/search?format=geojson&limit=5&city=${encodeURI(currentValue)}`;
                }

                return new Promise((resolve) => {
                    fetch(api)
                        .then((response) => response.json())
                        .then((data) => {
                            resolve(data.features);
                        })
                        .catch((error) => {
                            console.error(error);
                        });
                });
            },
            // nominatim GeoJSON format parse this part turns json into the list of
            // records that appears when you type.
            onResults: ({
                currentValue,
                matches,
                template
            }) => {

                const regex = new RegExp(currentValue, "gi");

                // if the result returns 0 we
                // show the no results element
                return matches === 0 ?
                    template :
                    matches
                    .map((element) => {

                        let full_address = element.properties.display_name;

                        let split_string = full_address.split(', ');
                        let country = split_string.pop();

                        return `
               <li class="loupe">
                   <p>
                    ${element.properties.name} , ${country}
                   </p>
               </li> `;
                    })
                    .join("");
            },

            // we add an action to enter or click
            onSubmit: ({
                object
            }) => {
                // console.log(object)
                // remove all layers from the map
                leaflet_map.eachLayer(function(layer) {
                    if (!!layer.toGeoJSON) {
                        leaflet_map.removeLayer(layer);
                    }
                });

                const {
                    display_name
                } = object.properties;
                const [lng, lat] = object.geometry.coordinates;

                //    const marker = L.marker([lat, lng], {
                //         title: display_name,
                //    });

                //    marker.addTo(leaflet_map).bindPopup(display_name);

                leaflet_map.setView([lat, lng], 8);
            },

            // get index and data from li element after
            // hovering over li with the mouse or using
            // arrow keys ↓ | ↑
            onSelectedItem: ({
                index,
                element,
                object
            }) => {

                //    console.log(object.properties)
                //    console.log(object.geometry.coordinates)
                let leaf_lon = object.geometry.coordinates[0]
                let leaf_lat = object.geometry.coordinates[1]

                let full_address = object.properties.display_name;
                let city = object.properties.name;

                $('.leaf_lon').val(leaf_lon);
                $('.leaf_lat').val(leaf_lat);

                let split_string = full_address.split(', ');
                let country = split_string.pop();

                $('.city').val(city);
                $('.country').val(country);

                // var form = new FormData();
                // form.append('lat', leaf_lat);
                // form.append('lng', leaf_lon);
                // form.append('country', country);
                // form.append('place', full_address);

                // axios.post('/set/session', form)
                // .then((res) => {
                //     // alert()
                //     // console.log(res.data);
                //     // toastr.success("Location Saved", 'Success!');
                // })
                // .catch((e) => {
                //     toastr.error("Something Wrong", 'Error!');
                // });
            },

            // the method presents no results element
            noResults: ({
                    currentValue,
                    template
                }) =>
                template(`<li>No results found: "${currentValue}"</li>`),
        });
    </script>
    <script>
        var oldlat = 23.757853442383;
        var oldlng = 90.411270491741;

        // Map preview
        var element = document.getElementById('leaflet-map');

        // Height has to be set. You can do this in CSS too.
        element.style = 'height:300px;';

        // Create Leaflet map on map element.
        var leaflet_map = L.map(element);

        // Add OSM tile layer to the Leaflet map.
        L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(leaflet_map);

        // Target's GPS coordinates.
        var target = L.latLng(oldlat, oldlng);

        // Set map's center to target with zoom 14.
        const zoom = 7;
        leaflet_map.setView(target, zoom);

        // Place a marker on the same location.
        var markers = new L.FeatureGroup();
        var marker = L.marker(target, {
            draggable: true
        });

        function handleMapClick(lat, lng) {
            $('.location_footer').removeClass('d-none');
            $('.loader_position').removeClass('d-none');
            $('.location_secion').addClass('d-none');

            leaflet_map.panTo(new L.LatLng(lat, lng));

            // Clear old markers
            markers.clearLayers();

            var marker = L.marker([lat, lng], {
                draggable: true
            });

            // Add marker to the map after a slight delay
            setTimeout(() => {
                marker.addTo(markers);
                markers.addTo(leaflet_map);
            }, 100);

            // Fetch location details from OpenStreetMap's Nominatim API
            axios.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`)
                .then(function(response) {
                    // Extract address components or fallback options
                    var data = response.data;
                    var country = data?.address?.country ? data?.address?.country : 'Country is not selected';
                    var region = data?.address?.state ? data?.address?.state : data?.address?.province ? data?.address
                        ?.province : data?.address?.village ? data?.address?.village : data?.address?.country ? data
                        ?.address?.country : "Division is not selected";
                    var district = data?.address?.state_district ? data?.address?.state_district : data?.address
                        ?.province ? data?.address?.province : data?.address?.county ? data?.address?.county : data
                        ?.address?.municipality ? data?.address?.municipality : data?.address?.city ? data?.address
                        ?.city : data?.address?.region ? data?.address?.region : data?.address?.town ? data?.address
                        ?.town : data?.address?.village ? data?.address?.village : data?.address?.state ? data?.address
                        ?.state : data?.address?.country ? data?.address?.country : "District is not selected";
                    var place = data?.address?.city ? data?.address?.city : "";

                    // Create a form data object to store location details
                    var form = new FormData();
                    form.append('lat', lat);
                    form.append('lng', lng);
                    form.append('country', country);
                    form.append('region', region);
                    form.append('district', district);
                    form.append('place', place);
                    form.append('exact_location', district + "," + region + "," + country);

                    // Store location details in a session
                    setLocationSession(form);

                    // Displayed location information
                    $('.location_country').text(country);
                    $('.location_full_address').text(district + "," + region);
                    $('.loader_position').addClass('d-none');
                    $('.location_secion').removeClass('d-none');
                    $('.location_footer').removeClass('d-none');
                })
                .catch(function(error) {
                    // Display an error message if the API request fails
                    toastr.error('Something Went Wrong', 'Error');
                    console.log(error);
                });
        }

        function updateMapWithCity(cityName) {
            axios.get(`https://nominatim.openstreetmap.org/search?format=json&q=${cityName}`)
                .then(function(response) {
                    if (response.data.length == 1) {
                        const firstResult = response.data[0];
                        const lat = parseFloat(firstResult.lat);
                        const lng = parseFloat(firstResult.lon);
                        handleMapClick(lat, lng);
                    } else {
                        const firstResult = response.data[1];
                        const lat = parseFloat(firstResult.lat);
                        const lng = parseFloat(firstResult.lon);
                        handleMapClick(lat, lng);
                    }
                })
                .catch(function(error) {
                    toastr.error('Something Went Wrong', 'Error');
                    console.log(error);
                });
        }

        // Event listener for search input
        const searchInput = document.getElementById('leaflet_search');
        if (searchInput) {
            searchInput.addEventListener('change', function() {
                const cityName = this.value;
                if (cityName) {

                    updateMapWithCity(cityName);
                }
            });
        }

        // Check if old latitude and longitude values exist
        if (oldlat && oldlng) {
            handleMapClick(oldlat, oldlng);
        }

        // Event listener for when the map is clicked
        leaflet_map.on('click', function(e) {
            let lat = e.latlng.lat;
            let lng = e.latlng.lng;
            handleMapClick(lat, lng);
        });

        // Add the marker to the markers layer
        marker.addTo(markers);

        // Add the markers layer to the leaflet map
        markers.addTo(leaflet_map);


        // marker drugEnd
        marker.on("dragend", function(e) {
            $('.location_footer').removeClass('d-none');
            $('.loader_position').removeClass('d-none');
            $('.location_secion').addClass('d-none');

            var marker = e.target;
            var position = marker.getLatLng();
            leaflet_map.panTo(new L.LatLng(position.lat, position.lng));
            // call api to get address from lat & lng
            axios.get(
                `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${position.lat}&lon=${ position.lng}`
            ).then(function(response) {
                var data = response.data;
                var country = data?.address?.country ? data?.address?.country : 'Country is not selected';
                var region = data?.address?.state ? data?.address?.state : data?.address?.province ? data
                    ?.address?.province : data?.address?.village ? data?.address?.village : data?.address
                    ?.country ? data?.address?.country : "Division is not selected";
                var district = data?.address?.state_district ? data?.address?.state_district : data?.address
                    ?.province ? data?.address?.province : data?.address?.county ? data?.address?.county :
                    data?.address?.municipality ? data?.address?.municipality : data?.address?.city ? data
                    ?.address?.city : data?.address?.region ? data?.address?.region : data?.address?.town ?
                    data?.address?.town : data?.address?.village ? data?.address?.village : data?.address
                    ?.state ? data?.address?.state : data?.address?.country ? data?.address?.country :
                    "District is not selected";
                var place = data?.address?.city ? data?.address?.city : "";

                /// Create a form data object to store location details
                var form = new FormData();
                form.append('lat', position.lat);
                form.append('lng', position.lng);

                form.append('country', country);
                form.append('region', region);
                form.append('district', district);
                form.append('place', place);
                form.append('exact_location', district + "," + region + "," + country);

                // Store location details in a session
                setLocationSession(form);

                //Displayed location information
                $('.location_country').text(country);
                $('.location_full_address').text(district + "," + region);
                $('.loader_position').addClass('d-none');
                $('.location_secion').removeClass('d-none');
                $('.location_footer').removeClass('d-none');
            }).catch(function(error) {
                // Display an error message if the API request fails
                toastr.error('Something Went Wrong', 'Error');
                console.log(error);
            });
        });
        // marker drugEnd END

        // map click set marker
        leaflet_map.on('click', function(e) {
            $('.location_footer').removeClass('d-none');
            $('.loader_position').removeClass('d-none');
            $('.location_secion').addClass('d-none');

            let lat = e.latlng.lat;
            let lng = e.latlng.lng;
            leaflet_map.panTo(new L.LatLng(lat, lng));

            markers.clearLayers(); //c clear old merkers

            // re init marker
            var marker = L.marker([lat, lng], {
                draggable: true
            });
            setTimeout(() => {
                marker.addTo(markers);
                markers.addTo(leaflet_map);
            }, 100);
            //  re init marker END

            // call api to get address from lat & lng
            axios.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`).then(
                function(response) {
                    // Extract address components or fallback options
                    var data = response.data;
                    var country = data?.address?.country ? data?.address?.country : 'Country is not selected';
                    var region = data?.address?.state ? data?.address?.state : data?.address?.province ? data
                        ?.address?.province : data?.address?.village ? data?.address?.village : data?.address
                        ?.country ? data?.address?.country : "Division is not selected";
                    var district = data?.address?.state_district ? data?.address?.state_district : data?.address
                        ?.province ? data?.address?.province : data?.address?.county ? data?.address?.county :
                        data?.address?.municipality ? data?.address?.municipality : data?.address?.city ? data
                        ?.address?.city : data?.address?.region ? data?.address?.region : data?.address?.town ?
                        data?.address?.town : data?.address?.village ? data?.address?.village : data?.address
                        ?.state ? data?.address?.state : data?.address?.country ? data?.address?.country :
                        "District is not selected";
                    var place = data?.address?.city ? data?.address?.city : "";
                    // Create a form data object to store location details
                    var form = new FormData();
                    form.append('lat', lat);
                    form.append('lng', lng);

                    form.append('country', country);
                    form.append('region', region);
                    form.append('district', district);
                    form.append('place', place);
                    form.append('exact_location', district + "," + region + "," + country);

                    // Store location details in a session
                    setLocationSession(form);

                    // Update the displayed location information
                    $('.location_country').text(country);
                    $('.location_full_address').text(district + "," + region);
                    $('.loader_position').addClass('d-none');
                    $('.location_secion').removeClass('d-none');
                    $('.location_footer').removeClass('d-none');
                }).catch(function(error) {

                // Display an error message if the API request fails
                toastr.error('Something Went Wrong', 'Error');
                console.log(error);
            });
        });
        // map click set marker  END
    </script>

    <script>
        $('#pills-setting-tab').on('click', function() {
            setTimeout(() => {
                map.resize();
                leaflet_map.invalidateSize(true);
            }, 200);
        })
    </script>
    <script>
        $(".new-select").select2({ // minimumResultsForSearch: Infinity,
        });
    </script>
    <script type="text/javascript">
        // feature field
        function add_features_field() {
            $("#multiple_feature_part").append(`
        <div class="col-12 custom-select-padding">
            <div class="d-flex tw-items-center">
                <div class="d-flex mborder">
                    <div class="position-relative">
                        <select
                            class="w-100-p border-0 rt-selectactive-2 form-control" name="social_media[]">
                            <option value="" class="d-none" disabled selected>Select One</option>
                            <option value="facebook">Facebook</option>
                            <option value="twitter">Twitter</option>
                            <option value="instagram">Instagram</option>
                            <option value="youtube">Youtube</option>
                            <option value="linkedin">Linkedin</option>
                            <option value="pinterest">Pinterest</option>
                            <option value="reddit">Reddit</option>
                            <option value="github">GitHub</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="w-100">
                        <input class="border-0" type="url" name="url[]" id="" placeholder="Profile Link / URL...">
                    </div>
                </div>
                <div class="tw-ms-2">
                    <button class="tw-w-12 tw-h-12 tw-border-0 tw-rounded tw-bg-[#F1F2F4] tw-inline-flex tw-justify-center tw-items-center" type="button" id="remove_item">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#18191C" stroke-width="1.5" stroke-miterlimit="10"/>
                            <path d="M15 9L9 15" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 15L9 9" stroke="#18191C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    `);
            $(".rt-selectactive-2").select2({ // minimumResultsForSearch: Infinity,
            });
        }

        $(document).on("click", "#remove_item", function() {
            $(this).parent().parent().parent('div').remove();
        });
    </script>

    <script>
        // toast config
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "hideMethod": "fadeOut"
        }

        $('.login_required').on('click', function(event) {
            event.preventDefault();

            Swal.fire({
                title: "Unauthenticated",
                text: "Performing this action requires logging into your account. Would you like to log in now",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "Yes, I want to login",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.value) {
                    window.location.href = '/login';
                }
            })
        });
        $('.no_permission').on('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Unauthorized Access",
                text: "You don't have permission to perform this action",
                icon: "warning",
                dangerMode: true,
            })
        });

        $('[data-toggle="tooltip"]').tooltip();

        $(".notification-icon a").off("click").on('click', function(e) {
            e.stopImmediatePropagation();
            return true;
        });
    </script>

    <script>
        // read notification by ajax
        function ReadNotification() {
            $.ajax({
                url: "https://jobpilot.lomeyolabs.com/user/notification/read",
                type: "POST",
                data: {
                    _token: 'K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n'
                },
                dataType: 'json',
                success: function(data) {
                    $('#unNotifications').hide();
                }
            });
        }
        // read single notification by ajax
        function readSingleNotification(url, id) {
            $.ajax({
                url: "https://jobpilot.lomeyolabs.com/markasread/single/notification",
                type: "POST",
                data: {
                    id: id,
                    _token: 'K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n'
                },
                dataType: 'json',
                success: function(data) {
                    window.location.href = url;
                }
            });
        }
        // Call ckeditor
        if (document.querySelector('#image_ckeditor')) {
            ClassicEditor.create(document.querySelector('#image_ckeditor'), {
                    ckfinder: {
                        uploadUrl: "https://jobpilot.lomeyolabs.com/ckeditor/upload?_token=K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                    },
                })
                .catch(error => {
                    console.error(error);
                });
        }
        // Call ckeditor
        if (document.querySelector('#image_ckeditor_2')) {
            ClassicEditor.create(document.querySelector('#image_ckeditor_2'), {
                    ckfinder: {
                        uploadUrl: "https://jobpilot.lomeyolabs.com/ckeditor/upload?_token=K8z2hj7bpCwTKl9hiBJCeNeQ0v1LrASZbFhyGe4n"
                    },
                })
                .catch(error => {
                    console.error(error);
                });
        }
        // Call ckeditor
        if (document.querySelector('#editor2')) {

            ClassicEditor.create(document.querySelector('#editor2'))
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '500px';
                })
                .catch(error => {
                    console.error(error);
                });
        }
        // Call ckeditor
        if (document.querySelector('#editor3')) {
            ClassicEditor.create(document.querySelector('#editor3'))
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '500px';
                })
                .catch(error => {
                    console.error(error);
                });
        }
        // Call ckeditor
        if (document.querySelector('#editor4')) {
            ClassicEditor.create(document.querySelector('#editor4'))
                .then(editor => {
                    editor.ui.view.editable.element.style.height = '500px';
                })
                .catch(error => {
                    console.error(error);
                });
        }

        function setLocationSession(form) {
            axios.post('/set/session', form)
                .then((res) => {
                    // console.log(res.data);
                    // toastr.success("Location Saved", 'Success!');
                })
                .catch((e) => {
                    toastr.error("Something Wrong", 'Error!');
                });
        }
        // about page testimonial
        if ($(".testimonal2-active").length > 0) {
            $(".testimonal2-active").slick({
                slidesToShow: 1,
                infinite: true,
                slidesToScroll: 1,
                dots: true,
                fade: false,
                prevArrow: $(".slickprev3"),
                nextArrow: $(".slicknext3")
            });
        }
        // tab switch style
        var style = localStorage.getItem("candidate_style") == null ? 'box' : localStorage.getItem("candidate_style");
        setStyle(style);

        function styleSwitch(style) {
            localStorage.setItem("candidate_style", style);
            setStyle(style);
        }

        function setStyle(style) {
            if (style == 'box') {
                $('#nav-home-tab').addClass('active');
                $('#nav-home').addClass('show active');
                $('#nav-profile-tab').removeClass('active');
                $('#nav-profile').removeClass('show active');
            } else {
                $('#nav-home-tab').removeClass('active');
                $('#nav-home').removeClass('show active');
                $('#nav-profile-tab').addClass('active');
                $('#nav-profile').addClass('show active');
            }
        }

        // category wise search
        $(document).ready(function() {
            const form = $("#job_search_form");
            const radioButtons = form.find("input[aria-data-id='category']");

            // Store the initial action attribute value
            const defaultAction = form.attr("action");

            // Function to update the form action based on the selected radio button
            function updateFormAction(selectedRadioValue) {
                const dataSlug = selectedRadioValue || '';
                const actionUrl = selectedRadioValue ?
                    "https://jobpilot.lomeyolabs.com/jobs/category/:slug".replace(':slug', dataSlug) :
                    defaultAction;
                form.attr("action", actionUrl);
            }

            // Initialize form action on page load
            updateFormAction("");

            // Update selected radio value when radio button changes
            radioButtons.on("change", function() {
                const selectedRadioValue = $(this).data('id');
                updateFormAction(selectedRadioValue);
            });
        });
    </script>
    <link rel="stylesheet" href="https://jobpilot.lomeyolabs.com/frontend\plugins\cookieconsent\cookieconsent.css"
        media="print" onload="this.media='all'">
    <script async src="https://jobpilot.lomeyolabs.com/frontend/plugins/cookieconsent/cookieconsent.js"></script>
    <script>
        window.addEventListener('load', function() {
            // obtain plugin
            var cc = initCookieConsent();

            // run plugin with your configuration
            cc.run({
                current_lang: '',
                autoclear_cookies: true, // default: false
                page_scripts: true, // default: false
                force_consent: false, // default: false
                cookie_name: 'gdpr_cookie', // default: 'cc_cookie'
                cookie_expiration: 30, // default: 182 (days)
                autorun: true, // default: true

                onFirstAction: function(user_preferences, cookie) {
                    // callback triggered only once on the first accept/reject action
                },

                onAccept: function(cookie) {
                    // callback triggered on the first accept/reject action, and after each page load
                },

                onChange: function(cookie, changed_categories) {
                    // callback triggered when user changes preferences after consent has already been given
                },

                gui_options: {
                    consent_modal: {
                        layout: 'cloud', // box/cloud/bar
                        position: 'bottom right', // bottom/middle/top + left/right/center
                        transition: 'slide', // zoom/slide
                        swap_buttons: false // enable to invert buttons
                    },
                    settings_modal: {
                        layout: 'box', // box/bar
                        position: 'left', // left/right
                        transition: 'slide' // zoom/slide
                    }
                },

                languages: {
                    'en': {
                        consent_modal: {
                            title: "We use cookies!",
                            description: "We use cookies to provide our services and for analytics and marketing. To find out more about our use of cookies, please see our Privacy Policy. By continuing to browse our website, you agree to our use of cookies.",
                            primary_btn: {
                                text: "Allow all Cookies",
                                role: 'accept_all'
                            },
                            secondary_btn: {
                                text: "Reject all Cookies",
                                role: 'accept_necessary'
                            }
                        },
                        settings_modal: {
                            title: 'Cookie preferences',
                            save_settings_btn: 'Save settings',
                            accept_all_btn: 'Accept all',
                            reject_all_btn: 'Reject all',
                            close_btn_label: 'Close',
                            cookie_table_headers: [{
                                    col1: 'Name'
                                },
                                {
                                    col2: 'Domain'
                                },
                                {
                                    col3: 'Expiration'
                                },
                                {
                                    col4: 'Description'
                                }
                            ],
                            blocks: [{
                                title: 'Cookie usage 📢',
                                description: 'I use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href="#" class="cc-link">privacy policy</a>.'
                            }, {
                                title: 'Strictly necessary cookies',
                                description: 'These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly',
                                toggle: {
                                    value: 'necessary',
                                    enabled: true,
                                    readonly: true // cookie categories with readonly=true are all treated as "necessary cookies"
                                }
                            }, {
                                title: 'Performance and Analytics cookies',
                                description: 'These cookies allow the website to remember the choices you have made in the past',
                                toggle: {
                                    value: 'analytics', // your cookie category
                                    enabled: false,
                                    readonly: false
                                },
                                cookie_table: [ // list of all expected cookies
                                    {
                                        col1: '^_ga', // match all cookies starting with "_ga"
                                        col2: 'google.com',
                                        col3: '2 years',
                                        col4: 'description ...',
                                        is_regex: true
                                    },
                                    {
                                        col1: '_gid',
                                        col2: 'google.com',
                                        col3: '1 day',
                                        col4: 'description ...',
                                    }
                                ]
                            }, {
                                title: 'Advertisement and Targeting cookies',
                                description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you',
                                toggle: {
                                    value: 'targeting',
                                    enabled: false,
                                    readonly: false
                                }
                            }, {
                                title: 'More information',
                                description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="#yourcontactpage">contact us</a>.',
                            }]
                        }
                    }
                }
            });
        });
    </script>

    <script>
        // Hide the preloader when loaded
        var el = document.querySelector(".preloader");
        el && window.addEventListener("load", () => el.style.display = "none");
    </script>

    <style>
        .floating-btn {
            box-shadow: 0px 2px 4px 0px #1C21260F;
        }

        .floating-btn button {
            border: 1px solid var(--gray-100);
        }

        .floating-btn a {
            visibility: hidden;
            opacity: 0;
            transform: translatex(-10px);
            transition: all 0.4s ease-in-out;
            white-space: nowrap;
            position: absolute;
            right: calc(100% + 10px);
            top: 5px;
            background: white;
            color: black;
            font-size: 14px;
            line-height: 20px;
            padding: 6px 10px;
            border: 1px solid var(--gray-100);
            border-radius: 8px;
            z-index: 999;
            box-shadow: 0px 2px 4px 0px #1C21260F;
        }

        .floating-btn:hover a {
            transform: translatex(0);
            visibility: visible;
            opacity: 1;
        }

        .wave-animation {
            animation-name: wave-animation !important;
            animation-duration: 3.5s !important;
            animation-iteration-count: infinite !important;
            transform-origin: 70% 70% !important;
        }

        .wave-animation:hover {
            animation-name: unset !important
        }

        @keyframes wave-animation {
            0% {
                transform: rotate(0)
            }

            10% {
                transform: rotate(12deg)
            }

            20% {
                transform: rotate(-6deg)
            }

            30% {
                transform: rotate(12deg)
            }

            40% {
                transform: rotate(-2deg)
            }

            50% {
                transform: rotate(8deg)
            }

            60% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(0)
            }
        }

        @keyframes rotation {
            from {
                -webkit-transform: rotate(0deg);
            }

            to {
                -webkit-transform: rotate(359deg);
            }
        }

        .loading {
            animation: rotation 5s infinite linear;
        }

        /*=== Media Query ===*/
        .panel-group:last-child {
            margin-bottom: 0;
        }

        .panel-group .panel-title {
            position: relative;
            margin-bottom: 12px;
            z-index: 0;
        }

        .panel-group .panel-title .title {
            display: inline-block;
            padding-right: 10px;
            color: #333;
            font-size: 14px;
            font-weight: 700;
            background: #fff;
            padding-bottom: 0;
            margin-bottom: 0;
            border-bottom: none;
            margin-top: 0;
        }

        .panel-group .panel-title .title::after {
            position: absolute;
            content: "";
            left: 0;
            top: 10px;
            height: 1px;
            width: 100%;
            background: #ebebeb;
            z-index: -1;
        }

        .panel-group .color-skin {
            display: flex;
            flex-wrap: wrap;
            margin: -7px -7px 0px;
            padding: 0;
            list-style: none;
        }

        .panel-group .color-skin .color-item {
            display: inline-block;
            position: relative;
            flex: 1 0 calc(15% - 14px);
            margin: 7px;
            border-radius: 2px;
            cursor: pointer;
        }

        .panel-group .color-skin .color-item::before {
            content: "";
            display: block;
            padding-bottom: 100%;
        }

        .panel-group .color-skin .color-item::after {
            position: absolute;
            content: "";
            left: 50%;
            top: calc(50% - 5px);
            height: 7px;
            width: 12px;
            border: 2px solid #fff;
            border-top: none;
            border-right: none;
            opacity: 0;
            visibility: hidden;
            transform: translateX(-50%) rotate(-45deg);
        }

        .panel-group .color-skin .color-item.active::after {
            opacity: 1;
            visibility: visible;
        }

        .buttons button:focus {
            box-shadow: none;
            outline: none;
        }

        .buttons {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
    <!-- Tidio Chat Widget    -->
    <script src="//code.tidio.co/nupcnf4jzm9la8auahqytgbc2iepfewv.js" async></script>
    <!-- End Tidio Chat Widget -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const radioButtons = document.querySelectorAll('input[type="radio"][name="current_theme"]');
            radioButtons.forEach(function(radio) {
                radio.addEventListener("click", function() {
                    this.closest("form").submit();
                });
            });
        });
    </script>
    <script src="https://jobpilot.lomeyolabs.com/sw.js"></script>
    <script>
        if (!navigator.serviceWorker) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg);
            });
        }

        let deferredPrompt;
        window.addEventListener('beforeinstallprompt', (e) => {
            $('#installApp').removeClass('d-none');
            deferredPrompt = e;
        });

        const installApp = document.getElementById('installApp');
        if (installApp) {
            installApp.addEventListener('click', async () => {
                if (deferredPrompt !== null) {
                    deferredPrompt.prompt();
                    const {
                        outcome
                    } = await deferredPrompt.userChoice;
                    if (outcome === 'accepted') {
                        deferredPrompt = null;
                    }
                }
            });
        }
    </script>
