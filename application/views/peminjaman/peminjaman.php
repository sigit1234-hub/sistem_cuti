<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <?= $this->session->flashdata('sweet'); ?>
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="pag e-title float-left">Peminjaman Kendaraan</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('User') ?>">User</a></li>
                                            <li class="breadcrumb-item active">Peminjaman</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <ol class="breadcrumb float-right">
                                    <li>
                                        <button type="button" class="breadcrumb-item btn btn-primary btn-block waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Pengembalian</button>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <!-- konten -->
        <div class="row">
            <?php foreach ($get_kendaraan as $get) : ?>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-two">
                        <div class="card m-b-20">
                            <img class="card-img-top img-fluid" src="<?= base_url('assets/images/kendaraan/') . $get['foto']; ?>" alt="Card image cap">
                            <div class="card-body">

                                <h6 class="card-title"><?= $get['nama']; ?></h6>

                                <?php
                                $menuId = $get['peminjam'];
                                $querySubMenu = "SELECT *
                                      FROM karyawan
                                     WHERE id = $menuId";
                                $sqll = $this->db->query($querySubMenu)->result_array();
                                ?>
                                <?php foreach ($sqll as $d) : ?>
                                    <p class="card-text">Peminjam :<?= $d['nama']; ?></p>
                                <?php endforeach; ?>
                                <?php
                                $menuId = $get['driver'];
                                $querySubMenu = "SELECT *
                                      FROM driver
                                     WHERE id = $menuId";
                                $sqll = $this->db->query($querySubMenu)->result_array();
                                ?>
                                <?php foreach ($sqll as $d) : ?>
                                    <p class="card-text">Driver :<?= $d['nama']; ?></p>
                                <?php endforeach; ?>
                                <p class="card-text">Tujuan :<?= $get['tujuan']; ?></p>

                                <?php if ($get['actived'] == 1) {
                                    echo '<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#newIzinModal' . $get['id'] . '">Gas</button>';
                                } else {
                                    echo "<button class='btn btn-block btn-primary' disabled>Lagi Dipinjam</button>";
                                } ?>


                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <!-- end row -->

    </div><!-- end col-->
</div>
<!-- end row -->
</div> <!-- container -->
</div> <!-- content -->

<!-- Modal -->
<?php $no = 0;

foreach ($get_kendaraan as $d) : $no++ ?>
    <div class="modal fade" id="newIzinModal<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="newIzinModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!-- Nested Row within Card Body -->
                <div class="modal-body">
                    <form class="user" method="POST" action="<?= base_url('User/peminjaman'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>">
                                    <input type="hidden" class="form-control" id="id_nama" name="id_nama" value="<?= $user['id']; ?>">
                                    <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y H:i:s') ?>">
                                    <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kendaraan</label>
                                    <input type="text" class="form-control" id="kendaraan" name="kendaraan" value="<?= $d['nama'] ?>" required readonly>
                                    <input type="hidden" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="<?= $d['id'] ?>" required readonly>

                                    <?= form_error('jenis_kendaraan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Peminjaman</label>
                                    <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal peminjaman" required>
                                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pengembalian</label>
                                    <input type="date" class="form-control datepicker" id="date_end" name="date_end" placeholder="Tanggal pengembalian" required>
                                    <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jam Berangkat</label>
                                    <input type="time" class="form-control" id="jam" name="jam" placeholder="Jam peminjaman" required>
                                    <?= form_error('jam', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estimasi Jam Kembali</label>
                                    <input type="time" class="form-control" id="kembali" name="kembali" placeholder="Jam pengembalian" required>
                                    <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Driver & Barang yang dibawa" required>
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Driver</label>
                                    <select type="text" class="form-control" id="driver" name="driver" placeholder="Driver" required>
                                        <?php foreach ($get_driver as $d) : ?>
                                            <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
                                        <?php endforeach ?>
                                        <?= form_error('driver', '<small class="text-danger pl-3">', '</small>') ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Alamat tujuan seperti vendor/customer" required>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="mdi mdi-close-box btn-icon-prepend"></i>
                                Tutup
                            </button>
                            <button type="submit" class="btn btn-primary btn-icon-text">
                                <i class="mdi mdi-file-check btn-icon-prepend"></i>
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>