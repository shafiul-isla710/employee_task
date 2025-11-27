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
            <h1 class="text-center">Employee Edit</h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('admin.employee.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection