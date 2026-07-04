@extends('layouts.admin_dashboard')

@section('admin_content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-blue-500 hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1">Portfolio Items</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $portfolioCount ?? 0 }}</p>
                </div>
                <i class="fas fa-briefcase text-2xl opacity-50 text-gray-400"></i>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-green-500 hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-green-600 uppercase tracking-wider mb-1">Products</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $productCount ?? 0 }}</p>
                </div>
                <i class="fas fa-box text-2xl opacity-50 text-gray-400"></i>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-cyan-500 hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-cyan-600 uppercase tracking-wider mb-1">Blog Posts</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $blogCount ?? 0 }}</p>
                </div>
                <i class="fas fa-blog text-2xl opacity-50 text-gray-400"></i>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-yellow-500 hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-yellow-600 uppercase tracking-wider mb-1">Messages</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $messageCount ?? 0 }}</p>
                </div>
                <i class="fas fa-envelope text-2xl opacity-50 text-gray-400"></i>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-red-500 hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-red-600 uppercase tracking-wider mb-1">Team Members</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $teamCount ?? 0 }}</p>
                </div>
                <i class="fas fa-users text-2xl opacity-50 text-gray-400"></i>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-gray-700 hover:-translate-y-1 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">Partners</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $partnerCount ?? 0 }}</p>
                </div>
                <i class="fas fa-handshake text-2xl opacity-50 text-gray-400"></i>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <h6 class="m-0 font-bold text-blue-600">Recent Contact Messages</h6>
            </div>
            <div class="p-6">
                @if ($recentMessages->count())
                    @foreach ($recentMessages as $msg)
                        <div class="border-b border-gray-100 py-2">
                            <strong>{{ $msg->name }}</strong>
                            <small class="text-gray-500 ms-2">{{ $msg->created_at->diffForHumans() }}</small>
                            <p class="mb-0 truncate">{{ $msg->message }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-500 mb-0">No messages yet.</p>
                @endif
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <h6 class="m-0 font-bold text-blue-600">Quick Actions</h6>
            </div>
            <div class="p-6 space-y-3">
                <a href="{{ route('admin.blogs.create') }}" class="block w-full px-4 py-2 bg-blue-600 text-white rounded-lg text-center hover:bg-blue-700 transition">Add New Blog</a>
                <a href="{{ route('admin.portfolios.create') }}" class="block w-full px-4 py-2 bg-green-600 text-white rounded-lg text-center hover:bg-green-700 transition">Add New Portfolio</a>
                <a href="{{ route('admin.products.create') }}" class="block w-full px-4 py-2 bg-yellow-500 text-white rounded-lg text-center hover:bg-yellow-600 transition">Add New Product</a>
                <a href="{{ route('admin.contact.index') }}" class="block w-full px-4 py-2 bg-cyan-500 text-white rounded-lg text-center hover:bg-cyan-600 transition">View Messages</a>
            </div>
        </div>
    </div>
@endsection
