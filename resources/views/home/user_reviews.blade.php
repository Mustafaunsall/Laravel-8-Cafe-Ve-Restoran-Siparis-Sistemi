
@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">User Reviews</h2>
                    <p class="wow fadeInUp">Read your Reviews</p>
                </div>
            </div>
        </div>
    </section>
    <section class="shop-content">
        <div class="container">
            <div class="row">
               <!--aside-->
               <aside class="col-md-2">
                    @include('home.usermenu')

               </aside>
               <!-- /aside-->

               <!-- main-->
               <div class="col-md-10">


                                   <h3>Recent Reviews</h3>
                                   <br>
                                   <table class="cart-table account-table table table-bordered">
                                       <thead>
                                       <tr>
                                           <th>Id</th>
                                           <th>Product</th>
                                           <th>Subject</th>
                                           <th>Review</th>
                                           <th>Rate</th>
                                           <th>Status</th>
                                           <th>Date</th>
                                           <th>Actions</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       @include('home.message')
                                       @foreach($datalist as $rs)
                                       <tr>
                                           <td>
                                              {{$rs->id}}
                                           </td>
                                           <td>
                                               <a href="{{route('product',['id'=>$rs->product->id])}}">{{$rs->product->title}}</a>
                                           </td>
                                           <td>
                                               {{$rs->subject}}
                                           </td>
                                           <td>
                                               {{$rs->review}}
                                           </td>
                                           <td>
                                               {{$rs->rate}}
                                           </td>
                                           <td>
                                               {{$rs->status}}
                                           </td>
                                           <td>
                                               {{$rs->created_at}}
                                           </td>
                                           <td><a href="{{route('user_reviews_delete',['id'=>$rs->id])}}" onclick="return confirm('delete are you sure')"><img style="height: 20px; width: 20px" src="{{ asset('assets/admin/images') }}/sil.png"></a></td>
                                       </tr>
                                       @endforeach

                                       </tbody>
                                   </table>



               </div>
           </div>
        </div>
    </section>
@endsection





