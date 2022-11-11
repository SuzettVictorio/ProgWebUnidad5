<!doctype html>
<html lang="en">

    <head> 
        @include('layouts.head')
    </head>
    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include ('layouts.navbar')

            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.sidebar')
            <!-- Left Sidebar End -->

            
        </div>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
        <div class="main-content">
           @include('layouts.bread')
           @yield('content')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('layouts.scripts')
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        @include('layouts.footer')
        

    </body>

</html>
