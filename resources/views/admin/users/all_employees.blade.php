@extends('admin.body.master')
@section('title')
     All Employees
@stop
      @section('admin')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                All Employees
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Employees</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">Add New Employee</button>
              <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-2">Add New Employee</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="{{ route('add.employee') }}" method="post">
                            @csrf
                            <div class="form-group row">
                              <input  type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group row">
                                <input  type="email" name="email" class="form-control" placeholder="Email Address" required>
                              </div>
                              <div class="form-group row">
                                <input  type="password" name="password" class="form-control" placeholder="Password" required>
                              </div>
                              <div class="form-group row">
                                <input  type="password" name="confirm_password" class="form-control" placeholder="Repeat Password" required>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Added Time</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                            @foreach ($employees as $employee)
                                <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ Carbon\Carbon::parse($employee->created_at)->diffForHumans() }}</td>
                            <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $employee->id }}">Delete</button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit{{ $employee->id }}">Edit</button></td>
                        </tr>
                        <div class="modal fade" id="delete{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Delete Employee</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('delete.employee',$employee->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                          <label for="password" class="col-sm-12 col-form-label">Are You Sure You Want To Delete?</label>
                                          <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $employee->id }}">
                                           <input  type="text"  class="form-control"
                                                                        value="{{ $employee->name }}" readonly>
                                        </div><hr>
                                        <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                      </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="edit{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="font-family: 'Cairo', sans-serif;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel-2">Edit Employee Info</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form class="forms-sample" action="{{ route('edit.employee', $employee->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label>Name</label>
                                            <input  type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
                                        </div>
                                        <div class="form-group row">
                                            <label>Email Address</label>
                                            <input  type="email" name="email" class="form-control" value="{{ $employee->email }}" required>
                                        </div>
                                        <div class="form-group row">
                                            <label>Password</label>
                                            <input  type="password" name="password" class="form-control" value="{{ $employee->password }}" required>
                                        </div>
                                            <hr>
                                        <button type="submit" class="btn btn-success mr-2">Edit Info</button>
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