@extends('admin.admin-layout.master')

@section('content')
    < <!-- Dashboard Content -->
      <h2>Welcome to Admin Dashboard</h2>
      <p>This is a simple Bootstrap 5 dashboard template with sidebar and navbar.</p>

      <!-- Example cards -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <p class="card-text">Manage all products here.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Categories</h5>
              <p class="card-text">Manage product categories.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              <p class="card-text">Check all orders.</p>
            </div>
          </div>
        </div>
      </div>

@endsection