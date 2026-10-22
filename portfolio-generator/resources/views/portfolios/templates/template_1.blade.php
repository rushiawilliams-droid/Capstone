@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mb-6 bg-indigo-50 p-4 rounded-lg flex flex-wrap justify-between items-center gap-4 shadow-sm border border-indigo-100">
    <div class="flex items-center space-x-2">
        <button onclick="copyPortfolioUrl()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition">
            📋 Copy Portfolio URL
        </button>
        <span id="copyMessage" class="text-sm text-green-600 font-medium hidden">URL Copied!</span>
    </div>
    <div class="flex items-center space-x-3">
        <a href="/create" class="bg-white text-indigo-600 border border-indigo-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-50">
            + Create Another
        </a>
        <a href="/portfolios" class="bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-800">
            Manage Portfolios
        </a>
    </div>
</div>

<div class="max-w-3xl mx-auto bg-white p-8 border rounded-lg shadow-sm">
    <div class="text-center border-b pb-4 mb-4">
        @if($portfolio->profile_picture)
            <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" class="w-24 h-24 rounded-full mx-auto mb-2 object-cover">
        @endif
        <h1 class="text-3xl font-bold">{{ $portfolio->full_name }}</h1>
        <p class="text-gray-600">{{ $portfolio->email }} | {{ $portfolio->contact_number }} | {{ $portfolio->address }}</p>
    </div>
    <section class="mb-4"><h2 class="font-bold border-b text-lg mb-1">About Me</h2><p>{{ $portfolio->about_me }}</p></section>
    <section class="mb-4"><h2 class="font-bold border-b text-lg mb-1">Education</h2><p>{{ $portfolio->educational_background }}</p></section>
    <section class="mb-4"><h2 class="font-bold border-b text-lg mb-1">Skills</h2><p>{{ $portfolio->skills }}</p></section>
    <section class="mb-4"><h2 class="font-bold border-b text-lg mb-1">Projects</h2><p>{{ $portfolio->projects }}</p></section>
    <section class="mb-4"><h2 class="font-bold border-b text-lg mb-1">Experience</h2><p>{{ $portfolio->work_experience }}</p></section>
</div>

<script>
function copyPortfolioUrl() {
    navigator.clipboard.writeText(window.location.href);
    const msg = document.getElementById('copyMessage');
    msg.classList.remove('hidden');
    setTimeout(() => msg.classList.add('hidden'), 3000);
}
</script>
@endsection