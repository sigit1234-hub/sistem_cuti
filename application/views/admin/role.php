<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            <?= $title; ?>
        </h1>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="" data-toggle="modal" data-target="#newIzinModal">
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col" width="35%">Nama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($role as $d) : ?>
                                        <tr>
                                            <th scope=#><?= $i; ?></th>
                                            <td><?= $d['role'] ?></td>
                                            <td>
                                                <button class="btn btn-default" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><i class="fa fa-pencil-square"></i></button>
                                                <a class="btn btn-default" href="<?= base_url('Admin/roleaccess/') . $d['id']; ?>"><i class=" fa fa-paper-plane"></i></a>
                                                <a href=" <?= base_url('Admin/delete/') . $d['id']; ?>" class="btn btn-default" onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Aksi</th>
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

<!-- Modal -->
<div class="modal fade" id="newIzinModal" tabindex="-1" role="dialog" aria-labelledby="newIzinModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newIzinModalLabel">Tambah Role</h4>
            </div>

            <!-- Nested Row within Card Body -->
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form</h1>
                    <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                </div>
                <form class="user" method="POST" action="<?= base_url('Admin/role'); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="role" name="role">
                                <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $no = 0;
foreach ($role as $d) : $no++ ?>
    <div class="modal fade" id="lihatModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Role</h4>
                </div>
                <div class="modal-body">
                    <form class="user" method="POST" action="<?= base_url('Admin/edit'); ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id'] ?>">
                                    <input type="text" class="form-control" id="role" name="role" value="<?= $d['role'] ?>">
                                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <hr>
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