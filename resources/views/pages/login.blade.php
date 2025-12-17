@extends('app')

@push('styles')
    <style>
        #login-section {
            margin-top: 50px;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center" id="login-section">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger w-100 text-center">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h3 class="card-title text-center mb-4">Login</h3>
                        <form action="{{ route('login-store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
