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

    <ul style="text-align: center" class="shop-cat">
        <li>
            <i class="fa fa-caret-right"></i> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}
            > {{$data->title}} </li>


    </ul>



    <!-- product detail-->
    <section class="shop-content">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="single-shop-carousel">
                        <div>
                            <img class="img-responsive" src="{{Storage::url($data->image)}} " style="height: 350px"
                                 alt="">
                        </div>

                        @foreach($list as $rs)
                            <div>
                                <img class="img-responsive" src="{{Storage::url($rs->image)}} " style="height: 350px"
                                     alt="">
                            </div>
                        @endforeach

                    </div>
                    <div class="single-shop-carousel-nav">

                        @foreach($list as $rs)
                            <div>
                                <img class="img-responsive" src="{{Storage::url($rs->image)}} " alt="">
                            </div>
                        @endforeach
                        <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next"
                                role="button" style="display: block;">Next
                        </button>

                    </div>
                    <div class="clearfix"></div>
                </div>
                @php
                    $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                  $avrgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
                @endphp

                <div class="col-md-6 shop-single-info">
                    <div class="shop-single-title">
                        <h3 class="text-left">{{$data->title}} </h3>
                        <a href="#mini-two"><small class="text-left">({{$countreview}}) Reviews <br> avgrate({{$avrgrev}})</small></a>
                    </div>
                    <div class="shop-single-price">
                        <div class="ssp pull-left">{{$data->price}} <i class="fa fa-turkish-lira"></i> <span>{{$data->price*1.2}} <i
                                    class="fa fa-turkish-lira"></i></span></div>

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
                        <a href="{{route('addtocart',['id'=>$data->id])}}" class="btn btn-default pull-right">Add to
                            Cart</a>
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
                            <a aria-expanded="false" href="#mini-two" data-toggle="tab">Review ({{$countreview}})</a>
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
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-left"> Reviews for Food</h4>
                                <br>
                                <div class="comment">
                                    <ul class="comment-list">
                                        @foreach($reviews as $rs)
                                            <li>

                                                <a class="pull-left"><img class="comment-avatar"
                                                                          src="{{Storage::url($rs->user->profile_photo_path)}}"
                                                                          alt=""
                                                                          height="50" width="50"
                                                                          style="border-radius: 10px "></a>
                                                <div class="comment-meta">
                                                    <a>{{$rs->user->name}}</a>
                                                    <span>
                                                <em>{{$rs->created_at}}</em>
                                                </span>
                                                </div>
                                                <div class="rc-ratings pull-right">
                                                    <span class="fa fa-star @if($rs->rate>=1) active @endif"></span>
                                                    <span class="fa fa-star @if($rs->rate>=2) active @endif"></span>
                                                    <span class="fa fa-star @if($rs->rate>=3) active @endif"></span>
                                                    <span class="fa fa-star @if($rs->rate>=4) active @endif"></span>
                                                    <span class="fa fa-star @if($rs->rate>=5) active @endif"></span>
                                                </div>

                                                <p>
                                                    <strong>{{$rs->subject}}</strong>
                                                    <br>
                                                    {{$rs->review}}
                                                </p>


                                            </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <h4 class="text-left">Add a review</h4>
                                <br>

                                @livewire('review',['id'=>$data->id])

                            </div>
                        </div>
                        <div class="clearfix space30"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>


    </section>

@endsection





