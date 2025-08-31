@extends('layouts.app')

@section('title', 'Home - Krisah Montessori School')
@section('description', 'Welcome to Krisah Montessori School - Nurturing curiosity, creativity, and growth in the Western Region of Ghana')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-montessori-blue to-montessori-blue-light text-white">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome to Krisah Montessori School</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Nurturing curiosity, creativity, and growth in the Western Region of Ghana through authentic Montessori education.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('admissions') }}" class="bg-montessori-green hover:bg-green-700 text-white px-8 py-3 rounded-lg font-semibold transition-all transform hover:scale-105">
                    Enroll Now
                </a>
                <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-montessori-blue text-white px-8 py-3 rounded-lg font-semibold transition-all">
                    Visit Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- School Values Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Montessori Values</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">We believe in fostering a love for learning through hands-on experiences and child-led discovery.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center p-6 rounded-lg bg-gray-50 hover:bg-montessori-blue hover:text-white transition-all">
                <div class="w-16 h-16 bg-montessori-blue text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Learning</h3>
                <p class="text-sm">Child-centered education that respects individual learning styles and paces.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg bg-gray-50 hover:bg-montessori-blue hover:text-white transition-all">
                <div class="w-16 h-16 bg-montessori-blue text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Curiosity</h3>
                <p class="text-sm">Encouraging natural curiosity and exploration of the world around us.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg bg-gray-50 hover:bg-montessori-blue hover:text-white transition-all">
                <div class="w-16 h-16 bg-montessori-blue text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Creativity</h3>
                <p class="text-sm">Fostering creative thinking and artistic expression in all areas of learning.</p>
            </div>
            
            <div class="text-center p-6 rounded-lg bg-gray-50 hover:bg-montessori-blue hover:text-white transition-all">
                <div class="w-16 h-16 bg-montessori-blue text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Growth</h3>
                <p class="text-sm">Supporting holistic development - academic, social, emotional, and physical.</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
@if(isset($latestNews) && $latestNews->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Latest News</h2>
            <p class="text-lg text-gray-600">Stay updated with the latest happenings at Krisah Montessori School.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($latestNews as $news)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $news->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $news->excerpt }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">{{ $news->published_at->format('M j, Y') }}</span>
                        <a href="{{ route('news') }}" class="text-montessori-blue hover:text-montessori-blue-light font-semibold">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('news') }}" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-6 py-3 rounded-lg font-semibold transition-all">
                View All News
            </a>
        </div>
    </div>
</section>
@endif

<!-- Upcoming Events Section -->
@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Upcoming Events</h2>
            <p class="text-lg text-gray-600">Join us for exciting events and activities throughout the year.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($upcomingEvents as $event)
            <div class="bg-gray-50 rounded-lg p-6 hover:bg-montessori-blue hover:text-white transition-all">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-montessori-green text-white rounded-full flex items-center justify-center mr-4">
                        <span class="text-sm font-bold">{{ $event->date->format('M') }}</span>
                    </div>
                    <div>
                        <p class="font-semibold">{{ $event->date->format('j') }}</p>
                        <p class="text-sm">{{ $event->date->format('Y') }}</p>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $event->title }}</h3>
                <p class="text-sm mb-4">{{ $event->description }}</p>
                <div class="flex items-center text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    {{ $event->venue }}
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('events') }}" class="bg-montessori-green hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold transition-all">
                View All Events
            </a>
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if(isset($testimonials) && $testimonials->count() > 0)
<section class="py-16 bg-montessori-blue text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">What Parents Say</h2>
            <p class="text-xl">Hear from our community about their experience with Krisah Montessori School.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white bg-opacity-10 rounded-lg p-6 backdrop-blur-sm">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-montessori-green rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">{{ substr($testimonial->name, 0, 1) }}</span>
                    </div>
                    <div>
                        <h4 class="font-semibold">{{ $testimonial->name }}</h4>
                        <p class="text-sm opacity-75">{{ $testimonial->role }}</p>
                    </div>
                </div>
                <p class="text-sm leading-relaxed">"{{ $testimonial->content }}"</p>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('testimonials') }}" class="bg-white text-montessori-blue hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition-all">
                Read More Testimonials
            </a>
        </div>
    </div>
</section>
@endif

<!-- Call to Action Section -->
<section class="py-16 bg-montessori-green text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Join Our Community?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Give your child the gift of authentic Montessori education. Contact us today to learn more about enrollment.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('admissions') }}" class="bg-white text-montessori-green hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold transition-all">
                Apply Now
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white hover:bg-white hover:text-montessori-green text-white px-8 py-3 rounded-lg font-semibold transition-all">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection
