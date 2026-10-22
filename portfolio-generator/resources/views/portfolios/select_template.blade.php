@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-6 text-center">Choose 1 of 3 Templates</h2>
    <form action="/update-template/{{ $portfolio->id }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Template 1 -->
            <label class="border p-4 rounded-lg bg-white shadow cursor-pointer block hover:border-indigo-600">
                <input type="radio" name="template_id" value="1" class="mb-2" checked>
                <h3 class="font-bold text-lg">Template 1: Simple</h3>
                <p class="text-sm text-gray-500">Clean and professional layout.</p>
            </label>
            <!-- Template 2 -->
            <label class="border p-4 rounded-lg bg-white shadow cursor-pointer block hover:border-indigo-600">
                <input type="radio" name="template_id" value="2" class="mb-2">
                <h3 class="font-bold text-lg">Template 2: Modern</h3>
                <p class="text-sm text-gray-500">Card-based modern layout.</p>
            </label>
            <!-- Template 3 -->
            <label class="border p-4 rounded-lg bg-white shadow cursor-pointer block hover:border-indigo-600">
                <input type="radio" name="template_id" value="3" class="mb-2">
                <h3 class="font-bold text-lg">Template 3: Creative</h3>
                <p class="text-sm text-gray-500">Bold sidebar and visual contrast.</p>
            </label>
        </div>
        <button type="submit" class="mt-6 w-full bg-indigo-600 text-white py-2 rounded font-semibold hover:bg-indigo-700">Generate Portfolio</button>
    </form>
</div>
@endsection