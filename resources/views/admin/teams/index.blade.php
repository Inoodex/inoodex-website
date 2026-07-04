@extends('layouts.admin_dashboard')
@section('admin_content')
    <div class="container-fluid py-5">
        <div class="flex items-center justify-between mb-4">
            <h1 class="h3 font-bold text-gray-900">Team Management</h1>
            <a href="{{ route('admin.teams.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">Add Team Member</a>
        </div>

        <div class="p-6">
            @if (session('success'))
                <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200 bg-white rounded-lg shadow-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bio</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($teams as $team)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $team->id }}</td>
                                <td class="px-4 py-3">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->title }}"
                                        width="80" class="rounded">
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $team->name }}</td>
                                <td class="px-4 py-3 text-sm text-gray-700">{{ $team->position }}</td>
                                <td class="px-4 py-3 text-sm text-gray-700">{!! Str::limit($team->bio, 50) !!}</td>
                                <td class="px-4 py-3">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $team->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                        {{ $team->status === 'active' ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('admin.teams.edit', $team->id) }}"
                                        class="inline-flex items-center px-3 py-1.5 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">Edit</a>
                                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-600 text-white rounded hover:bg-red-700 text-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-3 text-center text-sm text-gray-500">No team members found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end mt-4">
                {{ $teams->links() }}
            </div>
        </div>
    </div>
@endsection
