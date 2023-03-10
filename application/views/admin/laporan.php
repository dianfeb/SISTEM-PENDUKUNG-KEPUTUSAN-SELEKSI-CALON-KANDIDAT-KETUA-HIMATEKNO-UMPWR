<!-- Content Wrapper. Contains page content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class=" card-header">
            <h3 class="card-title"><?= $judul; ?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="mr-3">
              <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
              <table id="tabelLaporan" class="table table-bordered  table-hover nowrap">
                <thead>
                  <tr class="table-primary">

                    <!-- <th>Kode</th> -->
                    <th>Nama</th>
                    <th>Total Nilai</th>
                    <th>Peringkat</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
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
              <div class="col mt-3">
                <a href="<?= base_url('admin/cetakLaporan'); ?>" class="btn btn-primary"><i class="fas fa-print"> Cetak Laporan</i></a>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div>
      </div>
    </div>
</section>
<!-- /.content-wrapper -->