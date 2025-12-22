@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    @include('candidate.layouts.sidebar')
                    <div class="favorite-jobs">
                        <h3>Favorite Jobs (5)</h3>

                        <!-- Job item -->
                        {{-- @foreach ($favorites as $job)
                            {{-- reuse .fav-job --}}
                        {{-- @endforeach  --}}

                        <div class="fav-job">
                            <div class="job-left">
                                <img src="https://via.placeholder.com/46" class="logo" alt="">
                                <div class="info">
                                    <h4>
                                        React Developer
                                        <span class="badge intern">Intern</span>
                                    </h4>
                                    <p>
                                        <span>📍 Armenia</span>
                                        <span>💲 Competitive</span>
                                        <span class="expired-text">⏰ Job Expire</span>
                                    </p>
                                </div>
                            </div>

                            <div class="job-right">
                                <span class="bookmark">🔖</span>
                                <a href="#" class="btn apply">Apply Now →</a>
                            </div>
                        </div>

                        <!-- Active / Selected -->
                        <div class="fav-job ">
                            <div class="job-left">
                                <img src="https://via.placeholder.com/46" class="logo" alt="">
                                <div class="info">
                                    <h4>
                                        Mid level Laravel Developer
                                        <span class="badge fulltime">Full Time</span>
                                    </h4>
                                    <p>
                                        <span>📍 Belarus</span>
                                        <span>💲 200 - 1K Project Basis</span>
                                        <span class="expired-text">⏰ Job Expire</span>
                                    </p>
                                </div>
                            </div>

                            <div class="job-right">
                                <span class="bookmark">🔖</span>
                                <span class="btn disabled">Deadline Expired</span>
                            </div>
                        </div>

                        <!-- Job item -->
                        <div class="fav-job">
                            <div class="job-left">
                                <img src="https://via.placeholder.com/46" class="logo" alt="">
                                <div class="info">
                                    <h4>
                                        UI/UX Designer
                                        <span class="badge parttime">Part Time</span>
                                    </h4>
                                    <p>
                                        <span>📍 Saint Martin</span>
                                        <span>💲 200 - 500 Hourly</span>
                                        <span class="expired-text">⏰ Job Expire</span>
                                    </p>
                                </div>
                            </div>

                            <div class="job-right">
                                <span class="bookmark">🔖</span>
                                <span class="btn disabled">Deadline Expired</span>
                            </div>
                        </div>
                    </div>

                </div>
                <style>
                    .favorite-jobs {
                        max-width: 950px;
                        margin: 40px auto;
                        font-family: system-ui, sans-serif;
                    }

                    .favorite-jobs h3 {
                        margin-bottom: 18px;
                    }

                    .fav-job {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 16px 18px;
                        position: relative;
                        border: 1px solid transparent;
                        transition: border-color 0.25s ease, background 0.25s ease;
                    }

                    .fav-job:hover {
                        border-color: #2563eb;
                        background: #f0f6ff;
                        border-radius: 8px;
                    }

                    .fav-job.active {
                        border: 1px solid #2563eb;
                        border-radius: 8px;
                        background: #f0f6ff;
                        margin-bottom: 10px;
                    }

                    .job-left {
                        display: flex;
                        gap: 14px;
                        align-items: center;
                    }

                    .logo {
                        width: 46px;
                        height: 46px;
                        border-radius: 50%;
                        object-fit: cover;
                    }

                    .info h4 {
                        margin: 0;
                        font-size: 15px;
                    }

                    .info p {
                        margin: 6px 0 0;
                        font-size: 13px;
                        color: #6b7280;
                        display: flex;
                        gap: 14px;
                        flex-wrap: wrap;
                    }

                    .badge {
                        font-size: 11px;
                        padding: 3px 8px;
                        border-radius: 12px;
                        margin-left: 6px;
                    }

                    .intern {
                        background: #ecfeff;
                        color: #0891b2;
                    }

                    .fulltime {
                        background: #eef2ff;
                        color: #4f46e5;
                    }

                    .parttime {
                        background: #fff7ed;
                        color: #ea580c;
                    }

                    .contract {
                        background: #f0fdf4;
                        color: #16a34a;
                    }

                    .expired-text {
                        color: #ef4444;
                    }

                    .job-right {
                        display: flex;
                        align-items: center;
                        gap: 16px;
                    }

                    .bookmark {
                        cursor: pointer;
                        font-size: 16px;
                        opacity: 0.7;
                        transition: 0.2s ease;
                    }

                    .bookmark:hover {
                        opacity: 1;
                        transform: scale(1.1);
                    }

                    .btn {
                        padding: 7px 16px;
                        border-radius: 6px;
                        font-size: 13px;
                        font-weight: 500;
                        text-decoration: none;
                        white-space: nowrap;
                    }

                    .btn.apply {
                        background: #2563eb;
                        color: #fff;
                    }

                    .btn.apply:hover {
                        background: #1e40af;
                    }

                    .btn.disabled {
                        background: #f3f4f6;
                        color: #9ca3af;
                        cursor: not-allowed;
                    }
                </style>
            </div>
        </div>
    </div>
    </div>
@endsection
