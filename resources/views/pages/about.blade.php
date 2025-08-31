@extends('layouts.app')

@section('title', 'About Us - Krisah Montessori School')

@section('content')
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-12">About Krisah Montessori School</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div>
                <h2 class="text-2xl font-semibold mb-4 text-montessori-blue">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    To provide authentic Montessori education that nurtures the natural curiosity and potential of every child, 
                    fostering independence, creativity, and a lifelong love for learning in a culturally rich Ghanaian environment.
                </p>
            </div>
            <div>
                <h2 class="text-2xl font-semibold mb-4 text-montessori-blue">Our Vision</h2>
                <p class="text-gray-600 leading-relaxed">
                    To be the leading Montessori school in the Western Region of Ghana, recognized for excellence in 
                    child-centered education and for developing confident, compassionate, and capable global citizens.
                </p>
            </div>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg mb-16">
            <h2 class="text-2xl font-semibold mb-6 text-montessori-blue">Montessori Philosophy</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                At Krisah Montessori School, we follow the educational philosophy developed by Dr. Maria Montessori, 
                which emphasizes respect for the child's natural development and the importance of hands-on learning.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="text-center">
                    <h3 class="font-semibold mb-2">Child-Centered Learning</h3>
                    <p class="text-sm text-gray-600">Children learn at their own pace through self-directed activities.</p>
                </div>
                <div class="text-center">
                    <h3 class="font-semibold mb-2">Prepared Environment</h3>
                    <p class="text-sm text-gray-600">Carefully designed classrooms that support independent learning.</p>
                </div>
                <div class="text-center">
                    <h3 class="font-semibold mb-2">Mixed Age Groups</h3>
                    <p class="text-sm text-gray-600">Children learn from and teach each other in multi-age classrooms.</p>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <h2 class="text-2xl font-semibold mb-6 text-montessori-blue">Headteacher's Message</h2>
            <div class="max-w-3xl mx-auto">
                <p class="text-gray-600 leading-relaxed italic">
                    "Welcome to Krisah Montessori School. Our commitment is to provide an environment where every child 
                    can discover their unique potential. Through the Montessori method, we guide children to become 
                    independent thinkers, compassionate individuals, and lifelong learners."
                </p>
                <p class="text-montessori-blue font-semibold mt-4">- Headteacher</p>
            </div>
        </div>
    </div>
</div>
@endsection
