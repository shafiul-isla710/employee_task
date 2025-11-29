@extends('employee.employee-layout.master')

@push('styles')

<style>
    #myModal{
        margin-top: 100px;
    }
</style>
    
@endpush

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">task List</h1>
        </div>
        @if (session('success'))
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
                    <th scope="col">Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        {{-- @dd($task->image) --}}

                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>

                        <td>
                            @if ($task->status == 'assigned')
                                <span class="badge bg-success">
                                    {{ $task->status }}
                                </span>
                            @else
                                <span class="badge bg-info">
                                    {{ $task->status }}
                                </span>
                            @endif
                        </td>
                        <td>
                            <div>
                                <a class="btn btn-primary btn-sm"
                                    href="{{ route('employee.task.show', $task->id) }}">Show</a>
                                @if ($task->status == 'assigned')
                                    <a class="btn btn-info btn-sm"
                                        href="{{ route('employee.task.complete', $task->id) }}">Complete</a>
                                @else
                                    <a class="btn btn-secondary btn-sm">Completed</a>
                                @endif
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Comment
                            </button>
                        </td>
                    </tr>
                    {{-- Modal --}}
                    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Comments</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('comment.store', $task->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="comment" class="col-form-label">Message:</label>
                                            <textarea class="form-control" name="comment" id="comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Comments</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('comment.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="comment" class="col-form-label">Message:</label>
                            <textarea class="form-control" name="comment" id="comment"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection

@push('scripts')
@endpush
