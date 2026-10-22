@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mb-6 bg-emerald-50 p-4 rounded-lg flex flex-wrap justify-between items-center gap-4 border border-emerald-200">
    <div class="flex items-center space-x-2">
        <button onclick="copyPortfolioUrl()" class="bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-700 transition">
            📋 Copy Portfolio URL
        </button>
        <span id="copyMessage" class="text-sm text-emerald-800 font-medium hidden">URL Copied!</span>
    </div>
    <div class="flex items-center space-x-3">
        <a href="/create" class="bg-white text-emerald-700 border border-emerald-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-100">
            + Create Another
        </a>
        <a href="/portfolios" class="bg-emerald-800 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-900">
            Manage Portfolios
        </a>
    </div>
</div>

<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg flex overflow-hidden">
    <div class="w-1/3 bg-emerald-600 text-white p-6 flex flex-col items-center">
        @if($portfolio->profile_picture)
            <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" class="w-28 h-28 rounded-full border-4 border-white mb-4 object-cover">
        @endif
        <h2 class="text-xl font-bold text-center">{{ $portfolio->full_name }}</h2>
        <div class="mt-6 text-sm space-y-2">
            <p><strong>Email:</strong> {{ $portfolio->email }}</p>
            <p><strong>Phone:</strong> {{ $portfolio->contact_number }}</p>
            <p><strong>Location:</strong> {{ $portfolio->address }}</p>
        </div>
    </div>
    <div class="w-2/3 p-6 space-y-4">
        <div class="bg-emerald-50 p-4 rounded"><h3 class="font-bold text-emerald-800">About Me</h3><p>{{ $portfolio->about_me }}</p></div>
        <div class="bg-emerald-50 p-4 rounded"><h3 class="font-bold text-emerald-800">Skills</h3><p>{{ $portfolio->skills }}</p></div>
        <div class="bg-emerald-50 p-4 rounded"><h3 class="font-bold text-emerald-800">Projects</h3><p>{{ $portfolio->projects }}</p></div>
        <div class="bg-emerald-50 p-4 rounded"><h3 class="font-bold text-emerald-800">Work Experience</h3><p>{{ $portfolio->work_experience }}</p></div>
    </div>
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