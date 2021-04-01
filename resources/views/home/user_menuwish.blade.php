
@extends('layouts.home')

@section('title', 'User Menuwish')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">User Menuwish</h2>
                    <p class="wow fadeInUp">Read your Menuwish</p>
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


                                   <h3>Recent Menuwish</h3>
                                   <br>
                                   <table class="cart-table account-table table table-bordered">
                                       <thead>
                                       <tr>
                                           <th>Id</th>
                                           <th>Name</th>
                                           <th>Tableno</th>
                                           <th>Phone</th>
                                           <th>Email</th>
                                           <th>Date</th>
                                           <th>Status</th>



                                       </tr>
                                       </thead>
                                       <tbody>
                                       @include('home.message')
                                       @foreach($datalist as $rs)
                                       <tr>
                                           <td>
                                              {{$rs->user_id}}
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
                                               {{$rs->created_at}}
                                           </td>
                                           <td>
                                               {{$rs->status}}
                                           </td>

                                       </tr>
                                       @endforeach

                                       </tbody>
                                   </table>



               </div>
           </div>
        </div>
    </section>
@endsection





