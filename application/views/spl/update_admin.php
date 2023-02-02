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

                                        <?php
                                        $this->db->where('id', $this->session->userdata('divisi'));
                                        $sql = $this->db->get('devisi')->result_array();
                                        ?>
                                        <?php foreach ($sql as $s) : ?>
                                            <h4 class="pag e-title float-left">Data Lembur <?= $s['nama_divisi']; ?></h4>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-sm-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Admin</a></li>
                                            <li class="breadcrumb-item active">Data Lembur</li>
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

        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data pengajuan spl</h4>
                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">No</th>
                                <th scope="col" width="10%">Action</th>
                                <th scope="col" width="10%">Foto</th>
                                <th scope="col">kode SPL</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($input_spl as $d) : ?>
                                <?php
                                $this->db->where('id', $d['anggota']);
                                $get_anggota = $this->db->get('karyawan')->result_array();
                                ?>
                                <?php foreach ($get_anggota as $get_ang) : ?>
                                    <tr>
                                        <th scope=# data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $i; ?></th>
                                        <td>
                                            <button data-toggle="modal" data-target="#editModal<?php echo $d['id']; ?>" type="button" class="btn btn-primary waves-effect waves-light" <?php if ($d['aksi'] == 0) {
                                                                                                                                                                                            echo "";
                                                                                                                                                                                        } else {
                                                                                                                                                                                            echo "disabled";
                                                                                                                                                                                        };
                                                                                                                                                                                        ?>>Cek Lembur</button>
                                        </td>
                                        <td class="users-list clearfix" data-toggle="modal">
                                            <img class="img-responsive rounded-circle" style="width: 60%;" src="<?= base_url('assets/img/profile/') . $get_ang['foto'] ?> ">
                                        </td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['kode_input_spl'] ?></td>
                                        <?php
                                        $this->db->where('kode_spl', $d['kode_input_spl']);
                                        $get_tanggal = $this->db->get('spl')->result_array();
                                        ?>
                                        <?php foreach ($get_tanggal as $tanggal) : ?>
                                            <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php if ($tanggal['tanggal'] == $tanggal['date_end']) {
                                                                                                                            echo date('d M Y', strtotime($tanggal['tanggal']));
                                                                                                                        } elseif (date(' M', strtotime($tanggal['tanggal'])) == date(' M', strtotime($tanggal['date_end']))) {
                                                                                                                            echo date('d', strtotime($tanggal['tanggal'])) . "-" . date('d M Y', strtotime($tanggal['date_end']));
                                                                                                                        } else {
                                                                                                                            echo date('d M', strtotime($tanggal['tanggal'])) . "-" . date('d M Y', strtotime($tanggal['date_end']));
                                                                                                                        }
                                                                                                                        ?></td>
                                        <?php endforeach; ?>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $get_ang['nama']; ?></td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['pekerjaan']; ?></td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
                                            <?php if ($d['aksi'] == 0) {
                                                echo "<label class='badge badge-danger'>Belum Ditanggapi</label>";
                                            } else {
                                                echo "<label class='badge badge-primary'>Ditanggapi</label>";
                                            };
                                            ?></td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['catatan']; ?></td>
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

<?php $no = 0;
foreach ($input_spl as $edit) : $no++ ?>

    <!-- Modal -->
    <div class="modal fade" id="editModal<?= $edit['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="header-title m-t-0 m-b-10">Data Detail Lembur</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="user" method="POST" action="<?= base_url('Admin/edit_spl'); ?>">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                        <div class="p-20">
                                            <h6 class="text-muted">Nama</h6>
                                            <?php
                                            $id = $edit['anggota'];
                                            $this->db->where('id', $id);
                                            $query = $this->db->get('karyawan')->result_array();
                                            ?>
                                            <?php foreach ($query as $d) : ?>
                                                <p class="text-muted m-b-15 font-13">
                                                    <?= $d['nama']; ?>
                                                </p>
                                            <?php endforeach; ?>
                                            <div class="m-t-20">
                                                <h6 class="text-muted">Pekerjaan</h6>
                                                <p class="text-muted m-b-15 font-13">
                                                    <?= $edit['pekerjaan']; ?>
                                                </p>
                                            </div>
                                            <div class="m-t-20">
                                                <h6 class="text-muted">Catatan</h6>
                                                <p class="text-muted m-b-15 font-13">
                                                    <?= $edit['note']; ?>
                                                </p>
                                            </div>

                                            <div class="m-t-20">
                                                <h6 class="text-muted">Tinggalkan Catatan</h6>
                                                <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Silahkan beri catatan..." />
                                                <input type="hidden" class="form-control" name="id" id="id" value="<?= $edit['id'] ?>" />
                                                <input type="hidden" class="form-control" name="kode" id="kode" value="<?= $edit['kode_input_spl'] ?>" />
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>