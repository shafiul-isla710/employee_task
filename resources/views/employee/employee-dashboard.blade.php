@extends('employee.employee-layout.master')

@section('content')
     <!-- Summary Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Total Tasks</h6>
                                <h3 class="fw-bold">24</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Pending Tasks</h6>
                                <h3 class="fw-bold text-warning">8</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                <h6 class="text-muted">Completed</h6>
                                <h3 class="fw-bold text-success">16</h3>
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
                                    <th>Task</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Prepare Monthly Report</td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>25 Dec 2025</td>
                                </tr>
                                <tr>
                                    <td>Client Follow-up</td>
                                    <td><span class="badge bg-primary">Medium</span></td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>18 Dec 2025</td>
                                </tr>
                                <tr>
                                    <td>Update Task Board</td>
                                    <td><span class="badge bg-secondary">Low</span></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>28 Dec 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection
