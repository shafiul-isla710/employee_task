@extends('employee.employee-layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ $task->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ $task->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Assign At</th>
                                        <td>{{ Carbon\Carbon::parse($task->pivot->assigned_at)->format('d M, Y h:i A') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            <span class="badge bg-success">{{ $task->status }}</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('employee.tasks') }}" class="btn btn-secondary">Back to Task List</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
@endsection
