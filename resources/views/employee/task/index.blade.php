@extends('employee.employee-layout.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="text-center">task List</h1>
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
                {{-- <th scope="col">Assign At</th> --}}
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    {{-- @dd($task->image) --}}
                    
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    
                    <td>
                        @if($task->status == 'assigned')
                            <span class="badge bg-success">
                                {{ $task->status }}
                            </span>
                       @elseif ($task->status == 'completed')
                            <span class="badge bg-info">
                                {{ $task->status }}
                            </span>
                       @endif
                    </td>
                    <td>
                        <div>
                            <a class="btn btn-primary btn-sm" href="{{ route('employee.task.show', $task->id) }}">Show</a>
                            @if($task->status == 'assigned')
                            <a class="btn btn-info btn-sm" href="{{ route('employee.task.complete', $task->id) }}">Complete</a>
                            @elseif ($task->status == 'completed')
                            <a class="btn btn-secondary btn-sm">Completed</a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>  
@endsection
