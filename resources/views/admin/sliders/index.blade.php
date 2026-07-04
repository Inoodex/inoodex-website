@extends('layouts.admin_dashboard')

@section('admin_content')
    <div class="container-fluid py-5">
        <div class="flex items-center justify-between mb-4">
            <h1 class="h3 font-bold text-gray-900">Slider Management</h1>
            <a href="{{ route('admin.sliders.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">
                Add New Slider
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="ml-auto -mx-1 -my-1 bg-transparent text-green-700" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtitle</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($sliders as $slider)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">
                                <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}"
                                    width="100" height="60" class="rounded object-cover">
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ Str::limit($slider->title, 60) }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ Str::limit($slider->subtitle, 50) }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $slider->status ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $slider->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.sliders.show', $slider) }}" class="inline-flex items-center px-3 py-1.5 bg-cyan-500 text-white rounded hover:bg-cyan-600 text-sm">View</a>
                                <a href="{{ route('admin.sliders.edit', $slider) }}"
                                    class="inline-flex items-center px-3 py-1.5 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm mr-2">Edit</a>
                                <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this slider?')"
                                        class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white rounded hover:bg-red-700 text-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-5 text-center text-gray-500 text-sm">
                                No sliders found. Please add a new slider.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $sliders->links() }}
        </div>
    </div>
@endsection
