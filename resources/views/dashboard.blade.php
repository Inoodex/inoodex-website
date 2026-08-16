@extends('admin.layout.admin_dashboard')

@section('title', 'Dashboard')

@section('admin_content')
    <div class="card card-custom gutter-b">
        <div class="card-body">
            <h3 class="card-title font-weight-bolder text-dark">Welcome Back, {{ auth()->user()->name ?? 'User' }}!</h3>
            <p class="text-muted mb-4">You are logged into the Inoodex Admin Panel.</p>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary font-weight-bolder">
                Go to Main Dashboard
            </a>
        </div>
    </div>
@endsection
