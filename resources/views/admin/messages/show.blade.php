@extends('layouts.admin_dashboard')
@section('admin_content')
    <div class="container mx-auto mt-4 px-4">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200 bg-blue-600 text-white">
                <h4> Message Details</h4>
            </div>

            <div class="p-6">
                <p class="mb-2"><strong>Name:</strong> {{ $message->name }}</p>
                <p class="mb-2">
                    <strong>Email:</strong>
                    <a href="mailto:{{ $message->email }}" id="emailText">{{ $message->email }}</a>
                    <button type="button" class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-gray-700 rounded hover:bg-gray-100 text-sm ml-2"
                        onclick="copyToClipboard('emailText')">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                </p>

                <p class="mb-2">
                    <strong>Phone:</strong>
                    @if ($message->phone)
                        <a href="tel:{{ $message->phone }}" id="phoneText">{{ $message->phone }}</a>
                        <button type="button" class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-gray-700 rounded hover:bg-gray-100 text-sm ml-2"
                            onclick="copyToClipboard('phoneText')">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    @else
                        N/A
                    @endif
                </p>

                {{-- Toast container --}}
                <div id="toast"
                    style="position: fixed; bottom: 30px; right: 30px; background: #333; color: #fff;
            padding: 10px 18px; border-radius: 6px; opacity: 0; transition: opacity 0.3s;">
                </div>


                <p class="mb-2"><strong>Subject:</strong> {{ $message->subject ?? 'N/A' }}</p>
                <p class="mb-2"><strong>Message:</strong></p>
                <div class="border border-gray-300 p-3 rounded bg-gray-50">
                    {{ $message->message }}
                </div>
                <p class="mt-3"><strong>Received At:</strong> {{ $message->created_at->format('d M Y') }}</p>
            </div>

            <div class="px-6 py-4 border-t border-gray-200">
                <a href="{{ route('admin.contact.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
                <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700"
                        onclick="return confirm('Are you sure you want to delete this message?')">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                showToast('Copied: ' + text);
            }).catch(() => {
                showToast('Failed to copy');
            });
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            toast.innerText = message;
            toast.style.opacity = '1';
            setTimeout(() => {
                toast.style.opacity = '0';
            }, 2000);
        }
    </script>
@endsection
