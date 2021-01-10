
@extends('layouts.home')

@section('title', $data->title)
@section('description'){{ $data->description}}@endsection
@section('keywords',$data->keywords)
@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Product Details</h2>
                    <p class="wow fadeInUp">Read product details</p>
                </div>
            </div>
        </div>
    </section>
    <br>

        <ul  style="text-align: center" class="shop-cat">
            <li><i class="fa fa-caret-right"></i> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}} > {{$data->title}} </li>


        </ul>



    <!-- product detail-->
    <section class="shop-content">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="single-shop-carousel">
                        <div>
                            <img class="img-responsive" src="{{Storage::url($data->image)}} "style="height: 350px" alt="">
                        </div>

                        @foreach($list as $rs)
                        <div>
                            <img class="img-responsive" src="{{Storage::url($rs->image)}} " style="height: 350px" alt="">
                        </div>
                        @endforeach

                    </div>
                    <div class="single-shop-carousel-nav">

                        @foreach($list as $rs)
                            <div>
                                <img class="img-responsive" src="{{Storage::url($rs->image)}} " alt="">
                            </div>
                        @endforeach
                            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 shop-single-info">
                    <div class="shop-single-title">
                        <h3 class="text-left">{{$data->title}}</h3>
                    </div>
                    <div class="shop-single-price">
                        <div class="ssp pull-left">{{$data->price}} <i class="fa fa-turkish-lira"></i> <span>{{$data->price*1.2}} <i class="fa fa-turkish-lira"></i></span></div>
                        <div class="rc-ratings pull-right">
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star active"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>{{$data->description}}.</p>
                    <div class="quantity">
                        <input type="number" placeholder="1">
                        <a href="./shop_checkout.html" class="btn btn-success left-space-sm pull-right">Buy Now</a>
                        <a href="{{route('addtocart',['id'=>$data->id])}}" class="btn btn-default pull-right">Add to Cart</a>
                    </div>
                </div>
            </div>


            <div class="clearfix"></div>
            <div class="tab-style3">
                <!-- Nav Tabs -->
                <div class="align-center mb-40 mb-xs-30">
                    <ul class="nav nav-tabs tpl-minimal-tabs animate">
                        <li class="active">
                            <a aria-expanded="true" href="#mini-one" data-toggle="tab">{{$data->title}} Detail</a>
                        </li>
                        <li class="">
                            <a aria-expanded="false" href="#mini-two" data-toggle="tab">Review (20)</a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav Tabs -->
                <!-- Tab panes -->
                <div style="height: auto;" class="tab-content tpl-minimal-tabs-cont align-center section-text">
                    <div style="" class="tab-pane fade active in" id="mini-one">
                        <p>{!! $data->detail !!}</p>
                    </div>
                    <div style="" class="tab-pane fade" id="mini-two">
                        <div class="col-md-12">
                            <h4 class="text-left">3 Reviews for Food</h4>
                            <br>
                            <ul class="comment-list">
                                <li>
                                    <a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/xtra/1.jpg" alt="" height="50" width="50"></a>
                                    <div class="comment-meta">
                                        <a href="./index.html">John Doe</a>
                                        <span>
                                                <em>Feb 17, 2015, at 11:34</em>
                                                </span>
                                    </div>
                                    <div class="rating2">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                                    </p>
                                </li>
                                <li>
                                    <a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/xtra/2.jpg" alt="" height="50" width="50"></a>
                                    <div class="comment-meta">
                                        <a href="./index.html">Rebecca</a>
                                        <span>
                                                <em>March 08, 2015, at 03:34</em>
                                                </span>
                                    </div>
                                    <div class="rating2">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                                    </p>
                                </li>
                                <li>
                                    <a class="pull-left" href="./index.html"><img class="comment-avatar" src="img/xtra/1.jpg" alt="" height="50" width="50"></a>
                                    <div class="comment-meta">
                                        <a href="./index.html">Antony Doe</a>
                                        <span>
                                                <em>June 11, 2015, at 07:34</em>
                                                </span>
                                    </div>
                                    <div class="rating2">
                                        <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor sit amet urna nec tempor. Nullam pellentesque in orci in luctus. Sed convallis tempor tellus a faucibus. Suspendisse et quam eu velit commodo tempus.
                                    </p>
                                </li>
                            </ul>
                            <br>
                            <h4 class="text-left">Add a review</h4>
                            <br>
                            <form id="form" class="review-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="name" class="input-md form-control" placeholder="Name *" maxlength="100" required="" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="email" class="input-md form-control" placeholder="Email *" maxlength="100" required="" type="email">
                                    </div>
                                </div>
                                <span>Your Ratings</span>
                                <div class="clearfix"></div>
                                <div class="rating3">
                                    <span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
                                </div>
                                <div class="clearfix space20"></div>
                                <textarea name="text" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="400"></textarea>
                                <br>
                                <button type="submit" class="btn btn-default">
                                    Submit Review
                                </button>
                            </form>
                        </div>
                        <div class="clearfix space30"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            </div>
        </div>
    </section>

@endsection





