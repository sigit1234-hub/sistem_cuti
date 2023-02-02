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
                                        <th scope="col" class="text-center">Cuti</th>
                                        <th scope="col" width="15%">Untuk Tanggal</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col" width="35%">Keterangan</th>
                                        <th scope="col" width="35%">Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($cuti as $d) : ?>
                                        <tr>
                                            <th scope=#><?= $i; ?></th>
                                            <td class="users-list clearfix" style="width: 5%;" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
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
                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['nama']; ?></td>
                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php if ($d['kategori_cuti'] == "Personal") {
                                                                        echo "<span class='label label-primary'>Personal</span>";
                                                                    } elseif ($d['kategori_cuti'] == "Saudara Meninggal") {
                                                                        echo "<span class='label label-warning'>Saudara Meninggal</span>";
                                                                    } elseif ($d['kategori_cuti'] == "Melahirkan") {
                                                                        echo "<span class='label label-success'>Melahirkan</span>";
                                                                    } elseif ($d['kategori_cuti'] == "Istri Melahirkan") {
                                                                        echo "<span class='label label-success'>Istri Melahirkan</span>";
                                                                    } elseif ($d['kategori_cuti'] == "Istri keguguran") {
                                                                        echo "<span class='label label-success'>Istri keguguran</span>";
                                                                    } elseif ($d['kategori_cuti'] == "Menikah") {
                                                                        echo "<span class='label label-success'>Menikah</span>";
                                                                    } elseif ($d['kategori_cuti'] == "Mengkhitankan Anak") {
                                                                        echo "<span class='label label-success'>Mengkhitankan Anak</span>";
                                                                    } elseif ($d['kategori_cuti'] == "membaktis Anak/saudara") {
                                                                        echo "<span class='label label-success'>membaktis Anak/saudara</span>";
                                                                    } else {
                                                                        echo "<span class='label label-success'>Mengkhitankan Anak</span>";
                                                                    } ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php if ($d['tanggal'] == $d['date_end']) {
                                                    echo date('d M Y', strtotime($d['tanggal']));
                                                } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                                    echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                } else {
                                                    echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                }
                                                ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['durasi'] . " Hari" ?></td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['keterangan']; ?></td>
                                            <td>
                                                <button class="btn btn-default" data-toggle="modal" data-target="#editModal<?php echo $d['id']; ?>"><i class=" fa fa-pencil-square"></i></button>
                                                <a href=" <?= base_url('Admin/delete_cuti/') . $d['id']; ?>" class="btn btn-default" onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="3%">Tanggal Pengajuan</th>
                                        <th scope="col" width="15%">Nama</th>
                                        <th scope="col" class="text-center">Cuti</th>
                                        <th scope="col" width="15%">Untuk Tanggal</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col" width="35%">Keterangan</th>
                                        <th scope="col" width="35%">Lihat</th>
                                    </tr>
                                </tfoot>
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
                <h4 class="modal-title" id="newIzinModalLabel">Tambah Cuti</h4>
            </div>

            <!-- Nested Row within Card Body -->
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Cuti</h1>
                    <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                </div>
                <form class="user" method="POST" action="<?= base_url('User/cuti'); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>">
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y H:i:s'); ?>">
                                <input type="hidden" class="form-control" id="divisi" name="divisi" value="<?= $user['divisi']; ?>">
                                <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                <input type="hidden" class="form-control" id="nama_id" name="nama_id" value="<?= $user['id']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Cuti</label>
                                <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal mulai izin">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Cuti</label>
                                <select class="form-control" id="Jenis_cuti" name="Jenis_cuti" placeholder="Jenis cuti">
                                    <?php foreach ($jenis_cuti as $i) : ?>
                                        <option><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('Jenis_cuti', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="text" class="form-control datepicker" id="date_end" name="date_end" placeholder="Tanggal akhir izin">
                                <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Demam /  Kegiatan Kampus / Dll">
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
foreach ($cuti as $d) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="lihatModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail</h4>
                </div>
                <div class="modal-body">
                    <section class="content">

                        <div class="box box-primary">
                            <div class="box-body box-profile ">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 10px;">
                                        <!-- START LOCK SCREEN ITEM -->
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>" alt="user image">
                                            <span class="username">
                                                <a href="#"><?= $d['nama'] ?> / <?php if ($d['divisi'] == 1) {
                                                                                    echo "FINANCE";
                                                                                } elseif ($d['divisi'] == 2) {
                                                                                    echo "LOGISTIC";
                                                                                } elseif ($d['divisi'] == 13) {
                                                                                    echo "SERVICE";
                                                                                } elseif ($d['divisi'] == 14) {
                                                                                    echo "WAREHOUSE";
                                                                                } elseif ($d['divisi'] == 15) {
                                                                                    echo "GENERAL AFFAIR";
                                                                                } elseif ($d['divisi'] == 17) {
                                                                                    echo "IT";
                                                                                } elseif ($d['divisi'] == 18) {
                                                                                    echo "MANUFAKTURE & PABRICATION";
                                                                                } elseif ($d['divisi'] == 22) {
                                                                                    echo "MARKETING";
                                                                                } else {
                                                                                    echo "HRD";
                                                                                }
                                                                                ?></a>
                                                <a href="#" class="pull-right btn-box-tool"></a>
                                            </span>
                                            <span class="description">diajukan pada : <?= $d['tanggal'] ?></span>
                                        </div>

                                    </div>
                                    <div class="col-md-12 text-left">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:25%">Status</th>
                                                    <td>:<?php if ($d['status1'] == 1) {
                                                                echo "<span class='label label-primary'>menunggu Persetujuan</span>";
                                                            } elseif ($d['status1'] == 2) {
                                                                echo "<span class='label label-success'>Disetujui</span>";
                                                            } elseif ($d['status1'] == 3) {
                                                                echo "<span class='label label-warning'>Disetujui (perubahan)</span>";
                                                            } else {
                                                                echo "<span class='label label-danger'>Dibatalkan</span>";
                                                            } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tgl Pengajuan</th>
                                                    <td>: <?= date('d M Y', strtotime($d['tanggal'])) ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Jenis Cuti</th>
                                                    <td>: <?= $d['kategori_cuti'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal Cuti</th>
                                                    <td>: <?php if ($d['tanggal'] == $d['date_end']) {
                                                                echo date('d M Y', strtotime($d['tanggal']));
                                                            }
                                                            if (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                                                echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                            } else {
                                                                echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                            }
                                                            ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Persetujuan</th>
                                                    <td>: <?= $d['persetujuan_dari'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>keterangan</th>
                                                    <td>: <?= $d['keterangan'] ?></td>
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
foreach ($cuti as $d) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="editModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Cuti <?= $d['id'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Form Cuti</h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('Admin/edit_cuti'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Izin</label>
                                    <input type="text" class="form-control datepicker" id="tanggalawal" name="tanggalawal" value="<?= $d['tanggal']; ?>" readonly>
                                    <?= form_error('tanggalawal', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal ACC</label>
                                    <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= $d['tanggal']; ?>">
                                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Cuti</label>
                                    <select class="form-control" id="jenis_cuti" name="jenis_cuti" placeholder="Jenis Izin">
                                        <option selected><?= $d['kategori_cuti'] ?></option>
                                        <?php foreach ($jenis_cuti as $i) : ?>
                                            <option><?= $i['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <?= form_error('jenis_cuti', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Sampai Tanggal</label>
                                    <input type="text" class="form-control datepicker" id="date_endawal" name="date_endawal" value="<?= $d['date_end']; ?>" readonly>
                                    <?= form_error('date_endawal', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Sampai Tanggal</label>
                                    <input type="text" class="form-control datepicker" id="date_end" name="date_end" value="<?= $d['date_end']; ?>">
                                    <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status Persetujuan</label>
                                    <select type="text" class="form-control" id="status" name="status">
                                        <option value="<?= $d['status']; ?>"><?php if ($d['status1'] == 1) {
                                                                                    echo "Menunggu Persetujuan";
                                                                                } elseif ($d['status1'] == 2) {
                                                                                    echo "Disetujui";
                                                                                } elseif ($d['status1'] == 3) {
                                                                                    echo "Disetujui (Perubahan)";
                                                                                } else {
                                                                                    echo "Dibatalkan";
                                                                                }
                                                                                ?></option>
                                        <option selected value="2">Setujui</option>
                                        <option value="3">Disetujui (Perubahan)</option>
                                        <option value="4">Batal</option>
                                    </select>
                                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Persetujuan</label>
                                    <input type="text" class="form-control" id="persetujuan" name="persetujuan" value="<?= $user['nama'] ?>" readonly>
                                    <?= form_error('persetujuan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $d['keterangan']; ?>">
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control" id="note" name="note" value="<?= $d['note']; ?>">
                                    <?= form_error('note', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <hr>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>