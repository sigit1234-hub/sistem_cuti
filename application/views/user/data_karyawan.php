<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">



        <h1>

            <?= $title; ?>

        </h1>

        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="<?= base_url('Hrd/tambah_karyawan') ?>">

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

                                        <th style="width: 1%;">No</th>

                                        <th>Nama</th>

                                        <th>Tanggal Join</th>

                                        <th>ktp</th>

                                        <th>TTL</th>

                                        <th>BPJS</th>

                                        <th>foto</th>

                                        <th>Status</th>

                                        <th>Aksi</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php $i = 1; ?>

                                    <?php foreach ($lihat as $d) : ?>

                                        <tr>

                                            <td><?= $i; ?></td>

                                            <td><?=$d['nama']; ?><br><span class="label label-primary" style="font-size: 90%;"><?= $d['nrp']; ?></span></td>

                                            <td><?= date('d M', strtotime($d['tanggal_gabung'])) . " " . $d['tahun_gabung'] ?></td>

                                            <td><?= $d['ktp']; ?></td>

                                            <td><?= $d['tempat'] ?><br><?= date('d M', strtotime($d['ttl'])) . " " . $d['tahun_lahir']; ?></td>

                                            <td><span class="label label-success" style="font-size: 90%"><?= "TK-" . $d['bpjs_kete']; ?></span><br><span class="label label-danger" style="font-size: 90%;"><?= "KS-" . $d['bpjs_kese']; ?></span></td>

                                            <td class="users-list clearfix">

                                                <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>">

                                            </td>

                                            <td><?php if ($d['is_active'] == 1) {

                                                    echo "<span class='label label-primary' style='font-size: 90%;'>AKTIF</span>";

                                                } else {

                                                    echo "<span class='label label-warning' style='font-size: 70%;'>NON-AKTIF</span>";

                                                } ?>

                                            </td>

                                            <td>

                                                <a class="btn btn-default" href="<?= base_url('Hrd/detail/') . $d['id'] ?>"><i class=" fa fa-eye"></i></a>
                                                
                                                <a href="<?= base_url('Hrd/edit_karyawan/') . $d['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square"></i></a>

                                                <a href="<?= base_url('Hrd/del/') . $d['id']; ?>" class="btn btn-default" onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>

                                            </td>

                                            <?php $i++; ?>

                                        </tr>

                                    <?php endforeach; ?>



                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th style="width: 1%;">No</th>

                                        <th>Nama</th>

                                        <th>Tanggal Join</th>

                                        <th>ktp</th>

                                        <th>TTL</th>

                                        <th>BPJS</th>

                                        <th>Foto</th>

                                        <th>Status</th>

                                        <th>Aksi</th>

                                    </tr>

                                </tfoot>

                            </table>

                        </div>

                    </div>

                    <!-- /.box-body -->

    </section>



</div>

<!-- agar perulangan sesuai dengan id yang diklik -->

<?php $no = 0;

foreach ($lihat as $d) : $no++ ?>



    <!-- Modal -->

    <div class="modal fade" id="lihatModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title" id="myModalLabel">Profile Karyawan</h4>

                </div>

                <div class="modal-body">

                    <section class="content">

                        <div class="box box-primary">

                            <div class="box-body box-profile bg-aqua-active">

                                <div class="row">

                                    <div class="col-md-4 ">

                                        <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>" alt="User profile picture">

                                    </div>

                                    <div class="col-md-8 text-left">

                                        <h3 class="profile-username">

                                            <?= ucwords($d['nama']) . " / " . ucwords($d['nrp']); ?>

                                        </h3>



                                        <p class="">

                                            <?php if ($d['divisi'] == 1) {

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

                                            ?> - <?= $d['jabatan'] ?> <br>

                                            Member sejak : <?= date('d F Y', strtotime($d['tanggal_gabung'])) ?>

                                        </p>



                                        <div class="row">

                                            <div class="col-xs-4 text-center">

                                                <h3><span class="label label-success">sisa Cuti Hari</span></h3></a>

                                            </div>

                                            <div class="col-xs-4 text-center">

                                                <h3><span class="label label-warning">Izin Hari</span></h3></a>

                                            </div>

                                            <div class="col-xs-4 text-center">

                                                <h3><span class="label label-danger">sisa Cuti</span></h3></a>

                                            </div>

                                        </div>

                                        <!-- /.row -->

                                    </div>



                                </div>

                            </div>





                            <div class="nav-tabs-custom">

                                <ul class="nav nav-tabs">

                                    <li class="active"><a href="#activity<?= $d['id']; ?>" data-toggle="tab">Data Diri</a></li>

                                    <li><a href="#cuti<?= $d['id']; ?>" data-toggle="tab">Cuti</a></li>

                                    <li><a href="#izin<?= $d['id']; ?>" data-toggle="tab">Izin</a></li>

                                </ul>

                                <div class="tab-content">

                                    <div class="active tab-pane" id="activity<?= $d['id']; ?>">

                                        <form class="form-horizontal">

                                            <div class="form-group">

                                                <label for="inputName" class="col-sm-3 control-label">Email</label>

                                                <div class="col-sm-9">

                                                    <input type="email" class="form-control" id="inputName" value="<?= $d['email'] ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputEmail" class="col-sm-3 control-label">Ttl</label>



                                                <div class="col-sm-9">

                                                    <input type="email" class="form-control" id="inputEmail" value="<?= $d['ttl']; ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputName" class="col-sm-3 control-label">Golongan Darah</label>

                                                <div class="col-sm-9">

                                                    <input type="text" class="form-control" id="inputName" value="<?= $d['gol_darah'] ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputName" class="col-sm-3 control-label">Telepone</label>



                                                <div class="col-sm-9">

                                                    <input type="text" class="form-control" id="inputName" value="<?= $d['tlp'] ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputExperience" class="col-sm-3 control-label">Pendidikan</label>



                                                <div class="col-sm-9">

                                                    <input type="text" class="form-control" id="inputName" value="<?= $d['pendidikan'] ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputExperience" class="col-sm-3 control-label">Alamat</label>



                                                <div class="col-sm-9">

                                                    <input type="text" class="form-control" id="inputName" value="<?= $d['alamat'] ?>">

                                                </div>

                                            </div>



                                        </form>

                                    </div>

                                    <!-- /.tab-pane -->

                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="cards<?= $d['id']; ?>">

                                        <form class="form-horizontal">

                                            <div class="form-group">

                                                <label for="inputName" class="col-sm-3 control-label">KTP</label>

                                                <div class="col-sm-9">

                                                    <input type="email" class="form-control" id="inputName" value="<?= $d['ktp'] ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputEmail" class="col-sm-3 control-label">BPJS <br>Kesehatan</label>



                                                <div class="col-sm-9">

                                                    <input type="email" class="form-control" id="inputEmail" value="<?= $d['bpjs_kese']; ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputName" class="col-sm-3 control-label">BPJS <br>Ketenagakerjaan</label>



                                                <div class="col-sm-9">

                                                    <input type="text" class="form-control" id="inputName" value="<?= $d['bpjs_kete']; ?>">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label for="inputName" class="col-sm-3 control-label">NPWP</label>

                                                <div class="col-sm-9">

                                                    <input type="email" class="form-control" id="inputName" value="<?= $d['npwp'] ?>">

                                                </div>

                                            </div>



                                        </form>



                                    </div>

                                    <!-- /.tab-pane -->

                                    <!-- /.tab-pane -->

                                    <div class="tab-pane" id="cuti<?= $d['id']; ?>">

                                        <p>cuti</p>

                                        <div class="box-body table-responsive no-padding">

                                            <table id="example1" class="table table-bordered table-striped">

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

                                                    <?php foreach ($join as $d) : ?>

                                                        <tr>

                                                            <td><?= $i ?></td>

                                                            <td></td>

                                                            <td><?= $d['durasi'] ?> Hari</td>

                                                            <td><?= $d['kategori_cuti'] ?></td>

                                                            <td><span class="label label-success"><?= $d['keterangan'] ?></span></td>

                                                            <?php $i++; ?>

                                                        </tr>

                                                    <?php endforeach; ?>



                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                    <!-- /.tab-pane -->



                                </div>

                                <!-- /.box-body -->

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