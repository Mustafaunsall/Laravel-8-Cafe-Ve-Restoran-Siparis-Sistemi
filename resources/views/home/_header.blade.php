<!-- Navigation-->
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets')}}/restaurant/img/nav-logo.png" alt="nav-logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{route('home')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('home')}}">Home-Page</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="./menu_all.html" class="dropdown-toggle" data-toggle="dropdown"  role="button"
                       aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./menu_list.html">Menu - List</a></li>
                        <li><a href="./menu_overlay.html">Menu - Overlay</a></li>
                        <li><a href="./menu_tile.html">Menu - Tile</a></li>
                        <li><a href="./menu_grid.html">Menu - Grid</a></li>
                        <li><a href="./menu_all.html">Menu All</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="./reservation.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Reservation<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./reservation.html">Reservation</a></li>
                        <li><a href="./reservation-ot.html">Reservation - Opentable</a></li>
                    </ul>
                </li>
            <!--
                <li class="dropdown">
                    <a href="./about.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('refrences')}}">Refrences</a></li>
                        <li><a href="{{route('fag')}}">Faq</a></li>

                    </ul>
                </li>-->

                <li class="dropdown">
                    <a href="./shop_fullwidth.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Shop<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./shop_fullwidth.html">Shop - Full</a></li>
                        <li><a href="./shop_left_sidebar.html">Shop - Left Sidebar</a></li>
                        <li><a href="./shop_right_sidebar.html">Shop - Right Sidebar</a></li>
                        <li>
                            <a href="./shop_single_full.html">Shop - Single <span class="caret-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./shop_single_full.html">Shop - Full</a></li>
                                <li><a href="./shop_single_left.html">Shop - Left Sidebar</a></li>
                                <li><a href="./shop_single_right.html">Shop - Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="./shop_cart.html">Shop - Cart</a></li>
                        <li><a href="./shop_checkout.html">Shop - Checkout</a></li>
                        <li><a href="./shop_account.html">Shop - Account</a></li>
                        <li><a href="./shop_account_detail.html">Shop - Account Detail</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{route('fag')}}">Faq</a></li>
                <li><a href="{{route('refrences')}}">Refrences</a></li>
                <li class="dropdown">
                    <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-shopping-cart fsc pull-left"></i><span class="cart-number">3</span><span
                            class="caret"></span></a>
                    <div class="cart-content dropdown-menu">
                        <div class="cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div class="cart-items">
                            <div class="cart-item clearfix">
                                <div class="cart-item-image">
                                    <a href="./shop_single_full.html"><img
                                            src="{{asset('assets')}}/restaurant/img/cart-img1.jpg"
                                            alt="Breakfast with coffee"></a>
                                </div>
                                <div class="cart-item-desc">
                                    <a href="./shop_single_full.html">Breakfast with coffee</a>
                                    <span class="cart-item-price">$19.99</span>
                                    <span class="cart-item-quantity">x 2</span>
                                    <i class="fa fa-times ci-close"></i>
                                </div>
                            </div>
                            <div class="cart-item clearfix">
                                <div class="cart-item-image">
                                    <a href="./shop_single_full.html"><img
                                            src="{{asset('assets')}}/restaurant/img/cart-img2.jpg"
                                            alt="Chicken stew"></a>
                                </div>
                                <div class="cart-item-desc">
                                    <a href="./shop_single_full.html">Chicken stew</a>
                                    <span class="cart-item-price">$24.99</span>
                                    <span class="cart-item-quantity">x 3</span>
                                    <i class="fa fa-times ci-close"></i>
                                </div>
                            </div>
                        </div>
                        <div class="cart-action clearfix">
                            <span class="pull-left checkout-price">$ 114.95</span>
                            <a class="btn btn-default pull-right" href="./shop_cart.html">View Cart</a>
                        </div>

                    </div>
                </li>

                @auth
                    <li class="dropdown">
                        <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false" href="{{ route('myprofile') }}"><i
                                class="fa fa-user"></i> {{ Auth::user()->name}}<span class="caret"></span></a>

                        <div class="cart-content dropdown-menu">
                            <div class="cart-title">
                                <h4>{{ Auth::user()->name}}</h4>
                            </div>
                            <div class="cart-items">
                                <div class="cart-item clearfix">
                                    <div class="cart-item-desc">
                                        <h4><a class="dropdown-item" href="{{ route('myprofile') }}"><i
                                                    class="fa fa-user"></i> Profile</a></h4>
                                    </div>
                                </div>
                                <div class="cart-item clearfix">
                                    <div class="cart-item-desc">
                                        <h4><a class="dropdown-item" href="{{ route('logout') }}"> Log Out<i
                                                    class="fa fa-sign-out pull-right"></i></a></h4>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </li>

                @endauth
                @guest

                    <li class="dropdown">
                        <a href="{{route('login')}}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Login<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('register')}}">Join</a></li>
                        </ul>

                    </li>
                @endguest

            </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>
