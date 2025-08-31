@extends('layouts.app')

@section('title', 'Edit Student - Admin')

@section('content')
<div class="bg-white min-h-screen">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Edit Student</h1>
                <a href="{{ route('admin.students') }}" class="text-montessori-blue hover:text-montessori-blue-light">← Back to Students</a>
            </div>

            <div class="bg-white shadow sm:rounded-lg">
                <form action="{{ route('admin.students.update', $student) }}" method="POST" class="p-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Student Information -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Student Information</h3>
                            
                            <div class="mb-4">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $student->first_name) }}" required
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('first_name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $student->last_name) }}" required
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('last_name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth) }}" required
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('date_of_birth')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                                <select name="gender" id="gender" required
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                                @error('gender')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="class" class="block text-sm font-medium text-gray-700">Class/Grade</label>
                                <input type="text" name="class" id="class" value="{{ old('class', $student->class) }}" required
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('class')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <textarea name="address" id="address" rows="3" required
                                          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">{{ old('address', $student->address) }}</textarea>
                                @error('address')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Guardian Information -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Guardian Information</h3>
                            
                            <div class="mb-4">
                                <label for="guardian_name" class="block text-sm font-medium text-gray-700">Guardian Name</label>
                                <input type="text" name="guardian_name" id="guardian_name" value="{{ old('guardian_name', $student->guardian->name ?? '') }}" required
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('guardian_name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="guardian_phone" class="block text-sm font-medium text-gray-700">Guardian Phone</label>
                                <input type="tel" name="guardian_phone" id="guardian_phone" value="{{ old('guardian_phone', $student->guardian->phone ?? '') }}" required
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('guardian_phone')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="guardian_email" class="block text-sm font-medium text-gray-700">Guardian Email (Optional)</label>
                                <input type="email" name="guardian_email" id="guardian_email" value="{{ old('guardian_email', $student->guardian->email ?? '') }}"
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-montessori-blue focus:border-montessori-blue">
                                @error('guardian_email')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 mt-6">
                        <a href="{{ route('admin.students') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg">
                            Cancel
                        </a>
                        <button type="submit" class="bg-montessori-blue hover:bg-montessori-blue-light text-white px-4 py-2 rounded-lg">
                            Update Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
