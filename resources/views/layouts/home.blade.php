
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="author" content="Mustafa Ünsal">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- SEO -->
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets')}}/restaurant/img/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->

    <link rel="stylesheet" href="{{asset('assets')}}/restaurant/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/restaurant/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/restaurant/css/plugin.css">
    <link rel="stylesheet" href="{{asset('assets')}}/restaurant/css/main.css">

    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/restaurant/js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
    <![endif]-->
    @yield('headercss')
    @yield('headerjs')

</head>

<body >
<div class="body">

    <div class="main-wrapper">

@include('home._header')

@section('content')
    içerik alanı

@show

@include('home._footer')

    </div>

</div>
@include('home._switcher-js')
@yield('footerjs')
</body>
</html>

