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
                            <table id="tabelMatriks" class="table table-bordered  table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <th>No</th>
                                        <th>Kode Alternatif</th>
                                        <th>Nama Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($matriks as $m) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $m['kode_alternatif']; ?></td>
                                            <td><?= $m['nama']; ?></td>
                                            <td><?= $m['C1']; ?></td>
                                            <td><?= $m['C2']; ?></td>
                                            <td><?= $m['C3']; ?></td>
                                            <td><?= $m['C4']; ?></td>
                                            <td><?= $m['C5']; ?></td>
                                            <td><?= $m['C6']; ?></td>
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