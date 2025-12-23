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
        
        /* Messenger Layout */
        .messenger-layout {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 30px;
            margin-bottom: 40px;
            height: 70vh;
        }
        
        /* Messenger Sidebar */
        .messenger-sidebar {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .sidebar-header {
            padding: 25px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .sidebar-header h3 {
            font-size: 20px;
            color: #1e293b;
            font-weight: 700;
        }
        
        .filter-tabs {
            display: flex;
            background: #f1f5f9;
            margin: 0 25px;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }
        
        .filter-tab {
            flex: 1;
            text-align: center;
            padding: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #475569;
        }
        
        .filter-tab:hover {
            background: #e2e8f0;
        }
        
        .filter-tab.active {
            background: #2563eb;
            color: white;
        }
        
        .conversations-list {
            flex: 1;
            overflow-y: auto;
            padding: 0 25px;
        }
        
        .conversation-item {
            display: flex;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #eaeaea;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .conversation-item:hover {
            background: #f8fafc;
        }
        
        .conversation-item.active {
            background: #f0f7ff;
        }
        
        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e0f2fe;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #0369a1;
            font-weight: 600;
            font-size: 18px;
        }
        
        .conversation-info {
            flex: 1;
        }
        
        .user-name {
            font-size: 16px;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 5px;
        }
        
        .job-title {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 5px;
        }
        
        .last-message {
            font-size: 14px;
            color: #475569;
            white-space: nowrap;
            overflow: hidden;
            text-overflow:ellipsis;
            max-width: 200px;
        }
        
        .unread-indicator {
            width: 10px;
            height: 10px;
            background: #2563eb;
            border-radius: 50%;
            margin-left: 10px;
        }
        
        /* Messenger Main Area */
        .messenger-main {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }
        
        .no-message-selected {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            text-align: center;
        }
        
        .message-icon {
            font-size: 80px;
            color: #cbd5e1;
            margin-bottom: 20px;
        }
        
        .message-title {
            font-size: 22px;
            color: #64748b;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .message-subtitle {
            font-size: 16px;
            color: #94a3b8;
            max-width: 400px;
            line-height: 1.6;
        }
        
        /* Selected Message Area (Hidden Initially) */
        .selected-message-area {
            flex: 1;
            display: none;
            flex-direction: column;
        }
        
        .message-header {
            padding: 20px 25px;
            border-bottom: 1px solid #eaeaea;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .message-user-info {
            display: flex;
            align-items: center;
        }
        
        .message-user-name {
            font-size: 18px;
            font-weight: 600;
            color: #1e293b;
        }
        
        .message-user-job {
            font-size: 14px;
            color: #64748b;
            margin-top: 3px;
        }
        
        .message-actions {
            display: flex;
            gap: 10px;
        }
        
        .message-action-btn {
            background: none;
            border: none;
            color: #64748b;
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .message-action-btn:hover {
            color: #2563eb;
        }
        
        .messages-container {
            flex: 1;
            padding: 25px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .message-bubble {
            max-width: 70%;
            padding: 15px;
            border-radius: 18px;
            line-height: 1.5;
        }
        
        .incoming-message {
            align-self: flex-start;
            background: #f1f5f9;
            color: #1e293b;
            border-bottom-left-radius: 5px;
        }
        
        .outgoing-message {
            align-self: flex-end;
            background: #2563eb;
            color: white;
            border-bottom-right-radius: 5px;
        }
        
        .message-time {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 5px;
            text-align: right;
        }
        
        .message-input-container {
            padding: 20px 25px;
            border-top: 1px solid #eaeaea;
            display: flex;
            gap: 15px;
        }
        
        .message-input {
            flex: 1;
            padding: 12px 20px;
            border: 1px solid #cbd5e1;
            border-radius: 25px;
            font-size: 15px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        
        .message-input:focus {
            border-color: #2563eb;
        }
        
        .send-message-btn {
            background: #2563eb;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .send-message-btn:hover {
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
        
       
        
        @media (max-width: 992px) {
            .messenger-layout {
                grid-template-columns: 1fr;
                height: auto;
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
            
            .message-bubble {
                max-width: 85%;
            }
            
            
        }
    </style>

    <div class="container">
    
        <!-- Messenger Layout -->
        <div class="messenger-layout">
            <!-- Messenger Sidebar -->
            <div class="messenger-sidebar">
                <div class="sidebar-header">
                    <h3>Messenger</h3>
                    
                    <div class="filter-tabs">
                        <div class="filter-tab active">Filter By Job</div>
                        <div class="filter-tab">Unread</div>
                    </div>
                </div>
                
                <div class="conversations-list">
                    <!-- Conversation Item -->
                    <div class="conversation-item active" id="conversation1">
                        <div class="user-avatar">JD</div>
                        <div class="conversation-info">
                            <div class="user-name">John Doe</div>
                            <div class="job-title">Job: Junior Laravel Developer</div>
                            <div class="last-message">Hello</div>
                        </div>
                        <div class="unread-indicator"></div>
                    </div>
                    
                    <!-- More conversation items can be added here -->
                </div>
            </div>
            
            <!-- Messenger Main Area -->
            <div class="messenger-main">
                <!-- No Message Selected State -->
                <div class="no-message-selected" id="noMessageSelected">
                    <div class="message-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="message-title">You don't have select any message till now</div>
                    <div class="message-subtitle">
                        Select a conversation from the sidebar to start messaging.
                    </div>
                </div>
                
                <!-- Selected Message Area (Hidden Initially) -->
                <div class="selected-message-area" id="selectedMessageArea">
                    <div class="message-header">
                        <div class="message-user-info">
                            <div>
                                <div class="message-user-name">John Doe</div>
                                <div class="message-user-job">Junior Laravel Developer</div>
                            </div>
                        </div>
                        <div class="message-actions">
                            <button class="message-action-btn" title="Search">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="message-action-btn" title="More options">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="messages-container" id="messagesContainer">
                        <!-- Messages will be displayed here -->
                    </div>
                    
                    <div class="message-input-container">
                        <input type="text" class="message-input" placeholder="Type a message..." id="messageInput">
                        <button class="send-message-btn" id="sendMessageBtn">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Chat Section -->
        {{-- <div class="chat-section">
            <div class="chat-icon">
                <i class="fas fa-comment-dots"></i>
            </div>
            <div class="chat-title">Chat with us</div>
            <div class="chat-description">Need help? Our support team is here to assist you.</div>
            <button class="chat-btn">
                <i class="fas fa-comment-dots"></i> Chat with us
            </button>
        </div> --}}
    </div>


    <script>
        // DOM Elements
        const noMessageSelected = document.getElementById('noMessageSelected');
        const selectedMessageArea = document.getElementById('selectedMessageArea');
        const conversation1 = document.getElementById('conversation1');
        const messagesContainer = document.getElementById('messagesContainer');
        const messageInput = document.getElementById('messageInput');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const filterTabs = document.querySelectorAll('.filter-tab');
        
        // Sample messages for the conversation
        const sampleMessages = [
            {
                text: "Hello! I'm interested in the Junior Laravel Developer position.",
                time: "10:30 AM",
                type: "incoming"
            },
            {
                text: "Hi John! Thanks for your interest. Can you tell me about your experience with Laravel?",
                time: "10:32 AM",
                type: "outgoing"
            },
            {
                text: "I have 2 years of experience working with Laravel on e-commerce projects. I'm familiar with Eloquent, Blade templates, and API development.",
                time: "10:35 AM",
                type: "incoming"
            },
            {
                text: "That's great! We're looking for someone with e-commerce experience. When would you be available for an interview?",
                time: "10:37 AM",
                type: "outgoing"
            }
        ];
        
        // Function to display messages
        function displayMessages() {
            messagesContainer.innerHTML = '';
            
            sampleMessages.forEach(message => {
                const messageElement = document.createElement('div');
                messageElement.className = `message-bubble ${message.type}-message`;
                
                messageElement.innerHTML = `
                    <div>${message.text}</div>
                    <div class="message-time">${message.time}</div>
                `;
                
                messagesContainer.appendChild(messageElement);
            });
            
            // Scroll to bottom
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
        
        // Select conversation
        conversation1.addEventListener('click', function() {
            // Update UI
            noMessageSelected.style.display = 'none';
            selectedMessageArea.style.display = 'flex';
            
            // Highlight selected conversation
            document.querySelectorAll('.conversation-item').forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');
            
            // Display messages
            displayMessages();
        });
        
        // Send message functionality
        function sendMessage() {
            const messageText = messageInput.value.trim();
            
            if (messageText) {
                // Create new message element
                const messageElement = document.createElement('div');
                messageElement.className = 'message-bubble outgoing-message';
                
                const now = new Date();
                const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                
                messageElement.innerHTML = `
                    <div>${messageText}</div>
                    <div class="message-time">${timeString}</div>
                `;
                
                messagesContainer.appendChild(messageElement);
                
                // Clear input
                messageInput.value = '';
                
                // Scroll to bottom
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                
                // Simulate a reply after 1 second
                setTimeout(() => {
                    const replyElement = document.createElement('div');
                    replyElement.className = 'message-bubble incoming-message';
                    
                    const replies = [
                        "Thanks for your message!",
                        "I'll get back to you soon.",
                        "Let me check that for you.",
                        "That's a good question."
                    ];
                    
                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    const replyTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    
                    replyElement.innerHTML = `
                        <div>${randomReply}</div>
                        <div class="message-time">${replyTime}</div>
                    `;
                    
                    messagesContainer.appendChild(replyElement);
                    
                    // Scroll to bottom
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                }, 1000);
            }
        }
        
        // Send message on button click
        sendMessageBtn.addEventListener('click', sendMessage);
        
        // Send message on Enter key
        messageInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
        
        // Filter tabs functionality
        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                filterTabs.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                // In a real app, this would filter conversations
                if (this.textContent === 'Unread') {
                    // Show only unread conversations
                    conversation1.style.display = 'flex';
                    // In a real app, you would filter the list
                } else {
                    // Show all conversations
                    conversation1.style.display = 'flex';
                }
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
        
        // Post Job button
        const postJobBtn = document.querySelector('.post-job-btn');
        postJobBtn.addEventListener('click', function() {
            alert('Redirecting to Post Job page...');
        });
    </script>
    @endsection

</body>
</html>