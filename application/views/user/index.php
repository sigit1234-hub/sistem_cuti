<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $user['foto'] ?>">
                        <h3 class="profile-username text-center">
                            <?= ucwords($user['nama']) ?>
                        </h3>
                        <p class="text-muted text-center">
                            <?php if ($user['divisi'] == 1) {
                                echo "FINANCE";
                            } elseif ($user['divisi'] == 2) {
                                echo "LOGISTIC";
                            } elseif ($user['divisi'] == 13) {
                                echo "SERVICE";
                            } elseif ($user['divisi'] == 14) {
                                echo "WAREHOUSE";
                            } elseif ($user['divisi'] == 15) {
                                echo "GENERAL AFFAIR";
                            } elseif ($user['divisi'] == 17) {
                                echo "IT";
                            } elseif ($user['divisi'] == 18) {
                                echo "MANUFAKTURE & PABRICATION";
                            } elseif ($user['divisi'] == 22) {
                                echo "MARKETING";
                            } else {
                                echo "HRD";
                            }
                            ?> - <?= $user['jabatan'] ?> / <?= $user['nrp'] ?>
                        </p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Sisa Cuti</b> <a class="pull-right"><?= number_format($sisa_cuti, 0, ",", ".") . " Hari"; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Izin</b> <a class="pull-right"><?= number_format($jumlah_izin, 0, ",", ".") . " Hari"; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Kasbon</b> <a class="pull-right"><?= "Sebesar " . number_format($kasbon_status, 0, ",", ".") ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-phone-square margin-r-5"></i> Telephone</strong>
                        <p class="text-muted">
                            <?= $user['tlp'] ?>
                        </p>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                        <p class="text-muted"><?= $user['alamat'] ?></p>
                        <hr>
                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>
                        <hr>
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                        <p></p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#kasbon" data-toggle="tab">Kasbon</a></li>
                        <li><a href="#izin" data-toggle="tab">Izin</a></li>
                        <li><a href="#cuti" data-toggle="tab">Cuti</a></li>
                        <li><a href="#peminjaman" data-toggle="tab">peminjaman</a></li>
                        <li><a href="#profile" data-toggle="tab">Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class=" tab-pane" id="activity">
                        </div>
                        <div class="active tab-pane" id="kasbon">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Kasbon</h3>
                                            <?= $this->session->flashdata('message'); ?>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="1%">No</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" width="8%">Pengajuan</th>
                                                        <th scope="col">Status Angsuran</th>
                                                        <th scope="col">Jumlah Kasbon</th>
                                                        <th scope="col">Angsuran /Bulan</th>
                                                        <th scope="col">keterangan</th>
                                                        <th scope="col">Catatan</th>
                                                        <th scope="col" widht="5%">aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($kasbon as $d) : ?>
                                                        <tr>
                                                            <th scope=#><?= $i; ?></th>
                                                            <td class="users-list clearfix" style="width: 5%;">
                                                                <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>">
                                                                <?php if ($d['status'] == 1) {
                                                                    echo "<i class='fa fa-times-circle fa-lg' style='color:red'></i>";
                                                                } elseif ($d['status'] == 3) {
                                                                    echo "<i class='fa fa-check-square fa-lg' style='color:blue'></i>";
                                                                } elseif ($d['status'] == 4) {
                                                                    echo "<i class='fa fa-times-circle fa-lg' style='color:yellow'></i>";
                                                                } else {
                                                                    echo "<i class='fa fa-check-square fa-lg' style='color:green'></i>";
                                                                } ?>
                                                            </td>
                                                            <td class="text-center"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
                                                            <td><?= $d['bayar'] ?></td>
                                                            <td><?= "Rp " . number_format($d['kasbon'], 2, ",", ".") . " / " . $d['durasi_angsuran'] . "X" ?></td>
                                                            <td><?php if ($d['lainnya'] == null) {
                                                                    echo "Rp " . number_format($d['jumlah_angsuran'], 2, ",", ".");
                                                                } else {
                                                                    echo ($d['lainnya']);
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?= $d['keterangan']; ?></td>
                                                            <td><?= $d['note']; ?></td>
                                                            <td>
                                                                <button class="btn btn-default" data-toggle="modal" data-target="#lihatKasbonModal<?php echo $d['id']; ?>"><i class=" fa fa-eye"></i></button>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="izin">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Izin</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table id="example1" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Durasi</th>
                                                        <th>Jenis Izin</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($izin as $d) : ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?php if ($d['tanggal'] == $d['date_end']) {
                                                                    echo date('d M Y', strtotime($d['tanggal']));
                                                                } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                                                    echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                } else {
                                                                    echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?= $d['durasi'] ?> Hari</td>
                                                            <td><?= $d['jenis_izin'] ?></td>
                                                            <td><?= $d['Keterangan'] ?></td>
                                                            <?php $i++; ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="cuti">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Cuti</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table id="example3" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Durasi</th>
                                                        <th>Jenis Cuti</th>
                                                        <th>Keterangan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($cuti as $d) : ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?php if ($d['tanggal'] == $d['date_end']) {
                                                                    echo date('d M Y', strtotime($d['tanggal']));
                                                                } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                                                    echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                } else {
                                                                    echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?= $d['durasi'] ?> Hari</td>
                                                            <td><?= $d['kategori_cuti'] ?></td>
                                                            <td><span class="label label-success"><?= $d['keterangan'] ?></span></td>
                                                            <?php $i++; ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="peminjaman">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Cuti</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="1%">No</th>
                                                        <th scope="col" width="5%">Status</th>
                                                        <th scope="col" width="15%">Nama</th>
                                                        <th scope="col" class="text-center">Kendaraan</th>
                                                        <th scope="col" class="text-center">Driver</th>
                                                        <th scope="col" width="15%">Untuk Tanggal</th>
                                                        <th scope="col">Jam</th>
                                                        <th scope="col">Durasi</th>
                                                        <th scope="col" width="30%">Keterangan</th>
                                                        <th scope="col" width="15%">aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($peminjaman as $pemin) : ?>
                                                        <tr>
                                                            <th scope=#><?= $i; ?></th>
                                                            <td class="users-list clearfix" style="width: 5%;">
                                                                <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $pemin['foto'] ?>">
                                                                <?php if ($pemin['status'] == 1) {
                                                                    echo "<i class='fa fa-times-circle fa-lg' style='color:red'></i>";
                                                                } elseif ($pemin['status'] == 3) {
                                                                    echo "<i class='fa fa-check-square fa-lg' style='color:blue'></i>";
                                                                } elseif ($pemin['status'] == 4) {
                                                                    echo "<i class='fa fa-times-circle fa-lg' style='color:yellow'></i>";
                                                                } else {
                                                                    echo "<i class='fa fa-check-square fa-lg' style='color:green'></i>";
                                                                } ?>
                                                            </td>
                                                            <td><?= $pemin['nama']; ?>
                                                            </td>
                                                            <td class="text-center"><?php if ($pemin['kendaraan'] == 1) {
                                                                                        echo "<span class='label label-primary'>Honda beat</span>";
                                                                                    } elseif ($pemin['kendaraan'] == 2) {
                                                                                        echo "<span class='label label-warning'>Daihatsu Grand Max Blaind Fan</span>";
                                                                                    } elseif ($pemin['kendaraan'] == 3) {
                                                                                        echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                                                                    } elseif ($pemin['kendaraan'] == 4) {
                                                                                        echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                                                                    } elseif ($pemin['kendaraan'] == 7) {
                                                                                        echo "<span class='label label-success'>Toyota Hilux</span>";
                                                                                    } elseif ($pemin['kendaraan'] == 6) {
                                                                                        echo "<span class='label label-success'>Wuling Confero</span>";
                                                                                    } else {
                                                                                        echo "<span class='label label-success'>Mitsubishu Triton</span>";
                                                                                    } ?>
                                                            </td>
                                                            <td><?php if ($pemin['driver'] == 1) {
                                                                    echo "<span class='label label-primary'>PAK MIDI</span>";
                                                                } elseif ($pemin['driver'] == 2) {
                                                                    echo "<span class='label label-warning'>PAK SURYA</span>";
                                                                } elseif ($pemin['driver'] == 3) {
                                                                    echo "<span class='label label-success'>MAS AHMAD</span>";
                                                                } else {
                                                                    echo "<span class='label label-success'>MAS IGO</span>";
                                                                } ?>
                                                            </td>
                                                            <td><?php if ($pemin['tanggal'] == $pemin['date_end']) {
                                                                    echo date('d M Y', strtotime($pemin['tanggal']));
                                                                } elseif (date(' M', strtotime($pemin['tanggal'])) == date(' M', strtotime($pemin['date_end']))) {
                                                                    echo date('d', strtotime($pemin['tanggal'])) . "-" . date('d M Y', strtotime($pemin['date_end']));
                                                                } else {
                                                                    echo date('d M', strtotime($pemin['tanggal'])) . "-" . date('d M Y', strtotime($pemin['date_end']));
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?= $pemin['jam_berangkat']  ?></td>
                                                            <td><?= $pemin['durasi'] . " Hari" ?></td>
                                                            <td><?= $pemin['deskripsi']; ?></td>
                                                            <td>
                                                                <button class="btn btn-default" data-toggle="modal" data-target="#lihatPeminjamanModal<?php echo $pemin['id']; ?>"><i class=" fa fa-eye"></i></button>
                                                                <button class="btn btn-default" data-toggle="modal" data-target="#editPeminjamanModal<?php echo $pemin['id']; ?>"><i class=" fa fa-pencil-square"></i></button>
                                                            </td>
                                                        </tr>
                                                        <?php $i++; ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="col" width="1%">No</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" width="15%">Nama</th>
                                                        <th scope="col" class="text-center">Kendaraan</th>
                                                        <th scope="col" class="text-center">Driver</th>
                                                        <th scope="col" width="15%">Untuk Tanggal</th>
                                                        <th scope="col">Jam</th>
                                                        <th scope="col">Durasi</th>
                                                        <th scope="col" width="30%">Keterangan</th>
                                                        <th scope="col" width="15%">aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="col-md-12 text-left">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:25%">Email</th>
                                                        <td>: <?= $user['email'] ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat Lahir</th>
                                                        <td>: <?= $user['tempat'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <td>: <?= date('d F', strtotime($user['ttl'])) ?> <?= $user['tahun_lahir'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Golongan Darah</th>
                                                        <td>: <?= $user['gol_darah']
                                                                ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pendidikan</th>
                                                        <td>: <?= $user['jenjang'] . " " . $user['pendidikan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No KTP</th>
                                                        <td>: <?= $user['ktp'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No BPJS KS</th>
                                                        <td>: <?= $user['bpjs_kese'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No BPJS TK</th>
                                                        <td>: <?= $user['bpjs_kete'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No NPWP</th>
                                                        <td>: <?= $user['npwp'] ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- modal peminjaman -->
<?php $no = 0;

foreach ($peminjaman as $d) : $no++ ?>
    <div class="modal fade" id="lihatPeminjamanModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail Peminjaman</h4>
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
                                                                                    echo "<span class='label label-warning'>Honda beat</span>";
                                                                                } elseif ($d['kendaraan'] == 3) {
                                                                                    echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                                                                } elseif ($d['kendaraan'] == 4) {
                                                                                    echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                                                                } elseif ($d['kendaraan'] == 5) {
                                                                                    echo "<span class='label label-success'>Toyota Hilux</span>";
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
                                                                echo "<span class='label label-warning'>Toyota Avanza</span>";
                                                            } elseif ($d['kendaraan'] == 3) {
                                                                echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                                            } elseif ($d['kendaraan'] == 4) {
                                                                echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                                            } elseif ($d['kendaraan'] == 5) {
                                                                echo "<span class='label label-success'>Toyota Hilux</span>";
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
<?php $no = 0;

foreach ($peminjaman as $edit) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="editPeminjamanModal<?= $edit['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Peminjaman<?= $edit['id'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Form Pengajuan</h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('User/edit_user'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $edit['id']; ?>">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" readonly>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Izin</label>
                                    <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" placeholder="jenis kendaraan" readonly>
                                        <option value="<?= $edit['kendaraan'] ?>" selected>
                                            <?php if ($edit['kendaraan'] == 1) {
                                                echo "<span class='label label-primary'>Honda beat</span>";
                                            } elseif ($edit['kendaraan'] == 2) {
                                                echo "<span class='label label-warning'>Honda beat</span>";
                                            } elseif ($edit['kendaraan'] == 3) {
                                                echo "<span class='label label-success'>Daihatsu Grand Max Silver</span>";
                                            } elseif ($edit['kendaraan'] == 4) {
                                                echo "<span class='label label-success'>Daihatsu Grand Max Putih</span>";
                                            } elseif ($edit['kendaraan'] == 5) {
                                                echo "<span class='label label-success'>Toyota Hilux</span>";
                                            } else {
                                                echo "<span class='label label-success'>Mitsubishu Triton</span>";
                                            } ?>
                                        </option>
                                    </select>
                                    <?= form_error('jenis_kendaraan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Peminjaman</label>
                                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= $edit['tanggal']; ?>" readonly>
                                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pengembalian</label>
                                    <input type="text" class="form-control" id="date_end" name="date_end" value="<?= date('D d-M-Y') ?>" readonly>
                                    <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Driver</label>
                                    <select type="text" class="form-control" id="driver" name="driver" readonly>
                                        <option value="<?= $edit['driver'] ?>" selected><?php if ($edit['driver'] == 1) {
                                                                                            echo "<span class='label label-primary'>Pak Midi</span>";
                                                                                        } elseif ($edit['driver'] == 2) {
                                                                                            echo "<span class='label label-warning'>Pak Surya</span>";
                                                                                        } elseif ($edit['driver'] == 3) {
                                                                                            echo "<span class='label label-success'>Mas Ahmad</span>";
                                                                                        } elseif ($edit['driver'] == 4) {
                                                                                            echo "<span class='label label-success'>Mas Igo</span>";
                                                                                        } elseif ($edit['driver'] == 5) {
                                                                                            echo "<span class='label label-success'>lainnya</span>";
                                                                                        } else {
                                                                                            echo "<span class='label label-success'>Lainnya</span>";
                                                                                        } ?></option>
                                    </select>
                                    <?= form_error('driver', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status Persetujuan</label>
                                    <select type="text" class="form-control" id="status" name="status">
                                        <option value="5">Selesai</option>
                                    </select>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jam kembali</label>
                                    <input type="text" class="form-control" id="kembali" name="kembali" value="<?php
                                                                                                                date_default_timezone_set('Asia/Jakarta');
                                                                                                                echo date("H:i");
                                                                                                                ?> " readonly>
                                    <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $edit['deskripsi'] ?>">
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat / Tujuan / catatan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $edit['alamat']; ?>">
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <hr>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Selesai</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- modal lihat kasbon -->
<?php $no = 0;

foreach ($kasbon as $kas) : $no++ ?>
    <div class="modal fade" id="lihatKasbonModal<?= $kas['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail Peminjaman</h4>
                </div>
                <div class="modal-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">No</th>
                                <th scope="col">Tanggal input</th>
                                <th scope="col">Jumlah Angsuran</th>
                                <th scope="col">Angsuran ke-</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $id = $kas['id'] ?>
                            <?php $input = $this->M_kasbon->tampil_input($id) ?>
                            <?php $kasss = $this->M_kasbon->tampil_data($id) ?>
                            <?php $jml = $this->M_kasbon->get_jml_bayar($id) ?>
                            <?php foreach ($input as $d) : ?>
                                <tr>
                                    <th scope=#><?= $i; ?></th>
                                    <td class="text-center"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
                                    <td class="text-center"><?= $d['jumlah_bayar'] ?></td>
                                    <td><?= $d['angsuran_ke'] + 1; ?></td>
                                    <td><?= $d['note']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Kasbon</th>
                                <th>Jumlah Angsuran</th>
                                <th>Sisa Angsuran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <?= number_format($kas['kasbon'], 0, ",", ".") ?>
                                </td>
                                <td><?= number_format($jml, 0, ",", ".") ?></td>
                                <td>
                                    <?php
                                    if (($kas['kasbon'] - $jml) == 0) {
                                        echo "Lunas";
                                    } else {
                                        $sisa = $kas['kasbon'] - $jml;
                                        echo "Sisa " .  number_format($sisa, 0, ",", ".");
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>