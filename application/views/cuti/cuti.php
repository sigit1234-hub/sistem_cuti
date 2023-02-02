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
            <div class="col-md-12">
                <div class="card-box tilebox-three">
                    <a href="#" style="color:black">
                        <div class="text-left">
                            <p>Mohon perhatian, untuk persetujuan cuti mohon untuk menunggu konfirmasi <br>dari HRD atau dapat di status pengajuan. <br>apabila masih menunggu berarti pengajuan cuti anda masih dalam tahap riview.</p>
                        </div>
                    </a>
                    <div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Diajukan</th>
                                <th>Head Dept</th>
                                <th>HRD</th>
                                <th>keterangan</th>
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
                                        <td><?php if ($d['status1'] == 1) {
                                                echo "<span class='label label-danger' width='30px'>Menunggu <br>ACC head</span>";
                                            } elseif ($d['status1'] == 2 && $d['status'] == 2) {
                                                echo "<span class='label label-success'>DISETUJUI</span>";
                                                echo "<br>Tanggal Approvel <br>";
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
                                            } ?>"

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
                                        $id_div = $d['head'];
                                        $query = "SELECT * FROM karyawan WHERE id =  $id_div";
                                        $divisi  =  $this->db->query($query)->result_array();
                                        ?>
                                        <?php foreach ($divisi as $di) : ?>
                                            <td>
                                                <?php if ($d['status1'] == 2) {
                                                    echo $di['nama'];
                                                } else {
                                                    echo "Belum ada ACC";
                                                }
                                                ?>
                                                <br> <?= $d['date_created_head'] ?>
                                            </td>
                                        <?php endforeach; ?>
                                        <?php
                                        $nama_hr = $d['mengetahui'];
                                        $sql = "SELECT * FROM karyawan WHERE id =  $nama_hr";
                                        $hrd  =  $this->db->query($sql)->result_array();
                                        ?>
                                        <?php foreach ($hrd as $hr) : ?>
                                            <td><?php
                                                if ($d['status'] == 2) {
                                                    echo $hr['nama'];
                                                } else {
                                                    echo "Belum ada ACC";
                                                }
                                                ?> <br><?= $d['date_created_hr'] ?></td>
                                        <?php endforeach; ?>
                                        <td width="30%"><?= $d['keterangan'] ?></td>
                                        <td>
                                            <a href="#custom-modal<?= $d['id'] ?>" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"><i class=" fa fa-pencil-square"></i></a>
                                        </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
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
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y G:i:s'); ?>">
                                <input type="hidden" class="form-control" id="nama_id" name="nama_id" value="<?= $user['id']; ?>">
                                <input type="hidden" class="form-control" id="status" name="status" value="1">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
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