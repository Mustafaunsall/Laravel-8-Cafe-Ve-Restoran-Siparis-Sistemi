@extends('layouts.home')

@section('title', $data->title." Products List")
@section('description'){{ $data->description}}@endsection
@section('keywords',$data->keywords)
@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">{{$data->title}} Products</h2>
                    <p class="wow fadeInUp">Read our Products</p>
                </div>
            </div>
        </div>
    </section>



    <!-- menu-->
    <div class="shop-content">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="side-widget">
                        <h5>Our Food</h5>
                        <ul class="shop-cat">
                            @foreach($list as $s)
                                <li><a href="{{route('categoryproducts',['id'=>$s->id])}}">{{$s->title}} <i class="fa fa-caret-right"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                <div class="col-md-9">


                    <div class="shop-products">
                        <div class="row">
                            @foreach($datalist as $rs)
                                <div class="col-md-4 col-sm-6">

                                    <div class="product-info">

                                        <div class="product-img">
                                            <img src="{{Storage::url($rs->image)}}"
                                                 style="height: 250px;width: 250px;border-radius: 50px;"
                                                 alt=""/>
                                        </div>
                                        <h4>
                                            <a href="{{route('product',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                        </h4>
                                        <div class="rc-ratings">
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star active"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="product-price">{{$rs->price}} <i class="fa fa-turkish-lira"></i></div>
                                        <div class="shop-meta">
                                            <div class="pull-left">
                                                <form
                                                    action="{{route('user_shopcart_add',['id'=>$rs->id])}}"
                                                    method="post">
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

@endsection





