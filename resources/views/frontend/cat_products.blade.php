@extends('frontend.body.master')
@section('title')
    Category Products
@stop
    @section('main')
    
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Category Products</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Category Products</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="block-item recently-products-cat md-margin-bottom-39">
                        <div class="biolife-title-box">
                            <h3 class="main-title">Related Categories ( {{ \App\Models\Category::count() }} )</h3>
                        </div><br><br>
                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}' >
                            @php
                                    $categries = App\Models\Category::latest()->get();
                                    @endphp
                                    @foreach($categries as $category)
                            <li class="product-item">
                                <div class="contain-product layout-02">
                                    <div class="product-thumb">
                                        <a href="{{ route('category.product',$category->id) }}" class="link-to-product">
                                            <img src="{{ asset($category->image) }}" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">{{ $category->details }}</b>
                                        <h4 class="product-title"><a href="{{ route('category.product',$category->id) }}" class="pr-name">{{ $category->title }}</a></h4>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="product-category grid-style">

                        <div id="top-functions-area" class="top-functions-area" >
                        </div>

                        <div class="row">
                            <div class="biolife-title-box">
                                <h3 class="main-title">Related Products ( {{ \App\Models\Product::count() }} )</h3>
                            </div><br><br>
                            <ul class="products-list">
                                @foreach($products as $product)
                                <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="{{ route('product.details',$product->id) }}" class="link-to-product">
                                                <img src="{{ asset($product->image1) }}" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">{{ $product->categories->title }}</b>
                                            <h4 class="product-title"><a href="{{ route('product.details',$product->id) }}" class="pr-name">{{ $product->name }}</a></h4>
                                            <div class="price">
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

                        <div class="biolife-panigations-block">
                            <ul class="panigation-contain">
                                <li><span class="current-page">1</span></li>
                                <li><a href="" class="link-page">2</a></li>
                                <li><a href="" class="link-page">3</a></li>
                                <li><span class="sep">....</span></li>
                                <li><a href="" class="link-page">20</a></li>
                                <li><a href="" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    
    @endsection