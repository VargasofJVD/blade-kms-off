@extends('layouts.app')

@section('title', 'Admissions Management - Admin')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Admissions Management</h1>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow overflow-hidden sm:rounded-md">
                <ul class="divide-y divide-gray-200">
                    @forelse($admissions as $admission)
                    <li>
                        <div class="px-4 py-4 flex items-center justify-between">
                            <div class="flex-1">
                                <h3 class="text-lg font-medium text-gray-900">{{ $admission->student_name }}</h3>
                                <p class="text-sm text-gray-500 mt-1">Age: {{ $admission->age }} | Grade: {{ $admission->grade_level }}</p>
                                <p class="text-sm text-gray-500">Parent: {{ $admission->parent_name }} | Phone: {{ $admission->parent_phone }}</p>
                                <p class="text-xs text-gray-400 mt-2">Submitted: {{ $admission->created_at->format('M j, Y') }}</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                    @if($admission->status === 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($admission->status === 'approved') bg-green-100 text-green-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ ucfirst($admission->status) }}
                                </span>
                            </div>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.admissions.show', $admission) }}" class="text-montessori-blue hover:text-montessori-blue-light">View</a>
                                @if($admission->status === 'pending')
                                <form action="{{ route('admin.admissions.status', $admission) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="approved">
                                    <button type="submit" class="text-green-600 hover:text-green-800">Approve</button>
                                </form>
                                <form action="{{ route('admin.admissions.status', $admission) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="rejected">
                                    <button type="submit" class="text-red-600 hover:text-red-800">Reject</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </li>
                    @empty
                    <li class="px-4 py-8 text-center text-gray-500">
                        No admissions found.
                    </li>
                    @endforelse
                </ul>
            </div>

            @if($admissions->hasPages())
                <div class="mt-6">
                    {{ $admissions->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
