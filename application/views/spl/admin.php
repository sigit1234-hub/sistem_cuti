<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <h1>
            <?= $title; ?>
        </h1>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="<?= base_url('Hrd/laporan') ?>">
            <i class="fa fa-print"></i><span> LAPORAN</span>
        </a>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col">Aksi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">kode SPL</th>
                                        <th scope="col" width="3%">Tanggal Pengajuan</th>
                                        <th scope="col" class="text-center">Anggota/Pekerjaan</th>
                                        <th scope="col" width="10%">Tanggal dan Jam</th>
                                    </tr>
                                </thead>
                                <tbody style="margin-bottom: 40px;">
                                    <?php $i = 1; ?>
                                    <!-- <?php $data = json_decode($spl2) ?> -->
                                    <?php foreach ($spl as $d) : ?>
                                        <tr>
                                            <th scope=# data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $i; ?></th>
                                            <td>
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                                        <span class="fa fa-caret-down"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="" data-toggle="modal" data-target="#editModal<?php echo $d['id']; ?>">Edit</a></li>
                                                        <li><a href="<?= base_url('Hrd/edit_new_spl/') . $d['kode_spl']; ?>">Lihat</a></li>
                                                        <li><a href="<?= base_url('Hrd/tambah_anggota/') . $d['kode_spl']; ?>">Tambah</a></li>
                                                        <li><a class="btn pull-left" <?php if ($d['status'] == 3) {
                                                                                            echo "href=" . base_url() . "Hrd/print/" . $d['kode_spl'] . " target='_blank'";
                                                                                        } else {
                                                                                            echo "disabled";
                                                                                        } ?>>Print</a></li>
                                                        <li><a href="<?= base_url('Hrd/delete_spl/') . $d['kode_spl']; ?>" id="tombol-hapus" onclick="return confirm('yakin?')">Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class=" users-list clearfix" style="width: 5%;" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
                                                <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>"></br>
                                                <?php
                                                $kalimat = $d['nama'];
                                                $pecah = explode(" ", $kalimat);
                                                echo $pecah[0]
                                                ?></br>
                                                <?php if ($d['status'] == 1) {
                                                    echo "<span class='label label-danger'>Menunggu</span>";
                                                } elseif ($d['status'] == 2) {
                                                    echo "<span class='label label-success'>Setuju</span>";
                                                } elseif ($d['status'] == 3) {
                                                    echo "<span class='label label-primary'>Full Check</span>";
                                                } else {
                                                    echo "<span class='label label-warning'>Batal</span>";
                                                } ?>
                                            </td>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['kode_spl'] ?></td>
                                            <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
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



                                                        <?php
                                                        $this->db->where('kode_input_spl', $in['kode_input_spl']);
                                                        $this->db->where('anggota', $in['anggota']);
                                                        $query = $this->db->get('input_spl')->result_array();
                                                        ?>
                                                        <?php foreach ($query as $peker) : ?>
                                                            <?= $no . ". " ?>
                                                            <?php if ($peker['aksi'] == 1) {
                                                                echo "<i class='fa fa-angellist' style='color: blue'></i> <span style='color: blue'>Sudah dicek dong</span> <br>";
                                                            } else {
                                                                echo "<i class='fa fa-hand-pointer-o' style='color: purple'></i> <span style='color: purple'>Yah belum dicek sist</span> <br>";
                                                            }; ?>
                                                            <?= $nama['nama'] . ": " . "<p class='text-green'>" . $peker['pekerjaan'] . "</p>" ?>

                                                        <?php endforeach ?>
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
                                                                                                                        ?><br>
                                                <?= $d['jam'] . "-" . $d['kembali'] ?>
                                            </td>
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
foreach ($spl2 as $d) : $no++ ?>
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
                                                                echo "<span class='label label-primary'>Full Cek</span>";
                                                            } else {
                                                                echo "<i class='fa fa-check-square fa-lg' style='color:green'></i>";
                                                            } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <td>: <?= $d['divisi'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Email Head</th>
                                                    <td>: <?= $d['emailhead'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Anggota</th>
                                                    <?php
                                                    $kode  = $d['kode_spl'];
                                                    $this->db->where('kode_input_spl', $kode);
                                                    $sql = $this->db->get('input_spl')->result_array();
                                                    ?>
                                                    <td>:
                                                        <?php $no = 0; ?>
                                                        <?php foreach ($sql as $in) : $no++ ?>
                                                            <?php
                                                            $ambilnama =  "SELECT nama FROM karyawan WHERE id = $in[anggota]";
                                                            $sql = $this->db->query($ambilnama)->result_array();
                                                            ?>
                                                            <?= $no . ". " . $in['anggota'] . $in['aksi'] . '<br>' ?>
                                                        <?php endforeach; ?>
                                                    </td>

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
<?php $no = 0;
foreach ($spl2 as $edit) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="editModal<?= $edit['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit SPL - <?= $edit['id'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Form Pengajuan <?= $edit['nama'] ?></h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('Hrd/edit_spl'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" value="<?= $edit['tanggal']; ?>" readonly>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $edit['id']; ?>">
                                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sampai tanggal</label>
                                    <input type="text" class="form-control datepicker" id="sampai" name="sampai" value="<?= $edit['date_end']; ?>" readonly>
                                    <?= form_error('sampai', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>jam</label>
                                    <input type="time" class="form-control" id="jam" name="jam" value="<?= $edit['jam']; ?>">
                                    <?= form_error('jam', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sampai jam</label>
                                    <input type="time" class="form-control" id="kembali" name="kembali" value="<?= $edit['kembali']; ?>">
                                    <?= form_error('kembali', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status Persetujuan</label>
                                    <select type="text" class="form-control" id="status" name="status">
                                        <option value="<?= $edit['status'] ?>"><?php if ($edit['status'] == 1) {
                                                                                    echo "Menunggu";
                                                                                } elseif ($edit['status'] == 2) {
                                                                                    echo "Setuju";
                                                                                } elseif ($edit['status'] == 3) {
                                                                                    echo "Full Cek";
                                                                                } else {
                                                                                    echo "Batal";
                                                                                }
                                                                                ?>
                                        </option>
                                        <option value="1">Menunggu</option>
                                        <option value="2">Setujui</option>
                                        <option value="3">Batal</option>
                                    </select>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="text" class="form-control" id="note" name="note" value="<?= $edit['note']; ?>">
                                    <?= form_error('note', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>