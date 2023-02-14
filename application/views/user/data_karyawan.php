<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <?= $this->session->flashdata('sweet'); ?>
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="pag e-title float-left">Data Karyawan</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('Hrd') ?>">HRD</a></li>
                                            <li class="breadcrumb-item active">Data Karyawan</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <ol class="breadcrumb float-right">
                                    <li>
                                        <a type="button" class="breadcrumb-item btn btn-primary btn-block waves-effect waves-light" href="<?= base_url('Hrd/tambah_karyawan') ?>">Tambah Karyawan</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <!-- <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class=" icon-note"></i>
                    </div>
                    <a href="#" style="color:black">
                        <div class="text-right">
                            <h6 class="text-success text-uppercase m-b-15 m-t-10">Total Cuti</h6>
                            <h2 class="m-b-10"><span data-plugin="counterup"><?= number_format($k_person, 0, ",", "."); ?></span></h2>
                        </div>
                    </a>
                    <div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-three">
                    <div class="bg-icon float-left">
                        <i class=" icon-note"></i>
                    </div>
                    <a href="#" style="color: black;">
                        <div class="text-right">
                            <h6 class="text-success text-uppercase m-b-15 m-t-10">Sisa Cuti</h6>
                            <h2 class="m-b-10"><span data-plugin="counterup"><?php foreach ($kuota as $k) :
                                                                                    echo $k['kuota_cuti'] ?>
                                    <?php endforeach; ?>
                                </span></h2>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?= $hasil ?>%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div> -->
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Sisi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($lihat as $d) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $d['nama']; ?><br><span class="label label-primary" style="font-size: 90%;"><?= $d['nrp']; ?></span></td>
                                    <td><?= $d['nama']; ?><br><span class="label label-primary" style="font-size: 90%;"><?= $d['nrp']; ?></span></td>
                                    <td><?= $d['nama']; ?><br><span class="label label-primary" style="font-size: 90%;"><?= $d['nrp']; ?></span></td>
                                    <td class="users-list clearfix">

                                        <img src="<?= base_url('assets/img/profile/') . $d['foto']; ?>" alt="user" class="rounded-circle">

                                    </td>
                                    <td>

                                        <a class="btn btn-default" href="<?= base_url('Hrd/detail/') . $d['id'] ?>"><i class=" fa fa-eye"></i></a>

                                        <a href="<?= base_url('Hrd/edit_karyawan/') . $d['id']; ?>" class="btn btn-default"><i class="fa fa-pencil-square"></i></a>

                                        <a href="<?= base_url('Hrd/del/') . $d['id']; ?>" class="btn btn-default" onclick="return confirm('yakin?')"><i class="fa fa-trash"></i></a>

                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->


    </div><!-- end col-->
</div>
<!-- end row -->
</div> <!-- container -->
</div> <!-- content -->