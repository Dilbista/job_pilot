@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    @include('candidate.layouts.sidebar')
                    <div class="applied-jobs">
                        <h3>Applied Jobs (100)</h3>

                        <div class="job-card">
                            <div class="job-left">
                                <img src="https://via.placeholder.com/44" class="company-logo" alt="">
                                <div>
                                    <h4>Vue JS Developer <span class="badge freelance">Freelance</span></h4>
                                    <p>📍 Andorra &nbsp; 💲 120 - 400 Hourly</p>
                                </div>
                            </div>

                            <div class="job-right">
                                <span class="date">Dec 15, 2025 37:12</span>
                                <span class="status expired">Expired</span>
                                <a href="#" class="external">↗</a>
                                <a href="#" class="btn">View Details</a>
                            </div>
                        </div>

                        <div class="job-card">
                            <div class="job-left">
                                <img src="https://via.placeholder.com/44" class="company-logo" alt="">
                                <div>
                                    <h4>Expert Laravel Developer <span class="badge intern">Intern</span></h4>
                                    <p>📍 Sierra Leone &nbsp; 💲 340 - 1K Monthly</p>
                                </div>
                            </div>

                            <div class="job-right">
                                <span class="date">Dec 15, 2025 37:12</span>
                                <span class="status expired">Expired</span>
                                <a href="#" class="external">↗</a>
                                <a href="#" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .applied-jobs {
                        max-width: 1000px;
                        margin: 40px auto;
                        font-family: system-ui, sans-serif;
                    }

                    .applied-jobs h3 {
                        margin-bottom: 20px;
                    }

                    .job-card {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        background: #f0f6ff;
                        border-radius: 10px;
                        padding: 16px 20px;
                        margin-bottom: 14px;
                        transition: all 0.3s ease;
                    }

                    .job-card:hover {
                        background: #e6f0ff;
                        transform: translateY(-2px);
                        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
                    }

                    .job-left {
                        display: flex;
                        gap: 14px;
                        align-items: center;
                    }

                    .company-logo {
                        width: 44px;
                        height: 44px;
                        border-radius: 50%;
                        object-fit: cover;
                    }

                    .job-left h4 {
                        margin: 0;
                        font-size: 15px;
                    }

                    .job-left p {
                        margin: 4px 0 0;
                        font-size: 13px;
                        color: #666;
                    }

                    .badge {
                        font-size: 11px;
                        padding: 3px 8px;
                        border-radius: 12px;
                        margin-left: 6px;
                        vertical-align: middle;
                    }

                    .freelance {
                        background: #e8f1ff;
                        color: #2563eb;
                    }

                    .intern {
                        background: #e8fff3;
                        color: #059669;
                    }

                    .contract {
                        background: #fff3e8;
                        color: #ea580c;
                    }

                    .fulltime {
                        background: #f3e8ff;
                        color: #7c3aed;
                    }

                    .job-right {
                        display: flex;
                        align-items: center;
                        gap: 14px;
                        font-size: 13px;
                    }

                    .date {
                        color: #666;
                    }

                    .status {
                        display: flex;
                        align-items: center;
                        gap: 4px;
                    }

                    .status.expired {
                        color: #ef4444;
                    }

                    .external {
                        text-decoration: none;
                        font-size: 16px;
                        color: #111;
                        transition: transform 0.2s ease;
                    }

                    .external:hover {
                        transform: scale(1.2);
                    }

                    .btn {
                        background: #e8f1ff;
                        color: #2563eb;
                        padding: 6px 14px;
                        border-radius: 6px;
                        text-decoration: none;
                        font-weight: 500;
                        transition: all 0.25s ease;
                    }

                    .btn:hover {
                        background: #2563eb;
                        color: #fff;
                    }
                </style>
            </div>
        </div>
    </div>
    </div>
@endsection
