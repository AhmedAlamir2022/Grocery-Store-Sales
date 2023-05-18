@extends('admin.body.master')
@section('title')
     General Offers
@stop
      @section('admin')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                General Offers
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">General Offers</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <a href="{{ route('add.offer') }}"><button type="button" class="btn btn-info btn-sm">Add New Offer</button></a>
              <br><br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sale</th>
                            <th>New Price</th>
                            <th>Old Price</th>
                            <th>End Date</th>
                            <th>Details</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                            @foreach ($offers as $offer)
                                <?php $i++; ?>
                        <tr>
                            <td><img src="{{ asset($offer->image) }}" style="width: 60px; height: 50px;"></td>
                            <td>{{ $offer->name }}</td>
                            <td>{{ $offer->categories->title }}</td>
                            <td>{{ $offer->sale }}</td>
                            <td>{{ $offer->new_price }}</td>
                            <td>{{ $offer->old_price }}</td>
                            <td>{{ $offer->end_date }}</td>
                            <td>{{ $offer->short_desc }}</td>
                            <td>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $offer->id }}">Delete</button>
                                <a href="{{route('edit.offer',$offer->id)}}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                            </td>
                        </tr>
                        <div class="modal fade" id="delete{{ $offer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Delete Offer</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('delete.offer',$offer->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-12 col-form-label">Are You Sure You Want To Delete?</label>
                                          <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $offer->id }}">
                                           <input  type="text"  class="form-control"
                                                                        value="{{ $offer->name }}" readonly>
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