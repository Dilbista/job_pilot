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
            height: calc(100vh - 260px);
            min-height: 600px;
        }

        /* Messenger Sidebar */
        .messenger-sidebar {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .sidebar-header {
            padding: 25px;
            border-bottom: 1px solid #eaeaea;
            flex-shrink: 0;
        }

        .sidebar-header h3 {
            font-size: 20px;
            color: #1e293b;
            font-weight: 700;
        }

        .filter-tabs {
            display: flex;
            background: #f1f5f9;
            margin: 20px 25px;
            border-radius: 8px;
            overflow: hidden;
        }

        .filter-tab {
            flex: 1;
            text-align: center;
            padding: 12px;
            cursor: pointer;
            font-weight: 500;
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
            min-height: 0;
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
            min-width: 0;
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
            text-overflow: ellipsis;
            max-width: 200px;
        }

        .unread-indicator {
            width: 10px;
            height: 10px;
            background: #2563eb;
            border-radius: 50%;
            margin-left: 10px;
            flex-shrink: 0;
        }

        /* Messenger Main Area */
        .messenger-main {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            overflow: hidden;
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
            min-height: 0;
        }

        .message-header {
            padding: 20px 25px;
            border-bottom: 1px solid #eaeaea;
            flex-shrink: 0;
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
            min-height: 0;
        }

        .message-bubble {
            max-width: 70%;
            padding: 15px;
            border-radius: 18px;
            line-height: 1.5;
            word-wrap: break-word;
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
            flex-shrink: 0;
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

        /* Custom scrollbar for messages */
        .messages-container::-webkit-scrollbar {
            width: 6px;
        }

        .messages-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .messages-container::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .messages-container::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Custom scrollbar for conversations list */
        .conversations-list::-webkit-scrollbar {
            width: 6px;
        }

        .conversations-list::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .conversations-list::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .conversations-list::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        @media (max-width: 992px) {
            .messenger-layout {
                grid-template-columns: 1fr;
                height: auto;
                min-height: 500px;
            }

            .messenger-sidebar {
                height: 300px;
                /* Fixed height on mobile */
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .messenger-layout {
                gap: 20px;
                height: 70vh;
            }

            .sidebar-header {
                padding: 20px;
            }

            .messages-container {
                padding: 15px;
                max-height: calc(100% - 130px);
            }

            .message-header {
                padding: 15px 20px;
            }

            .message-input-container {
                padding: 15px 20px;
            }

            .message-bubble {
                max-width: 85%;
            }
        }

        @media (max-width: 576px) {
            .messenger-layout {
                height: 65vh;
            }

            .sidebar-header h3 {
                font-size: 18px;
            }

            .filter-tab {
                padding: 10px;
                font-size: 14px;
            }

            .conversation-item {
                padding: 15px 0;
            }

            .user-avatar {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .user-name {
                font-size: 15px;
            }

            .job-title,
            .last-message {
                font-size: 13px;
            }

            .message-user-name {
                font-size: 16px;
            }

            .message-user-job {
                font-size: 13px;
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
                    <!-- Conversation Items -->
                    <div class="conversation-item active" id="conversation1">
                        <div class="user-avatar">JD</div>
                        <div class="conversation-info">
                            <div class="user-name">John Doe</div>
                            <div class="job-title">Job: Junior Laravel Developer</div>
                            <div class="last-message">Hello, I'm interested in the position</div>
                        </div>
                        <div class="unread-indicator"></div>
                    </div>

                    <div class="conversation-item" id="conversation2">
                        <div class="user-avatar">SM</div>
                        <div class="conversation-info">
                            <div class="user-name">Sarah Miller</div>
                            <div class="job-title">Job: Senior UI Designer</div>
                            <div class="last-message">Thanks for the interview opportunity</div>
                        </div>
                        <div class="unread-indicator"></div>
                    </div>

                    <div class="conversation-item" id="conversation3">
                        <div class="user-avatar">RJ</div>
                        <div class="conversation-info">
                            <div class="user-name">Robert Johnson</div>
                            <div class="job-title">Job: React Developer</div>
                            <div class="last-message">When can I expect feedback?</div>
                        </div>
                    </div>

                    <div class="conversation-item" id="conversation4">
                        <div class="user-avatar">AM</div>
                        <div class="conversation-info">
                            <div class="user-name">Alice Martin</div>
                            <div class="job-title">Job: Product Manager</div>
                            <div class="last-message">Looking forward to our meeting tomorrow</div>
                        </div>
                    </div>

                    <div class="conversation-item" id="conversation5">
                        <div class="user-avatar">TW</div>
                        <div class="conversation-info">
                            <div class="user-name">Tom Wilson</div>
                            <div class="job-title">Job: DevOps Engineer</div>
                            <div class="last-message">Can you send me the job description?</div>
                        </div>
                    </div>
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
                                <div class="message-user-name" id="currentUserName">John Doe</div>
                                <div class="message-user-job" id="currentUserJob">Junior Laravel Developer</div>
                            </div>
                        </div>
                        <div class="message-actions">
                            <button class="message-action-btn" title="Search" style="margin-left: 750px;">
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
    </div>

    <script>
        // DOM Elements
        const noMessageSelected = document.getElementById('noMessageSelected');
        const selectedMessageArea = document.getElementById('selectedMessageArea');
        const conversationItems = document.querySelectorAll('.conversation-item');
        const messagesContainer = document.getElementById('messagesContainer');
        const messageInput = document.getElementById('messageInput');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const filterTabs = document.querySelectorAll('.filter-tab');
        const currentUserName = document.getElementById('currentUserName');
        const currentUserJob = document.getElementById('currentUserJob');

        // Sample conversations data
        const conversations = {
            1: {
                name: "John Doe",
                job: "Junior Laravel Developer",
                messages: [
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
                    },
                    {
                        text: "I'm available any time next week. What days work best for you?",
                        time: "10:40 AM",
                        type: "incoming"
                    }
                ]
            },
            2: {
                name: "Sarah Miller",
                job: "Senior UI Designer",
                messages: [
                    {
                        text: "Thank you for considering my application for the Senior UI Designer role.",
                        time: "Yesterday, 3:15 PM",
                        type: "incoming"
                    },
                    {
                        text: "Hi Sarah! Your portfolio looks impressive. We'd like to schedule a design challenge.",
                        time: "Yesterday, 3:30 PM",
                        type: "outgoing"
                    }
                ]
            },
            3: {
                name: "Robert Johnson",
                job: "React Developer",
                messages: [
                    {
                        text: "Hello, I had my second interview last Friday. When can I expect feedback?",
                        time: "Today, 9:15 AM",
                        type: "incoming"
                    },
                    {
                        text: "Hi Robert! The team is meeting tomorrow to make decisions. We'll get back to you by Friday.",
                        time: "Today, 9:30 AM",
                        type: "outgoing"
                    }
                ]
            }
        };

        // Function to display messages for a conversation
        function displayMessages(conversationId) {
            messagesContainer.innerHTML = '';

            const conversation = conversations[conversationId];
            if (!conversation) return;

            conversation.messages.forEach(message => {
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

        // Function to add a new message to the current conversation
        function addMessage(text, type, time) {
            const messageElement = document.createElement('div');
            messageElement.className = `message-bubble ${type}-message`;

            messageElement.innerHTML = `
                <div>${text}</div>
                <div class="message-time">${time}</div>
            `;

            messagesContainer.appendChild(messageElement);

            // Scroll to bottom
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        // Select conversation
        conversationItems.forEach(item => {
            item.addEventListener('click', function () {
                const conversationId = this.id.replace('conversation', '');

                // Update UI
                noMessageSelected.style.display = 'none';
                selectedMessageArea.style.display = 'flex';

                // Highlight selected conversation
                conversationItems.forEach(item => {
                    item.classList.remove('active');
                });
                this.classList.add('active');

                // Update header info
                const conversation = conversations[conversationId];
                if (conversation) {
                    currentUserName.textContent = conversation.name;
                    currentUserJob.textContent = conversation.job;
                }

                // Display messages
                displayMessages(conversationId);

                // Mark as read (remove unread indicator)
                const unreadIndicator = this.querySelector('.unread-indicator');
                if (unreadIndicator) {
                    unreadIndicator.style.display = 'none';
                }
            });
        });

        // Send message functionality
        function sendMessage() {
            const messageText = messageInput.value.trim();

            if (messageText) {
                const now = new Date();
                const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                // Add outgoing message
                addMessage(messageText, 'outgoing', timeString);

                // Clear input
                messageInput.value = '';

                // Focus back on input
                messageInput.focus();

                // Simulate a reply after 1-3 seconds
                setTimeout(() => {
                    const replyTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                    const replies = [
                        "Thanks for your message!",
                        "I'll get back to you soon.",
                        "Let me check that for you.",
                        "That's a good question.",
                        "I appreciate your interest."
                    ];

                    const randomReply = replies[Math.floor(Math.random() * replies.length)];
                    addMessage(randomReply, 'incoming', replyTime);
                }, 1000 + Math.random() * 2000);
            }
        }

        // Send message on button click
        sendMessageBtn.addEventListener('click', sendMessage);

        // Send message on Enter key
        messageInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Filter tabs functionality
        filterTabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Remove active class from all tabs
                filterTabs.forEach(t => t.classList.remove('active'));

                // Add active class to clicked tab
                this.classList.add('active');

                // Filter conversations based on tab
                if (this.textContent === 'Unread') {
                    // Show only unread conversations
                    conversationItems.forEach(item => {
                        const hasUnread = item.querySelector('.unread-indicator');
                        item.style.display = hasUnread ? 'flex' : 'none';
                    });
                } else {
                    // Show all conversations
                    conversationItems.forEach(item => {
                        item.style.display = 'flex';
                    });
                }
            });
        });

        noMessageSelected.style.display = 'flex';
        selectedMessageArea.style.display = 'none';

        conversationItems.forEach(item => {
            item.classList.remove('active');
        });
        // Auto-scroll messages container when new content is added
        const observer = new MutationObserver(function () {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        });

        observer.observe(messagesContainer, { childList: true });
    </script>
@endsection