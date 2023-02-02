  <!doctype html>
  <html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="<?= base_url('assets/login/') ?>fonts/icomoon/style.css">
      <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/owl.carousel.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/bootstrap.min.css">
      <!-- Style -->
      <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/style.css">

      <link rel="shortcut icon" href="<?= base_url('assets/majestic/') ?>images/logo-mini.png" />
      <title>Login Info GMI</title>
  </head>

  <body>
      <div class="content">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h3 class="font-selamat">Selamat datang<br>di e'form by GMI</h3>
                      <img src="<?= base_url('assets/login/') ?>images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-6 contents">
                      <div class="row justify-content-center">
                          <div class="col-md-8">
                              <div class="mb-4">
                                  <h3>Sign In</h3>
                              </div>
                              <?= $this->session->flashdata('message'); ?>
                              <form <?= base_url('Auth'); ?> method="POST">
                                  <div class="form-group first">
                                      <label for="username">Username</label>
                                      <input type="text" class="form-control" id="email" name="email">
                                  </div>
                                  <div class="form-group last mb-4">
                                      <label for="password">Password</label>
                                      <input type="password" id="password" name="password" class="form-control">
                                  </div>
                                  <input type="submit" value="Log In" class="btn btn-block btn-warning">
                                  <span class="d-block text-left my-4 text-muted"></span>
                                  <div class="social-login">
                                      <div class="col-md-12 form-info">
                                          <P><U><b> INFO AKUN :</b></U></P>
                                          <table>
                                              <tr>
                                                  <td style="text-align:center; vertical-align: top;">1.</td>
                                                  <td>Untuk Informasi mengenai <i>username</i> dan <i>password</i> silahkan
                                                      dapat menghubungi bagian HR atau IT.</td>
                                              </tr>
                                              <tr>
                                                  <td style="text-align:center; vertical-align: top;">2.</td>
                                                  <td>Untuk mengenai perubahan data dapat meminta perubahan pada bagian HR
                                                      melalui chat pribadi.
                                                  </td>
                                              </tr>
                                          </table>
                                          </p>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <footer class="footer">
          <div class="col-md-12" style="text-align: center;">
              <?= date('Y') ?> &COPY; PT GARUDA MART INDONESIA | Version 2.0.0
          </div>
      </footer>
      <script src="<?= base_url('assets/vendor/login/') ?>js/jquery-3.3.1.min.js"></script>
      <script src="<?= base_url('assets/vendor/login/') ?>js/popper.min.js"></script>
      <script src="<?= base_url('assets/vendor/login/') ?>js/bootstrap.min.js"></script>
      <script src="<?= base_url('assets/vendor/login/') ?>js/main.js"></script>
  </body>

  </html>