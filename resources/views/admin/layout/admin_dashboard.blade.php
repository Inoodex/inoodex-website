@extends('admin.layout.main')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="flex flex-col flex-root">
        <div class="flex flex-row flex-column-fluid page">
            {{-- Sidebar --}}
            @include('admin.layout.sidebar')

            <div class="flex flex-col flex-1 wrapper" id="kt_wrapper">

                <div class="w-full flex items-stretch justify-between">
                    {{-- Header --}}
                    @include('admin.layout.header_menu_wrapper')
                    @include('admin.layout.topbar')
                </div>

                {{-- Content --}}
                <div class="content flex flex-col flex-column-fluid" id="kt_content">
                    <div class="container">
                        @yield('admin_content')
                    </div>
                </div>

                {{-- Panels --}}
                @include('admin.layout.user_panel')
                @include('admin.layout.quick_panel')
                @include('admin.layout.chat_panel')

                {{-- Footer --}}
                @include('admin.layout.footer')
            </div>
        </div>
    </div>
@endsection
