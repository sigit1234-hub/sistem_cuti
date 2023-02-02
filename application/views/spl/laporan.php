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
                        <div class="col-md-4">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Urutkan Berdasarkan Tanggal</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?= base_url('Hrd/filter') ?>" method="POST" target="_blank">
                                    <input type="hidden" name="nilaifilter" id="nilaifilter" value="1">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="date">Tanggal Awal</label>
                                            <input type="date" class="form-control" name="tanggalawal" id="tanggalawal" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tanggal Akhir</label>
                                            <input type="date" class="form-control" id="tanggalakhir" name="tanggalakhir" required>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <!-- Bulan -->
                        <div class="col-md-4">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Urutkan Berdasarkan Bulan</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="<?= base_url('Hrd/filter') ?>" method="POST" target="_blank">
                                    <input type="hidden" name="nilaifilter" value="2">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="date">Pilih Tahun</label>
                                            <select type="text" class="form-control" id="tahun1" name="tahun1" required>
                                                <?php foreach ($tahun as $thn) : ?>
                                                    <option value="<?= $thn->tahun; ?>"><?= $thn->tahun; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bulan Awal</label>
                                            <select type="text" class="form-control" id="bulanakhir" name="bulanawal" required>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bulan Akhir</label>
                                            <select type="text" class="form-control" id="bulanakhir" name="bulanakhir" required>
                                                <option value="1">Januari</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Urutkan Berdasarkan Tahun</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="<?= base_url('Hrd/filter') ?>" method="POST" target="_blank">
                                    <input type="hidden" name="nilaifilter" id="nilaifilter" value="3">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="date">Pilih Tahun</label>
                                            <select type="text" class="form-control" id="tahun2" name="tahun2" required>
                                                <?php foreach ($tahun as $thn) : ?>
                                                    <option value="<?= $thn->tahun; ?>"><?= $thn->tahun; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Cari</button>
                                    </div>
                                    <!-- /.box-footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </section>
</div>