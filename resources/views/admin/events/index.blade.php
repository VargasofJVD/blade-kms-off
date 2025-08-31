@extends('layouts.app')

@section('title', 'Events Management - Admin')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Events Management</h1>
                <a href="{{ route('admin.events.create') }}" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-4 py-2 rounded-lg">
                    Add Event
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    @forelse($events as $event)
                    <li>
                        <div class="px-4 py-4 flex items-center justify-between">
                            <div class="flex-1">
                                <h3 class="text-lg font-medium text-gray-900">{{ $event->title }}</h3>
                                <p class="text-sm text-gray-500 mt-1">{{ Str::limit($event->description, 100) }}</p>
                                <p class="text-xs text-gray-400 mt-2">Date: {{ $event->date->format('M j, Y') }} | Time: {{ $event->time }}</p>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.events.edit', $event) }}" class="text-montessori-blue hover:text-montessori-blue-light">Edit</a>
                                <form action="{{ route('admin.events.delete', $event) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this event?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    @empty
                    <li class="px-4 py-8 text-center text-gray-500">
                        No events found. <a href="{{ route('admin.events.create') }}" class="text-montessori-blue hover:text-montessori-blue-light">Create your first event</a>
                    </li>
                    @endforelse
                </ul>
            </div>

            @if($events->hasPages())
                <div class="mt-6">
                    {{ $events->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
