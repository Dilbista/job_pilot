<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpilot Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <div class="bg-[#0a1d37] text-gray-300 py-2 px-4 md:px-16 text-sm flex justify-between items-center border-b border-gray-700">
        <div class="flex space-x-6">
            <a href="#" class="hover:text-white transition">Home</a>
            <a href="#" class="hover:text-white transition">Find Job</a>
            <a href="#" class="hover:text-white transition">Companies</a>
            <a href="#" class="hover:text-white transition">Dashboard</a>
            <a href="#" class="hover:text-white transition">Job Alert</a>
        </div>
        <div class="flex items-center space-x-4">
            <span>📞 319-555-0115</span>
            <div class="flex items-center cursor-pointer">
                <span class="mr-1">🇺🇸 English</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            <div class="flex items-center cursor-pointer">
                <span class="mr-1">USD</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
    </div>

    <nav class="bg-[#0066FF] py-4 px-4 md:px-16 flex justify-between items-center text-white">
        <div class="flex items-center space-x-8 flex-1">
            <div class="flex items-center space-x-2 text-2xl font-bold italic">
                <div class="bg-white p-1 rounded text-[#0066FF]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                </div>
                <span>Jobpilot</span>
            </div>

            <div class="hidden md:flex bg-white rounded-md overflow-hidden flex-1 max-w-md ml-8">
                <select class="bg-gray-100 text-gray-700 px-4 py-2 border-r text-sm outline-none">
                    <option>Jobs</option>
                </select>
                <div class="flex items-center px-3 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    <input type="text" placeholder="Job Title, Keyword" class="px-3 py-2 text-gray-800 outline-none w-full text-sm">
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-6">
            <div class="relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
                <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] rounded-full w-4 h-4 flex items-center justify-center">1</span>
            </div>
            <div class="relative cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] rounded-full w-4 h-4 flex items-center justify-center">2</span>
            </div>
            <div class="relative">
                <img src="https://i.pravatar.cc/150?u=fakeuser" alt="Profile" class="w-10 h-10 rounded-full border-2 border-white object-cover">
                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></div>
            </div>
        </div>
    </nav>

    <main class="px-4 md:px-16 py-16 flex flex-col md:flex-row items-center justify-between gap-12 max-w-7xl mx-auto">
        <div class="w-full md:w-1/2">
            <h1 class="text-5xl font-bold text-gray-900 leading-tight mb-4">
                Discover Your Perfect Job:<br>
                Matching Your Interests and Skills
            </h1>
            <p class="text-gray-500 text-lg mb-10">Unlock Your Potential, Embrace Your Future.</p>

            <div class="bg-white p-2 rounded-lg shadow-xl border border-gray-100 flex flex-col md:flex-row items-center gap-2">
                <div class="flex items-center px-4 flex-1 border-r border-gray-200 w-full">
                    <svg class="text-[#0066FF] mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                    <input type="text" placeholder="Job Title, Keyword" class="py-3 w-full outline-none text-gray-700">
                </div>
                <div class="flex items-center px-4 flex-1 w-full">
                    <svg class="text-[#0066FF] mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <input type="text" placeholder="Enter Location" class="py-3 w-full outline-none text-gray-700">
                </div>
                <button class="bg-[#0066FF] text-white px-8 py-3 rounded-md font-semibold hover:bg-blue-700 transition w-full md:w-auto">
                    Find Job Now
                </button>
            </div>
            
            <p class="mt-4 text-xs text-gray-400">
                Suggestion: Design/Creative, Driving/Motor Technician, IT & Telecommunication, Hospitality/Travel/ Tourism
            </p>
        </div>

        <div class="w-full md:w-1/2 flex justify-center">
            <img src="https://raw.githubusercontent.com/Anmol-Baranwal/Modern-UI-UX-Job-Portal/main/public/assets/images/hero-img.png" alt="Illustration" class="w-full max-w-md">
        </div>
    </main>

    <section class="px-4 md:px-16 pb-16 max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4">
            <div class="bg-blue-50 p-3 rounded-lg text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            </div>
            <div>
                <p class="text-xl font-bold text-gray-900">2 +</p>
                <p class="text-sm text-gray-500">Live Jobs</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4">
            <div class="bg-cyan-50 p-3 rounded-lg text-cyan-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M3 7v1a3 3 0 0 0 6 0V7m0 1a3 3 0 0 0 6 0V7m0 1a3 3 0 0 0 6 0V7H3"/><path d="M4 21V10"/><path d="M10 21V10"/><path d="M16 21V10"/><path d="M20 21V10"/></svg>
            </div>
            <div>
                <p class="text-xl font-bold text-gray-900">14 +</p>
                <p class="text-sm text-gray-500">Companies</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4">
            <div class="bg-blue-50 p-3 rounded-lg text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <div>
                <p class="text-xl font-bold text-gray-900">31 +</p>
                <p class="text-sm text-gray-500">Candidates</p>
            </div>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex items-center space-x-4">
            <div class="bg-blue-50 p-3 rounded-lg text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            </div>
            <div>
                <p class="text-xl font-bold text-gray-900">5 +</p>
                <p class="text-sm text-gray-500">Total New Jobs</p>
            </div>
        </div>
    </section>

    <div class="fixed bottom-6 right-6 flex items-center space-x-2">
        <div class="bg-white px-4 py-2 rounded-full shadow-lg border text-sm font-medium">
            Chat with us 👋
        </div>
        <div class="bg-blue-600 p-4 rounded-full text-white shadow-lg cursor-pointer hover:scale-110 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>
        </div>
    </div>
<section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-16 text-center">
            <h2 class="text-4xl font-semibold text-gray-900 mb-16">Why choose us</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 rounded-full bg-white shadow-lg flex items-center justify-center mb-6 border border-gray-50">
                        <svg class="text-blue-600 w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2 4-4"/><path d="m22 10-6-6H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V10Z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cost Effective</h3>
                    <p class="text-gray-500 leading-relaxed text-sm px-4">
                        Whether you choose to post your jobs directly or have them indexed automatically, our pricing model is highly competitive and cost-effective.
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 rounded-full bg-white shadow-lg flex items-center justify-center mb-6 border border-gray-50">
                        <svg class="text-blue-600 w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Easy to Use</h3>
                    <p class="text-gray-500 leading-relaxed text-sm px-4">
                        We have created a streamlined user-interface so you can easily manage your jobs and candidates.
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 rounded-full bg-white shadow-lg flex items-center justify-center mb-6 border border-gray-50">
                        <svg class="text-blue-600 w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="22" y1="8" y2="8"/><line x1="19" x2="22" y1="12" y2="12"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Candidate</h3>
                    <p class="text-gray-500 leading-relaxed text-sm px-4">
                        Irrespective of your organization's size, we have a large pool of candidates with diverse skill sets and experience levels.
                    </p>
                </div>
            </div>

            <div class="mt-20">
                <p class="text-gray-900 text-lg mb-2">Have a question ?</p>
                <a href="#" class="text-blue-600 font-medium hover:underline">Contact us</a>
            </div>
        </div>
    </section>
    <section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
    <h2 class="text-3xl font-semibold text-gray-900 mb-10">Most Popular Vacancies</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-8 gap-x-12">
        <div class="group cursor-pointer">
            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition">Administrator</h3>
            <p class="text-gray-400 text-sm mt-1">2 Open Positions</p>
        </div>

        <div class="group cursor-pointer">
            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition">Team Leader</h3>
            <p class="text-gray-400 text-sm mt-1">0 Open Positions</p>
        </div>

        <div class="group cursor-pointer">
            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition">Manager</h3>
            <p class="text-gray-400 text-sm mt-1">0 Open Positions</p>
        </div>

        <div class="group cursor-pointer">
            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition">Assistant Manager</h3>
            <p class="text-gray-400 text-sm mt-1">0 Open Positions</p>
        </div>

        <div class="group cursor-pointer">
            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition">Executive</h3>
            <p class="text-gray-400 text-sm mt-1">0 Open Positions</p>
        </div>

        <div class="group cursor-pointer">
            <h3 class="text-lg font-medium text-gray-900 group-hover:text-blue-600 transition">Director</h3>
            <p class="text-gray-400 text-sm mt-1">0 Open Positions</p>
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50/50">
    <div class="max-w-7xl mx-auto px-4 md:px-16 text-center">
        <h2 class="text-4xl font-semibold text-gray-900 mb-20">Why choose us</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-white shadow-sm flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="m11 17 2 2 4-4"/><path d="m22 10-6-6H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V10Z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cost Effective</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                    Whether you choose to post your jobs directly or have them indexed automatically, our pricing model is highly competitive and cost-effective.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-white shadow-sm flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Easy to Use</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                    We have created a streamlined user-interface so you can easily manage your jobs and candidates.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div class="w-24 h-24 rounded-full bg-white shadow-sm flex items-center justify-center mb-8">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="22" y1="8" y2="8"/><line x1="19" x2="22" y1="12" y2="12"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Quality Candidate</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                    Irrespective of your organization's size, we have a large pool of candidates with diverse skill sets and experience levels.
                </p>
            </div>
        </div>

        <div class="mt-20">
            <p class="text-gray-800 text-lg">Have a question ?</p>
            <a href="#" class="text-blue-600 font-medium hover:underline mt-2 inline-block">Contact us</a>
        </div>
    </div>
</section>
<section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-semibold text-gray-900">Popular Category</h2>
        <a href="#" class="flex items-center text-blue-600 font-medium border border-blue-100 px-4 py-2 rounded-md hover:bg-blue-50 transition">
            View All Jobs 
            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M20.38 3.46L16 2a4 4 0 01-8 0L3.62 3.46a2 2 0 00-1.62 1.96V21a1 1 0 001 1h18a1 1 0 001-1V5.42a2 2 0 00-1.62-1.96zM12 21V7"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Garments/Textile</h3>
                <p class="text-gray-400 text-sm">1 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M3 21h18M3 7v1a3 3 0 006 0V7m0 1a3 3 0 006 0V7m0 1a3 3 0 006 0V7H3M4 21V10m6 11V10m6 11V10m4 11V10"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Hospitality/ Travel/ Tourism</h3>
                <p class="text-gray-400 text-sm">1 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Engineer/Architectssss</h3>
                <p class="text-gray-400 text-sm">0 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3zM18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5zM2 2l5 2M2 2l2 5"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Design/Creative</h3>
                <p class="text-gray-400 text-sm">0 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><rect width="20" height="14" x="2" y="3" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">IT & Telecommunication</h3>
                <p class="text-gray-400 text-sm">0 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2M9 7a4 4 0 110-8 4 4 0 010 8zM19 8v6M16 11h6"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Medical/Pharma</h3>
                <p class="text-gray-400 text-sm">0 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg shadow-2xl shadow-blue-100 border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-600 p-4 rounded-lg mr-4 text-white">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 002 13.1V16c0 .6.4 1 1 1h2M7 17a2 2 0 100-4 2 2 0 000 4zm10 0a2 2 0 100-4 2 2 0 000 4z"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-blue-600">Driving/Motor Technician</h3>
                <p class="text-gray-400 text-sm">0 Open Positions</p>
            </div>
        </div>

        <div class="flex items-center p-6 bg-white border border-gray-100 rounded-lg hover:shadow-xl hover:border-blue-200 transition group cursor-pointer">
            <div class="bg-blue-50 p-4 rounded-lg mr-4 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path d="M14.5 9L12 4 9.5 9 4.5 11.5 9.5 14 12 19l2.5-5 5-2.5-5-2.5z"/></svg>
            </div>
            <div>
                <h3 class="font-bold text-gray-900">Law/Legal</h3>
                <p class="text-gray-400 text-sm">0 Open Positions</p>
            </div>
        </div>

    </div>
</section>
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-16 text-center">
        <h2 class="text-4xl font-semibold mb-20 text-gray-900">
            <span class="text-blue-600">Jobpilot</span> Working Process
        </h2>

        <div class="relative flex flex-col md:flex-row justify-between items-start gap-12 md:gap-4">
            
            <div class="hidden md:block absolute top-12 left-0 w-full">
                <svg width="100%" height="100" viewBox="0 0 1000 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto opacity-40">
                    <path d="M150 50 Q 275 -20 400 50" stroke="#0066FF" stroke-width="2" stroke-dasharray="8 8" fill="none" />
                    <path d="M390 40 L 400 50 L 388 55" stroke="#0066FF" stroke-width="2" fill="none" />
                    <path d="M420 50 Q 550 120 680 50" stroke="#0066FF" stroke-width="2" stroke-dasharray="8 8" fill="none" />
                    <path d="M670 60 L 680 50 L 668 45" stroke="#0066FF" stroke-width="2" fill="none" />
                    <path d="M700 50 Q 825 -20 950 50" stroke="#0066FF" stroke-width="2" stroke-dasharray="8 8" fill="none" />
                    <path d="M940 40 L 950 50 L 938 55" stroke="#0066FF" stroke-width="2" fill="none" />
                </svg>
            </div>

            <div class="relative z-10 flex flex-col items-center flex-1">
                <div class="w-24 h-24 rounded-full bg-white shadow-xl flex items-center justify-center mb-8 border border-gray-50">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM3 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 019.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Explore Opportunities</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[200px]">
                    Browse through a diverse range of job listings tailored to your interests and expertise
                </p>
            </div>

            <div class="relative z-10 flex flex-col items-center flex-1">
                <div class="w-24 h-24 rounded-full bg-white shadow-xl flex items-center justify-center mb-8 border border-gray-50">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Create Your Profile</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[200px]">
                    Build a standout profile highlighting your skills, experience, and qualifications
                </p>
            </div>

            <div class="relative z-10 flex flex-col items-center flex-1">
                <div class="w-24 h-24 rounded-full bg-white shadow-xl flex items-center justify-center mb-8 border border-gray-50">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Apply with Ease</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[200px]">
                    Effortlessly apply to jobs that match your preferences with just a few clicks
                </p>
            </div>

            <div class="relative z-10 flex flex-col items-center flex-1">
                <div class="w-24 h-24 rounded-full bg-white shadow-xl flex items-center justify-center mb-8 border border-gray-50">
                    <svg class="w-10 h-10 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Track Your Progress</h3>
                <p class="text-gray-500 text-sm leading-relaxed max-w-[200px]">
                    Stay informed on your applications and manage your job-seeking journey effectively
                </p>
            </div>

        </div>
    </div>
</section>
<section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-semibold text-gray-900">Featured Job</h2>
        <a href="#" class="flex items-center text-blue-600 font-medium hover:underline">
            View All 
            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>

    <div class="space-y-4">
        <div class="bg-white border border-gray-100 rounded-xl p-6 flex flex-col md:flex-row items-center justify-between hover:shadow-lg transition-shadow">
            <div class="flex items-center w-full md:w-auto">
                <div class="w-16 h-16 bg-gray-50 rounded-lg flex items-center justify-center mr-6 border border-gray-100 p-2">
                    <img src="https://logo.clearbit.com/digitalocean.com" alt="Company Logo" class="max-w-full max-h-full">
                </div>
                
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <h3 class="text-xl font-bold text-gray-900">MERN Stack Developer</h3>
                        <span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">Contractual</span>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-4 text-gray-400 text-sm">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Aruba
                        </div>
                        <div class="flex items-center">
                            <span class="mr-1 text-lg leading-none">$</span>
                            Competitive
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            18h 56m Remaining
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-4 mt-6 md:mt-0 w-full md:w-auto justify-end">
                <button class="text-blue-500 hover:bg-blue-50 p-2 rounded-lg transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                </button>
                <button class="bg-blue-50 text-blue-600 px-6 py-3 rounded-lg font-bold flex items-center hover:bg-blue-600 hover:text-white transition">
                    Apply Now
                    <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-semibold text-gray-900">
            Top <span class="relative inline-block">Companies
                <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 100 8" preserveAspectRatio="none">
                    <path d="M0 7C30 2 70 2 100 7" stroke="#0066FF" stroke-width="2" fill="none" stroke-linecap="round"/>
                </svg>
            </span>
        </h2>
        <a href="#" class="flex items-center text-blue-600 font-medium border border-blue-100 px-4 py-2 rounded-md hover:bg-blue-50 transition">
            View All 
            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <div class="bg-white border border-gray-100 p-6 rounded-xl hover:shadow-lg transition group cursor-pointer">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center mr-4 p-2">
                    <img src="https://logo.clearbit.com/digitalocean.com" alt="Digital Point" class="max-h-full">
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Digital Point</h3>
                    <p class="text-gray-400 text-xs flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2"/></svg>
                        Greenland
                    </p>
                </div>
            </div>
            <div class="flex gap-2 mb-6">
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">NGO/Development</span>
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">2 Open Position</span>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold flex items-center group-hover:underline">
                View Profile <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>

        <div class="bg-white border-2 border-blue-500 p-6 rounded-xl shadow-xl shadow-blue-50 transition group cursor-pointer relative">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center mr-4 p-2">
                    <svg class="text-white w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 19h20L12 2zm0 3l7.5 13h-15L12 5z"/></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Templatecookie</h3>
                    <p class="text-gray-400 text-xs flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                        Bangladesh
                    </p>
                </div>
            </div>
            <div class="flex gap-2 mb-6">
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">Hotel/Restaurant</span>
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">1 Open Position</span>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold flex items-center hover:underline">
                View Profile <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2"/></svg>
            </a>
        </div>

        <div class="bg-white border border-gray-100 p-6 rounded-xl hover:shadow-lg transition group cursor-pointer">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center mr-4 p-2">
                    <img src="https://logo.clearbit.com/atlassian.com" alt="Nerdware" class="max-h-full">
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Nerdware</h3>
                    <p class="text-gray-400 text-xs flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                        Australia
                    </p>
                </div>
            </div>
            <div class="flex gap-2 mb-6">
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">Hotel/Restaurant</span>
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">1 Open Position</span>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold flex items-center group-hover:underline">
                View Profile <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2"/></svg>
            </a>
        </div>

    </div>
</section>
<section class="py-16 px-4 md:px-16 max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-semibold text-gray-900">
            Top <span class="relative inline-block">Companies
                <svg class="absolute -bottom-2 left-0 w-full" height="8" viewBox="0 0 100 8" preserveAspectRatio="none">
                    <path d="M0 7C30 2 70 2 100 7" stroke="#0066FF" stroke-width="2" fill="none" stroke-linecap="round"/>
                </svg>
            </span>
        </h2>
        <a href="#" class="flex items-center text-blue-600 font-medium border border-blue-100 px-4 py-2 rounded-md hover:bg-blue-50 transition">
            View All 
            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <div class="bg-white border border-gray-100 p-6 rounded-xl hover:shadow-lg transition group cursor-pointer">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center mr-4 p-2">
                    <img src="https://logo.clearbit.com/digitalocean.com" alt="Digital Point" class="max-h-full">
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Digital Point</h3>
                    <p class="text-gray-400 text-xs flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2"/></svg>
                        Greenland
                    </p>
                </div>
            </div>
            <div class="flex gap-2 mb-6">
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">NGO/Development</span>
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">2 Open Position</span>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold flex items-center group-hover:underline">
                View Profile <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </a>
        </div>

        <div class="bg-white border-2 border-blue-500 p-6 rounded-xl shadow-xl shadow-blue-50 transition group cursor-pointer relative">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center mr-4 p-2">
                    <svg class="text-white w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 19h20L12 2zm0 3l7.5 13h-15L12 5z"/></svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Templatecookie</h3>
                    <p class="text-gray-400 text-xs flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                        Bangladesh
                    </p>
                </div>
            </div>
            <div class="flex gap-2 mb-6">
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">Hotel/Restaurant</span>
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">1 Open Position</span>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold flex items-center hover:underline">
                View Profile <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2"/></svg>
            </a>
        </div>

        <div class="bg-white border border-gray-100 p-6 rounded-xl hover:shadow-lg transition group cursor-pointer">
            <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center mr-4 p-2">
                    <img src="https://logo.clearbit.com/atlassian.com" alt="Nerdware" class="max-h-full">
                </div>
                <div>
                    <h3 class="font-bold text-gray-900">Nerdware</h3>
                    <p class="text-gray-400 text-xs flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                        Australia
                    </p>
                </div>
            </div>
            <div class="flex gap-2 mb-6">
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">Hotel/Restaurant</span>
                <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full border border-gray-100">1 Open Position</span>
            </div>
            <a href="#" class="text-blue-600 text-sm font-semibold flex items-center group-hover:underline">
                View Profile <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2"/></svg>
            </a>
        </div>

    </div>
</section>
<section class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-16">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm text-left relative">
                    <div class="flex text-orange-400 mb-4">★★★★★</div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-10">"Jobpilot has been a game-changer for my job search. I found my dream job in no time, thanks to their user-friendly interface..."</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gray-100 rounded-lg"></div>
                            <div><h4 class="font-bold text-sm">Emily Johnson</h4><p class="text-xs text-gray-400">TechFusion Solutions</p></div>
                        </div>
                        <span class="text-gray-100 text-4xl font-serif">“</span>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm text-left">
                    <div class="flex text-orange-400 mb-4">★★★★★</div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-10">"I can't thank Jobpilot enough for their exceptional services. Their personalized job recommendations made my job hunt a breeze..."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-100 rounded-lg"></div>
                        <div><h4 class="font-bold text-sm">David Rodriguez</h4><p class="text-xs text-gray-400">InnovateX Services</p></div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm text-left">
                    <div class="flex text-orange-400 mb-4">★★★★★</div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-10">"Jobpilot truly understands job seekers' needs. Their platform allowed me to connect with top employers and secure multiple invitations..."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-100 rounded-lg"></div>
                        <div><h4 class="font-bold text-sm">Sarah Williams</h4><p class="text-xs text-gray-400">ProTech Industries</p></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center gap-2 mt-12">
                <div class="w-6 h-2 bg-blue-600 rounded-full"></div>
                <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
                <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
            </div>
        </div>
    </section>
<footer class="bg-[#18191C] text-gray-400 py-20 px-4 md:px-16">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">
            
            <div class="lg:col-span-1">
                <div class="flex items-center gap-2 mb-6">
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path d="M21 13V6a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h6M16 2l4 4-4 4"/></svg>
                    </div>
                    <span class="text-2xl font-bold text-white">Jobpilot</span>
                </div>
                <p class="text-sm mb-4">Call Now: <span class="text-white font-medium">319-555-0115</span></p>
                <p class="text-sm leading-relaxed max-w-xs">
                    Discover tailored opportunities for job seekers and top talent for employers
                </p>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6">Company</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition">About</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Contact</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Blog</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6">Candidate</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition">Browse Jobs</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Candidate Dashboard</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Saved Jobs</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Candidate plan</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Refund Policy</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Terms of Service</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6">Employer</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition">Post a Job</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Browse Companies</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Companies Dashboard</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Applications</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6">Support</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#" class="hover:text-blue-500 transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Privacy & Policy</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-blue-500 transition">Refund Policy</a></li>
                </ul>
            </div>
        </div>
        

        <div class="mt-20 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-sm">© Jobpilot 2025 | All Rights Reserved</p>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3V2z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4.162 4.162 0 110-8.324 4.162 4.162 0 010 8.324zM18.406 3.941a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505a3.017 3.017 0 00-2.122 2.136C0 8.055 0 12 0 12s0 3.945.501 5.814a3.015 3.015 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.945 24 12 24 12s0-3.945-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                <a href="#" class="hover:text-white transition">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>