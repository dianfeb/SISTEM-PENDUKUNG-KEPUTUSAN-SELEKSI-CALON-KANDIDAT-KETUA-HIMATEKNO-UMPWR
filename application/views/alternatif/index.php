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
                        <table id="tabelAlternatif" class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-primary">
                                    <th width=" 5%">No</th>
                                    <th>Kode Alternatif</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($alternatif as $a) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $a['kode_alternatif']; ?></td>
                                        <!-- <td><?php echo $row->nim; ?></td> -->
                                        <td><?= $a['nim']; ?></td>
                                        <td><?= $a['nama']; ?></td>
                                        <td><?= $a['jenis_kelamin']; ?></td>
                                        <td><?= $a['kelas']; ?></td>
                                        <td><?= $a['telepon']; ?></td>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#modal-edit<?= $a['id_alternatif']; ?>" class="badge badge-success"><i class="fas fa-fw fa-edit"></i></a>
                                            <a href="<?= base_url('alternatif/hapus/') . $a['id_alternatif']; ?>" onclick="return confirm('Data Alternatif Akan Dihapus');" class="badge badge-danger"><i class="fas fa-fw fa-trash-alt"></i></a>

                                        </td>
                                    </tr>
                                    
                                    <!-- ++SAMPEL START++ -->
                                    <div class="modal fade" id="modal-edit<?= $a['id_alternatif']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Alternatif</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?= form_open_multipart('alternatif/update'); ?>
                                                    <input type="hidden" name="id_alternatif" value="<?= $a['id_alternatif']; ?>">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Kode Alternatif</label>
                                                                <input type="text" id="kode" name="kode" class="form-control" value="<?= $a['kode_alternatif']; ?>" readonly>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nomor Induk Mahasiswa</label>
                                                                <input type="text" id="nim" name="nim" class="form-control" value="<?= $a['nim']; ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Nama Lengkap</label>
                                                                <input type="text" id="nama" name="nama" class="form-control" value="<?= $a['nama']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Kelas</label>
                                                                <input type="text" id="kelas" name="kelas" class="form-control" value="<?= $a['kelas']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">Jenis Kelamin</label>
                                                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                                    <?php foreach ($alternatif as $a) : ?>
                                                                        <option value="<?php echo $a['id_alternatif']; ?>"><?php echo $a['jenis_kelamin']; ?></option>
                                                                    <?php endforeach; ?>
                                                                    <option value="L">Laki-laki</option>
                                                                    <option value="P">Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-form-label">No Telepon</label>
                                                                <input type="text" id="telepon" name="telepon" class="form-control" value="<?= $a['telepon']; ?>">
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
                        <h3 class="card-title">Tambah Data Alternatif</h3>
                    </div>
                    <div class="card-body">
                        <!-- <form action="<?php echo site_url('Mahasiswa/insert'); ?>" method="post"> -->
                        <?= form_open_multipart('alternatif/tambah'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Kode Alternatif</label>
                                    <input type="text" id="kode" name="kode" class="form-control" value="<?= $kode; ?>" readonly>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nomor Induk Mahasiswa</label>
                                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan Nomor Induk Mahasiswa">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Kelas</label>
                                    <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan Kelas">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="">-- Pilih --</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">No Telepon</label>
                                    <input type="text" id="telepon" name="telepon" class="form-control" placeholder="Masukkan telepon">
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