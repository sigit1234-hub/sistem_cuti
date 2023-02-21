<?php
$this->load->model('User_m');
?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
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
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="responsive-datatable" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Diajukan</th>
                                <th>kepala Toko</th>
                                <th>HRD</th>
                                <th>Keterangan</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cuti as $d) : ?>
                                <tr>
                                    <td width="2%"><?= $i; ?></td>
                                    <?php
                                    $id = $d['nama_id'];
                                    $this->db->where('id', $id);
                                    $return = $this->db->get('karyawan')->result_array()
                                    ?>
                                    <?php foreach ($return as $nama) : ?>
                                        <td width="9%"><img class="img-responsive rounded-circle" style="width: 60%;" src="<?= base_url('assets/img/profile/') . $nama['foto'] ?>"></td>
                                        <td><?= $nama['nama']; ?></td>
                                    <?php endforeach; ?>
                                    <td><?php if ($d['status1'] == 1) {
                                            echo "<span class='label label-danger' width='30px'>Menunggu <br>ACC head</span>";
                                        } elseif ($d['status1'] == 2 && $d['status'] == 3) {
                                            echo "<span class='label label-success'>DISETUJUI</span>";
                                            echo "<br>Tanggal yang di ACC <br>";
                                            if ($d['tanggal_acc_hr'] == $d['date_acc_hr']) {
                                                echo '<b>' . date('d M Y', strtotime($d['tanggal_acc_hr'])) . '</b>';
                                            } elseif (date(' M', strtotime($d['tanggal_acc_hr'])) == date(' M', strtotime($d['date_acc_hr']))) {
                                                echo '<b>' . date('d', strtotime($d['tanggal_acc_hr'])) . '-' . date('d M Y', strtotime($d['date_acc_hr'])) . '</b>';
                                            } else {
                                                echo '<b>' . date('d M', strtotime($d['tanggal_acc_hr'])) . "-" . date('d M Y', strtotime($d['date_acc_hr'])) . '</b>';
                                            }
                                        } elseif ($d['status1'] == 2) {
                                            echo "<span class='label label-warning'>Menunggu<br>ACC HRD</span>";
                                        } elseif ($d['status1'] == 3) {
                                            echo "<span class='label label-danger'>DIBATALKAN</span>";
                                        } else {
                                            echo "<span class='label label-danger'>??</span>";
                                        } ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo "<span class='label label-danger'>" . date('d-M-Y G:i', strtotime($d['date_created'])) . "</span>" . '<br>' . 'Untuk ' . '<br>';
                                        if ($d['tanggal'] == $d['date_end']) {
                                            echo '<b>' . date('d M Y', strtotime($d['tanggal'])) . '</b>';
                                        } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                            echo '<b>' . date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end'])) . '</b>';
                                        } else {
                                            echo '<b>' . date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end'])) . '</b>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($d['status1'] == 2) {

                                            $head = $this->User_m->detail_nama($d['head']);
                                            foreach ($head as $di) {
                                                echo $di['nama'];
                                                echo "<br> (" . $d['date_created_head'] . ")";
                                            }
                                        } else {
                                            echo "Belum ada ACC";
                                        }
                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                        if ($d['status'] == 3) {
                                            $head = $this->User_m->detail_nama($d['hr']);
                                            foreach ($head as $di) {
                                                echo $di['nama'];
                                                echo "<br> (" . $d['date_created_hr'] . ")";
                                            }
                                        } else {
                                            echo "Belum ada ACC";
                                        }
                                        ?>
                                    </td>
                                    <td><?= $d['keterangan'] ?></td>
                                    <td>
                                        <a href="#custom-modal<?= $d['id'] ?>" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">lihat</a>
                                    </td>
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
            <form action="<?php echo base_url('User/cuti') ?>" method="POST">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group" disabled>
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?php $timezone = time() + (60 * 60 * 7);
                                                                                                                        echo gmdate('d-m-Y H:i:s', $timezone); ?>">
                                <input type="hidden" class="form-control" id="nama_id" name="nama_id" value="<?= $user['id']; ?>">
                                <input type="hidden" class="form-control" id="status" name="status" value="1">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Cuti</label>
                                <select class="form-control" id="jenis_cuti" name="jenis_cuti" placeholder="Jenis cuti">
                                    <?php foreach ($jenis_cuti as $i) : ?>
                                        <option value="<?= $i['id_jeniscuti'] ?>"><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal mulai cuti">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sampai</label>
                                <input type="date" class="form-control" id="date_end" name="date_end" placeholder="Tanggal akhir cuti">
                                <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
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


<!-- modal history -->
<?php $no = 0;
foreach ($cuti as $d) : $no++ ?>


    <!-- Modal -->
    <div id="custom-modal<?= $d['id'] ?>" class="modal-demo" style="width: 70%;">

        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">History Pengajuan</h4>
        <link rel="stylesheet" href="<?= base_url('assets/css/timeline.css') ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <div class="container" style="margin: 30px;">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <ul class="cbp_tmtimeline">
                        <?php
                        $this->db->where('kode_cuti', $d['kode_cuti']);
                        $data_history = $this->db->order_by('id_his', 'DESC')->get('history_cuti');
                        ?>
                        <?php foreach ($data_history->result_array() as $key) : ?>
                            <?php
                            $namakaryawan = $this->User_m->detail_nama($key['id_karyawan']);
                            $status = $this->User_m->status($key['status']);
                            foreach ($namakaryawan as $nama) :
                                foreach ($status as $st) :
                            ?>
                                    <li>
                                        <time class="cbp_tmtime" datetime="2017-11-04T03:45">
                                            <p><?= $key['tanggal'] ?></p>
                                        </time>
                                        <div class="cbp_tmicon bg-info"><img class="img-responsive rounded-circle" style="width: 90%;" src="<?= base_url('assets/img/profile/') . $nama['foto'] ?>"></div>
                                        <div class="cbp_tmlabel">
                                            <?php
                                            if ($key['status'] == 1) { ?>
                                                <p style="text-align: left;">Pengajuan cutimu masih <b class="text-<?= $st['warna'] ?>"><?= $st['status'] ?></b> Persetujuan</p>
                                                </h2>
                                            <?php } elseif ($key['status'] == 2) { ?>
                                                <p style="text-align: left;">Pengajuan cutimu <b class="text-<?= $st['warna'] ?>"><?= $st['status'] ?></b>
                                                    <br>
                                                    By <?= $nama['nama'] ?>,
                                                    Catatan : <?= $key['catatan'] ?><br>
                                                    Tanggal Persetujuan :
                                                    <?php
                                                    if ($d['tanggal_acc_head'] == $d['date_acc_head']) {
                                                        echo '<b>' . date('d M Y', strtotime($d['tanggal_acc_head'])) . '</b>';
                                                    } elseif (date(' M', strtotime($d['tanggal_acc_head'])) == date(' M', strtotime($d['date_acc_head']))) {
                                                        echo '<b>' . date('d', strtotime($d['tanggal_acc_head'])) . "-" . date('d M Y', strtotime($d['date_acc_head'])) . '</b>';
                                                    } else {
                                                        echo '<b>' . date('d M', strtotime($d['tanggal_acc_head'])) . "-" . date('d M Y', strtotime($d['date_acc_head'])) . '</b>';
                                                    }
                                                    ?>
                                                </p>
                                            <?php } elseif ($key['status'] == 3) { ?>
                                                <p style="text-align: left;">Pengajuan cutimu <b class="text-<?= $st['warna'] ?>"><?= $st['status'] ?></b>
                                                    <br>
                                                    By <?= $nama['nama'] ?>,
                                                    Catatan : <?= $key['catatan'] ?><br>
                                                    Tanggal Persetujuan :
                                                    <?php
                                                    if ($d['tanggal_acc_hr'] == $d['date_acc_hr']) {
                                                        echo '<b>' . date('d M Y', strtotime($d['tanggal_acc_hr'])) . '</b>';
                                                    } elseif (date(' M', strtotime($d['tanggal_acc_hr'])) == date(' M', strtotime($d['date_acc_hr']))) {
                                                        echo '<b>' . date('d', strtotime($d['tanggal_acc_hr'])) . "-" . date('d M Y', strtotime($d['date_acc_hr'])) . '</b>';
                                                    } else {
                                                        echo '<b>' . date('d M', strtotime($d['tanggal_acc_hr'])) . "-" . date('d M Y', strtotime($d['date_acc_hr'])) . '</b>';
                                                    }
                                                    ?>
                                                </p>
                                            <?php } else { ?>
                                                <p style="text-align: left;">Pengajuan cutimu <b class="text-<?= $st['warna'] ?>"><?= $st['status'] ?></b>
                                                    <br>
                                                    By <?= $nama['nama'] ?>,
                                                    Catatan : <?= $key['catatan'] ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>