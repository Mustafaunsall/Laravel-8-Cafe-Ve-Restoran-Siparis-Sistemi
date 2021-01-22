@extends('layouts.home')

@section('title', 'My Order detail')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">My Orders Detail</h2>
                    <p class="wow fadeInUp"></p>
                </div>
            </div>
        </div>
    </section>



    <!-- Cart Table -->
    <section class="shop-content">
        <div class="container">
            <div class="row">
                <!--aside-->
                <aside class="col-md-2">
                    @include('home.usermenu')

                </aside>

                <div class="col-md-10">
                    <table class="cart-table table table-bordered">
                        <thead>
                        <tr>

                            <th>İmage</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Note</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datalist as $rs)
                            <tr>

                                <td>@if($rs->product->image)
                                    <a href="{{route('product',['id'=>$rs->product->id])}}"><img
                                            src="{{Storage::url($rs->product->image)}}" alt="" height="70"
                                            width="90"></a>
                                    @endif
                                </td>
                                <td><a href="{{route('product',['id'=>$rs->product->id])}}">{{$rs->product->title}}</a></td>
                                <td><span class="amount">{{$rs->product->price}} <i class="fa fa-turkish-lira"></i></span></td>
                                <td>{{$rs->quantity}}</td>
                                <td><span class="amount">{{$rs->amount}} <i class="fa fa-turkish-lira"></i></span></td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->note}}</td>


                            </tr>

                        @endforeach
                        </tbody>
                    </table>


                    <div class="cart_totals">
                        <div class="col-md-6 push-md-6 no-padding">
                            <h4 class="text-left">Cart Totals</h4>
                            <br>
                            <table class="table table-bordered col-md-6">
                                <tbody>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount">{{$rs->order->total}}  <i class="fa fa-turkish-lira"></i></span></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





