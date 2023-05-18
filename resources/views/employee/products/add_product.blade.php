@extends('employee.body.master')
@section('title')
     Add Product
@stop
      @section('employee')

      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Add Product
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Add Product</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Add Product</h4>
                    <form class="form-sample" action="{{ route('estore.product') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                      <p class="card-description">
                       Main Product Information
                      </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Category</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="cat_id" required>
                                    <option >Choose ..</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
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
                                <input type="text" name="code" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="text" name="quantity" required/>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Old Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="old_price" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">New Price</label>
                            <div class="col-sm-9">
                              <input class="form-control" type="number" name="new_price" required/>
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
                                <textarea class="form-control" name="short_desc" rows="3" required></textarea>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="long_desc" rows="5" required></textarea>
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
                              <input type="file" name="image1" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 2</label>
                            <div class="col-sm-9">
                              <input type="file" name="image2" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 3</label>
                            <div class="col-sm-9">
                              <input type="file" name="image3" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 4</label>
                            <div class="col-sm-9">
                              <input type="file" name="image4" class="form-control" required/>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image 5</label>
                            <div class="col-sm-9">
                              <input type="file" name="image5" class="form-control" required/>
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