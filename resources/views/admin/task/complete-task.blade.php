@extends('admin.admin-layout.master')


@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-center">Completed Task List</h1>
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
                <th scope="col">Complete by</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($completedTasks->isNotEmpty())
                @foreach($completedTasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->completed_by }}</td>
                        <td>
                            <span class="badge bg-success">
                                {{ $task->status }}
                            </span>
                        </td>
                        <td>
                            <div>
                                @if($task->status == 'completed')
                                    <a class="btn btn-info btn-sm" href="{{ route('admin.approve',$task->id) }}">Approve</a>
                                @elseif ($task->status == 'approved')
                                    <a class="btn btn-secondary btn-sm">Approved</a>
                                @endif
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