@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<!-- Footer-->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h1>About us</h1>
                <p>{!!Str::words($setting->about, '25')!!}</p>
                <a href="{{route('aboutus')}}">Read more &rarr;</a>
            </div>
            <div class="col-md-4  col-sm-6">
                <h1>Recent post</h1>
                @php
                   $data=\App\Http\Controllers\HomeController::footerlastproduct();
                 @endphp
                @foreach($data as $rs)
                <div class="footer-blog clearfix">
                    <a href="{{route('product',['id'=>$rs->id])}}">
                        <img src="{{Storage::url($rs->image)}}" height="140" width="90" class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">{{$rs->title}}</p>
                    </a>
                    <div class="footer-address">
                        <p >{{$rs->description}}</p>
                    </div>
                        <p class="footer-blog-date">{{$rs->created_at}}</p>

                </div>
                @endforeach

            </div>

            <div class="col-md-4  col-sm-6">
                <h1>Reach us</h1>
                <div class="footer-social-icons">

                   @if($setting->facebook!=null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook-square"></i></a>@endif
                    @if($setting->instagram!=null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>@endif
                    @if($setting->twitter!=null)<a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>|@endif

                    <a href="https://github.com/Mustafaunsall" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://www.youtube.com/channel/UC0LNZL1e6bp_rmzPeLzSiKA" target="_blank"><i class="fa fa-youtube-play"></i></a>


                </div>
                <div class="footer-address">
                    <p><i class="fa fa-map-marker"></i>{{$setting->adress}}</p>
                    <p><i class="fa fa-phone"></i>{{$setting->phone}}</p>
                    <p><i class="fa fa-envelope-o"></i>{{$setting->email}}</p>
                    <p><i class="fa fa-fax"></i>{{$setting->fax}}</p>
                    <p><i class="fa fa-suitcase"></i>{{$setting->company}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer - Copyright -->
    <div class="footer-copyrights">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i>Designed with <i class="fa fa-heart primary-color"></i> by {{$setting->company}} </p>
                </div>
            </div>
        </div>
    </div>
</section>

