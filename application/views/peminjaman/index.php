<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
        <div class="pad margin no-print">
            <div class="callout callout-info" style="margin-bottom: 0!important;">
                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-times-circle fa-lg" style="color:red"></i>
                        Menunggu persetujuan / Dibatalkan
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-check-square fa-lg" style="color:blue"></i>
                        Disetujui dengan perubahan waktu
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-check-square fa-lg" style="color:green"></i>
                        Disetujui
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="" data-toggle="modal" data-target="#newIzinModal">
            <i class="fa fa-user-plus"></i><span> Tambah</span>
        </a>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="3%">Tanggal Pengajuan</th>
                                        <th scope="col" width="15%">Nama</th>
                                        <th scope="col" class="text-center">Kendaraan</th>
                                        <th scope="col" class="text-center">Driver</th>
                                        <th scope="col" width="15%">Untuk Tanggal</th>
                                        <th scope="col" width="15%">Jam Berangkat</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col" width="35%">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php $data = json_decode($peminjaman2); ?>
                                    <?php foreach ($data as $d) : ?>
                                        <tr>
                                            <th scope=#><?= $i; ?></th>
                                            <td class="users-list clearfix" style="width: 5%;" data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>">
                                                <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d->foto ?>">
                                                <?php if ($d->status == 1) {
                                                    echo "<i class='fa fa-times-circle fa-lg' style='color:red'></i>";
                                                } elseif ($d->status == 3) {
                                                    echo "<i class='fa fa-check-square fa-lg' style='color:blue'></i>";
                                                } elseif ($d->status  == 4) {
                                                    echo "<i class='fa fa-times-circle fa-lg' style='color:yellow'></i>";
                                                } else {
                                                    echo "<i class='fa fa-check-square fa-lg' style='color:green'></i>";
                                                } ?>
                                            </td>
                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?= date('d M Y H:i:s', strtotime($d->date_created)) ?></td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>" style="width: 5%;"><?php
                                                                                                                                        $kalimat = $d->nama;
                                                                                                                                        echo $kalimat;
                                                                                                                                        ?>
                                            </td>
                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?php if ($d->kendaraan == 1) {
                                                                                                                                            echo "<span class='label label-primary'>Honda beat</span>";
                                                                                                                                        } elseif ($d->kendaraan == 2) {
                                                                                                                                            echo "<span class='label label-warning'>Daihatsu Grand Max Blaind Fan</span>";
                                                                                                                                        } elseif ($d->kendaraan == 3) {
                                                                                                                                            echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                                                                                                                        } elseif ($d->kendaraan == 4) {
                                                                                                                                            echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                                                                                                                        } elseif ($d->kendaraan == 7) {
                                                                                                                                            echo "<span class='label label-success'>Toyota Hilux</span>";
                                                                                                                                        } elseif ($d->kendaraan == 6) {
                                                                                                                                            echo "<span class='label label-success'>Wuling Confero</span>";
                                                                                                                                        } else {
                                                                                                                                            echo "<span class='label label-success'>Mitsubishu Triton</span>";
                                                                                                                                        } ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?php if ($d->driver == 1) {
                                                                                                                        echo "<span class='label label-primary'>PAK MIDI</span>";
                                                                                                                    } elseif ($d->driver == 2) {
                                                                                                                        echo "<span class='label label-warning'>PAK SURYA</span>";
                                                                                                                    } elseif ($d->driver == 3) {
                                                                                                                        echo "<span class='label label-success'>MAS AHMAD</span>";
                                                                                                                    } elseif ($d->driver == 4) {
                                                                                                                        echo "<span class='label label-success'>MAS IGO</span>";
                                                                                                                    } else {
                                                                                                                        echo "<span class='label label-danger'>LAINNYA</span>";
                                                                                                                    } ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?php if ($d->tanggal == $d->date_end) {
                                                                                                                        echo date('d M Y', strtotime($d->tanggal));
                                                                                                                    } elseif (date(' M', strtotime($d->tanggal)) == date(' M', strtotime($d->date_end))) {
                                                                                                                        echo date('d', strtotime($d->tanggal)) . "-" . date('d M Y', strtotime($d->date_end));
                                                                                                                    } else {
                                                                                                                        echo date('d M', strtotime($d->tanggal)) . "-" . date('d M Y', strtotime($d->date_end));
                                                                                                                    }
                                                                                                                    ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?= $d->jam_berangkat . "-" . $d->jam_kembali ?></td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d->id; ?>"><?= $d->durasi . " Hari" ?></td>
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
        <!-- /.box-body -->
    </section>
</div>
<!-- Modal -->
<div class="modal fade" id="newIzinModal" tabindex="-1" role="dialog" aria-labelledby="newIzinModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newIzinModalLabel">Pengajuan Kendaraan</h4>
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
                                <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal peminjaman" required>
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="text" class="form-control datepicker" id="date_end" name="date_end" placeholder="Tanggal pengembalian" required>
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
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $no = 0;
foreach ($peminjaman as $d) : $no++ ?>
    <div class="modal fade" id="lihatModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail</h4>
                </div>
                <div class="modal-body">
                    <section class="content">
                        <div class="box box-grayz">
                            <div class="box-body box-profile ">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                        <!-- START LOCK SCREEN ITEM -->
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>" alt="user image">
                                            <span class="username">
                                                <a href="#"><?= $d['nama'] ?> / <?php if ($d['kendaraan'] == 1) {
                                                                                    echo "<span class='label label-primary'>Honda beat</span>";
                                                                                } elseif ($d['kendaraan'] == 2) {
                                                                                    echo "<span class='label label-warning'>Daihatsu Grand Max Blaind Fan</span>";
                                                                                } elseif ($d['kendaraan'] == 3) {
                                                                                    echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                                                                } elseif ($d['kendaraan'] == 4) {
                                                                                    echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                                                                } elseif ($d['kendaraan'] == 7) {
                                                                                    echo "<span class='label label-success'>Toyota Hilux</span>";
                                                                                } elseif ($d['kendaraan'] == 6) {
                                                                                    echo "<span class='label label-success'>Wuling Confero</span>";
                                                                                } else {
                                                                                    echo "<span class='label label-success'>Mitsubishu Triton</span>";
                                                                                } ?>
                                                </a>
                                                <a href="#" class="pull-right btn-box-tool"></a>
                                            </span>
                                            <span class="description">diajukan pada : <?= $d['tanggal'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:30%">Status</th>
                                                    <td>:<?php if ($d['status'] == 1) {
                                                                echo "<span class='label label-primary'>menunggu Persetujuan</span>";
                                                            } elseif ($d['status'] == 2) {
                                                                echo "<span class='label label-success'>Disetujui</span>";
                                                            } elseif ($d['status'] == 3) {
                                                                echo "<span class='label label-warning'>Disetujui (perubahan)</span>";
                                                            } elseif ($d['status'] == 5) {
                                                                echo "<span class='label label-success'>Selesai</span>";
                                                            } else {
                                                                echo "<span class='label label-danger'>Dibatalkan</span>";
                                                            }
                                                            ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Pengajuan</th>
                                                    <td>: <?= date('d M Y', strtotime($d['tanggal'])) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Kendaraan</th>
                                                    <td>: <?php if ($d['kendaraan'] == 1) {
                                                                echo "<span class='label label-primary'>Honda beat</span>";
                                                            } elseif ($d['kendaraan'] == 2) {
                                                                echo "<span class='label label-warning'>Daihatsu Grand Max Blaind Fan</span>";
                                                            } elseif ($d['kendaraan'] == 3) {
                                                                echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                                            } elseif ($d['kendaraan'] == 4) {
                                                                echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                                            } elseif ($d['kendaraan'] == 7) {
                                                                echo "<span class='label label-success'>Toyota Hilux</span>";
                                                            } elseif ($d['kendaraan'] == 6) {
                                                                echo "<span class='label label-success'>Wuling Confero</span>";
                                                            } else {
                                                                echo "<span class='label label-success'>Mitsubishu Triton</span>";
                                                            } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Driver</th>
                                                    <td>: <?php if ($d['driver'] == 1) {
                                                                echo "<span class='label label-primary'>Pak Midi</span>";
                                                            } elseif ($d['driver'] == 2) {
                                                                echo "<span class='label label-warning'>Pak Surya</span>";
                                                            } elseif ($d['driver'] == 3) {
                                                                echo "<span class='label label-success'>Mas Ahmad</span>";
                                                            } elseif ($d['driver'] == 4) {
                                                                echo "<span class='label label-success'>Mas Igo</span>";
                                                            } elseif ($d['driver'] == 5) {
                                                                echo "<span class='label label-success'>lainnya</span>";
                                                            } else {
                                                                echo "<span class='label label-success'>Lainnya</span>";
                                                            } ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Peminjaman</th>
                                                    <td>: <?php if ($d['tanggal'] == $d['date_end']) {
                                                                echo date('d M Y', strtotime($d['tanggal']));
                                                            } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                                                echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                            } else {
                                                                echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                            }
                                                            ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Deskripsi</th>
                                                    <td>: <?= $d['deskripsi'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Tujuan</th>
                                                    <td>: <?= $d['alamat'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Note</th>
                                                    <td>: <?= $d['note'] ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>