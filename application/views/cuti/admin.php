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
                                            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Admin</a></li>
                                            <li class="breadcrumb-item active">Data Cuti</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="responsive-datatable" style="Word-wrap:break-Word;
              " class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr style="text-align: center;">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Diajukan</th>
                                <th>Head Dept</th>
                                <th>HRD</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cuti as $d) : ?>
                                <tr>
                                    <td width="5%"><?= $i; ?></td>
                                    <?php
                                    $id = $d['nama_id'];
                                    $this->db->where('id', $id);
                                    $return = $this->db->get('karyawan')->result_array()
                                    ?>
                                    <?php foreach ($return as $nama) : ?>
                                        <td><?= $nama['nama']; ?></td>
                                    <?php endforeach; ?>
                                    <td><?php if ($d['status1'] == 1) {
                                            echo "<span class='label label-danger' width='30px'>Menunggu <br>ACC head</span>";
                                        } elseif ($d['status1'] == 2 && $d['status'] == 2) {
                                            echo "<span class='label label-success'>DISETUJUI</span>";
                                            echo "<br>Tanggal Approvel <br>";
                                            if ($d['tanggal_acc_hr'] == $d['date_acc_hr']) {
                                                echo '<b>' . date('d M Y', strtotime($d['tanggal_acc_hr'])) . '</b>';
                                            } elseif (date(' M', strtotime($d['tanggal_acc_hr'])) == date(' M', strtotime($d['date_acc_hr']))) {
                                                echo '<b>' . date('d', strtotime($d['tanggal_acc_hr'])) . "-" . date('d M Y', strtotime($d['date_acc_hr'])) . '</b>';
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
                                    <?php
                                    $this->db->where('id', $d['head']);
                                    $divisi = $this->db->get('karyawan')->result_array();
                                    ?>
                                    <?php foreach ($divisi as $di) : ?>
                                        <td>
                                            <?php if ($d['status1'] == 2) {
                                                echo $di['nama'];
                                                echo "<br>" . $d['date_created_head'];
                                            } else {
                                                echo "Belum ada ACC";
                                            }
                                            ?>
                                        </td>
                                    <?php endforeach; ?>
                                    <?php
                                    $this->db->where('id', $d['head']);
                                    $hrd = $this->db->get('karyawan')->result_array();
                                    ?>
                                    <?php foreach ($hrd as $hr) : ?>
                                        <td><?php
                                            if ($d['status'] == 2) {
                                                echo $hr['nama'];
                                                echo "<br>" . $d['date_created_hr'];
                                            } else {
                                                echo "Belum ada ACC";
                                            }
                                            ?>
                                        </td>
                                    <?php endforeach; ?>
                                    <td width="30%"><?= $d['keterangan'] ?></td>
                                    <td>
                                        <a href="#custom-modal<?= $d['id'] ?>" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"><i class=" fa fa-pencil-square"></i></a>
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

<?php $no = 0;
foreach ($cuti as $d) : $no++ ?>

    <!-- Modal -->
    <div id="custom-modal<?= $d['id'] ?>" class="modal-demo" style="width: 70%;">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Edit Pengajuan Cuti</h4>
        <p>Saat edit cuti mohon ditunggu hingga proses menyimpan data selesai.</p>
        <form class="user" method="post" action="<?= base_url('Admin/edit_cuti'); ?>">
            <div class="custom-modal-text">
                <?php
                $id = $d['nama_id'];
                $get = "SELECT nama FROM karyawan WHERE id = $id";
                $sql =  $this->db->query($get)->result_array();
                ?>
                <?php foreach ($sql as $nm) : ?>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group" disabled>
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?php $timezone = time() + (60 * 60 * 7);
                                                                                                                        echo gmdate('d-m-Y H:i:s', $timezone); ?>">
                                <input type="hidden" class="form-control" id="head" name="head" value="<?= $user['id']; ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nm['nama']; ?>" readonly>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">
                                <input type="hidden" class="form-control" id="value" name="value" value="1">
                                <input type="hidden" class="form-control" id="nama_id" name="nama_id" value="<?= $d['nama_id']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <label for="exampleInputEmail1">Tanggal Pengajuan</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="date_created1" name="date_created1" value="<?= $d['tanggal'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="date_end1" name="date_end1" value="<?= $d['date_end'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <label for="exampleInputEmail1">Perubahan tanggal</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="tanggal_acc_head" name="tanggal_acc_head" value="<?= $d['tanggal'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" id="date_acc_head" name="date_acc_head" value="<?= $d['date_end'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group" disabled>
                                <label for="exampleInputEmail1">Kategori</label>
                                <?php
                                $this->db->where('id_jeniscuti', $d['kategori_cuti']);
                                $jeniscuti = $this->db->get('jenis_cuti')->result_array();
                                ?>
                                <?php foreach ($jeniscuti as $c) : ?>
                                    <input type="text" class="form-control" id="katagori" name="katagori" value="<?= $c['nama']; ?>" readonly>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group" disabled>
                                <label for="exampleInputEmail1">Keterangan</label>
                                <textarea type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $d['keterangan']; ?>" readonly><?= $d['keterangan']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <div class="form-group" disabled>
                                <label for="exampleInputEmail1">Catatan</label>
                                <textarea type="text" class="form-control" id="catatan" name="catatan" placeholder="Catatan Head Dept"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <select name="status" id="status" class="form-control">
                                <option value="2">Setuju</option>
                                <option value="3">Batalkan</option>
                            </select>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
    </div>
<?php endforeach; ?>