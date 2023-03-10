<!-- Modal Tambah Pengguna-->
<?php foreach ($matriks as $m) : ?>
    <div class="modal fade" id="Ranking" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> -->
                    <h5 class="modal-title" id="myModalLabel2">Perankingan</h5>
                </div>
                <?= form_open_multipart('perhitungan/hasilAkhir'); ?>
                <?php foreach ($matriks as $m) : ?>
                    <?php
                    $m["kode_alternatif"];
                    $m["nama"];
                    // Proses Perhitungan
                    $n1 = round($m['C1'] / $maxC1['C1'], 2) * $bobotC1['bobot'];
                    $n2 = round($m['C2'] / $maxC2['C2'], 2) * $bobotC2['bobot'];
                    $n3 = round($m['C3'] / $maxC3['C3'], 2) * $bobotC3['bobot'];
                    $n4 = round($m['C4'] / $maxC4['C4'], 2) * $bobotC4['bobot'];
                    $n5 = round($m['C5'] / $maxC5['C5'], 2) * $bobotC5['bobot'];
                    $n6 = round($m['C6'] / $maxC6['C6'], 2) * $bobotC6['bobot'];
                    ?>
                    <?php
                    $totalNilai = [$n1, $n2, $n3, $n4, $n5, $n6];
                    $total = round(array_sum($totalNilai), 1);
                    ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode" name="kode[]" value="<?= $m['kode_alternatif']; ?>" required="required" readonly />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama[]" value="<?= $m['nama']; ?>" required="required" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="total" name="total[]" value="<?= $total; ?>" required="required" readonly />
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-round btn-primary">Rangking</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>