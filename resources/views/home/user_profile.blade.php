
@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">User Profile</h2>
                    <p class="wow fadeInUp">Read your Profile</p>
                </div>
            </div>
        </div>
    </section>
    <div class="shop-content">
        <div class="container">
           <div class="row">
               <!--aside-->
               <aside class="col-md-2">
                    @include('home.usermenu')

               </aside>
               <!-- /aside-->

               <!-- main-->
               <div class="col-md-10">
                  @include('profile.show')

               </div>
           </div>
        </div>
    </div>
@endsection





