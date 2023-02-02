<header class="main-header">


    <!-- Logo -->

    <a href="<?= base_url('User') ?>" class="logo">

        <!-- mini logo for sidebar mini 50x50 pixels -->

        <span class="logo-mini"><b>GMI</b></span>

        <!-- logo for regular state and mobile devices -->

        <span class="logo-lg"><b>info</b>GMI</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

        <!-- Sidebar toggle button-->

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

            <span class="sr-only">Toggle navigation</span>

        </a>



        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">


                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="user-image" alt="User Image">

                        <span class="hidden-xs"><?= ucwords($user['nama']) ?></span>

                    </a>

                    <ul class="dropdown-menu">

                        <!-- User image -->

                        <li class="user-header">

                            <img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" class="img-circle" alt="User Image">



                            <p>

                                <?= $user['nama'] ?> / <?php if ($user['divisi'] == 1) {

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

                                                        ?>

                                <small>Member since <?= date('d M', strtotime($user['tanggal_gabung'])); ?> <?= $user['tahun_gabung']; ?></small>

                            </p>

                        </li>

                        <!-- Menu Footer-->

                        <li class="user-footer">

                            <div class="pull-left">

                                <a href="<?= base_url('User/user') ?>" class="btn btn-default btn-flat">Profile</a>

                            </div>

                            <div class="pull-right">

                                <a href="<?= base_url('Auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>

                            </div>

                        </li>

                    </ul>

                </li>

                <!-- Control Sidebar Toggle Button -->

                <li>

                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

                </li>

            </ul>

        </div>

    </nav>



</header>