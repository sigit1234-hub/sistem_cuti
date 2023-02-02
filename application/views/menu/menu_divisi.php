<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" data-toggle="modal" data-target=".modaljabatan">
            <i class="fa fa-user-plus"></i><span> Tambah Jabatan</span>
        </a>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;margin-right: 20px;" data-toggle="modal" data-target="#divisiModal">
            <i class="fa fa-user-plus"></i><span> Tambah Divisi</span>
        </a>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <?= $this->session->flashdata('message'); ?>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%;">No</th>
                                                <th>Nama</th>
                                                <th>Email Head</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>

                                            <?php foreach ($divisi as $d) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $d['nama_divisi'] ?></td>
                                                    <td><?= $d['email_head'] ?></td>
                                                    <td>
                                                        <a class="btn btn-default" data-toggle="modal" data-target=".modalBesar<?= $d['id']; ?>"><i class="fa fa-pencil-square"></i></a>
                                                        <a href="<?= base_url('Menu/deletdivisi/') . $d['id'] ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <?php $i++; ?>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 1%;">No</th>
                                                <th>Nama</th>
                                                <th>Email Head</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%;">No</th>
                                                <th>Devisi</th>
                                                <th>Nama</th>
                                                <th>active</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>

                                            <?php foreach ($jabatan as $J) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $J['nama_divisi'] ?></td>
                                                    <td><?= $J['nama'] ?></td>
                                                    <td><?php if ($J['is_active'] == 1) {
                                                            echo "<span class='label label-primary' style='font-size: 90%;'>AKTIF</span>";
                                                        } else {
                                                            echo "<span class='label label-warning' style='font-size: 70%;'>NON-AKTIF</span>";
                                                        } ?></td>
                                                    <td>
                                                        <a class="btn btn-default" data-toggle="modal" data-target=".modalKecil<?= $J['id']; ?>"><i class="fa fa-pencil-square"></i></a>
                                                        <a href="<?= base_url('Menu/deletjabatan/') . $J['id'] ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                    <?php $i++; ?>
                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 1%;">No</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
    </section>
</div>
<!-- modal tambah -->
<div class="modal fade" id="divisiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Divisi</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/divisi'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukan divisi baru">
                            <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email head">
                            <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal update divisi -->
<?php $no = 0;
foreach ($divisi as $d) : $no++ ?>
    <div class="modal fade modalBesar<?= $d['id']; ?>" id="divisiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Divisi</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('menu/editdivisi'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">
                                <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $d['nama_divisi']; ?>" required>
                                <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Email Head</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $d['email_head']; ?>" required>
                                <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- modal update Jabatan -->
<?php $no = 0;
foreach ($jabatan as $d) : $no++ ?>
    <div class="modal fade modalKecil<?= $d['id']; ?>" id="divisiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update jabatan</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('menu/editjabatan'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Id Jabatan</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">
                                <input type="text" class="form-control" id="idjabatan" name="idjabatan" value="<?= $d['id_jabatan']; ?>" required>
                                <?= form_error('idjabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>" required>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- modal jabatan -->
<div class="modal fade modaljabatan" id="divisiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Jabatan</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/tambahjabatan'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan jabatan baru">
                            <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Divisi</label>
                            <select type="text" class="form-control" id="divisi" name="divisi">
                                <?php foreach ($divisi as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama_divisi'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Active?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>