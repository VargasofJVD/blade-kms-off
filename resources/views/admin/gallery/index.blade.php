@extends('layouts.app')

@section('title', 'Gallery Management - Admin')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Gallery Management</h1>
                <a href="{{ route('admin.gallery.create') }}" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-4 py-2 rounded-lg">
                    Add Gallery
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($galleries as $gallery)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        @if($gallery->coverImage)
                            <img src="{{ $gallery->coverImage->image_url }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $gallery->title }}</h3>
                        <p class="text-gray-600 text-sm mb-2">{{ $gallery->description }}</p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>{{ $gallery->category }}</span>
                            <span>{{ $gallery->images->count() }} photos</span>
                        </div>
                        <div class="mt-3 flex space-x-2">
                            <a href="{{ route('admin.gallery.edit', $gallery) }}" class="text-montessori-blue hover:text-montessori-blue-light text-sm">Edit</a>
                            <form action="{{ route('admin.gallery.delete', $gallery) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this gallery?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">No galleries found. <a href="{{ route('admin.gallery.create') }}" class="text-montessori-blue hover:text-montessori-blue-light">Create your first gallery</a></p>
                </div>
                @endforelse
            </div>

            @if($galleries->hasPages())
                <div class="mt-6">
                    {{ $galleries->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
