@extends('admin.body.master')
@section('title')
     All Brands
@stop
      @section('admin')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                All Brands
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Brands</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">Add New Brands</button>
              <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-2">Add New Brands</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="{{ route('Brand.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group row">
                                <input  type="file" name="image" class="form-control" placeholder="Brand Image" required>
                              </div><hr>
                            <button type="submit" class="btn btn-success mr-2">Add New</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                          </form>
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Added Time</th>
                            <th>Updated Time</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody> 
                        <?php $i = 0; ?>
                            @foreach ($brands as $brand)
                                <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td><img src="{{ asset($brand->image) }}" style="width: 60px; height: 50px;"></td>
                            <td>{{ Carbon\Carbon::parse($brand->created_at)->diffForHumans() }}</td>
                            <td>{{ Carbon\Carbon::parse($brand->updated_at)->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $brand->id }}">Delete</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="delete{{ $brand->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Delete Brand</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('Brand.destroy','test') }}" method="post">
                                        {{ method_field('delete') }}
                                        @csrf
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-12 col-form-label">Are You Sure You Want To Delete?</label>
                                          <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $brand->id }}">
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
          </div>
        </div>
        <!-- content-wrapper ends -->


      @endsection