@extends('employee.body.master')
@section('title')
     All Categories
@stop
      @section('employee')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                All Categories
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Categories</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">Add New Category</button>
              <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-2">Add New Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="{{ route('eadd.category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                              <input  type="text" name="title" class="form-control" placeholder="Title" required>
                            </div>
                              <div class="form-group row">
                                <textarea name="details" class="form-control" rows="4" placeholder="Details" required></textarea>
                              </div>
                              <div class="form-group row">
                                <input  type="file" name="image" class="form-control" placeholder="Category Image" required>
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
                            <th>Title</th>
                            <th>details</th>
                            <th>Added Time</th>
                            <th>Updated Time</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                            @foreach ($categories as $category)
                                <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td><img src="{{ asset($category->image) }}" style="width: 60px; height: 50px;"></td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->details }}</td>
                            <td>{{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
                            <td>{{ Carbon\Carbon::parse($category->updated_at)->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $category->id }}">Delete</button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $category->id }}">Edit</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Delete Category</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('edelete.category',$category->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-12 col-form-label">Are You Sure You Want To Delete?</label>
                                          <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $category->id }}">
                                           <input  type="text"  class="form-control"
                                                                        value="{{ $category->title }}" readonly>
                                        </div><hr>
                                        <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                      </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Edit Category Info</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('eedit.category', $category->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label>Title</label>
                                          <input  type="text" name="title" class="form-control" value="{{ $category->title }}" required>
                                        </div>
                                          <div class="form-group row">
                                            <label>Details</label>
                                            <textarea name="details" class="form-control" rows="4" required>{{ $category->details }}</textarea>
                                          </div>
                                          <div class="form-group row">
                                            <label>Category Image</label>
                                            <input  type="file" name="image" class="form-control" placeholder="Category Image">
                                          </div><hr>
                                        <button type="submit" class="btn btn-success mr-2">Edit Category</button>
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