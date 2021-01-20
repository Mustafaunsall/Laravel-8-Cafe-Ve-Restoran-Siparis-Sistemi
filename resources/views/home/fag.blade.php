
@extends('layouts.home')
@section('title', 'Frequently Asked Question')
@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">FAQ</h2>
                    <p class="wow fadeInUp"></p>
                </div>
            </div>
        </div>
    </section>



    <!-- menu-->
    <section class="menu space60">
        <div class="container">
            <div class="row">


                <!-- Tabs accordion -->
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>FAQ</h2>
                    </div>
                    <!--{{$i=1}}-->
                    @foreach($datalist as $rs)
                        @if($i==1)
                        <div class="panel-group" id="accordion-e1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title active">

                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1"
                                           href="#{{$i}}">
                                            {{$rs->question}}
                                            <span class="fa fa-minus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="{{$i}}" class="panel-collapse collapse in ">
                                    <div class="panel-body">
                                        <p>{!! $rs->answer!!}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- {{$i=$i+1}}-->
                            @continue($i==2)
                        @endif

                            <div class="panel-group" id="accordion-e1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">

                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-e1"
                                               href="#{{$i}}">
                                                {{$rs->question}}
                                                <span class="fa fa-minus"></span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="{{$i}}" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>{!! $rs->answer!!}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       <!-- {{$i=$i+1}}-->
                    @endforeach

                </div>


            </div>
        </div>
    </section>

@endsection


