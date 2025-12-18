@extends('employee.employee-layout.master')

@section('content')
     <!-- Summary Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">New Assign Task</h6>
                                <h3 class="fw-bold">{{ $employeeTasks->count() }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Approved</h6>
                                <h3 class="fw-bold text-warning">{{ $approved }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Completed</h6>
                                <h3 class="fw-bold text-success">{{ $completed }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Task Table -->
                <div class="card shadow-sm">
                    <div class="card-header fw-semibold">My Recent Tasks</div>
                    <div class="card-body table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Task Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employeeTasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>
                                            @if($task->status == 'assigned')
                                                <span class="badge bg-secondary">{{ $task->status }}</span>
                                            @elseif($task->status == 'approved')
                                                <span class="badge bg-success">{{ $task->status }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ $task->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ Carbon\Carbon::parse($task->pivot->assigned_at)->format('d M, Y ') }}</td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection
