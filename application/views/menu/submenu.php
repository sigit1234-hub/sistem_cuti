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
        <a class="btn btn-info pull-right" style="margin-bottom: 20px;" href="" data-toggle="modal" data-target="#newSubMenuModal">
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
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">label</th>
                                        <th scope="col">isi</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($subMenu as $m) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $m['title'] ?></td>
                                            <td><?= $m['menu'] ?></td>
                                            <td><?= $m['url'] ?></td>
                                            <td><i class="fa <?= $m['icon'] ?>"></i> - <?= $m['icon'] ?></td>
                                            <td><?= $m['label'] ?></td>
                                            <td><?= $m['isi'] ?></td>
                                            <td><?= $m['is_active'] ?></td>
                                            <td>
                                                <button class=" btn btn-default" data-toggle="modal" data-target="#editModal<?php echo $m['id']; ?>"><i class=" fa fa-pencil-square"></i></button>
                                                <a href=" <?= base_url('Menu/delete_submenu/') . $m['id']; ?>" class="btn btn-default" onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Menu</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Active</th>
                                        <th scope="col">Action</th>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newSubMenuModalLabel">Tambah SubMenu</h4>
            </div>

            <!-- Nested Row within Card Body -->
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form</h1>
                    <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                </div>
                <form class="user" method="POST" action="<?= base_url('Menu/submenu'); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Menu</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan  menu baru">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role Menu</label>
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">Select menu</option>
                                    <!--loping data untuk tampilkan pada selector-->
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Url</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="Masukan Url baru">
                                <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Icon</label>
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="Masukan Icon">
                                <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>label</label>
                                <input type="text" class="form-control" id="label" name="label" value="label pull-right bg-blue">
                                <?= form_error('label', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Isi</label>
                                <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukan isi">
                                <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                    <label class="form-check-label" for="is_active">
                                        Active?
                                    </label>
                                </div>
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
foreach ($subMenu as $d) : $no++ ?>
    <!-- Modal -->
    <div class="modal fade" id="editModal<?= $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">EditSub Menu <?= $d['id'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Form edit</h1>
                        <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                    </div>
                    <form class="user" method="POST" action="<?= base_url('Menu/edit_submenu'); ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $d['id']; ?>">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $d['title']; ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role Menu</label>
                                    <select name="menu_id" id="menu_id" class="form-control">
                                        <option selected><?= $d['menu_id'] ?></option>
                                        <!--loping data untuk tampilkan pada selector-->
                                        <?php foreach ($menu as $m) : ?>
                                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" id="url" name="url" value="<?= $d['url']; ?>">
                                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>label</label>
                                    <input type="text" class="form-control" id="label" name="label" value="<?= $d['label']; ?>">
                                    <?= form_error('label', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Isi</label>
                                    <input type="text" class="form-control" id="isi" name="isi" value="<?= $d['isi']; ?>">
                                    <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Icon</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa <?= $d['icon'] ?>"></i>
                                    </div>
                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $d['icon']; ?>">
                                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Active</label>
                                    <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $d['is_active']; ?>">
                                    <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <hr>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>