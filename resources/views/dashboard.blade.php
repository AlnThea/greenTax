@extends('layouts.app')

@section('title', 'Dashboard - Green Tax Awareness for Gen Z')

@section('content')
<div class="bg-emerald-700 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">Your Dashboard</h1>
            <p class="text-xl">Track your progress and engage with the Green Tax Awareness community.</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-2">
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h2 class="text-2xl font-bold text-emerald-700 mb-4">Welcome Back!</h2>
                    <p class="text-gray-600 mb-6">Continue your journey to understand green taxation and its impact on Generation Z.</p>
                    
                    <h3 class="text-lg font-bold mb-3">Your Learning Progress</h3>
                    <div class="mb-6">
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium">Overall Completion</span>
                            <span class="text-sm font-medium">45%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-emerald-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    
                    <h3 class="text-lg font-bold mb-3">Continue Learning</h3>
                    <div class="space-y-4">
                        <a href="/basics" class="block p-4 border border-gray-200 rounded-lg hover:bg-emerald-50 transition">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Green Tax Basics</h4>
                                    <p class="text-sm text-gray-600">Learn the fundamentals of environmental taxation</p>
                                </div>
                                <span class="text-emerald-600">75% Complete</span>
                            </div>
                        </a>
                        
                        <a href="/impact" class="block p-4 border border-gray-200 rounded-lg hover:bg-emerald-50 transition">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Impact on Gen Z</h4>
                                    <p class="text-sm text-gray-600">Discover how green taxes affect your future</p>
                                </div>
                                <span class="text-emerald-600">50% Complete</span>
                            </div>
                        </a>
                        
                        <a href="/action" class="block p-4 border border-gray-200 rounded-lg hover:bg-emerald-50 transition">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="font-bold">Taking Action</h4>
                                    <p class="text-sm text-gray-600">Learn how to engage with green tax policies</p>
                                </div>
                                <span class="text-emerald-600">25% Complete</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold text-emerald-700 mb-4">Your Activity</h2>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-bold mb-3">Quiz Results</h3>
                        <div class="space-y-4">
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4 class="font-bold">Green Tax Basics Quiz</h4>
                                        <p class="text-sm text-gray-600">Completed on May 15, 2025</p>
                                    </div>
                                    <span class="bg-emerald-100 text-emerald-800 py-1 px-3 rounded-full font-medium">4/5 Correct</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-bold mb-3">Calculator History</h3>
                        <div class="space-y-4">
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4 class="font-bold">Carbon Tax Calculator</h4>
                                        <p class="text-sm text-gray-600">Last used on May 16, 2025</p>
                                    </div>
                                    <a href="/calculator" class="text-emerald-600 hover:text-emerald-800">View Results</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h2 class="text-xl font-bold text-emerald-700 mb-4">Your Profile</h2>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-emerald-200 rounded-full flex items-center justify-center text-emerald-700 font-bold text-xl mr-4">
                            JD
                        </div>
                        <div>
                            <h3 class="font-bold">Jane Doe</h3>
                            <p class="text-sm text-gray-600">Member since May 2025</p>
                        </div>
                    </div>
                    
                    <div class="space-y-2 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Email:</span>
                            <span>jane.doe@example.com</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Badges:</span>
                            <span>2</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Comments:</span>
                            <span>5</span>
                        </div>
                    </div>
                    
                    <a href="/profile/edit" class="block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-4 rounded-lg transition">
                        Edit Profile
                    </a>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                    <h2 class="text-xl font-bold text-emerald-700 mb-4">Community Updates</h2>
                    <div class="space-y-4">
                        <div class="pb-4 border-b border-gray-200">
                            <h3 class="font-bold">New Carbon Tax Policy Discussion</h3>
                            <p class="text-sm text-gray-600 mb-2">Join the conversation about recent policy changes.</p>
                            <a href="/forum/carbon-tax-policy" class="text-emerald-600 hover:text-emerald-800 text-sm">View Discussion →</a>
                        </div>
                        
                        <div class="pb-4 border-b border-gray-200">
                            <h3 class="font-bold">Green Tax Webinar</h3>
                            <p class="text-sm text-gray-600 mb-2">Register for our upcoming webinar on May 25.</p>
                            <a href="/events/webinar" class="text-emerald-600 hover:text-emerald-800 text-sm">Learn More →</a>
                        </div>
                        
                        <div>
                            <h3 class="font-bold">New Calculator Feature</h3>
                            <p class="text-sm text-gray-600 mb-2">Try our updated transportation calculator with new features.</p>
                            <a href="/calculator/transportation" class="text-emerald-600 hover:text-emerald-800 text-sm">Try It Now →</a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-emerald-50 rounded-lg p-6">
                    <h2 class="text-xl font-bold text-emerald-700 mb-4">Need Help?</h2>
                    <p class="text-gray-600 mb-4">Have questions about green taxation or how to use this website?</p>
                    <a href="/contact" class="block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-2 px-4 rounded-lg transition">
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
