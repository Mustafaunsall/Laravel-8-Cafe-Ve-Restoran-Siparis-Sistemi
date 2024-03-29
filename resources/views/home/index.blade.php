@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

    <!-- Preloder-->
    <div class="preloder animated">
        <div class="scoket">
            <img src="{{asset('assets')}}/restaurant/img/preloader.svg" alt=""/>
        </div>
    </div>

    <!-- Home page-->
    <section class="home">
        <div class="overlay"></div>

        <div class="tittle-block">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('assets')}}/restaurant/img/logo.png" alt="logo">
                </a>
            </div>
            <h1>DELICIOUS Food</h1>
            <h2>Tomato is a delicious restaurant </h2>
        </div>
        <div class="scroll-down hidden-xs">
            <a href="#special">
                <img src="{{asset('assets')}}/restaurant/img/arrow-down.png" alt="down-arrow">
            </a>
        </div>
    </section>

    @include('home._slider')
    <div class="clearfix"></div>
    <!-- daily-->
    <section class="menu menu2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Daily</h1>
                    </div>
                </div>
            </div>
            <div class="food-menu wow fadeInUp">

                <div class="row menu-items4">


                    @foreach($daily as $rs)
                        @php
                            $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                            $avrgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                        @endphp
                        <div class="menu-item4 col-sm-3 col-xs-12 breakfast">
                            <div class="menu-info">
                                <a href="{{route('product',['id'=>$rs->id])}}">
                                    <div class="gallery-item" data-mfp-src="{{Storage::url($rs->image)}}">
                                        <img src="{{Storage::url($rs->image)}} " style="height: 150px; width: 500px;"
                                             class="img-responsive"
                                             alt=""/>
                                        <div class="gi-overlay">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>

                                    <div class="menu4-overlay ">
                                        <h4>{{$rs->title}}<small>({{$countreview}}) Reviews </small></h4>
                                        <p><br>{{$rs->description}}</p>
                                        <span class="price">{{$rs->price}} <i class="fa fa-turkish-lira"></i></span>
                                        <div style="  position: relative;text-align: center;color: #ffffff;">

                                            <a class="btn btn-default" style="border-radius: 60%"
                                               href="{{route('product',['id'=>$rs->id])}}" role="button"><i
                                                    class="fa fa-search-plus">Detail</i></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
    </section>

    <div class="clearfix"></div>
    <!--Picked -->
    <section class="subscribe">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header wow fadeInDown">
                    <h2>Picked For You</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="shop-content">
                    <div class="container">

                        <div class="row">

                            <aside class="col-md-3">

                                <div class="side-widget">
                                    <h5>New Arrivals</h5>
                                    <ul class="recent-products">
                                        @foreach($last as $rs)

                                            <a href="{{route('product',['id'=>$rs->id])}}">
                                                <li>
                                                    <img src="{{Storage::url($rs->image)}}" style="border-radius: 50px"
                                                         alt=""/>
                                                    <div class="rpp-info">
                                                        <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}"
                                                              method="post">
                                                            @csrf
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button type="submit">
                                                                <i class="fa fa-shopping-cart"></i>{{$rs->title}}
                                                            </button>
                                                        </form>
                                                        <div class="rc-ratings">
                                                            <span class="fa fa-star active"></span>
                                                            <span class="fa fa-star active"></span>
                                                            <span class="fa fa-star active"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <span>{{$rs->price}} <i class="fa fa-turkish-lira"></i></span>
                                                    </div>
                                                </li>
                                            </a>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>

                            <div class="shop-content">
                                <div class="col-md-9">

                                    <div class="shop-products">
                                        <div class="row">

                                            @foreach($picked as $rs)
                                                @php
                                                    $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                                    $avrgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                                                @endphp
                                                <div class="col-md-4 col-sm-6">

                                                    <div class="product-info">

                                                        <div class="product-img">
                                                            <img src="{{Storage::url($rs->image)}}"
                                                                 style="height: 250px;width: 250px;border-radius: 50px;"
                                                                 alt=""/>
                                                        </div>
                                                        <h4>
                                                            <a href="{{route('product',['id'=>$rs->id])}}">{{$rs->title}}
                                                                <small>({{$countreview}}) Reviews </small>
                                                            </a>
                                                        </h4>
                                                        <div class="rc-ratings">
                                                            <span class="fa fa-star active"></span>
                                                            <span class="fa fa-star active"></span>
                                                            <span class="fa fa-star active"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            ({{$avrgrev}})
                                                        </div>
                                                        <div class="product-price">{{$rs->price}} <i
                                                                class="fa fa-turkish-lira"></i></div>
                                                        <div class="shop-meta">
                                                            <div class="pull-left">
                                                                <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="quantity" value="1">

                                                                    <button type="submit">
                                                                        <i class="fa fa-shopping-cart"></i>Add to cart
                                                                    </button>

                                                                </form>
                                                            </div>
                                                            <div class="pull-right">
                                                                <button><i class="fa fa-heart-o"></i> Wishlist</button>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
    <!-- daily of day-->
    <section class="menu menu2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header wow fadeInDown">
                        <h1>Our Special<small>Best Selling Products</small></h1>
                    </div>
                </div>
            </div>
            <div class="food-menu wow fadeInUp">
                <div class="row menu-items2">
                    @foreach($last as $rs)
                        <div class="menu-item2 col-sm-4 col-xs-12 starter dinner desserts">
                            <div class="menu-info">
                                <img src="{{Storage::url($rs->image)}}" style="height: 200px; width: 350px;"
                                     class="img-responsive" alt=""/>
                                <a href="{{route('product',['id'=>$rs->id])}}">
                                    <div class="menu2-overlay">
                                        <h4>{{$rs->title}}</h4>
                                        <p>{{$rs->description}}</p>
                                        <span class="price">{{$rs->price}} <i class="fa fa-turkish-lira"></i></span>
                                    </div>
                                </a>
                            </div>
                            <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="quantity" value="1">

                                <button type="submit" class="menu-more">+</button>
                            </form>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>




@endsection





