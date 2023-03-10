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
                            <table id="tabelKriteria" class="table table-bordered  table-hover">
                                <thead>
                                    <tr class="table-primary">
                                        <!-- <th>No</th> -->
                                        <th>Kode Alternatif</th>
                                        <th>Nama Alternatif</th>
                                        <th>Total Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($matriks as $m) : ?>
                                        <tr>
                                            <!-- <td><?= $i; ?></td> -->
                                            <td><?= $m['kode_alternatif']; ?></td>
                                            <td><?= $m['nama']; ?></td>
                                            <!-- Proses Perhitungan tiap kriteria -->
                                            <?php
                                            $n1 = round($m['C1'] / $maxC1['C1'], 2) * $bobotC1['bobot'];
                                            $n2 = round($m['C2'] / $maxC2['C2'], 2) * $bobotC2['bobot'];
                                            $n3 = round($m['C3'] / $maxC3['C3'], 2) * $bobotC3['bobot'];
                                            $n4 = round($m['C4'] / $maxC4['C4'], 2) * $bobotC4['bobot'];
                                            $n5 = round($m['C5'] / $maxC5['C5'], 2) * $bobotC5['bobot'];
                                            $n6 = round($m['C6'] / $maxC6['C6'], 2) * $bobotC6['bobot'];
                                            ?>
                                            <?php
                                            $totalNilai = [$n1, $n2, $n3, $n4, $n5, $n6];
                                            $total = round(array_sum($totalNilai), 2);
                                            ?>
                                            <td><?= $total; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <a href="" data-toggle="modal" data-target="#Ranking" class="btn btn-primary mt-3">Tampilkan Ranking</a>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>