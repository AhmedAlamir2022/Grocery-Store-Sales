@extends('frontend.body.master')
@section('title')
     Change Password
@stop
    @section('main')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Change Password</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Change Password</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="signin-container">
                            <form method="post" action="{{ route('user.update.password') }}">
                                @csrf
                                <p class="form-row">
                                    <label for="oldpassword">Current password:<span class="requite">*</span></label>
                                    <input type="password" id="oldpassword" name="oldpassword" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <label for="newpassword">New password:<span class="requite">*</span></label>
                                    <input type="password" id="newpassword" name="newpassword" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <label for="confirm_password">Confirm password:<span class="requite">*</span></label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="txt-input" required>
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">Update Password</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @endsection