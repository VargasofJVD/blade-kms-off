@extends('layouts.app')

@section('title', 'Testimonials - Krisah Montessori School')

@section('content')
<div class="bg-gradient-to-r from-montessori-blue to-montessori-blue-light text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">What Parents Say</h1>
        <p class="text-xl">Hear from our community about their experience with Krisah Montessori School.</p>
    </div>
</div>

<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        @if(isset($testimonials) && $testimonials->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-all">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-montessori-green text-white rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">{{ substr($testimonial->name, 0, 1) }}</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">{{ $testimonial->name }}</h4>
                            <p class="text-sm text-gray-600">{{ $testimonial->role }}</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed italic">"{{ $testimonial->content }}"</p>
                    @if($testimonial->is_featured)
                        <div class="mt-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-montessori-green text-white">
                                Featured
                            </span>
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
            
            <div class="mt-12">
                {{ $testimonials->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Testimonials Coming Soon</h3>
                <p class="text-gray-600">We're collecting feedback from our wonderful school community.</p>
            </div>
        @endif
    </div>
</div>
@endsection
