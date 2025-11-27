@extends('admin.admin-layout.master')

@push('styles')
  <style>
    #form-card {
      margin-top: 80px;
    }
  </style>
@endpush

@section('content')
    <div class="container" id="form-card">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-center">Task To Employee</h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('task.assign',$task->id) }}" method="post">
                            @csrf
                             <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="formTitle" class="form-label">Task Name</label>
                                    <input type="text" class="form-control" value="{{ $task->title }}" readonly name="title" id="formTitle">
                                </div>

                                <div class="mb-5 col-md-6">
                                    <label for="formDescription" class="form-label">Assignee Employee</label>
                                    <select class="form-select" name="user_id" aria-label="Default select example">
                                        <option selected>Choose...</option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            
                            <div>
                                <button type="submit" class="btn btn-primary">Assign</button>
                                <a href="{{ route('admin.task.index') }}" class="btn btn-secondary">Back</a>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection