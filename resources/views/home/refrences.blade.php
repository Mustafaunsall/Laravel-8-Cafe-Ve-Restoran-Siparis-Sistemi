@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.home')

@section('title','Refrences-'.$setting->title)
@section('description'){{ $setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Refrences</h2>
                    <p class="wow fadeInUp">Read Refrences</p>
                </div>
            </div>
        </div>
    </section>



    <!-- menu-->
    <section class="menu space60" id="menu">
        <div class="container">
            <div class="row">


             {!! $setting->references !!}

            </div>
        </div>
    </section>

@endsection





