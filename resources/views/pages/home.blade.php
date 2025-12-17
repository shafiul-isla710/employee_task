@extends('app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h1 class="fw-bold">Manage Your Tasks Easily</h1>
                    <p class="text-muted mt-3">Organize, track, and complete your daily tasks efficiently with our simple task manager.</p>
                    <a href="{{ url('/login') }}" class="btn btn-primary btn-lg mt-3">Get Started</a>
                </div>
                {{-- <div class="col-md-6 text-center mt-4 mt-md-0">
                    <img src="https://via.placeholder.com/500x300" class="img-fluid" alt="Task Manager">
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
            <h2 class="fw-bold">Key Features</h2>
            <p class="text-muted">Everything you need to stay productive</p>
            </div>
            <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">Task Creation</h5>
                    <p class="card-text">Create and manage tasks with deadlines and priorities.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">Progress Tracking</h5>
                    <p class="card-text">Track task progress and stay updated on your work.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title">Team Collaboration</h5>
                    <p class="card-text">Work together with your team and share tasks easily.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection