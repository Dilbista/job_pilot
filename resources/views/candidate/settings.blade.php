@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    <!-- Fonts & Icons -->
                    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
                        rel="stylesheet">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
                        rel="stylesheet">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                    </head>

                    <body>
                        <div class="dashboard-container">
                            <!-- Header -->
                            <header class="dashboard-header">
                                <h1 class="dashboard-title">Settings Dashboard</h1>
                                <button class="sidebar-toggle" id="sidebarToggle">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </header>

                            <!-- Main Content -->
                            <main class="dashboard-content">
                                <!-- Navigation Tabs -->
                                <nav class="dashboard-nav" id="dashboardNav">
                                    <div class="nav-tabs-container">
                                        <div class="active-indicator" id="activeIndicator"></div>
                                        <ul class="nav-tabs">
                                            <li class="nav-item">
                                                <button class="nav-link active" data-tab="basic">
                                                    <div class="nav-icon">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                    Basic Info
                                                    <span class="nav-badge">Updated</span>
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-tab="profile">
                                                    <div class="nav-icon">
                                                        <i class="fas fa-id-card"></i>
                                                    </div>
                                                    Profile
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-tab="experience">
                                                    <div class="nav-icon">
                                                        <i class="fas fa-briefcase"></i>
                                                    </div>
                                                    Experience & Education
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-tab="social">
                                                    <div class="nav-icon">
                                                        <i class="fas fa-share-alt"></i>
                                                    </div>
                                                    Social Media
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button class="nav-link" data-tab="account">
                                                    <div class="nav-icon">
                                                        <i class="fas fa-cog"></i>
                                                    </div>
                                                    Account Settings
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>

                                <!-- Tab Content -->
                                <div class="tab-content-container">
                                    <div class="tab-content">
                                        <!-- Basic Info Tab -->
                                        <div class="tab-pane active" id="basic-tab">
                                            <div class="tab-header">
                                                <h2 class="tab-title">Basic Information</h2>
                                            </div>

                                            <p class="tab-subtitle">Update your personal details and profile information</p>

                                            <!-- Profile Image Upload -->
                                            <div class="profile-image-container">
                                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80"
                                                    alt="Profile" class="profile-image" id="profileImage">
                                                <div class="profile-upload">
                                                    <h3>Profile Picture</h3>
                                                    <p>Upload a clear photo of yourself. Max size: 5MB</p>
                                                    <button class="upload-btn" id="uploadImageBtn">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                        Choose Image
                                                    </button>
                                                    <input type="file" id="imageUpload" accept="image/*"
                                                        style="display: none;">
                                                </div>
                                            </div>

                                            <!-- Basic Info Form -->
                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-info-circle"></i> Personal
                                                    Details</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Full Name</label>
                                                            <input type="text" class="form-control" value="John Doe"
                                                                placeholder="Enter your full name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Professional Title</label>
                                                            <input type="text" class="form-control"
                                                                value="Senior Software Engineer"
                                                                placeholder="Your job title">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Experience Level</label>
                                                            <select class="form-control">
                                                                <option>Fresher</option>
                                                                <option>1-2 Years</option>
                                                                <option selected>3-5 Years</option>
                                                                <option>5-8 Years</option>
                                                                <option>10+ Years</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Education Level</label>
                                                            <select class="form-control">
                                                                <option>High School</option>
                                                                <option>Bachelor's Degree</option>
                                                                <option selected>Master's Degree</option>
                                                                <option>PhD</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Date of Birth</label>
                                                            <div class="form-control-icon">
                                                                <input type="date" class="form-control"
                                                                    value="1990-05-15">
                                                                <i class="fas fa-calendar-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Website</label>
                                                            <div class="form-control-icon">
                                                                <input type="url" class="form-control"
                                                                    value="https://johndoe.com"
                                                                    placeholder="Your personal website">
                                                                <i class="fas fa-globe"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Resume Section -->
                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-file-alt"></i> Your
                                                    Resume/CV</h3>

                                                <div class="resume-item">
                                                    <div class="resume-icon">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </div>
                                                    <div class="resume-details">
                                                        <h4>John_Doe_Resume.pdf</h4>
                                                        <p class="text-muted">Updated 2 days ago • 0.0784 MB</p>
                                                    </div>
                                                    <div class="resume-actions">
                                                        <button class="action-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="action-btn">
                                                            <i class="fas fa-download"></i>
                                                        </button>
                                                        <button class="action-btn">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <button class="add-new-btn">
                                                    <i class="fas fa-plus"></i>
                                                    Add New Resume
                                                </button>
                                            </div>

                                            <button class="save-btn">
                                                <i class="fas fa-save"></i>
                                                Save Changes
                                            </button>
                                        </div>

                                        <!-- Profile Tab -->
                                        <div class="tab-pane" id="profile-tab">
                                            <div class="tab-header">
                                                <h2 class="tab-title">Profile Details</h2>
                                            </div>

                                            <p class="tab-subtitle">Customize your professional profile</p>

                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-user-tag"></i> Personal
                                                    Information</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Gender</label>
                                                            <select class="form-control">
                                                                <option selected>Male</option>
                                                                <option>Female</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Marital Status</label>
                                                            <select class="form-control">
                                                                <option>Single</option>
                                                                <option selected>Married</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Profession</label>
                                                            <select class="form-control">
                                                                <option selected>Software Developer</option>
                                                                <option>Data Scientist</option>
                                                                <option>Product Manager</option>
                                                                <option>UX Designer</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Availability</label>
                                                            <select class="form-control">
                                                                <option selected>Available</option>
                                                                <option>Not Available</option>
                                                                <option>Available Soon</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-star"></i> Skills</h3>
                                                <p>Add skills that represent your expertise</p>
                                                <div class="chips-container">
                                                    <div class="chip">JavaScript <i class="fas fa-times"></i></div>
                                                    <div class="chip">React <i class="fas fa-times"></i></div>
                                                    <div class="chip">Node.js <i class="fas fa-times"></i></div>
                                                    <div class="chip">UI/UX Design <i class="fas fa-times"></i></div>
                                                    <div class="chip">Project Management <i class="fas fa-times"></i>
                                                    </div>
                                                    <div class="chip">Python <i class="fas fa-times"></i></div>
                                                    <div class="chip">Agile Methodologies <i class="fas fa-times"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top: 20px;">
                                                    <input type="text" class="form-control"
                                                        placeholder="Add a new skill and press Enter">
                                                </div>
                                            </div>

                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-language"></i> Languages
                                                </h3>
                                                <p>List languages you speak</p>
                                                <div class="chips-container">
                                                    <div class="chip">English <i class="fas fa-times"></i></div>
                                                    <div class="chip">Spanish <i class="fas fa-times"></i></div>
                                                    <div class="chip">French <i class="fas fa-times"></i></div>
                                                </div>
                                                <div class="form-group" style="margin-top: 20px;">
                                                    <input type="text" class="form-control"
                                                        placeholder="Add a new language and press Enter">
                                                </div>
                                            </div>

                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-edit"></i> Biography</h3>
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="6" placeholder="Tell us about yourself...">Experienced software engineer with 5+ years in web development. Passionate about creating efficient, scalable applications and mentoring junior developers. Always eager to learn new technologies and solve complex problems.</textarea>
                                                </div>
                                            </div>

                                            <button class="save-btn">
                                                <i class="fas fa-save"></i>
                                                Update Profile
                                            </button>
                                        </div>

                                        <!-- Experience & Education Tab -->
                                        <div class="tab-pane" id="experience-tab">
                                            <div class="tab-header">
                                                <h2 class="tab-title">Experience & Education</h2>
                                                <button class="add-new-btn">
                                                    <i class="fas fa-plus"></i>
                                                    Add Experience
                                                </button>
                                            </div>

                                            <p class="tab-subtitle">Your professional journey and academic background</p>

                                            <!-- Experience Table -->
                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-briefcase"></i> Work
                                                    Experience</h3>
                                                <table class="experience-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Company</th>
                                                            <th>Position</th>
                                                            <th>Period</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Google</td>
                                                            <td>Senior Software Engineer</td>
                                                            <td>2021 - Present</td>
                                                            <td>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Facebook</td>
                                                            <td>Software Engineer</td>
                                                            <td>2019 - 2021</td>
                                                            <td>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Twitter</td>
                                                            <td>Frontend Developer</td>
                                                            <td>2017 - 2019</td>
                                                            <td>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- Education Table -->
                                            <div class="form-section">
                                                <div class="tab-header"
                                                    style="border-bottom: none; margin-bottom: 15px; padding-bottom: 0;">
                                                    <h3 class="form-section-title" style="margin-bottom: 0;"><i
                                                            class="fas fa-graduation-cap"></i> Education</h3>
                                                    <button class="add-new-btn">
                                                        <i class="fas fa-plus"></i>
                                                        Add Education
                                                    </button>
                                                </div>
                                                <table class="experience-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Degree</th>
                                                            <th>Institution</th>
                                                            <th>Year</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Master of Computer Science</td>
                                                            <td>Stanford University</td>
                                                            <td>2015 - 2017</td>
                                                            <td>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bachelor of Engineering</td>
                                                            <td>MIT</td>
                                                            <td>2011 - 2015</td>
                                                            <td>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <button class="action-btn">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Social Media Tab -->
                                        <div class="tab-pane" id="social-tab">
                                            <div class="tab-header">
                                                <h2 class="tab-title">Social Media</h2>
                                            </div>

                                            <p class="tab-subtitle">Connect your social media profiles</p>

                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-share-alt"></i> Social
                                                    Links</h3>
                                                <p>Add links to your social media profiles to increase visibility</p>

                                                <div class="social-links">
                                                    <div class="social-link-item">
                                                        <div class="social-icon facebook">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </div>
                                                        <div>
                                                            <h4>Facebook</h4>
                                                            <p>facebook.com/johndoe</p>
                                                        </div>
                                                    </div>

                                                    <div class="social-link-item">
                                                        <div class="social-icon twitter">
                                                            <i class="fab fa-twitter"></i>
                                                        </div>
                                                        <div>
                                                            <h4>Twitter</h4>
                                                            <p>twitter.com/johndoe</p>
                                                        </div>
                                                    </div>

                                                    <div class="social-link-item">
                                                        <div class="social-icon linkedin">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </div>
                                                        <div>
                                                            <h4>LinkedIn</h4>
                                                            <p>linkedin.com/in/johndoe</p>
                                                        </div>
                                                    </div>

                                                    <div class="social-link-item">
                                                        <div class="social-icon github">
                                                            <i class="fab fa-github"></i>
                                                        </div>
                                                        <div>
                                                            <h4>GitHub</h4>
                                                            <p>github.com/johndoe</p>
                                                        </div>
                                                    </div>

                                                    <div class="social-link-item">
                                                        <div class="social-icon instagram">
                                                            <i class="fab fa-instagram"></i>
                                                        </div>
                                                        <div>
                                                            <h4>Instagram</h4>
                                                            <p>instagram.com/johndoe</p>
                                                        </div>
                                                    </div>

                                                    <div class="social-link-item"
                                                        style="border: 2px dashed var(--primary-light); background: transparent;">
                                                        <div class="social-icon"
                                                            style="background: var(--gray-light); color: var(--gray);">
                                                            <i class="fas fa-plus"></i>
                                                        </div>
                                                        <div>
                                                            <h4>Add New</h4>
                                                            <p>Connect another platform</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="save-btn">
                                                <i class="fas fa-sync-alt"></i>
                                                Update Social Links
                                            </button>
                                        </div>

                                        <!-- Account Settings Tab -->
                                        <div class="tab-pane" id="account-tab">
                                            <div class="tab-header">
                                                <h2 class="tab-title">Account Settings</h2>
                                            </div>

                                            <p class="tab-subtitle">Manage your account preferences and security</p>

                                            <!-- Contact Information -->
                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-address-book"></i> Contact
                                                    Information</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Phone Number</label>
                                                            <div class="form-control-icon">
                                                                <input type="tel" class="form-control"
                                                                    value="+1 (555) 123-4567">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Secondary Phone</label>
                                                            <div class="form-control-icon">
                                                                <input type="tel" class="form-control"
                                                                    placeholder="Optional">
                                                                <i class="fas fa-phone-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Email Address</label>
                                                            <div class="form-control-icon">
                                                                <input type="email" class="form-control"
                                                                    value="john.doe@example.com">
                                                                <i class="fas fa-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">WhatsApp Number</label>
                                                            <div class="form-control-icon">
                                                                <input type="tel" class="form-control"
                                                                    placeholder="Optional">
                                                                <i class="fab fa-whatsapp"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Privacy Settings -->
                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-user-shield"></i> Privacy
                                                    Settings</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"
                                                            style="display: flex; align-items: center; justify-content: space-between;">
                                                            <div>
                                                                <label class="form-label">Profile Visibility</label>
                                                                <p class="text-muted"
                                                                    style="font-size: 14px; margin-top: 5px;">Make your
                                                                    profile public</p>
                                                            </div>
                                                            <label class="toggle-switch">
                                                                <input type="checkbox" checked>
                                                                <span class="toggle-slider"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"
                                                            style="display: flex; align-items: center; justify-content: space-between;">
                                                            <div>
                                                                <label class="form-label">Resume Visibility</label>
                                                                <p class="text-muted"
                                                                    style="font-size: 14px; margin-top: 5px;">Allow
                                                                    employers to view your resume</p>
                                                            </div>
                                                            <label class="toggle-switch">
                                                                <input type="checkbox" checked>
                                                                <span class="toggle-slider"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group"
                                                            style="display: flex; align-items: center; justify-content: space-between;">
                                                            <div>
                                                                <label class="form-label">Job Alerts</label>
                                                                <p class="text-muted"
                                                                    style="font-size: 14px; margin-top: 5px;">Receive job
                                                                    recommendations</p>
                                                            </div>
                                                            <label class="toggle-switch">
                                                                <input type="checkbox" checked>
                                                                <span class="toggle-slider"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Change Password -->
                                            <div class="form-section">
                                                <h3 class="form-section-title"><i class="fas fa-key"></i> Change Password
                                                </h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Current Password</label>
                                                            <div class="form-control-icon">
                                                                <input type="password" class="form-control">
                                                                <i class="fas fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">New Password</label>
                                                            <div class="form-control-icon">
                                                                <input type="password" class="form-control">
                                                                <i class="fas fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Confirm New Password</label>
                                                            <div class="form-control-icon">
                                                                <input type="password" class="form-control">
                                                                <i class="fas fa-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Danger Zone -->
                                            <div class="form-section" style="border-left: 4px solid var(--danger);">
                                                <h3 class="form-section-title" style="color: var(--danger);"><i
                                                        class="fas fa-exclamation-triangle"></i> Danger Zone</h3>
                                                <p>Once you delete your account, there is no going back. Please be certain.
                                                </p>
                                                <button class="save-btn"
                                                    style="background: linear-gradient(135deg, var(--danger) 0%, #dc2626 100%); margin-top: 15px;">
                                                    <i class="fas fa-trash-alt"></i>
                                                    Delete Account
                                                </button>
                                            </div>

                                            <button class="save-btn">
                                                <i class="fas fa-save"></i>
                                                Save All Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </body>
                </div>
            </div>
        </div>
        <style>
            :root {
                --primary: #6366f1;
                --primary-dark: #4f46e5;
                --primary-light: #818cf8;
                --secondary: #f8fafc;
                --dark: #1e293b;
                --light: #f8fafc;
                --gray: #64748b;
                --gray-light: #e2e8f0;
                --success: #10b981;
                --danger: #ef4444;
                --warning: #f59e0b;
                --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                --glass: rgba(255, 255, 255, 0.8);
                --border-radius: 16px;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', sans-serif;
                background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
                color: var(--dark);
                min-height: 100vh;
                padding: 20px;
            }

            .dashboard-container {
                max-width: 1400px;
                margin: 0 auto;
            }

            /* Header */
            .dashboard-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
                padding: 20px 30px;
                background: var(--glass);
                backdrop-filter: blur(10px);
                border-radius: var(--border-radius);
                box-shadow: var(--card-shadow);
                animation: slideDown 0.5s ease-out;
            }

            .dashboard-title {
                font-size: 28px;
                font-weight: 700;
                color: var(--dark);
                position: relative;
                display: inline-block;
            }

            .dashboard-title:after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 60px;
                height: 4px;
                background: var(--primary);
                border-radius: 2px;
            }

            .sidebar-toggle {
                display: none;
                background: var(--primary);
                color: white;
                border: none;
                width: 44px;
                height: 44px;
                border-radius: 12px;
                cursor: pointer;
                transition: var(--transition);
                box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
            }

            .sidebar-toggle:hover {
                background: var(--primary-dark);
                transform: translateY(-2px);
            }

            /* Main Content */
            .dashboard-content {
                display: grid;
                grid-template-columns: 280px 1fr;
                gap: 30px;
                animation: fadeIn 0.8s ease-out;
            }

            /* Navigation Tabs */
            .dashboard-nav {
                background: var(--glass);
                backdrop-filter: blur(10px);
                border-radius: var(--border-radius);
                box-shadow: var(--card-shadow);
                padding: 25px 20px;
                height: fit-content;
                position: sticky;
                top: 30px;
            }

            .nav-tabs-container {
                position: relative;
            }

            .nav-tabs {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .nav-item {
                margin-bottom: 8px;
                position: relative;
            }

            .nav-link {
                display: flex;
                align-items: center;
                padding: 16px 20px;
                border-radius: 12px;
                color: var(--gray);
                text-decoration: none;
                font-weight: 500;
                transition: var(--transition);
                cursor: pointer;
                border: none;
                background: transparent;
                width: 100%;
                text-align: left;
            }

            .nav-link:hover {
                color: var(--primary);
                background: rgba(99, 102, 241, 0.05);
                transform: translateX(5px);
            }

            .nav-link.active {
                color: var(--primary);
                background: rgba(99, 102, 241, 0.1);
                font-weight: 600;
            }

            .nav-icon {
                width: 24px;
                height: 24px;
                margin-right: 15px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .nav-badge {
                margin-left: auto;
                background: var(--primary);
                color: white;
                font-size: 12px;
                padding: 2px 8px;
                border-radius: 20px;
                animation: pulse 2s infinite;
            }

            /* Active Tab Indicator */
            .active-indicator {
                position: absolute;
                right: -20px;
                top: 0;
                height: 100%;
                width: 4px;
                background: var(--primary);
                border-radius: 2px;
                transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                transform: translateY(0);
            }

            /* Tab Content */
            .tab-content-container {
                background: var(--glass);
                backdrop-filter: blur(10px);
                border-radius: var(--border-radius);
                box-shadow: var(--card-shadow);
                overflow: hidden;
            }

            .tab-content {
                padding: 40px;
            }

            .tab-pane {
                display: none;
                animation: fadeInUp 0.5s ease-out;
            }

            .tab-pane.active {
                display: block;
            }

            .tab-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
                padding-bottom: 20px;
                border-bottom: 1px solid var(--gray-light);
            }

            .tab-title {
                font-size: 24px;
                font-weight: 700;
                color: var(--dark);
            }

            .tab-subtitle {
                color: var(--gray);
                margin-bottom: 25px;
            }

            /* Form Styling */
            .form-section {
                background: white;
                border-radius: 12px;
                padding: 30px;
                margin-bottom: 30px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                transition: var(--transition);
                border: 1px solid var(--gray-light);
            }

            .form-section:hover {
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
                transform: translateY(-3px);
            }

            .form-section-title {
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 20px;
                color: var(--dark);
                display: flex;
                align-items: center;
            }

            .form-section-title i {
                margin-right: 10px;
                color: var(--primary);
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-label {
                display: block;
                margin-bottom: 8px;
                font-weight: 500;
                color: var(--dark);
            }

            .form-control {
                width: 100%;
                padding: 14px 16px;
                border: 1px solid var(--gray-light);
                border-radius: 10px;
                font-size: 16px;
                transition: var(--transition);
                background: #fcfdfe;
            }

            .form-control:focus {
                outline: none;
                border-color: var(--primary);
                box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
            }

            .form-control-icon {
                position: relative;
            }

            .form-control-icon i {
                position: absolute;
                right: 16px;
                top: 50%;
                transform: translateY(-50%);
                color: var(--gray);
            }

            /* Profile Image Upload */
            .profile-image-container {
                display: flex;
                align-items: center;
                margin-bottom: 30px;
                padding: 25px;
                background: linear-gradient(135deg, #f6f9ff 0%, #edf2ff 100%);
                border-radius: 16px;
                border: 2px dashed var(--primary-light);
                transition: var(--transition);
            }

            .profile-image-container:hover {
                border-color: var(--primary);
                background: linear-gradient(135deg, #edf2ff 0%, #e0e7ff 100%);
            }

            .profile-image {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                object-fit: cover;
                border: 5px solid white;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
            }

            .profile-image:hover {
                transform: scale(1.05);
            }

            .profile-upload {
                margin-left: 30px;
                flex: 1;
            }

            .upload-btn {
                display: inline-flex;
                align-items: center;
                background: var(--primary);
                color: white;
                padding: 12px 24px;
                border-radius: 10px;
                border: none;
                font-weight: 500;
                cursor: pointer;
                transition: var(--transition);
                box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
            }

            .upload-btn:hover {
                background: var(--primary-dark);
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(99, 102, 241, 0.4);
            }

            .upload-btn i {
                margin-right: 10px;
            }

            /* Skills & Languages Chips */
            .chips-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-top: 15px;
            }

            .chip {
                display: inline-flex;
                align-items: center;
                background: rgba(99, 102, 241, 0.1);
                color: var(--primary);
                padding: 8px 16px;
                border-radius: 20px;
                font-size: 14px;
                font-weight: 500;
                transition: var(--transition);
                cursor: pointer;
            }

            .chip:hover {
                background: rgba(99, 102, 241, 0.2);
                transform: translateY(-2px);
            }

            .chip i {
                margin-left: 8px;
                font-size: 12px;
                opacity: 0.7;
            }

            /* Resume Items */
            .resume-item {
                display: flex;
                align-items: center;
                padding: 20px;
                background: white;
                border-radius: 12px;
                margin-bottom: 15px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
                transition: var(--transition);
                border-left: 4px solid var(--primary);
            }

            .resume-item:hover {
                transform: translateX(5px);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            }

            .resume-icon {
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(99, 102, 241, 0.1);
                color: var(--primary);
                border-radius: 10px;
                margin-right: 20px;
                font-size: 22px;
            }

            .resume-details {
                flex: 1;
            }

            .resume-actions {
                display: flex;
                gap: 10px;
            }

            .action-btn {
                width: 40px;
                height: 40px;
                border-radius: 10px;
                border: none;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: var(--transition);
                background: var(--light);
                color: var(--gray);
            }

            .action-btn:hover {
                background: var(--primary);
                color: white;
                transform: translateY(-2px);
            }

            /* Social Media Links */
            .social-links {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }

            .social-link-item {
                display: flex;
                align-items: center;
                padding: 20px;
                background: white;
                border-radius: 12px;
                transition: var(--transition);
                border: 1px solid var(--gray-light);
            }

            .social-link-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            }

            .social-icon {
                width: 50px;
                height: 50px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 20px;
                font-size: 24px;
                color: white;
            }

            .facebook {
                background: #1877f2;
            }

            .twitter {
                background: #1da1f2;
            }

            .linkedin {
                background: #0a66c2;
            }

            .github {
                background: #333;
            }

            .instagram {
                background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
            }

            /* Save Button */
            .save-btn {
                background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
                color: white;
                border: none;
                padding: 16px 32px;
                border-radius: 12px;
                font-weight: 600;
                font-size: 16px;
                cursor: pointer;
                transition: var(--transition);
                box-shadow: 0 6px 20px rgba(99, 102, 241, 0.3);
                display: inline-flex;
                align-items: center;
            }

            .save-btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 25px rgba(99, 102, 241, 0.4);
            }

            .save-btn i {
                margin-right: 10px;
            }

            /* Animations */
            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes pulse {
                0% {
                    box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.7);
                }

                70% {
                    box-shadow: 0 0 0 10px rgba(99, 102, 241, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgba(99, 102, 241, 0);
                }
            }

            /* Responsive */
            @media (max-width: 1024px) {
                .dashboard-content {
                    grid-template-columns: 1fr;
                }

                .dashboard-nav {
                    position: relative;
                    top: 0;
                }

                .sidebar-toggle {
                    display: block;
                }

                .dashboard-nav.collapsed {
                    display: none;
                }
            }

            @media (max-width: 768px) {
                .tab-content {
                    padding: 25px;
                }

                .profile-image-container {
                    flex-direction: column;
                    text-align: center;
                }

                .profile-upload {
                    margin-left: 0;
                    margin-top: 20px;
                }

                .social-links {
                    grid-template-columns: 1fr;
                }
            }

            /* Custom Scrollbar */
            ::-webkit-scrollbar {
                width: 8px;
            }

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb {
                background: var(--primary-light);
                border-radius: 4px;
            }

            ::-webkit-scrollbar-thumb:hover {
                background: var(--primary);
            }

            /* Toggle Switch */
            .toggle-switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 30px;
            }

            .toggle-switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .toggle-slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                transition: .4s;
                border-radius: 34px;
            }

            .toggle-slider:before {
                position: absolute;
                content: "";
                height: 22px;
                width: 22px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                transition: .4s;
                border-radius: 50%;
            }

            input:checked+.toggle-slider {
                background-color: var(--primary);
            }

            input:checked+.toggle-slider:before {
                transform: translateX(30px);
            }

            /* Experience & Education Tables */
            .experience-table {
                width: 100%;
                border-collapse: collapse;
                background: white;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            }

            .experience-table th {
                background: #f8fafc;
                padding: 18px 15px;
                text-align: left;
                font-weight: 600;
                color: var(--dark);
                border-bottom: 2px solid var(--gray-light);
            }

            .experience-table td {
                padding: 18px 15px;
                border-bottom: 1px solid var(--gray-light);
                transition: var(--transition);
            }

            .experience-table tr:hover td {
                background: #f8fafc;
            }

            .add-new-btn {
                background: transparent;
                border: 2px dashed var(--primary-light);
                color: var(--primary);
                padding: 14px 24px;
                border-radius: 10px;
                font-weight: 500;
                cursor: pointer;
                transition: var(--transition);
                display: inline-flex;
                align-items: center;
            }

            .add-new-btn:hover {
                background: rgba(99, 102, 241, 0.05);
                border-color: var(--primary);
                transform: translateY(-2px);
            }

            .add-new-btn i {
                margin-right: 10px;
            }
        </style>
        <script>
            // DOM Elements
            const sidebarToggle = document.getElementById('sidebarToggle');
            const dashboardNav = document.getElementById('dashboardNav');
            const navLinks = document.querySelectorAll('.nav-link');
            const tabPanes = document.querySelectorAll('.tab-pane');
            const activeIndicator = document.getElementById('activeIndicator');
            const uploadImageBtn = document.getElementById('uploadImageBtn');
            const imageUpload = document.getElementById('imageUpload');
            const profileImage = document.getElementById('profileImage');

            // Tab Switching Functionality
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Remove active class from all links and panes
                    navLinks.forEach(item => item.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Add active class to clicked link
                    this.classList.add('active');

                    // Show corresponding tab pane
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(`${tabId}-tab`).classList.add('active');

                    // Update active indicator position
                    updateActiveIndicator(this);

                    // Close sidebar on mobile after clicking
                    if (window.innerWidth <= 1024) {
                        dashboardNav.classList.add('collapsed');
                    }
                });
            });

            // Update active indicator position
            function updateActiveIndicator(activeLink) {
                const linkRect = activeLink.getBoundingClientRect();
                const navRect = activeLink.closest('.nav-tabs-container').getBoundingClientRect();

                activeIndicator.style.transform = `translateY(${linkRect.top - navRect.top}px)`;
                activeIndicator.style.height = `${linkRect.height}px`;
            }

            // Initialize active indicator position
            const activeLink = document.querySelector('.nav-link.active');
            if (activeLink) {
                updateActiveIndicator(activeLink);
            }

            // Toggle sidebar on mobile
            sidebarToggle.addEventListener('click', function() {
                dashboardNav.classList.toggle('collapsed');
            });

            // Profile image upload
            uploadImageBtn.addEventListener('click', function() {
                imageUpload.click();
            });

            imageUpload.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        profileImage.src = e.target.result;

                        // Add animation effect
                        profileImage.style.transform = 'scale(1.1)';
                        setTimeout(() => {
                            profileImage.style.transform = 'scale(1)';
                        }, 300);
                    };

                    reader.readAsDataURL(this.files[0]);

                    // Show success message
                    showNotification('Profile image updated successfully!', 'success');
                }
            });

            // Chip removal functionality
            document.querySelectorAll('.chip i').forEach(icon => {
                icon.addEventListener('click', function() {
                    const chip = this.closest('.chip');
                    chip.style.transform = 'scale(0)';
                    chip.style.opacity = '0';

                    setTimeout(() => {
                        chip.remove();
                    }, 300);
                });
            });

            // Add new skill/language on Enter key
            document.querySelectorAll('input[placeholder*="Add a new"]').forEach(input => {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter' && this.value.trim() !== '') {
                        const chipsContainer = this.closest('.form-section').querySelector('.chips-container');
                        const chip = document.createElement('div');
                        chip.className = 'chip';
                        chip.innerHTML = `${this.value.trim()} <i class="fas fa-times"></i>`;

                        // Add removal event to the new chip
                        chip.querySelector('i').addEventListener('click', function() {
                            const parentChip = this.closest('.chip');
                            parentChip.style.transform = 'scale(0)';
                            parentChip.style.opacity = '0';

                            setTimeout(() => {
                                parentChip.remove();
                            }, 300);
                        });

                        chipsContainer.appendChild(chip);
                        this.value = '';

                        // Animation
                        chip.style.transform = 'scale(0)';
                        setTimeout(() => {
                            chip.style.transform = 'scale(1)';
                        }, 10);
                    }
                });
            });

            // Save buttons functionality
            document.querySelectorAll('.save-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const originalText = this.innerHTML;

                    // Show loading state
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
                    this.disabled = true;

                    // Simulate API call
                    setTimeout(() => {
                        // Show success state
                        this.innerHTML = '<i class="fas fa-check"></i> Saved!';
                        this.style.background =
                            'linear-gradient(135deg, var(--success) 0%, #059669 100%)';

                        // Reset after 2 seconds
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.style.background =
                                'linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%)';
                            this.disabled = false;

                            // Show notification
                            showNotification('Changes saved successfully!', 'success');
                        }, 2000);
                    }, 1500);
                });
            });

            // Action buttons in tables
            document.querySelectorAll('.action-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();

                    const icon = this.querySelector('i');

                    if (icon.classList.contains('fa-trash-alt')) {
                        if (confirm('Are you sure you want to delete this item?')) {
                            const row = this.closest('tr');
                            row.style.transform = 'translateX(100px)';
                            row.style.opacity = '0';

                            setTimeout(() => {
                                row.remove();
                                showNotification('Item deleted successfully!', 'warning');
                            }, 300);
                        }
                    } else if (icon.classList.contains('fa-edit')) {
                        showNotification('Edit feature coming soon!', 'info');
                    } else if (icon.classList.contains('fa-eye')) {
                        showNotification('Opening document...', 'info');
                    } else if (icon.classList.contains('fa-download')) {
                        showNotification('Download started!', 'success');
                    }
                });
            });

            // Notification function
            function showNotification(message, type) {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `notification ${type}`;
                notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'warning' ? 'exclamation-triangle' : 'info-circle'}"></i>
                <span>${message}</span>
            `;

                // Style the notification
                notification.style.cssText = `
                position: fixed;
                top: 30px;
                right: 30px;
                background: ${type === 'success' ? '#10b981' : type === 'warning' ? '#f59e0b' : '#3b82f6'};
                color: white;
                padding: 16px 24px;
                border-radius: 12px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                display: flex;
                align-items: center;
                gap: 12px;
                z-index: 1000;
                transform: translateX(150%);
                transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            `;

                document.body.appendChild(notification);

                // Show notification
                setTimeout(() => {
                    notification.style.transform = 'translateX(0)';
                }, 10);

                // Hide and remove notification after 3 seconds
                setTimeout(() => {
                    notification.style.transform = 'translateX(150%)';

                    setTimeout(() => {
                        notification.remove();
                    }, 400);
                }, 3000);
            }

            // Add hover effects to social links
            document.querySelectorAll('.social-link-item').forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Update active indicator on window resize
            window.addEventListener('resize', function() {
                const activeLink = document.querySelector('.nav-link.active');
                if (activeLink) {
                    updateActiveIndicator(activeLink);
                }
            });

            // Initialize with a welcome notification
            setTimeout(() => {
                showNotification('Welcome to your settings dashboard!', 'info');
            }, 1000);
        </script>
    @endsection
