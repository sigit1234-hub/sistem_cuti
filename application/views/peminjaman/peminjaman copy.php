<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Pengajuan Peminjaman Kendaraan</h2>
                            <p class="mb-md-0">Website Info of Garuda Mart Indonesia</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Peminjaman&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor"></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        <a href="" class="btn btn-primary mt-2 mt-xl-0" data-toggle="modal" data-target="#newIzinModal">Tambah Peminjaman</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Data Peminjaman Kendaraan</p>
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">No</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" widht="5%">Tanggal Pengajuan</th>
                                    <th scope="col">Kendaraan/Driver</th>
                                    <th scope="col">Untuk Tanggal/Jam</th>
                                    <th scope="col" widht="15%">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php $data = json_decode($peminjaman2); ?>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <th scope=#><?= $i; ?></th>
                                        <td class="users-list clearfix text-center" style="width: 10%;" data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>">
                                            <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d->foto ?>"><br>
                                            <?php if ($d->status == 1) {
                                                echo "<label class='badge badge-primary'>Menunggu</label>";
                                            } elseif ($d->status == 2) {
                                                echo "<label class='badge badge-success'>Setuju</label>";
                                            } elseif ($d->status == 4) {
                                                echo "<label class='badge badge-warning'>Batal</label>";
                                            } else {
                                                echo "<label class='badge badge-danger'>Batal</label>";
                                            } ?>
                                        </td>
                                        <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?= date('d M Y H:i:s', strtotime($d->date_created)) ?></td>

                                        <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?php
                                                                                                                                    $id = $d->kendaraan;
                                                                                                                                    $driv = $d->driver;
                                                                                                                                    $query = $this->db->get_where('kendaraan', ['id' => $id])->result_array();
                                                                                                                                    $sql = $this->db->get_where('driver', ['id' => $driv])->result_array();
                                                                                                                                    foreach ($query as $q) {
                                                                                                                                        echo $q['nama'] . '<br><br>';
                                                                                                                                    };
                                                                                                                                    foreach ($sql as $s) {
                                                                                                                                        echo $s['nama'];
                                                                                                                                    }
                                                                                                                                    ?>
                                        </td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?php if ($d->tanggal == $d->date_end) {
                                                                                                                    echo date('d M Y', strtotime($d->tanggal));
                                                                                                                } elseif (date(' M', strtotime($d->tanggal)) == date(' M', strtotime($d->date_end))) {
                                                                                                                    echo date('d', strtotime($d->tanggal)) . "-" . date('d M Y', strtotime($d->date_end));
                                                                                                                } else {
                                                                                                                    echo date('d M', strtotime($d->tanggal)) . "-" . date('d M Y', strtotime($d->date_end));
                                                                                                                }
                                                                                                                ?> <br><br> <?= $d->jam_berangkat . "-" . $d->jam_kembali ?> (<?= $d->durasi . " Hari" ?>);
                                        </td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?= $d->deskripsi; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="newIzinModal" tabindex="-1" role="dialog" aria-labelledby="newIzinModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <!-- Nested Row within Card Body -->
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Pengajuan</h1>
                    <h1 class="h6 text-gray-900 mb-4">Sebelum mengisi mohon perhatikan beberapa hal berikut:</h1>
                    <p class="h6 text-gray-900 mb-4">-Pastikan anda mengisi sesuai kebutuhan
                        <br>-Pastikan STNK tersedia sesuai dengan nomor kendaraan
                        <br>-Pastikan cek fisik kendaraan agar tidak ada kerusakan
                    </p>
                </div>
                <form class="user" method="POST" action="<?= base_url('User/peminjaman'); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>">
                                <input type="hidden" class="form-control" id="id_nama" name="id_nama" value="<?= $user['id']; ?>">
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y H:i:s') ?>">
                                <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" required>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kendaraan</label>
                                <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>
                                    <?php foreach ($get_kendaraan as $i) : ?>
                                        <option value="<?= $i['id'] ?>"><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
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
</div>