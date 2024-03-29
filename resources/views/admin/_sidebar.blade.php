<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"> </div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">

           <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="....." class="img-circle profile_img">

    </div>
    <div class="profile_info">
        @auth
        <span>Welcome,</span>
        <h2><a href="#">{{ Auth::user()->name}}</a> </h2>
        <a data-toggle="tooltip"  class="fa fa-power-off" style="font-size: large; background-color: #afd9ee;border-radius: 3px; " data-placement="top" title="Logout" href="{{ route('logout') }}">

        </a>

        @endauth
    </div>
</div>
<!-- /menu profile quick info -->

<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li>
                <a href="{{route('admin_home')}}"><i class="fa fa-home"></i> Home </a>
            </li>
            <li>
                <a href="{{route('admin_category')}}"><i class="fa fa-delicious"></i> Category </a></li>
            <li>
                <a href="{{route('admin_product')}}"><i class="fa fa-shopping-cart"></i> Product </a>
            </li>
            <li>
                <a href="{{route('admin_message')}} "><i class="fa fa-envelope"></i>Contact Message </a>
            </li>
            <li>
                <a href="{{route('admin_review')}} "><i class="fa fa-comment"></i>Reviews </a>
            </li>
            <li>
                <a href="{{route('admin_faq')}} "><i class="fa fa-question-circle"></i>FAQ </a>
            </li>
            <li>
                <a href="{{route('admin_setting')}} "><i class="fa fa-cog"></i> Settings </a>
            </li>
            <li>
                <a href="{{route('admin_users')}} "><i class="fa fa-users"></i> Users </a>
            </li>
            <li><a><i class="fa fa-shopping-bag"></i> Orders <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin_orders')}}">All Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'accepted'])}}">Accepted Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'preparing'])}}">Preparing Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a></li>
                    <li><a href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a></li>

                </ul>
            </li>
            <li><a><i class="glyphicon glyphicon-list-alt"></i> Menu Wish <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin_menuwish')}}">All Wish</a></li>
                    <li><a href="{{route('admin_menuwish_list',['status'=>'New'])}}">New Wish</a></li>
                    <li><a href="{{route('admin_menuwish_list',['status'=>'Accepted'])}}">Accepted Wish</a></li>
                    <li><a href="{{route('admin_menuwish_list',['status'=>'Canceled'])}}">Canceled Wish</a></li>
                </ul>
            </li>

        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">


            <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>


        </ul>
    </div>

</div>
<!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="{{route('admin_setting')}}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
