@extends('layouts.admin_dashboard')
@section('admin_content')
    <div class="container-fluid py-5">
        <div class="flex items-center justify-between mb-4">
            <h1 class="h3 font-bold text-gray-900">Theme Management</h1>
            <a href="{{ route('admin.themes.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">Add New Theme</a>
        </div>

        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($themes as $theme)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $theme->title }}</td>
                            <td class="px-4 py-3">
                                @if ($theme->image)
                                    <img src="{{ asset('storage/' . $theme->image) }}" alt="{{ $theme->title }}"
                                        width="80" height="80" class="rounded object-cover">
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">${{ number_format($theme->price, 2) }}</td>
                            <td class="px-4 py-3">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $theme->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ ucfirst($theme->status) }}
                                </span>
                            </td>

                            <td class="px-4 py-3">
                                <a href="{{ route('admin.themes.show', $theme) }}" class="inline-flex items-center px-3 py-1.5 bg-cyan-500 text-white rounded hover:bg-cyan-600 text-sm">View</a>
                                <a href="{{ route('admin.themes.edit', $theme) }}"
                                    class="inline-flex items-center px-3 py-1.5 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm mr-2">Edit</a>
                                <form action="{{ route('admin.themes.destroy', $theme) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')"
                                        class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $themes->links() }}
        </div>
    </div>
@endsection
