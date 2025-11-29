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
                <h5 class="card-title mb-3">Employee</h5>
                <a href="{{ route('admin.employees.index') }}" 
                  class="btn btn-success">
                  Total Employees Tasks : {{ $totalEmployees }}
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title mb-3">Tasks</h5>
                <a href="{{ route('admin.task.index') }}" 
                  class="btn btn-success">
                  Total Tasks Tasks : {{ $totalTasks }}
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title mb-3">Completed Task</h5>
                <a href="{{ route('admin.task.complete') }}" 
                  class="btn btn-success">
                  Total Completed Tasks : {{ $totalCompletedTasks }}
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title mb-3">Approved Task</h5>
                <a href="{{ route('admin.task.approve') }}" 
                  class="btn btn-success">
                  Total Approved Tasks : {{ $totalApprovedTasks }}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection