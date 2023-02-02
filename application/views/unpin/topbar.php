  <!-- Top Bar Start -->
  <div class="topbar">
      <!-- LOGO -->
      <div class="topbar-left">
          <a href="index.html" class="logo">
              <i class="zmdi zmdi-group-work"></i>
              <span>INFO GMI</span></a>
      </div>

      <nav class="navbar-custom">

          <ul class="list-inline float-right mb-0">
              <li class="list-inline-item dropdown notification-list">
                  <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                      <i class="zmdi zmdi-notifications-none noti-icon"></i>
                      <span class="noti-icon-badge"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                      <!-- item-->
                      <div class="dropdown-item noti-title">
                          <h5><small><span class="label label-danger pull-xs-right">0</span>Comin Soon</small></h5>
                      </div>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                          <p class="notify-details">-<small class="text-muted">1min ago</small></p>
                      </a>


                      <!-- All-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                          View All
                      </a>

                  </div>
              </li>

              <li class="list-inline-item dropdown notification-list">
                  <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                      <i class="zmdi zmdi-email noti-icon"></i>
                      <span class="noti-icon-badge"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                      <!-- item-->
                      <div class="dropdown-item noti-title bg-success">
                          <h5><small><span class="label label-danger pull-xs-right">0</span>Comin Soon</small></h5>
                      </div>

                      <!-- item-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <div class="notify-icon bg-faded">
                              <img src="assets/images/users/avatar-2.jpg" alt="img" class="rounded-circle img-fluid">
                          </div>
                          <p class="notify-details">
                              <b>Nama</b>
                              <span>Massage</span>
                              <small class="text-muted">1min ago</small>
                          </p>
                      </a>
                      <!-- All-->
                      <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                          View All
                      </a>

                  </div>
              </li>



              <li class="list-inline-item dropdown notification-list">
                  <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                      <img src="<?= base_url('assets/img/profile/') . $user['foto']; ?>" alt="user" class="rounded-circle">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                      <!-- item-->
                      <div class="dropdown-item noti-title">
                          <h5 class="text-overflow"><small>Welcome ! <?= $user['nama'] ?></small> </h5>
                      </div>

                      <!-- item-->
                      <a href="<?= base_url('User/user') ?>" class="dropdown-item notify-item">
                          <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                      </a>

                      <!-- item-->
                      <a href="<?= base_url('User/setting') ?>" class="dropdown-item notify-item">
                          <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                      </a>

                      <!-- item-->
                      <a href="<?= base_url('Auth/logout') ?>" class="dropdown-item notify-item">
                          <i class="zmdi zmdi-power"></i> <span>Logout</span>
                      </a>

                  </div>
              </li>

          </ul>

          <ul class="list-inline menu-left mb-0">
              <li class="float-left">
                  <button class="button-menu-mobile open-left waves-light waves-effect">
                      <i class="zmdi zmdi-menu"></i>
                  </button>
              </li>
              <li class="hidden-mobile app-search">
                  <form role="search" class="">
                      <input type="text" placeholder="Search..." class="form-control">
                      <a href=""><i class="fa fa-search"></i></a>
                  </form>
              </li>
          </ul>

      </nav>

  </div>
  <!-- Top Bar End -->