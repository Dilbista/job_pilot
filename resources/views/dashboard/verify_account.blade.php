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
        
        /* Submit Documents Section */
        .submit-documents-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 30px;
            border: 1px solid #e2e8f0;
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 12px;
            color: #2563eb;
        }
        
        .document-type {
            font-size: 16px;
            color: #475569;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        
        .document-type strong {
            color: #1e293b;
        }
        
        .drag-drop-area {
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 50px 30px;
            text-align: center;
            background: white;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .drag-drop-area:hover {
            border-color: #2563eb;
            background: #f0f7ff;
        }
        
        .drag-drop-area.dragover {
            border-color: #2563eb;
            background: #dbeafe;
        }
        
        .drag-drop-icon {
            font-size: 48px;
            color: #94a3b8;
            margin-bottom: 20px;
        }
        
        .drag-drop-text {
            font-size: 18px;
            color: #475569;
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .drag-drop-subtext {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 20px;
        }
        
        .browse-link {
            color: #2563eb;
            font-weight: 600;
            text-decoration: underline;
            cursor: pointer;
        }
        
        .file-input {
            display: none;
        }
        
        .upload-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            font-size: 16px;
        }
        
        .upload-btn:hover {
            background: #1d4ed8;
        }
        
        .upload-btn:disabled {
            background: #94a3b8;
            cursor: not-allowed;
        }
        
        .selected-file {
            margin-top: 20px;
            padding: 15px;
            background: #dcfce7;
            border-radius: 8px;
            border: 1px solid #86efac;
            display: none;
        }
        
        .file-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .file-name {
            font-weight: 500;
            color: #166534;
            display: flex;
            align-items: center;
        }
        
        .file-name i {
            margin-right: 10px;
            font-size: 20px;
        }
        
        .file-size {
            color: #64748b;
            font-size: 14px;
        }
        
        .remove-file {
            background: #fef3c7;
            color: #92400e;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            font-size: 14px;
        }
        
        .file-requirements {
            margin-top: 20px;
            padding: 15px;
            background: #fef3c7;
            border-radius: 8px;
            border: 1px solid #fde68a;
        }
        
        .requirements-title {
            font-weight: 600;
            color: #92400e;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .requirements-title i {
            margin-right: 8px;
        }
        
        .requirements-list {
            list-style: none;
            padding-left: 5px;
        }
        
        .requirements-list li {
            margin-bottom: 5px;
            color: #92400e;
            font-size: 14px;
        }
        
        .requirements-list li i {
            margin-right: 8px;
            color: #f59e0b;
        }
        
        /* Verification Status */
        .verification-status {
            background: #f0f7ff;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #93c5fd;
            margin-bottom: 30px;
            display: none;
        }
        
        .status-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .status-icon {
            font-size: 24px;
            color: #2563eb;
            margin-right: 12px;
        }
        
        .status-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }
        
        .status-message {
            color: #475569;
            line-height: 1.6;
        }
        
        /* Chat Section */
        .chat-section {
            text-align: center;
            padding: 30px 20px;
            background: #f0f7ff;
            border-radius: 10px;
            border: 2px dashed #93c5fd;
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
        
        
        
        .contact-call {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-call i {
            color: #60a5fa;
            margin-right: 10px;
        }
        
        
        @media (max-width: 992px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .header-nav {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .nav-left {
                flex-wrap: wrap;
                gap: 15px;
            }
            
            .search-container {
                width: 100%;
            }
            
            .search-container input {
                width: 100%;
            }
            
            .drag-drop-area {
                padding: 30px 20px;
            }
            
            .file-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
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
      

        <!-- Dashboard Layout -->
        <div class="dashboard-layout">
            <!-- Sidebar -->
           @include('layouts.sidebar')
            
            <!-- Main Content -->
            <div class="dashboard-content">
                <div class="content-header">
                    <h1>Verify Account</h1>
                </div>
                
                <!-- Submit Documents Section -->
                <div class="submit-documents-section">
                    <div class="section-title">
                        <i class="fas fa-file-upload"></i> Submit Documents
                    </div>
                    
                    <div class="document-type">
                        <strong>Image of your NID/Driving Licence/Passport</strong><br>
                        Please upload a clear image of one of the following documents for identity verification.
                    </div>
                    
                    <!-- Drag & Drop Area -->
                    <div class="drag-drop-area" id="dragDropArea">
                        <div class="drag-drop-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="drag-drop-text">
                            Drag and drop a file here or click
                        </div>
                        <div class="drag-drop-subtext">
                            Supported formats: JPG, PNG, PDF (Max size: 5MB)
                        </div>
                        <div class="browse-link" id="browseLink">Browse files</div>
                        <input type="file" id="fileInput" class="file-input" accept=".jpg,.jpeg,.png,.pdf">
                    </div>
                    
                    <!-- Selected File Display -->
                    <div class="selected-file" id="selectedFile">
                        <div class="file-info">
                            <div>
                                <div class="file-name">
                                    <i class="fas fa-file-image"></i>
                                    <span id="fileName">document.jpg</span>
                                </div>
                                <div class="file-size" id="fileSize">2.4 MB</div>
                            </div>
                            <button class="remove-file" id="removeFile">Remove</button>
                        </div>
                    </div>
                    
                    <!-- File Requirements -->
                    <div class="file-requirements">
                        <div class="requirements-title">
                            <i class="fas fa-info-circle"></i> Important Requirements
                        </div>
                        <ul class="requirements-list">
                            <li><i class="fas fa-check-circle"></i> Document must be valid and not expired</li>
                            <li><i class="fas fa-check-circle"></i> All four corners of the document must be visible</li>
                            <li><i class="fas fa-check-circle"></i> Image must be clear and readable</li>
                            <li><i class="fas fa-check-circle"></i> File size must not exceed 5MB</li>
                        </ul>
                    </div>
                    
                    <!-- Upload Button -->
                    <div style="text-align: center; margin-top: 25px;">
                        <button class="upload-btn" id="uploadBtn" disabled>
                            <i class="fas fa-upload"></i> Upload
                        </button>
                    </div>
                </div>
                
                <!-- Verification Status (Initially Hidden) -->
                <div class="verification-status" id="verificationStatus">
                    <div class="status-header">
                        <div class="status-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="status-title">
                            Verification Under Review
                        </div>
                    </div>
                    <div class="status-message">
                        Your document has been successfully uploaded and is now under review. 
                        Our verification team will process your submission within 24-48 hours. 
                        You will receive a notification once the verification is complete.
                    </div>
                </div>
                
                <!-- Chat Section -->
                <div class="chat-section">
                    <div class="chat-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="chat-title">Chat with us</div>
                    <div class="chat-description">Need help with verification? Our support team is here to assist you.</div>
                    <button class="chat-btn">
                        <i class="fas fa-comment-dots"></i> Chat with us
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <script>
        // DOM Elements
        const dragDropArea = document.getElementById('dragDropArea');
        const browseLink = document.getElementById('browseLink');
        const fileInput = document.getElementById('fileInput');
        const selectedFile = document.getElementById('selectedFile');
        const fileName = document.getElementById('fileName');
        const fileSize = document.getElementById('fileSize');
        const removeFile = document.getElementById('removeFile');
        const uploadBtn = document.getElementById('uploadBtn');
        const verificationStatus = document.getElementById('verificationStatus');
        
        // File upload functionality
        let currentFile = null;
        
        // Browse file when clicking the drag-drop area or browse link
        dragDropArea.addEventListener('click', () => fileInput.click());
        browseLink.addEventListener('click', () => fileInput.click());
        
        // File input change handler
        fileInput.addEventListener('change', function(e) {
            if (this.files.length > 0) {
                handleFile(this.files[0]);
            }
        });
        
        // Drag and drop functionality
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dragDropArea.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dragDropArea.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            dragDropArea.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            dragDropArea.classList.add('dragover');
        }
        
        function unhighlight() {
            dragDropArea.classList.remove('dragover');
        }
        
        dragDropArea.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            
            if (files.length > 0) {
                handleFile(files[0]);
            }
        }
        
        // Handle selected file
        function handleFile(file) {
            // Check file type
            const validTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
            if (!validTypes.includes(file.type)) {
                alert('Invalid file type. Please upload JPG, PNG, or PDF files only.');
                return;
            }
            
            // Check file size (5MB max)
            const maxSize = 5 * 1024 * 1024; // 5MB in bytes
            if (file.size > maxSize) {
                alert('File size exceeds 5MB limit. Please choose a smaller file.');
                return;
            }
            
            currentFile = file;
            
            // Update UI to show selected file
            fileName.textContent = file.name;
            fileSize.textContent = formatFileSize(file.size);
            selectedFile.style.display = 'block';
            uploadBtn.disabled = false;
            
            // Change icon based on file type
            const fileIcon = selectedFile.querySelector('.file-name i');
            if (file.type.includes('image')) {
                fileIcon.className = 'fas fa-file-image';
            } else if (file.type === 'application/pdf') {
                fileIcon.className = 'fas fa-file-pdf';
            }
        }
        
        // Format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Remove file
        removeFile.addEventListener('click', function() {
            currentFile = null;
            selectedFile.style.display = 'none';
            uploadBtn.disabled = true;
            fileInput.value = '';
        });
        
        // Upload button click
        uploadBtn.addEventListener('click', function() {
            if (!currentFile) return;
            
            // Show loading state
            const originalText = uploadBtn.innerHTML;
            uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
            uploadBtn.disabled = true;
            
            // Simulate upload process
            setTimeout(() => {
                // Show success message
                alert('Document uploaded successfully! Your verification is now under review.');
                
                // Reset upload button
                uploadBtn.innerHTML = '<i class="fas fa-check"></i> Uploaded';
                uploadBtn.style.background = '#10b981';
                
                // Show verification status
                verificationStatus.style.display = 'block';
                
                // Reset after 5 seconds (for demo purposes)
                setTimeout(() => {
                    uploadBtn.innerHTML = originalText;
                    uploadBtn.disabled = false;
                    uploadBtn.style.background = '#2563eb';
                    selectedFile.style.display = 'none';
                    fileInput.value = '';
                    currentFile = null;
                }, 5000);
            }, 2000);
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
    @endsection
</body>
</html>