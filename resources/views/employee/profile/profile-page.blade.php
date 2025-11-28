@extends('employee.employee-layout.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm p-1 pb-2">
                <div class="card-header text-center bg-success text-white">
                    <h4 class="mb-0">Employee Profile</h4>
                </div>
                @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body">

                    <!-- Profile Image -->
                    <div class="text-center mb-3">
                            @if($employee->image)
                                <img src="{{ asset('storage/' . $employee->image) }}" style="width: 80px; height: 80px; border-radius: 90%;" alt="">
                            @else
                                <img src="{{ asset('storage/employees/dummy.jpeg') }}" style="width: 50px; height: 50px; border-radius: 80%;" alt="">
                            @endif
                    </div>

                    <form action="{{ route('employee.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">{{ $employee->Email }}</label>
                            <input type="text" name="email" class="form-control" value="{{ $employee->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Profile Image Upload -->
                        <div class="mb-3">
                            <label class="form-label">Upload New Image</label>
                            <input class="form-control" type="file" name="image" id="formImage" accept="image/*">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Update Button -->
                        <div class="text-center d-flex flex-row gap-5 align-middle">
                            <button type="submit" class="btn btn-primary w-50">
                                Update Profile
                            </button>
                            <a href="{{ route('reset.password.page') }}" class="btn btn-secondary w-50">
                                Change Password
                            </a>
                        </div>
                    </form>

                    {{-- <div class="card-header text-center bg-success text-white">
                        <h4 class="mb-0">Change Password</h4>
                    </div>
                    <form>
                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label">Old Password</label>
                            <input type="password" class="form-control" value="12345678">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" value="12345678">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" value="12345678">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-50">
                                Change Password
                            </button>
                        </div>
                    </form> --}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection