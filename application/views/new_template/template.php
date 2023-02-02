    <!-- Left side column. contains the logo and sidebar -->





    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>

                Dashboard

            </h1>



        </section>

        <!-- Main content -->

        <section class="content">

            <!-- Small boxes (Stat box) -->

            <div class="row">

                <div class="alert alert-info alert-dismissible">

                    <div class="inner">

                        <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;font-size:20px">

                            <?= $salam . ", " . $user['nama'] ?>

                        </p>

                    </div>

                </div>



                <div class="col-lg-3 col-xs-6">

                    <!-- small box -->

                    <div class="small-box bg-aqua">

                        <div class="inner">

                            <h3><?= number_format($peminjam, 0, ",", "."); ?></h3>



                            <p>Pengajuan Peminjaman</p>

                        </div>

                        <div class="icon">

                            <i class="ion ion-android-car"></i>

                        </div>

                        <a href="<?= base_url('Hrd/admin_peminjaman') ?>" class="small-box-footer">Peminjaman <i class="fa fa-arrow-circle-right"></i></a>

                    </div>

                </div>

                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">

                    <!-- small box -->

                    <div class="small-box bg-green">

                        <div class="inner">

                            <h3><?= number_format($cuti, 0, ",", "."); ?> Cuti</h3>



                            <p>Pengajuan Cuti</p>

                        </div>

                        <div class="icon">

                            <i class="ion ion-calendar"></i>

                        </div>

                        <a href="<?= base_url('Hrd/cuti_acc') ?>" class="small-box-footer">Lihat Cuti <i class="fa fa-arrow-circle-right"></i></a>

                    </div>

                </div>

                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">

                    <!-- small box -->

                    <div class="small-box bg-yellow">

                        <div class="inner">

                            <h3><?= number_format($izin, 0, ",", "."); ?> Izin</h3>



                            <p>Pengajuan Izin</p>

                        </div>

                        <div class="icon">

                            <i class="ion ion-clock"></i>

                        </div>

                        <a href="<?= base_url('Hrd/admin_izin') ?>" class="small-box-footer">Lihat Izin <i class="fa fa-arrow-circle-right"></i></a>

                    </div>

                </div>

                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">

                    <!-- small box -->

                    <div class="small-box bg-red">

                        <div class="inner">

                            <h3><?= number_format($spl, 0, ",", "."); ?> SPL</h3>



                            <p>Pengajuan SPL</p>

                        </div>

                        <div class="icon">

                            <i class="ion ion-android-settings"></i>

                        </div>

                        <a href="<?= base_url('Hrd/admin_spl') ?>" class="small-box-footer">Lihat SPL <i class="fa fa-arrow-circle-right"></i></a>

                    </div>

                </div>

                <!-- ./col -->

            </div>

            <!-- /.row -->

            <!-- Main row -->

            <div class="row">

                <!-- Left col -->

                <section class="col-lg-7 connectedSortable">

                    <!-- Custom tabs (Charts with tabs)-->



                    <div class="box-body chat" id="chat-box">



                        <!-- Chat box -->

                        <div class="box box-success">

                            <div class="box-header">

                                <i class="fa fa-comments-o"></i>



                                <h3 class="box-title">Update Jatah Cuti</h3>



                                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">

                                    <div class="btn-group" data-toggle="btn-toggle">

                                    </div>

                                </div>

                            </div>

                            <div class="box-body chat" id="chat-box">

                                <?= $this->session->flashdata('message'); ?>

                                <table id="example1" class="table table-bordered table-striped">

                                    <thead>

                                        <tr>

                                            <th scope="col" width="1%">No</th>

                                            <th scope="col">Nama</th>

                                            <th scope="col">Divisi</th>

                                            <th scope="col">Tanggal Gabung</th>

                                            <th scope="col">aksi</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $i = 1; ?>

                                        <?php foreach ($update as $d) : ?>

                                            <tr>

                                                <th scope=#><?= $i; ?></th>

                                                <td><?= $d['nama']; ?></td>

                                                <td><?php if ($d['divisi'] == 1) {

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

                                                    ?>

                                                </td>

                                                <td><?= date('d M', strtotime($d['tanggal_gabung'])) . " " . $d['tahun_gabung'] ?></td>

                                                <td>

                                                    <button class="btn btn-default" data-toggle="modal" data-target="#editModal<?php echo $d['id']; ?>"><i class=" fa fa-pencil-square"></i></button>

                                                </td>

                                            </tr>

                                            <?php $i++; ?>

                                        <?php endforeach; ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                        <!-- /.box (chat box) -->





                        <!-- quick email widget -->



                </section>

                <!-- /.Left col -->

                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <section class="col-lg-5 connectedSortable">







                    <div class="col-md-12">

                        <!-- USERS LIST -->

                        <div class="box box-danger">

                            <div class="box-header with-border">

                                <h3 class="box-title">Ulang Tahun hari ini</h3>



                                <div class="box-tools pull-right">

                                    <span class="label label-primary"></span>

                                </div>

                            </div>

                            <!-- /.box-header -->

                            <div class="box-body no-padding">

                                <div class="col-md-12">

                                    <ul class="users-list">

                                        <?php foreach ($ulangtahun as $w) : ?>

                                            <li>

                                                <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $w['foto'] ?>" alt="User Image">

                                                <a class="users-list-name" href="#"><?= $w['nama'] ?></a>

                                                <span class="users-list-date"><?php if ($w['divisi'] == 1) {

                                                                                    echo "FINANCE";

                                                                                } elseif ($w['divisi'] == 2) {

                                                                                    echo "LOGISTIC";

                                                                                } elseif ($w['divisi'] == 13) {

                                                                                    echo "SERVICE";

                                                                                } elseif ($w['divisi'] == 14) {

                                                                                    echo "WAREHOUSE";

                                                                                } elseif ($w['divisi'] == 15) {

                                                                                    echo "GENERAL AFFAIR";

                                                                                } elseif ($w['divisi'] == 17) {

                                                                                    echo "IT";

                                                                                } elseif ($w['divisi'] == 18) {

                                                                                    echo "MANUFAKTURE & PABRICATION";

                                                                                } elseif ($w['divisi'] == 22) {

                                                                                    echo "MARKETING";

                                                                                } else {

                                                                                    echo "HRD";

                                                                                }

                                                                                ?> / <?= $w['jabatan'] ?></span>

                                            </li>

                                        <?php endforeach ?>

                                    </ul>

                                </div>

                                <!-- /.users-list -->

                            </div>

                            <!-- /.box-body -->

                            <div class="box-footer text-center">

                            </div>

                            <!-- /.box-footer -->

                        </div>

                        <!--/.box -->

                    </div>



                </section>

                <!-- right col -->

            </div>

            <!-- /.row (main row) -->



        </section>

        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->



    <?php $no = 0;

    foreach ($update as $d) : $no++ ?>

        <!-- Modal -->

        <div class="modal fade" id="editModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        <h4 class="modal-title" id="myModalLabel">Edit kuota Cuti <?= $d['id'] ?></h4>

                    </div>

                    <div class="modal-body">

                        <div class="text-center">

                            <h1 class="h4 text-gray-900 mb-4">Form</h1>

                            <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>

                        </div>

                        <form class="user" method="POST" action="<?= base_url('Hrd/update_cuti'); ?>">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label>Nama</label>

                                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">

                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>">

                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label>Divisi</label>

                                        <input type="text" class="form-control" id="tanggalawal" name="tanggalawal" value="<?php if ($d['divisi'] == 1) {

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

                                                                                                                            ?>" readonly>

                                        <?= form_error('tanggalawal', '<small class="text-danger pl-3">', '</small>') ?>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label>Kuota Cuti</label>

                                        <input type="text" class="form-control" id="kuota" name="kuota" value="<?= $d['kuota_cuti'] ?>">

                                        <?= form_error('kuota', '<small class="text-danger pl-3">', '</small>') ?>

                                    </div>

                                </div>

                            </div>

                            <hr>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-primary">update</button>

                            </div>

                    </div>

                    </form>

                </div>

            </div>

        </div>

        </div>

    <?php endforeach; ?>