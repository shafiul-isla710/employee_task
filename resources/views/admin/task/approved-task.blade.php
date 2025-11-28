@extends('admin.admin-layout.master')


@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-center">Approved Task List</h1>
    </div>
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @if($approvedTasks->isNotEmpty())
                @foreach($approvedTasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <span class="badge bg-success">
                                {{ $task->status }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">No tasks found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection