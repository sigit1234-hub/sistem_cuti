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
                                        <h4 class="pag e-title float-left">Surat Perintah Lembur </h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?= base_url('User') ?>">User</a></li>
                                            <li class="breadcrumb-item active">Pengajuan SPL</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <?= $this->session->flashdata('message'); ?> -->
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div id="notif"></div>
                                </div>
                                <form action="<?php echo base_url('User/tambahspl') ?>" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nama Penanggung Jawab</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y H:i:s') ?>" readonly>
                                                <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Divisi</label>
                                                <?php
                                                $id = $user['divisi'];
                                                $this->db->where('id', $id);
                                                $sql = $this->db->get('devisi')->result_array();
                                                ?>
                                                <?php foreach ($sql as $n) : ?>
                                                    <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $n['id']; ?>">
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email Head</label>
                                                <?php
                                                $id = $user['divisi'];
                                                $this->db->where('id', $id);
                                                $sql = $this->db->get('devisi')->result_array();
                                                ?>
                                                <?php foreach ($sql as $s) : ?>
                                                    <input type="text" class="form-control" id="email" name="email" value="<?= $s['email_head']; ?>">
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <!-- <div class="table-responsive"> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Tanggal</label>
                                            <div>
                                                <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sampai</label>
                                                <input type="date" class="form-control datepicker" id="tgl" name="tgl" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>jam Mulai</label>
                                                <input type="time" class="form-control" id="jam" name="jam" require>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Estimasi Selesai</label>
                                                <input type="time" class="form-control" id="estimasi" name="estimasi" require>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Daftar Anggota</h4>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="LoopTableSPL">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" width="5%">#</th>
                                                                    <th width="20%">Nama</th>
                                                                    <th>Pekerjaan</th>
                                                                    <th>Note</th>
                                                                    <th width="10%"><button class="btn btn-inverse-info btn-fw" id="TambahAnggota"><span> tambah</span></button></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>
                                                        <div class="form-group text-right m-b-10">
                                                            <div class="form-group text-right">
                                                                <button type="submit" class="btn btn-primary"></i>Ajukan</button>
                                                                <button type="reset" class="btn btn-dark"></i>Reset</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div><!-- end col-->
</div>
<!-- end row -->
</div> <!-- container -->
</div> <!-- content -->