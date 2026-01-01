@extends('layouts.master')
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Main Layout */
        .dashboard-layout {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Main Content */
        .dashboard-content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }

        .content-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
        }

        .content-header h1 {
            font-size: 24px;
            color: #1e293b;
            font-weight: 700;
        }

        /* Horizontal Tabs */
        .horizontal-tabs {
            display: flex;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .tab-item {
            flex: 1;
            padding: 20px 0;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 600;
            color: #666;
            border-bottom: 3px solid transparent;
        }

        .tab-item:hover {
            background-color: #f8f9fa;
            color: #2563eb;
        }

        .tab-item.active {
            color: #2563eb;
            border-bottom: 3px solid #2563eb;
            background-color: #f0f7ff;
        }

        .tab-icon {
            font-size: 18px;
        }

        .tab-text {
            font-size: 16px;
        }

        /* Settings Content */
        .settings-sections-container {
            min-height: 500px;
        }

        .settings-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .settings-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #2563eb;
        }

        /* Form Styles */
        .form-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #e2e8f0;
            margin-bottom: 25px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-bottom: 30px;
        }

        .form-grid-three {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 24px;

        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
            display: flex;
            align-items: center;
        }

        .form-group span.required {
            color: #dc2626;
            margin-left: 4px;
        }

        .form-control {
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 16px;
            color: #333;
            transition: all 0.3s;
            width: 100%;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-control.select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            padding-right: 40px;
        }

        .company-vision {
            height: 150px;
            resize: vertical;
        }

        /* Image Upload Section */
        .image-upload-section {
            display: grid;
            /* grid-template-columns: 1fr 2fr; */
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .upload-container {
            border: 2px dashed #d1d5db;
            border-radius: 10px;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .upload-container:hover {
            border-color: #2563eb;
            background-color: #f0f7ff;
        }

        .upload-container i {
            font-size: 40px;
            color: #94a3b8;
            margin-bottom: 20px;
        }

        .upload-container p {
            color: #1a1a1a;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .upload-container span {
            font-size: 14px;
            color: #666;
        }

        /* Current Image Preview */
        .current-image {
            margin-top: 20px;
            text-align: center;
        }

        .image-preview {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            margin-bottom: 10px;
            object-fit: cover;
            border: 1px solid #e2e8f0;
        }

        .image-placeholder {
            width: 100px;
            height: 100px;
            background: #e2e8f0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            color: #64748b;
            font-weight: 600;
            font-size: 12px;
        }

        .banner-placeholder {
            width: 100%;
            height: 100px;
            background: linear-gradient(to right, #2563eb, #3b82f6);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .image-size {
            font-size: 12px;
            color: #64748b;
            margin-top: 5px;
        }

        /* Social Media Styles */
        .social-media-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }

        .social-media-item {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 22px;
            flex-shrink: 0;
        }

        .facebook-bg {
            background-color: #1877F2;
        }

        .twitter-bg {
            background-color: #1DA1F2;
        }

        .linkedin-bg {
            background-color: #0077B5;
        }

        .social-input {
            flex: 1;
        }

        .add-social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px;
            border: 2px dashed #d1d5db;
            border-radius: 10px;
            color: #666;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
        }

        .add-social-link:hover {
            border-color: #2563eb;
            color: #2563eb;
            background-color: #f0f7ff;
        }

        /* Account Settings */
        .account-section {
            margin-bottom: 40px;
        }

        .account-section h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .map-container {
            height: 300px;
            background-color: #f1f5f9;
            border-radius: 10px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            display: block;
        }

        #map {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #666;
            cursor: pointer;
        }

        .map-placeholder i {
            font-size: 60px;
            margin-bottom: 20px;
            color: #94a3b8;
        }

        .location-info {
            background-color: #f8fafc;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #e2e8f0;
            margin-bottom: 20px;
        }

        .location-info p {
            margin-bottom: 8px;
            color: #666;
        }

        .location-info p strong {
            color: #1a1a1a;
        }

        .profile-link {
            color: #2563eb;
            text-decoration: none;
            display: inline-block;
            margin-top: 8px;
            font-weight: 500;
        }

        .profile-link:hover {
            text-decoration: underline;
        }

        /* Change Password */
        .change-password {
            background-color: #f8fafc;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }

        /* Close Account */
        .close-account {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 30px;
        }

        .close-account p {
            margin-bottom: 20px;
            color: #666;
            line-height: 1.6;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .checkbox-group input {
            margin-right: 12px;
            margin-top: 4px;
            width: 18px;
            height: 18px;
        }

        .danger-btn {
            background-color: #dc2626;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .danger-btn:hover {
            background-color: #b91c1c;
        }

        /* Save Changes Button */
        .save-changes-btn {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 30px auto 0;
            display: block;
        }

        .save-changes-btn:hover {
            background: #1d4ed8;
        }

        /* Checkmark for active tab */
        .tab-checkmark {
            display: none;
        }

        .tab-item.active .tab-checkmark {
            display: inline-block;
            color: #10b981;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .horizontal-tabs {
                flex-direction: column;
            }

            .tab-item {
                padding: 16px 0;
                justify-content: flex-start;
                padding-left: 20px;
                border-bottom: 1px solid #eee;
                border-right: none;
                border-left: 3px solid transparent;
            }

            .tab-item.active {
                border-left: 3px solid #2563eb;
                border-bottom: 1px solid #eee;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-grid-three {
                grid-template-columns: 1fr;
            }

            .image-upload-section {
                grid-template-columns: 1fr;
            }

            .dashboard-content {
                padding: 20px;
            }
        }

        /* About Us Text Editor */
        .text-editor-container {
            background: white;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            overflow: hidden;
        }

        .editor-toolbar {
            display: flex;
            background: #f1f5f9;
            padding: 10px 15px;
            border-bottom: 1px solid #cbd5e1;
            flex-wrap: wrap;
            gap: 5px;
        }

        .editor-btn {
            background: white;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #475569;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .editor-btn:hover {
            background: #f8fafc;
            border-color: #94a3b8;
        }

        .editor-btn.active {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }

        .editor-textarea {
            width: 100%;
            min-height: 200px;
            padding: 20px;
            border: none;
            outline: none;
            font-size: 15px;
            line-height: 1.6;
            color: #333;
            resize: vertical;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .character-count {
            text-align: right;
            padding: 10px 15px;
            color: #64748b;
            font-size: 14px;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
        }
    </style>

    <div class="container">
        <!-- Dashboard Layout -->
        <div class="dashboard-layout">
            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="dashboard-content">
                <div class="content-header">
                    <h1>Settings</h1>
                </div>

                <!-- Horizontal Tabs -->
                <div class="horizontal-tabs">
                    <div class="tab-item active" data-section="company-info">
                        <i class="fas fa-building tab-icon"></i>
                        <span class="tab-text">Company Info</span>
                        <i class="fas fa-check-circle tab-checkmark"></i>
                    </div>
                    <div class="tab-item" data-section="founding-info">
                        <i class="fas fa-info-circle tab-icon"></i>
                        <span class="tab-text">Founding Info</span>
                        <i class="fas fa-check-circle tab-checkmark"></i>
                    </div>
                    <div class="tab-item" data-section="social-media">
                        <i class="fas fa-share-alt tab-icon"></i>
                        <span class="tab-text">Social Media Profile</span>
                        <i class="fas fa-check-circle tab-checkmark"></i>
                    </div>
                    <div class="tab-item" data-section="account-setting">
                        <i class="fas fa-cog tab-icon"></i>
                        <span class="tab-text">Account Setting</span>
                        <i class="fas fa-check-circle tab-checkmark"></i>
                    </div>
                </div>

                <!-- Settings Sections Container -->
                <div class="settings-sections-container">
                    <!-- Company Info Section -->
                    <div class="settings-section active" id="company-info">
                        <h2 class="section-title">
                            <i class="fas fa-building"></i>
                            Company Info
                        </h2>

                        <div class="form-section">
                            <div class="image-upload-section">
                                <div class="upload-container" id="logoUpload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>Upload Logo *</p>
                                    <span>Image Size: 69x68</span>
                                    <div class="current-image">
                                        <div class="image-placeholder">LOGO</div>
                                        <div class="image-size">No image uploaded</div>
                                    </div>
                                </div>

                                <div class="upload-container" id="bannerUpload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>Banner Image *</p>
                                    <span>Image Size: 1920x312</span>
                                    <div class="current-image">
                                        <div class="banner-placeholder">BANNER</div>
                                        <div class="image-size">No image uploaded</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-grid">
                                <div class="form-group">
                                    <label>Company Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="Templatecookie">
                                </div>

                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" value="www.templatecookie.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="form-group full-width">
                                <label>About Us</label>
                                <div class="text-editor-container">
                                    <div class="editor-toolbar">
                                        <button type="button" class="editor-btn" title="Paragraph">P</button>
                                        <button type="button" class="editor-btn" title="Bold"><b>B</b></button>
                                        <button type="button" class="editor-btn" title="Italic"><i>I</i></button>
                                        <button type="button" class="editor-btn" title="Ordered List">O</button>
                                        <button type="button" class="editor-btn" title="Unordered List">::</button>
                                        <button type="button" class="editor-btn" title="Insert Image"><i
                                                class="fas fa-image"></i></button>
                                        <button type="button" class="editor-btn" title="Insert Link"><i
                                                class="fas fa-link"></i></button>
                                        <button type="button" class="editor-btn" title="Align Left"><i
                                                class="fas fa-align-left"></i></button>
                                        <button type="button" class="editor-btn" title="Align Center"><i
                                                class="fas fa-align-center"></i></button>
                                        <button type="button" class="editor-btn" title="Align Right"><i
                                                class="fas fa-align-right"></i></button>
                                        <button type="button" class="editor-btn" title="Justify"><i
                                                class="fas fa-align-justify"></i></button>
                                    </div>

                                    <textarea class="editor-textarea"
                                        id="aboutUsText">Templatecookie is a team of developers working on building quality templates and scripts! We are a team of 12+ designer and developers with 3+ years of working experiences! We have experts in React Js, Vue js, Laravel, PHP, MySQL, Bootstrap, HTML, CSS, SCSS, Tailwind CSS, REST API & React Native!</textarea>

                                    <div class="character-count">
                                        <span id="charCount">0</span> characters
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="save-changes-btn" id="save-company-info">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>

                    <!-- Founding Info Section -->
                    <div class="settings-section" id="founding-info">
                        <h2 class="section-title">
                            <i class="fas fa-info-circle"></i>
                            Founding Info
                        </h2>

                        <div class="form-section">
                            <div class="form-grid-three">
                                <div class="form-group">
                                    <label for="organization-type">Organization Type <span class="required">*</span></label>
                                    <select id="organization-type" class="form-control select">
                                        <option value="semi-government" selected>Semi Government</option>
                                        <option value="private">Private</option>
                                        <option value="public">Public</option>
                                        <option value="ngo">NGO</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="industry-type">Industry Type <span class="required">*</span></label>
                                    <select id="industry-type" class="form-control select">
                                        <option value="hotel-restaurant" selected>Hotel/Restaurant</option>
                                        <option value="it">IT</option>
                                        <option value="finance">Finance</option>
                                        <option value="healthcare">Healthcare</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="team-size">Team Size</label>
                                    <select id="team-size" class="form-control select">
                                        <option value="100-200" selected>100-200 Members</option>
                                        <option value="1-10">1-10 Members</option>
                                        <option value="11-50">11-50 Members</option>
                                        <option value="51-100">51-100 Members</option>
                                        <option value="200+">200+ Members</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="establishment-year">Year of Establishment</label>
                                    <input type="date" id="establishment-year" class="form-control" placeholder="dd-mm-yyyy"
                                        value="01-01-2020">
                                </div>

                                <div class="form-group">
                                    <label for="website-url">Website URL</label>
                                    <input type="text" id="website-url" class="form-control" placeholder="Website URL"
                                        value="https://templatecookie.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-section">
                            <div class="form-group full-width">
                                <label>Company vision </label>
                                <div class="text-editor-container">
                                    <div class="editor-toolbar">
                                        <button type="button" class="editor-btn" title="Paragraph">P</button>
                                        <button type="button" class="editor-btn" title="Bold"><b>B</b></button>
                                        <button type="button" class="editor-btn" title="Italic"><i>I</i></button>
                                        <button type="button" class="editor-btn" title="Ordered List">O</button>
                                        <button type="button" class="editor-btn" title="Unordered List">::</button>
                                        <button type="button" class="editor-btn" title="Insert Image"><i
                                                class="fas fa-image"></i></button>
                                        <button type="button" class="editor-btn" title="Insert Link"><i
                                                class="fas fa-link"></i></button>
                                        <button type="button" class="editor-btn" title="Align Left"><i
                                                class="fas fa-align-left"></i></button>
                                        <button type="button" class="editor-btn" title="Align Center"><i
                                                class="fas fa-align-center"></i></button>
                                        <button type="button" class="editor-btn" title="Align Right"><i
                                                class="fas fa-align-right"></i></button>
                                        <button type="button" class="editor-btn" title="Justify"><i
                                                class="fas fa-align-justify"></i></button>
                                    </div>

                                    <textarea class="editor-textarea"
                                        id="aboutUsText">Templatecookie is a team of developers working on building quality templates and scripts! We are a team of 12+ designer and developers with 3+ years of working experiences! We have experts in React Js, Vue js, Laravel, PHP, MySQL, Bootstrap, HTML, CSS, SCSS, Tailwind CSS, REST API & React Native!</textarea>

                                    <div class="character-count">
                                        <span id="charCount">0</span> characters
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="save-changes-btn" id="save-founding-info">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>

                    <!-- Social Media Profile Section -->
                    <div class="settings-section" id="social-media">
                        <h2 class="section-title">
                            <i class="fas fa-share-alt"></i>
                            Social Media Profile
                        </h2>

                        <div class="form-section">
                            <div class="social-media-list">
                                <div class="social-media-item">
                                    <div class="social-icon facebook-bg">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="social-input">
                                        <input type="text" class="form-control" value="https://www.facebook.com"
                                            placeholder="Facebook Profile URL">
                                    </div>
                                </div>

                                {{-- <div class="social-media-item">
                                    <div class="social-icon twitter-bg">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="social-input">
                                        <input type="text" class="form-control" placeholder="Twitter Profile URL">
                                    </div>
                                </div> --}}

                                <div class="social-media-item">
                                    <div class="social-icon linkedin-bg">
                                        <i class="fab fa-linkedin-in"></i>
                                    </div>
                                    <div class="social-input">
                                        <input type="text" class="form-control" placeholder="LinkedIn Profile URL">
                                    </div>
                                </div>
                            </div>

                            <div class="add-social-link" id="add-social-link">
                                <i class="fas fa-plus"></i>
                                <span>Add New Social Link</span>
                            </div>
                        </div>

                        <button class="save-changes-btn" id="save-social-media">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>

                    <!-- Account Setting Section -->
                    <div class="settings-section" id="account-setting">
                        <h2 class="section-title">
                            <i class="fas fa-cog"></i>
                            Account Setting
                        </h2>

                        <div class="form-section">
                            <!-- Company Location -->
                            <div class="account-section">
                                <h3>Company Location (Click on map to select)</h3>

                                <div class="map-container">
                                    <div id="map"></div>
                                </div>

                                <div class="location-info" id="location-info">
                                    <p><strong>Country:</strong> Not selected</p>
                                    <p><strong>Full Address:</strong> Not selected</p>
                                    <input type="hidden" name="latitude" id="latitude">
                                    <input type="hidden" name="longitude" id="longitude">
                                </div>
                            </div>

                            <!-- Company Phone & Email -->
                            <div class="account-section">
                                <h3>Company Phone & Email Address For Public View</h3>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label for="company-phone">Phone</label>
                                        <input type="text" id="company-phone" class="form-control" value="+880123456789">
                                    </div>

                                    <div class="form-group">
                                        <label for="company-email">Email</label>
                                        <input type="email" id="company-email" class="form-control"
                                            value="templatecookie@gmail.com">
                                    </div>
                                </div>
                            </div>

                            <!-- Change Account Username & Email -->
                            <div class="account-section">
                                <h3>Change Account Username & Email</h3>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" id="username" class="form-control" value="templatecookie">
                                        <a href="https://jobpilot.lomeydabs.com/employer/templatecookie"
                                            class="profile-link">Profile Link:
                                            https://jobpilot.lomeydabs.com/employer/templatecookie</a>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" id="email" class="form-control" value="company@mail.com">
                                    </div>
                                </div>
                            </div>

                            <!-- Change Password -->
                            <div class="change-password">
                                <h3>Change Password</h3>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label for="new-password">New Password <span class="required">*</span></label>
                                        <input type="password" id="new-password" class="form-control"
                                            placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password <span
                                                class="required">*</span></label>
                                        <input type="password" id="confirm-password" class="form-control"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <!-- Close/Delete Account -->
                            <div class="close-account">
                                <h3>Close/Delete Account</h3>
                                <p>If you delete your account, you'll lose access to matched jobs, followed employers, job
                                    alerts, shortlisted jobs, and other services.</p>

                                <div class="checkbox-group">
                                    <input type="checkbox" id="close-account">
                                    <label for="close-account">Close Account</label>
                                </div>

                                <button class="danger-btn" id="delete-account">Delete Account</button>
                            </div>
                        </div>

                        <button class="save-changes-btn" id="save-account-settings">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab Navigation
        document.addEventListener('DOMContentLoaded', function () {
            // Tab Navigation
            document.querySelectorAll('.tab-item').forEach(tab => {
                tab.addEventListener('click', function () {
                    // Remove active class from all tabs
                    document.querySelectorAll('.tab-item').forEach(item => {
                        item.classList.remove('active');
                    });

                    // Add active class to clicked tab
                    this.classList.add('active');

                    // Hide all sections
                    document.querySelectorAll('.settings-section').forEach(section => {
                        section.classList.remove('active');
                    });

                    // Show the selected section
                    const sectionId = this.getAttribute('data-section');
                    const selectedSection = document.getElementById(sectionId);
                    if (selectedSection) {
                        selectedSection.classList.add('active');
                    }
                });
            });

            // Character count for About Us textarea
            const aboutUsText = document.getElementById('aboutUsText');
            const charCount = document.getElementById('charCount');

            function updateCharacterCount() {
                if (charCount) {
                    charCount.textContent = aboutUsText ? aboutUsText.value.length : 0;
                }
            }

            // Initialize character count
            updateCharacterCount();

            // Update character count on input
            if (aboutUsText) {
                aboutUsText.addEventListener('input', updateCharacterCount);
            }

            // Image upload functionality
            const logoUpload = document.getElementById('logoUpload');
            const bannerUpload = document.getElementById('bannerUpload');

            if (logoUpload) {
                logoUpload.addEventListener('click', function () {
                    // Create file input
                    const fileInput = document.createElement('input');
                    fileInput.type = 'file';
                    fileInput.accept = 'image/*';

                    fileInput.addEventListener('change', function (e) {
                        if (this.files.length > 0) {
                            const file = this.files[0];

                            // Check if it's an image
                            if (!file.type.match('image.*')) {
                                alert('Please select an image file.');
                                return;
                            }

                            // Check file size (max 5MB)
                            if (file.size > 5 * 1024 * 1024) {
                                alert('File size should be less than 5MB.');
                                return;
                            }

                            // Create preview
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const logoPreview = logoUpload.querySelector('.current-image');
                                logoPreview.innerHTML = `
                                                                                        <img src="${e.target.result}" alt="Logo Preview" class="image-preview">
                                                                                        <div class="image-size">Image Size: 68×68</div>
                                                                                    `;
                            };
                            reader.readAsDataURL(file);

                            alert('Logo uploaded successfully!');
                        }
                    });

                    fileInput.click();
                });
            }

            if (bannerUpload) {
                bannerUpload.addEventListener('click', function () {
                    // Create file input
                    const fileInput = document.createElement('input');
                    fileInput.type = 'file';
                    fileInput.accept = 'image/*';

                    fileInput.addEventListener('change', function (e) {
                        if (this.files.length > 0) {
                            const file = this.files[0];

                            // Check if it's an image
                            if (!file.type.match('image.*')) {
                                alert('Please select an image file.');
                                return;
                            }

                            // Check file size (max 10MB for banner)
                            if (file.size > 10 * 1024 * 1024) {
                                alert('File size should be less than 10MB.');
                                return;
                            }

                            // Create preview
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const bannerPreview = bannerUpload.querySelector('.current-image');
                                bannerPreview.innerHTML = `
                                                                                        <img src="${e.target.result}" alt="Banner Preview" class="image-preview" style="height: 100px; object-fit: cover;">
                                                                                        <div class="image-size">Image Size: 1920×312</div>
                                                                                    `;
                            };
                            reader.readAsDataURL(file);

                            alert('Banner image uploaded successfully!');
                        }
                    });

                    fileInput.click();
                });
            }

            // Text editor buttons functionality
            const editorButtons = document.querySelectorAll('.editor-btn');
            editorButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Toggle active class
                    this.classList.toggle('active');

                    // Get the command from the button
                    let command = '';
                    const text = this.textContent || this.innerHTML;

                    if (text.includes('B') || this.querySelector('b')) {
                        command = 'bold';
                    } else if (text.includes('I') || this.querySelector('i')) {
                        command = 'italic';
                    } else if (this.querySelector('.fa-align-left')) {
                        command = 'justifyLeft';
                    } else if (this.querySelector('.fa-align-center')) {
                        command = 'justifyCenter';
                    } else if (this.querySelector('.fa-align-right')) {
                        command = 'justifyRight';
                    } else if (this.querySelector('.fa-align-justify')) {
                        command = 'justifyFull';
                    } else if (this.querySelector('.fa-image')) {
                        alert('Image upload feature would open here.');
                        return;
                    } else if (this.querySelector('.fa-link')) {
                        const url = prompt('Enter the URL:');
                        if (url) {
                            document.execCommand('createLink', false, url);
                        }
                        return;
                    } else if (text === 'P') {
                        document.execCommand('formatBlock', false, '<p>');
                        return;
                    } else if (text === 'O') {
                        document.execCommand('insertOrderedList', false, null);
                        return;
                    } else if (text === '::') {
                        document.execCommand('insertUnorderedList', false, null);
                        return;
                    }

                    if (command && aboutUsText) {
                        aboutUsText.focus();
                        document.execCommand(command, false, null);
                    }
                });
            });

            // Add New Social Link
            const addSocialLink = document.getElementById('add-social-link');
            if (addSocialLink) {
                addSocialLink.addEventListener('click', function () {
                    const socialMediaList = document.querySelector('.social-media-list');

                    const newItem = document.createElement('div');
                    newItem.className = 'social-media-item';

                    // Random social media icon and color
                    const socialNetworks = [
                        { icon: 'fab fa-instagram', color: '#E1306C', name: 'Instagram' },
                        { icon: 'fab fa-youtube', color: '#FF0000', name: 'YouTube' },
                        { icon: 'fab fa-github', color: '#181717', name: 'GitHub' },
                        { icon: 'fab fa-whatsapp', color: '#25D366', name: 'WhatsApp' }
                    ];

                    const randomNetwork = socialNetworks[Math.floor(Math.random() * socialNetworks.length)];

                    newItem.innerHTML = `
                                                                            <div class="social-icon" style="background-color: ${randomNetwork.color};">
                                                                                <i class="${randomNetwork.icon}"></i>
                                                                            </div>
                                                                            <div class="social-input">
                                                                                <input type="text" class="form-control" placeholder="${randomNetwork.name} Profile URL">
                                                                            </div>
                                                                        `;

                    socialMediaList.appendChild(newItem);

                    // Show a confirmation message
                    const originalText = this.querySelector('span').textContent;
                    this.querySelector('span').textContent = 'Social Link Added!';

                    setTimeout(() => {
                        this.querySelector('span').textContent = originalText;
                    }, 2000);
                });
            }

            // Map Interaction
            const map = L.map('map').setView([23.8103, 90.4125], 6); // Bangladesh default

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap'
            }).addTo(map);

            let marker;

            map.on('click', async function (e) {
                const lat = e.latlng.lat;
                const lng = e.latlng.lng;

                if (marker) {
                    marker.setLatLng(e.latlng);
                } else {
                    marker = L.marker(e.latlng).addTo(map);
                }

                // Reverse Geocoding (FREE)
                const res = await fetch(
                    `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`
                );
                const data = await res.json();

                const country = data.address.country || 'N/A';
                const state = data.address.state || 'N/A';
                const city =
                    data.address.city ||
                    data.address.town ||
                    data.address.village ||
                    'N/A';

                document.getElementById('location-info').innerHTML = `
                            <p><strong>Country:</strong> ${country}</p>
                            <p><strong>Full Address:</strong> ${city}, ${state}</p>
                            <p><strong>Latitude:</strong> ${lat.toFixed(5)}</p>
                            <p><strong>Longitude:</strong> ${lng.toFixed(5)}</p>
                        `;
                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lng;

            });
            setTimeout(() => {
                map.invalidateSize();
            }, 300);

            // Save Changes Buttons
            document.querySelectorAll('.save-changes-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const originalText = this.innerHTML;
                    const originalBgColor = this.style.backgroundColor;

                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
                    this.disabled = true;
                    this.style.backgroundColor = '#6b7280';

                    // Simulate API call
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check"></i> Changes Saved!';
                        this.style.backgroundColor = '#10b981';

                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.style.backgroundColor = originalBgColor;
                            this.disabled = false;
                        }, 2000);
                    }, 1500);
                });
            });

            // Delete Account Button
            const deleteAccountBtn = document.getElementById('delete-account');
            if (deleteAccountBtn) {
                deleteAccountBtn.addEventListener('click', function () {
                    const isChecked = document.getElementById('close-account').checked;

                    if (!isChecked) {
                        alert('Please check the "Close Account" checkbox before deleting your account.');
                        return;
                    }

                    if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
                        alert('Account deletion process initiated. This is a demo.');
                    }
                });
            }

            // Add checkmark to active tab
            const activeTab = document.querySelector('.tab-item.active');
            if (activeTab) {
                activeTab.querySelector('.tab-checkmark').style.display = 'inline-block';
            }
        });
    </script>
@endsection