@extends('employee.employee-layout.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm p-1 pb-2">
                <div class="card-header text-center bg-success text-white">
                    <h4 class="mb-0">Change Password</h4>
                </div>
                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('change.password') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Current Password</label>
                            <input type="password" name="current-password" class="form-control" placeholder="current password">
                            @error('current-password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="new password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Update Button -->
                        <div class="text-center d-flex flex-row gap-5 align-middle">
                            <button type="submit" class="btn btn-primary w-50">
                                Change Password
                            </button>
                            <a href="{{ route('employee.profile') }}" class="btn btn-secondary w-50">
                                Back
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection