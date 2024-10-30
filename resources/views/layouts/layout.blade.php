<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>@yield('title', 'PESTUN DASHBOARD')</title>

    <!-- Custom fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    
    <!-- Custom styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/img/logo_without_background.png') }}" rel="icon">
</head>

<body id="page-top">

    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                @include('layouts.topbar')

                <!-- Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    @include('layouts.logout-modal')

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
