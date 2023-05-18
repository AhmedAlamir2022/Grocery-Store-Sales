@extends('admin.body.master')
@section('title')
     Contact Info
@stop
      @section('admin')

      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Contact Info
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Info</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                @if(session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ session()->get('error') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                <div class="card-body">
                  <h4 class="card-title">Store Contact Info</h4>
                  <p class="card-description">
                  </p>
                  @foreach ($quires as $quiry)
                  <form class="forms-sample" action="{{ route('Query.update', 'test') }}" method="post" autocomplete="off">
                    @csrf @method('PUT')
                    
                    <div class="form-group row">
                      <label for="email" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="email" value="{{ $quiry->email }}" required>
                        <input type="hidden" name="id" value="{{ $quiry->id }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="tel" name="phone" class="form-control" id="phone" value="{{ $quiry->phone }}" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="address" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="address" name="address" required rows="3">{{ $quiry->address }}</textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="details" class="col-sm-3 col-form-label">Details</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="details" name="details" required rows="5">{{ $quiry->details }}</textarea>
                      </div>
                    </div><br><hr>
                    <button type="submit" class="btn btn-primary mr-2">Edit Info</button>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
         @endsection