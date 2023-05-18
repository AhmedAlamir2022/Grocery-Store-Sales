@extends('frontend.body.master')
@section('title')
     My Orders
@stop
    @section('main')
    
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">My Orders</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">My Orders</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page no-sidebar">
        <div class="container">

            <!--Cart Table-->
            <div class="shopping-cart-container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="box-title">My Orders</h3>
                            <table class="shop_table cart-form">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Product Price</th>
                                    <th>Totla Price</th>
                                    <th>Orderd Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $orders = App\Models\Order::latest()->get();
                                    @endphp
                                    @foreach($orders as $key => $item)
                                    @if($item->user_id == Auth::user()->id)
                                <tr class="cart_item">
                                    <td class="product-subtotal" data-title="Total">
                                        <div class="price price-contain">
                                            <ins><span class="price-amount">{{ $item->products->name }}</span></ins>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <div class="price price-contain">
                                            <ins><span class="price-amount">{{ $item->my_quantity }}</span></ins>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <div class="price price-contain">
                                            <ins><span class="price-amount">{{ $item->product_price }} (KWD)</span></ins>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <div class="price price-contain">
                                            <ins><span class="price-amount">{{ $item->total_price }} (KWD)</span></ins>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <div class="price price-contain">
                                            <ins><span class="price-amount">{{ $item->created_at }}</span></ins>
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
    
    @endsection