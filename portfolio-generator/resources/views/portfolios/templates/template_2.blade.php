@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mb-6 bg-slate-800 p-4 rounded-lg flex flex-wrap justify-between items-center gap-4 text-white">
    <div class="flex items-center space-x-2">
        <button onclick="copyPortfolioUrl()" class="bg-indigo-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-600 transition">
            📋 Copy Portfolio URL
        </button>
        <span id="copyMessage" class="text-sm text-emerald-400 font-medium hidden">URL Copied!</span>
    </div>
    <div class="flex items-center space-x-3">
        <a href="/create" class="bg-slate-700 text-white border border-slate-500 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-slate-600">
            + Create Another
        </a>
        <a href="/portfolios" class="bg-slate-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-slate-500">
            Manage Portfolios
        </a>
    </div>
</div>

<div class="max-w-4xl mx-auto bg-slate-900 text-white p-8 rounded-xl shadow-xl">
    <div class="flex items-center space-x-6 mb-8 border-b border-slate-700 pb-6">
        @if($portfolio->profile_picture)
            <img src="{{ asset('storage/' . $portfolio->profile_picture) }}" class="w-32 h-32 rounded-lg object-cover">
        @endif
        <div>
            <h1 class="text-4xl font-extrabold text-indigo-400">{{ $portfolio->full_name }}</h1>
            <p class="text-slate-300 mt-1">{{ $portfolio->email }} • {{ $portfolio->contact_number }}</p>
            <p class="text-slate-400 text-sm">{{ $portfolio->address }}</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-slate-800 p-4 rounded-lg"><h2 class="font-bold text-indigo-400 mb-2">About</h2><p>{{ $portfolio->about_me }}</p></div>
        <div class="bg-slate-800 p-4 rounded-lg"><h2 class="font-bold text-indigo-400 mb-2">Skills</h2><p>{{ $portfolio->skills }}</p></div>
        <div class="bg-slate-800 p-4 rounded-lg"><h2 class="font-bold text-indigo-400 mb-2">Projects</h2><p>{{ $portfolio->projects }}</p></div>
        <div class="bg-slate-800 p-4 rounded-lg"><h2 class="font-bold text-indigo-400 mb-2">Experience</h2><p>{{ $portfolio->work_experience }}</p></div>
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