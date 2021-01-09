
<!-- Footer-->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h1>About us</h1>
                <p>Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc.Duis leo justo, condimentum at purus eu, posuere pretium tellus.</p>
                <a href="{{route('aboutus')}}">Read more &rarr;</a>
            </div>
            <div class="col-md-4  col-sm-6">
                <h1>Recent post</h1>
                <div class="footer-blog clearfix">
                    <a href="./blog_right_sidebar.html">
                        <img src="{{asset('assets')}}/restaurant/img/thumb8.png" class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">Hand picked ingredients for our best customers</p>
                        <p class="footer-blog-date">29 may 2015</p>
                    </a>
                </div>
                <div class="footer-blog clearfix last">
                    <a href="./blog_right_sidebar.html">
                        <img src="{{asset('assets')}}/restaurant/img/thumb9.png" class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">Daily special foods that you will going to love</p>
                        <p class="footer-blog-date">29 may 2015</p>
                    </a>
                </div>
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

