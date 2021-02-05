
<!--Use Menü-->
<div class="side-widget">
    <h5>Profile</h5>
    <ul class="shop-cat">
        <li><a href="{{route('myprofile')}}">My  Profile <i class="fa fa-caret-right"></i></a></li>
        <li><a href="{{route('myreviews')}}">My review <i class="fa fa-caret-right"></i></a></li>
        <li><a href="{{route('user_orders')}}">My Orders <i class="fa fa-caret-right"></i></a></li>
        <li><a href="{{route('user_shopcart')}}">My Shopcart <i class="fa fa-caret-right"></i></a></li>
        <li><a href="{{route('logout')}}">Logout <i class="fa fa-caret-right"></i></a></li>
        <!--{{$userRoles = Auth::user()->roles->pluck('name')}}-->
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}">Admin Panel <i class="fa fa-caret-right"></i></a></li>
        @endif

        <li >
            <!--{{$diz=Auth::user()->roles->pluck('name')}}

                -->
                Role
                @foreach($diz as $rs)
                    <div style="color: red">{{$rs}}@if(count($diz)>1) ,  @endif</div>
                @endforeach
            </li>

    </ul>
</div>
