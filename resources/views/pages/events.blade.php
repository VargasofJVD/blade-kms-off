@extends('layouts.app')

@section('title', 'Events - Krisah Montessori School')

@section('content')
<div class="bg-gradient-to-r from-montessori-blue to-montessori-blue-light text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">School Events</h1>
        <p class="text-xl">Join us for exciting events and activities throughout the year.</p>
    </div>
</div>

<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        @if(isset($events) && $events->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($events as $event)
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
                    <div class="mt-3 text-sm">
                        <span class="font-semibold">Time:</span> {{ $event->formatted_time }}
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-12">
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">No Events Scheduled</h3>
                <p class="text-gray-600">Check back soon for upcoming events and activities.</p>
            </div>
        @endif
    </div>
</div>
@endsection
