@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row">
                    @include('candidate.layouts.sidebar')

                    <div class="job-alerts">
                        <h3>Job Alert</h3>

                        <div class="alert-card ">
                            <div class="icon">💼</div>
                            <div class="content">
                                <p class="small">New job posted suiting your profile</p>
                                <h4>at Templatecookie as Team Leader</h4>
                                <span class="time">4 days ago</span>
                            </div>
                        </div>

                        <div class="alert-card">
                            <div class="icon">💼</div>
                            <div class="content">
                                <p class="small">New job posted suiting your profile</p>
                                <h4>at Quantum Comp Solutions as Team Leader</h4>
                                <span class="time">1 week ago</span>
                            </div>
                        </div>

                        <div class="alert-card">
                            <div class="icon">💼</div>
                            <div class="content">
                                <p class="small">New job posted suiting your profile</p>
                                <h4>at Templatecookie as Administrator</h4>
                                <span class="time">1 week ago</span>
                            </div>
                        </div>

                        <div class="alert-card">
                            <div class="icon">💼</div>
                            <div class="content">
                                <p class="small">New job posted suiting your profile</p>
                                <h4>at Softtech Point as Assistant Manager</h4>
                                <span class="time">1 week ago</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .job-alerts {
            max-width: 720px;
            margin: 3px auto;
            font-family: system-ui, sans-serif;
        }

        .job-alerts h3 {
            margin-bottom: 16px;
        }

        .alert-card {
            display: flex;
            gap: 14px;
            padding: 16px 180px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin-bottom: 4px;
            background: #fff;
            transition: all 0.25s ease;
        }

        .alert-card:hover {
            border-color: #2563eb;
            background: #f0f6ff;
        }

        .alert-card.active {
            border-color: #2563eb;
            background: #f0f6ff;
        }

        .icon {
            width: 42px;
            height: 42px;
            border-radius: 8px;
            background: #e8f1ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #2563eb;
        }

        .content h4 {
            margin: 2px 0 6px;
            font-size: 14px;
            color: #111827;
        }

        .small {
            margin: 0;
            font-size: 12px;
            color: #6b7280;
        }

        .time {
            font-size: 12px;
            color: #9ca3af;
        }
    </style>
@endsection
