@extends('layouts.home')

@section('title', 'My Shopcart')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">My Shopcart</h2>
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

                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $total=0;
                        @endphp
                        @foreach($datalist as $rs)
                            <tr>

                                <td>@if($rs->product->image)
                                    <a href="{{route('product',['id'=>$rs->product->id])}}"><img
                                            src="{{Storage::url($rs->product->image)}}" alt="" height="70"
                                            width="90"></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('product',['id'=>$rs->product->id])}}">{{$rs->product->title}}</a>
                                </td>
                                <td>
                                    <span class="amount">{{$rs->product->price}} <i class="fa fa-turkish-lira"></i></span>
                                </td>
                                <td>
                                    <form action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="post">
                                        @csrf
                                        <div class="quantity"><input  type="number" name="quantity" value="{{$rs->quantity}}" min="1"  max="10" onchange="this.form.submit()"> </div>
                                    </form>
                                </td>
                                <td>
                                    <span class="amount">{{($rs->product->price)*($rs->quantity)}} <i class="fa fa-turkish-lira"></i></span>
                                </td>
                                <td>
                                    <a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}" onclick="return confirm('delete are you sure')" class="remove"><i
                                            class="fa fa-times"></i></a>
                                </td>

                            </tr>
                            @php
                                $total+=($rs->product->price)*($rs->quantity);
                            @endphp
                        @endforeach
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="col-md-6">
                                    <div class="coupon form-group">
                                        <label>Coupon:</label>
                                        <br>
                                        <input placeholder="Coupon code" class="form-control" type="text">
                                        <button type="submit">Apply</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cart-btn">
                                        <form action="{{route('user_order_add')}}" method="post">
                                            @csrf
                                            <input type="hidden"  name="total" value="{{$total}}">
                                        <button class="btn btn-success" type="submit">Checkout
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
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
                                    <td><span class="amount">{{$total}}  <i class="fa fa-turkish-lira"></i></span></td>
                                </tr>
                                <tr>
                                    <th>Shipping and Handling</th>
                                    <td>
                                        Free Shipping
                                    </td>
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td><strong><span class="amount">{{$total}} <i class="fa fa-turkish-lira"></i></span></strong></td>
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





