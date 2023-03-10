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
                            <?= form_error('nim', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>


                        </div>
                        <table id="tabelKriteria" class="table table-bordered  table-hover">
                            <!-- <caption>Jumlah Maksimal Bobot: 10 </caption> -->
                            <!-- <caption>Jumlah Bobot Saat Ini : <?= $jumlah; ?> </caption> -->
                            <thead>
                                <tr class="table-primary">
                                    <th>No</th>
                                    <th>Kode Kriteria</th>
                                    <th>Kriteria</th>
                                    <th>Atribut</th>
                                    <th>Bobot</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kriteria as $k) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $k['kode_kriteria']; ?></td>
                                        <td><?= $k['nama_kriteria']; ?></td>
                                        <td><?= $k['atribut']; ?></td>
                                        <td><?= $k['bobot']; ?></td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#modal-edit<?= $k['id_kriteria']; ?>" class="badge badge-success"><i class="fas fa-fw fa-edit"></i></a>
                                            <a href="<?= base_url('kriteria/hapus/') . $k['id_kriteria']; ?>" onclick="return confirm('Data Kriteria Akan Dihapus');" class="badge badge-danger"><i class="fas fa-fw fa-trash-alt"></i></a>

                                        </td>
                                    </tr>

                                    <!-- ++SAMPEL START++ -->
                                    <div class="modal fade" id="modal-edit<?= $k['id_kriteria']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Kriteria</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?= form_open_multipart('kriteria/update'); ?>
                                                    <input type="hidden" name="id_kriteria" value="<?= $k['id_kriteria']; ?>">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="kode">Kode Kriteria</label>
                                                                <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="<?= $k['kode_kriteria']; ?>" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nama_kriteria">Nama Kriteria</label>
                                                                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="<?= $k['nama_kriteria']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Atribut</label>
                                                                <select class="form-control" name="atribut" id="atribut">
                                                                    <option value="<?php echo $k['id_kriteria']; ?>"><?php echo $k['atribut']; ?></option>
                                                                    <option value="cost">Cost</option>
                                                                    <option value="benefit">Benefit</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="bobot">Bobot Kriteria</label>
                                                                <input type="text" class="form-control" id="bobot" name="bobot" value="<?= $k['bobot']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ++SAMPEL END++ -->
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class=" card-header">
                        <h3 class="card-title">Tambah Data Kriteria</h3>
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('kriteria/tambah'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode">Kode Kriteria</label>
                                    <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="<?= $kode; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" placeholder="Kriteria">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Atribut</label>
                                    <select class="form-control" name="atribut" id="atribut">
                                        <option value="">-pilih-</option>
                                        <option value="cost">Cost</option>
                                        <option value="benefit">Benefit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bobot">Bobot Kriteria</label>
                                    <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Bobot">
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script src="text/javascript">
    $(document).ready(function() {
        $('#dtHorizontalExample').DataTable({
            "scrollX": true
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script> -->