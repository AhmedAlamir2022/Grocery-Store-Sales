@extends('frontend.body.master')
@section('title')
     My Special Offers
@stop
    @section('main')
    
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title"> My Special Offers</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page"> My Special Offers</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                

                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">My Special Offers</h3>
                                <table class="shop_table cart-form">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Sale</th>
                                        <th>New Price</th>
                                        <th>Old Price</th>
                                        <th>End Date</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $offers = App\Models\SOffer::latest()->get();
                                        @endphp
                                        @foreach($offers as $item)
                                            @if($item->user_id == Auth::user()->id)
                                    <tr class="cart_item">
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><img src="{{ asset($item->image) }}" style="width: 60px; height: 50px;"></span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->name }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->categories->title }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->sale }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->new_price }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->old_price }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->end_date }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->short_desc }}</span></ins>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    </tbody><hr>
                                </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    @endsection