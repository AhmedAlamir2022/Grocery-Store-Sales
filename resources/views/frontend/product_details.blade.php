@extends('frontend.body.master')
@section('title')
Product Details
@stop
    @section('main')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Product Details</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Product Details</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li><img src="{{ asset($products->image1) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image2) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image3) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image4) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image5) }}" alt="" width="500" height="500"></li>
                        </ul>
                        <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                            <li><img src="{{ asset($products->image1) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image2) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image3) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image4) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image5) }}" alt="" width="88" height="88"></li>
                        </ul>
                    </div>
                    <div class="product-attribute">
                        <h3 class="title">{{ $products->name }}</h3>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(04 Reviews)</span>
                            <span class="qa-text">Q&amp;A</span>
                            <b class="category">{{ $products->categories->title }}</b>
                        </div>
                        <span class="sku">Sku: {{ $products->code }}</span>
                        <p class="excerpt">{{ $products->short_desc }}.</p>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol"></span>{{ $products->new_price }} (KWD)</span></ins>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">3-Day Shipping</p>
                            <p class="for-today">Pree Pickup Today</p>
                        </div>
                    </div> 
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">{{ $products->name }}</span><br>
                            <span class="title"></span></span>{{ $products->new_price }} (KWD)</span><br>
                        </div>
                        <div class="buttons">
                            <form method="post" action= "{{ route('make.order') }}" >
                                @csrf
                                <p class="form-row">
                                    <input type="hidden" name="id" value="{{ $products->id }}">
                                </p>
                                <p class="form-row">
                                    <input type="hidden" name="quantity" value="{{ $products->quantity }}">
                                </p>
                                <p class="form-row">
                                    <input type="hidden" name="product_price" value="{{ $products->new_price }}">
                                </p>
                                <p class="form-row">
                                    <input type="number" name="my_quantity" required placeholder="Quantity">
                                </p><br>
                                <p class="form-row">
                                    <button class="btn add-to-cart-btn" type="submit">Order Now</button>
                                </p>
                            </form>
                        </div>
                        
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="{{ asset('frontend/images/card1.jpg')}}" alt="" width="51" height="36"></li>
                                <li><img src="{{ asset('frontend/images/card2.jpg')}}" alt="" width="51" height="36"></li>
                                <li><img src="{{ asset('frontend/images/card3.jpg')}}" alt="" width="51" height="36"></li>
                                <li><img src="{{ asset('frontend/images/card4.jpg')}}" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                            <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                            <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc">{{ $products->long_desc }}</p>
                        </div>
                        <div id="tab_2nd" class="tab-contain addtional-info-tab">
                            <table class="tbl_attributes">
                                <tbody>
                                <tr>
                                    <th>Quantity</th>
                                    <td><p>{{ $products->quantity }}</p></td>
                                </tr>
                                <tr>
                                    <th>New Price</th>
                                    <td><p>{{ $products->new_price }}</p></td>
                                </tr>
                                <tr>
                                    <th>Old Price</th>
                                    <td><p>{{ $products->old_price }}</p></td>
                                </tr>
                                <tr>
                                    <th>Added Time</th>
                                    <td><p>{{ Carbon\Carbon::parse($products->created_at)->diffForHumans() }}</p></td>
                                </tr>
                                <tr>
                                    <th>Added Date</th>
                                    <td><p>{{ $products->created_at }}</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                            <div class="accodition-tab biolife-accodition">
                                <ul class="tabs">
                                    <li class="tab-item">
                                        <span class="title btn-expand">How long will it take to receive my order?</span>
                                        <div class="content">
                                            <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                            <div class="desc-expand">
                                                <span class="title">Shipping mode</span>
                                                <ul class="list">
                                                    <li>Standard (in transit 3-5 business days)</li>
                                                    <li>Priority (in transit 2-3 business days)</li>
                                                    <li>Express (in transit 1-2 business days)</li>
                                                    <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">How is the shipping cost calculated?</span>
                                        <div class="content">
                                            <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                            <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Shipping Restrictions?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Undeliverable Packages?</span>
                                        <div class="content">
                                            <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                        @php
                                    $products = App\Models\Product::latest()->get();
                                    @endphp
                                    @foreach($products as $product)
                        <li class="product-item">
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
                
            </div>
        </div>
    </div>

    @endsection