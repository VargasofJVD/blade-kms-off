@extends('layouts.app')

@section('title', 'News - Krisah Montessori School')

@section('content')
<div class="bg-gradient-to-r from-montessori-blue to-montessori-blue-light text-white py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6">School News</h1>
        <p class="text-xl">Stay updated with the latest happenings at Krisah Montessori School.</p>
    </div>
</div>

<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        @if(isset($news) && $news->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($news as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-all">
                    @if($article->image)
                    <div class="aspect-w-16 aspect-h-9">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                    </div>
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $article->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $article->excerpt }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $article->created_at->format('M j, Y') }}</span>
                            <a href="#" class="text-montessori-blue hover:text-montessori-blue-light font-semibold">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-12">
                {{ $news->links() }}
            </div>
        @else
            <div class="text-center py-12">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">No News Articles Yet</h3>
                <p class="text-gray-600">Check back soon for updates from our school community.</p>
            </div>
        @endif
    </div>
</div>
@endsection
