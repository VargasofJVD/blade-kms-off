<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Krisah Montessori School')</title>
    <meta name="description" content="@yield('description', 'Krisah Montessori School - Nurturing curiosity, creativity, and growth in the Western Region of Ghana')">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'montessori-blue': '#4B6A9B',
                        'montessori-blue-light': '#5A7FA6',
                        'montessori-green': '#3C8D66',
                    }
                }
            }
        }
    </script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        body { font-family: 'Inter', sans-serif; }
        .transition-all { transition: all 0.3s ease; }
    </style>
    
    @stack('styles')
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-montessori-blue">Krisah Montessori</h1>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-montessori-blue transition-all">About</a>
                    <a href="{{ route('academics') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Academics</a>
                    <a href="{{ route('admissions') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Admissions</a>
                    <a href="{{ route('news') }}" class="text-gray-700 hover:text-montessori-blue transition-all">News</a>
                    <a href="{{ route('events') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Events</a>
                    <a href="{{ route('gallery') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Gallery</a>
                    <a href="{{ route('testimonials') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Testimonials</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-montessori-blue transition-all">Contact</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">About</a>
                <a href="{{ route('academics') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Academics</a>
                <a href="{{ route('admissions') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Admissions</a>
                <a href="{{ route('news') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">News</a>
                <a href="{{ route('events') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Events</a>
                <a href="{{ route('gallery') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Gallery</a>
                <a href="{{ route('testimonials') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Testimonials</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:text-montessori-blue">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-montessori-blue text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Krisah Montessori School</h3>
                    <p class="text-gray-300">Nurturing curiosity, creativity, and growth in the Western Region of Ghana.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-all">About Us</a></li>
                        <li><a href="{{ route('academics') }}" class="text-gray-300 hover:text-white transition-all">Academics</a></li>
                        <li><a href="{{ route('admissions') }}" class="text-gray-300 hover:text-white transition-all">Admissions</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-all">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>📍 Western Region, Ghana</li>
                        <li>📞 +233 XX XXX XXXX</li>
                        <li>✉️ info@krisahmontessori.com</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-all">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-all">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-600 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} Krisah Montessori School. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
    
    @stack('scripts')
</body>
</html>
