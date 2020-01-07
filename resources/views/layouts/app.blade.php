<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<head>
<title>Ngoc Studio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
 new WOW().init();
</script>
    <!-- Fonts
    ============================================ -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- CSS  -->

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('newcss/css/bootstrap.css')}}">


    <!-- font-awesome.min CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- font-icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('fonts/font-icon.css')}}">

    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('newcss/css/jquery-ui.css')}}">

    <!-- animate CSS
   ============================================ -->
    <link rel="stylesheet" href="{{asset('newcss/css/animate.min.css')}}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('newcss/css/style.css')}}">

    <!-- jquery CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('newcss/css/jquery.countdown.css')}}">
    <link rel="stylesheet" href="{{asset('newcss/css/jquery-ui.css')}}">

    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body class="home-one">

@include('components.header')

        @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 9999999999;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Thành công! </strong> {{\Session::get('success')}}
            </div>
        @endif

        @if (\Session::has('warning'))
            <div class="alert alert-warning alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 9999999999;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Xin lỗi! </strong> {{\Session::get('warning')}}
            </div>
        @endif

        @if (\Session::has('danger'))
            <div class="alert alert-danger alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 9999999999;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Thất bại! </strong> {{\Session::get('danger')}}
            </div>
        @endif

@yield('content')
@include('components.footer')
<!-- FOOTER END -->

<!-- JS -->

<!-- jquery-ui.min js
============================================ -->
<script src="{{asset('newcss/js/jquery-ui.min.js')}}"></script>

<!-- bootstrap js
============================================ -->
<script src="{{asset('newcss/js/bootstrap-3.1.1.min.js')}}"></script>

<!-- Nivo slider js
============================================ -->
<script src="{{asset('newcss/js/jquery.flexslider.js')}}" type="text/javascript"></script>
<script src="{{asset('newcss/js/jquery.wmuSlider.js')}}" type="text/javascript"></script>

<!-- classie js
============================================ -->
<script src="{{asset('newcss/js/classie.js')}}"></script>

<!-- imagezoom js
============================================ -->
<script src="{{asset('newcss/js/imagezoom.js')}}"></script>

<!-- jquery.min.js
============================================ -->
<script src="{{asset('newcss/js/jquery.min.js')}}"></script>

<!-- wow js
============================================ -->
<script src="{{asset('newcss/js/wow.min.js')}}"></script>

<!-- script js
============================================ -->
<script src="{{asset('newcss/js/script.js')}}"></script>

<!--unisearch js
--------------------------------------------->
<script src="{{asset('newcss/js/unisearch.js')}}"></script>

<!-- simpleCart.min js
============================================ -->
<script src="{{asset('newcss/js/simpleCart.js')}}"></script>
@yield('script')
</body>
</html>