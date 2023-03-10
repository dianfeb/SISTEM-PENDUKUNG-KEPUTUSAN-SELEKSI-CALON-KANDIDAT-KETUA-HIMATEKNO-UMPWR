<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="icon" type="image/png" href="<?= base_url('/assets/Logo HIMATEKNO HD.png'); ?>">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/bootstrap.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/css/font-awesome.min.css'); ?>">
    <!-- Font Awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/plugins/fontawesome-free/css/all.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('vendor') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/toast-master/css/jquery.toast.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/summernote/dist/summernote.css">

    <link href="<?php echo base_url('/assets/vendor/css/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet" />

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url('vendor'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


    <style>

    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark" style="background-color: #15396A;">
            <div class="container">
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="<?= base_url('/assets/Logo HIMATEKNO HD.png'); ?>" style="width:30px" class="mt-1 ml-2" alt="">
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('dashboard') ?>" class="nav-link"><b>HIMATEKNO</b></a>

                        </li>


                    </ul>

                </div>

            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">


                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body text-center">
                            <img src="<?= base_url('/assets/Logo HIMATEKNO HD.png') ?>" class="img-fluid" alt="Responsive image" width="20%">
                            <div class="form-group text-center" style="padding-top: 20px;">
                                <h4>Selamat Datang</h4>
                                <h5>di Sistem Pendukung Keputusan Pemilihan Calon Kandidat Ketua <b> HIMATEKNO UMPWR</b></h5>
                            </div>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" href="#" role="button">Login</a>
                            <a class="btn btn-success" href="<?= site_url('home/hasil') ?>" role="button">Hasil</a>
                        </div>

                        <!-- ++SAMPEL START++ -->
                        <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Silahkan Login Terlebih Dahulu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('admin/login')?>" method="post" >
                                            <div class="form-group">
                                                <label class="col-form-label">Username</label>
                                                <input type="text" id="username" name="username" required=" required" class="form-control ">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input type="password" id="password" name="password" required="required" class="form-control ">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ++SAMPEL END++ -->
                        <!-- /.card-body -->
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>HIMATEKNO</b>
            </div>
            <strong>Copyright &copy; 2022
        </footer>


    </div>

    <!-- ./wrapper -->
    <!-- DataTables -->



    <!-- jQuery -->

    <script src="<?php echo base_url('/assets/vendor/js/jquery.js'); ?>"></script>
    <!-- Bootstrap -->


    <script src="<?php echo base_url('/assets/vendor/js/bootstrap.bundle.js'); ?>"></script>


    <!-- jQuery custom content scroller -->
    <script src="<?php echo base_url('/assets/vendor/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>

    <!-- jQuery Ck editor -->
    <script src="<?php echo base_url('/assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('/assets/vendor/js/custom.js'); ?>"></script>

    <!-- DataTables -->
    <script src="<?= base_url('vendor'); ?>/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('vendor'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>




</body>

</html>