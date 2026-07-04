@extends('layouts.admin_dashboard')

@section('admin_content')
    <div class="container-fluid py-5">
        <div class="flex items-center justify-between mb-4">
            <h1 class="h3 font-bold text-gray-900">Hero Slider Details</h1>
            <a href="{{ route('admin.sliders.index') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">
                Back to Slider List
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="ml-auto -mx-1 -my-1 bg-transparent text-green-700" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm p-8 max-w-4xl mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="md:w-1/2 w-full mb-4 md:mb-0 px-4">
                    <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" class="max-w-full h-auto rounded-lg shadow-lg">
                </div>

                <div class="md:w-1/2 w-full px-4">
                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Subtitle</div>
                        <div class="text-lg text-gray-700 mb-6 leading-relaxed">{{ $slider->subtitle ?: '<em class="text-gray-500">No subtitle</em>' }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Title</div>
                        <div class="text-lg text-gray-700 mb-6 font-bold text-2xl">{{ $slider->title }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Description</div>
                        <div class="text-lg text-gray-700 mb-6 leading-relaxed">
                            {!! $slider->description !!}
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Status</div>
                        <div class="text-lg text-gray-700 mb-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-semibold {{ $slider->status ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $slider->status ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Sort Order</div>
                        <div class="text-lg text-gray-700 mb-6">{{ $slider->sort_order ?? 0 }}</div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Created At</div>
                        <div class="text-lg text-gray-700 mb-6 text-gray-500">
                            {{ $slider->created_at->format('d M Y, h:i A') }}
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="font-semibold text-gray-800 uppercase text-sm mb-2 tracking-wide">Last Updated</div>
                        <div class="text-lg text-gray-700 mb-6 text-gray-500">
                            {{ $slider->updated_at->format('d M Y, h:i A') }}
                        </div>
                    </div>

                    <div class="mt-4">
                        {{-- <a href="{{ route('admin.sliders.edit', $slider) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 mr-2">
                            Edit Slider
                        </a> --}}
                        <a href="{{ route('admin.sliders.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
