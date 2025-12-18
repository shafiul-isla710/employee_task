@extends('admin.admin-layout.master')

@section('content')
     <!-- Dashboard Content -->
      <h2 class="mb-3">Welcome to Admin Dashboard</h2>

       <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Total Tasks</h6>
                        <h3 class="fw-bold">{{ $totalTasks }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Employee</h6>
                        <h3 class="fw-bold text-warning">{{ $totalEmployees }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Completed</h6>
                        <h3 class="fw-bold text-success">{{ $totalCompletedTasks }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Approved Task</h6>
                        <h3 class="fw-bold text-success">{{ $totalApprovedTasks }}</h3>
                    </div>
                </div>
            </div>
        </div>

@endsection