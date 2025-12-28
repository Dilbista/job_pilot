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
        
        /* Create Question Form */
        .create-question-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #e2e8f0;
            margin-bottom: 30px;
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
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #475569;
        }
        
        .question-textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            color: #333;
            resize: vertical;
            min-height: 100px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        
        .question-textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .question-textarea::placeholder {
            color: #94a3b8;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
        }
        
        .checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-weight: 500;
            color: #475569;
        }
        
        .checkbox-input {
            width: 18px;
            height: 18px;
            margin-right: 10px;
            cursor: pointer;
            accent-color: #2563eb;
        }
        
        .required-note {
            font-size: 14px;
            color: #64748b;
            margin-left: 28px;
            margin-top: 5px;
        }
        
        .save-question-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            font-size: 15px;
        }
        
        .save-question-btn:hover {
            background: #1d4ed8;
        }
        
        /* Existing Questions Section */
        .existing-questions-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #e2e8f0;
            margin-bottom: 30px;
        }
        
        .questions-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        
        .questions-table th {
            text-align: left;
            padding: 15px;
            background: #e2e8f0;
            color: #475569;
            font-weight: 600;
            border-bottom: 2px solid #cbd5e1;
        }
        
        .questions-table td {
            padding: 15px;
            border-bottom: 1px solid #e2e8f0;
            color: #475569;
        }
        
        .questions-table tr:last-child td {
            border-bottom: none;
        }
        
        .questions-table tr:hover {
            background: #f1f5f9;
        }
        
        .required-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }
        
        .required-yes {
            background: #dcfce7;
            color: #166534;
        }
        
        .required-no {
            background: #fef3c7;
            color: #92400e;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        
        .action-btn {
            padding: 6px 12px;
            border-radius: 6px;
            border: none;
            font-weight: 500;
            cursor: pointer;
            font-size: 13px;
            transition: all 0.3s ease;
        }
        
        .edit-btn {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .edit-btn:hover {
            background: #bfdbfe;
        }
        
        .delete-btn {
            background: #fee2e2;
            color: #991b1b;
        }
        
        .delete-btn:hover {
            background: #fecaca;
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
            
            .questions-table {
                display: block;
                overflow-x: auto;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 5px;
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
                    <h1>Custom Questions</h1>
                </div>
                
                <!-- Create Question Form -->
                <div class="create-question-section">
                    <div class="section-title">
                        <i class="fas fa-plus-circle"></i> Create Question
                    </div>
                    
                    <form id="createQuestionForm">
                        <div class="form-group">
                            <label class="form-label" for="question">Question...</label>
                            <textarea 
                                id="question" 
                                class="question-textarea" 
                                placeholder="Type your question here..."
                                required
                            ></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class="checkbox-group">
                                <input type="checkbox" id="required" class="checkbox-input">
                                <label for="required" class="checkbox-label">
                                    Required ( Candidate must answer )
                                </label>
                            </div>
                            <div class="required-note">
                                If checked, candidates will be required to answer this question when applying.
                            </div>
                        </div>
                        
                        <button type="submit" class="save-question-btn">
                            Save Question
                        </button>
                    </form>
                </div>
                
                <!-- Existing Questions Section -->
                <div class="existing-questions-section">
                    <div class="section-title">
                        <i class="fas fa-list"></i> Existing Questions (2)
                    </div>
                    
                    <table class="questions-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Required</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>No. of experience?</td>
                                <td>
                                    <span class="required-badge required-yes">Yes</span>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn">Edit</button>
                                        <button class="action-btn delete-btn">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>What role?</td>
                                <td>
                                    <span class="required-badge required-no">No</span>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn edit-btn">Edit</button>
                                        <button class="action-btn delete-btn">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Chat Section -->
                <div class="chat-section">
                    <div class="chat-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <div class="chat-title">Chat with us</div>
                    <div class="chat-description">Have questions? Our team is here to help you with any inquiries.</div>
                    <button class="chat-btn">
                        <i class="fas fa-comment-dots"></i> Chat with us
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Create Question Form Submission
        const createQuestionForm = document.getElementById('createQuestionForm');
        const questionsTableBody = document.querySelector('.questions-table tbody');
        
        createQuestionForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const questionInput = document.getElementById('question');
            const requiredCheckbox = document.getElementById('required');
            
            const questionText = questionInput.value.trim();
            const isRequired = requiredCheckbox.checked;
            
            if (!questionText) {
                alert('Please enter a question.');
                return;
            }
            
            // Create new table row
            const newRow = document.createElement('tr');
            
            // Create table cells
            const titleCell = document.createElement('td');
            titleCell.textContent = questionText;
            
            const requiredCell = document.createElement('td');
            const requiredBadge = document.createElement('span');
            requiredBadge.className = `required-badge ${isRequired ? 'required-yes' : 'required-no'}`;
            requiredBadge.textContent = isRequired ? 'Yes' : 'No';
            requiredCell.appendChild(requiredBadge);
            
            const actionCell = document.createElement('td');
            const actionButtons = document.createElement('div');
            actionButtons.className = 'action-buttons';
            
            const editButton = document.createElement('button');
            editButton.className = 'action-btn edit-btn';
            editButton.textContent = 'Edit';
            editButton.addEventListener('click', function() {
                editQuestion(newRow, questionText, isRequired);
            });
            
            const deleteButton = document.createElement('button');
            deleteButton.className = 'action-btn delete-btn';
            deleteButton.textContent = 'Delete';
            deleteButton.addEventListener('click', function() {
                deleteQuestion(newRow);
            });
            
            actionButtons.appendChild(editButton);
            actionButtons.appendChild(deleteButton);
            actionCell.appendChild(actionButtons);
            
            // Append cells to row
            newRow.appendChild(titleCell);
            newRow.appendChild(requiredCell);
            newRow.appendChild(actionCell);
            
            // Add row to table
            questionsTableBody.appendChild(newRow);
            
            // Update Existing Questions title
            const existingQuestionsTitle = document.querySelector('.existing-questions-section .section-title');
            const currentCount = document.querySelectorAll('.questions-table tbody tr').length;
            existingQuestionsTitle.innerHTML = `<i class="fas fa-list"></i> Existing Questions (${currentCount})`;
            
            // Reset form
            questionInput.value = '';
            requiredCheckbox.checked = false;
            
            // Show success message
            alert('Question added successfully!');
        });
        
        // Edit Question Function
        function editQuestion(row, currentText, currentRequired) {
            const titleCell = row.cells[0];
            const requiredCell = row.cells[1];
            
            // Create input for editing
            const input = document.createElement('input');
            input.type = 'text';
            input.value = currentText;
            input.className = 'question-textarea';
            input.style.width = '100%';
            input.style.padding = '8px';
            
            // Replace text with input
            const originalText = titleCell.textContent;
            titleCell.textContent = '';
            titleCell.appendChild(input);
            
            // Create checkbox for required
            const checkboxContainer = document.createElement('div');
            checkboxContainer.className = 'checkbox-group';
            
            const checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.id = 'editRequired';
            checkbox.className = 'checkbox-input';
            checkbox.checked = currentRequired;
            
            const checkboxLabel = document.createElement('label');
            checkboxLabel.htmlFor = 'editRequired';
            checkboxLabel.className = 'checkbox-label';
            checkboxLabel.textContent = 'Required';
            
            checkboxContainer.appendChild(checkbox);
            checkboxContainer.appendChild(checkboxLabel);
            
            // Replace required badge with checkbox
            const originalBadge = requiredCell.querySelector('.required-badge');
            requiredCell.textContent = '';
            requiredCell.appendChild(checkboxContainer);
            
            // Change action buttons to Save/Cancel
            const actionCell = row.cells[2];
            const actionButtons = actionCell.querySelector('.action-buttons');
            actionButtons.innerHTML = '';
            
            const saveButton = document.createElement('button');
            saveButton.className = 'action-btn edit-btn';
            saveButton.textContent = 'Save';
            saveButton.style.background = '#10b981';
            saveButton.style.color = 'white';
            
            const cancelButton = document.createElement('button');
            cancelButton.className = 'action-btn delete-btn';
            cancelButton.textContent = 'Cancel';
            
            saveButton.addEventListener('click', function() {
                const newText = input.value.trim();
                if (!newText) {
                    alert('Question cannot be empty.');
                    return;
                }
                
                // Update row with new values
                titleCell.textContent = newText;
                
                const newRequired = checkbox.checked;
                requiredCell.textContent = '';
                const newBadge = document.createElement('span');
                newBadge.className = `required-badge ${newRequired ? 'required-yes' : 'required-no'}`;
                newBadge.textContent = newRequired ? 'Yes' : 'No';
                requiredCell.appendChild(newBadge);
                
                // Restore action buttons
                restoreActionButtons(row, newText, newRequired);
            });
            
            cancelButton.addEventListener('click', function() {
                // Restore original values
                titleCell.textContent = originalText;
                
                requiredCell.textContent = '';
                const originalBadge = document.createElement('span');
                originalBadge.className = `required-badge ${currentRequired ? 'required-yes' : 'required-no'}`;
                originalBadge.textContent = currentRequired ? 'Yes' : 'No';
                requiredCell.appendChild(originalBadge);
                
                // Restore action buttons
                restoreActionButtons(row, originalText, currentRequired);
            });
            
            actionButtons.appendChild(saveButton);
            actionButtons.appendChild(cancelButton);
            
            // Focus on input
            input.focus();
        }
        
        // Restore Action Buttons Function
        function restoreActionButtons(row, questionText, isRequired) {
            const actionCell = row.cells[2];
            const actionButtons = actionCell.querySelector('.action-buttons');
            actionButtons.innerHTML = '';
            
            const editButton = document.createElement('button');
            editButton.className = 'action-btn edit-btn';
            editButton.textContent = 'Edit';
            editButton.addEventListener('click', function() {
                editQuestion(row, questionText, isRequired);
            });
            
            const deleteButton = document.createElement('button');
            deleteButton.className = 'action-btn delete-btn';
            deleteButton.textContent = 'Delete';
            deleteButton.addEventListener('click', function() {
                deleteQuestion(row);
            });
            
            actionButtons.appendChild(editButton);
            actionButtons.appendChild(deleteButton);
        }
        
        // Delete Question Function
        function deleteQuestion(row) {
            if (confirm('Are you sure you want to delete this question?')) {
                row.remove();
                
                // Update Existing Questions title
                const existingQuestionsTitle = document.querySelector('.existing-questions-section .section-title');
                const currentCount = document.querySelectorAll('.questions-table tbody tr').length;
                existingQuestionsTitle.innerHTML = `<i class="fas fa-list"></i> Existing Questions (${currentCount})`;
                
                alert('Question deleted successfully!');
            }
        }
        
        // Set up edit/delete buttons for existing questions
        document.querySelectorAll('.questions-table tbody tr').forEach(row => {
            const editButton = row.querySelector('.edit-btn');
            const deleteButton = row.querySelector('.delete-btn');
            const titleCell = row.cells[0];
            const requiredCell = row.cells[1];
            
            const questionText = titleCell.textContent;
            const isRequired = requiredCell.querySelector('.required-yes') !== null;
            
            editButton.addEventListener('click', function() {
                editQuestion(row, questionText, isRequired);
            });
            
            deleteButton.addEventListener('click', function() {
                deleteQuestion(row);
            });
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
