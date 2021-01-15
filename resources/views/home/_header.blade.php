<!-- Navigation-->
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <!--aside-->
            <div class="col-md-10">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('assets')}}/restaurant/img/nav-logo.png" style="width: 100px;height: 25px" alt="nav-logo">
                    </a>
                </div>


                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown">
                            <a href="{{route('home')}}" role="button">Home<span></span></a>
                        </li>

                        <li class="dropdown">
                            <a href="./shop_fullwidth.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Menü<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="./shop_single_full.html">Shop - Single <span
                                            class="caret-right"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="./shop_single_full.html">Shop - Full</a></li>
                                        <li><a href="./shop_single_left.html">Shop - Left Sidebar</a></li>
                                        <li>
                                            <a href="./shop_single_right.html">Shop - Right Sidebar<span class="caret-right"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="./recipe_detail-image.html">Recipe - Image</a></li>
                                                <li><a href="./recipe_detail-slider.html">Recipe - Gallery</a></li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./shop_cart.html">Shop - Cart</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="./shop_fullwidth.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Category<span class="caret"></span></a>
                               @include('home._category')
                        </li>


                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('fag')}}">Faq</a></li>
                        <li><a href="{{route('refrences')}}">Refrences</a></li>
                        <li class="dropdown">
                            <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false"><i class="fa fa-shopping-cart fsc pull-left"></i><span
                                    class="cart-number">3</span><span
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
                                <a class="css-pointer dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
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
                                <a href="{{route('login')}}" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Login<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('register')}}">Join</a></li>
                                    <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a></li>
                                </ul>

                            </li>
                        @endguest

                    </ul>
                </div>
                <!--/.search kısmı -->


            </div>
            <div class="col-md-2">
                <ul class="nav navbar-nav navbar-right">


                    <li class="dropdown">
                        <div class="side-widget">
                            <form action="{{route('getproduct')}}" method="post" class="search"
                                  style="margin-top: 10px; width: 98%; margin-left: 25px;">
                                @csrf
                                @livewire('search')

                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            @livewireScripts
                        </div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</nav>



