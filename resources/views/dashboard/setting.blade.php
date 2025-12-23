@include('layouts.header')
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
            max-width: 1200px;
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
        
        .section-subtitle {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 20px;
            margin-top: 30px;
        }
        
        /* Settings Form */
        .settings-form {
            margin-bottom: 30px;
        }
        
        .form-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #e2e8f0;
            margin-bottom: 25px;
        }
        
        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 10px;
            color: #2563eb;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #475569;
        }
        
        .form-label span {
            color: #ef4444;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            outline: none;
            transition: border-color 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .form-input::placeholder {
            color: #94a3b8;
        }
        
        /* Image Upload Section */
        .image-upload-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 20px;
        }
        
        .image-upload-box {
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            background: white;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .image-upload-box:hover {
            border-color: #2563eb;
        }
        
        .upload-icon {
            font-size: 40px;
            color: #94a3b8;
            margin-bottom: 15px;
        }
        
        .upload-text {
            font-size: 16px;
            color: #475569;
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .upload-subtext {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 15px;
        }
        
        .current-image {
            margin-top: 20px;
            text-align: center;
        }
        
        .current-image img {
            max-width: 100px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .image-size {
            font-size: 12px;
            color: #64748b;
            margin-top: 5px;
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
        
        /* Save Button */
        .save-changes-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            font-size: 16px;
            margin-top: 20px;
        }
        
        .save-changes-btn:hover {
            background: #1d4ed8;
        }
        
        /* Chat Section */
        .chat-section {
            text-align: center;
            padding: 30px 20px;
            background: #f0f7ff;
            border-radius: 10px;
            border: 2px dashed #93c5fd;
            margin-top: 30px;
        }
        
        .chat-icon {
            font-size: 40px;
            color: #2563eb;
            margin-bottom: 15px;
        }
        
        .chat-title {
            font-size: 18px;
            color: #1e293b;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .chat-description {
            color: #64748b;
            margin-bottom: 20px;
            font-size: 15px;
        }
        
        .chat-btn {
            display: inline-flex;
            align-items: center;
            background: #10b981;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .chat-btn:hover {
            background: #0da271;
        }
        
        .chat-btn i {
            margin-right: 8px;
        }
        
        /* Footer */
        .footer {
            background: #1e293b;
            color: white;
            padding: 50px 0 20px;
            margin-top: 30px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }
        
        .footer-column h4 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #f8fafc;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #60a5fa;
        }
        
        .footer-top {
            border-bottom: 1px solid #334155;
            padding-bottom: 30px;
            margin-bottom: 20px;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font-size: 14px;
        }
        
        .contact-call {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-call i {
            color: #60a5fa;
            margin-right: 10px;
        }
        
        .footer-description {
            color: #94a3b8;
            font-size: 14px;
            line-height: 1.6;
        }
        
        @media (max-width: 992px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .form-grid, .image-upload-section {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .top-nav {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .top-nav-left {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .top-nav-right {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .main-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .search-post-container {
                width: 100%;
            }
            
            .search-container {
                width: 100%;
            }
            
            .search-container input {
                width: 100%;
            }
            
            .post-job-btn {
                width: 100%;
            }
            
            .editor-toolbar {
                justify-content: center;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }
    </style>

    <div class="container">
        <!-- Top Navigation Bar -->
        {{-- <div class="top-nav">
            <div class="top-nav-left">
                <a href="#" class="active">Home</a>
                <a href="#">Candidates</a>
                <a href="#">Pricing</a>
                <a href="#">Dashboard</a>
                <a href="#">My Job</a>
            </div>
            <div class="top-nav-right">
                <div class="phone-number">
                    <i class="fas fa-phone-alt"></i>
                    319-555-0115
                </div>
                <div class="language-selector">
                    <i class="fas fa-globe"></i>
                    English
                </div>
                <div class="currency-selector">
                    <i class="fas fa-dollar-sign"></i>
                    USD
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="main-header">
            <div class="logo">Jobpilot</div>
            <div class="search-post-container">
                <div class="search-container">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Job Title, Keyword">
                </div>
                <button class="post-job-btn">Post Job</button>
            </div>
        </div> --}}

        <!-- Dashboard Layout -->
        <div class="dashboard-layout">
            <!-- Sidebar -->
            @include('layouts.sidebar')
            
            <!-- Main Content -->
            <div class="dashboard-content">
                <div class="content-header">
                    <h1>Settings</h1>
                </div>
                
                <!-- Settings Form -->
                <form class="settings-form">
                    <!-- Company Info Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-building"></i> Company Info
                        </div>
                        
                        <div class="image-upload-section">
                            <div class="image-upload-box" id="logoUpload">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div class="upload-text">Upload Logo *</div>
                                <div class="upload-subtext">Click to upload company logo</div>
                                <div class="current-image">
                                    <div style="width: 68px; height: 68px; background: #e2e8f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
                                        <span style="font-size: 12px; color: #64748b; font-weight: 600;">LOGO</span>
                                    </div>
                                    <div class="image-size">Image Size: 68×68</div>
                                </div>
                            </div>
                            
                            <div class="image-upload-box" id="bannerUpload">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div class="upload-text">Banner Image *</div>
                                <div class="upload-subtext">Click to upload banner image</div>
                                <div class="current-image">
                                    <div style="width: 100%; height: 80px; background: linear-gradient(to right, #2563eb, #3b82f6); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
                                        <span style="font-size: 12px; color: white; font-weight: 600;">BANNER</span>
                                    </div>
                                    <div class="image-size">Image Size: 1920×312</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Company Name *</label>
                            <input type="text" class="form-input" value="Templatecookie">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Website</label>
                            <input type="text" class="form-input" value="www.templatecookie.com">
                        </div>
                    </div>
                    
                    <!-- About Us Section -->
                    <div class="form-section">
                        <div class="section-title">
                            <i class="fas fa-info-circle"></i> About Us
                        </div>
                        
                        <div class="text-editor-container">
                            <div class="editor-toolbar">
                                <button type="button" class="editor-btn" title="Paragraph">P</button>
                                <button type="button" class="editor-btn" title="Bold"><b>B</b></button>
                                <button type="button" class="editor-btn" title="Italic"><i>I</i></button>
                                <button type="button" class="editor-btn" title="Ordered List">O</button>
                                <button type="button" class="editor-btn" title="Unordered List">::</button>
                                <button type="button" class="editor-btn" title="Insert Image"><i class="fas fa-image"></i></button>
                                <button type="button" class="editor-btn" title="Insert Link"><i class="fas fa-link"></i></button>
                                <button type="button" class="editor-btn" title="Align Left"><i class="fas fa-align-left"></i></button>
                                <button type="button" class="editor-btn" title="Align Center"><i class="fas fa-align-center"></i></button>
                                <button type="button" class="editor-btn" title="Align Right"><i class="fas fa-align-right"></i></button>
                                <button type="button" class="editor-btn" title="Justify"><i class="fas fa-align-justify"></i></button>
                            </div>
                            
                            <textarea class="editor-textarea" id="aboutUsText">Templatecookie is a team of developers working on building quality templates and scripts! We are a team of 12+ designer and developers with 3+ years of working experiences! We have experts in React Js, Vue js, Laravel, PHP, MySQL, Bootstrap, HTML, CSS, SCSS, Tailwind CSS, REST API & React Native!</textarea>
                            
                            <div class="character-count">
                                <span id="charCount">0</span> characters
                            </div>
                        </div>
                    </div>
                    
                    <!-- Save Changes Button -->
                    <div style="text-align: center;">
                        <button type="button" class="save-changes-btn">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                    </div>
                </form>
                
                <!-- Chat Section -->
                <div class="chat-section">
                    <div class="chat-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="chat-title">Chat with us</div>
                    <div class="chat-description">Need help with settings? Our support team is here to assist you.</div>
                    <button class="chat-btn">
                        <i class="fas fa-comment-dots"></i> Chat with us
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')
    {{-- <div class="footer">
        <div class="footer-top">
            <div class="footer-content">
                <div class="footer-column">
                    <h4>Jobpilot</h4>
                    <div class="contact-call">
                        <i class="fas fa-phone-alt"></i>
                        <span>Call Now: 319-555-0115</span>
                    </div>
                    <p class="footer-description">Discover tailored opportunities for job seekers and top talent for employers</p>
                </div>
                
                <div class="footer-column">
                    <h4>Company</h4>
                    <ul class="footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Candidate</h4>
                    <ul class="footer-links">
                        <li><a href="#">Browse Jobs</a></li>
                        <li><a href="#">Browse Candidates</a></li>
                        <li><a href="#">Candidate Dashboard</a></li>
                        <li><a href="#">Saved Jobs</a></li>
                        <li><a href="#">Candidate plan</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h4>Employer</h4>
                    <ul class="footer-links">
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">Companies Dashboard</a></li>
                        <li><a href="#">Applications</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="footer-bottom">
                <div>
                    <h4>Support</h4>
                    <ul class="footer-links" style="display: flex; gap: 20px;">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
                <div>© Jobpilot 2025 | All Rights Reserved</div>
            </div>
        </div>
    </div> --}}

    <script>
        // Character count for About Us textarea
        const aboutUsText = document.getElementById('aboutUsText');
        const charCount = document.getElementById('charCount');
        
        function updateCharacterCount() {
            charCount.textContent = aboutUsText.value.length;
        }
        
        // Initialize character count
        updateCharacterCount();
        
        // Update character count on input
        aboutUsText.addEventListener('input', updateCharacterCount);
        
        // Image upload functionality
        const logoUpload = document.getElementById('logoUpload');
        const bannerUpload = document.getElementById('bannerUpload');
        
        logoUpload.addEventListener('click', function() {
            // Create file input
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            
            fileInput.addEventListener('change', function(e) {
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
                    reader.onload = function(e) {
                        const logoPreview = logoUpload.querySelector('.current-image');
                        logoPreview.innerHTML = `
                            <img src="${e.target.result}" alt="Logo Preview" style="max-width: 68px; border-radius: 8px; margin-bottom: 10px;">
                            <div class="image-size">Image Size: 68×68</div>
                        `;
                    };
                    reader.readAsDataURL(file);
                    
                    alert('Logo uploaded successfully!');
                }
            });
            
            fileInput.click();
        });
        
        bannerUpload.addEventListener('click', function() {
            // Create file input
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            
            fileInput.addEventListener('change', function(e) {
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
                    reader.onload = function(e) {
                        const bannerPreview = bannerUpload.querySelector('.current-image');
                        bannerPreview.innerHTML = `
                            <img src="${e.target.result}" alt="Banner Preview" style="width: 100%; height: 80px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;">
                            <div class="image-size">Image Size: 1920×312</div>
                        `;
                    };
                    reader.readAsDataURL(file);
                    
                    alert('Banner image uploaded successfully!');
                }
            });
            
            fileInput.click();
        });
        
        // Text editor buttons functionality
        const editorButtons = document.querySelectorAll('.editor-btn');
        editorButtons.forEach(button => {
            button.addEventListener('click', function() {
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
                
                if (command) {
                    document.execCommand(command, false, null);
                }
            });
        });
        
        // Save Changes button
        const saveChangesBtn = document.querySelector('.save-changes-btn');
        saveChangesBtn.addEventListener('click', function() {
            // Show loading state
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
            this.disabled = true;
            
            // Simulate save process
            setTimeout(() => {
                alert('Settings saved successfully!');
                
                // Reset button
                this.innerHTML = originalText;
                this.disabled = false;
            }, 1500);
        });
        
        // Chat button functionality
        const chatButtons = document.querySelectorAll('.chat-btn');
        chatButtons.forEach(button => {
            button.addEventListener('click', function() {
                alert('Opening chat window. This is a demonstration.');
            });
        });
        
        // Search functionality
        const searchInput = document.querySelector('.search-container input');
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert(`Searching for: ${searchInput.value}`);
            }
        });
        
        // Post Job button
        const postJobBtn = document.querySelector('.post-job-btn');
        postJobBtn.addEventListener('click', function() {
            alert('Redirecting to Post Job page...');
        });
        
        // Sidebar menu functionality
        const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                sidebarLinks.forEach(item => item.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Update page title based on clicked menu item
                const pageName = this.textContent.trim();
                document.querySelector('h1').textContent = pageName;
                
                console.log(`Navigating to: ${pageName}`);
            });
        });
    </script>
</body>
</html>