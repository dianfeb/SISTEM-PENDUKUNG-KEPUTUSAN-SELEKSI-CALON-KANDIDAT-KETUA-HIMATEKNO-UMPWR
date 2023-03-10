<?php foreach ($penilaian as $p) : ?>
    <div class="modal fade Penilaian<?= $p['id_nilai']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel2">Masukkan Penilaian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('nilai/penilaianAlternatif'); ?>" method="post">
                        <input type="hidden" name="id_nilai" value="<?= $p['id_nilai']; ?>">
                        <input type="hidden" name="id_alternatif" value="<?= $p['id_alternatif']; ?>">
                        <div class="form-group">
                            <label class="col-form-label">- Sudah mengikuti minimal 1 periode kepengurusan HIMATEKNO -</label>
                            <select class="form-control" id="C1" name="C1" value="<?= $a['C1']; ?>">
                            <option>- Masukkan Nilai-</option>
                                <option>Ya</option>
                                <option>Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">- Visi dan misi -</label>
                            <select class="form-control" id="C2" name="C2" value="<?= $a['C2']; ?>">
                            <option>- Masukan Nilai-</option>
                                <option>> 95</option>
                                <option>81 - 95</option>
                                <option>66 - 80</option>
                                <option>50 - 65</option>
                                <option>< 50</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">- Indeks Prestasi Komulatif (IPK) -</label>
                            <select class="form-control" id="C3" name="C3" value="<?= $a['C3']; ?>">
                            <option>- Masukkan Nilai-</option>
                                <option>> 3,70</option>
                                <option>3,51 - 3,70</option>
                                <option>3,26 - 3,50</option>
                                <option>3,00 - 3,25</option>
                                <option>< 3,00</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">- Penilaian dari Badan Pengurus Harian (BPH) -</label>
                            <select class="form-control" id="C4" name="C4" value="<?= $a['C4']; ?>">
                            <option>- Masukkan Nilai-</option>
                                <option>> 95</option>
                                <option>81 - 95</option>
                                <option>66 - 80</option>
                                <option>50 - 65</option>
                                <option>< 50</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">- Penilaian dari program studi -</label>
                            <select class="form-control" id="C5" name="C5" value="<?= $a['C5']; ?>">
                                <option>- Masukkan Nilai-</option>
                                <option>> 95</option>
                                <option>81 - 95</option>
                                <option>66 - 80</option>
                                <option>50 - 65</option>
                                <option>< 50</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">- Pengetahuan tentang permikomnas -</label>
                            <select class="form-control" id="C6" name="C6" value="<?= $a['C6']; ?>">
                                <option>- Masukkan Nilai-</option>
                                <option>> 95</option>
                                <option>81 - 95</option>
                                <option>66 - 80</option>
                                <option>50 - 65</option>
                                <option>< 50</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>