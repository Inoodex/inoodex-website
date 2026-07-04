@extends('layouts.admin_dashboard')

@section('admin_content')
    <div class="container-fluid py-4">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200 bg-blue-600 text-white">
                <h1 class="h5 mb-0">Edit Hero Slider</h1>
            </div>
            <div class="p-6">
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('title') is-invalid @enderror"
                            value="{{ old('title', $slider->title) }}" required>
                        @error('title')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="block text-sm font-medium text-gray-700 mb-1">Subtitle <span class="text-danger">*</span></label>
                        <input type="text" name="subtitle" id="subtitle"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('subtitle') is-invalid @enderror"
                            value="{{ old('subtitle', $slider->subtitle) }}" required>
                        @error('subtitle')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="description" id="description" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('description') is-invalid @enderror"
                            rows="4">{{ old('description', $slider->description) }}</textarea>
                        @error('description')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-1">Sort Order</label>
                        <input type="number" name="sort_order" id="sort_order"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('sort_order') is-invalid @enderror"
                            value="{{ old('sort_order', $slider->sort_order) }}" min="0">
                        @error('sort_order')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Current Image</label><br>
                        @if ($slider->image)
                            <img src="{{ asset('storage/' . $slider->image) }}" width="300"
                                class="border border-gray-300 rounded shadow-sm" alt="Current Slider Image">
                        @else
                            <span class="text-gray-500">No image uploaded yet</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Change Image</label>
                        <input type="file" name="image" id="image"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('image') is-invalid @enderror" accept="image/*">
                        @error('image')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select name="status" id="status" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none @error('status') is-invalid @enderror">
                            <option value="1" {{ old('status', $slider->status) == 1 ? 'selected' : '' }}>Active
                            </option>
                            <option value="0" {{ old('status', $slider->status) == 0 ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                        @error('status')
                            <div class="mt-1 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
                    <a href="{{ route('admin.sliders.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 200,
                placeholder: 'Write slider description here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });

    </script>

    <script>
        if (!Promise.allSettled) {
            Promise.allSettled = function(promises) {
                return Promise.all(promises.map(p =>
                    p.then(
                        value => ({
                            status: 'fulfilled',
                            value
                        }),
                        reason => ({
                            status: 'rejected',
                            reason
                        })
                    )
                ));
            };
        }
    </script>
@endpush

@push('styles')
    <style>
        .tox .tox-promotion-button {
            display: none !important;
        }
    </style>
@endpush
