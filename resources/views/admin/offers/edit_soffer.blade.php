@extends('admin.body.master')
@section('title')
     Edit Offer Info
@stop
      @section('admin')

      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Edit Offer Info
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Edit Offer Info</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Edit Offer Info</h4>
                    <form class="form-sample" action="{{ route('update.soffer', $soffers->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                      <p class="card-description">
                       Main Offer Information
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id" value="{{ $soffers->id }}">
                              <input type="text" class="form-control" value="{{ $soffers->name }}" name="name" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Category</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="cat_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $soffers->cat_id ? 'selected' : '' }} >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sale</label>
                            <div class="col-sm-9">
                                <input type="text" name="sale" value="{{ $soffers->sale }}" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Old Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="old_price" value="{{ $soffers->old_price }}" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Price</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="number" name="new_price" value="{{ $soffers->new_price }}" required/>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="date" name="end_date" value="{{ $soffers->end_date }}" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Customer</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="user_id" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $soffers->user_id ? 'selected' : '' }} >{{ $user->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                      </div><br><hr>
                      <p class="card-description">
                        Product Description
                      </p>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="short_desc" rows="3" required>{{ $soffers->short_desc }}</textarea>
                            </div>
                          </div>
                        </div>
                      </div><br><hr>
                      <p class="card-description">
                        Offer Image
                      </p>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image </label>
                            <div class="col-sm-9">
                                <img src="{{ asset($soffers->image) }}" style="width: 60px; height: 50px;">
                              <input type="file" name="image" class="form-control"/>
                            </div>
                          </div>
                        </div>
                      </div><br><hr>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         @endsection