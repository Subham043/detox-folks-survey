<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover">


<head>

        <meta charset="utf-8" />
        <title>Detox Folks- Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/logo-sm.png') }}">

        <!-- Layout config Js -->
        <script src="{{ asset('admin/js/layout.js') }}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/iziToast.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{ asset('admin/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        @yield('css')

        <style>
            .invalid-message{
                color:red;
            }
        </style>


    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('includes.admin.header')

            @include('includes.admin.menu')

             <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('content')

                @include('includes.admin.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->



        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/just-validate.production.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/iziToast.min.js') }}"></script>
        <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('admin/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
        {{-- <script src="{{ asset('admin/js/plugins.js') }}"></script> --}}




        <!-- App js -->
        {{-- <script src="{{ asset('admin/js/app.js') }}"></script> --}}
        <script src="{{ asset('admin/js/main.js') }}"></script>
        <script type="text/javascript">
            @if (session('success_status'))

                iziToast.success({
                    title: 'Success',
                    message: '{{ Session::get('success_status') }}',
                    position: 'topRight',
                    timeout:6000
                });

            @endif
            @if (session('error_status'))

                iziToast.error({
                    title: 'Error',
                    message: '{{ Session::get('error_status') }}',
                    position: 'topRight',
                    timeout:6000
                });

            @endif

        </script>
         @yield('javascript')
    </body>


<!-- Mirrored from themesbrand.com/velzon/html/modern/dashboard-projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Apr 2022 07:00:13 GMT -->
</html>
