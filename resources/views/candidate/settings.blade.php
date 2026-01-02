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

                    <!-- Experience Modal -->
                    <div class="modal fade" id="experienceModal" tabindex="-1" aria-labelledby="experienceModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="experienceModalLabel">
                                        <i class="fas fa-briefcase me-2"></i>Add Work Experience
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="experienceForm">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="jobTitle" class="form-label">Job Title*</label>
                                                <input type="text" class="form-control" id="jobTitle"
                                                    placeholder="e.g., Senior Software Engineer" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="companyName" class="form-label">Company Name*</label>
                                                <input type="text" class="form-control" id="companyName"
                                                    placeholder="e.g., Google" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="employmentType" class="form-label">Employment Type</label>
                                                <select class="form-control" id="employmentType">
                                                    <option value="full-time">Full-time</option>
                                                    <option value="part-time">Part-time</option>
                                                    <option value="contract">Contract</option>
                                                    <option value="freelance">Freelance</option>
                                                    <option value="internship">Internship</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text" class="form-control" id="location"
                                                    placeholder="e.g., San Francisco, CA">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="startDate" class="form-label">Start Date*</label>
                                                <input type="month" class="form-control" id="startDate" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="endDate" class="form-label">End Date</label>
                                                <input type="month" class="form-control" id="endDate">
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="checkbox" id="currentlyWorking">
                                                    <label class="form-check-label" for="currentlyWorking">
                                                        I currently work here
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="description" class="form-label">Job Description</label>
                                                <textarea class="form-control" id="description" rows="4"
                                                    placeholder="Describe your responsibilities and achievements..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="saveExperience">Save
                                        Experience</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Education Modal -->
                    <div class="modal fade" id="educationModal" tabindex="-1" aria-labelledby="educationModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="educationModalLabel">
                                        <i class="fas fa-graduation-cap me-2"></i>Add Education
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="educationForm">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="degree" class="form-label">Degree*</label>
                                                <input type="text" class="form-control" id="degree"
                                                    placeholder="e.g., Bachelor of Science" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="fieldOfStudy" class="form-label">Field of Study*</label>
                                                <input type="text" class="form-control" id="fieldOfStudy"
                                                    placeholder="e.g., Computer Science" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="institution" class="form-label">Institution*</label>
                                                <input type="text" class="form-control" id="institution"
                                                    placeholder="e.g., Stanford University" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="eduLocation" class="form-label">Location</label>
                                                <input type="text" class="form-control" id="eduLocation"
                                                    placeholder="e.g., Stanford, CA">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="eduStartDate" class="form-label">Start Date*</label>
                                                <input type="month" class="form-control" id="eduStartDate" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="eduEndDate" class="form-label">End Date</label>
                                                <input type="month" class="form-control" id="eduEndDate">
                                                <div class="form-check mt-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="currentlyStudying">
                                                    <label class="form-check-label" for="currentlyStudying">
                                                        I currently study here
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="grade" class="form-label">Grade/GPA</label>
                                                <input type="text" class="form-control" id="grade"
                                                    placeholder="e.g., 3.8/4.0 or First Class">
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="activities" class="form-label">Activities & Societies</label>
                                                <textarea class="form-control" id="activities" rows="3" placeholder="e.g., Chess Club, Student Council..."></textarea>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="eduDescription" class="form-label">Description</label>
                                                <textarea class="form-control" id="eduDescription" rows="3"
                                                    placeholder="Additional details about your education..."></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="saveEducation">Save
                                        Education</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Modal -->
                    <div class="modal fade" id="socialMediaModal" tabindex="-1" aria-labelledby="socialMediaModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="socialMediaModalLabel">
                                        <i class="fas fa-plus me-2"></i><span id="modalTitle">Add Social Media</span>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="socialMediaForm">
                                        <input type="hidden" id="socialMediaId">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="socialPlatform" class="form-label">Platform*</label>
                                                <select class="form-control" id="socialPlatform" required>
                                                    <option value="">Select Platform</option>
                                                    <option value="facebook">Facebook</option>
                                                    <option value="twitter">Twitter</option>
                                                    <option value="linkedin">LinkedIn</option>
                                                    <option value="github">GitHub</option>
                                                    <option value="instagram">Instagram</option>
                                                    <option value="youtube">YouTube</option>
                                                    <option value="pinterest">Pinterest</option>
                                                    <option value="tiktok">TikTok</option>
                                                    <option value="whatsapp">WhatsApp</option>
                                                    <option value="telegram">Telegram</option>
                                                    <option value="reddit">Reddit</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="socialUrl" class="form-label">Profile URL*</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="urlPrefix">
                                                        <i class="fas fa-link"></i>
                                                    </span>
                                                    <input type="url" class="form-control" id="socialUrl"
                                                        placeholder="https://example.com/username" required>
                                                </div>
                                                <small class="form-text text-muted">Enter the full URL of your
                                                    profile</small>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="socialUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="socialUsername"
                                                    placeholder="yourusername">
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="socialVisibility" class="form-label">Visibility</label>
                                                <select class="form-control" id="socialVisibility">
                                                    <option value="public">Public (Visible to everyone)</option>
                                                    <option value="private">Private (Only visible to you)</option>
                                                    <option value="employers">Only Employers</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="saveSocialMedia">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resume Upload Modal -->
                    <div class="modal fade" id="resumeUploadModal" tabindex="-1"
                        aria-labelledby="resumeUploadModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="resumeUploadModalLabel">
                                        <i class="fas fa-file-upload me-2"></i>Upload Resume
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="resume-upload-area" id="resumeDropArea">
                                        <div class="upload-icon">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                        </div>
                                        <h4>Drag & Drop your resume here</h4>
                                        <p class="text-muted">or click to browse files</p>
                                        <p class="file-types">Supported formats: PDF, DOC, DOCX, TXT (Max 5MB)</p>
                                        <input type="file" id="resumeFileInput" accept=".pdf,.doc,.docx,.txt"
                                            style="display: none;">
                                        <button class="upload-btn" id="browseResumeBtn">
                                            <i class="fas fa-folder-open"></i>
                                            Browse Files
                                        </button>
                                    </div>

                                    <div class="resume-preview mt-4 d-none" id="resumePreview">
                                        <div class="preview-header">
                                            <h5>File Preview</h5>
                                        </div>
                                        <div class="preview-content">
                                            <div class="file-info">
                                                <div class="file-icon">
                                                    <i class="fas fa-file-pdf"></i>
                                                </div>
                                                <div class="file-details">
                                                    <h6 id="fileName">document.pdf</h6>
                                                    <p class="text-muted" id="fileSize">0 KB</p>
                                                </div>
                                                <button class="action-btn" id="removeFileBtn">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <div class="progress mt-3" style="height: 6px; display: none;"
                                                id="uploadProgress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                    role="progressbar" style="width: 0%"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="resume-details mt-4">
                                        <h5 class="mb-3">Resume Details</h5>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="resumeTitle" class="form-label">Resume Title*</label>
                                                <input type="text" class="form-control" id="resumeTitle"
                                                    placeholder="e.g., Senior Developer Resume">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="resumeType" class="form-label">Resume Type</label>
                                                <select class="form-control" id="resumeType">
                                                    <option value="primary">Primary Resume</option>
                                                    <option value="secondary">Secondary Resume</option>
                                                    <option value="targeted">Targeted Resume</option>
                                                    <option value="academic">Academic CV</option>
                                                </select>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="resumeDescription" class="form-label">Description
                                                    (Optional)</label>
                                                <textarea class="form-control" id="resumeDescription" rows="3"
                                                    placeholder="Brief description about this resume..."></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="setAsDefault"
                                                        checked>
                                                    <label class="form-check-label" for="setAsDefault">
                                                        Set as default resume
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="uploadResumeBtn" disabled>
                                        <i class="fas fa-upload"></i>
                                        Upload Resume
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                                            value="Senior Software Engineer" placeholder="Your job title">
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
                                            <div class="tab-header"
                                                style="border-bottom: none; margin-bottom: 15px; padding-bottom: 0;">
                                                <h3 class="form-section-title" style="margin-bottom: 0;"><i
                                                        class="fas fa-file-alt"></i> Your Resume/CV</h3>
                                                <button class="add-new-btn" id="uploadNewResumeBtn">
                                                    <i class="fas fa-plus"></i>
                                                    Upload New Resume
                                                </button>
                                            </div>
                                            <p>Manage your resumes and CVs</p>

                                            <div class="resume-list" id="resumeList">
                                                <!-- Default Resume -->
                                                <div class="resume-item default-resume" data-id="1">
                                                    <div class="resume-status">
                                                        <span class="badge bg-primary">Default</span>
                                                    </div>
                                                    <div class="resume-icon">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </div>
                                                    <div class="resume-details">
                                                        <h4>John_Doe_Resume.pdf</h4>
                                                        <p class="text-muted">Senior Developer • Updated 2 days ago • 78.4
                                                            KB</p>
                                                        <div class="resume-tags">
                                                            <span class="resume-tag">Software Engineer</span>
                                                            <span class="resume-tag">Full Stack</span>
                                                            <span class="resume-tag">5+ Years Exp</span>
                                                        </div>
                                                    </div>
                                                    <div class="resume-actions">
                                                        <button class="action-btn view-resume-btn" data-id="1">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="action-btn download-resume-btn" data-id="1">
                                                            <i class="fas fa-download"></i>
                                                        </button>
                                                        <button class="action-btn edit-resume-btn" data-id="1">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button class="action-btn delete-resume-btn" data-id="1">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Other Resumes -->
                                                <div class="resume-item" data-id="2">
                                                    <div class="resume-icon">
                                                        <i class="fas fa-file-word"></i>
                                                    </div>
                                                    <div class="resume-details">
                                                        <h4>John_Doe_CV.docx</h4>
                                                        <p class="text-muted">Academic CV • Updated 1 week ago • 45.2 KB
                                                        </p>
                                                        <div class="resume-tags">
                                                            <span class="resume-tag">Academic</span>
                                                            <span class="resume-tag">Research</span>
                                                        </div>
                                                    </div>
                                                    <div class="resume-actions">
                                                        <button class="action-btn set-default-btn" data-id="2"
                                                            title="Set as Default">
                                                            <i class="fas fa-star"></i>
                                                        </button>
                                                        <button class="action-btn view-resume-btn" data-id="2">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="action-btn download-resume-btn" data-id="2">
                                                            <i class="fas fa-download"></i>
                                                        </button>
                                                        <button class="action-btn edit-resume-btn" data-id="2">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <button class="action-btn delete-resume-btn" data-id="2">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="resume-stats mt-4">
                                                <div class="stat-item">
                                                    <div class="stat-number">2</div>
                                                    <div class="stat-label">Total Resumes</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-number">78.4 KB</div>
                                                    <div class="stat-label">Largest File</div>
                                                </div>
                                                <div class="stat-item">
                                                    <div class="stat-number">1</div>
                                                    <div class="stat-label">Default Resume</div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="save-btn" id="saveBasicInfo">
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
                                                <div class="chip">Project Management <i class="fas fa-times"></i></div>
                                                <div class="chip">Python <i class="fas fa-times"></i></div>
                                                <div class="chip">Agile Methodologies <i class="fas fa-times"></i></div>
                                            </div>
                                            <div class="form-group" style="margin-top: 20px;">
                                                <input type="text" class="form-control"
                                                    placeholder="Add a new skill and press Enter">
                                            </div>
                                        </div>

                                        <div class="form-section">
                                            <h3 class="form-section-title"><i class="fas fa-language"></i> Languages</h3>
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

                                        <button class="save-btn" id="saveProfile">
                                            <i class="fas fa-save"></i>
                                            Update Profile
                                        </button>
                                    </div>

                                    <!-- Experience & Education Tab -->
                                    <div class="tab-pane" id="experience-tab">
                                        <div class="tab-header">
                                            <h2 class="tab-title">Experience & Education</h2>
                                            <button class="add-new-btn" id="addExperienceBtn">
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
                                                <tbody id="experienceTableBody">
                                                    <tr>
                                                        <td>Google</td>
                                                        <td>Senior Software Engineer</td>
                                                        <td>2021 - Present</td>
                                                        <td>
                                                            <button class="action-btn edit-btn">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class="action-btn delete-btn">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Facebook</td>
                                                        <td>Software Engineer</td>
                                                        <td>2019 - 2021</td>
                                                        <td>
                                                            <button class="action-btn edit-btn">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class="action-btn delete-btn">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Twitter</td>
                                                        <td>Frontend Developer</td>
                                                        <td>2017 - 2019</td>
                                                        <td>
                                                            <button class="action-btn edit-btn">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class="action-btn delete-btn">
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
                                                <button class="add-new-btn" id="addEducationBtn">
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
                                                <tbody id="educationTableBody">
                                                    <tr>
                                                        <td>Master of Computer Science</td>
                                                        <td>Stanford University</td>
                                                        <td>2015 - 2017</td>
                                                        <td>
                                                            <button class="action-btn edit-btn">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class="action-btn delete-btn">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bachelor of Engineering</td>
                                                        <td>MIT</td>
                                                        <td>2011 - 2015</td>
                                                        <td>
                                                            <button class="action-btn edit-btn">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class="action-btn delete-btn">
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
                                            <button class="add-new-btn" id="addSocialMediaBtn">
                                                <i class="fas fa-plus"></i>
                                                Add New
                                            </button>
                                        </div>

                                        <p class="tab-subtitle">Connect your social media profiles</p>

                                        <div class="form-section">
                                            <h3 class="form-section-title"><i class="fas fa-share-alt"></i> Social Links
                                            </h3>
                                            <p>Add links to your social media profiles to increase visibility</p>

                                            <div class="social-links" id="socialLinksContainer">
                                                <!-- Social links will be dynamically added here -->
                                            </div>
                                        </div>

                                        <div class="form-section">
                                            <h3 class="form-section-title"><i class="fas fa-chart-line"></i> Social Media
                                                Statistics</h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="stat-card">
                                                        <div class="stat-icon"
                                                            style="background: rgba(59, 89, 152, 0.1);">
                                                            <i class="fab fa-facebook-f" style="color: #3b5998;"></i>
                                                        </div>
                                                        <div class="stat-info">
                                                            <h4>5.2K</h4>
                                                            <p>Facebook Followers</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="stat-card">
                                                        <div class="stat-icon"
                                                            style="background: rgba(29, 161, 242, 0.1);">
                                                            <i class="fab fa-twitter" style="color: #1da1f2;"></i>
                                                        </div>
                                                        <div class="stat-info">
                                                            <h4>12.5K</h4>
                                                            <p>Twitter Followers</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="stat-card">
                                                        <div class="stat-icon"
                                                            style="background: rgba(0, 119, 181, 0.1);">
                                                            <i class="fab fa-linkedin-in" style="color: #0077b5;"></i>
                                                        </div>
                                                        <div class="stat-info">
                                                            <h4>8.7K</h4>
                                                            <p>LinkedIn Connections</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="save-btn" id="updateSocialBtn">
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
                                                                style="font-size: 14px; margin-top: 5px;">Make your profile
                                                                public</p>
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
                                                                style="font-size: 14px; margin-top: 5px;">Allow employers
                                                                to view your resume</p>
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
                                            <h3 class="form-section-title"><i class="fas fa-key"></i> Change Password</h3>
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
                                            <p>Once you delete your account, there is no going back. Please be certain.</p>
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
                </div>
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
            padding: 0px;
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

        /* Resume Upload Area */
        .resume-upload-area {
            border: 3px dashed var(--primary-light);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 20px;
        }

        .resume-upload-area:hover,
        .resume-upload-area.drag-over {
            border-color: var(--primary);
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            transform: translateY(-2px);
        }

        .upload-icon {
            font-size: 48px;
            color: var(--primary-light);
            margin-bottom: 15px;
            transition: var(--transition);
        }

        .resume-upload-area:hover .upload-icon {
            color: var(--primary);
            transform: translateY(-5px);
        }

        .resume-upload-area h4 {
            margin-bottom: 10px;
            color: var(--dark);
        }

        .file-types {
            font-size: 14px;
            color: var(--gray);
            margin: 15px 0;
        }

        /* Resume Preview */
        .resume-preview {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-light);
        }

        .preview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--gray-light);
        }

        .file-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .file-icon {
            width: 50px;
            height: 50px;
            background: rgba(239, 68, 68, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--danger);
        }

        .file-icon .fa-file-word {
            color: #2b579a;
        }

        .file-icon .fa-file-pdf {
            color: #d93025;
        }

        .file-icon .fa-file-alt {
            color: var(--primary);
        }

        .file-details {
            flex: 1;
        }

        .file-details h6 {
            margin: 0;
            font-weight: 600;
        }

        /* Resume List */
        .resume-list {
            margin-top: 20px;
        }

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
            position: relative;
        }

        .resume-item:hover {
            transform: translateX(5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }

        .resume-item.default-resume {
            border-left: 4px solid var(--success);
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }

        .resume-status {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .badge {
            padding: 4px 8px;
            font-size: 11px;
            border-radius: 20px;
            font-weight: 600;
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

        .default-resume .resume-icon {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .resume-details {
            flex: 1;
            min-width: 0;
        }

        .resume-details h4 {
            margin: 0 0 5px 0;
            font-size: 16px;
            font-weight: 600;
            color: var(--dark);
        }

        .resume-details .text-muted {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .resume-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .resume-tag {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .resume-actions {
            display: flex;
            gap: 8px;
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

        .set-default-btn:hover {
            background: var(--warning);
            color: white;
        }

        .delete-resume-btn:hover {
            background: var(--danger);
            color: white;
        }

        /* Resume Stats */
        .resume-stats {
            display: flex;
            gap: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 12px;
            border: 1px solid var(--gray-light);
        }

        .stat-item {
            text-align: center;
            flex: 1;
        }

        .stat-number {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: var(--gray);
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

        /* Social Media */
        .social-details {
            flex: 1;
            min-width: 0;
        }

        .social-details h4 {
            margin: 0 0 5px 0;
            font-size: 16px;
            font-weight: 600;
        }

        .social-details p {
            margin: 0;
            color: var(--gray);
            font-size: 14px;
            word-break: break-all;
        }

        .social-actions {
            display: flex;
            gap: 8px;
            opacity: 0;
            transition: var(--transition);
        }

        .social-link-item:hover .social-actions {
            opacity: 1;
        }

        .stat-card {
            display: flex;
            align-items: center;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 24px;
        }

        .stat-info h4 {
            margin: 0 0 5px 0;
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
        }

        .stat-info p {
            margin: 0;
            color: var(--gray);
            font-size: 14px;
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
            position: relative;
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

        .youtube {
            background: #ff0000;
        }

        .pinterest {
            background: #bd081c;
        }

        .tiktok {
            background: #000000;
        }

        .whatsapp {
            background: #25d366;
        }

        .telegram {
            background: #0088cc;
        }

        .reddit {
            background: #ff4500;
        }

        .other {
            background: #6366f1;
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

        /* Modal Styles */
        .modal-content {
            border-radius: var(--border-radius);
            border: none;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            border-bottom: none;
            padding: 25px 30px;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
            opacity: 0.8;
            transition: var(--transition);
        }

        .modal-header .btn-close:hover {
            opacity: 1;
            transform: rotate(90deg);
        }

        .modal-title {
            font-size: 20px;
            font-weight: 600;
        }

        .modal-body {
            padding: 30px;
            max-height: 70vh;
            overflow-y: auto;
        }

        .modal-footer {
            padding: 20px 30px;
            border-top: 1px solid var(--gray-light);
            background: #f8fafc;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 10px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-secondary {
            background: var(--gray-light);
            color: var(--dark);
        }

        .btn-secondary:hover {
            background: var(--gray);
            color: white;
            transform: translateY(-2px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(99, 102, 241, 0.4);
        }

        /* Input Group */
        .input-group-text {
            background: var(--gray-light);
            border: 1px solid var(--gray-light);
        }

        .form-text {
            font-size: 12px;
            margin-top: 5px;
        }

        /* Empty state */
        .empty-state {
            text-align: center;
            padding: 50px 20px;
            color: var(--gray);
        }

        .empty-state i {
            font-size: 48px;
            margin-bottom: 15px;
            color: var(--gray-light);
        }

        .empty-state h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--dark);
        }

        /* Experience Table */
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

        /* Progress Bar */
        .progress {
            height: 6px;
            background: var(--gray-light);
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-bar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            transition: width 0.3s ease;
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            animation: progress-bar-stripes 1s linear infinite;
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0;
            }

            to {
                background-position: 0 0;
            }
        }

        /* Scrollbar for modal */
        .modal-body::-webkit-scrollbar {
            width: 6px;
        }

        .modal-body::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .modal-body::-webkit-scrollbar-thumb {
            background: var(--primary-light);
            border-radius: 3px;
        }

        .modal-body::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
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

            .modal-dialog {
                margin: 10px;
            }

            .modal-body {
                padding: 20px;
            }

            .resume-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .resume-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .resume-actions {
                margin-top: 15px;
                width: 100%;
                justify-content: flex-end;
            }

            .resume-stats {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

        // Modal Elements
        const addExperienceBtn = document.getElementById('addExperienceBtn');
        const addEducationBtn = document.getElementById('addEducationBtn');
        const saveExperienceBtn = document.getElementById('saveExperience');
        const saveEducationBtn = document.getElementById('saveEducation');
        const experienceTableBody = document.getElementById('experienceTableBody');
        const educationTableBody = document.getElementById('educationTableBody');
        const currentlyWorkingCheckbox = document.getElementById('currentlyWorking');
        const currentlyStudyingCheckbox = document.getElementById('currentlyStudying');
        const endDateInput = document.getElementById('endDate');
        const eduEndDateInput = document.getElementById('eduEndDate');

        // Social Media Elements
        const socialMediaModal = new bootstrap.Modal(document.getElementById('socialMediaModal'));
        const addSocialMediaBtn = document.getElementById('addSocialMediaBtn');
        const saveSocialMediaBtn = document.getElementById('saveSocialMedia');
        const socialLinksContainer = document.getElementById('socialLinksContainer');
        const socialPlatformSelect = document.getElementById('socialPlatform');
        const socialUrlInput = document.getElementById('socialUrl');
        const socialUsernameInput = document.getElementById('socialUsername');
        const socialVisibilitySelect = document.getElementById('socialVisibility');
        const socialMediaIdInput = document.getElementById('socialMediaId');
        const modalTitle = document.getElementById('modalTitle');
        const updateSocialBtn = document.getElementById('updateSocialBtn');
        const urlPrefix = document.getElementById('urlPrefix');

        // Resume Upload Elements
        const resumeUploadModal = new bootstrap.Modal(document.getElementById('resumeUploadModal'));
        const uploadNewResumeBtn = document.getElementById('uploadNewResumeBtn');
        const resumeFileInput = document.getElementById('resumeFileInput');
        const browseResumeBtn = document.getElementById('browseResumeBtn');
        const resumeDropArea = document.getElementById('resumeDropArea');
        const resumePreview = document.getElementById('resumePreview');
        const fileName = document.getElementById('fileName');
        const fileSize = document.getElementById('fileSize');
        const removeFileBtn = document.getElementById('removeFileBtn');
        const uploadProgress = document.getElementById('uploadProgress');
        const uploadResumeBtn = document.getElementById('uploadResumeBtn');
        const resumeTitle = document.getElementById('resumeTitle');
        const resumeType = document.getElementById('resumeType');
        const resumeDescription = document.getElementById('resumeDescription');
        const setAsDefault = document.getElementById('setAsDefault');
        const resumeList = document.getElementById('resumeList');
        const saveBasicInfo = document.getElementById('saveBasicInfo');
        const saveProfile = document.getElementById('saveProfile');

        // Initialize modals
        const experienceModal = new bootstrap.Modal(document.getElementById('experienceModal'));
        const educationModal = new bootstrap.Modal(document.getElementById('educationModal'));

        // Social Media Data
        let socialMediaData = {
            1: {
                platform: 'facebook',
                url: 'https://facebook.com/johndoe',
                username: 'johndoe',
                visibility: 'public'
            },
            2: {
                platform: 'twitter',
                url: 'https://twitter.com/johndoe',
                username: 'johndoe',
                visibility: 'public'
            },
            3: {
                platform: 'linkedin',
                url: 'https://linkedin.com/in/johndoe',
                username: 'johndoe',
                visibility: 'public'
            },
            4: {
                platform: 'github',
                url: 'https://github.com/johndoe',
                username: 'johndoe',
                visibility: 'public'
            },
            5: {
                platform: 'instagram',
                url: 'https://instagram.com/johndoe',
                username: 'johndoe',
                visibility: 'public'
            }
        };

        // Resume Data
        let resumeData = {
            1: {
                id: 1,
                title: 'John_Doe_Resume.pdf',
                description: 'Senior Developer Resume',
                type: 'primary',
                fileType: 'pdf',
                size: '78.4 KB',
                date: '2 days ago',
                tags: ['Software Engineer', 'Full Stack', '5+ Years Exp'],
                isDefault: true
            },
            2: {
                id: 2,
                title: 'John_Doe_CV.docx',
                description: 'Academic CV',
                type: 'academic',
                fileType: 'word',
                size: '45.2 KB',
                date: '1 week ago',
                tags: ['Academic', 'Research'],
                isDefault: false
            }
        };

        // Platform configurations
        const platformConfig = {
            facebook: {
                icon: 'fab fa-facebook-f',
                color: '#3b5998',
                name: 'Facebook'
            },
            twitter: {
                icon: 'fab fa-twitter',
                color: '#1da1f2',
                name: 'Twitter'
            },
            linkedin: {
                icon: 'fab fa-linkedin-in',
                color: '#0077b5',
                name: 'LinkedIn'
            },
            github: {
                icon: 'fab fa-github',
                color: '#333',
                name: 'GitHub'
            },
            instagram: {
                icon: 'fab fa-instagram',
                color: '#e1306c',
                name: 'Instagram',
                gradient: 'linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d)'
            },
            youtube: {
                icon: 'fab fa-youtube',
                color: '#ff0000',
                name: 'YouTube'
            },
            pinterest: {
                icon: 'fab fa-pinterest',
                color: '#bd081c',
                name: 'Pinterest'
            },
            tiktok: {
                icon: 'fab fa-tiktok',
                color: '#000000',
                name: 'TikTok'
            },
            whatsapp: {
                icon: 'fab fa-whatsapp',
                color: '#25d366',
                name: 'WhatsApp'
            },
            telegram: {
                icon: 'fab fa-telegram',
                color: '#0088cc',
                name: 'Telegram'
            },
            reddit: {
                icon: 'fab fa-reddit',
                color: '#ff4500',
                name: 'Reddit'
            },
            other: {
                icon: 'fas fa-globe',
                color: '#6366f1',
                name: 'Other'
            }
        };

        // File type configurations
        const fileTypeConfig = {
            pdf: {
                icon: 'fas fa-file-pdf',
                color: '#d93025'
            },
            word: {
                icon: 'fas fa-file-word',
                color: '#2b579a'
            },
            doc: {
                icon: 'fas fa-file-word',
                color: '#2b579a'
            },
            docx: {
                icon: 'fas fa-file-word',
                color: '#2b579a'
            },
            txt: {
                icon: 'fas fa-file-alt',
                color: '#6366f1'
            },
            default: {
                icon: 'fas fa-file',
                color: '#64748b'
            }
        };

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

        // Initialize Social Media
        function initializeSocialMedia() {
            socialLinksContainer.innerHTML = '';
            Object.keys(socialMediaData).forEach(id => {
                const social = socialMediaData[id];
                const config = platformConfig[social.platform];
                createSocialLinkElement(id, social, config);
            });
        }

        // Create social link element
        function createSocialLinkElement(id, social, config) {
            const socialItem = document.createElement('div');
            socialItem.className = 'social-link-item';
            socialItem.setAttribute('data-id', id);

            // Set icon style
            const iconStyle = config.gradient ?
                `background: ${config.gradient};` :
                `background: ${config.color};`;

            socialItem.innerHTML = `
            <div class="social-icon" style="${iconStyle}">
                <i class="${config.icon}"></i>
            </div>
            <div class="social-details">
                <h4>${config.name}</h4>
                <p>${social.url.replace('https://', '')}</p>
                ${social.username ? `<small class="text-muted">@${social.username}</small>` : ''}
            </div>
            <div class="social-actions">
                <button class="action-btn edit-social-btn" data-id="${id}">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-social-btn" data-id="${id}">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        `;

            socialLinksContainer.appendChild(socialItem);

            // Add event listeners
            const editBtn = socialItem.querySelector('.edit-social-btn');
            const deleteBtn = socialItem.querySelector('.delete-social-btn');

            editBtn.addEventListener('click', () => editSocialMedia(id));
            deleteBtn.addEventListener('click', () => deleteSocialMedia(id));
        }

        // Add new social media
        addSocialMediaBtn.addEventListener('click', () => {
            resetSocialMediaForm();
            modalTitle.textContent = 'Add Social Media';
            socialMediaIdInput.value = '';
            socialMediaModal.show();
        });

        // Platform change handler
        socialPlatformSelect.addEventListener('change', function() {
            const platform = this.value;
            const config = platformConfig[platform];

            if (config) {
                urlPrefix.innerHTML = `<i class="${config.icon}"></i>`;
            } else {
                urlPrefix.innerHTML = `<i class="fas fa-link"></i>`;
            }
        });

        // Edit social media
        function editSocialMedia(id) {
            const social = socialMediaData[id];
            if (!social) return;

            socialMediaIdInput.value = id;
            socialPlatformSelect.value = social.platform;
            socialUrlInput.value = social.url;
            socialUsernameInput.value = social.username || '';
            socialVisibilitySelect.value = social.visibility || 'public';
            modalTitle.textContent = 'Edit Social Media';

            // Update URL prefix icon
            const config = platformConfig[social.platform];
            if (config) {
                urlPrefix.innerHTML = `<i class="${config.icon}"></i>`;
            }

            socialMediaModal.show();
        }

        // Delete social media
        function deleteSocialMedia(id) {
            if (confirm('Are you sure you want to delete this social media link?')) {
                const socialItem = document.querySelector(`.social-link-item[data-id="${id}"]`);
                if (socialItem) {
                    socialItem.style.transform = 'translateX(100px)';
                    socialItem.style.opacity = '0';

                    setTimeout(() => {
                        delete socialMediaData[id];
                        socialItem.remove();
                        showNotification('Social media link deleted!', 'warning');
                        checkEmptySocialMedia();
                    }, 300);
                }
            }
        }

        // Save social media
        saveSocialMediaBtn.addEventListener('click', () => {
            const platform = socialPlatformSelect.value.trim();
            const url = socialUrlInput.value.trim();

            if (!platform || !url) {
                showNotification('Please fill in all required fields', 'warning');
                return;
            }

            if (!isValidUrl(url)) {
                showNotification('Please enter a valid URL', 'warning');
                return;
            }

            const id = socialMediaIdInput.value || Date.now().toString();
            const username = socialUsernameInput.value.trim();
            const visibility = socialVisibilitySelect.value;

            // Save data
            socialMediaData[id] = {
                platform,
                url,
                username,
                visibility
            };

            // Update or create element
            const existingItem = document.querySelector(`.social-link-item[data-id="${id}"]`);
            if (existingItem) {
                existingItem.remove();
            }

            const config = platformConfig[platform];
            createSocialLinkElement(id, socialMediaData[id], config);

            // Close modal and show success
            socialMediaModal.hide();
            showNotification(`Social media link ${socialMediaIdInput.value ? 'updated' : 'added'} successfully!`,
                'success');
            checkEmptySocialMedia();
        });

        // Check empty social media state
        function checkEmptySocialMedia() {
            const items = document.querySelectorAll('.social-link-item').length;
            if (items === 0) {
                socialLinksContainer.innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-share-alt"></i>
                    <h3>No Social Media Links</h3>
                    <p>Add your social media profiles to increase visibility</p>
                    <button class="add-new-btn" id="addFromEmptyBtn">
                        <i class="fas fa-plus"></i>
                        Add Your First Link
                    </button>
                </div>
            `;

                document.getElementById('addFromEmptyBtn')?.addEventListener('click', () => {
                    addSocialMediaBtn.click();
                });
            }
        }

        // URL validation
        function isValidUrl(string) {
            try {
                new URL(string);
                return true;
            } catch (_) {
                return false;
            }
        }

        // Reset social media form
        function resetSocialMediaForm() {
            document.getElementById('socialMediaForm').reset();
            urlPrefix.innerHTML = `<i class="fas fa-link"></i>`;
        }

        // Initialize Resumes
        function initializeResumes() {
            resumeList.innerHTML = '';
            Object.keys(resumeData).forEach(id => {
                const resume = resumeData[id];
                createResumeElement(resume);
            });
        }

        // Create resume element
        function createResumeElement(resume) {
            const resumeItem = document.createElement('div');
            resumeItem.className = `resume-item ${resume.isDefault ? 'default-resume' : ''}`;
            resumeItem.setAttribute('data-id', resume.id);

            const fileType = resume.fileType || 'default';
            const fileConfig = fileTypeConfig[fileType] || fileTypeConfig.default;

            resumeItem.innerHTML = `
            ${resume.isDefault ? '<div class="resume-status"><span class="badge bg-primary">Default</span></div>' : ''}
            <div class="resume-icon">
                <i class="${fileConfig.icon}"></i>
            </div>
            <div class="resume-details">
                <h4>${resume.title}</h4>
                <p class="text-muted">${resume.description} • Updated ${resume.date} • ${resume.size}</p>
                <div class="resume-tags">
                    ${resume.tags.map(tag => `<span class="resume-tag">${tag}</span>`).join('')}
                </div>
            </div>
            <div class="resume-actions">
                ${!resume.isDefault ? `
                        <button class="action-btn set-default-btn" data-id="${resume.id}" title="Set as Default">
                            <i class="fas fa-star"></i>
                        </button>
                    ` : ''}
                <button class="action-btn view-resume-btn" data-id="${resume.id}">
                    <i class="fas fa-eye"></i>
                </button>
                <button class="action-btn download-resume-btn" data-id="${resume.id}">
                    <i class="fas fa-download"></i>
                </button>
                <button class="action-btn edit-resume-btn" data-id="${resume.id}">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-resume-btn" data-id="${resume.id}">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        `;

            resumeList.appendChild(resumeItem);

            // Add event listeners
            const setDefaultBtn = resumeItem.querySelector('.set-default-btn');
            const viewBtn = resumeItem.querySelector('.view-resume-btn');
            const downloadBtn = resumeItem.querySelector('.download-resume-btn');
            const editBtn = resumeItem.querySelector('.edit-resume-btn');
            const deleteBtn = resumeItem.querySelector('.delete-resume-btn');

            if (setDefaultBtn) setDefaultBtn.addEventListener('click', () => setDefaultResume(resume.id));
            viewBtn.addEventListener('click', () => viewResume(resume.id));
            downloadBtn.addEventListener('click', () => downloadResume(resume.id));
            editBtn.addEventListener('click', () => editResume(resume.id));
            deleteBtn.addEventListener('click', () => deleteResume(resume.id));
        }

        // Upload new resume
        uploadNewResumeBtn.addEventListener('click', () => {
            resetResumeForm();
            resumeUploadModal.show();
        });

        // Browse resume file
        browseResumeBtn.addEventListener('click', () => {
            resumeFileInput.click();
        });

        // Handle file selection
        resumeFileInput.addEventListener('change', handleFileSelect);

        // Handle drag and drop
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            resumeDropArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            resumeDropArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            resumeDropArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            resumeDropArea.classList.add('drag-over');
        }

        function unhighlight() {
            resumeDropArea.classList.remove('drag-over');
        }

        resumeDropArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }

        function handleFileSelect(e) {
            const files = e.target.files;
            handleFiles(files);
        }

        function handleFiles(files) {
            if (files.length === 0) return;

            const file = files[0];

            // Validate file type
            const validTypes = ['.pdf', '.doc', '.docx', '.txt'];
            const fileExtension = '.' + file.name.split('.').pop().toLowerCase();

            if (!validTypes.includes(fileExtension)) {
                showNotification('Please upload a valid file type (PDF, DOC, DOCX, TXT)', 'warning');
                return;
            }

            // Validate file size (5MB max)
            if (file.size > 5 * 1024 * 1024) {
                showNotification('File size must be less than 5MB', 'warning');
                return;
            }

            // Update preview
            fileName.textContent = file.name;
            fileSize.textContent = formatFileSize(file.size);

            // Set file icon
            const fileIcon = resumePreview.querySelector('.file-icon i');
            let fileType = 'default';

            if (fileExtension === '.pdf') fileType = 'pdf';
            else if (['.doc', '.docx'].includes(fileExtension)) fileType = 'word';
            else if (fileExtension === '.txt') fileType = 'txt';

            const fileConfig = fileTypeConfig[fileType] || fileTypeConfig.default;
            fileIcon.className = fileConfig.icon;
            fileIcon.parentNode.style.background = fileConfig.color + '15';
            fileIcon.style.color = fileConfig.color;

            // Auto-fill title
            if (!resumeTitle.value) {
                const nameWithoutExt = file.name.replace(/\.[^/.]+$/, "");
                resumeTitle.value = nameWithoutExt;
            }

            // Show preview and enable upload button
            resumePreview.classList.remove('d-none');
            uploadResumeBtn.disabled = false;

            // Store file for upload
            window.selectedResumeFile = file;
        }

        // Remove selected file
        removeFileBtn.addEventListener('click', () => {
            resetResumeForm();
        });

        // Upload resume
        uploadResumeBtn.addEventListener('click', () => {
            if (!window.selectedResumeFile) {
                showNotification('Please select a file first', 'warning');
                return;
            }

            const title = resumeTitle.value.trim();
            if (!title) {
                showNotification('Please enter a resume title', 'warning');
                return;
            }

            // Show progress bar
            uploadProgress.style.display = 'block';

            // Simulate upload progress
            let progress = 0;
            const progressInterval = setInterval(() => {
                progress += 10;
                uploadProgress.querySelector('.progress-bar').style.width = `${progress}%`;

                if (progress >= 100) {
                    clearInterval(progressInterval);

                    // Create new resume
                    const newId = Date.now().toString();
                    const fileType = window.selectedResumeFile.name.split('.').pop().toLowerCase();

                    resumeData[newId] = {
                        id: newId,
                        title: window.selectedResumeFile.name,
                        description: resumeDescription.value || title,
                        type: resumeType.value,
                        fileType: fileType === 'pdf' ? 'pdf' : (['doc', 'docx'].includes(fileType) ?
                            'word' : 'txt'),
                        size: formatFileSize(window.selectedResumeFile.size),
                        date: 'Just now',
                        tags: [resumeType.options[resumeType.selectedIndex].text],
                        isDefault: setAsDefault.checked
                    };

                    // If set as default, update other resumes
                    if (setAsDefault.checked) {
                        Object.keys(resumeData).forEach(id => {
                            if (id !== newId) {
                                resumeData[id].isDefault = false;
                            }
                        });
                    }

                    // Update UI
                    initializeResumes();

                    // Close modal and show success
                    setTimeout(() => {
                        resumeUploadModal.hide();
                        showNotification('Resume uploaded successfully!', 'success');
                        resetResumeForm();
                    }, 500);
                }
            }, 100);
        });

        // Set default resume
        function setDefaultResume(id) {
            Object.keys(resumeData).forEach(resumeId => {
                resumeData[resumeId].isDefault = resumeId === id;
            });
            initializeResumes();
            showNotification('Default resume updated!', 'success');
        }

        // View resume
        function viewResume(id) {
            const resume = resumeData[id];
            showNotification(`Opening ${resume.title}...`, 'info');
            // In real app, this would open the file in a new tab or preview
        }

        // Download resume
        function downloadResume(id) {
            const resume = resumeData[id];
            showNotification(`Downloading ${resume.title}...`, 'success');
            // In real app, this would trigger file download
        }

        // Edit resume
        function editResume(id) {
            const resume = resumeData[id];
            showNotification('Edit feature coming soon!', 'info');
            // In real app, this would open edit modal with resume details
        }

        // Delete resume
        function deleteResume(id) {
            if (confirm('Are you sure you want to delete this resume? This action cannot be undone.')) {
                if (resumeData[id].isDefault && Object.keys(resumeData).length > 1) {
                    // Set another resume as default
                    const otherId = Object.keys(resumeData).find(resumeId => resumeId !== id);
                    if (otherId) {
                        resumeData[otherId].isDefault = true;
                    }
                }

                delete resumeData[id];
                initializeResumes();
                showNotification('Resume deleted successfully!', 'warning');
            }
        }

        // Reset resume form
        function resetResumeForm() {
            resumeFileInput.value = '';
            resumeTitle.value = '';
            resumeDescription.value = '';
            resumeType.value = 'primary';
            setAsDefault.checked = true;
            resumePreview.classList.add('d-none');
            uploadResumeBtn.disabled = true;
            uploadProgress.style.display = 'none';
            uploadProgress.querySelector('.progress-bar').style.width = '0%';
            window.selectedResumeFile = null;
        }

        // Format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // Save buttons functionality
        [saveBasicInfo, saveProfile, updateSocialBtn].forEach(button => {
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

        // Setup table row events
        function setupTableRowEvents(row) {
            const actionBtns = row.querySelectorAll('.action-btn');
            actionBtns.forEach(button => {
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
                    }
                });
            });
        }

        // Setup existing table rows
        document.querySelectorAll('#experienceTableBody tr, #educationTableBody tr').forEach(row => {
            setupTableRowEvents(row);
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
            z-index: 1100;
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
        // Modal functionality
        addExperienceBtn.addEventListener('click', () => {
            // Reset form
            document.getElementById('experienceForm').reset();
            currentlyWorkingCheckbox.checked = false;
            endDateInput.disabled = false;
            experienceModal.show();
        });

        addEducationBtn.addEventListener('click', () => {
            // Reset form
            document.getElementById('educationForm').reset();
            currentlyStudyingCheckbox.checked = false;
            eduEndDateInput.disabled = false;
            educationModal.show();
        });
        // Currently working checkbox handler
        currentlyWorkingCheckbox.addEventListener('change', function() {
            endDateInput.disabled = this.checked;
            if (this.checked) {
                endDateInput.value = '';
            }
        });

        // Currently studying checkbox handler
        currentlyStudyingCheckbox.addEventListener('change', function() {
            eduEndDateInput.disabled = this.checked;
            if (this.checked) {
                eduEndDateInput.value = '';
            }
        });

        // Save Experience
        saveExperienceBtn.addEventListener('click', () => {
            const jobTitle = document.getElementById('jobTitle').value.trim();
            const companyName = document.getElementById('companyName').value.trim();
            const startDate = document.getElementById('startDate').value;

            if (!jobTitle || !companyName || !startDate) {
                showNotification('Please fill in all required fields', 'warning');
                return;
            }

            const employmentType = document.getElementById('employmentType').value;
            const location = document.getElementById('location').value;
            const endDate = document.getElementById('endDate').value;
            const currentlyWorking = currentlyWorkingCheckbox.checked;
            const description = document.getElementById('description').value;

            // Format dates
            const startYear = startDate ? new Date(startDate).getFullYear() : '';
            const endYear = currentlyWorking ? 'Present' : (endDate ? new Date(endDate).getFullYear() : '');
            const period = `${startYear} - ${endYear}`;

            // Create new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            <td>${companyName}</td>
            <td>${jobTitle}</td>
            <td>${period}</td>
            <td>
                <button class="action-btn edit-btn">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        `;

            // Add animation
            newRow.style.opacity = '0';
            newRow.style.transform = 'translateY(20px)';
            experienceTableBody.appendChild(newRow);

            // Animate in
            setTimeout(() => {
                newRow.style.transition = 'all 0.3s ease';
                newRow.style.opacity = '1';
                newRow.style.transform = 'translateY(0)';
            }, 10);

            // Setup events for new row
            setupTableRowEvents(newRow);

            // Close modal and show success
            experienceModal.hide();
            showNotification('Experience added successfully!', 'success');
        });

        // Save Education
        saveEducationBtn.addEventListener('click', () => {
            const degree = document.getElementById('degree').value.trim();
            const fieldOfStudy = document.getElementById('fieldOfStudy').value.trim();
            const institution = document.getElementById('institution').value.trim();
            const eduStartDate = document.getElementById('eduStartDate').value;

            if (!degree || !fieldOfStudy || !institution || !eduStartDate) {
                showNotification('Please fill in all required fields', 'warning');
                return;
            }

            const eduLocation = document.getElementById('eduLocation').value;
            const eduEndDate = document.getElementById('eduEndDate').value;
            const currentlyStudying = currentlyStudyingCheckbox.checked;
            const grade = document.getElementById('grade').value;
            const activities = document.getElementById('activities').value;
            const eduDescription = document.getElementById('eduDescription').value;

            // Format dates
            const startYear = eduStartDate ? new Date(eduStartDate).getFullYear() : '';
            const endYear = currentlyStudying ? 'Present' : (eduEndDate ? new Date(eduEndDate).getFullYear() : '');
            const period = `${startYear} - ${endYear}`;

            // Create new row
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            <td>${degree} in ${fieldOfStudy}</td>
            <td>${institution}</td>
            <td>${period}</td>
            <td>
                <button class="action-btn edit-btn">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-btn">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        `;

            // Add animation
            newRow.style.opacity = '0';
            newRow.style.transform = 'translateY(20px)';
            educationTableBody.appendChild(newRow);

            // Animate in
            setTimeout(() => {
                newRow.style.transition = 'all 0.3s ease';
                newRow.style.opacity = '1';
                newRow.style.transform = 'translateY(0)';
            }, 10);

            // Setup events for new row
            setupTableRowEvents(newRow);

            // Close modal and show success
            educationModal.hide();
            showNotification('Education added successfully!', 'success');
        });

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

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            initializeSocialMedia();
            initializeResumes();

            // Add event delegation for social actions
            socialLinksContainer.addEventListener('click', function(e) {
                if (e.target.closest('.edit-social-btn')) {
                    const id = e.target.closest('.edit-social-btn').getAttribute('data-id');
                    editSocialMedia(id);
                } else if (e.target.closest('.delete-social-btn')) {
                    const id = e.target.closest('.delete-social-btn').getAttribute('data-id');
                    deleteSocialMedia(id);
                }
            });

            // Add event delegation for resume actions
            resumeList.addEventListener('click', function(e) {
                if (e.target.closest('.set-default-btn')) {
                    const id = e.target.closest('.set-default-btn').getAttribute('data-id');
                    setDefaultResume(id);
                } else if (e.target.closest('.view-resume-btn')) {
                    const id = e.target.closest('.view-resume-btn').getAttribute('data-id');
                    viewResume(id);
                } else if (e.target.closest('.download-resume-btn')) {
                    const id = e.target.closest('.download-resume-btn').getAttribute('data-id');
                    downloadResume(id);
                } else if (e.target.closest('.edit-resume-btn')) {
                    const id = e.target.closest('.edit-resume-btn').getAttribute('data-id');
                    editResume(id);
                } else if (e.target.closest('.delete-resume-btn')) {
                    const id = e.target.closest('.delete-resume-btn').getAttribute('data-id');
                    deleteResume(id);
                }
            });

            // Check initial empty state
            checkEmptySocialMedia();

            // Initialize with a welcome notification
            setTimeout(() => {
                showNotification('Welcome to your settings dashboard!', 'info');
            }, 1000);
        });
    </script>
@endsection
