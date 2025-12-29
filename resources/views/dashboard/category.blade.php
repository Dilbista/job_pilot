@extends('layouts.master')
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #64748b;
            --dark: #1e293b;
            --light: #f8fafc;
            --border: #e2e8f0;
            --gray: #94a3b8;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .container {
            max-width: 1400px;
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
            height: 100%;
        }
        
        /* Category Header */
        .category-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }
        
        .category-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .category-count {
            background: var(--primary);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .back-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
        }
        
        .back-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        /* Two Column Layout */
        .two-column-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }
        
        /* Left Column - Table Section */
        .table-section {
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow);
            overflow: hidden;
            border: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            height: fit-content;
        }
        
        .table-header {
            display: grid;
            grid-template-columns: 1fr 120px;
            padding: 1.2rem 1.5rem;
            background: #f8fafc;
            border-bottom: 1px solid var(--border);
            font-weight: 700;
            color: var(--dark);
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .table-body {
            flex: 1;
            min-height: 300px;
            max-height: 500px;
            overflow-y: auto;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 1rem;
            color: var(--gray);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .empty-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            opacity: 0.3;
        }
        
        .empty-text {
            font-size: 1.2rem;
            color: var(--secondary);
            font-weight: 500;
        }
        
        .category-row {
            display: grid;
            grid-template-columns: 1fr 120px;
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border);
            align-items: center;
            transition: all 0.3s ease;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .category-row:hover {
            background: #f8fafc;
        }
        
        .category-row:last-child {
            border-bottom: none;
        }
        
        .category-name {
            font-size: 1.1rem;
            color: var(--dark);
            font-weight: 500;
        }
        
        .category-actions {
            display: flex;
            gap: 0.5rem;
            justify-content: flex-end;
        }
        
        .action-btn {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 16px;
            background: transparent;
        }
        
        .edit-btn {
            color: var(--primary);
        }
        
        .edit-btn:hover {
            background: #dbeafe;
            transform: translateY(-2px);
        }
        
        .delete-btn {
            color: var(--danger);
        }
        
        .delete-btn:hover {
            background: #fee2e2;
            transform: translateY(-2px);
        }
        
        /* Right Column - Form Section */
        .form-section {
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow);
            padding: 1.8rem;
            height: fit-content;
            border: 1px solid var(--border);
        }
        
        .form-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 0.8rem;
            border-bottom: 2px solid var(--primary);
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }
        
        .form-input {
            padding: 1rem 1.2rem;
            border: 2px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            color: var(--dark);
            transition: all 0.3s;
            width: 100%;
            background: #f8fafc;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .form-input::placeholder {
            color: var(--gray);
        }
        
        .form-btn {
            background: var(--success);
            color: white;
            border: none;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .form-btn:hover {
            background: #059669;
            transform: translateY(-2px);
        }
        
        .update-btn {
            background: var(--danger);
        }
        
        .update-btn:hover {
            background: #dc2626;
        }
        
        .cancel-edit-btn {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 0.6rem 1rem;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .cancel-edit-btn:hover {
            background: #6b7280;
            transform: translateY(-2px);
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .modal.active {
            display: flex;
            animation: fadeIn 0.3s ease;
        }
        
        .modal-content {
            background: white;
            border-radius: 16px;
            width: 100%;
            max-width: 450px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: translateY(0);
            animation: modalSlideIn 0.3s ease;
        }
        
        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .modal-header {
            padding: 1.5rem;
            background: var(--primary);
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        .modal-body {
            padding: 1.8rem;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .modal-body strong {
            color: var(--danger);
            font-weight: 700;
        }
        
        .modal-actions {
            padding: 1.5rem;
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            border-top: 1px solid var(--border);
            background: #f8fafc;
        }
        
        .modal-btn {
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .modal-cancel {
            background: white;
            color: var(--dark);
            border: 2px solid var(--border);
        }
        
        .modal-cancel:hover {
            background: #f1f5f9;
            border-color: var(--gray);
        }
        
        .modal-delete {
            background: var(--danger);
            color: white;
        }
        
        .modal-delete:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }
        
        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            font-weight: 500;
            animation: slideIn 0.3s ease;
            display: none;
            max-width: 300px;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideOut {
            from {
                opacity: 1;
                transform: translateX(0);
            }
            to {
                opacity: 0;
                transform: translateX(100px);
            }
        }
        
        .notification-success {
            background: var(--success);
            color: white;
        }
        
        .notification-danger {
            background: var(--danger);
            color: white;
        }
        
        .notification-warning {
            background: var(--warning);
            color: white;
        }
        
        /* Responsive */
        @media (max-width: 1200px) {
            .two-column-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .dashboard-layout {
                grid-template-columns: 200px 1fr;
            }
        }
        
        @media (max-width: 992px) {
            .dashboard-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .container {
                padding: 15px;
            }
        }
        
        @media (max-width: 768px) {
            .dashboard-content {
                padding: 20px;
            }
            
            .category-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .back-btn {
                align-self: flex-start;
            }
            
            .table-header {
                grid-template-columns: 1fr 100px;
                padding: 1rem;
            }
            
            .category-row {
                grid-template-columns: 1fr 100px;
                padding: 1rem;
            }
            
            .form-section {
                padding: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .category-title {
                font-size: 1.5rem;
            }
            
            .category-count {
                font-size: 0.8rem;
                padding: 0.2rem 0.6rem;
            }
            
            .table-header {
                grid-template-columns: 1fr 80px;
                font-size: 0.85rem;
            }
            
            .category-row {
                grid-template-columns: 1fr 80px;
                padding: 0.8rem;
            }
            
            .category-name {
                font-size: 1rem;
            }
            
            .action-btn {
                width: 36px;
                height: 36px;
                font-size: 14px;
            }
            
            .form-title {
                font-size: 1.1rem;
                margin-bottom: 1.2rem;
            }
            
            .form-input {
                padding: 0.8rem 1rem;
            }
            
            .form-btn {
                padding: 0.8rem 1.2rem;
            }
        }
    </style>

   <div class="container">
         <div class="dashboard-layout">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        
        <!-- Main Content -->
        <div class="dashboard-content">
            <!-- Category Header -->
            <div class="category-header">
                <div class="category-title">
                    Bookmark Category
                    <span class="category-count" id="categoryCount">(0)</span>
                </div>
                <button class="back-btn" onclick="goBack()">
                    ← Back
                </button>
            </div>
        
        <!-- Two Column Layout -->
        <div class="two-column-layout">
            <!-- Left Column - Table -->
            <div class="table-section">
                <div class="table-header">
                    <div>Name</div>
                    <div>ACTION</div>
                </div>
                
                <div class="table-body" id="tableBody">
                    <!-- Empty State -->
                    <div class="empty-state" id="emptyState">
                        <div class="empty-icon">📁</div>
                        <div class="empty-text">No Data Found!</div>
                    </div>
                    
                    <!-- Categories List -->
                    <div id="categoriesList" style="display: none;"></div>
                </div>
            </div>
            
            <!-- Right Column - Form -->
            <div class="form-section">
                <div class="form-title">
                    <span id="formTitle">Create</span>
                    <button class="cancel-edit-btn" id="cancelEditBtn" style="display: none;" onclick="cancelEdit()">
                        Cancel Edit
                    </button>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" id="categoryName" placeholder="Name..." autocomplete="off">
                    <button class="form-btn" id="actionBtn" onclick="handleCategoryAction()">
                        Add
                    </button>
                </div>
            </div>
        </div>
        
  </div>
  </div>
    
    <!-- Delete Modal -->
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                Delete Category
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the category:</p>
                <p><strong id="deleteCategoryName"></strong></p>
                <p>This action cannot be undone.</p>
            </div>
            <div class="modal-actions">
                <button class="modal-btn modal-cancel" onclick="closeModal()">Cancel</button>
                <button class="modal-btn modal-delete" onclick="confirmDelete()">Delete</button>
            </div>
        </div>
    </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification"></div>

    <script>
        // Categories data
        let categories = [];
        let currentEditId = null;
        let currentDeleteId = null;
        
        // DOM Elements
        const tableBody = document.getElementById('tableBody');
        const emptyState = document.getElementById('emptyState');
        const categoriesList = document.getElementById('categoriesList');
        const categoryCount = document.getElementById('categoryCount');
        const categoryNameInput = document.getElementById('categoryName');
        const actionBtn = document.getElementById('actionBtn');
        const formTitle = document.getElementById('formTitle');
        const cancelEditBtn = document.getElementById('cancelEditBtn');
        const deleteModal = document.getElementById('deleteModal');
        const deleteCategoryName = document.getElementById('deleteCategoryName');
        const notification = document.getElementById('notification');
        
        // Load categories from localStorage
        function loadCategories() {
            const saved = localStorage.getItem('bookmarkCategories');
            if (saved) {
                categories = JSON.parse(saved);
            } else {
                categories = [];
            }
            renderCategories();
        }
        
        // Save categories to localStorage
        function saveCategories() {
            localStorage.setItem('bookmarkCategories', JSON.stringify(categories));
        }
        
        // Render categories table
        function renderCategories() {
            // Update count
            categoryCount.textContent = `(${categories.length})`;
            
            // Clear existing list
            categoriesList.innerHTML = '';
            
            if (categories.length === 0) {
                emptyState.style.display = 'flex';
                categoriesList.style.display = 'none';
            } else {
                emptyState.style.display = 'none';
                categoriesList.style.display = 'block';
                
                // Sort categories alphabetically
                const sortedCategories = [...categories].sort((a, b) => a.name.localeCompare(b.name));
                
                // Add categories to table
                sortedCategories.forEach(category => {
                    const row = document.createElement('div');
                    row.className = 'category-row';
                    row.dataset.id = category.id;
                    
                    // Highlight row if it's being edited
                    if (currentEditId === category.id) {
                        row.style.backgroundColor = '#f0f9ff';
                        row.style.borderLeft = '3px solid #2563eb';
                    }
                    
                    row.innerHTML = `
                        <div class="category-name">${category.name}</div>
                        <div class="category-actions">
                            <button class="action-btn edit-btn" onclick="editCategory('${category.id}')" title="Edit">
                                ✏️
                            </button>
                            <button class="action-btn delete-btn" onclick="showDeleteModal('${category.id}', '${category.name}')" title="Delete">
                                🗑️
                            </button>
                        </div>
                    `;
                    
                    categoriesList.appendChild(row);
                });
                
                // Ensure categoriesList is in tableBody
                if (!categoriesList.parentNode) {
                    tableBody.appendChild(categoriesList);
                }
            }
        }
        
        // Handle category action (Add/Update)
        function handleCategoryAction() {
            const name = categoryNameInput.value.trim();
            
            if (!name) {
                showNotification('Please enter a category name', 'warning');
                return;
            }
            
            // Check if category already exists (except the one being edited)
            const existing = categories.find(cat => 
                cat.name.toLowerCase() === name.toLowerCase() && 
                cat.id !== currentEditId
            );
            
            if (existing) {
                showNotification(`Category "${name}" already exists!`, 'warning');
                return;
            }
            
            if (currentEditId) {
                updateCategory();
            } else {
                addCategory(name);
            }
        }
        
        // Add new category
        function addCategory(name) {
            const newCategory = {
                id: Date.now().toString(),
                name: name,
                createdAt: new Date().toISOString()
            };
            
            categories.push(newCategory);
            saveCategories();
            renderCategories();
            resetForm();
            
            // Show success message
            showNotification('Category added successfully!', 'success');
        }
        
        // Edit category - switches form to update mode
        function editCategory(id) {
            const category = categories.find(cat => cat.id === id);
            if (category) {
                currentEditId = id;
                categoryNameInput.value = category.name;
                categoryNameInput.focus();
                
                // Switch form to update mode
                formTitle.textContent = 'Update';
                actionBtn.textContent = 'Update';
                actionBtn.classList.add('update-btn');
                cancelEditBtn.style.display = 'flex';
                
                // Re-render to highlight the edited row
                renderCategories();
            }
        }
        
        // Cancel edit mode
        function cancelEdit() {
            resetForm();
            renderCategories();
            showNotification('Edit cancelled', 'warning');
        }
        
        // Update category
        function updateCategory() {
            const name = categoryNameInput.value.trim();
            
            if (!name) {
                showNotification('Please enter a category name', 'warning');
                return;
            }
            
            const index = categories.findIndex(cat => cat.id === currentEditId);
            if (index !== -1) {
                categories[index].name = name;
                saveCategories();
                renderCategories();
                resetForm();
                
                // Show success message
                showNotification('Category updated successfully!', 'success');
            }
        }
        
        // Show delete modal
        function showDeleteModal(id, name) {
            currentDeleteId = id;
            deleteCategoryName.textContent = name;
            deleteModal.classList.add('active');
        }
        
        // Close modal
        function closeModal() {
            deleteModal.classList.remove('active');
            currentDeleteId = null;
        }
        
        // Confirm delete
        function confirmDelete() {
            if (currentDeleteId) {
                const categoryName = categories.find(cat => cat.id === currentDeleteId)?.name;
                categories = categories.filter(cat => cat.id !== currentDeleteId);
                saveCategories();
                renderCategories();
                closeModal();
                
                // If we were editing the deleted category, reset form
                if (currentEditId === currentDeleteId) {
                    resetForm();
                }
                
                // Show success message
                showNotification(`Category "${categoryName}" deleted successfully!`, 'danger');
            }
        }
        
        // Reset form to create mode
        function resetForm() {
            currentEditId = null;
            categoryNameInput.value = '';
            formTitle.textContent = 'Create';
            actionBtn.textContent = 'Add';
            actionBtn.classList.remove('update-btn');
            cancelEditBtn.style.display = 'none';
            categoryNameInput.focus();
        }
        
        // Show notification
        function showNotification(message, type) {
            notification.textContent = message;
            notification.className = `notification notification-${type}`;
            notification.style.display = 'block';
            notification.style.animation = 'slideIn 0.3s ease';
            
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 300);
            }, 3000);
        }
        
        // Go back function
        function goBack() {
            if (currentEditId) {
                cancelEdit();
            } else {
                window.history.back();
            }
        }
        
        // Handle Enter key
        categoryNameInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleCategoryAction();
            }
        });
        
        
        window.addEventListener('click', function(e) {
            if (e.target === deleteModal) {
                closeModal();
            }
        });
        
        // function addSampleCategory() {
            //  to start with a sample category
            // if (categories.length === 0) {
            //     const sampleCategory = {
            //         id: '1',
            //         name: 'Developer',
            //         createdAt: new Date().toISOString()
            //     };
            //     categories.push(sampleCategory);
            //     saveCategories();
            //     renderCategories();
            // }
        // }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            loadCategories();
            addSampleCategory();
            
            // Focus on input
            setTimeout(() => {
                categoryNameInput.focus();
            }, 100);
        });
    </script>
@endsection