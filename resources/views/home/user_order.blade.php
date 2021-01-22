
@extends('layouts.home')

@section('title', 'User Order')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">User Orders</h2>
                    <p class="wow fadeInUp">Read your Orders</p>
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


                                   <h3>Recent Order</h3>
                                   <br>
                                   <table class="cart-table account-table table table-bordered">
                                       <thead>
                                       <tr>
                                           <th>Id</th>
                                           <th>Name</th>
                                           <th>Tableno</th>
                                           <th>Phone</th>
                                           <th>Email</th>
                                           <th>Address</th>
                                           <th>Total</th>
                                           <th>Date</th>
                                           <th>Status</th>
                                           <th>Detail</th>

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
                                               {{$rs->name}}
                                           </td>
                                           <td>
                                               {{$rs->table_no}}
                                           </td>
                                           <td>
                                               {{$rs->phone}}
                                           </td>
                                           <td>
                                               {{$rs->email}}
                                           </td>
                                           <td>
                                               {{$rs->address}}
                                           </td>
                                           <td>
                                               {{$rs->total}}
                                           </td>
                                           <td>
                                               {{$rs->created_at}}
                                           </td>
                                           <td>
                                               {{$rs->status}}
                                           </td>
                                           <td><a href="{{route('user_order_show',['id'=>$rs->id])}}" ><img style="height: 35px; width: 35px" src="{{ asset('assets/admin/images') }}/search.png"></a> </td>

                                       </tr>
                                       @endforeach

                                       </tbody>
                                   </table>



               </div>
           </div>
        </div>
    </section>
@endsection





