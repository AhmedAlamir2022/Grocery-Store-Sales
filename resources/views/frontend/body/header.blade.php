<!-- HEADER -->
<header id="header" class="header-area style-01 layout-03">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    @php
								$quires = App\Models\Query::latest()->limit(1)->get();
							@endphp
							@foreach($quires as $item)
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $item->email }}</a></li>
                    @endforeach
                    <li><a href="#">Free Shipping for all Order of $99</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="horizontal-menu">
                    @auth
						<li style="color:aliceblue">Wlecome To Biolife Market</li>
					@else
                        <li><a href="{{ route('login') }}" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                    <a href="{{ url('/') }}" class="biolife-logo"><img src="{{ asset('frontend/images/organic-3-green.png')}}" alt="biolife logo" width="135" height="34"></a>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                    <div class="primary-menu">
                        <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                            <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="menu-item"><a href="{{ url('/about') }}">About Us</a></li>
                            <li class="menu-item"><a href="{{ url('/products') }}">Products</a></li>
                            <li class="menu-item"><a href="{{ route('contact.me') }}">Contact</a></li>
                            @auth
                                <li class="menu-item menu-item-has-children has-child">
                                    @php
								$id = Auth::user()->id;
								$userData = App\Models\User::find($id);
							@endphp
                                    <a href="#" class="menu-name" data-title="{{ $userData->name }}">{{ $userData->name }}</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="{{ route('user.orders') }}">My Orders</a></li>
                                        <li class="menu-item"><a href="{{ url('/user/offers') }}">My Offers</a></li>
                                        <li class="menu-item"><a href="{{ route('user.testimoinals') }}">My Testimonials</a></li>
                                        <li class="menu-item"><a href="{{ route('user.profile') }}">Profile</a></li>
                                        <li class="menu-item"><a href="{{ route('user.change.password') }}">Change Password</a></li>
                                        <li class="menu-item"><a href="{{ route('user.logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                    <div class="biolife-cart-info">
                        <div class="mobile-search">
                            <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                            <div class="mobile-search-content">
                                <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                    <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                    <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                    <button type="submit" class="btn-submit">go</button>
                                </form>
                            </div>
                        </div>
                        <div class="minicart-block">
                            <div class="minicart-contain">
                                <a href="javascript:void(0)" class="link-to">
                                    
                                        <span class="title">Welcome To Our Store</span>
                                   
                                </a>
                            </div>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="vertical-menu vertical-category-block">
                        <div class="block-title">
                            <span class="menu-icon">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                            <span class="menu-title">All Categories</span>
                            
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            
                        </div>
                        <div class="wrap-menu">
                            <ul class="menu clone-main-menu">
                                @php
                                $categries = App\Models\Category::latest()->get();
                                @endphp
                                @foreach($categries as $category)
                                    <li class="menu-item"><a href="{{ route('category.product',$category->id) }}" class="menu-name" data-title="{{ $category->title }}">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 padding-top-2px">
                    <div class="header-search-bar layout-01">
                        <form action="#" class="form-search" name="desktop-seacrh" method="get">
                            <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                            <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                        </form>
                    </div>
                    <div class="live-info">
                        @php
								$quires = App\Models\Query::latest()->limit(1)->get();
							@endphp
							@foreach($quires as $item)
                        <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+) {{ $item->phone }}</b></p>
                        @endforeach
                        <p class="working-time">Open All Days All Times</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>