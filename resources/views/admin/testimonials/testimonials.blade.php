@extends('admin.body.master')
@section('title')
     Users Testimonials
@stop
      @section('admin')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Users Testimonials
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users Testimonials</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <br><br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Testimoinal</th>
                            <th>Status</th>
                            <th>Added Time</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                            @foreach ($testimonials as $testimonial)
                                <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->testimonial }}</td>
                            <td>
                                @if ($testimonial->status == 0)
                                    <button class="btn btn-warning" >Under Review</button>
                                @elseif ($testimonial->status == 2)
                                    <button class="btn btn-danger" >Rejected</button>
                                @else
                                    <button class="btn btn-success" >Accepted</button>
                                @endif
                            </td>
                            <td>{{ Carbon\Carbon::parse($testimonial->created_at)->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $testimonial->id }}">Delete</button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $testimonial->id }}">Status</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="delete{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Delete Testimonial</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('delete.testimonial',$testimonial->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-12 col-form-label">Are You Sure You Want To Delete?</label>
                                          <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $testimonial->id }}">
                                        </div><hr>
                                        <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                      </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="edit{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Edit Testimonial Status</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('edit.testimonial', $testimonial->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="1">Accepted</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div><hr>
                                        <button type="submit" class="btn btn-success mr-2">Edit Status</button>
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