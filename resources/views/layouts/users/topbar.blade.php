
 
 <!-- LOADER -->
  <div id="preloader">
      <img class="preloader" src="{{ asset('users-assets/images/loader.gif') }}" alt="">
  </div><!-- end loader -->
  <!-- END LOADER -->

  <div id="wrapper">
      <!-- BEGIN # MODAL LOGIN -->
      {{-- Top bar --}}
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
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
      <header class="header" style="top: 0; z-index: 1000;">
        <div class="container">
            <nav class="navbar navbar-default yamm" style="background-color: rgb(255, 255, 255);margin-top: 15px;">
                <div class="navbar-header" style="background-color: rgb(0, 118, 47);">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Background hijau hanya untuk area logo -->
                    <div class="logo-normal" style="background-color: rgb(0, 118, 47); padding: 10px 20px;">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('users-assets/images/logo-smk-putih.png') }}" alt=""
                                style="width: 250px; height: auto;">
                        </a>
                    </div>
                </div>
    
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('dashboard') }}" style="color: rgb(0, 0, 0) !important;">Home</a></li>
                        <li><a href="page-contact.html" style="color: rgb(0, 0, 0) !important;">Contact</a></li>
                        <li><a href="{{ route('login') }}" style="color: rgb(0, 0, 0) !important;">Login</a></li>
                        <li><a href="{{ route('register') }}" style="color: rgb(0, 0, 0) !important;">Register</a></li>
                        <li class="iconitem">
                            <a href="#" data-toggle="modal" data-target="#login-modal" id="shour"
                                style="color: rgb(0, 0, 0) !important;">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    
      @yield('content')

      @include('layouts.users.footer')


      {{-- script Src --}}
      <script>
          document.addEventListener('keydown', function(event) {
              if (event.ctrlKey && event.key === 'h') {
                  event.preventDefault();
                  document.getElementById('shour').click(); // Mengklik elemen untuk membuka modal
              }
          });
      </script>
      
