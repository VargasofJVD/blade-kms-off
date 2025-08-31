@extends('layouts.app')

@section('title', 'Create Event - Admin')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Create Event</h1>
                <a href="{{ route('admin.events') }}" class="text-montessori-blue hover:text-montessori-blue-light">← Back to Events</a>
            </div>

            <div class="bg-white shadow sm:rounded-lg">
                <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Event Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                        @error('title')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="6" required
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700">Event Date</label>
                            <input type="date" name="date" id="date" value="{{ old('date') }}" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                            @error('date')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="time" class="block text-sm font-medium text-gray-700">Event Time</label>
                            <input type="time" name="time" id="time" value="{{ old('time') }}" required
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                            @error('time')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="venue" class="block text-sm font-medium text-gray-700">Venue/Location</label>
                        <input type="text" name="venue" id="venue" value="{{ old('venue') }}" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                        @error('venue')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Event Image (Optional)</label>
                        <input type="file" name="image" id="image" accept="image/*"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                        <p class="text-sm text-gray-500 mt-1">Supported formats: JPG, PNG, GIF (max 2MB)</p>
                        @error('image')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.events') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg">
                            Cancel
                        </a>
                        <button type="submit" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-4 py-2 rounded-lg">
                            Create Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
