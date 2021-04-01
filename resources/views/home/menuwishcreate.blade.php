@extends('layouts.home')

@section('title', 'Menu Wish')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Menu Wish</h2>
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
                        <form action="{{route('menuwishcreate')}}" method="post">
                            <div class="col-md-12">
                                <div class="billing-details">
                                    <h3 class="text-left">Menu Wish </h3>

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
                                            <input class="form-control" required="required" type="number" name="table_no" min="1" max="100">
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <label>Email</label>
                                    <input class="form-control"  name="email" value="{{Auth::user()->email}}" type="text" >
                                    <div class="clearfix space20"></div>
                                    <label>Phone</label>
                                    <input class="form-control" name="phone" placeholder="" value="{{Auth::user()->phone}}" type="text" >
                                    <div class="clearfix space20"></div>

                                    <div class="text-center top-space-lg">
                                        <button type="submit" class="btn btn-default btn-lg">Menu Wish Now</button>
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





