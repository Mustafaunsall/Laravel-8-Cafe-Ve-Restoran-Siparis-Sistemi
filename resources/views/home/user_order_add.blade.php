@extends('layouts.home')

@section('title', 'Order Product')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Order</h2>
                    <p class="wow fadeInUp"></p>
                </div>
            </div>
        </div>
    </section>



    <!-- Checkout Form -->
    <section class="shop-content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <form action="{{route('user_order_store')}}" method="post">
                            <div class="col-md-6">
                                <div class="billing-details">
                                    <h3 class="text-left">Order Details</h3>

                                    <br>

                                    @csrf
                                    <div class="clearfix space20"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name </label>
                                            <input class="form-control" name="name" placeholder=""
                                                   value="{{Auth::user()->name}}" type="text">
                                        </div>
                                        <div class="col-md-6">
                                            <label>TableNo</label>
                                            <input class="form-control" type="number" name="table_no" min="1" max="50">
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <label>Email</label>
                                    <input class="form-control" name="email" placeholder=""
                                           value="{{Auth::user()->email}}" type="text">
                                    <div class="clearfix space20"></div>
                                    <label>Phone</label>
                                    <input class="form-control" name="phone" placeholder=""
                                           value="{{Auth::user()->phone}}" type="text">
                                    <div class="clearfix space20"></div>
                                    <label>Address </label>
                                    <input class="form-control" name="address" placeholder="Street address"
                                           value="{{Auth::user()->adress}}" type="text">
                                    <div class="clearfix space20"></div>


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billing-details">


                                    <h4 class="text-left">Your order</h4>
                                    <br>
                                    <table class="table table-bordered extra-padding">
                                        <tbody>
                                        <tr>
                                            <th>Order Total</th>
                                            <input class="form-control" type="hidden" name="total" value="{{$total}}">


                                            <td><strong><span class="amount">{{$total}}<i
                                                            class="fa fa-turkish-lira"></i></span></strong></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <h4 class="text-left">Payment Detail</h4>
                                    <br>
                                    <div class="payment-method">
                                        <div class="row">
                                            <label>Cardname</label>
                                            <input class="form-control" name="cardname" placeholder=""
                                                   value="{{Auth::user()->name}}" type="text">
                                            <div class="clearfix space20"></div>
                                            <label>Cardnumber</label>
                                            <input class="form-control" name="cardnumber" placeholder="" value=""
                                                   type="text">
                                            <div class="clearfix space20"></div>
                                            <label>Adress</label>
                                            <input class="form-control" name="adress" placeholder="Valid Dates mm/yy"
                                                   value="" type="text">
                                            <div class="clearfix space20"></div>
                                            <label>Key</label>
                                            <input class="form-control" name="key" placeholder="secret number" value=""
                                                   type="text">
                                            <div class="clearfix space20"></div>


                                        </div>

                                        <div class="text-center top-space-lg">
                                            <button type="submit" class="btn btn-default btn-lg">Order Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection





