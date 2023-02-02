<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="box-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Kode : <?= $kode_spl; ?></h1>
                            <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---<br>
                                ---Mohon isi dahulu durasi angsurannya---
                            </h1>

                        </div>
                        <div class="col-md-12">
                            <div id="notif"></div>
                        </div>
                        <form action="<?php echo base_url('Hrd/input_tambah_anggota') ?>" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="kode_spl" name="kode_spl" value="<?= $kode_spl; ?>" readonly>
                                    </div>
                                    <h3>Data Anggota</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table" id="LoopTableSPL">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" width="5%">#</th>
                                                        <th width="20%">Nama</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Note</th>
                                                        <th width="10%"><button class="btn btn-success btn-block" id="TambahAnggota"><i class="fa fa-plus"></i><span> tambah</span></button></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box-footer">
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Simpan</button>
                                                    <button type="reset" class="btn btn-default"><i class="fa fa-"></i>Reset</button>
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
        <!-- /.box-body -->

    </section>

</div>