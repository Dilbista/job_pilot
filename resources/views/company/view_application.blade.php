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

        body {
            background-color: #f1f5f9;
            color: var(--dark);
            line-height: 1.6;
        }

        /* Breadcrumb */
        .breadcrumb {
            margin: 1rem auto 1rem;
            padding: 0 2rem;
        }

        .breadcrumb a {
            text-decoration: none;
            color: var(--secondary);
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb span {
            color: var(--dark);
            font-weight: 500;
        }

        .breadcrumb .separator {
            margin: 0 0.5rem;
            color: var(--gray);
        }

        /* Main Content */
        .main-container {
            /* max-width: 1200px; */
            margin: 0 auto;
            width: 100%;
            padding: 0 2rem 3rem;
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .page-title h1 {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
        }

        .page-title p {
            color: var(--secondary);
        }

        .header-actions {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-secondary {
            background-color: white;
            color: var(--dark);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background-color: #f8fafc;
        }

        .board-container {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 2rem;
            padding-bottom: 10px;
        }

        .board-container::-webkit-scrollbar {
            height: 8px;
        }

        .board-container::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        .board-container::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .board-container::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .applications-board {
            display: inline-flex;
            gap: 1.5rem;
            padding: 0.5rem;
            min-width: min-content;
        }

        .application-column {
            background-color: white;
            border-radius: 8px;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            width: 320px;
            min-width: 320px;
            max-height: 70vh;
            overflow: hidden;
        }

        .column-header {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        }

        .candidates-list {
            flex: 1;
            overflow-y: auto;
            padding: 1rem;
            min-height: 200px;
        }



        .column-title {
            font-weight: 600;
            color: var(--dark);
        }

        .column-count {
            background-color: #e0f2fe;
            color: #0369a1;
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }

        .column-actions {
            position: relative;
        }

        .column-actions-btn {
            background: none;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--secondary);
            transition: all 0.3s;
        }

        .column-actions-btn:hover {
            background-color: #f1f5f9;
            color: var(--dark);
        }

        .column-actions-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            z-index: 100;
            display: none;
            overflow: hidden;
        }

        .column-actions-menu.show {
            display: block;
        }

        .column-action-item {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            text-decoration: none;
            color: var(--dark);
            transition: background-color 0.3s;
            border-bottom: 1px solid #f1f5f9;
            cursor: pointer;
        }

        .column-action-item:last-child {
            border-bottom: none;
        }

        .column-action-item:hover {
            background-color: #f8fafc;
        }

        .column-action-item i {
            width: 20px;
            margin-right: 0.8rem;
            color: var(--secondary);
        }

        .column-action-item.delete {
            color: var(--danger);
        }

        .column-action-item.delete i {
            color: var(--danger);
        }

        /* Candidate Card */
        .candidate-card {
            background-color: white;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 1.2rem;
            margin-bottom: 1rem;
            transition: box-shadow 0.3s;
            position: relative;
        }

        .candidate-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .candidate-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .candidate-info {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            flex: 1;
        }

        .candidate-checkbox {
            margin-top: 0.3rem;
        }

        .candidate-details {
            flex: 1;
        }

        .candidate-name {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }

        .candidate-title {
            color: var(--secondary);
            font-size: 0.9rem;
            margin-bottom: 0.8rem;
        }

        .candidate-actions {
            position: relative;
        }

        .candidate-actions-btn {
            background: none;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: var(--secondary);
            transition: all 0.3s;
        }

        .candidate-actions-btn:hover {
            background-color: #f1f5f9;
            color: var(--dark);
        }

        .candidate-actions-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            z-index: 100;
            display: none;
            overflow: hidden;
        }

        .candidate-actions-menu.show {
            display: block;
        }

        .candidate-details-list {
            list-style: none;
            margin-bottom: 1rem;
        }

        .candidate-details-list li {
            display: flex;
            align-items: center;
            margin-bottom: 0.4rem;
            font-size: 0.9rem;
        }

        .candidate-details-list i {
            color: var(--primary);
            margin-right: 0.6rem;
            width: 16px;
            text-align: center;
        }

        .candidate-actions-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .download-cv-btn {
            background-color: #e0f2fe;
            color: #0369a1;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            transition: background-color 0.3s;
        }

        .download-cv-btn:hover {
            background-color: #bae6fd;
        }

        /* Empty State */
        .empty-column {
            text-align: center;
            padding: 2rem 1rem;
            color: var(--gray);
        }

        .empty-column i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #cbd5e1;
        }

        /* Bottom Actions */
        .bottom-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            padding: 1.5rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }

        /* Chat Widget */
        .chat-widget {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--primary);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            cursor: pointer;
            z-index: 10;
            transition: transform 0.3s;
        }

        .chat-widget:hover {
            transform: scale(1.05);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal.show {
            display: flex;
        }

        .modal-content {
            background-color: white;
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            font-size: 1.5rem;
            color: var(--dark);
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--secondary);
            cursor: pointer;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .close-btn:hover {
            background-color: #f1f5f9;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
        }

        .form-input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .modal-footer {
            padding: 1.5rem;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 2rem;
            color: var(--secondary);
            font-size: 0.9rem;
            margin-top: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .applications-board {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .nav-container {
                padding: 1rem;
            }

            .main-container {
                padding: 0 1rem 2rem;
            }

            .breadcrumb {
                padding: 0 1rem;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .applications-board {
                grid-template-columns: 1fr;
            }

            .bottom-actions {
                flex-direction: column;
                gap: 1rem;
            }

            .chat-widget {
                bottom: 1rem;
                right: 1rem;
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .board-container {
                margin: 0 -1rem;
                padding: 0 1rem 10px;
            }

            .applications-board {
                padding: 0.5rem 0;
            }

            .application-column {
                width: 280px;
                min-width: 280px;
            }
        }
    </style>
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span class="separator">/</span>
        <a href="{{ route('company.myJobs') }}">My Jobs</a>
        <span class="separator">/</span>
        <a href="#">UI/UX Designer</a>
        <span class="separator">/</span>
        <span>Applications</span>
    </div>

    <!-- Main Content -->
    <div class="main-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">
                <h1>Applications</h1>
                {{-- <p>Manage candidates for UI/UX Designer position</p> --}}
            </div>

            <div class="header-actions">
                <button class="btn btn-secondary" onclick="goBack()">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
                <button class="btn btn-primary" onclick="openCreateGroupModal()">
                    <i class="fas fa-plus"></i> Create New
                </button>
            </div>
        </div>
        <div class="board-container">
            <!-- Applications Board -->
            <div class="applications-board">
                <!-- No Group Column -->
                <div class="application-column">
                    <div class="column-header">
                        <div>
                            <span class="column-title">No Group</span>
                            <span class="column-count">1</span>
                        </div>
                        <div class="column-actions">
                            <button class="column-actions-btn" onclick="toggleColumnMenu('no-group-menu')">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="column-actions-menu" id="no-group-menu">
                                <div class="column-action-item" onclick="editColumn('No Group')">
                                    <i class="fas fa-edit"></i> Edit
                                </div>
                                <div class="column-action-item delete" onclick="deleteColumn('No Group')">
                                    <i class="fas fa-trash"></i> Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="candidates-list">
                        <!-- Candidate Card -->
                        <div class="candidate-card">
                            <div class="candidate-header">
                                <div class="candidate-info">
                                    <div class="candidate-checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="candidate-details">
                                        <div class="candidate-name">Armaan Malik</div>
                                        <div class="candidate-title">Pharmacist</div>
                                    </div>
                                </div>
                                <div class="candidate-actions">
                                    <button class="candidate-actions-btn" onclick="toggleCandidateMenu('candidate1-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="candidate-actions-menu" id="candidate1-menu">
                                        <div class="column-action-item" onclick="editCandidate('Armaan Malik')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteCandidate('Armaan Malik')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="candidate-details-list">
                                <li>
                                    <i class="fas fa-briefcase"></i>
                                    <span>Experience: 2 Years</span>
                                </li>
                                <li>
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Education: Master Degree</span>
                                </li>
                            </ul>

                            <div class="candidate-actions-footer">
                                <a href="#" class="download-cv-btn" onclick="downloadCV('Armaan Malik')">
                                    <i class="fas fa-download"></i> Download CV
                                </a>
                            </div>
                        </div>

                        <div class="candidate-card">
                            <div class="candidate-header">
                                <div class="candidate-info">
                                    <div class="candidate-checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="candidate-details">
                                        <div class="candidate-name">Armaan Malik</div>
                                        <div class="candidate-title">Pharmacist</div>
                                    </div>
                                </div>
                                <div class="candidate-actions">
                                    <button class="candidate-actions-btn" onclick="toggleCandidateMenu('candidate1-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="candidate-actions-menu" id="candidate1-menu">
                                        <div class="column-action-item" onclick="editCandidate('Armaan Malik')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteCandidate('Armaan Malik')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="candidate-details-list">
                                <li>
                                    <i class="fas fa-briefcase"></i>
                                    <span>Experience: 2 Years</span>
                                </li>
                                <li>
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Education: Master Degree</span>
                                </li>
                            </ul>

                            <div class="candidate-actions-footer">
                                <a href="#" class="download-cv-btn" onclick="downloadCV('Armaan Malik')">
                                    <i class="fas fa-download"></i> Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Applications Column -->
                <div class="application-column">
                    <div class="column-header">
                        <div>
                            <span class="column-title">All Applications</span>
                            <span class="column-count">1</span>
                        </div>
                        <div class="column-actions">
                            <button class="column-actions-btn" onclick="toggleColumnMenu('all-applications-menu')">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="column-actions-menu" id="all-applications-menu">
                                <div class="column-action-item" onclick="editColumn('All Applications')">
                                    <i class="fas fa-edit"></i> Edit
                                </div>
                                <div class="column-action-item delete" onclick="deleteColumn('All Applications')">
                                    <i class="fas fa-trash"></i> Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="candidates-list">
                        <!-- Candidate Card -->
                        <div class="candidate-card">
                            <div class="candidate-header">
                                <div class="candidate-info">
                                    <div class="candidate-checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="candidate-details">
                                        <div class="candidate-name">Jihadul Islam</div>
                                        <div class="candidate-title">Electrician</div>
                                    </div>
                                </div>
                                <div class="candidate-actions">
                                    <button class="candidate-actions-btn" onclick="toggleCandidateMenu('candidate2-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="candidate-actions-menu" id="candidate2-menu">
                                        <div class="column-action-item" onclick="editCandidate('Jihadul Islam')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteCandidate('Jihadul Islam')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="candidate-details-list">
                                <li>
                                    <i class="fas fa-briefcase"></i>
                                    <span>Experience: 2 Years</span>
                                </li>
                                <li>
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Education: Master Degree</span>
                                </li>
                            </ul>

                            <div class="candidate-actions-footer">
                                <a href="#" class="download-cv-btn" onclick="downloadCV('Jihadul Islam')">
                                    <i class="fas fa-download"></i> Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shortlisted Column -->
                <div class="application-column">
                    <div class="column-header">
                        <div>
                            <span class="column-title">Shortlisted</span>
                            <span class="column-count">1</span>
                        </div>
                        <div class="column-actions">
                            <button class="column-actions-btn" onclick="toggleColumnMenu('shortlisted-menu')">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="column-actions-menu" id="shortlisted-menu">
                                <div class="column-action-item" onclick="editColumn('Shortlisted')">
                                    <i class="fas fa-edit"></i> Edit
                                </div>
                                <div class="column-action-item delete" onclick="deleteColumn('Shortlisted')">
                                    <i class="fas fa-trash"></i> Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="candidates-list">
                        <!-- Candidate Card -->
                        <div class="candidate-card">
                            <div class="candidate-header">
                                <div class="candidate-info">
                                    <div class="candidate-checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="candidate-details">
                                        <div class="candidate-name">Sheikh Rashed</div>
                                        <div class="candidate-title">Accountant</div>
                                    </div>
                                </div>
                                <div class="candidate-actions">
                                    <button class="candidate-actions-btn" onclick="toggleCandidateMenu('candidate3-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="candidate-actions-menu" id="candidate3-menu">
                                        <div class="column-action-item" onclick="editCandidate('Sheikh Rashed')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteCandidate('Sheikh Rashed')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="candidate-details-list">
                                <li>
                                    <i class="fas fa-briefcase"></i>
                                    <span>Experience: 1 Year</span>
                                </li>
                                <li>
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Education: PhD</span>
                                </li>
                            </ul>

                            <div class="candidate-actions-footer">
                                <a href="#" class="download-cv-btn" onclick="downloadCV('Sheikh Rashed')">
                                    <i class="fas fa-download"></i> Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interview Column -->
                <div class="application-column">
                    <div class="column-header">
                        <div>
                            <span class="column-title">Interview</span>
                            <span class="column-count">1</span>
                        </div>
                        <div class="column-actions">
                            <button class="column-actions-btn" onclick="toggleColumnMenu('interview-menu')">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="column-actions-menu" id="interview-menu">
                                <div class="column-action-item" onclick="editColumn('Interview')">
                                    <i class="fas fa-edit"></i> Edit
                                </div>
                                <div class="column-action-item delete" onclick="deleteColumn('Interview')">
                                    <i class="fas fa-trash"></i> Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="candidates-list">
                        <!-- Candidate Card -->
                        <div class="candidate-card">
                            <div class="candidate-header">
                                <div class="candidate-info">
                                    <div class="candidate-checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="candidate-details">
                                        <div class="candidate-name">Liton Das</div>
                                        <div class="candidate-title">Labourer</div>
                                    </div>
                                </div>
                                <div class="candidate-actions">
                                    <button class="candidate-actions-btn" onclick="toggleCandidateMenu('candidate4-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="candidate-actions-menu" id="candidate4-menu">
                                        <div class="column-action-item" onclick="editCandidate('Liton Das')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteCandidate('Liton Das')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="candidate-details-list">
                                <li>
                                    <i class="fas fa-briefcase"></i>
                                    <span>Experience: 2 Years</span>
                                </li>
                                <li>
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Education: Bachelor Degree</span>
                                </li>
                            </ul>

                            <div class="candidate-actions-footer">
                                <a href="#" class="download-cv-btn" onclick="downloadCV('Liton Das')" download>
                                    <i class="fas fa-download"></i> Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rejected Column -->
                <div class="application-column">
                    <div class="column-header">
                        <div>
                            <span class="column-title">Rejected</span>
                            <span class="column-count">1</span>
                        </div>
                        <div class="column-actions">
                            <button class="column-actions-btn" onclick="toggleColumnMenu('rejected-menu')">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="column-actions-menu" id="rejected-menu">
                                <div class="column-action-item" onclick="editColumn('Rejected')">
                                    <i class="fas fa-edit"></i> Edit
                                </div>
                                <div class="column-action-item delete" onclick="deleteColumn('Rejected')">
                                    <i class="fas fa-trash"></i> Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="candidates-list">
                        <!-- Candidate Card -->
                        <div class="candidate-card">
                            <div class="candidate-header">
                                <div class="candidate-info">
                                    <div class="candidate-checkbox">
                                        <input type="checkbox">
                                    </div>
                                    <div class="candidate-details">
                                        <div class="candidate-name">John Doe</div>
                                        <div class="candidate-title">Developer</div>
                                    </div>
                                </div>
                                <div class="candidate-actions">
                                    <button class="candidate-actions-btn" onclick="toggleCandidateMenu('candidate5-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="candidate-actions-menu" id="candidate5-menu">
                                        <div class="column-action-item" onclick="editCandidate('John Doe')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteCandidate('John Doe')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="candidate-details-list">
                                <li>
                                    <i class="fas fa-briefcase"></i>
                                    <span>Experience: 5+ Years</span>
                                </li>
                                <li>
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Education: Master Degree</span>
                                </li>
                            </ul>

                            <div class="candidate-actions-footer">
                                <a href="#" class="download-cv-btn" onclick="downloadCV('John Doe')">
                                    <i class="fas fa-download"></i> Download CV
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Selected Column (Empty) -->
                <div class="application-column">
                    <div class="column-header">
                        <div>
                            <span class="column-title">Selected</span>
                            <span class="column-count">0</span>
                        </div>
                        <div class="column-actions">
                            <button class="column-actions-btn" onclick="toggleColumnMenu('selected-menu')">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="column-actions-menu" id="selected-menu">
                                <div class="column-action-item" onclick="editColumn('Selected')">
                                    <i class="fas fa-edit"></i> Edit
                                </div>
                                <div class="column-action-item delete" onclick="deleteColumn('Selected')">
                                    <i class="fas fa-trash"></i> Delete
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="candidates-list">
                        <div class="empty-column">
                            <i class="fas fa-user-friends"></i>
                            <p>No candidates in this group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Actions -->
        <div class="bottom-actions">
            <button class="btn btn-secondary" onclick="goBack()">
                <i class="fas fa-arrow-left"></i> Back
            </button>
            <button class="btn btn-primary" onclick="openCreateGroupModal()">
                <i class="fas fa-plus"></i> Create New
            </button>
        </div>
    </div>
    </div>



    <!-- Create Group Modal -->
    <div class="modal" id="createGroupModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Add New Group</h2>
                <button class="close-btn" onclick="closeModal('createGroupModal')">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="groupName">Group Name</label>
                    <input type="text" id="groupName" class="form-input" placeholder="Name">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeModal('createGroupModal')">
                    Cancel
                </button>
                <button class="btn btn-primary" onclick="createNewGroup()">
                    Create
                </button>
            </div>
        </div>
    </div>



    <script>
        // Toggle column actions menu
        function toggleColumnMenu(menuId) {
            const menu = document.getElementById(menuId);
            const isVisible = menu.classList.contains('show');

            // Close all other menus
            document.querySelectorAll('.column-actions-menu').forEach(m => {
                m.classList.remove('show');
            });

            // Toggle current menu
            if (!isVisible) {
                menu.classList.add('show');
            }

            // Close menu when clicking outside
            document.addEventListener('click', function closeMenu(e) {
                if (!menu.contains(e.target) && !e.target.closest('.column-actions-btn')) {
                    menu.classList.remove('show');
                    document.removeEventListener('click', closeMenu);
                }
            });
        }

        // Toggle candidate actions menu
        function toggleCandidateMenu(menuId) {
            const menu = document.getElementById(menuId);
            const isVisible = menu.classList.contains('show');

            // Close all other menus
            document.querySelectorAll('.candidate-actions-menu').forEach(m => {
                m.classList.remove('show');
            });

            // Toggle current menu
            if (!isVisible) {
                menu.classList.add('show');
            }

            // Close menu when clicking outside
            document.addEventListener('click', function closeMenu(e) {
                if (!menu.contains(e.target) && !e.target.closest('.candidate-actions-btn')) {
                    menu.classList.remove('show');
                    document.removeEventListener('click', closeMenu);
                }
            });
        }

        // Modal functions
        function openCreateGroupModal() {
            document.getElementById('groupName').value = '';
            document.getElementById('createGroupModal').classList.add('show');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('show');
        }

        // Create new group
        function createNewGroup() {
            const groupName = document.getElementById('groupName').value.trim();

            if (!groupName) {
                alert('Please enter a group name');
                return;
            }

            // Create new column
            const applicationsBoard = document.querySelector('.applications-board');

            const newColumn = document.createElement('div');
            newColumn.className = 'application-column';
            newColumn.innerHTML = `
                            <div class="column-header">
                                <div>
                                    <span class="column-title">${groupName}</span>
                                    <span class="column-count">0</span>
                                </div>
                                <div class="column-actions">
                                    <button class="column-actions-btn" onclick="toggleColumnMenu('${groupName.replace(/\s+/g, '-').toLowerCase()}-menu')">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="column-actions-menu" id="${groupName.replace(/\s+/g, '-').toLowerCase()}-menu">
                                        <div class="column-action-item" onclick="editColumn('${groupName}')">
                                            <i class="fas fa-edit"></i> Edit
                                        </div>
                                        <div class="column-action-item delete" onclick="deleteColumn('${groupName}')">
                                            <i class="fas fa-trash"></i> Delete
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="candidates-list">
                                <div class="empty-column">
                                    <i class="fas fa-user-friends"></i>
                                    <p>No candidates in this group</p>
                                </div>
                            </div>
                        `;

            applicationsBoard.appendChild(newColumn);

            // Close modal and show success message
            closeModal('createGroupModal');
            alert(`Group "${groupName}" created successfully!`);
        }

        // Edit column
        function editColumn(columnName) {
            const newName = prompt(`Edit group name for "${columnName}":`, columnName);

            if (newName && newName.trim() !== columnName) {
                // In a real application, you would update the column title here
                alert(`Group renamed from "${columnName}" to "${newName}"`);

                // Find and update the column title in the DOM
                const columns = document.querySelectorAll('.column-title');
                columns.forEach(col => {
                    if (col.textContent === columnName) {
                        col.textContent = newName;

                        // Also update the menu ID
                        const menu = col.closest('.column-header').querySelector('.column-actions-menu');
                        if (menu) {
                            menu.id = newName.replace(/\s+/g, '-').toLowerCase() + '-menu';
                        }
                    }
                });
            }
        }

        // Delete column
        function deleteColumn(columnName) {
            if (confirm(`Are you sure you want to delete the "${columnName}" group?`)) {
                // In a real application, you would remove the column from the DOM and backend
                alert(`Group "${columnName}" deleted successfully!`);

                // Find and remove the column from the DOM
                const columns = document.querySelectorAll('.column-title');
                columns.forEach(col => {
                    if (col.textContent === columnName) {
                        col.closest('.application-column').remove();
                    }
                });
            }
        }

        // Edit candidate
        function editCandidate(candidateName) {
            alert(`Edit functionality for "${candidateName}" would open here.`);
            // In a real application, this would open a modal with form to edit candidate details
        }

        // Delete candidate
        function deleteCandidate(candidateName) {
            if (confirm(`Are you sure you want to delete "${candidateName}" from this group?`)) {
                alert(`Candidate "${candidateName}" deleted successfully!`);
                // In a real application, you would remove the candidate card from the DOM and backend
            }
        }

        // Download CV
        function downloadCV(candidateName) {
            alert(`Downloading CV for "${candidateName}"...`);
            // In a real application, this would initiate a file download
        }

        // Go back
        function goBack() {
            alert('Going back to previous page...');
            // In a real application, this would navigate back in history
        }

        // Open chat
        function openChat() {
            alert('Chat with us feature would open here. For now, you can email: contact@templatecookie.com');
        }

        // Close menus when clicking outside
        document.addEventListener('click', function (e) {
            // Close column menus
            if (!e.target.closest('.column-actions')) {
                document.querySelectorAll('.column-actions-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
            }

            // Close candidate menus
            if (!e.target.closest('.candidate-actions')) {
                document.querySelectorAll('.candidate-actions-menu').forEach(menu => {
                    menu.classList.remove('show');
                });
            }
        });
    </script>
@endsection