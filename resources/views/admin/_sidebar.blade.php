<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"> </div>
<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{asset('assets')}}/admin/images/img.jpg" alt="..." class="img-circle profile_img">
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
                <a href="{{route('admin_category')}}"><i class="fa fa-desktop"></i> Category </a></li>
            <li>
                <a href="{{route('admin_product')}}"><i class="fa fa-shopping-cart"></i> Product </a>
            </li>
            <li>
                <a href="{{route('admin_message')}} "><i class="fa fa-envelope"></i>Contact Message </a>
            </li>
            <li>
                <a href="{{route('admin_review')}} "><i class="fa fa-star-half-empty"></i>Reviews </a>
            </li>
            <li>
                <a href="{{route('admin_setting')}} "><i class="fa fa-cog"></i> Settings </a>
            </li>

        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">

            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="page_403.html">403 Error</a></li>
                    <li><a href="page_404.html">404 Error</a></li>
                    <li><a href="page_500.html">500 Error</a></li>
                    <li><a href="plain_page.html">Plain Page</a></li>
                    <li><a href="login.html">Login Page</a></li>
                    <li><a href="pricing_tables.html">Pricing Tables</a></li>
                </ul>
            </li>

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
