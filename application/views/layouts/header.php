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
                            <a href="<?= site_url('Dashboard') ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('alternatif') ?>" class="nav-link">Data Alternatif</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('kriteria') ?>" class="nav-link">Data Kriteria</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('nilai') ?>" class="nav-link">Penilaian</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('perhitungan/matriks') ?>" class="nav-link">Matriks Nilai</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= site_url('perhitungan/normalisasi') ?>" class="nav-link">Normalisasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('perhitungan/perankingan') ?>" class="nav-link">Perangkingan</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('admin/laporan') ?>" class="nav-link">Laporan</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="fas fa-fw fa-user"></i>
                                <span><?php echo $this->session->userdata('username'); ?></span>
                              
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                             
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('admin/logout'); ?>" class="dropdown-item" onclick="return confirm('Anda Akan Keluar');">
                                    <i class="fas fa-fw fa-sign-out-alt"></i> Keluar
                                </a>
                            </div>
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
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Halaman</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">