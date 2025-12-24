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
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f1f5f9;
        }
        
        .content-header h1 {
            font-size: 24px;
            color: #1e293b;
            font-weight: 700;
        }
        
        .bookmarks-badge {
            background-color: #f0f7ff;
            color: #2563eb;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }
        
        /* Saved Candidates Grid */
        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 30px;
        }
        
        .candidate-card {
            background: #f8fafc;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            align-items: center;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .candidate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            border-color: #c7d2fe;
        }
        
        .candidate-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #e0f2fe;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 28px;
            color: #0369a1;
            font-weight: 600;
        }
        
        .candidate-info {
            flex-grow: 1;
        }
        
        .candidate-name {
            font-size: 18px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }
        
        .candidate-profession {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 15px;
        }
        
        .view-profile-btn {
            display: inline-flex;
            align-items: center;
            background: #2563eb;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s ease;
        }
        
        .view-profile-btn:hover {
            background: #1d4ed8;
        }
        
        .view-profile-btn i {
            margin-left: 5px;
            font-size: 12px;
        }
        
        /* Filter Section */
        .filter-section {
            background: #f8fafc;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #e2e8f0;
            margin-bottom: 30px;
        }
        
        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .filter-title {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }
        
        .filter-options {
            display: flex;
            gap: 10px;
        }
        
        .filter-btn {
            padding: 8px 16px;
            background: white;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            color: #475569;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover {
            background: #f1f5f9;
        }
        
        .filter-btn.active {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }
        
        .filter-category {
            margin-top: 20px;
        }
        
        .filter-category h4 {
            font-size: 16px;
            color: #475569;
            margin-bottom: 12px;
            font-weight: 600;
        }
        
        .category-select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: white;
            color: #475569;
            font-size: 15px;
            outline: none;
            cursor: pointer;
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
            
            .candidates-grid {
                grid-template-columns: 1fr;
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
            
            .content-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .filter-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .filter-options {
                flex-wrap: wrap;
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
                    <h1>Saved Candidates</h1>
                    <div class="bookmarks-badge">Bookmarks (5)</div>
                </div>
                
                <!-- Saved Candidates Grid -->
                <div class="candidates-grid">
                    <!-- Candidate 1 -->
                    <div class="candidate-card">
                        <div class="candidate-avatar">AI</div>
                        <div class="candidate-info">
                            <div class="candidate-name">Artful Islam</div>
                            <div class="candidate-profession">Journalist</div>
                            <a href="#" class="view-profile-btn">View Profile <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Candidate 2 -->
                    <div class="candidate-card">
                        <div class="candidate-avatar">SR</div>
                        <div class="candidate-info">
                            <div class="candidate-name">Sheikh Rashed</div>
                            <div class="candidate-profession">Accountant</div>
                            <a href="#" class="view-profile-btn">View Profile <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Candidate 3 -->
                    <div class="candidate-card">
                        <div class="candidate-avatar">JI</div>
                        <div class="candidate-info">
                            <div class="candidate-name">Jihadul Islam</div>
                            <div class="candidate-profession">Electrician</div>
                            <a href="#" class="view-profile-btn">View Profile <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Candidate 4 -->
                    <div class="candidate-card">
                        <div class="candidate-avatar">RH</div>
                        <div class="candidate-info">
                            <div class="candidate-name">Riyad Hossain</div>
                            <div class="candidate-profession">Chef</div>
                            <a href="#" class="view-profile-btn">View Profile <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    <!-- Candidate 5 -->
                    <div class="candidate-card">
                        <div class="candidate-avatar">RI</div>
                        <div class="candidate-info">
                            <div class="candidate-name">Rakibul Islam</div>
                            <div class="candidate-profession">Pharmacist</div>
                            <a href="#" class="view-profile-btn">View Profile <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Filter Section -->
                <div class="filter-section">
                    <div class="filter-header">
                        <div class="filter-title">Filter</div>
                        <div class="filter-options">
                            <button class="filter-btn active">All</button>
                            <button class="filter-btn">Recent</button>
                            <button class="filter-btn">Top Rated</button>
                        </div>
                    </div>
                    <div class="filter-category">
                        <h4>Category</h4>
                        <select class="category-select">
                            <option value="">Select Category</option>
                            <option value="journalist">Journalist</option>
                            <option value="accountant">Accountant</option>
                            <option value="electrician">Electrician</option>
                            <option value="chef">Chef</option>
                            <option value="pharmacist">Pharmacist</option>
                        </select>
                    </div>
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
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const categorySelect = document.querySelector('.category-select');
        const candidateCards = document.querySelectorAll('.candidate-card');
        
        // Filter button click
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                // In a real implementation, this would filter the candidates
                console.log(`Filter changed to: ${this.textContent}`);
            });
        });
        
        // Category select change
        categorySelect.addEventListener('change', function() {
            const selectedCategory = this.value;
            console.log(`Category selected: ${selectedCategory}`);
            
            // In a real implementation, this would filter candidates by category
            if (selectedCategory) {
                // Show only candidates matching the category
                candidateCards.forEach(card => {
                    const profession = card.querySelector('.candidate-profession').textContent.toLowerCase();
                    if (profession.includes(selectedCategory)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            } else {
                // Show all candidates
                candidateCards.forEach(card => {
                    card.style.display = 'flex';
                });
            }
        });
        
        // View Profile button click
        const viewProfileButtons = document.querySelectorAll('.view-profile-btn');
        viewProfileButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const candidateName = this.closest('.candidate-card').querySelector('.candidate-name').textContent;
                alert(`Viewing profile of ${candidateName}`);
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
</body>
</html>