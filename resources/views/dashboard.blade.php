@extends('layouts.main')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="flex flex-col flex-root">
        <div class="flex flex-row flex-column-fluid page">
            @include('layouts.sidebar')

            <div class="flex flex-col flex-1 wrapper" id="kt_wrapper">

                <div class="w-full flex items-stretch justify-between">
                    @include('layouts.header_menu_wrapper')
                    @include('layouts.topbar')
                </div>

                <div class="content flex flex-col flex-column-fluid" id="kt_content">
                    <div class="container">
                        @yield('admin_content')
                    </div>
                </div>

                {{-- Panels --}}
                @include('layouts.user_panel')
                @include('layouts.quick_panel')
                @include('layouts.chat_panel')

                {{-- Footer --}}
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection
