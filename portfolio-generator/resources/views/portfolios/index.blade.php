@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manage All Portfolios</h2>
        <a href="/create" class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-700">
            + Create New Portfolio
        </a>
    </div>

    @if($portfolios->isEmpty())
        <div class="text-center py-8 text-gray-500">
            No portfolios found yet. Click "+ Create New Portfolio" above to start!
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="p-3">Full Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Template</th>
                        <th class="p-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($portfolios as $portfolio)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3 font-semibold">{{ $portfolio->full_name }}</td>
                            <td class="p-3 text-gray-600">{{ $portfolio->email }}</td>
                            <td class="p-3">
                                <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-xs font-semibold">
                                    Template {{ $portfolio->template_id ?? 1 }}
                                </span>
                            </td>
                            <td class="p-3 text-center space-x-2">
                                <a href="/preview/{{ $portfolio->id }}" class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                                    View
                                </a>
                                <a href="/edit/{{ $portfolio->id }}" class="bg-blue-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                                    Edit
                                </a>
                                <form action="/delete/{{ $portfolio->id }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this portfolio?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection