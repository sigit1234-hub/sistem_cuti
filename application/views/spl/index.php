<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?= $title; ?>
        </h1>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="<?= base_url('User/input_spl') ?>">
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
                                        <th scope="col">Anggota</th>
                                        <th scope="col" width="15%">Untuk Tanggal</th>
                                        <th scope="col">Jam</th>
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
                                                    echo "<span class='label label-danger'>Menunggu</span>";
                                                } elseif ($d['status'] == 2) {
                                                    echo "<span class='label label-success'>Setuju</span>";
                                                } elseif ($d['status'] == 3) {
                                                    echo "<span class='label label-primary'>Batal</span>";
                                                } else {
                                                    echo "<i class='fa fa-check-square fa-lg' style='color:green'></i>";
                                                } ?></br>
                                                <?php
                                                $kalimat = $d['nama'];
                                                $pecah = explode(" ", $kalimat);
                                                echo $pecah[0]
                                                ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['kode_spl'] ?></td>
                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php
                                                                                                                        $kalimat = $d['nama'];
                                                                                                                        $pecah = explode(" ", $kalimat);
                                                                                                                        echo $pecah[0]
                                                                                                                        ?>
                                            </td>
                                            <?php
                                            $kode  = $d['kode_spl'];
                                            $this->db->where('kode_input_spl', $kode);
                                            $sql = $this->db->get('input_spl')->result_array();
                                            ?>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
                                                <?php $no = 0; ?>
                                                <?php foreach ($sql as $in) : $no++ ?>
                                                    <?php
                                                    $this->db->where('id', $in['anggota']);
                                                    $query = $this->db->get('karyawan')->result_array();
                                                    ?>
                                                    <?php foreach ($query as $nama) : ?>
                                                        <?= $no . ". " . $nama['nama'] . '<br>' ?>
                                                    <?php endforeach ?>
                                                <?php endforeach; ?>
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
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['jam'] . "-" . $d['kembali'] ?></td>
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
                                                                echo "<span class='label label-danger'>Menunggu</span>";
                                                            } elseif ($d['status'] == 2) {
                                                                echo "<span class='label label-success'>Setuju</span>";
                                                            } elseif ($d['status'] == 3) {
                                                                echo "<span class='label label-primary'>Batal</span>";
                                                            } else {
                                                                echo "<i class='fa fa-check-square fa-lg' style='color:green'></i>";
                                                            } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <td>: <?= $d['divisi']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Email Head</th>
                                                    <td>: <?= $d['emailhead'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Anggota</th>
                                                    <td>: <?php $no = 0; ?>
                                                        <?php foreach ($sql as $in) : $no++ ?>
                                                            <?php
                                                            $this->db->where('id', $in['anggota']);
                                                            $query = $this->db->get('karyawan')->result_array();
                                                            ?>
                                                            <?php foreach ($query as $nama) : ?>
                                                                <?= $no . ". " . $nama['nama'] . '<br>' ?>
                                                            <?php endforeach ?>
                                                        <?php endforeach; ?></td>
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