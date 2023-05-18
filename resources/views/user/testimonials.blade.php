@extends('frontend.body.master')
@section('title')
     My Testimonials
@stop
    @section('main')
    
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title"> My Testimonials</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page"> My Testimonials</span></li>
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
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">My Testimonials</h3>
                                <table class="shop_table cart-form">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Testimonial</th>
                                        <th class="product-quantity">Added Date</th>
                                        <th class="product-price">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($testimonials as $key => $item)
                                    @if($item->user_id == Auth::user()->id)
                                    <tr class="cart_item">
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->testimonial }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <div class="price price-contain">
                                                <ins><span class="price-amount">{{ $item->created_at }}</span></ins>
                                            </div>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity-box type1">
                                                <div class="qty-input">
                                                    @if ($item->status == 0)
                                                        <button class="btn btn-warning" >Under Review</button>
                                                    @elseif ($item->status == 2)
                                                        <button class="btn btn-danger" >Rejected</button>
                                                    @else
                                                        <button class="btn btn-success" >Accepted</button>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    </tbody><hr>
                                </table>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <form method="post" action="{{ route('store.testimonial') }}">
                                    @csrf
                                        <div class="">
                                            <div class="heading-bx left"><h2 class="title-head">Post New  <span>Testimonial</span></h2></div>
                                            <div class="form-group row">
                                                <div class="col-12 col-sm-9 col-md-9 col-lg-9">
                                                    <textarea rows="6" class="form-control" name="testimonial" required></textarea>
                                                </div>
                                            </div><br><hr>
                                            <!-- end row -->
                                            <div class="">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-3 col-md-3 col-lg-3"></div>
                                                        <div class="col-12 col-sm-9 col-md-9 col-lg-9">
                                                            <button type="submit" class="btn add-to-cart-btn">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    @endsection