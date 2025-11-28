@extends('employee.employee-layout.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm p-1 pb-2">
                <div class="card-header text-center bg-success text-white">
                    <h4 class="mb-0">Change Password</h4>
                </div>

                <div class="card-body">
                    <form>
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Old Password</label>
                            <input type="password" class="form-control" placeholder="old password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" placeholder="new password">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="confirm password">
                        </div>

                        <!-- Update Button -->
                        <div class="text-center d-flex flex-row gap-5 align-middle">
                            <button type="submit" class="btn btn-primary w-50">
                                Update Profile
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