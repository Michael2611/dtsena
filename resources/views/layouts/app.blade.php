<?php
$url = url()->current();
$rutaActual = parse_url($url, PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DTSENA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

    @if ($rutaActual != '/login')
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    @endif

</head>

<body
    class="{{ $rutaActual == '/login' ? 'hold-transition login-page' : 'hold-transition sidebar-mini layout-fixed' }}">

    @if ($rutaActual != '/login')
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Ayuda</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link text-center">
                    <span class="brand-text font-weight-light">DTSENA</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Michael Rodriguez</a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Dispositivos
                                        <span class="right badge badge-info">Add</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        UI Elements
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/UI/general.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>General</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/icons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Icons</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/buttons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Buttons</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/sliders.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Sliders</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/modals.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Modals & Alerts</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/navbar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Navbar & Tabs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/timeline.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Timeline</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/ribbons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Ribbons</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
    @endif

    @yield('content')
    <!-- /.login-box -->

    @if ($rutaActual != '/login')
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">Michael Rodriguez</a>.</strong>
            Todos los derechos reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        </div>

        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- ChartJS -->
        <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/demo.js') }}"></script>
    @endif

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>

</html>
