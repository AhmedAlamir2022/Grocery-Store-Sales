@extends('employee.body.master')
@section('title')
     Change Password
@stop
      @section('employee')

      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Change Password
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
                  <h4 class="card-title">Employee Change Password</h4>
                  <p class="card-description">
                    Please Fill This Form
                  </p>
                  <form class="forms-sample" action="{{ route('new.password') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group row">
                      <label for="password" class="col-sm-3 col-form-label">Current Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="oldpassword" class="form-control" id="password" placeholder="Current Password" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="newpassword" class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="newpassword" class="form-control" id="newpassword" placeholder="New Password" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" required>
                      </div>
                    </div>
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