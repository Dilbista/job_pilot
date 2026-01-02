@extends('candidate.layouts.master')

@section('content')
<div class="container mx-auto px-4 py-8" style="padding-top: 12rem;">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Find Your Dream Job</h1>
        <p class="text-gray-600">Browse through thousands of job opportunities from top companies</p>
    </div>

    <!-- Search and Filter Section -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
        <!-- Search Bar -->
        <div class="mb-6">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="job-search" placeholder="Job title, keywords, or company"
                       class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
            </div>
        </div>

        <!-- Filters Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <!-- Location Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                <div class="relative">
                    <select id="location-filter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none bg-white">
                        <option value="">All Locations</option>
                        <option value="remote">Remote</option>
                        <option value="new-york">New York</option>
                        <option value="san-francisco">San Francisco</option>
                        <option value="london">London</option>
                        <option value="berlin">Berlin</option>
                        <option value="tokyo">Tokyo</option>
                        <option value="singapore">Singapore</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Job Type Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Job Type</label>
                <div class="relative">
                    <select id="type-filter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none bg-white">
                        <option value="">All Types</option>
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <option value="contract">Contract</option>
                        <option value="internship">Internship</option>
                        <option value="remote">Remote</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Experience Level -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Experience</label>
                <div class="relative">
                    <select id="experience-filter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none bg-white">
                        <option value="">All Levels</option>
                        <option value="entry">Entry Level</option>
                        <option value="mid">Mid Level</option>
                        <option value="senior">Senior Level</option>
                        <option value="lead">Lead</option>
                        <option value="executive">Executive</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Salary Range -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Salary Range</label>
                <div class="relative">
                    <select id="salary-filter" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none bg-white">
                        <option value="">All Salaries</option>
                        <option value="0-50000">$0 - $50,000</option>
                        <option value="50000-100000">$50,000 - $100,000</option>
                        <option value="100000-150000">$100,000 - $150,000</option>
                        <option value="150000+">$150,000+</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advanced Filters Toggle -->
        <div class="mb-6">
            <button id="advanced-filters-toggle" class="flex items-center text-blue-600 hover:text-blue-800">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Show Advanced Filters
            </button>

            <!-- Advanced Filters (Hidden by default) -->
            <div id="advanced-filters" class="mt-4 hidden">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 bg-gray-50 rounded-lg">
                    <!-- Industry Filter -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Industry</label>
                        <div class="space-y-2 max-h-40 overflow-y-auto p-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Technology</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Healthcare</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Finance</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Education</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Retail</span>
                            </label>
                        </div>
                    </div>

                    <!-- Skills Filter -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Required Skills</label>
                        <div class="space-y-2 max-h-40 overflow-y-auto p-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">JavaScript</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Python</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">React</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Node.js</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">AWS</span>
                            </label>
                        </div>
                    </div>

                    <!-- Date Posted -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date Posted</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="date-posted" class="rounded-full border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Last 24 hours</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date-posted" class="rounded-full border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Last 3 days</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date-posted" class="rounded-full border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Last week</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="date-posted" class="rounded-full border-gray-300 text-blue-600 focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-700">Last month</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4">
            <button id="search-button" class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-md hover:shadow-lg">
                Search Jobs
            </button>
            <button id="clear-filters" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                Clear Filters
            </button>
        </div>
    </div>

    <!-- Results Section -->
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar Filters -->
        <div class="lg:w-1/4">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                <h3 class="font-bold text-lg text-gray-900 mb-4">Quick Filters</h3>
                
                <!-- Job Categories -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-700 mb-3">Job Categories</h4>
                    <div class="space-y-2">
                        @php
                            $categories = [
                                ['name' => 'Technology', 'count' => 245, 'icon' => '💻'],
                                ['name' => 'Marketing', 'count' => 189, 'icon' => '📈'],
                                ['name' => 'Design', 'count' => 156, 'icon' => '🎨'],
                                ['name' => 'Finance', 'count' => 132, 'icon' => '💰'],
                                ['name' => 'Healthcare', 'count' => 98, 'icon' => '🏥'],
                                ['name' => 'Education', 'count' => 76, 'icon' => '📚'],
                                ['name' => 'Sales', 'count' => 143, 'icon' => '📞'],
                                ['name' => 'Customer Service', 'count' => 87, 'icon' => '💬'],
                            ];
                        @endphp
                        
                        @foreach($categories as $category)
                        <label class="flex items-center justify-between p-2 hover:bg-gray-50 rounded cursor-pointer">
                            <div class="flex items-center">
                                <span class="mr-3">{{ $category['icon'] }}</span>
                                <span class="text-sm text-gray-700">{{ $category['name'] }}</span>
                            </div>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded-full">{{ $category['count'] }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <!-- Popular Tags -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-700 mb-3">Popular Tags</h4>
                    <div class="flex flex-wrap gap-2">
                        @php
                            $tags = ['Remote', 'Flexible Hours', 'Entry Level', 'Senior', 'Manager', 'Director', 'Full-time', 'Part-time', 'Contract', 'Internship'];
                        @endphp
                        @foreach($tags as $tag)
                        <button class="tag-filter text-xs px-3 py-1 bg-blue-50 text-blue-600 rounded-full hover:bg-blue-100 transition-colors">
                            {{ $tag }}
                        </button>
                        @endforeach
                    </div>
                </div>

                <!-- Salary Range Slider -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-700 mb-3">Salary Range</h4>
                    <div class="space-y-4">
                        <div class="relative pt-1">
                            <div class="flex justify-between text-xs text-gray-600 mb-2">
                                <span>$0</span>
                                <span>$250,000+</span>
                            </div>
                            <input type="range" id="salary-slider" min="0" max="250000" step="10000" value="100000" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                        </div>
                        <div class="text-center">
                            <span id="salary-value" class="font-medium text-blue-600">$100,000</span>
                        </div>
                    </div>
                </div>

                <!-- Save Search -->
                <div class="border-t pt-4">
                    <button class="w-full flex items-center justify-center px-4 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition-colors">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                        Save Search
                    </button>
                </div>
            </div>
        </div>

        <!-- Job Listings -->
        <div class="lg:w-3/4">
            <!-- Results Header -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900" id="results-count">1,245 Jobs Found</h2>
                    <p class="text-gray-600 text-sm mt-1">Sorted by: <span class="font-medium text-blue-600">Relevance</span></p>
                </div>
                
                <!-- Sort Options -->
                <div class="flex items-center space-x-4 mt-4 sm:mt-0">
                    <span class="text-sm text-gray-700">Sort by:</span>
                    <select id="sort-options" class="text-sm border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="relevance">Relevance</option>
                        <option value="date">Date Posted</option>
                        <option value="salary">Salary</option>
                        <option value="distance">Distance</option>
                    </select>
                    
                    <!-- View Toggle -->
                    <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                        <button id="grid-view" class="p-2 border-r border-gray-300 hover:bg-gray-100">
                            <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </button>
                        <button id="list-view" class="p-2 hover:bg-gray-100 bg-gray-100">
                            <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Job Cards Container -->
            <div id="job-listings-container" class="space-y-4">
                <!-- Job Cards will be loaded here -->
            </div>

            <!-- Loading Indicator -->
            <div id="loading-indicator" class="hidden text-center py-12">
                <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-blue-600"></div>
                <p class="mt-4 text-gray-600">Loading jobs...</p>
            </div>

            <!-- No Results Message -->
            <div id="no-results" class="hidden text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-4 text-lg font-medium text-gray-900">No jobs found</h3>
                <p class="mt-2 text-gray-600">Try adjusting your filters or search terms</p>
            </div>

            <!-- Pagination -->
            <div id="pagination" class="mt-8 flex justify-center">
                <nav class="inline-flex rounded-md shadow">
                    <a href="#" class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Previous</a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-blue-600 hover:bg-gray-50">1</a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">2</a>
                    <a href="#" class="px-3 py-2 border-t border-b border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">3</a>
                    <a href="#" class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">Next</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Job Detail Modal -->
<div id="job-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
    <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-xl bg-white">
        <div class="flex justify-between items-start">
            <div>
                <h3 id="modal-job-title" class="text-2xl font-bold text-gray-900"></h3>
                <p id="modal-job-company" class="text-blue-600 font-medium"></p>
            </div>
            <button id="close-modal" class="text-gray-400 hover:text-gray-600">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div class="mt-6 space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    </svg>
                    <span id="modal-job-location" class="text-gray-600"></span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span id="modal-job-salary" class="text-gray-600"></span>
                </div>
            </div>
            
            <div id="modal-job-description" class="text-gray-700"></div>
            
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <button class="flex-1 bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Apply Now
                </button>
                <button class="flex-1 border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                    Save Job
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Styles */
    input[type="range"]::-webkit-slider-thumb {
        appearance: none;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #2563eb;
        cursor: pointer;
        box-shadow: 0 0 2px 0 rgba(0,0,0,0.2);
    }

    input[type="range"]::-moz-range-thumb {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #2563eb;
        cursor: pointer;
        border: none;
        box-shadow: 0 0 2px 0 rgba(0,0,0,0.2);
    }

    /* Smooth transitions */
    .job-card {
        transition: all 0.3s ease;
    }

    .job-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* Custom scrollbar */
    .overflow-y-auto::-webkit-scrollbar {
        width: 6px;
    }

    .overflow-y-auto::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 3px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 3px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>

<script>
    // Sample job data
    const sampleJobs = [
        {
            id: 1,
            title: "Senior Frontend Developer",
            company: "TechCorp Inc.",
            logo: "https://logo.clearbit.com/digitalocean.com",
            location: "San Francisco, CA",
            salary: "$120,000 - $150,000",
            type: "Full-time",
            experience: "Senior",
            category: "Technology",
            tags: ["React", "TypeScript", "Next.js", "Remote"],
            posted: "2 days ago",
            description: "We're looking for a Senior Frontend Developer to join our growing team...",
            companyInfo: "TechCorp is a leading technology company specializing in web development..."
        },
        {
            id: 2,
            title: "Product Designer",
            company: "DesignStudio",
            logo: "https://logo.clearbit.com/atlassian.com",
            location: "New York, NY",
            salary: "$90,000 - $130,000",
            type: "Contract",
            experience: "Mid",
            category: "Design",
            tags: ["Figma", "UI/UX", "Design System"],
            posted: "1 week ago",
            description: "Join our design team to create beautiful user experiences...",
            companyInfo: "DesignStudio focuses on creating exceptional digital products..."
        },
        {
            id: 3,
            title: "Data Scientist",
            company: "DataWorks",
            logo: "https://logo.clearbit.com/tableau.com",
            location: "Remote",
            salary: "$140,000 - $180,000",
            type: "Full-time",
            experience: "Senior",
            category: "Technology",
            tags: ["Python", "Machine Learning", "SQL", "AWS"],
            posted: "3 days ago",
            description: "We're seeking a Data Scientist to work on cutting-edge ML projects...",
            companyInfo: "DataWorks provides data analytics solutions for Fortune 500 companies..."
        },
        {
            id: 4,
            title: "Marketing Manager",
            company: "GrowthHackers",
            logo: "https://logo.clearbit.com/hubspot.com",
            location: "Chicago, IL",
            salary: "$80,000 - $110,000",
            type: "Full-time",
            experience: "Mid",
            category: "Marketing",
            tags: ["Digital Marketing", "SEO", "Social Media"],
            posted: "5 days ago",
            description: "Lead our marketing efforts and drive customer acquisition...",
            companyInfo: "GrowthHackers helps companies scale their marketing efforts..."
        },
        {
            id: 5,
            title: "Backend Engineer",
            company: "CloudSystems",
            logo: "https://logo.clearbit.com/aws.amazon.com",
            location: "Seattle, WA",
            salary: "$130,000 - $160,000",
            type: "Full-time",
            experience: "Senior",
            category: "Technology",
            tags: ["Node.js", "Python", "Docker", "Kubernetes"],
            posted: "1 day ago",
            description: "Build scalable backend systems for our cloud platform...",
            companyInfo: "CloudSystems provides cloud infrastructure solutions..."
        },
        {
            id: 6,
            title: "UX Researcher",
            company: "UserInsights",
            logo: "https://logo.clearbit.com/usertesting.com",
            location: "Austin, TX",
            salary: "$85,000 - $115,000",
            type: "Full-time",
            experience: "Mid",
            category: "Design",
            tags: ["User Research", "Interviews", "Analytics"],
            posted: "4 days ago",
            description: "Conduct user research to inform product decisions...",
            companyInfo: "UserInsights specializes in user experience research..."
        }
    ];

    // DOM Elements
    const jobSearchInput = document.getElementById('job-search');
    const locationFilter = document.getElementById('location-filter');
    const typeFilter = document.getElementById('type-filter');
    const experienceFilter = document.getElementById('experience-filter');
    const salaryFilter = document.getElementById('salary-filter');
    const searchButton = document.getElementById('search-button');
    const clearFiltersButton = document.getElementById('clear-filters');
    const advancedFiltersToggle = document.getElementById('advanced-filters-toggle');
    const advancedFilters = document.getElementById('advanced-filters');
    const jobListingsContainer = document.getElementById('job-listings-container');
    const loadingIndicator = document.getElementById('loading-indicator');
    const noResults = document.getElementById('no-results');
    const resultsCount = document.getElementById('results-count');
    const salarySlider = document.getElementById('salary-slider');
    const salaryValue = document.getElementById('salary-value');
    const gridViewButton = document.getElementById('grid-view');
    const listViewButton = document.getElementById('list-view');
    const sortOptions = document.getElementById('sort-options');
    const jobModal = document.getElementById('job-modal');
    const closeModal = document.getElementById('close-modal');

    // Current state
    let currentView = 'list';
    let currentJobs = [...sampleJobs];
    let selectedJob = null;

    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
        renderJobs(currentJobs);
        setupEventListeners();
    });

    function setupEventListeners() {
        // Search functionality
        searchButton.addEventListener('click', performSearch);
        jobSearchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') performSearch();
        });

        // Filter changes
        [locationFilter, typeFilter, experienceFilter, salaryFilter].forEach(filter => {
            filter.addEventListener('change', performSearch);
        });

        // Clear filters
        clearFiltersButton.addEventListener('click', () => {
            jobSearchInput.value = '';
            locationFilter.value = '';
            typeFilter.value = '';
            experienceFilter.value = '';
            salaryFilter.value = '';
            salarySlider.value = 100000;
            salaryValue.textContent = '$100,000';
            currentJobs = [...sampleJobs];
            renderJobs(currentJobs);
        });

        // Advanced filters toggle
        advancedFiltersToggle.addEventListener('click', () => {
            advancedFilters.classList.toggle('hidden');
            advancedFiltersToggle.innerHTML = advancedFilters.classList.contains('hidden') 
                ? '<svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>Show Advanced Filters'
                : '<svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" /></svg>Hide Advanced Filters';
        });

        // Salary slider
        salarySlider.addEventListener('input', () => {
            const value = parseInt(salarySlider.value);
            salaryValue.textContent = `$${value.toLocaleString()}`;
        });

        // View toggle
        gridViewButton.addEventListener('click', () => {
            currentView = 'grid';
            gridViewButton.classList.add('bg-gray-100');
            listViewButton.classList.remove('bg-gray-100');
            renderJobs(currentJobs);
        });

        listViewButton.addEventListener('click', () => {
            currentView = 'list';
            listViewButton.classList.add('bg-gray-100');
            gridViewButton.classList.remove('bg-gray-100');
            renderJobs(currentJobs);
        });

        // Sort options
        sortOptions.addEventListener('change', () => {
            sortJobs();
        });

        // Modal
        closeModal.addEventListener('click', () => {
            jobModal.classList.add('hidden');
        });

        // Click outside modal to close
        jobModal.addEventListener('click', (e) => {
            if (e.target === jobModal) {
                jobModal.classList.add('hidden');
            }
        });
    }

    function performSearch() {
        loadingIndicator.classList.remove('hidden');
        jobListingsContainer.classList.add('hidden');
        
        // Simulate API call delay
        setTimeout(() => {
            const searchTerm = jobSearchInput.value.toLowerCase();
            const location = locationFilter.value;
            const type = typeFilter.value;
            const experience = experienceFilter.value;
            const salary = salaryFilter.value;
            const minSalary = parseInt(salarySlider.value);

            currentJobs = sampleJobs.filter(job => {
                // Search term
                if (searchTerm && !job.title.toLowerCase().includes(searchTerm) && 
                    !job.company.toLowerCase().includes(searchTerm) &&
                    !job.tags.some(tag => tag.toLowerCase().includes(searchTerm))) {
                    return false;
                }

                // Location filter
                if (location) {
                    if (location === 'remote' && !job.location.toLowerCase().includes('remote')) {
                        return false;
                    }
                    if (location !== 'remote' && !job.location.toLowerCase().includes(location)) {
                        return false;
                    }
                }

                // Type filter
                if (type && job.type.toLowerCase() !== type) {
                    return false;
                }

                // Experience filter
                if (experience && job.experience.toLowerCase() !== experience) {
                    return false;
                }

                // Salary filter
                if (minSalary > 0) {
                    const jobMinSalary = parseInt(job.salary.replace(/[^0-9]/g, '').split('-')[0]);
                    if (jobMinSalary < minSalary) {
                        return false;
                    }
                }

                return true;
            });

            sortJobs();
            loadingIndicator.classList.add('hidden');
            jobListingsContainer.classList.remove('hidden');
        }, 500);
    }

    function sortJobs() {
        const sortBy = sortOptions.value;
        
        currentJobs.sort((a, b) => {
            switch(sortBy) {
                case 'date':
                    return new Date(b.posted) - new Date(a.posted);
                case 'salary':
                    const salaryA = parseInt(a.salary.replace(/[^0-9]/g, '').split('-')[0]);
                    const salaryB = parseInt(b.salary.replace(/[^0-9]/g, '').split('-')[0]);
                    return salaryB - salaryA;
                case 'distance':
                    // For demo, random distance
                    return Math.random() - 0.5;
                default: // relevance
                    return 0;
            }
        });

        renderJobs(currentJobs);
    }

    function renderJobs(jobs) {
        if (jobs.length === 0) {
            noResults.classList.remove('hidden');
            jobListingsContainer.innerHTML = '';
            resultsCount.textContent = '0 Jobs Found';
            return;
        }

        noResults.classList.add('hidden');
        resultsCount.textContent = `${jobs.length} Job${jobs.length !== 1 ? 's' : ''} Found`;

        const jobCards = jobs.map(job => {
            if (currentView === 'grid') {
                return createGridJobCard(job);
            } else {
                return createListJobCard(job);
            }
        }).join('');

        jobListingsContainer.innerHTML = jobCards;

        // Add click event to job cards
        document.querySelectorAll('.view-details').forEach(button => {
            button.addEventListener('click', (e) => {
                const jobId = parseInt(e.target.dataset.jobId || e.target.closest('button').dataset.jobId);
                openJobModal(jobId);
            });
        });

        // Add save job functionality
        document.querySelectorAll('.save-job').forEach(button => {
            button.addEventListener('click', (e) => {
                const jobId = parseInt(e.target.dataset.jobId || e.target.closest('button').dataset.jobId);
                toggleSaveJob(jobId, e.target.closest('button'));
            });
        });
    }

    function createGridJobCard(job) {
        return `
            <div class="job-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-15 h-7 bg-gray-100 rounded-lg flex items-center justify-center p-2">
                            <img src="${job.logo}" alt="${job.company}" class="w-full h-full object-contain">
                        </div>
                        <span class="text-xs font-medium px-3 py-1 rounded-full ${getTypeColor(job.type)}">
                            ${job.type}
                        </span>
                    </div>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">${job.title}</h3>
                    <p class="text-blue-600 font-medium mb-4">${job.company}</p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            ${job.location}
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            ${job.salary}
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-6">
                        ${job.tags.map(tag => `<span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">${tag}</span>`).join('')}
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">${job.posted}</span>
                        <div class="flex gap-2">
                            <button class="save-job p-2 text-gray-400 hover:text-blue-600" data-job-id="${job.id}">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                </svg>
                            </button>
                            <button class="view-details px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors" data-job-id="${job.id}">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    function createListJobCard(job) {
        return `
            <div class="job-card bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                <div class="p-6">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between">
                        <div class="flex items-start lg:items-center space-x-4 mb-4 lg:mb-0">
                            <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center p-3">
                                <img src="${job.logo}" alt="${job.company}" class="w-full h-full object-contain">
                            </div>
                            <div>
                                <div class="flex items-center gap-3 mb-2">
                                    <h3 class="text-xl font-semibold text-gray-900">${job.title}</h3>
                                    <span class="text-xs font-medium px-3 py-1 rounded-full ${getTypeColor(job.type)}">
                                        ${job.type}
                                    </span>
                                </div>
                                <p class="text-blue-600 font-medium mb-1">${job.company}</p>
                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        </svg>
                                        ${job.location}
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        ${job.salary}
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        ${job.posted}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                            <div class="flex flex-wrap gap-2 mb-4 sm:mb-0">
                                ${job.tags.slice(0, 3).map(tag => `<span class="text-xs bg-gray-100 text-gray-600 px-3 py-1 rounded-full">${tag}</span>`).join('')}
                            </div>
                            <div class="flex gap-2">
                                <button class="save-job p-2 text-gray-400 hover:text-blue-600" data-job-id="${job.id}">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                    </svg>
                                </button>
                                <button class="view-details px-6 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors" data-job-id="${job.id}">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    function getTypeColor(type) {
        const colors = {
            'Full-time': 'bg-green-100 text-green-800',
            'Part-time': 'bg-blue-100 text-blue-800',
            'Contract': 'bg-yellow-100 text-yellow-800',
            'Internship': 'bg-purple-100 text-purple-800',
            'Remote': 'bg-indigo-100 text-indigo-800'
        };
        return colors[type] || 'bg-gray-100 text-gray-800';
    }

    function openJobModal(jobId) {
        const job = sampleJobs.find(j => j.id === jobId);
        if (!job) return;

        selectedJob = job;

        document.getElementById('modal-job-title').textContent = job.title;
        document.getElementById('modal-job-company').textContent = job.company;
        document.getElementById('modal-job-location').textContent = job.location;
        document.getElementById('modal-job-salary').textContent = job.salary;
        
        const description = `
            <div class="space-y-4">
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Job Description</h4>
                    <p>${job.description}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Company Information</h4>
                    <p>${job.companyInfo}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Requirements</h4>
                    <ul class="list-disc list-inside space-y-1">
                        ${job.tags.map(tag => `<li>${tag} experience</li>`).join('')}
                        <li>${job.experience} level experience</li>
                        <li>Excellent communication skills</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-900 mb-2">Benefits</h4>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Competitive salary and equity</li>
                        <li>Health, dental, and vision insurance</li>
                        <li>Flexible work hours</li>
                        <li>Remote work options</li>
                        <li>Professional development budget</li>
                    </ul>
                </div>
            </div>
        `;

        document.getElementById('modal-job-description').innerHTML = description;
        jobModal.classList.remove('hidden');
    }

    function toggleSaveJob(jobId, button) {
        const icon = button.querySelector('svg');
        const isSaved = icon.getAttribute('fill') === 'currentColor';
        
        if (isSaved) {
            icon.removeAttribute('fill');
            icon.setAttribute('stroke', 'currentColor');
            showNotification('Job removed from saved jobs', 'info');
        } else {
            icon.setAttribute('fill', 'currentColor');
            icon.removeAttribute('stroke');
            showNotification('Job saved successfully!', 'success');
        }
    }

    function showNotification(message, type) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white z-50 transform transition-transform duration-300 ${
            type === 'success' ? 'bg-green-500' : 'bg-blue-500'
        }`;
        notification.textContent = message;
        notification.style.transform = 'translateX(400px)';
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 10);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(400px)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Quick apply functionality
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('quick-apply') || e.target.closest('.quick-apply')) {
            const jobId = e.target.dataset.jobId || e.target.closest('.quick-apply').dataset.jobId;
            const job = sampleJobs.find(j => j.id === parseInt(jobId));
            
            if (job) {
                showNotification(`Applied to ${job.title} at ${job.company}`, 'success');
                
                // Simulate API call
                setTimeout(() => {
                    // You would typically update the UI here
                    console.log(`Applied to job ${jobId}`);
                }, 1000);
            }
        }
    });

    // Tag filter functionality
    document.querySelectorAll('.tag-filter').forEach(tag => {
        tag.addEventListener('click', (e) => {
            const tagText = e.target.textContent;
            jobSearchInput.value = tagText;
            performSearch();
        });
    });

    // Keyboard shortcuts
    document.addEventListener('keydown', (e) => {
        // Ctrl/Cmd + F to focus search
        if ((e.ctrlKey || e.metaKey) && e.key === 'f') {
            e.preventDefault();
            jobSearchInput.focus();
        }
        
        // Escape to close modal
        if (e.key === 'Escape' && !jobModal.classList.contains('hidden')) {
            jobModal.classList.add('hidden');
        }
    });

    // Add some sample jobs to the container initially
    renderJobs(sampleJobs);
</script>

@endsection