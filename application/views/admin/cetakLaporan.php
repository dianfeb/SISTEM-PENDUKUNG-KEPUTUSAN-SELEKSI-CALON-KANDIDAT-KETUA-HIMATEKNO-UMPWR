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
  <link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
 <div class="container">
 <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            <img src="<?= base_url('/assets/Logo HIMATEKNO HD.png'); ?>" style="width:28px" class="mb-2 ml-2" alt=""> HIMATEKNO
            <small class="float-right">Tanggal:<?= date('d/M/Y'); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <center>
        <h2>Hasil Seleksi Calon Kandidat Ketua HIMATEKNO</h2>
      </center>

      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-bordered  table-hover">
            <thead>
              <tr class="table-primary">
                <th>Nama</th>
                <th>Nilai Total</th>
                <th>Peringkat</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($rank as $r) : ?>
                <tr>
                  <!-- <td><?= $r['kode']; ?></td> -->
                  <td><?= $r['nama']; ?></td>
                  <td><?= $r['total']; ?></td>
                  <td><?= $i; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
 </div>
  <!-- ./wrapper -->

  <script type="text/javascript">
    window.addEventListener("load", window.print());
  </script>
</body>

</html>