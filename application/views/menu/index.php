<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            <?= $title; ?>
        </h1>
        <div class="pad margin no-print">
            <div class="callout callout-info" style="margin-bottom: 0!important;">
                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-times-circle fa-lg" style="color:red"></i>
                        Menunggu persetujuan / Dibatalkan
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-check-square fa-lg" style="color:blue"></i>
                        Disetujui dengan perubahan waktu
                    </div>
                    <div class="col-md-3">
                        <i class="fa fa-check-square fa-lg" style="color:green"></i>
                        Disetujui
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="" data-toggle="modal" data-target="#newMenuModal">
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
                            <table id="example1" class="table table-bordered table-striped" width="50%">
                                <thead>
                                    <tr>
                                        <th scope="col" width="1%">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $d) : ?>
                                        <tr>
                                            <th scope=#><?= $i; ?></th>
                                            <td><?= $d['menu'] ?></td>
                                            <td>
                                                <button class="btn btn-default" data-toggle="modal" data-target="#editModal<?php echo $d['id']; ?>"><i class=" fa fa-pencil-square"></i></button>
                                                <a href=" <?= base_url('Menu/delete_role_menu/') . $d['id']; ?>" class="btn btn-default" onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>

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
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newMenuModalLabel">Tambah Menu</h4>
            </div>

            <!-- Nested Row within Card Body -->
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form</h1>
                    <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                </div>
                <form class="user" method="POST" action="<?= base_url('Menu'); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Menu</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Role menu baru">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
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
foreach ($menu as $d) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="editModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Role Menu <?= $d['id'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Form edit</h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('Menu/edit_role_menu'); ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['menu']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
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
<?php endforeach; ?>