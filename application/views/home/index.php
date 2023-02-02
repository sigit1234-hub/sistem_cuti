<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Text in a modal</h4>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                <hr>
                <h4>Overflowing text to show scroll behavior</h4>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <?= $this->session->flashdata('sweet'); ?>
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Dashboard</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('User') ?>">User</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- ulang tahun -->

            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-directions float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Material Request</h6>
                        <h2 class="m-b-20" data-plugin="counterup">13223</h2>
                        <a href="<?= base_url('User/Mr_ppa'); ?>" class="btn btn-block btn-primary" target="_blank"> Project PPA Tj. Enim </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">SPB Monitoring</h6>
                        <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                        <button class="btn btn-block btn-success"> Project PPA Tj. Enim </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">


                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox" style="background-color: black;">

                            <?php $i = 1; ?>
                            <?php foreach ($ulangtahun as $ul) : ?>
                                <div class="carousel-item <?php if ($i <= 1) {
                                                                echo "active";
                                                            } else {
                                                                echo "";
                                                            } ?>">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="text-muted m-b-30 font-13">Waah ada yang lagi Ulang tahun guys!!</p>
                                            <img class="d-block img-fluid" src="<?= base_url('assets/img/profile/') . $ul['foto'] ?>" alt="<?= $ul['nama'] ?>" />
                                        </div>
                                        <div class="col-md-8">
                                            <div class="carousel-caption" style="text-align: left;">
                                                <p><?php if ($i <= 1) {
                                                        echo "Holla. Selamat Ulang tahun";
                                                    } elseif ($i <= 2) {
                                                        echo "Selamat Ulang Tahun juga Buat";
                                                    } ?></p>
                                                <h3><?= $ul['nama'] ?></h3><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ulang tahun -->
        </div><!-- end col-->
    </div>
    <!-- end row -->
</div> <!-- container -->
</div> <!-- content -->
</div>