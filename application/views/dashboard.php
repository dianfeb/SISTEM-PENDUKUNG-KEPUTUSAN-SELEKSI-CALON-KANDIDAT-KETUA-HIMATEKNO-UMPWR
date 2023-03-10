<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Dahsboard</h3>

        <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div> -->
    </div>
    <div class="card-body text-center">
        <img src="<?= base_url('/assets/Logo HIMATEKNO HD.png') ?>" class="img-fluid" alt="Responsive image" width="20%">
        <div class="form-group text-center" style="padding-top: 20px;">
            <h4>Selamat Datang, <b><?php echo $this->session->userdata('username'); ?></b> </h4>
            <h5>di Sistem Pendukung Keputusan Pemilihan Calon Kandidat Ketua <b> HIMATEKNO UMPWR</b></h5>
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer-->
</div>
<!-- /.card -->