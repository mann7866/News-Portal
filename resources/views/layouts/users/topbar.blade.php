
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{asset('users-assets/images/loader.gif')}}" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        {{-- Top bar --}}
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?"
                                    required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <header class="header">
            <!-- END # MODAL LOGIN -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('users-assets/images/logo-smk-putih.png') }}" alt="" style="width: 250px; height: auto;">
                            </a>
                        </div>                        
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown"
                                    class="dropdown-toggle active">Mega Menu <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4>Course Pages</h4>
                                                    <ul>
                                                        <li><a href="#">Courses Name 01</a></li>
                                                        <li><a href="#">Courses Name 02</a></li>
                                                        <li><a href="#">Courses Name 03</a></li>
                                                        <li><a href="#">Courses Name 04</a></li>
                                                        <li><a href="#">Courses Name 05</a></li>
                                                        <li><a href="#">Courses Name 06</a></li>
                                                        <li><a href="#">Courses Name 07</a></li>
                                                        <li><a href="#">Courses Name 08</a></li>
                                                        <li><a href="#">Courses Name 09</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="menu-widget text-center">
                                                        <div class="image-wrap entry">
                                                            <img src="{{asset('assets/upload/course_01.jpg')}}" alt=""
                                                                class="img-responsive">
                                                            <div class="magnifier">
                                                                <a href="#" title=""><i
                                                                        class="flaticon-add"></i></a>
                                                            </div>
                                                        </div><!-- end image-wrap -->
                                                        <h5><a href="#">Learning Bootstrap Framework</a></h5>
                                                        <small>$22.00</small>
                                                        <a href="#" class="menu-button">View Course</a>
                                                    </div><!-- end widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="">Events</a></li>
                            <li class="dropdown hassubmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">Shop <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="shop.html">Shop Layout</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown hassubmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false">Blog <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="blog.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-1.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-2.html">Blog Grid Sidebar</a></li>
                                    <li><a href="blog-3.html">Blog Grid Fullwidth</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i
                                        class="fa fa-search"></i></a></li>
                            <li class="iconitem"><a class="shopicon" href="shop-cart.html"><i
                                        class="fa fa-shopping-basket"></i> &nbsp;(0)</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        @yield('content')
        
        @include('layouts.users.footer')

    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="{{asset('users-assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('users-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('users-assets/js/carousel.js')}}"></script>
    <script src="{{asset('users-assets/js/animate.js')}}"></script>
    <script src="{{asset('users-assets/js/custom.js')}}"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="{{asset('users-assets/js/videobg.js')}}"></script>

</body>
</html>
