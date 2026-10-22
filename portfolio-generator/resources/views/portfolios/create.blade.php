@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6">Enter Your Portfolio Information</h2>
        <form action="/store" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Full Name</label>
            <input type="text" name="full_name" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-medium">Profile Picture</label>
            <input type="file" name="profile_picture" class="w-full border p-2 rounded">
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Contact Number</label>
                <input type="text" name="contact_number" class="w-full border p-2 rounded" required>
            </div>
        </div>
        <div>
            <label class="block font-medium">Address</label>
            <input type="text" name="address" class="w-full border p-2 rounded" required>
        </div>
        <div>
            <label class="block font-medium">About Me</label>
            <textarea name="about_me" class="w-full border p-2 rounded" rows="3" required></textarea>
        </div>
        <div>
            <label class="block font-medium">Educational Background</label>
            <textarea name="educational_background" class="w-full border p-2 rounded" rows="3" required></textarea>
        </div>
        <div>
            <label class="block font-medium">Skills</label>
            <textarea name="skills" class="w-full border p-2 rounded" rows="2" placeholder="e.g. PHP, Laravel, HTML, CSS" required></textarea>
        </div>
        <div>
            <label class="block font-medium">Projects</label>
            <textarea name="projects" class="w-full border p-2 rounded" rows="3" required></textarea>
        </div>
        <div>
            <label class="block font-medium">Work Experience</label>
            <textarea name="work_experience" class="w-full border p-2 rounded" rows="3" required></textarea>
        </div>
        <div>
            <label class="block font-medium">Social Media / Links</label>
            <input type="text" name="social_links" class="w-full border p-2 rounded">
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded font-semibold hover:bg-indigo-700">Save & Proceed to Templates</button>
    </form>
</div>
@endsection