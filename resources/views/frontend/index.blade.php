
@extends('frontend.body.master')
@section('title')
     Homebage
@stop
    @section('main')

            <!--Block 01: Main slide-->
            <!--Block 01: Main Slide-->
            <div class="main-slide block-slider nav-change">
                <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": false, "speed": 800}' >
                    <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-01"></div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Vegetables 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="{{ route('contact.me') }}" class="btn btn-bold">Contact Us</a>
                                    <a href="{{ url('/about') }}" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
                            <div class="media background-geen-02"></div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Vegetables 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="{{ route('contact.me') }}" class="btn btn-bold">Contact Us</a>
                                    <a href="{{ url('/about') }}" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--Block 03: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products ( {{ \App\Models\Product::count() }} )</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                            <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                                @php
                                    $categries = App\Models\Category::latest()->get();
                                @endphp
                                @foreach($categries as $category)
                                <li class="tab-element active">
                                    <a href="{{ route('category.product',$category->id) }}" ><span class="biolife-icon icon-lemon"></span>{{ $category->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    @php
                                    $products = App\Models\Product::latest()->get();
                                    @endphp
                                    @foreach($products as $product)
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="{{ route('product.details',$product->id) }}" class="link-to-product">
                                                    <img src="{{ asset($product->image1) }}" alt="{{ $product->name }}" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">{{ $product->categories->title }}</b>
                                                <h4 class="product-title"><a href="{{ route('product.details',$product->id) }}" class="pr-name">{{ $product->name }}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>{{ $product->new_price }}</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>{{ $product->old_price }}</span></del>
                                                </div>
                                                <div class="shipping-info">
                                                    <p class="shipping-day">3-Day Shipping</p>
                                                    <p class="for-today">Pree Pickup Today</p>
                                                </div>
                                                <div class="slide-down-box">
                                                    <div class="buttons">
                                                        <a href="" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="{{ route('product.details',$product->id) }}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>View Details</a>
                                                        <a href="" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block 04: Banner Promotion 01 -->
            <div class="banner-promotion-01 xs-margin-top-50px sm-margin-top-11px">
                <div class="biolife-banner promotion biolife-banner__promotion">
                    <div class="banner-contain">
                        <div class="media background-biolife-banner__promotion">
                            <div class="img-moving position-1">
                                <img src="{{ asset('frontend/images/home-03/img-moving-pst-1.png')}}" width="149" height="139" alt="img msv">
                            </div>
                            <div class="img-moving position-2">
                                <img src="{{ asset('frontend/images/home-03/img-moving-pst-2.png')}}" width="185" height="265" alt="img msv">
                            </div>
                            <div class="img-moving position-3">
                                <img src="{{ asset('frontend/images/home-03/img-moving-pst-3-cut.png')}}" width="384" height="151" alt="img msv">
                            </div>
                            <div class="img-moving position-4">
                                <img src="{{ asset('frontend/images/home-03/img-moving-pst-4.png')}}" width="198" height="269" alt="img msv">
                            </div>
                        </div>
                        <div class="text-content">
                            <div class="container text-wrap">
                                <i class="first-line">Initial Description of the Problem</i>
                                <p class="third-line">-	Grocery stores are spread all over the place, and many people work there, and there are suppliers, customers, and different companies that deal with groceries.
                                    -	 Many grocery owners are forced to work 24 hours to increase the percentage of profits, and the grocery owner employs more employees.
                                    
                                    
                                    </p>
                                <div class="product-detail">
                                    <a href="{{ url('/about') }}" class="btn add-to-cart-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block 05: Banner Promotion 02-->
            <div class="banner-promotion-02 z-index-20">
                <div class="biolife-banner promotion2 biolife-banner__promotion2">
                    <div class="banner-contain">
                        <div class="container">
                            <div class="media"></div>
                            <div class="text-content">
                                <b class="first-line">Suggested Solution</b>
                                <p class="third-line">-	Developing and implementing a web application for grocery owners to increase profit from customers by sending customized promotions and creating a way to save and manage inventory more efficiently, through the web application
                                    -	the owner of the grocer will be able to know the least demanded and most requested products in a certain period.
                                    -	it is possible to know full details of the products (the remaining number - the price - the number of pieces sold).
                                    </p>
                                <p class="buttons">
                                    <a href="{{ url('/about') }}" class="btn btn-bold">Read More</a>
                                    <a href="{{ route('contact.me') }}" class="btn btn-thin">Contact Us</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block 06: Products-->
            <div class="Product-box sm-margin-top-96px xs-margin-top-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="advance-product-box">
                                <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                    <h3 class="title">Offers Of The Week</h3>
                                </div>
                                <ul class="products biolife-carousel nav-top-right nav-none-on-mobile" data-slick='{"arrows":true, "dots":false, "infinite":false, "speed":400, "slidesMargin":30, "slidesToShow":1}'>
                                    @php
                                    $offers = App\Models\Offer::latest()->get();
                                    @endphp
                                    @foreach($offers as $offer)
                                    <li class="product-item">
                                        <div class="contain-product deal-layout contain-product__deal-layout">
                                            <div class="product-thumb">
                                                <a class="link-to-product">
                                                    <img src="{{ asset($offer->image) }}" alt="dd" width="330" height="330" class="product-thumnail">
                                                </a>
                                                <div class="labels">
                                                    <span class="sale-label">- {{ $offer->sale }} %</span>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="biolife-countdown" data-datetime="{{ $offer->end_date }} 00:00:00"></div>
                                                <b class="categories">{{ $offer->categories->title }}</b>
                                                <h4 class="product-title"><a class="pr-name">{{ $offer->name }}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>{{ $offer->new_price }}</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>{{ $offer->old_price }}</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">{{ $offer->short_desc }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>@endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6">
                            <div class="advance-product-box">
                                <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                    <h3 class="title">Top Rated Categories ( {{ \App\Models\Category::count() }} )</h3>
                                </div>
                                <ul class="products biolife-carousel eq-height-contain nav-center-03 nav-none-on-mobile row-space-29px" data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":992, "settings":{ "rows":2, "slidesToShow": 1}},{"breakpoint":768, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":500, "settings":{ "rows":2, "slidesToShow": 1}}]}'>
                                    @php
                                    $categries = App\Models\Category::latest()->get();
                                    @endphp
                                    @foreach($categries as $category)
                                    <li class="product-item">
                                        <div class="contain-product right-info-layout contain-product__right-info-layout">
                                            <div class="product-thumb">
                                                <a href="{{ route('category.product',$category->id) }}" class="link-to-product">
                                                    <img src="{{ asset($category->image) }}" alt="dd" width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <h4 class="product-title"><a href="{{ route('category.product',$category->id) }}" class="pr-name">{{ $category->title }}</a></h4>
                                                <b class="categories">{{ $category->details }}</b>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="biolife-banner style-01 biolife-banner__style-01 xs-margin-top-80px-im sm-margin-top-30px-im">
                                    <div class="banner-contain">
                                        <a href="#" class="bn-link"></a>
                                        <div class="text-content">
                                            <span class="first-line">Daily Fresh</span>
                                            <b class="second-line">Natural</b>
                                            <i class="third-line">Fresh Food</i>
                                            <span class="fourth-line">Premium Quality</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Block 04: Banners-->
            <div class="banner-block md-margin-top-61px sm-margin-bottom-89px xs-margin-top-60px">
                <div class="biolife-banner special-02 biolife-banner__special-02">
                    <div class="container">
                        <div class="banner-contain">
                            <div class="thumb">
                                <a href="#" class="link"><img src="{{ asset('frontend//images/home-01/thumb-bn-special-02.jpg') }}" width="753" height="517" alt=""></a>
                            </div>
                            <div class="text-content">
                                <i class="text01">Organic</i>
                                <b class="text02">Special Offers</b>
                                <span class="text03">Organic Heaven Made</span>
                                <span class="text04">Easy <i>Healthy, Happy Life</i></span>
                                <div class="product-detail">
                                    <h4 class="product-name">National Fresh Fruit Production</h4>
                                    <div class="price price-contain">
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ url('/about') }}" class="btn add-to-cart-btn" tabindex="-1">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <!--Block 08: Blog Posts-->
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

            <!--Block 07: Brands-->
            <div class="brand-slide sm-margin-top-100px background-fafafa xs-margin-top-80px xs-margin-bottom-80px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}},{"breakpoint":450, "settings":{ "slidesToShow": 1, "slidesMargin":10}}]}'>
                        @php
							$brands = App\Models\Brand::latest()->get();
						@endphp
						@foreach($brands as $item)
                        <li>
                            <div class="biolife-brd-container">
                                <a class="link">
                                    <figure><img src="{{ asset($item->image) }}" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
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