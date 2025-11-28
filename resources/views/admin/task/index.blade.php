@extends('admin.admin-layout.master')


@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-center">task List</h1>
        <a class="btn btn-success" href="{{ route('admin.task.create') }}">Add task</a>
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
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($tasks->isNotEmpty())
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                        <span class="badge bg-success">
                            {{ $task->status }}
                        </span>
                        </td>
                        <td>
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.task.edit', $task->id) }}">Edit</a>
                                <a class="btn btn-info btn-sm" href="{{ route('admin.task.assign', $task->id) }}">Assign</a>
                                <form action="{{ route('admin.task.destroy', $task->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                                </form>
                            </div>
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