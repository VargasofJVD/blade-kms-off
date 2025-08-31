@extends('layouts.app')

@section('title', 'Academics - Krisah Montessori School')
@section('description', 'Explore our Montessori curriculum and educational approach at Krisah Montessori School in the Western Region of Ghana')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-montessori-blue to-montessori-blue-light text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">Our Academic Program</h1>
        <p class="text-xl">Discover our comprehensive Montessori curriculum designed to nurture every child's natural potential.</p>
    </div>
</div>

<!-- Montessori Philosophy Section -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Montessori Methodology</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Our curriculum is based on Dr. Maria Montessori's proven educational philosophy, emphasizing hands-on learning, self-directed activity, and collaborative play.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="w-16 h-16 bg-montessori-green text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Child-Centered Learning</h3>
                <p class="text-gray-600">Children learn at their own pace through self-directed activities and exploration.</p>
            </div>
            
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="w-16 h-16 bg-montessori-green text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Prepared Environment</h3>
                <p class="text-gray-600">Carefully designed classrooms that support independent learning and discovery.</p>
            </div>
            
            <div class="text-center p-6 bg-gray-50 rounded-lg">
                <div class="w-16 h-16 bg-montessori-green text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Mixed Age Groups</h3>
                <p class="text-gray-600">Children learn from and teach each other in multi-age classroom environments.</p>
            </div>
        </div>
    </div>
</div>

<!-- Class Categories Section -->
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Class Categories</h2>
            <p class="text-lg text-gray-600">Each level is designed to meet the developmental needs of children at different stages.</p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Preschool -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-montessori-blue text-white p-6">
                    <h3 class="text-2xl font-bold mb-2">Preschool</h3>
                    <p class="text-sm opacity-90">Ages 3-6 years</p>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-4 text-montessori-blue">Learning Areas:</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Practical Life Skills
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Sensorial Development
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Language Development
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Mathematics
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Cultural Studies
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('admissions') }}" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Lower Primary -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-montessori-green text-white p-6">
                    <h3 class="text-2xl font-bold mb-2">Lower Primary</h3>
                    <p class="text-sm opacity-90">Ages 6-9 years</p>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-4 text-montessori-green">Learning Areas:</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Advanced Mathematics
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Language Arts & Literature
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Science & Nature
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            History & Geography
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Creative Arts
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('admissions') }}" class="bg-montessori-green hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Upper Primary -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-montessori-blue-light text-white p-6">
                    <h3 class="text-2xl font-bold mb-2">Upper Primary</h3>
                    <p class="text-sm opacity-90">Ages 9-12 years</p>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold text-lg mb-4 text-montessori-blue-light">Learning Areas:</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Advanced Studies
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Research Projects
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Leadership Skills
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Community Service
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-montessori-green mt-1 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Secondary Preparation
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="{{ route('admissions') }}" class="bg-montessori-blue-light hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Curriculum Highlights Section -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Curriculum Highlights</h2>
            <p class="text-lg text-gray-600">Our comprehensive curriculum prepares children for lifelong learning and success.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-montessori-blue">Core Subjects</h3>
                <ul class="space-y-2 text-gray-600">
                    <li>• Mathematics with Montessori materials</li>
                    <li>• Language development and literacy</li>
                    <li>• Science and environmental studies</li>
                    <li>• Cultural studies and geography</li>
                    <li>• History and social studies</li>
                </ul>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-montessori-blue">Enrichment Programs</h3>
                <ul class="space-y-2 text-gray-600">
                    <li>• Art and creative expression</li>
                    <li>• Music and movement</li>
                    <li>• Physical education</li>
                    <li>• Technology integration</li>
                    <li>• Cultural celebrations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Assessment & Progress Section -->
<div class="bg-montessori-blue text-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Assessment & Progress</h2>
            <p class="text-xl">We use continuous assessment methods that respect each child's individual learning journey.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Continuous Observation</h3>
                <p class="text-sm opacity-90">Teachers observe and document each child's progress and interests.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Portfolio Assessment</h3>
                <p class="text-sm opacity-90">Children build portfolios showcasing their work and achievements.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Parent Conferences</h3>
                <p class="text-sm opacity-90">Regular communication with parents about their child's development.</p>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Ready to Learn More?</h2>
        <p class="text-lg text-gray-600 mb-8">Schedule a visit to see our Montessori program in action.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('admissions') }}" class="bg-montessori-green hover:bg-green-700 text-white px-8 py-3 rounded-lg font-semibold transition-all">
                Apply Now
            </a>
            <a href="{{ route('contact') }}" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-8 py-3 rounded-lg font-semibold transition-all">
                Schedule a Visit
            </a>
        </div>
    </div>
</div>
@endsection
