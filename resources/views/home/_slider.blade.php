<!-- Today's special page-->
<section class="special" id="special">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header wow fadeInDown">
                    <h1 class="white">Products<small>A little about us and a breif history of how we started.</small></h1>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp">
            <div class="col-md-offset-1 col-md-10">
                <div class="flexslider special-slider">

                        <ul class="slides">
                            @php
                                $i=0;
                            @endphp
                            @foreach($slider as $rs)
                                @php
                                $i+=1;
                                @endphp
                            <li>
                                <div class="slider-img" @if($i==1)active @endif>
                                    <img src="{{Storage::url($rs->image)}}" style="width: 360px;height: 400px;" alt="" />
                                <br>
                                    <h1>{{$rs->price}}<i class="fa fa-turkish-lira"></i></h1>
                                </div>
                                <div class="slider-content">
                                    <div class="page-header">
                                        <h1>{{$rs->title}}<small>{{$rs->description}}.</small></h1>
                                    </div>
                                    <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <a class="btn btn-default" href="{{route('product',['id'=>$rs->id])}}" role="button">Order now detail</a>
                                    <a class="btn btn-secondary" href="{{route('addtocart',['id'=>$rs->id])}}" role="button">{{$rs->price}}<i class="fa fa-turkish-lira"></i>-Add to cart</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>



                        <div class="direction-nav hidden-sm">
                            <div class="next">
                                <a><img src="{{asset('assets')}}/restaurant/img/right-arrow.png" alt="" /></a>
                            </div>
                            <div class="prev">
                                <a><img src="{{asset('assets')}}/restaurant/img/left-arrow.png" alt="" /></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
