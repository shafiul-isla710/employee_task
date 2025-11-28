@extends('admin.admin-layout.master')

@section('content')
    < <!-- Dashboard Content -->
      <h2 class="mb-3">Welcome to Admin Dashboard</h2>

      <!-- Example cards -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Employee</h5>
                <p class="badge bg-success">Total Employees : {{ $totalEmployees }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Tasks</h5>
                <p class="badge bg-success">Total Tasks : {{ $totalTasks }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Completed Task</h5>
                <p class="badge bg-success">Total Completed Tasks : {{ $totalCompletedTasks }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection