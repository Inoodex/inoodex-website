@extends('layouts.admin_dashboard')
@section('admin_content')
    <div class="container-fluid py-5">
        <div class="flex items-center justify-between mb-4">
            <h1 class="h3 font-bold text-gray-900">Theme Details</h1>
            <a href="{{ route('admin.themes.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">Back to Theme List</a>
        </div>

        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm p-8 max-w-4xl mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="md:w-1/2 w-full mb-4 md:mb-0 px-4">
                    <img src="{{ asset('storage/' . $theme->image) }}" alt="{{ $theme->title }}" class="max-w-full h-auto rounded-lg">
                </div>
                <div class="md:w-1/2 w-full px-4">
                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2">Title</div>
                        <div class="text-base text-gray-600 mb-6">{{ $theme->title }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2">Description</div>
                        <div class="text-base text-gray-600 mb-6">{!! $theme->description !!}</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2">Category</div>
                        <div class="text-base text-gray-600 mb-6">{{ $theme->category->name ?? 'N/A' }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2">Price</div>
                        <div class="text-base text-gray-600 mb-6">{{ number_format($theme->price, 2) }}$</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2">Demo URL</div>
                        <div class="text-base text-gray-600 mb-6">
                            @if ($theme->demo_url)
                                <a href="{{ $theme->demo_url }}" target="_blank" class="text-blue-600 underline">{{ $theme->demo_url }}</a>
                            @else
                                N/A
                            @endif
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2">Status</div>
                        <div class="text-base text-gray-600 mb-6">{{ ucfirst($theme->status) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
