<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class=" card-header">
                        <h3 class="card-title"><?= $judul; ?> (Silahkan Inputkan Nilai)</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="mr-3">
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                        <div class="table-responsive">
                            <table id="tabelKriteria" class="table table-bordered  table-hover nowrap">
                                <thead>
                                    <tr class="table-primary">
                                        <th>No</th>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Alternatif</th>
                                        <?php foreach ($kriteria as $k) : ?>
                                            <th><?= $k['kode_kriteria']; ?></th>
                                        <?php endforeach; ?>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($penilaian as $n) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $n['kode_alternatif']; ?></td>
                                            <td><?= $n['nama']; ?></td>
                                            <td><?= $n['C1']; ?></td>
                                            <td><?= $n['C2']; ?></td>
                                            <td><?= $n['C3']; ?></td>
                                            <td><?= $n['C4']; ?></td>
                                            <td><?= $n['C5']; ?></td>
                                            <td><?= $n['C6']; ?></td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target=".Penilaian<?= $n['id_nilai']; ?>" class="badge badge-primary"><i class="fas fa-fw fa-edit"></i> Penilaian</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>