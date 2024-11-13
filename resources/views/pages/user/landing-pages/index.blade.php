<!DOCTYPE html>
<html lang="en">

<head>
    <title>News Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="landing-page/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="landing-page/vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="landing-page/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="landing-page/vendors/aos/css/aos.css">
    <link rel="stylesheet" href="landing-page/css/style.min.css">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
@include('pages/user/landing-pages.header')

@include('pages/user/landing-pages.banner')
    <div class="content-wrapper">
        <div class="container">
@include('pages/user/landing-pages.news')

@include('pages/user/landing-pages.content')
        </div>
    </div>
    @include('layouts.users.footer')
    </div>
    <script src="landing-page/vendors/jquery/jquery.min.js"></script>
    <script src="landing-page/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="landing-page/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="landing-page/vendors/aos/js/aos.js"></script>
    <script src="landing-page/js/landingpage.js"></script>
</body>

</html>
