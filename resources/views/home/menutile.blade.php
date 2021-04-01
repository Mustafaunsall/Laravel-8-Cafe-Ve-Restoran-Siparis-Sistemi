@extends('layouts.home')

@section('title', 'Menus')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Menu tile</h2>
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
                                    <h1>Tile</h1>
                                </div>
                            </div>
                        </div>
                        <div class="food-menu wow fadeInUp">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="menu-tags3">
                                        <span data-filter="*" class="tagsort3-active">All</span>
                                        @foreach($datalist as $rs)
                                            <span data-filter=".{{$rs->title}}">{{$rs->title}}</span>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="row menu-items3">


                            @foreach($data as $a) <!-- product -->

                            @foreach($datalist as $rs) <!-- category -->

                                @if($rs->title == $a->category->title)
                                    <div class="menu-item3 col-sm-6 col-xs-12 {{$rs->title}}">

                                        <a href="{{route('product',['id'=>$a->id])}}">
                                            <img src="{{Storage::url($a->image)}}" style="height: 70px;" class="img-responsive" alt=""/>

                                            <div class="menu-wrapper">

                                                <h4>{{$a->title}}</h4>

                                                <span class="price">{{$a->price}} <i
                                                        class="fa fa-turkish-lira"></i></span>
                                                <div class="dotted-bg"></div>
                                                <p>{{$a->description}}</p>

                                            </div>
                                        </a>


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





