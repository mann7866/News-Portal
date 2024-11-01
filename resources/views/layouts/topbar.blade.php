 <!-- Topbar Start -->
 <div class="navbar-custom">
     <ul class="list-unstyled topnav-menu float-right mb-0">

         <li class="d-none d-sm-block">
             <form class="app-search">
                 <div class="app-search-box">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search...">
                         <div class="input-group-append">
                             <button class="btn" type="submit">
                                 <i class="fe-search"></i>
                             </button>
                         </div>
                     </div>
                 </div>
             </form>
         </li>

         <li class="dropdown notification-list">
             <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                 role="button" aria-haspopup="false" aria-expanded="false">
                 <img src="{{ asset('admin-assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                 <span class="pro-user-name ml-1">
                     Admin<i class="mdi mdi-chevron-down"></i>
                 </span>
             </a>
             <div class="dropdown-menu dropdown-menu-right profile-dropdown ">


                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                     <i class="fe-user"></i>
                     <span>My Account</span>
                 </a>

                 <div class="dropdown-divider"></div>

                 <!-- Logout Button -->
                 <a href="" class="dropdown-item notify-item"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     <i class="fe-log-out"></i>
                     <span>Logout</span>
                 </a>

                 <!-- Logout Form -->
                 <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                     @csrf
                 </form>

             </div>
         </li>

     </ul>

     <!-- LOGO -->
     <div class="logo-box">
         <a href="/dashboard" class="logo text-center">
             <span class="logo-lg">
                 <img src="{{ asset('admin-assets/images/logo-light.png') }}" alt="" height="24">
                 <!-- <span class="logo-lg-text-light">Upvex</span> -->
             </span>
             <span class="logo-sm">
                 <!-- <span class="logo-sm-text-dark">X</span> -->
                 <img src="{{ asset('admin-assets/images/logo-sm.png') }}" alt="" height="28">
             </span>
         </a>
     </div>

     <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
         <li>
             <button class="button-menu-mobile waves-effect">
                 <span></span>
                 <span></span>
                 <span></span>
             </button>
         </li>

         <li class="dropdown d-none d-lg-block">
             <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button"
                 aria-haspopup="false" aria-expanded="false">
                 Reports
                 <i class="mdi mdi-chevron-down"></i>
             </a>
             <div class="dropdown-menu">
                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item">
                     Finance Report
                 </a>

                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item">
                     Monthly Report
                 </a>

                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item">
                     Revenue Report
                 </a>

                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item">
                     Settings
                 </a>

                 <!-- item-->
                 <a href="javascript:void(0);" class="dropdown-item">
                     Help & Support
                 </a>

             </div>
         </li>
     </ul>
 </div>
 <!-- end Topbar -->
