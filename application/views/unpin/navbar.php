<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
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
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title"><?= $m['menu'] ?></li>
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
                            <li class="has_sub active">
                            <?php else : ?>
                            <li class="has_sub ">
                            <?php endif; ?>
                            <a href="<?= base_url($sm['url']); ?>" class="waves-effect"><span class="<?= $sm['label'] ?>" id="<?= $sm['isi'] ?>"></span><i class="zmdi zmdi-<?= $sm['icon'] ?>"></i><span> <?= $sm['title']; ?> </span> </a>
                        <?php endforeach; ?>
                            </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>
        <?php endforeach; ?>

    </div>

</div>
<!-- Left Sidebar End -->