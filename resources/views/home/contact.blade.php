@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.home')

@section('title','Contact-'.$setting->title)
@section('description'){{ $setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase wow fadeInDown">Contact</h2>
                    <p class="wow fadeInUp">Write Contact</p>
                </div>
            </div>
        </div>
    </section>



    <!-- menu-->
    <section class="main-content contact-content">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
            <div class="row">

                <div class="col-md-6 ">
                    <h3 class="text-left no-margin-top">Address Bilgileri</h3>
                    {!! $setting->contact !!}
                    <h3 class="text-left no-margin-top">Follow Us</h3>
                    <div class="contact-social">
                        <a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>


                <!-- form-->
                <div class="col-md-6">
                    <h3 class="text-left no-margin-top">İletişim Formu</h3>
                    <form class="contact-form" id="contactForm" action="php/contact.php" method="post">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" placeholder="Full Name" type="text" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Subject" type="text" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5"></textarea>
                        </div>
                        <button class="btn btn-default btn-lg btn-block" id="js-contact-btn">Send message</button>
                    </form>
                 </div>
            </div>
            </div>
        </div>
    </section>

@endsection





