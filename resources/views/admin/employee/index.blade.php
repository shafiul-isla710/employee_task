@extends('admin.admin-layout.master')


@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-center">Employee List</h1>
        <a class="btn btn-success" href="{{ route('admin.employees.create') }}">Add Employee</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped align-middle">
        </div>
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($employees->isNotEmpty())
                @foreach($employees as $employee)
                    <tr>
                        <th>
                            @if($employee->image)
                                <img src="{{ asset('storage/' . $employee->image) }}" style="width: 50px; height: 50px; border-radius: 80%;" alt="">
                            @else
                                <img src="{{ asset('storage/employees/dummy.jpeg') }}" style="width: 50px; height: 50px; border-radius: 80%;" alt="">
                            @endif
                        </th>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>
                            @if($employee->status == 1)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.employees.edit', $employee->id) }}">Edit</a>
                                <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No employees found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection