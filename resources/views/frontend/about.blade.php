@extends('frontend.body.master')
@section('title')
     About Us
@stop
    @section('main')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">About Us</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">About us</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain about-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="welcome-us-block">
                <div class="container">
                    <h4 class="title">Welcome to Biolife store!</h4>
                    <div class="text-wraper">
                        <p class="text-info">On-demand grocery Website is all the rage these days. The pandemic has forced many traditional businesses to close, pushing the business online as well in order to overcome the depression. Food companies are taking advantage of changing consumer behavior by bringing their grocery stores online using white label apps. Businesses have shifted from “waiting for the pandemic to pass” mode to “living with the pandemic” mode. This increase in on-demand apps has made online grocery shopping a hot trend. In order to create the best shopping experience for your customers, your grocery store app should have features like promo codes, easy catalog and vendor navigation, customer wallet for cashback, etc.</p>
                        
                    </div>
                </div>
            </div>

            <div class="why-choose-us-block">
                <div class="container">
                    <h4 class="box-title">Why Choose us</h4>
                    <b class="subtitle">Natural food is taken from the world's most modern farms with strict safety cycles</b>
                    <div class="showcase">
                        <div class="sc-child sc-left-position">
                            <ul class="sc-list">
                                <li>
                                    <div class="sc-element color-01">
                                        <span class="biolife-icon icon-fresh-drink"></span>
                                        <div class="txt-content">
                                            <span class="number">01</span>
                                            <b class="title">Always Fresh</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-02">
                                        <span class="biolife-icon icon-healthy-about"></span>
                                        <div class="txt-content">
                                            <span class="number">02</span>
                                            <b class="title">Overall Healthy</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-03">
                                        <span class="biolife-icon icon-green-safety"></span>
                                        <div class="txt-content">
                                            <span class="number">03</span>
                                            <b class="title">Encironmental Safety</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sc-child sc-center-position">
                            <figure><img src="{{ asset('frontend/images/about-us/bn04.jpg')}}" alt="" width="622" height="656"></figure>
                        </div>
                        <div class="sc-child sc-right-position">
                            <ul class="sc-list">
                                <li>
                                    <div class="sc-element color-04">
                                        <span class="biolife-icon icon-capacity-about"></span>
                                        <div class="txt-content">
                                            <span class="number">04</span>
                                            <b class="title">Antioxidant Capacity</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-05">
                                        <span class="biolife-icon icon-arteries-about"></span>
                                        <div class="txt-content">
                                            <span class="number">05</span>
                                            <b class="title">Good For Arteries</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sc-element color-06">
                                        <span class="biolife-icon icon-title"></span>
                                        <div class="txt-content">
                                            <span class="number">06</span>
                                            <b class="title">Quality Standards</b>
                                            <p class="desc">Natural products are kept in the best condition to ensure always fresh</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial-block">
                <div class="container">
                    <h4 class="box-title">Testimonials</h4>
                    <ul class="testimonial-list biolife-carousel" data-slick='{"arrows":false,"dots":true,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        @php
							$testimonials = App\Models\Testimonial::latest()->get();
						@endphp
						@foreach($testimonials as $item)
                            @if($item->status == '1')
                                <li>
                                    <div class="testml-elem">
                                        <div class="avata">
                                            <figure><img src="{{ URL::asset('upload/img_avatar3.png') }}" alt="" width="217" height="217"></figure>
                                        </div>
                                        <p class="desc">{{ $item->testimonial }}</p>
                                        <b class="name">{{ $item->name }}</b>
                                        <b class="title">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</b>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Our Contact</h4>
                            @php
								$quires = App\Models\Query::latest()->limit(1)->get();
							@endphp
							@foreach($quires as $item)
                            <p class="frst-desc">{{ $item->details }}</p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Addess:</b>
                                        <p class="dsc">{{ $item->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Phone:</b>
                                        <p class="dsc">(+) {{ $item->phone }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Email:</b>
                                        <p class="dsc">{{ $item->email }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Store Open:</b>
                                        <p class="dsc">All Days All Time</p>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 

                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                            <form method="post" action= "{{ route('store.message') }}" >
                                {{ csrf_field() }}
                                <p class="form-row">
                                    <input type="text" name="name" placeholder="Your Name" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="email" name="email" placeholder="Email Address" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="tel" name="phone" placeholder="Phone Number" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="text" name="subject" placeholder="Subject" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <textarea name="message" id="mes-1" cols="30" rows="9" placeholder="Leave Message"></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit">send message</button>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Block 11: Newsletter-->
    <div class="newsletter-block layout-03 sm-margin-top-39px xs-margin-top-90px">
        <div class="container">
            <div class="form-content">
                <h3 class="newslt-title">Sign up for our newsletter</h3>
                <p class="sub-title">and enjoy <b>25%</b> off your first purchase!</p>
                <form method="post" action= "{{ route('store.sub') }}">
                    {{ csrf_field() }}
                    <input type="email" name="email" class="input-text email" placeholder="Your email here..." required>
                    <button type="submit" class="bnt-submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>

    @endsection