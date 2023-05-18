@extends('admin.body.master')
@section('title')
     Edit Product Info
@stop
      @section('admin')

      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Edit Product Info
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product Info</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Edit Product Info</h4>
                    <form class="form-sample" action="{{ route('update.product', $products->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                      <p class="card-description">
                       Main Product Information
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id" value="{{ $products->id }}">
                              <input type="text" class="form-control" name="name" value="{{ $products->name }}" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Category</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="cat_id" required>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $products->cat_id ? 'selected' : '' }} >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Product Code</label>
                            <div class="col-sm-9">
                                <input type="text" name="code" value="{{ $products->code }}" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                              <input class="form-control" value="{{ $products->quantity }}" type="text" name="quantity" required/>
                            </div>
                          </div>
                        </div>
                      </div><br>
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Old Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="old_price" value="{{ $products->old_price }}" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Price</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="number" value="{{ $products->new_price }}" name="new_price" required/>
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
                                <textarea class="form-control" name="short_desc" rows="3" required>{{ $products->short_desc }}</textarea>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="long_desc" rows="5" required>value="{{ $products->long_desc }}</textarea>
                            </div>
                          </div>
                        </div>
                      </div><br><hr>
                      <p class="card-description">
                        Product Images
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 1</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($products->image1) }}" style="width: 60px; height: 50px;">
                              <input type="file" name="image1" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 2</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($products->image2) }}" style="width: 60px; height: 50px;">
                              <input type="file" name="image2" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 3</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($products->image3) }}" style="width: 60px; height: 50px;">
                              <input type="file" name="image3" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 4</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($products->image4) }}" style="width: 60px; height: 50px;">
                              <input type="file" name="image4" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 5</label>
                            <div class="col-sm-9">
                                <img src="{{ asset($products->image5) }}" style="width: 60px; height: 50px;">
                              <input type="file" name="image5" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div><br><hr>
                      <button type="submit" class="btn btn-primary mr-2">Edit Info</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         @endsection