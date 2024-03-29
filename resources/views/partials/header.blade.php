 <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{url('assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/my-img/logo-sm.jpg" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="{{url('assets/images/my-img/Frame20.png')}}" alt="" height="50" width="150">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                </div>

                <div class="d-flex">

                     
            

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{url('assets/images/my-img/pngwing.com.png')}}"
                                alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="{{url('/profile')}}"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle mr-1"></i> Profile</a>
                            {{-- <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 text-muted align-middle mr-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings font-size-17 text-muted align-middle mr-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle mr-1"></i> Lock screen</a>
                            <div class="dropdown-divider"></div> --}}
                            <form action="{{url('/logout')}}" method="post">
                                @csrf
                                <button class="btn btn-link dropdown-item" type="submit"><i class="mdi mdi-power font-size-17 text-muted align-middle mr-1 text-danger"></i> Logout</button>
                            </form>
                            {{-- <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power font-size-17 text-muted align-middle mr-1 text-danger"></i> Logout</a> --}}
                        </div>
                    </div>

                  
            
                </div>
            </div>
        </header>