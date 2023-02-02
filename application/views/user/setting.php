<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Setting User</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href=<?= base_url('User') ?>>User</a></li>
                            <li class="breadcrumb-item active">Setting</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <?= $this->session->flashdata('message'); ?>

                        <?= form_open_multipart('User/setting'); ?>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <div class="p-20">
                                    <div class="form-group">
                                        <label for="userName">User Name<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control" id="username" value="<?= $user['username']; ?>" readonly>
                                        <input type="hidden" name="id" class="form-control" id="id" value="<?= $user['id']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" id="email" value="<?= $user['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="emailAddress">Current Password<span class="text-danger">*</span></label>
                                        <input type="password" name="passlama" class="form-control" id="passlama" placeholder="Password lama">
                                        <input type="hidden" name="pass" class="form-control" id="pass" placeholder="Password lama" value="<?= $user['password'] ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" name="pass1" type="password" placeholder="Password baru" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                <input data-parsley-equalto="#pass1" name="pass2" id="pass2" type="password" placeholder="Verifikasi Password " class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <div class="p-20">
                                    <h4 class="header-title m-t-0">Upload Foto</h4>
                                    <p class="text-muted font-13 m-b-10">
                                        Guys, Tolong ganti fotonya pakai format jpg, png, jpeg yah.<br>
                                        Nah terus ukurannya tolong sama yang panjang lebarnya, contoh 2x2cm,<br>
                                        Ukurannya kecil aja biar engga keberatan servernya yah, hehehe

                                    </p>
                                    <div class="form-group row">
                                        <div class="col-xs-12">
                                            <!-- Simple card -->
                                            <div class="card m-b-20">
                                                <img class="card-img-top img-fluid rounded-circle" src="<?= base_url('assets/img/profile/' . $user['foto']) ?>" alt="Card image cap">

                                            </div>

                                        </div><!-- end col -->
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                        <input type="hidden" class="custom-file" id="fotoasli" name="fotoasli" value="<?= $user['foto']; ?>">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>
                        <!-- end row -->
                        </form>
                    </div><!-- end col-->

                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->



    </div>
</div>
<!-- End content-page -->