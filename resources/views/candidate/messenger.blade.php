@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    <div class="messenger-wrapper">
                        <!-- Header -->
                        <div class="messenger-header">
                            <span class="back">←</span>
                            <h3>Messenger</h3>
                        </div>

                        <div class="messenger-body">
                            <!-- Sidebar -->
                            <div class="sidebar">
                                <div class="filter-box">
                                    <div class="filter-header">
                                        <h4>Filter By Job</h4>
                                        <label class="unread">
                                            <input type="checkbox">
                                            Unread
                                        </label>
                                    </div>

                                    <select class="job-select">
                                        <option>All job</option>
                                    </select>
                                </div>

                                <!-- Conversation -->
                                <div class="conversation active">
                                    <div class="avatar">⚓</div>
                                    <div class="conv-info">
                                        <h5>Templatecookie</h5>
                                        <p>Job: Junior Laravel Developer</p>
                                        <span class="source">Hvbb</span>
                                    </div>
                                    <div class="conv-meta">
                                        <span class="count">15</span>
                                        <span class="time">2d</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Chat area -->
                            <div class="chat-area">
                                <p class="empty-text">
                                    You don't have select any message till now
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        * {
            box-sizing: border-box;
        }

        .messenger-wrapper {
            max-width: 1100px;
            margin: 15px auto;
            font-family: system-ui, sans-serif;
        }

        .messenger-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .messenger-header h3 {
            margin: 0;
        }

        .back {
            cursor: pointer;
            font-size: 18px;
        }

        .messenger-body {
            display: flex;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            min-height: 520px;
        }

        /* Sidebar */
        .sidebar {
            width: 400px;
            border-right: 1px solid #e5e7eb;
            background: #fff;
        }

        .filter-box {
            padding: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .filter-header h4 {
            margin: 0;
            font-size: 14px;
        }

        .unread {
            font-size: 12px;
            color: #2563eb;
            display: flex;
            gap: 6px;
            align-items: center;
        }

        .job-select {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
        }

        /* Conversation */
        .conversation {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            cursor: pointer;
            border-left: 3px solid transparent;
            transition: all 0.25s ease;
        }

        .conversation:hover {
            background: #f0f6ff;
            border-left-color: #2563eb;
        }

        .conversation.active {
            background: #f0f6ff;
            border-left-color: #2563eb;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #e8f1ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2563eb;
        }

        .conv-info h5 {
            margin: 0;
            font-size: 13px;
        }

        .conv-info p {
            margin: 4px 0;
            font-size: 12px;
            color: #6b7280;
        }

        .source {
            font-size: 11px;
            color: #9ca3af;
        }

        .conv-meta {
            margin-left: auto;
            text-align: right;
        }

        .count {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            font-size: 11px;
            padding: 2px 6px;
            border-radius: 10px;
        }

        .time {
            display: block;
            font-size: 11px;
            color: #9ca3af;
            margin-top: 4px;
        }

        /* Chat area */
        .chat-area {
            width: 600px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .empty-text {
            color: #6b7280;
            font-size: 14px;
        }
    </style>
@endsection
