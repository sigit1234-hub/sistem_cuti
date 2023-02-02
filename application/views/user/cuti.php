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
                                        <h4 class="pag e-title float-left">Pengajuan Cuti</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('User') ?>">User</a></li>
                                            <li class="breadcrumb-item active">Cuti</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <ol class="breadcrumb float-right">
                                    <li>
                                        <button type="button" class="breadcrumb-item btn btn-primary btn-block waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Tambah Cuti</button>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class=" icon-note"></i>
                    </div>
                    <a href="#" style="color:black">
                        <div class="text-right">
                            <h6 class="text-success text-uppercase m-b-15 m-t-10">Total Cuti</h6>
                            <h2 class="m-b-10"><span data-plugin="counterup"><?= number_format($k_person, 0, ",", "."); ?></span></h2>
                        </div>
                    </a>
                    <div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class=" icon-note"></i>
                    </div>
                    <a href="#" style="color: black;">
                        <div class="text-right">
                            <h6 class="text-success text-uppercase m-b-15 m-t-10">Sisa Cuti</h6>
                            <h2 class="m-b-10"><span data-plugin="counterup"><?php foreach ($kuota as $k) :
                                                                                    echo $k['kuota_cuti'] ?>
                                    <?php endforeach; ?>
                                </span></h2>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?= $hasil ?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data pengajuan cuti</h4>
                    <p class="text-muted font-14 m-b-30">
                        berikut data pengajuan cuti kamu
                    </p>

                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Lama Cuti</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cuti as $d) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?php if ($d['status1'] == 1) {
                                            echo "<span class='label label-danger' width='30px'>MENUNGGU</span>";
                                        } elseif ($d['status1'] == 2) {
                                            echo "<span class='label label-success'>DISETUJUI</span>";
                                        } elseif ($d['status1'] == 3) {
                                            echo "<span class='label label-warning'>DISETUJUI</span>";
                                        } elseif ($d['status1'] == null) {
                                            echo "<span class='label label-warning'>??</span>";
                                        } else {
                                            echo "<span class='label label-danger'>DIBATALKAN</span>";
                                        } ?></td>
                                    <td><?php if ($d['tanggal'] == $d['date_end']) {
                                            echo date('d M Y', strtotime($d['tanggal']));
                                        } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                            echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                        } else {
                                            echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                        }
                                        ?></td>
                                    <td><?= $d['durasi'] . " Hari" ?></td>
                                    <td><?= $d['keterangan'] ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->


    </div><!-- end col-->
</div>
<!-- end row -->
</div> <!-- container -->
</div> <!-- content -->
<!-- Modal -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mySmallModalLabel">Pengajuan Cuti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" method="post" action="<?= base_url('User/cuti'); ?>">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group" disabled>
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y'); ?>">
                                <input type="hidden" class="form-control" id="nama_id" name="nama_id" value="<?= $user['id']; ?>">
                                <input type="hidden" class="form-control" id="divisi" name="divisi" value="<?= $user['divisi']; ?>">
                                <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>">
                                <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Cuti</label>
                                <select class="form-control" id="jenis_cuti" name="jenis_cuti" placeholder="Jenis cuti">
                                    <?php foreach ($jenis_cuti as $i) : ?>
                                        <option><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal mulai cuti">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sampai</label>
                                <input type="date" class="form-control datepicker" id="date_end" name="date_end" placeholder="Tanggal akhir cuti">
                                <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alasan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Alasan pengajuan cuti">
                                </input>
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ajukan</button>
                </div>
                <!-- end row -->

            </form>
        </div>
    </div>
</div>