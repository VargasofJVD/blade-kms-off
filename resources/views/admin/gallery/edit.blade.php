@extends('layouts.app')

@section('title', 'Edit Gallery - Admin')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Edit Gallery</h1>
                <a href="{{ route('admin.gallery') }}" class="text-montessori-blue hover:text-montessori-blue-light">← Back to Gallery</a>
            </div>

            <div class="bg-white shadow sm:rounded-lg">
                <form action="{{ route('admin.gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Gallery Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $gallery->title) }}" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                        @error('title')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4"
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">{{ old('description', $gallery->description) }}</textarea>
                        @error('description')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    @if($gallery->images->count() > 0)
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Current Images</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-2">
                            @foreach($gallery->images as $image)
                            <div class="relative">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="Gallery image" class="w-full h-24 object-cover rounded">
                            </div>
                            @endforeach
                        </div>
                        <p class="text-sm text-gray-500 mt-1">{{ $gallery->images->count() }} images in this gallery</p>
                    </div>
                    @endif

                    <div class="mb-4">
                        <label for="images" class="block text-sm font-medium text-gray-700">Add More Images (Optional)</label>
                        <input type="file" name="images[]" id="images" accept="image/*" multiple
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                        <p class="text-sm text-gray-500 mt-1">You can select multiple images. Supported formats: JPG, PNG, GIF (max 2MB each)</p>
                        @error('images.*')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('admin.gallery') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg">
                            Cancel
                        </a>
                        <button type="submit" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-4 py-2 rounded-lg">
                            Update Gallery
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
