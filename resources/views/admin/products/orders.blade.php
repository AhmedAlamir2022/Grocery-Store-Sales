@extends('admin.body.master')
@section('title')
     Customers Orders
@stop
      @section('admin')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Customers Orders
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers Orders</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Product Price</th>
                            <th>Total Price</th>
                            <th>Order Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                            @foreach ($orders as $order)
                           
                                
                            
                                <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $order->users->name }}</td>
                            <td>{{ $order->products->name }}</td>
                            <td>{{ $order->my_quantity }}</td>
                            <td>{{ $order->product_price }} (KWD)</td>
                            <td>{{ $order->total_price }} (KWD)</td>
                            <td>{{ Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</td>
                           
                        </tr>
                          
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->


      @endsection