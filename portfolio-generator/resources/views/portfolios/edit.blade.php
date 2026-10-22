@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6">Edit Portfolio Details</h2>
    <form action="/update/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Full Name</label>
            <input type="text" name="full_name" value="{{ $portfolio->full_name }}" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Profile Picture (Leave blank to keep current)</label>
            <input type="file" name="profile_picture" class="w-full border p-2 rounded">
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Email</label>
                <input type="email" name="email" value="{{ $portfolio->email }}" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Contact Number</label>
                <input type="text" name="contact_number" value="{{ $portfolio->contact_number }}" class="w-full border p-2 rounded" required>
            </div>
        </div>
        <div>
            <label class="block font-medium">Address</label>
            <input type="text" name="address" value="{{ $portfolio->address }}" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-medium">About Me</label>
            <textarea name="about_me" class="w-full border p-2 rounded" rows="3" required>{{ $portfolio->about_me }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Educational Background</label>
            <textarea name="educational_background" class="w-full border p-2 rounded" rows="3" required>{{ $portfolio->educational_background }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Skills</label>
            <textarea name="skills" class="w-full border p-2 rounded" rows="2" required>{{ $portfolio->skills }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Projects</label>
            <textarea name="projects" class="w-full border p-2 rounded" rows="3" required>{{ $portfolio->projects }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Work Experience</label>
            <textarea name="work_experience" class="w-full border p-2 rounded" rows="3" required>{{ $portfolio->work_experience }}</textarea>
        </div>
        <div>
            <label class="block font-medium">Social Media / Links</label>
            <input type="text" name="social_links" value="{{ $portfolio->social_links }}" class="w-full border p-2 rounded">
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="w-1/2 bg-indigo-600 text-white py-2 rounded font-semibold hover:bg-indigo-700">Save Changes</button>
            <a href="/portfolios" class="w-1/2 bg-gray-500 text-white text-center py-2 rounded font-semibold hover:bg-gray-600 block">Cancel</a>
        </div>
    </form>
</div>
@endsection