<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
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
        <ul class="nav">
            <?php foreach ($menu as $m) : ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-<?= $m['menu']; ?>" aria-expanded="false" aria-controls="ui-basic">
                        <i></i>
                        <span><?= $m['menu']; ?></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-<?= $m['menu']; ?>">
                        <ul class="nav flex-column ">
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
                                    <li class="nav-item active" style="list-style-type: none;">
                                    <?php else : ?>
                                    <li class="nav-item" style="list-style-type: none;">
                                    <?php endif; ?>
                                    <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                        <i class="<?= $sm['icon']; ?> menu-icon"></i> <span><?= $sm['title']; ?></span>
                                        <small class="<?= $sm['label'] ?>" id="<?= $sm['isi'] ?>" style="width: 30px;"></small>
                                    </a>
                                    </li>
                                <?php endforeach; ?>
                        </ul>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>