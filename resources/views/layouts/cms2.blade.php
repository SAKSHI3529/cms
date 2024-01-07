<!DOCTYPE html lang="en">
<head>
    
    @include('partials.headerscript2')
    
    
    
      <!-- ======= Header ======= -->
</head>
<body class="index-page scrolled" data-bs-spy="scroll" data-bs-target="#navmenu" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-delay="0">
    
    @include('partials.header2')
     
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                @include('flash::message')
                    @yield('content')
                <!-- end main content-->
            </div>
            <!-- END layout-wrapper -->
        </div>
        @include('partials.footer2')  
        @include('partials.footerscript2')
        @yield('pagescript')
  
    
    </body>
</html>


    