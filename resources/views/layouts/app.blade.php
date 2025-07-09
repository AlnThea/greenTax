<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Green Tax Awareness for Gen Z')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <header class="bg-emerald-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <a href="/" class="text-2xl font-bold">Green Tax Awareness</a>
                <span class="ml-2 bg-emerald-800 px-2 py-1 rounded-md text-xs">For Gen Z</span>
            </div>
            <nav>
                <ul class="flex flex-wrap gap-6">
                    <li><a href="/" class="hover:text-emerald-200 transition">Home</a></li>
                    <li><a href="/basics" class="hover:text-emerald-200 transition">Basics</a></li>
                    <li><a href="/impact" class="hover:text-emerald-200 transition">Impact</a></li>
                    <li><a href="/action" class="hover:text-emerald-200 transition">Take Action</a></li>
                    <li><a href="/quiz" class="hover:text-emerald-200 transition">Quiz</a></li>
                    <li><a href="/calculator" class="hover:text-emerald-200 transition">Calculator</a></li>
                    @auth
                        <li><a href="/dashboard" class="bg-emerald-700 hover:bg-emerald-800 px-3 py-1 rounded-md transition">Dashboard</a></li>
                    @else
                        <li><a href="/login" class="bg-emerald-700 hover:bg-emerald-800 px-3 py-1 rounded-md transition">Login</a></li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Green Tax Awareness</h3>
                    <p class="text-gray-300">Empowering Generation Z with knowledge about environmental taxation and sustainable economic practices.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white transition">Home</a></li>
                        <li><a href="/basics" class="text-gray-300 hover:text-white transition">Green Tax Basics</a></li>
                        <li><a href="/impact" class="text-gray-300 hover:text-white transition">Impact on Gen Z</a></li>
                        <li><a href="/action" class="text-gray-300 hover:text-white transition">Take Action</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Connect</h3>
                    <ul class="space-y-2">
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Contact Us</a></li>
                        <li><a href="/about" class="text-gray-300 hover:text-white transition">About This Project</a></li>
                        <li><a href="/resources" class="text-gray-300 hover:text-white transition">Additional Resources</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Green Tax Awareness Project. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
