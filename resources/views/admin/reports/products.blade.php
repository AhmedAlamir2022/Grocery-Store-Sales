@extends('admin.body.master')
@section('title')
     Products Reports
@stop
      @section('admin')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Products Reports
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products Reports</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Products Reports</h4>
                <form class="form-sample" action="{{ route('search.product_report') }}" method="post" autocomplete="off">
                    @csrf
                  <p class="card-description">
                   Main Product Information
                  </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">From:</label>
                        <div class="col-sm-9">
                          <input value="{{ $start_at ?? '' }}"  type="date" class="form-control" name="start_at" required/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">To:</label>
                            <div class="col-sm-9">
                              <input type="date" class="form-control" name="end_at" value="{{ $end_at ?? '' }}" required/>
                            </div>
                          </div>
                      </div>
                  </div><br><hr>
                  <button type="submit" class="btn btn-primary mr-2">Search</button>
                </form>
            </div>
            @if (isset($details))
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Image1</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Added Time</th>
                            <th>Updated Time</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                            @foreach ($details as $product)
                                <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td><img src="{{ asset($product->image1) }}" style="width: 60px; height: 50px;"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->categories->title }}</td>
                            <td>{{ Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</td>
                            <td>{{ Carbon\Carbon::parse($product->updated_at)->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $product->id }}">Delete</button>
                                <a href="{{route('edit.product',$product->id)}}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                            </td>
                        </tr>
                        <div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Delete Product</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('delete.product',$product->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-12 col-form-label">Are You Sure You Want To Delete?</label>
                                          <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $product->id }}">
                                           <input  type="text"  class="form-control"
                                                                        value="{{ $product->name }}" readonly>
                                        </div><hr>
                                        <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                      </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
        <!-- content-wrapper ends -->


      @endsection