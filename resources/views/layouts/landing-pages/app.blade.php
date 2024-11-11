<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('admin-assets/css/style.min.css') }}" />

    {{--  summernote  --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/summernote/dist/summernote-lite.min.css') }}">
    {{--  select2  --}}
    <link rel="stylesheet" href="{{ asset('admin-assets/libs/select2/dist/css/select2.min.css') }}">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('layouts.landing-pages.topbar')

    <div class="page-wrapper p-0 overflow-hidden">
        {{--  content  --}}
        @yield('content')
    </div>

    @include('layouts.landing-pages.footer')
