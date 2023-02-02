<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= ucwords($user['nama']) ?></p>
                <a href="#"><?php if ($user['divisi'] == 1) {
                                echo "FINANCE";
                            } elseif ($user['divisi'] == 2) {
                                echo "LOGISTIC";
                            } elseif ($user['divisi'] == 13) {
                                echo "SERVICE";
                            } elseif ($user['divisi'] == 14) {
                                echo "WAREHOUSE";
                            } elseif ($user['divisi'] == 15) {
                                echo "GENERAL AFFAIR";
                            } elseif ($user['divisi'] == 17) {
                                echo "IT";
                            } elseif ($user['divisi'] == 18) {
                                echo "MANUFAKTURE & PABRICATION";
                            } elseif ($user['divisi'] == 22) {
                                echo "MARKETING";
                            } else {
                                echo "HRD";
                            }
                            ?> / <?= $user['jabatan'] ?></a>
            </div>
        </div>
        <!-- search form
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT user_menu.id, menu /*pilih tabel yang akan dijoin yaitu user_menu yang ngambil dari id dan ambil data menu(dari table user_access_menu) */
                FROM user_menu JOIN user_access_menu/*yang di join yaitu table user_menu ke user_access_menu */
                  ON user_menu.id = user_access_menu.menu_id/*kunci primary dan forenky nya yaitu di u_m di id dan di u_a_m di menu_id */
               WHERE user_access_menu.role_id = $role_id /*kasih kondisi dimana role id nya ngambil dari role_id yang lagi aktif */
            ORDER BY user_access_menu.menu_id ASC /*urutkan berdasarkan menu id asc = berurut */
                  ";
        $menu =  $this->db->query($queryMenu)->result_array();
        ?>
        <?php foreach ($menu as $m) : ?>
            <ul class="sidebar-menu">
                <li class="header"><?= $m['menu']; ?></li>
                <li class="active treeview">
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                           FROM user_sub_menu JOIN user_menu
                             ON user_sub_menu.menu_id = user_menu.id 
                          WHERE user_sub_menu.menu_id = $menuId
                            AND user_sub_menu.is_active = 1  
        ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>
                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active s">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i> <span><?= $sm['title']; ?></span>
                    <small class="<?= $sm['label'] ?>" id="<?= $sm['isi'] ?>" style="width: 30px;"></small>
                </a>
            <?php endforeach; ?>
                </li>
            </ul>
        <?php endforeach; ?>
    </section>
    <!-- /.sidebar -->
</aside>