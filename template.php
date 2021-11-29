<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: /klinik/login");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="template/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="template/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="template/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Hi, <?= $_SESSION['nama'] ?></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider">Log</div>
                        <a class="nav-link" href="/klinik/controller/auth/logout.php">
                            Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">KLINIK</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <?php if ($_SESSION['type'] == 'admin') { ?>
                            <li class="nav-item">
                                <a href="/klinik/laporan" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Laporan
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'admin') { ?>
                            <li class="nav-item">
                                <a href="/klinik/user" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        User
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'admin') { ?>
                            <li class="nav-item">
                                <a href="/klinik/usertype" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Usertype
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'admin') { ?>
                            <li class="nav-item">
                                <a href="/klinik/wilayah" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Wilayah
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'pegawai') { ?>
                            <li class="nav-item">
                                <a href="/klinik/obat" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Obat
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'pegawai') { ?>
                            <li class="nav-item">
                                <a href="/klinik/tindakan" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Tindakan
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'pasien') { ?>
                            <li class="nav-item">
                                <a href="/klinik/periksa" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Periksa
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'pegawai') { ?>
                            <li class="nav-item">
                                <a href="/klinik/periksalist" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Periksa
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($_SESSION['type'] == 'pasien') { ?>
                            <li class="nav-item">
                                <a href="/klinik/transaksi" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Transaksi
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Main row -->
                    <!-- <div class="row pt-2 pl-2"> -->


                    <?php require "route.php"; ?>

                    <!-- </div> -->
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="template/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="template/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="template/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="template/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="template/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="template/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="template/plugins/moment/moment.min.js"></script>
    <script src="template/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="template/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="template/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="template/dist/js/demo.js"></script>
</body>

</html>