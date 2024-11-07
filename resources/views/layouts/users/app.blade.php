<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js " lang="en"> <!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>News Portal</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico" type="image/x-icon')}}" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="{{ asset('users-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('users-assets/style.css') }}">

    <!--[if lt IE 9]>
  <script src="js/vendor/html5shiv.min.js"></script>
  <script src="js/vendor/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    @include('layouts.users.topbar')
    <script src="{{asset('users-assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('users-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('users-assets/js/carousel.js')}}"></script>
    <script src="{{asset('users-assets/js/animate.js')}}"></script>
    <script src="{{asset('users-assets/js/custom.js')}}"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="{{asset('users-assets/js/videobg.js')}}"></script>

</body>
</html>