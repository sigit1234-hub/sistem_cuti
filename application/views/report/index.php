<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">
        <h1>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?= $title; ?>
        </h1>
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

                            <table id="example3" class="table table-bordered table-striped">

                                <thead>

                                    <tr>

                                        <th scope="col" width="1%">No</th>

                                        <th scope="col">Status</th>

                                        <th scope="col">kode SPL</th>

                                        <th scope="col" width="3%">Tanggal Pengajuan</th>

                                        <th scope="col" width="15%">Nama</th>

                                        <th scope="col">anggota</th>

                                        <th scope="col" width="15%">Untuk Tanggal</th>

                                        <th scope="col">Jam</th>

                                        <th scope="col" class="text-center">Pekerjaan</th>


                                    </tr>

                                </thead>

                                <tbody>

                                    <?php $i = 1; ?>

                                    <?php foreach ($spl as $d) : ?>

                                        <tr>

                                            <th scope=# data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $i; ?></th>

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

                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['kode_spl'] ?></td>

                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= date('d M Y', strtotime($d['date_created'])) ?></td>

                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php

                                                                                                                        $kalimat = $d['nama'];

                                                                                                                        $pecah = explode(" ", $kalimat);

                                                                                                                        echo $pecah[0]

                                                                                                                        ?>

                                            </td>

                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['anggota'] ?></td>

                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php if ($d['tanggal'] == $d['date_end']) {

                                                                                                                            echo date('d M Y', strtotime($d['tanggal']));
                                                                                                                        } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {

                                                                                                                            echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                                                                        } else {

                                                                                                                            echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                                                                        }

                                                                                                                        ?>

                                            </td>

                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['jam'] . "-" . $d['kembali'] ?></td>

                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['pekerjaan']; ?></td>
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

                <h4 class="modal-title" id="newIzinModalLabel">Pengajuan SPL</h4>

            </div>



            <!-- Nested Row within Card Body -->

            <div class="modal-body">

                <div class="text-center">

                    <h1 class="h4 text-gray-900 mb-4">Form Pengajuan</h1>

                </div>

                <form class="user" method="POST" action="<?= base_url('User/spl'); ?>">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Nama</label>

                                <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>">

                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y H:i:s') ?>">

                                <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">

                                <input type="hidden" class="form-control" id="divisi" name="divisi" value="<?= $user['divisi']; ?>">

                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">

                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>divisi</label>

                                <input type="text" class="form-control" id="divisi2" name="divisi2" value="<?php if ($user['divisi'] == 1) {

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

                                                                                                            ?>">

                                <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-gruop">

                                <label>Email Head</label>

                                <input type="text" class="form-control" id="emailhead" name="emailhead" value="<?php if ($user['divisi'] == 1) {

                                                                                                                    echo "sulissetia@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 2) {

                                                                                                                    echo "bunga@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 13) {

                                                                                                                    echo "suhail@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 14) {

                                                                                                                    echo "yoseph@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 15) {

                                                                                                                    echo "inggrid@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 17) {

                                                                                                                    echo "inggrid@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 18) {

                                                                                                                    echo "aceng@garudamart.com";
                                                                                                                } elseif ($user['divisi'] == 22) {

                                                                                                                    echo "anna@garudamart.com";
                                                                                                                } else {

                                                                                                                    echo "anna@garudamart.com";
                                                                                                                }

                                                                                                                ?>">

                                <?= form_error('emailhead', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>

                        </div>

                        <!-- <div class="col-md-6">

                            <div class="form-group">

                                <label>Anggoota</label>

                                <input type="text" class="form-control" id="anggota" name="anggota" placeholder="Masukkan Anggota" kursor>

                                <?= form_error('anggota', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                        </div> -->

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Anggota yang lembur</label>

                                <select multiple class="form-control select2" name="anggota[]" id="anggota" data-placeholder="Pilih Anggota" style="width: 100%;">

                                    <?php foreach ($karyawan as $kar) : ?>

                                        <option><?= $kar['nama']; ?></option>

                                    <?php endforeach; ?>

                                </select>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Tanggal Lembur</label>

                                <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal lembur">

                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Sampai Tanggal</label>

                                <input type="text" class="form-control datepicker" id="date_end" name="date_end" placeholder="Tanggal selesai lembur">

                                <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Jam mulai</label>

                                <input type="time" class="form-control" id="jam" name="jam" placeholder="Jam mulai SPL">

                                <?= form_error('jam', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>Estimasi Jam Selesai</label>

                                <input type="time" class="form-control" id="kembali" name="kembali" placeholder="Jam selesai SPL">

                                <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>') ?>

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label>Deskripsi Pekerjaan</label>

                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Pengerjaan wirring dll">

                                <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>') ?>

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

foreach ($spl as $d) : $no++ ?>



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

                                                <a href="#"><?= $d['nama'] ?>

                                                </a>

                                                <a href="#" class="pull-right btn-box-tool"></a>

                                            </span>

                                            <span class="description">diajukan pada : <?= $d['date_created'] ?></span>

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
                                                            } else {

                                                                echo "<span class='label label-danger'>Dibatalkan</span>";
                                                            } ?>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <th>Divisi</th>

                                                    <td>: <?php if ($d['divisi'] == 1) {

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
                                                            } else {

                                                                echo "MANUFAKTURE & PABRICATION";
                                                            }

                                                            ?>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <th>Email Head</th>

                                                    <td>: <?= $d['emailhead'] ?></td>

                                                </tr>

                                                <tr>

                                                    <th>Anggota</th>

                                                    <td>: <?= $d['anggota'] ?></td>

                                                </tr>

                                                <tr>

                                                    <th>Untuk Tanggal</th>

                                                    <td>: <?php if ($d['tanggal'] == $d['date_end']) {

                                                                echo date('d M Y', strtotime($d['tanggal']));
                                                            } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {

                                                                echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                            } else {

                                                                echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                            }

                                                            ?>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <th>Estimasi waktu</th>

                                                    <td>: <?= $d['jam'] . "-" . $d['kembali'] ?></td>

                                                </tr>

                                                <tr>

                                                    <th>Pekerjaan</th>

                                                    <td>: <?= $d['pekerjaan'] ?></td>

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



<script src="<?= base_url('assets/admin/plugins/') ?>jQuery/jquery-2.2.3.min.js"></script>