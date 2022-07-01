<header class="topbar">
     <nav class="navbar top-navbar navbar-expand-md navbar-light">

          <!-- Logo -->
          <div class="navbar-header">
          <a class="navbar-brand" href="{{ route('home') }}">
               <!-- Logo icon -->
               <b>
                    <h1 style="font-family: Radon Deco" class="mt-3">S</h1>
               </b>
               <!--End Logo icon -->

               <!-- Logo text -->
               <span class="text-white">
                    <strong>SIM</strong> <small>Kosan</small> 
               </span>
               <!-- End Logo text -->
          </a>
          </div>
          <!-- End Logo -->

          <div class="navbar-collapse">

          <!-- toggle and nav items -->
          <ul class="navbar-nav mr-auto mt-md-0">
               <!-- This is  -->
               <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                         href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
               <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                         href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
               <!-- ============================================================== -->
          </ul>
          <!-- End toggle and nav items -->

          <!-- User profile and search -->
          <ul class="navbar-nav my-lg-0">

               <!-- Profile -->
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/users/1.jpg') }}" alt="user"
                              class="profile-pic" /></a>
                    <div class="dropdown-menu dropdown-menu-right scale-up">
                         <ul class="dropdown-user">
                              <li>
                              <div class="dw-user-box">
                                   <div class="u-text">
                                        <h4>Steave Anwar</h4>
                                   </div>
                              </div>
                              </li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                              <li><a href="#"><i class="ti-settings"></i> App Setting</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                         </ul>
                    </div>
               </li>
               <!-- End Profile -->
          </ul>
          </div>
     </nav>
</header>