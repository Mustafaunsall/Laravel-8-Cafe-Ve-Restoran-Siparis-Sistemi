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
                        <img src="{{asset('assets')}}/restaurant/img/nav-logo.png" style="width: 100px;height: 25px"
                             alt="nav-logo">
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
                                            <a href="./shop_single_right.html">Shop - Right Sidebar<span
                                                    class="caret-right"></span></a>
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
                               aria-expanded="false" href="{{route('user_shopcart')}}"><i
                                    class="fa fa-shopping-cart fsc pull-left"></i><span
                                    class="cart-number">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span><span
                                    class="caret"></span></a>
                            <div class="cart-content dropdown-menu">
                                <div class="cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>

                                @php
                                    $data=\App\Http\Controllers\ShopcartController::shopcart();
                                @endphp
                                @foreach($data as $rs)
                                    <div class="cart-items">
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-image">
                                                <a href="{{route('product',['id'=>$rs->product->id])}}"><img
                                                        src="{{Storage::url($rs->product->image)}}"
                                                        alt="Breakfast with coffee" height="30" width="30"></a>
                                            </div>

                                            <div class="cart-item-desc">
                                                <a href="{{route('product',['id'=>$rs->product->id])}}">{{$rs->product->title}}</a>
                                                <span class="cart-item-price"><i class="fa fa-turkish-lira"></i>{{$rs->product->price}}</span>
                                                <span class="cart-item-quantity">x{{$rs->quantity}}</span>
                                                <a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}"
                                                   onclick="return confirm('delete are you sure')">
                                                    <i class="fa fa-times ci-close"></i>
                                                </a>
                                            </div>

                                        </div>

                                    </div>


                                @endforeach

                                @php
                                    $data=\App\Http\Controllers\ShopcartController::shopcart();

                                     $total=0;
                                    foreach ($data as $rs){

                                       $total=$total+($rs->quantity)*($rs->product->price);
                                    }
                                @endphp
                                <div class="cart-action clearfix">
                                    <span class="pull-left checkout-price">{{$total}}<i class="fa fa-turkish-lira"></i></span>
                                    <a class="btn btn-default pull-right" href="{{route('user_shopcart')}}">View
                                        Cart</a>
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
                                        <h4>{{ Auth::user()->name}}
                                            <!--{{$diz=Auth::user()->roles->pluck('name')}}

                                            -->
                                            (
                                            @foreach($diz as $rs)
                                                {{$rs}}@if(count($diz)>1) ,  @endif
                                            @endforeach
                                            )
                                        </h4>
                                    </div>
                                    <div class="cart-items">
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-desc">
                                                <h4><a class="dropdown-item" href="{{ route('myprofile') }}"><i
                                                            class="fa fa-user"></i> My Account</a></h4>
                                            </div>
                                        </div>
                                        <div class="cart-item clearfix">
                                            <div class="cart-item-desc">
                                                <h4><a class="dropdown-item" href="{{ route('myreviews') }}"><i
                                                            class="fa fa-comment"></i> My Reviews</a></h4>
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
                        @section('footerjs') <!--diğer yerlerde bu scripte ihtiyaç var bunu  kullanmak için-->
                            @livewireScripts
                            @endsection
                        </div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</nav>



