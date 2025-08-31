@extends('layouts.app')

@section('title', 'Gallery - Krisah Montessori School')

@section('content')
<div class="bg-gradient-to-r from-montessori-blue to-montessori-blue-light text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">School Gallery</h1>
        <p class="text-xl">Explore moments from our school community and activities.</p>
    </div>
</div>

<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        @if(isset($galleries) && $galleries->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($galleries as $gallery)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200">
                        @if($gallery->cover_image)
                            <img src="{{ asset('storage/' . $gallery->cover_image->path) }}" alt="{{ $gallery->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $gallery->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $gallery->description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $gallery->category }}</span>
                            <span class="text-sm text-gray-500">{{ $gallery->images->count() }} photos</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-12">
                {{ $galleries->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Gallery Coming Soon</h3>
                <p class="text-gray-600">We're preparing to share wonderful moments from our school community.</p>
            </div>
        @endif
    </div>
</div>
@endsection
