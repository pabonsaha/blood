@include('admin.body.header')
    <!-- BEGIN: Header-->
@include('admin.body.nav')
    
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('admin.body.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('admin')
    
    <!-- END: Content-->

 @include('admin.body.footer')