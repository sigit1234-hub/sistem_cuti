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
                                        <h4 class="pag e-title float-left">Surat Perintah Lembur </h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('User') ?>">User</a></li>
                                            <li class="breadcrumb-item active">Pengajuan SPL</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <ol class="breadcrumb float-right">
                                    <li>
                                        <a href="<?= base_url('User/input_spl') ?>" type="button" class="breadcrumb-item btn btn-primary btn-block waves-effect waves-light">Tambah SPL</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data pengajuan spl</h4>
                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">No</th>
                                <th scope="col" width="10%">Foto</th>
                                <th scope="col">Status</th>
                                <th scope="col">kode SPL</th>
                                <th scope="col" width="3%">Tanggal Pengajuan</th>
                                <th scope="col">Anggota</th>
                                <th scope="col" width="15%">Untuk Tanggal/Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($spl->result_array() as $d) : ?>
                                <tr>
                                    <th scope=# data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $i; ?></th>
                                    <td class="users-list clearfix" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
                                        <img class="img-responsive rounded-circle" style="width: 60%;" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>">
                                    </td>
                                    <td><?php if ($d['status'] == 1) {
                                            echo "<label class='badge badge-danger'>Menunggu</label>";
                                        } elseif ($d['status'] == 2) {
                                            echo "<label class='badge badge-success'>Setuju</label>";
                                        } elseif ($d['status'] == 3) {
                                            echo "<label class='badge badge-primary'>Full Cek</label>";
                                        } elseif ($d['status'] == 4) {
                                            echo "<label class='badge badge-warning'>Batal</label>";
                                        } else {
                                            echo "<label class='badge badge-danger'>Batal</label>";
                                        } ?></td>
                                    <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['kode_spl'] ?></td>
                                    <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
                                    <?php
                                    $kode  = $d['kode_spl'];
                                    $this->db->where('kode_input_spl', $kode);
                                    $sql = $this->db->get('input_spl');
                                    ?>
                                    <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
                                        <?php $no = 0; ?>
                                        <?php foreach ($sql->result_array() as $in) : $no++ ?>
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
                                                                                                                ?><br><br>
                                        <?= $d['jam'] . "-" . $d['kembali'] ?>
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