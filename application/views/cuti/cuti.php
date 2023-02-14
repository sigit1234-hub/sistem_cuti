<?php
$this->load->model('User_m');
?>
<!-- tambah -->
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
                                <th>Kepala Toko</th>
                                <th>HRD</th>
                                <th>keterangan</th>
                                <th>Details</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cuti as $d) : ?>
                                <?php
                                $id = $d['nama_id'];
                                $this->db->where('id', $id);
                                $return = $this->db->get('karyawan')->result_array()
                                ?>
                                <?php foreach ($return as $nama) : ?>
                                    <tr align="center">
                                        <td width="5%"><?= $i; ?></td>
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
                                            $nama_head = $this->User_m->detail_nama($d['head']);
                                            foreach ($nama_head as $di) {
                                                if ($d['status1'] == 2) {
                                                    echo $di['nama'];
                                                    echo "<br>" . $d['date_created_head'];
                                                } else {
                                                    print "Belum ada Persetujuan";
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $hrd = $this->User_m->detail_nama($d['hrd']);
                                            foreach ($hrd as $hr) {
                                                if ($d['status'] == 2) {
                                                    echo $hr['nama'];
                                                    echo "<br>" . $d['date_created_hr'];
                                                } else {
                                                    echo "Belum ada Persetujuan";
                                                }
                                            } ?>
                                        </td>
                                        <td width="30%"><?= $d['keterangan'] ?></td>
                                        <td>
                                            <a href="#custom-modal<?= $d['id'] ?>" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a">Lihat</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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

<?php $no = 0;
foreach ($cuti as $d) : $no++ ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>timeline.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Modal -->
    <div id="custom-modal<?= $d['id'] ?>" class="modal-demo" style="width: 70%;">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">History Pengajuan Cuti</h4>

        <section class="timeline_area section_padding_130">
            <div class="container">
                <!-- <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-lg-6">
                       
                        <div class="section_heading text-center">
                            <h6>Our History</h6>
                            <div class="line"></div>
                        </div>
                    </div>
                </div> -->
                <div class="row" style="margin-top: 30px">
                    <div class="col-12">
                        <!-- Timeline Area-->
                        <div class="apland-timeline-area">
                            <!-- Single Timeline Content-->
                            <div class="single-timeline-area">
                                <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                    <p>Near Future</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                            <div class="timeline-text">
                                                <h6>Updated 5.0</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-timeline-area">
                                <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                    <p>Near Future</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                            <div class="timeline-text">
                                                <h6>Updated 5.0</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-timeline-area">
                                <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                    <p>Near Future</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                            <div class="timeline-text">
                                                <h6>Updated 5.0</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-timeline-area">
                                <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                    <p>Near Future</p>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                            <div class="timeline-text">
                                                <h6>Updated 5.0</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endforeach; ?>