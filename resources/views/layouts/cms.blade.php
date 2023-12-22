<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.headerscript')
    

</head>

<body data-sidebar="dark">

    @include('partials.header')
   @include('partials.sidebar')
        
        

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                
                    @yield('content')


                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->
        </div>
            
            
</body>
 

@include('partials.footerscript')
</html>