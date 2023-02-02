<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
                <h5>Role: <?= $role['role']; ?></h5>
                <!--ngambil dari query $role(adminn.php) dan yang di tampilkan kolom role di table role_id -->
                <table class=" table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Access</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $m['menu'] ?></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                        <!--$role['id'] = ambil dari atas yaitu ngambil role yang isinya id-->
                                        <!--$m['menu'] = ambil dari atas yaitu ngambil $menu as $m yang isinya id -->
                                        <!--data_role dan data-menu adalah data yang nantinya akan dikirimkan ke jquery | ada di file footer-->
                                    </div>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </section>
</div>