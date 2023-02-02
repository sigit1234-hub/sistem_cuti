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
                        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $lihat['foto'] ?>">
                        <h3 class="profile-username text-center">
                            <?= ucwords($lihat['nama']) ?>
                        </h3>
                        <p class="text-muted text-center">
                            <?php if ($lihat['divisi'] == 1) {
                                echo "FINANCE";
                            } elseif ($lihat['divisi'] == 2) {
                                echo "LOGISTIC";
                            } elseif ($lihat['divisi'] == 13) {
                                echo "SERVICE";
                            } elseif ($lihat['divisi'] == 14) {
                                echo "WAREHOUSE";
                            } elseif ($lihat['divisi'] == 15) {
                                echo "GENERAL AFFAIR";
                            } elseif ($lihat['divisi'] == 17) {
                                echo "IT";
                            } elseif ($lihat['divisi'] == 18) {
                                echo "MANUFAKTURE & PABRICATION";
                            } elseif ($lihat['divisi'] == 22) {
                                echo "MARKETING";
                            } else {
                                echo "HRD";
                            }
                            ?> - <?= $lihat['jabatan'] ?> / <?= $lihat['nrp'] ?>
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
                            <?= $lihat['tlp'] ?>
                        </p>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                        <p class="text-muted"><?= $lihat['alamat'] ?></p>
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
                        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li><a href="#izin" data-toggle="tab">Izin</a></li>
                        <li><a href="#cuti" data-toggle="tab">Cuti</a></li>
                        <li><a href="#kasbon" data-toggle="tab">Kasbon</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class=" tab-pane" id="activity">
                        </div>
                        <div class="active tab-pane" id="profile">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="col-md-12 text-left">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:25%">Email</th>
                                                        <td>: <?= $lihat['email'] ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat Lahir</th>
                                                        <td>: <?= $lihat['tempat'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <td>: <?= date('d F', strtotime($lihat['ttl'])) ?> <?= date('Y', strtotime($lihat['tahun_lahir'])) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Golongan Darah</th>
                                                        <td>: <?= $lihat['gol_darah']
                                                                ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pendidikan</th>
                                                        <td>: <?= $lihat['jenjang'] . " " . $lihat['pendidikan'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No KTP</th>
                                                        <td>: <span class="label label-danger"> <?= $lihat['ktp'] ?></span> </td>
                                                    </tr>
                                                    <tr>
                                                        <th>No BPJS KS</th>
                                                        <td>: <span class="label label-success"> <?= $lihat['bpjs_kese'] ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No BPJS TK</th>
                                                        <td>: <span class="label label-primary"> <?= $lihat['bpjs_kete'] ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No NPWP</th>
                                                        <td>: <span class="label label-warning"> <?= $lihat['npwp'] ?></span></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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
                                                            <td><span class="label label-success"><?= $d['kategori_cuti'] ?></span></td>
                                                            <td><?= $d['keterangan'] ?></td>
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
                        <div class="tab-pane" id="kasbon">
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
                                                        <th scope="col">Nama</th>
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
                                                            <td><?= $d['nama']; ?></td>
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
                                                <tfoot>
                                                    <tr>
                                                        <th scope="col" width="1%">No</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Pengajuan</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Status Angsuran</th>
                                                        <th scope="col">Jumlah Kasbon</th>
                                                        <th scope="col">Angsuran /Bulan</th>
                                                        <th scope="col">keterangan</th>
                                                        <th scope="col">Catatan</th>
                                                        <th scope="col">aksi</th>
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