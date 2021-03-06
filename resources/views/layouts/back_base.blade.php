<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/bo/images/favicon.png')}}">
    <title>Admin - Edictum</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/bo/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    @stack('add_css')
    <!-- Custom CSS -->
    <link href="{{ asset('assets/bo/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('assets/bo/css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{ asset('assets/bo/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /></svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        
        @include('b.partials.header')

        @include('b.partials.leftSidebar')
        
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')

                @include('b.partials.rightSidebar')
            </div>
            <footer class="footer">
                © {{date('Y')}} Edictum por Víctor Sabido
            </footer>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/bo/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/bo/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{ asset('assets/bo/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/bo/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/bo/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/bo/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/bo/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/bo/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/bo/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

        @stack('add_js')
        @stack('add_scripts')
</body>

</html>
        