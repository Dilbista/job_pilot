<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot - Find Your Dream Job | Modern Job Search Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-in': 'slideIn 0.5s ease-out',
                        'bounce-slow': 'bounce 3s infinite',
                        'gradient': 'gradient 8s ease infinite',
                        'shimmer': 'shimmer 2s infinite linear',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        slideIn: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        gradient: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200px 0' },
                            '100%': { backgroundPosition: '200px 0' },
                        }
                    },
                    backgroundImage: {
                        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                        'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                    }
                }
            }
        }
    </script>
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            overflow-x: hidden;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #0066FF, #00C6FF, #0066FF);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 8s ease infinite;
        }
        
        .hero-gradient {
            background: linear-gradient(-45deg, #0066FF, #00C6FF, #0066FF, #00C6FF);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 102, 255, 0.15);
        }
        
        .stagger-animation > * {
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s ease-out forwards;
        }
        
        .stagger-animation > *:nth-child(1) { animation-delay: 0.1s; }
        .stagger-animation > *:nth-child(2) { animation-delay: 0.2s; }
        .stagger-animation > *:nth-child(3) { animation-delay: 0.3s; }
        .stagger-animation > *:nth-child(4) { animation-delay: 0.4s; }
        .stagger-animation > *:nth-child(5) { animation-delay: 0.5s; }
        
        .progress-ring {
            transform: rotate(-90deg);
        }
        
        .progress-ring-circle {
            stroke-dasharray: 283;
            stroke-dashoffset: 283;
            transition: stroke-dashoffset 1s ease;
        }
        
        .typewriter {
            overflow: hidden;
            border-right: 3px solid #0066FF;
            white-space: nowrap;
            margin: 0 auto;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #0066FF }
        }
        
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .floating-icon {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-icon-delay {
            animation: float 6s ease-in-out infinite 1s;
        }
        
        .floating-icon-delay-2 {
            animation: float 6s ease-in-out infinite 2s;
        }
        
        .pulse-dot {
            animation: pulse-slow 2s infinite;
        }
        
        .shimmer-button {
            background: linear-gradient(90deg, #0066FF 0%, #00C6FF 50%, #0066FF 100%);
            background-size: 200% 100%;
            transition: all 0.3s ease;
        }
        
        .shimmer-button:hover {
            background-position: 100% 0;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 102, 255, 0.3);
        }
        
        .job-card {
            position: relative;
            overflow: hidden;
        }
        
        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }
        
        .job-card:hover::before {
            left: 100%;
        }
        
        .curved-underline {
            position: relative;
            display: inline-block;
        }
        
        .curved-underline::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 14px;
            background: url("data:image/svg+xml,%3Csvg width='120' height='14' viewBox='0 0 120 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 10C40 -5 80 -5 119 10' stroke='url(%23underline-gradient)' stroke-width='2' stroke-linecap='round'/%3E%3Cdefs%3E%3ClinearGradient id='underline-gradient' x1='0%25' y1='0%25' x2='100%25' y2='0%25'%3E%3Cstop offset='0%25' stop-color='%230066FF'/%3E%3Cstop offset='100%25' stop-color='%2300C6FF'/%3E%3C/linearGradient%3E%3C/defs%3E%3C/svg%3E") no-repeat;
            background-size: 100% 100%;
        }
        
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #0066FF, #00C6FF);
            z-index: 9999;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 relative overflow-x-hidden">
    
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>
    
    <!-- Floating Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow animation-delay-2000"></div>
        <div class="absolute top-3/4 left-1/3 w-64 h-64 bg-cyan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow animation-delay-4000"></div>
    </div>

    <!-- Top Navigation -->
    <nav class="bg-white/80 backdrop-blur-sm border-b border-gray-100 text-sm py-3 px-4 md:px-16 flex justify-between items-center text-gray-600 sticky top-0 z-40 glass-effect">
        <div class="flex gap-6">
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-all duration-300 relative group">
                Home
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#" class="hover:text-blue-600 transition-all duration-300 relative group">
                Find Job
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#" class="hover:text-blue-600 transition-all duration-300 relative group">
                Companies
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#" class="hover:text-blue-600 transition-all duration-300 relative group">
                Dashboard
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="#" class="hover:text-blue-600 transition-all duration-300 relative group">
                Job Alert
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
            </a>
        </div>
        <div class="hidden md:flex gap-6 items-center">
            <span class="flex items-center gap-2 hover:text-blue-600 transition cursor-pointer">
                <i class="fas fa-phone-alt text-blue-500"></i> 319-555-0115
            </span>
            <div class="flex items-center gap-1 cursor-pointer hover:text-blue-600 transition">🇺🇸 English <i class="fas fa-chevron-down text-xs"></i></div>
            <span class="cursor-pointer hover:text-blue-600 transition">USD <i class="fas fa-chevron-down text-xs"></i></span>
        </div>
    </nav>

    <!-- Main Header -->
    <header class="hero-gradient py-4 px-4 md:px-16 sticky top-12 z-30 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="bg-white p-2 rounded-xl shadow-lg hover:rotate-12 transition-transform duration-300">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path d="M21 13V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h6M16 2l4 4-4 4"/>
                    </svg>
                </div>
                <span class="text-2xl font-bold text-white">Jobpilot</span>
            </div>
            
            <div class="flex-1 max-w-xl mx-8 hidden lg:block">
                <div class="bg-white rounded-xl flex overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <select class="bg-gray-50 px-4 py-3 border-r border-gray-100 text-sm outline-none rounded-l-xl">
                        <option>All Jobs</option>
                        <option>Remote</option>
                        <option>Full-time</option>
                        <option>Part-time</option>
                    </select>
                    <input type="text" placeholder="Job Title, Keyword, or Company" class="flex-1 px-4 py-3 text-sm outline-none">
                    <button class="bg-blue-600 text-white px-6 hover:bg-blue-700 transition">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            
            <div class="flex items-center gap-6 text-white">
                <div class="relative cursor-pointer group">
                    <div class="p-2 rounded-full bg-white/10 group-hover:bg-white/20 transition">
                        <i class="fas fa-bell text-lg"></i>
                    </div>
                    <span class="absolute -top-1 -right-1 bg-red-500 w-3 h-3 rounded-full border-2 border-blue-600 pulse-dot"></span>
                    <div class="absolute right-0 top-12 w-64 bg-white text-gray-800 rounded-xl shadow-2xl p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <p class="font-bold mb-2">Notifications</p>
                        <div class="text-sm space-y-2">
                            <p class="p-2 bg-blue-50 rounded">🎯 New job matches your profile</p>
                            <p class="p-2">📅 Interview scheduled for tomorrow</p>
                        </div>
                    </div>
                </div>
                <div class="relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" class="w-10 h-10 rounded-full border-2 border-white/50 shadow-lg group-hover:scale-110 transition-transform duration-300" alt="Profile">
                    <div class="absolute right-0 top-12 w-48 bg-white text-gray-800 rounded-xl shadow-2xl p-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 z-50">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=50&q=50" class="w-10 h-10 rounded-full" alt="">
                            <div>
                                <p class="font-bold">Alex Morgan</p>
                                <p class="text-xs text-gray-500">UI/UX Designer</p>
                            </div>
                        </div>
                        <hr class="my-2">
                        <div class="space-y-2 text-sm">
                            <a href="#" class="block hover:text-blue-600"><i class="fas fa-user mr-2"></i> Profile</a>
                            <a href="#" class="block hover:text-blue-600"><i class="fas fa-cog mr-2"></i> Settings</a>
                            <a href="#" class="block hover:text-blue-600"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-20 px-4 md:px-16 max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-16 relative z-10">
        <div class="flex-1 stagger-animation">
            <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                Discover Your 
                <span class="gradient-text">Perfect Job</span>
                <br>
                Matching Your 
                <span class="typewriter">Passion & Skills</span>
            </h1>
            <p class="text-gray-600 text-xl mb-10 leading-relaxed">Unlock Your Potential, Embrace Your Future with AI-powered job matching.</p>
            
            <div class="bg-white p-2 rounded-2xl shadow-2xl border border-gray-100 flex flex-col md:flex-row gap-2 mb-6 hover:shadow-3xl transition-shadow duration-500">
                <div class="flex-1 flex items-center px-4 border-b md:border-b-0 md:border-r border-gray-100">
                    <i class="fas fa-search text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Job Title, Keyword" class="w-full p-4 outline-none placeholder-gray-400">
                </div>
                <div class="flex-1 flex items-center px-4">
                    <i class="fas fa-map-marker-alt text-gray-400 mr-3"></i>
                    <input type="text" placeholder="Enter Location or Remote" class="w-full p-4 outline-none placeholder-gray-400">
                </div>
                <button class="shimmer-button text-white px-10 py-4 rounded-xl font-bold transition-all duration-300">
                    Find Job Now <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
            
            <div class="flex flex-wrap gap-4">
                <span class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-100 transition cursor-pointer">💻 Design</span>
                <span class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-100 transition cursor-pointer">🔧 IT</span>
                <span class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-100 transition cursor-pointer">🚗 Driving</span>
                <span class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-100 transition cursor-pointer">🏨 Hospitality</span>
                <span class="bg-blue-50 text-blue-600 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-100 transition cursor-pointer">📊 Marketing</span>
            </div>
        </div>
        
        <div class="flex-1 relative hidden lg:block">
            <!-- Floating icons around hero image -->
            <div class="absolute -top-6 -left-6 floating-icon">
                <div class="w-16 h-16 bg-white rounded-2xl shadow-xl flex items-center justify-center text-blue-600 text-2xl">
                    <i class="fas fa-briefcase"></i>
                </div>
            </div>
            <div class="absolute top-1/3 -right-6 floating-icon-delay">
                <div class="w-14 h-14 bg-blue-600 rounded-2xl shadow-xl flex items-center justify-center text-white text-xl">
                    <i class="fas fa-chart-line"></i>
                </div>
            </div>
            <div class="absolute bottom-1/4 -left-8 floating-icon-delay-2">
                <div class="w-12 h-12 bg-green-500 rounded-2xl shadow-xl flex items-center justify-center text-white text-lg">
                    <i class="fas fa-check"></i>
                </div>
            </div>
            
            <!-- Main hero image -->
            <div class="relative">
                <img src="https://raw.githubusercontent.com/TemplateCookie/Jobpilot/main/public/frontend/assets/images/hero-img.png" alt="Hero Illustration" class="rounded-3xl shadow-2xl w-full">
                <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-2xl w-64">
                    <div class="flex items-center justify-between mb-3">
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 text-xl">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold">85%</p>
                            <p class="text-xs text-gray-500">Success Rate</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Job seekers find positions within 30 days</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="pb-20 px-4 md:px-16 max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-6 relative z-10 stagger-animation">
        <div class="bg-white p-8 rounded-2xl border border-blue-50 flex items-center gap-6 card-hover hover:border-blue-100">
            <div class="relative">
                <div class="p-4 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-xl">
                    <i class="fas fa-briefcase text-2xl"></i>
                </div>
                <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            <div>
                <p class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">2K+</p>
                <p class="text-gray-500 text-sm">Live Jobs</p>
            </div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl border border-blue-50 flex items-center gap-6 card-hover hover:border-blue-100">
            <div class="relative">
                <div class="p-4 bg-gradient-to-br from-green-50 to-green-100 text-green-600 rounded-xl">
                    <i class="fas fa-building text-2xl"></i>
                </div>
                <div class="absolute -top-2 -right-2 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center text-white text-xs">
                    <i class="fas fa-arrow-up"></i>
                </div>
            </div>
            <div>
                <p class="text-3xl font-bold bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">14K+</p>
                <p class="text-gray-500 text-sm">Companies</p>
            </div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl border border-blue-50 flex items-center gap-6 card-hover hover:border-blue-100">
            <div class="relative">
                <div class="p-4 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-xl">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <div class="absolute -top-2 -right-2 w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center text-white text-xs">
                    <i class="fas fa-chart-line"></i>
                </div>
            </div>
            <div>
                <p class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-500 bg-clip-text text-transparent">31K+</p>
                <p class="text-gray-500 text-sm">Candidates</p>
            </div>
        </div>
        
        <div class="bg-white p-8 rounded-2xl border border-blue-50 flex items-center gap-6 card-hover hover:border-blue-100">
            <div class="relative">
                <div class="p-4 bg-gradient-to-br from-amber-50 to-amber-100 text-amber-600 rounded-xl">
                    <i class="fas fa-file-alt text-2xl"></i>
                </div>
                <div class="absolute -top-2 -right-2 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center text-white text-xs">
                    <i class="fas fa-bolt"></i>
                </div>
            </div>
            <div>
                <p class="text-3xl font-bold bg-gradient-to-r from-amber-600 to-orange-500 bg-clip-text text-transparent">5K+</p>
                <p class="text-gray-500 text-sm">New Jobs</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-gradient-to-b from-white to-blue-50 text-center px-4 md:px-16 relative overflow-hidden">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-4">Why Choose <span class="gradient-text">Jobpilot</span></h2>
            <p class="text-gray-600 mb-16 max-w-2xl mx-auto">We combine cutting-edge technology with human expertise to deliver the best job matching experience</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 relative z-10 stagger-animation">
                <div class="flex flex-col items-center p-8 bg-white rounded-3xl shadow-lg card-hover">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-full flex items-center justify-center text-white text-3xl shadow-xl">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center text-blue-600">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Cost Effective</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Smart pricing models that scale with your needs. Whether you're posting one job or hundreds.</p>
                    <div class="mt-6 w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-blue-500 h-full rounded-full w-3/4"></div>
                    </div>
                </div>
                
                <div class="flex flex-col items-center p-8 bg-white rounded-3xl shadow-lg card-hover">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-emerald-400 rounded-full flex items-center justify-center text-white text-3xl shadow-xl">
                            <i class="fas fa-mouse-pointer"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center text-green-600">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Easy to Use</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Intuitive dashboard with drag-and-drop functionality. Manage applications in minutes, not hours.</p>
                    <div class="mt-6 w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-green-500 h-full rounded-full w-9/10"></div>
                    </div>
                </div>
                
                <div class="flex flex-col items-center p-8 bg-white rounded-3xl shadow-lg card-hover">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-400 rounded-full flex items-center justify-center text-white text-3xl shadow-xl">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="absolute -top-2 -right-2 w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center text-purple-600">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Quality Candidate</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">AI-powered matching connects you with the top 10% of candidates in your industry.</p>
                    <div class="mt-6 w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-purple-500 h-full rounded-full w-4/5"></div>
                    </div>
                </div>
            </div>
            
            <p class="mt-16 text-gray-600">Have a question? 
                <a href="#" class="text-blue-600 font-bold hover:underline inline-flex items-center gap-2">
                    Contact us <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </p>
        </div>
        
        <!-- Animated background elements -->
        <div class="absolute top-1/4 left-10 floating-icon">
            <div class="w-10 h-10 bg-blue-100 rounded-full"></div>
        </div>
        <div class="absolute bottom-1/4 right-10 floating-icon-delay">
            <div class="w-12 h-12 bg-green-100 rounded-full"></div>
        </div>
    </section>

    <!-- Popular Categories -->
    <section class="py-24 px-4 md:px-16 max-w-7xl mx-auto">
        <div class="flex justify-between items-end mb-16">
            <div>
                <h2 class="text-4xl font-bold mb-4">Popular <span class="curved-underline">Categories</span></h2>
                <p class="text-gray-600">Browse jobs by category that match your skills</p>
            </div>
            <a href="#" class="text-blue-600 font-semibold border border-blue-100 px-8 py-3 rounded-full hover:bg-blue-50 transition-all duration-300 hover:shadow-lg flex items-center gap-2">
                View All Jobs <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 stagger-animation">
            <div class="p-8 bg-white border border-gray-100 rounded-2xl hover:shadow-2xl transition-all duration-300 group cursor-pointer job-card flex items-center gap-6">
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl flex items-center justify-center text-blue-600 text-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 bg-blue-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center">
                        1
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-1">Garments/Textile</h3>
                    <p class="text-gray-400 text-sm">Open Positions</p>
                </div>
            </div>
            
            <div class="p-8 bg-gradient-to-br from-blue-50 to-cyan-50 border-2 border-blue-100 rounded-2xl shadow-xl shadow-blue-50 group cursor-pointer flex items-center gap-6 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-full -translate-y-10 translate-x-10 opacity-50"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center text-white text-2xl group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 bg-blue-600 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center">
                        0
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-1 text-blue-600">Driving/Motor Technician</h3>
                    <p class="text-gray-400 text-sm">Open Positions</p>
                </div>
            </div>
            
            <!-- Additional categories -->
            <div class="p-8 bg-white border border-gray-100 rounded-2xl hover:shadow-2xl transition-all duration-300 group cursor-pointer job-card flex items-center gap-6">
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-50 to-green-100 rounded-xl flex items-center justify-center text-green-600 text-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 bg-green-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center">
                        24
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-1">Software Development</h3>
                    <p class="text-gray-400 text-sm">Open Positions</p>
                </div>
            </div>
            
            <div class="p-8 bg-white border border-gray-100 rounded-2xl hover:shadow-2xl transition-all duration-300 group cursor-pointer job-card flex items-center gap-6">
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl flex items-center justify-center text-purple-600 text-2xl group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="absolute -top-2 -right-2 bg-purple-500 text-white text-xs font-bold rounded-full w-6 h-6 flex items-center justify-center">
                        12
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-1">Marketing & Sales</h3>
                    <p class="text-gray-400 text-sm">Open Positions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Working Process -->
    <section class="py-24 bg-white text-center relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold mb-4">
                <span class="gradient-text">Jobpilot</span> Working Process
            </h2>
            <p class="text-gray-600 mb-20 max-w-2xl mx-auto">Four simple steps to land your dream job with our platform</p>
            
            <div class="flex flex-col md:flex-row justify-between items-start gap-12 relative">
                <!-- Animated connecting line -->
                <div class="absolute top-16 left-0 w-full hidden lg:block">
                    <svg width="100%" height="120" viewBox="0 0 1200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="process-line" d="M100 60 C 300 20, 400 20, 600 60 C 800 100, 900 100, 1100 60" stroke="url(#line-gradient)" stroke-width="3" stroke-linecap="round" stroke-dasharray="10 10">
                            <animate attributeName="stroke-dashoffset" from="1000" to="0" dur="3s" repeatCount="indefinite" />
                        </path>
                        <defs>
                            <linearGradient id="line-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#0066FF" />
                                <stop offset="50%" stop-color="#00C6FF" />
                                <stop offset="100%" stop-color="#0066FF" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                
                <div class="flex-1 flex flex-col items-center relative z-10">
                    <div class="w-28 h-28 rounded-full bg-white shadow-2xl flex items-center justify-center mb-8 border-4 border-blue-50 text-blue-600 text-4xl hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold absolute top-0 -mt-5">1</div>
                    <h3 class="font-bold text-xl mb-3">Explore Opportunities</h3>
                    <p class="text-gray-500 text-sm max-w-[200px]">Browse through a diverse range of job listings tailored to your skills.</p>
                </div>
                
                <div class="flex-1 flex flex-col items-center relative z-10">
                    <div class="w-28 h-28 rounded-full bg-white shadow-2xl flex items-center justify-center mb-8 border-4 border-blue-50 text-blue-600 text-4xl hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold absolute top-0 -mt-5">2</div>
                    <h3 class="font-bold text-xl mb-3">Create Your Profile</h3>
                    <p class="text-gray-500 text-sm max-w-[200px]">Build a standout profile highlighting your skills, experience, and achievements.</p>
                </div>
                
                <div class="flex-1 flex flex-col items-center relative z-10">
                    <div class="w-28 h-28 rounded-full bg-white shadow-2xl flex items-center justify-center mb-8 border-4 border-blue-50 text-blue-600 text-4xl hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold absolute top-0 -mt-5">3</div>
                    <h3 class="font-bold text-xl mb-3">Apply with Ease</h3>
                    <p class="text-gray-500 text-sm max-w-[200px]">Effortlessly apply to jobs with just a few clicks using our smart application system.</p>
                </div>
                
                <div class="flex-1 flex flex-col items-center relative z-10">
                    <div class="w-28 h-28 rounded-full bg-white shadow-2xl flex items-center justify-center mb-8 border-4 border-blue-50 text-blue-600 text-4xl hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold absolute top-0 -mt-5">4</div>
                    <h3 class="font-bold text-xl mb-3">Track Your Progress</h3>
                    <p class="text-gray-500 text-sm max-w-[200px]">Stay informed on your applications with real-time tracking and updates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Job -->
    <section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-12">
            <div>
                <h2 class="text-3xl font-bold mb-2">Featured <span class="gradient-text">Job</span></h2>
                <p class="text-gray-600">Hand-picked opportunities from top companies</p>
            </div>
            <a href="#" class="text-blue-600 font-bold hover:underline flex items-center gap-2">
                View All <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
        
        <div class="p-8 bg-white border border-gray-100 rounded-3xl flex flex-col lg:flex-row items-center justify-between hover:shadow-2xl transition-all duration-500 group job-card">
            <div class="flex items-center gap-8">
                <div class="relative">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-4 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <img src="https://logo.clearbit.com/digitalocean.com" alt="DigitalOcean Logo" class="w-full">
                    </div>
                    <div class="absolute -top-2 -right-2 bg-green-500 text-white text-xs font-bold rounded-full w-8 h-8 flex items-center justify-center">
                        <i class="fas fa-bolt"></i>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-4 mb-3 flex-wrap">
                        <h3 class="text-2xl font-bold">Senior MERN Stack Developer</h3>
                        <span class="bg-blue-50 text-blue-600 text-sm font-bold px-4 py-1.5 rounded-full">Remote • Contractual</span>
                    </div>
                    <div class="flex flex-wrap gap-6 text-gray-500">
                        <span class="flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> Remote (Global)</span>
                        <span class="flex items-center gap-2"><i class="fas fa-money-bill-wave"></i> $90K - $120K</span>
                        <span class="flex items-center gap-2"><i class="fas fa-clock"></i> 18h Remaining</span>
                        <span class="flex items-center gap-2"><i class="fas fa-briefcase"></i> 3-5 Years Experience</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-6 mt-8 lg:mt-0">
                <button class="text-blue-600 hover:text-blue-700 p-3 rounded-full hover:bg-blue-50 transition">
                    <i class="far fa-bookmark text-xl"></i>
                </button>
                <button class="shimmer-button text-white px-10 py-4 rounded-xl font-bold transition-all duration-300 flex items-center gap-3">
                    Apply Now <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Top Companies -->
    <section class="py-24 px-4 md:px-16 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-12">
            Top <span class="curved-underline">Companies</span> Hiring Now
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-animation">
            <div class="p-8 border-2 border-blue-500 rounded-3xl shadow-2xl shadow-blue-50 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full -translate-y-16 translate-x-16 opacity-50 group-hover:scale-150 transition-transform duration-700"></div>
                <div class="flex items-center gap-6 mb-8 relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-gray-900 to-gray-700 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg">
                        T
                    </div>
                    <div>
                        <h3 class="font-bold text-xl">Templatecookie</h3>
                        <p class="text-sm text-gray-400 flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-8 relative z-10">
                    <span class="bg-gray-50 border border-gray-100 px-4 py-2 rounded-full text-xs text-gray-600 hover:bg-gray-100 transition cursor-pointer">Hotel/Restaurant</span>
                    <span class="bg-blue-50 border border-blue-100 px-4 py-2 rounded-full text-xs text-blue-600 hover:bg-blue-100 transition cursor-pointer">1 Open Position</span>
                    <span class="bg-green-50 border border-green-100 px-4 py-2 rounded-full text-xs text-green-600 hover:bg-green-100 transition cursor-pointer">⭐ 4.8 Rating</span>
                </div>
                <a href="#" class="text-blue-600 font-bold text-sm hover:underline inline-flex items-center gap-2 relative z-10">
                    View Profile <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
            
            <!-- Additional company cards -->
            <div class="p-8 border border-gray-100 rounded-3xl bg-white hover:shadow-2xl transition-all duration-300 card-hover">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 rounded-2xl flex items-center justify-center text-red-600 text-2xl font-bold shadow-lg">
                        <i class="fab fa-google"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl">Google</h3>
                        <p class="text-sm text-gray-400 flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> Mountain View, CA</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="bg-gray-50 border border-gray-100 px-4 py-2 rounded-full text-xs text-gray-600">Technology</span>
                    <span class="bg-blue-50 border border-blue-100 px-4 py-2 rounded-full text-xs text-blue-600">24 Open Positions</span>
                </div>
                <a href="#" class="text-blue-600 font-bold text-sm hover:underline inline-flex items-center gap-2">
                    View Profile <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
            
            <div class="p-8 border border-gray-100 rounded-3xl bg-white hover:shadow-2xl transition-all duration-300 card-hover">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center text-blue-600 text-2xl font-bold shadow-lg">
                        <i class="fab fa-microsoft"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl">Microsoft</h3>
                        <p class="text-sm text-gray-400 flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> Redmond, WA</p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="bg-gray-50 border border-gray-100 px-4 py-2 rounded-full text-xs text-gray-600">Software</span>
                    <span class="bg-blue-50 border border-blue-100 px-4 py-2 rounded-full text-xs text-blue-600">18 Open Positions</span>
                </div>
                <a href="#" class="text-blue-600 font-bold text-sm hover:underline inline-flex items-center gap-2">
                    View Profile <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#18191C] text-gray-400 py-24 px-4 md:px-16 relative overflow-hidden">
        <!-- Animated elements in footer -->
        <div class="absolute top-10 left-10 floating-icon opacity-20">
            <div class="w-20 h-20 bg-blue-500 rounded-full"></div>
        </div>
        <div class="absolute bottom-10 right-10 floating-icon-delay opacity-20">
            <div class="w-24 h-24 bg-cyan-500 rounded-full"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 border-b border-gray-800 pb-20">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-8 text-white">
                        <div class="bg-gradient-to-br from-blue-600 to-cyan-500 p-3 rounded-xl">
                            <i class="fas fa-briefcase text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">Jobpilot</span>
                    </div>
                    <p class="text-sm mb-6">Call Now: <span class="text-white font-semibold">319-555-0115</span></p>
                    <p class="text-sm mb-8">Discover tailored opportunities for job seekers and connect employers with top talent.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-400 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-bold text-lg mb-8">Candidate</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Browse Jobs</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Saved Jobs</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Dashboard</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Application History</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Terms of Service</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold text-lg mb-8">Employer</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Post a Job</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Browse Candidates</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Applications</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Employer Dashboard</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold text-lg mb-8">Support</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Contact Support</a></li>
                        <li><a href="#" class="hover:text-white transition flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-blue-500"></i> Community Forum</a></li>
                    </ul>
                </div>
                
                <div class="lg:col-span-1">
                    <h4 class="text-white font-bold text-lg mb-8">Newsletter</h4>
                    <p class="text-sm mb-6">Subscribe to get the latest jobs and career tips</p>
                    <div class="flex overflow-hidden rounded-lg">
                        <input type="email" placeholder="Your email" class="flex-1 bg-gray-800 px-4 py-3 text-sm outline-none">
                        <button class="bg-blue-600 text-white px-6 hover:bg-blue-700 transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>© Jobpilot 2025 | All Rights Reserved</p>
                <div class="flex gap-8 mt-6 md:mt-0">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Service</a>
                    <a href="#" class="hover:text-white transition">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for interactivity -->
    <script>
        // Scroll progress bar
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('scrollProgress').style.width = scrolled + '%';
        });
        
        // Stagger animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        // Observe all stagger-animation containers
        document.querySelectorAll('.stagger-animation').forEach((el) => {
            observer.observe(el);
        });
        
        // Add hover effect to cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Typewriter effect for hero text
        const typewriterTexts = ["Passion & Skills", "Dream Career", "Future Goals", "True Potential"];
        let currentTextIndex = 0;
        const typewriterElement = document.querySelector('.typewriter');
        
        function changeTypewriterText() {
            if (typewriterElement) {
                typewriterElement.textContent = typewriterTexts[currentTextIndex];
                typewriterElement.style.animation = 'none';
                void typewriterElement.offsetWidth; // Trigger reflow
                typewriterElement.style.animation = 'typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite';
                
                currentTextIndex = (currentTextIndex + 1) % typewriterTexts.length;
            }
        }
        
        // Change text every 4 seconds (after animation completes)
        if (typewriterElement) {
            setInterval(changeTypewriterText, 4000);
        }
        
        // Add click effect to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
        
        // Initialize animations on page load
        window.addEventListener('load', () => {
            document.body.style.opacity = '1';
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>