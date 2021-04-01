@extends('layouts.home')

@section('title', 'Menus')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Menu Overlay</h2>
                    <p class="wow fadeInUp">Read our Menus</p>
                </div>
            </div>
        </div>
    </section>



    <!-- menu-->
    <section class="menu space60" id="menu">
        <div class="container">
            <div class="row">

                <!-- menu-->
                <section class="menu menu2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-header wow fadeInDown">
                                    <h1>Menu</h1>
                                </div>
                            </div>
                        </div>
                        <div class="food-menu wow fadeInUp">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="menu-tags2">
                                        <span data-filter="*" class="tagsort2-active">All</span>
                                        @foreach($datalist as $rs)
                                            <span data-filter=".{{$rs->title}}">{{$rs->title}}</span>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="row menu-items2">


                              @foreach($data as $a) <!-- product -->
                                  @php
                                     $countreview=\App\Http\Controllers\HomeController::countreview($a->id);
                                  @endphp
                                @foreach($datalist as $rs) <!-- category -->

                                        @if($rs->title == $a->category->title)
                                            <div class="menu-item2 col-sm-4 col-xs-12 {{$rs->title}}">


                                                <div class="menu-info">
                                                    <img src="{{Storage::url($a->image)}}"
                                                         style="height: 200px; width: 350px;"
                                                         class="img-responsive" alt=""/>
                                                    <a href="{{route('product',['id'=>$a->id])}}">
                                                        <div class="menu2-overlay">
                                                            <h4>{{$a->title}}</h4>
                                                            <p>{{$a->description}}<small>({{$countreview}}) Reviews </small></p>
                                                            <span class="price">{{$a->price}} <i
                                                                    class="fa fa-turkish-lira"></i></span>
                                                        </div>
                                                    </a>
                                                </div>

                                                <form action="{{route('user_shopcart_add',['id'=>$a->id])}}"
                                                      method="post">
                                                    @csrf
                                                    <input type="hidden" name="quantity" value="1">

                                                    <button type="submit" class="menu-more">+</button>
                                                </form>
                                            </div>
                                        @endif




                                @endforeach



                                @endforeach

                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>

@endsection





