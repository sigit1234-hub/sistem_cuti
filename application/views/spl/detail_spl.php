<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <a class="btn btn-primary" style="margin-bottom: 20px;" href="<?= $previous; ?>">
                <i class="fa fa-arrow-circle-left"></i><span> Back</span>
            </a>
        </h1>
    </section>

    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div id="notif"></div>
                        </div>
                        <table class="table table-bordered table-striped" id="example1">
                            <thead>
                                <tr>
                                    <th class="text-center" width="5%">#</th>
                                    <th width="8%">Aksi</th>
                                    <th width="8%">Foto</th>
                                    <th width="25%">Nama Anggota</th>
                                    <th>pekerjaan</th>
                                    <th>Note</th>
                                    <th>Check</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($spl as $im) { ?>
                                    <tr data-toggle="modal" data-target="#lihatModal<?php echo $im['id']; ?>">
                                        <th><?= $i; ?></th>
                                        <td>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                                    <span class="fa fa-caret-down"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="" data-toggle="modal" data-target="#editModal<?php echo $im['id']; ?>">Edit</a></li>
                                                    <li><a href="<?= base_url('Hrd/delete_input_spl/') . $im['id'] . '/' . $im['kode_input_spl']; ?>" id="tombol-hapus" onclick="return confirm('yakin?')">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <?php
                                        $id = $im['anggota'];
                                        $this->db->where('id', $id);
                                        $query = $this->db->get('karyawan')->result_array();
                                        ?>
                                        <?php foreach ($query as $q) : ?>
                                            <td><img class=" direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $q['foto'] ?>">
                                            </td>
                                            <td><?= $q['nama'] ?></td>
                                        <?php endforeach; ?>
                                        <td><?= $im['pekerjaan'] ?></td>
                                        <td><?= $im['note']; ?></td>
                                        <td>
                                            <?php if ($im['aksi'] == 0) {
                                                echo "<label class='badge badge-danger'>Belum Ditanggapi</label>";
                                            } else {
                                                echo "<label class='badge badge-primary'>Ditanggapi</label>";
                                            };
                                            ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </section>
</div>

<!-- modal edit  -->
<?php $no = 0;
foreach ($spl as $im) : $no++ ?>
    <!-- Modal -->
    <div class=" modal fade" id="editModal<?= $im['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit <?= $im['id'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4"><?= $im['kode_input_spl'] ?></h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <?php echo form_open_multipart('Hrd/update_input_spl') ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Part Number</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $im['id']; ?>">
                                    <input type="hidden" class="form-control" id="kode_spl" name="kode_spl" value="<?= $im['kode_input_spl']; ?>">
                                    <?php
                                    $id = $im['anggota'];
                                    $this->db->where('id', $id);
                                    $query = $this->db->get('karyawan')->result_array();
                                    ?>
                                    <?php foreach ($query as $q) : ?>
                                        <select type="text" class="form-control" id="anggota" name="anggota">
                                            <option value="<?= $q['id']; ?>" selected><?= $q['nama']; ?></option>
                                            <?php foreach ($karyawan as $kar) : ?>
                                                <option value="<?= $kar['id']; ?>"><?= $kar['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php endforeach; ?>
                                    <?= form_error('part', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Pekrejaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $im['pekerjaan']; ?>">
                                    <?= form_error('qty', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Note</label>
                                    <input type="text" class="form-control" id="note" name="note" value="<?= $im['note']; ?>">
                                    <?= form_error('ouv', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <hr>
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

<!-- new MR  -->
<?php $no = 0;
foreach ($input_mr as $im) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="newMRModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah <?= $im['kode_mr'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4"><?= $im['kode_mr'] ?></h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <?php echo form_open_multipart('Ga/tambah_barang') ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Part Number</label>
                                    <input type="hidden" class="form-control" id="kode_mr" name="kode_mr" value="<?= $im['kode_mr'] ?>" readonly>
                                    <input type=" text" class="form-control" id="part" name="part">
                                    <?= form_error('part', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>QTY</label>
                                        <input type="text" class="form-control" id="qty" name="qty">
                                        <?= form_error('qty', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>OUV</label>
                                        <input type="text" class="form-control" id="ouv" name="ouv">
                                        <?= form_error('ouv', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea type="text" class="form-control" name="deskripsi" id="deskripsi"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" class="form-control" id="lokasi" name="lokasi">
                                    <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Note</label>
                                    <textarea type="text" class="form-control" name="note" id="note"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>