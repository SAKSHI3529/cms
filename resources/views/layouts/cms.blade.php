<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
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
        @include('partials.footerscript')
    </body>
</html>