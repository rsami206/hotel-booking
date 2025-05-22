@extends('admin.layout')

@section('main')

        <!-- Analytics Cards -->
        <div class="row mt-4 mb-4 g-4">
            <div class="col-md-3">
              <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted">Total Bookings</h6>
                    <h4>124</h4>
                  </div>
                   <i class="bi bi-calendar-check card-icon"></i>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                   <h6 class="text-muted">Available Rooms</h6>
                    <h4>{{ $availableRooms }}</h4>  
                  </div>
                <i class="bi bi-door-open card-icon"></i>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                     <h6 class="text-muted">Customers</h6>
                    <h4>543</h4>
                  </div>
                   <i class="bi bi-people card-icon"></i>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <h6 class="text-muted">Total Revenue</h6>
                    <h4>326</h4>
                  </div>
                   <i class="bi bi-bar-chart-line card-icon"></i>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Product Table -->
          <div class="card mb-4">
            <div class="card-header bg-white border-bottom">
              <strong>Recent Bookings</strong>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="table-light">
                  <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Room</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ali</td>
                    <td>3</td>
                    <td>20-3-2024</td>
                    <td>845</td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="ri-edit-line"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="ri-delete-bin-line"></i></button>
                    </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
  
          <!-- Orders Table -->
          <div class="card">
            <div class="card-header bg-white border-bottom">
              <strong>Recent Orders</strong>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="table-light">
                  <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1024</td>
                    <td>Sarah Ahmad</td>
                    <td>$49.99</td>
                    <td><span class="badge bg-success">Paid</span></td>
                    <td>2025-04-28</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
@endsection