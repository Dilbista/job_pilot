@extends('candidate.layouts.master')
@section('content')
    <div class="container">
        <div class="dashboard-wrapper" style="margin-top: 73px; padding: 0px 8px;">
            <div class="container">
                <div class="row">
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Jobpilot Clone</title>
                    <script src="https://cdn.tailwindcss.com"></script>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
                        rel="stylesheet">
                    <style>
                        body {
                            font-family: 'Inter', sans-serif;
                            scroll-behavior: smooth;
                        }

                        /* Hero animation */
                        .hero-title {
                            background: linear-gradient(90deg, #0066FF 0%, #00C6FF 100%);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            background-clip: text;
                        }

                        .search-box {
                            animation: float 6s ease-in-out infinite;
                            box-shadow: 0 20px 60px rgba(0, 102, 255, 0.15);
                            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                        }

                        .search-box:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 30px 80px rgba(0, 102, 255, 0.25);
                        }

                        @keyframes float {
                            0%, 100% {
                                transform: translateY(0px);
                            }
                            50% {
                                transform: translateY(-10px);
                            }
                        }

                        /* Card hover effects */
                        .feature-card {
                            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
                        }

                        .feature-card:hover {
                            transform: translateY(-10px) scale(1.02);
                            box-shadow: 0 25px 50px -12px rgba(2, 87, 216, 0.938);
                            border-color: #0066FF;
                        }

                        /* Gradient border effect */
                        .gradient-border {
                            position: relative;
                            background: white;
                            border-radius: 1rem;
                        }

                        .gradient-border::before {
                            content: '';
                            position: absolute;
                            top: -2px;
                            left: -2px;
                            right: -2px;
                            bottom: -2px;
                            /* background: linear-gradient(45deg, #0066FF, #00C6FF, #0066FF); */
                            border-radius: 1.1rem;
                            z-index: -1;
                            opacity: 0;
                            transition: opacity 0.3s ease;
                        }

                        .gradient-border:hover::before {
                            opacity: 1;
                        }

                        /* Animated counter */
                        .counter {
                            font-feature-settings: "tnum";
                            font-variant-numeric: tabular-nums;
                        }

                        /* Fade in animation */
                        .fade-in {
                            animation: fadeIn 1s ease-out;
                        }

                        .fade-in-up {
                            animation: fadeInUp 0.8s ease-out;
                        }

                        @keyframes fadeIn {
                            from {
                                opacity: 0;
                            }
                            to {
                                opacity: 1;
                            }
                        }

                        @keyframes fadeInUp {
                            from {
                                opacity: 0;
                                transform: translateY(30px);
                            }
                            to {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        }

                        /* Progress indicator */
                        .progress-step {
                            position: relative;
                        }

                        .progress-step::after {
                            content: '';
                            position: absolute;
                            top: 40px;
                            left: 50%;
                            width: 200%;
                            height: 2px;
                            background: linear-gradient(90deg, #0066FF 0%, transparent 100%);
                            z-index: 1;
                        }

                        .progress-step:last-child::after {
                            display: none;
                        }

                        /* Glow effect */
                        .glow {
                            animation: glow 2s ease-in-out infinite alternate;
                        }

                        @keyframes glow {
                            from {
                                box-shadow: 0 0 20px rgba(0, 102, 255, 0.5);
                            }
                            to {
                                box-shadow: 0 0 30px rgba(0, 102, 255, 0.8);
                            }
                        }

                        /* Pulse animation */
                        .pulse {
                            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
                        }

                        @keyframes pulse {
                            0%, 100% {
                                opacity: 1;
                            }
                            50% {
                                opacity: 0.7;
                            }
                        }

                        /* Scroll reveal */
                        .reveal {
                            opacity: 0;
                            transform: translateY(20px);
                            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
                        }

                        .reveal.active {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    </style>
                </div>

                <!-- Hero Section with Animation -->
                <main
                    class="px-4 md:px-16 py-16 md:py-24 flex flex-col md:flex-row items-center justify-between gap-12 max-w-7xl mx-auto relative overflow-hidden">
                    <!-- Animated background elements -->
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
                        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
                        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-cyan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse delay-1000"></div>
                    </div>

                    <div class="w-full md:w-1/1 fade-in">
                        <div class="mb-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-sm font-medium mb-4 animate-pulse">
                                <span class="w-2 h-2 bg-blue-600 rounded-full mr-2 animate-ping"></span>
                                Find Your Dream Job
                            </span>
                        </div>

                        <h1 class="text-3xl md:text-3xl font-bold text-gray-900 leading-tight mb-6 hero-title">
                            Discover Your Perfect Job:
                            <span class="block mt-2">Matching Your Interests and Skills</span>
                        </h1>
                        
                        <p class="text-gray-500 text-lg mb-10">Unlock Your Potential, Embrace Your Future.</p>

                        <!-- Animated Search Box -->
                        <div
                            class="bg-white p-0 rounded-2xl shadow-2xl border border-gray-100 flex flex-col md:flex-row items-center gap-3 search-box">
                            <div class="flex items-center px-4 flex-1 border-r border-gray-200 w-full">
                                <div class="relative">
                                    <svg class="text-[#0066FF] mr-3" xmlns="http://www.w3.org/2000/svg" width="22"
                                        height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="m21 21-4.3-4.3" />
                                    </svg>
                                    <div class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-focus-within:w-full"></div>
                                </div>
                                <input type="text" placeholder="Job Title"
                                    class="py-4 w-full outline-none text-gray-700 placeholder-gray-400 text-lg bg-transparent">
                            </div>
                            <div class="flex items-center px-4 flex-1 w-full">
                                <svg class="text-[#0066FF] mr-3" xmlns="http://www.w3.org/2000/svg" width="22"
                                    height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <input type="text" placeholder="Enter Location"
                                    class="py-4 w-full outline-none text-gray-700 placeholder-gray-400 text-lg bg-transparent">
                            </div>
                            <button
                                class="bg-gradient-to-r from-[#0066FF] to-[#00C6FF] text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transition-all duration-300 hover:scale-105 active:scale-95 glow">
                                <span class="flex items-center justify-center">
                                    Find Job Now
                                    <svg class="ml-1 w-1 h-1 animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>
                            </button>
                        </div>

                        <p class="mt-6 text-sm text-gray-400">
                            Suggestion: <span class="text-blue-500 font-medium">Design/Creative</span>, 
                            <span class="text-blue-500 font-medium">Driving/Motor Technician</span>, 
                            <span class="text-blue-500 font-medium">IT & Telecommunication</span>,
                            <span class="text-blue-500 font-medium">Hospitality/Travel/Tourism</span>
                        </p>

                        <!-- Stats -->
                        <div class="flex flex-wrap gap-8 mt-10">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 counter" data-target="5000">0</div>
                                <div class="text-gray-500 text-sm">Jobs Posted</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 counter" data-target="1500">0</div>
                                <div class="text-gray-500 text-sm">Companies</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-gray-900 counter" data-target="8500">0</div>
                                <div class="text-gray-500 text-sm">Candidates</div>
                            </div>
                        </div>
                    </div>

                    <!-- Animated SVG Illustration -->
                    <div class="w-full md:w-1/2 flex justify-right items-right fade-in" style="margin-right: -80px;">
                        <lottie-player
                            src="https://assets10.lottiefiles.com/packages/lf20_ikvz7qhc.json"
                            background="transparent"
                            speed="1"
                            style="width: 95%; height: auto ;margin-top: -100px;"
                            loop
                            autoplay>
                        </lottie-player>
                    </div>
                </main>

                <!-- Features Grid with Animation -->
                <section class="px-4 md:px-16 pb-16 max-w-7xl mx-auto">
                    <div class="text-center mb-16 fade-in">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Jobpilot?</h2>
                        <p class="text-gray-500 text-lg max-w-2xl mx-auto">Revolutionizing the way you find and connect with your dream career</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Card 1 -->
                        <div
                            class="feature-card p-8 rounded-2xl border border-gray-100 flex flex-col items-center text-center cursor-pointer group gradient-border reveal">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-blue-500 group-hover:to-blue-600 group-hover:scale-110">
                                <svg class="w-10 h-10 text-blue-600 transition-all duration-300 group-hover:text-white" 
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                          d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                5,000+ Jobs
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Access a vast database of opportunities from top companies worldwide
                            </p>
                            <div class="mt-6 w-8 h-1 bg-blue-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="feature-card p-8 rounded-2xl border border-gray-100 flex flex-col items-center text-center cursor-pointer group gradient-border reveal">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-blue-500 group-hover:to-blue-600 group-hover:scale-110">
                                <svg class="w-10 h-10 text-blue-600 transition-all duration-300 group-hover:text-white" 
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                          d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                1,500+ Companies
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Connect with leading employers and innovative startups
                            </p>
                            <div class="mt-6 w-8 h-1 bg-blue-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="feature-card p-8 rounded-2xl border border-gray-100 flex flex-col items-center text-center cursor-pointer group gradient-border reveal">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-blue-500 group-hover:to-blue-600 group-hover:scale-110">
                                <svg class="w-10 h-10 text-blue-600 transition-all duration-300 group-hover:text-white" 
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                8,500+ Candidates
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Join a thriving community of talented professionals
                            </p>
                            <div class="mt-6 w-8 h-1 bg-blue-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                        </div>

                        <!-- Card 4 -->
                        <div
                            class="feature-card p-8 rounded-2xl border border-gray-100 flex flex-col items-center text-center cursor-pointer group gradient-border reveal">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-blue-500 group-hover:to-blue-600 group-hover:scale-110">
                                <svg class="w-10 h-10 text-blue-600 transition-all duration-300 group-hover:text-white" 
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                                95% Success Rate
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Proven track record of successful job placements
                            </p>
                            <div class="mt-6 w-8 h-1 bg-blue-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                        </div>
                    </div>
                </section>

                <!-- Working Process with Animated Steps -->
                <section class="py-24 bg-gradient-to-b from-white to-gray-50/50 overflow-hidden">
                    <div class="max-w-7xl mx-auto px-4 md:px-16 text-center">
                        <div class="fade-in-up">
                            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                                How <span class="text-blue-600 relative">Jobpilot
                                    <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 100 8">
                                        <path d="M0 7C10 2 70 2 100 7" stroke="url(#gradient)" stroke-width="3" fill="none"
                                            stroke-linecap="round" />
                                        <defs>
                                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" stop-color="#0066FF" />
                                                <stop offset="100%" stop-color="#00C6FF" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span> Works
                            </h2>
                            <p class="text-gray-500 text-lg mb-16 max-w-2xl mx-auto">Four simple steps to land your dream job</p>
                        </div>

                        <div class="relative">
                            <!-- Animated Progress Line -->
                            <div class="hidden lg:block absolute top-20 left-0 right-0 h-1 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-500 transform -translate-y-1/2">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent animate-pulse"></div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
                                @php
                                    $steps = [
                                        [
                                            'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                                            'title' => 'Create Profile',
                                            'desc' => 'Build your professional profile with skills and experience'
                                        ],
                                        [
                                            'icon' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
                                            'title' => 'Find Jobs',
                                            'desc' => 'Browse thousands of curated job opportunities'
                                        ],
                                        [
                                            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                                            'title' => 'Apply',
                                            'desc' => 'Submit applications with one click'
                                        ],
                                        [
                                            'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                                            'title' => 'Get Hired',
                                            'desc' => 'Connect with employers and start working'
                                        ]
                                    ];
                                @endphp

                                @foreach($steps as $index => $step)
                                    <div class="relative reveal" style="animation-delay: {{ $index * 0.2 }}s">
                                        <div class="relative z-10 flex flex-col items-center">
                                            <div
                                                class="w-28 h-28 rounded-full bg-gradient-to-br from-white to-gray-50 border-8 border-white shadow-2xl flex items-center justify-center mb-8 relative group cursor-pointer hover:scale-105 transition-transform duration-500">
                                                <!-- Animated Ring -->
                                                <div class="absolute inset-0 rounded-full border-4 border-transparent border-t-blue-500 animate-spin"></div>
                                                
                                                <!-- Icon Container -->
                                                <div class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl flex items-center justify-center group-hover:from-blue-500 group-hover:to-blue-600 transition-all duration-500">
                                                    <svg class="w-8 h-8 text-blue-600 group-hover:text-white transition-all duration-500" 
                                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $step['icon'] }}" />
                                                    </svg>
                                                </div>
                                                
                                                <!-- Step Number -->
                                                <div class="absolute -top-2 -right-2 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                                                    {{ $index + 1 }}
                                                </div>
                                            </div>

                                            <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">
                                                {{ $step['title'] }}
                                            </h3>
                                            <p class="text-gray-500 text-sm leading-relaxed max-w-xs text-center">
                                                {{ $step['desc'] }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Categories with 3D Hover Effect -->
                <section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
                    <div class="flex justify-between items-center mb-10 fade-in">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900 mb-2">Popular Categories</h2>
                            <p class="text-gray-500">Browse jobs by your field of interest</p>
                        </div>
                        <a href="#"
                            class="group relative overflow-hidden bg-white border border-blue-100 px-6 py-3 rounded-xl font-medium text-blue-600 hover:text-white transition-all duration-300">
                            <span class="relative z-10 flex items-center">
                                View All
                                <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" 
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300"></div>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @php
                            $categories = [
                                ['name' => 'Design/Creative', 'icon' => 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z', 'positions' => 24],
                                ['name' => 'IT & Development', 'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'positions' => 156],
                                ['name' => 'Marketing', 'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'positions' => 89],
                                ['name' => 'Healthcare', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'positions' => 42],
                                ['name' => 'Finance', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'positions' => 67],
                                ['name' => 'Engineering', 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10', 'positions' => 78],
                                ['name' => 'Education', 'icon' => 'M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222', 'positions' => 31],
                                ['name' => 'Sales', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'positions' => 53],
                            ];
                        @endphp

                        @foreach($categories as $category)
                            <div class="reveal" style="animation-delay: {{ $loop->index * 0.1 }}s">
                                <div class="category-card h-full bg-white rounded-2xl border border-gray-100 p-6 
                                          hover:shadow-2xl transition-all duration-500 hover:-translate-y-1 
                                          hover:border-blue-600 group cursor-pointer">
                                    <div class="flex items-start justify-between mb-6">
                                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-500 transition-colors duration-300">
                                            <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors duration-300" 
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $category['icon'] }}" />
                                            </svg>
                                        </div>
                                        <span class="text-3xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                                            {{ $category['positions'] }}+
                                        </span>
                                    </div>
                                    <h3 class="text-sm font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                        {{ $category['name'] }}
                                    </h3>
                                    <p class="text-gray-400 text-sm">{{ $category['positions'] }} Open Positions</p>
                                    <div class="mt-4 pt-4 border-t border-gray-100">
                                        <span class="text-blue-600 text-sm font-medium flex items-center group-hover:underline">
                                            View Jobs
                                            <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" 
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                <!-- Featured Jobs with Parallax -->
                <section class="py-24 relative overflow-hidden">
                    <!-- Background Elements -->
                    <div class="absolute inset-0 -z-10">
                        <div class="absolute top-0 left-0 w-full h-1/3 bg-gradient-to-b from-blue-50 to-transparent"></div>
                        <div class="absolute bottom-0 right-0 w-64 h-64 bg-cyan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
                    </div>

                    <div class="max-w-7xl mx-auto px-4 md:px-16">
                        <div class="flex justify-between items-center mb-12 fade-in">
                            <div>
                                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Featured Jobs</h2>
                                <p class="text-gray-500">Hand-picked opportunities from top companies</p>
                            </div>
                            <a href="#" class="group flex items-center text-blue-600 font-medium">
                                View All
                                <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-2 transition-transform" 
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>

                        <div class="space-y-6">
                            @php
                                $jobs = [
                                    [
                                        'title' => 'Senior Frontend Developer',
                                        'company' => 'TechCorp Inc.',
                                        'logo' => 'https://logo.clearbit.com/digitalocean.com',
                                        'location' => 'San Francisco, CA',
                                        'salary' => '$120,000 - $150,000',
                                        'type' => 'Full-time',
                                        'tags' => ['React', 'TypeScript', 'Remote'],
                                        'posted' => '2 days ago'
                                    ],
                                    [
                                        'title' => 'Product Designer',
                                        'company' => 'CreativeStudio',
                                        'logo' => 'https://logo.clearbit.com/atlassian.com',
                                        'location' => 'New York, NY',
                                        'salary' => '$90,000 - $130,000',
                                        'type' => 'Contract',
                                        'tags' => ['Figma', 'UI/UX', 'Design System'],
                                        'posted' => '1 week ago'
                                    ],
                                    [
                                        'title' => 'Data Scientist',
                                        'company' => 'DataWorks',
                                        'logo' => 'https://logo.clearbit.com/tableau.com',
                                        'location' => 'Remote',
                                        'salary' => '$140,000 - $180,000',
                                        'type' => 'Full-time',
                                        'tags' => ['Python', 'Machine Learning', 'SQL'],
                                        'posted' => '3 days ago'
                                    ],
                                ];
                            @endphp

                            @foreach($jobs as $job)
                                <div class="reveal" style="animation-delay: {{ $loop->index * 0.2 }}s">
                                    <div class="job-card bg-white rounded-2xl border border-gray-100 p-6 
                                              hover:shadow-2xl transition-all duration-500 hover:-translate-y-1
                                              hover:border-blue-200 group cursor-pointer">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                            <div class="flex items-start md:items-center gap-4">
                                                <div class="w-16 h-16 bg-gray-50 rounded-xl flex items-center justify-center p-3 group-hover:bg-blue-50 transition-colors duration-300">
                                                    <img src="{{ $job['logo'] }}" alt="{{ $job['company'] }}" 
                                                         class="max-w-full max-h-full rounded-lg">
                                                </div>
                                                <div>
                                                    <div class="flex items-center gap-3 mb-2">
                                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                                                            {{ $job['title'] }}
                                                        </h3>
                                                        <span class="bg-gradient-to-r from-blue-50 to-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">
                                                            {{ $job['type'] }}
                                                        </span>
                                                    </div>
                                                    <div class="flex flex-wrap items-center gap-4 text-gray-500 text-sm">
                                                        <div class="flex items-center">
                                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                                                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                            </svg>
                                                            {{ $job['company'] }}
                                                        </div>
                                                        <div class="flex items-center">
                                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            </svg>
                                                            {{ $job['location'] }}
                                                        </div>
                                                        <div class="flex items-center">
                                                            <span class="mr-1">💰</span>
                                                            {{ $job['salary'] }}
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-wrap gap-2 mt-3">
                                                        @foreach($job['tags'] as $tag)
                                                            <span class="bg-gray-50 text-gray-600 text-xs px-3 py-1 rounded-full border border-gray-200">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-4">
                                                <button class="relative group">
                                                    <div class="w-10 h-10 bg-gray-50 rounded-lg flex items-center justify-center 
                                                                group-hover:bg-red-50 transition-colors duration-300">
                                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-red-500 transition-colors duration-300" 
                                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                                                  d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                        </svg>
                                                    </div>
                                                    <span class="absolute -top-2 -right-2 text-xs bg-red-500 text-white px-2 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                                        Save
                                                    </span>
                                                </button>
                                                <button class="relative group">
                                                    <span class="bg-gradient-to-r from-blue-500 to-cyan-500 text-white px-8 py-3 rounded-lg 
                                                                 font-semibold flex items-center group-hover:shadow-lg transition-all duration-300 
                                                                 group-hover:scale-105 active:scale-95">
                                                        Apply Now
                                                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" 
                                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                        </svg>
                                                    </span>
                                                    <span class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 text-xs text-gray-500 
                                                                 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                                        Posted {{ $job['posted'] }}
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <!-- Testimonials with Carousel -->
                <section class="py-24 bg-gradient-to-b from-gray-50/50 to-white relative overflow-hidden">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 -z-10 opacity-10">
                        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMtNi42MjcgMC0xMiA1LjM3My0xMiAxMnM1LjM3MyAxMiAxMiAxMiAxMi01LjM3MyAxMi0xMi01LjM3My0xMi0xMi0xMnptMCA0YzQuNDE4IDAgOCAzLjU4MiA4IDhzLTMuNTgyIDgtOCA4LTgtMy41ODItOC04IDMuNTgyLTggOC04eiIgc3Ryb2tlPSIjMDA2NkZGIiBzdHJva2Utd2lkdGg9IjIiLz48L2c+PC9zdmc+')]"></div>
                    </div>

                    <div class="max-w-7xl mx-auto px-4 text-center">
                        <div class="fade-in-up">
                            <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Candidates Say</h2>
                            <p class="text-gray-500 text-lg mb-16 max-w-2xl mx-auto">Success stories from professionals who found their dream jobs through Jobpilot</p>
                        </div>

                        <div class="relative">
                            <!-- Carousel Container -->
                            <div class="testimonial-carousel overflow-hidden">
                                <div class="flex transition-transform duration-500 ease-in-out" id="testimonial-track">
                                    @php
                                        $testimonials = [
                                            [
                                                'name' => 'Sarah Johnson',
                                                'role' => 'Senior UX Designer at Google',
                                                'content' => "Jobpilot completely transformed my job search. Within two weeks, I had multiple interviews and landed my dream role at Google. The platform's AI matching is incredibly accurate!",
                                                'rating' => 5,
                                                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah'
                                            ],
                                            [
                                                'name' => 'Michael Chen',
                                                'role' => 'Lead Developer at Stripe',
                                                'content' => "As a developer, I appreciated how Jobpilot understood my tech stack and matched me with companies using similar technologies. The interview preparation resources were invaluable.",
                                                'rating' => 5,
                                                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Michael'
                                            ],
                                            [
                                                'name' => 'Emma Wilson',
                                                'role' => 'Product Manager at Airbnb',
                                                'content' => "The personalized job recommendations saved me hours of searching. Jobpilot's career coaches helped me negotiate a 30% higher salary than I expected!",
                                                'rating' => 5,
                                                'avatar' => 'https://api.dicebear.com/7.x/avataaars/svg?seed=Emma'
                                            ],
                                        ];
                                    @endphp

                                    @foreach($testimonials as $testimonial)
                                        <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                                            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100 h-full transform hover:scale-105 transition-transform duration-300">
                                                <!-- Rating -->
                                                <div class="flex justify-center mb-6">
                                                    @for($i = 0; $i < $testimonial['rating']; $i++)
                                                        <svg class="w-5 h-5 text-yellow-400 fill-current" 
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                        </svg>
                                                    @endfor
                                                </div>

                                                <!-- Content -->
                                                <p class="text-gray-600 italic mb-8 text-center">"{{ $testimonial['content'] }}"</p>

                                                <!-- Author -->
                                                <div class="flex items-center justify-center">
                                                    <img src="{{ $testimonial['avatar'] }}" 
                                                         alt="{{ $testimonial['name'] }}"
                                                         class="w-16 h-16 rounded-full border-4 border-white shadow-lg">
                                                    <div class="ml-4 text-left">
                                                        <h4 class="font-bold text-gray-900">{{ $testimonial['name'] }}</h4>
                                                        <p class="text-gray-500 text-sm">{{ $testimonial['role'] }}</p>
                                                    </div>
                                                </div>

                                                <!-- Quote Icon -->
                                                <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center">
                                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Carousel Controls -->
                            <div class="flex justify-center gap-3 mt-12">
                                @foreach($testimonials as $index => $testimonial)
                                    <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300 hover:bg-blue-500 {{ $index === 0 ? 'bg-blue-500 w-8' : '' }}" 
                                            data-slide="{{ $index }}"></button>
                                @endforeach
                            </div>

                            <!-- Navigation Arrows -->
                            <button id="prev-testimonial" 
                                    class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:shadow-xl transition-shadow duration-300">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <button id="next-testimonial" 
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:shadow-xl transition-shadow duration-300">
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- CTA Section with Animation -->
                {{-- <section class="py-24 relative overflow-hidden">
                    <!-- Animated Background -->
                    <div class="absolute inset-0 -z-10">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-cyan-500 to-blue-600 opacity-90"></div>
                        <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMzAgMzBhNSA1IDAgMTEwLTEwIDUgNSAwIDAxMCAxMHoiIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iLjEiLz48L3N2Zz4=')]"></div>
                    </div>

                    <div class="max-w-4xl mx-auto px-4 text-center text-white">
                        <div class="fade-in-up">
                            <h2 class="text-4xl md:text-3xl font-bold mb-6">Ready to Launch Your Career?</h2>
                            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                                Join thousands of successful professionals who found their dream jobs through Jobpilot
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                            <button class="group relative overflow-hidden bg-white text-blue-600 px-10 py-4 rounded-xl font-bold text-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                                <span class="relative z-10">Create Free Account</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-white to-gray-100 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                            </button>
                            <button class="group relative overflow-hidden border-2 border-white text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-white/10 transition-all duration-300 hover:-translate-y-1">
                                <span class="relative z-10">Browse Jobs</span>
                                <div class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                            </button>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">24/7</div>
                                <div class="text-blue-200">Support</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">95%</div>
                                <div class="text-blue-200">Success Rate</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">30 Days</div>
                                <div class="text-blue-200">Money Back</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold mb-2">Free</div>
                                <div class="text-blue-200">Forever Plan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute top-10 left-10 w-8 h-8 bg-white/20 rounded-full animate-bounce"></div>
                    <div class="absolute bottom-20 right-20 w-12 h-12 bg-white/10 rounded-full animate-pulse"></div>
                    <div class="absolute top-1/2 left-1/4 w-6 h-6 bg-white/30 rounded-full animate-ping"></div>
                </section> --}}
            </div>
        </div>
    </div>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        // Observe all reveal elements
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Animated counter
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            const counterObserver = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    updateCount();
                }
            }, { threshold: 0.5 });

            counterObserver.observe(counter);
        });

        // Testimonial carousel
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-carousel > div > div');
        const dots = document.querySelectorAll('.testimonial-dot');
        const track = document.getElementById('testimonial-track');
        const slideWidth = slides[0].offsetWidth;

        function updateCarousel() {
            track.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-blue-500', index === currentSlide);
                dot.classList.toggle('w-8', index === currentSlide);
                dot.classList.toggle('w-3', index !== currentSlide);
            });
        }

        document.getElementById('next-testimonial').addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        });

        document.getElementById('prev-testimonial').addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateCarousel();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateCarousel();
            });
        });

        // Auto slide testimonials
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        }, 5000);

        // Add hover effects to cards
        document.querySelectorAll('.category-card, .job-card, .feature-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateY = (x - centerX) / 25;
                const rotateX = (centerY - y) / 25;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
            });
        });

        // Add scroll to top button
        const scrollTopBtn = document.createElement('button');
        scrollTopBtn.innerHTML = `
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
        `;
        scrollTopBtn.className = 'fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-full shadow-lg flex items-center justify-center opacity-0 transition-all duration-300 hover:shadow-xl hover:scale-110 z-50';
        document.body.appendChild(scrollTopBtn);

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollTopBtn.style.opacity = '1';
            } else {
                scrollTopBtn.style.opacity = '0';
            }
        });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Add search functionality animation
        const searchInputs = document.querySelectorAll('input[type="text"]');
        searchInputs.forEach(input => {
            input.addEventListener('focus', (e) => {
                e.target.parentElement.style.borderColor = '#0066FF';
                e.target.parentElement.style.boxShadow = '0 0 0 3px rgba(0, 102, 255, 0.1)';
            });
            
            input.addEventListener('blur', (e) => {
                e.target.parentElement.style.borderColor = '';
                e.target.parentElement.style.boxShadow = '';
            });
        });

        // Typing animation for hero section
        const words = ['Dream Job', 'Perfect Role', 'Career Growth', 'New Opportunity'];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.createElement('span');
        typingElement.className = 'text-blue-600 ml-2';
        document.querySelector('.hero-title span').appendChild(typingElement);

        function typeEffect() {
            const currentWord = words[wordIndex];
            
            if (isDeleting) {
                typingElement.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                typingElement.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }
            
            let typeSpeed = 100;
            
            if (isDeleting) {
                typeSpeed /= 2;
            }
            
            if (!isDeleting && charIndex === currentWord.length) {
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500;
            }
            
            setTimeout(typeEffect, typeSpeed);
        }

        // Start typing animation after page load
        setTimeout(typeEffect, 1000);
    </script>
@endsection