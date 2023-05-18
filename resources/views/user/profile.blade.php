@extends('frontend.body.master')
@section('title')
     My Profile
@stop
    @section('main')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">My Profile</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">My Profile</span></li>
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
                            <form method="post" action="{{ route('user.update.profile') }}">
                                @csrf
                                <p class="form-row">
                                    <label for="name">Full Name:<span class="requite">*</span></label>
                                    <input type="text" id="name" name="name" value="{{ $userData->name }}" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <label for="email">Email Address:<span class="requite">*</span></label>
                                    <input type="email" id="email" readonly value="{{ $userData->email }}" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="contact">Phone Number:</label>
                                    <input type="tel" name="contact" id="contact" value="{{ $userData->contact }}" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="dob">Date Of Birth:</label>
                                    <input type="date" name="dob" id="dob" value="{{ $userData->dob }}" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="country">Country:</label>
                                    <input type="text" name="country" id="country" value="{{ $userData->country }}" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="city">City:</label>
                                    <input type="text" name="city" id="city" value="{{ $userData->city }}" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="address">Address:</label>
                                    <input type="text" name="address" id="address" value="{{ $userData->address }}" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="created_at">Added Date:<span class="requite">*</span></label>
                                    <input type="text" id="created_at" readonly value="{{ $userData->created_at }}" class="txt-input">
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">Update Info</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @endsection