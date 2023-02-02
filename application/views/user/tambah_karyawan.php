<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">



        <h1>

            <?= $title; ?>

        </h1>



    </section>

    <section class="content">

        <div class="row">

            <!-- left column -->

            <div class="col-md-12">

                <?= $this->session->flashdata('message'); ?>

                <!-- general form elements -->

                <div class="box box-primary">



                    <!-- /.box-header -->

                    <!-- form start -->

                    <?= form_open_multipart('Hrd/tambah_karyawan'); ?>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="box-header with-border">

                                <h3 class="box-title">Data Pribadi</h3>

                            </div>

                            <div class="box-body">

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <label>nama Lengkap</label>

                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="<?= set_value('nama') ?>">

                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <label>Tempat</label>

                                            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan tanggal lahir" value="<?= set_value('tempat') ?>">

                                            <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-2">

                                            <label>Tanggal</label>

                                            <input type="text" class="form-control datepicker2" id="tanggallahir" name="tanggallahir" placeholder="Masukkan tanggal lahir" value="<?= set_value('tanggallahir') ?>">

                                            <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-2">

                                            <label>Tahun</label>

                                            <input type="text" class="form-control" id="tahunlahir" name="tahunlahir" placeholder="Masukkan tahun lahir" value="<?= set_value('tahunlahir') ?>">

                                            <?= form_error('tahunlahir', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class=" col-md-4">

                                            <label>Nomor Telepon</label>

                                            <input type="text" class="form-control" id="notlp" name="notlp" placeholder="Masukkan nomor telepon" value="<?= set_value('notlp') ?>">

                                            <?= form_error('notlp', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class=" form-group">

                                    <label>Pendidikan</label>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <select type="text" class="form-control" id="jenjang" name="jenjang" placeholder="Jenjang" value="<?= set_value('jenjang') ?>">

                                                <option>-pilih jenjang-</option>

                                                <option>SMP</option>

                                                <option>SMA</option>

                                                <option>D1</option>

                                                <option>D3</option>

                                                <option>S1</option>

                                                <option>S2</option>

                                                <option>S3</option>

                                            </select>

                                            <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class=" col-md-9">

                                            <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Nama sekolah/Universitas" value="<?= set_value('sekolah') ?>">

                                            <?= form_error('sekolah', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class=" form-group">

                                    <label>Golongan Darah</label>

                                    <select type="text" class="form-control" id="goldar" name="goldar">

                                        <option value="">-Pilih golongan darah-</option>

                                        <option>-</option>

                                        <option>A</option>

                                        <option>B</option>

                                        <option>AB</option>

                                        <option>O</option>

                                    </select>

                                    <?= form_error('goldar', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>

                                <div class=" form-group">

                                    <label>Alamat</label>

                                    <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" set_value="alamat"><?= set_value('alamat') ?></textarea>

                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <img src="<?= base_url('assets/') ?>img/profile/default.png" class="img-thumbnail">

                                        </div>

                                        <div class="col-md-8">

                                            <div class="custom-file">

                                                <label for="foto" class="custom-file-label">Gambar 1</label>

                                                <input type="file" class="custom-file-input form-control" id="foto" name="foto">

                                                <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="box-header with-border">

                                <h3 class="box-title">Data lain</h3>

                            </div>

                            <div class="box-body">

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <label>Tanggal Gabung</label>

                                            <input type="text" class="form-control datepicker2" id="tanggalgabung" name="tanggalgabung" placeholder="Masukkan tanggalgabung lengkap" value="<?= set_value('tanggalgabung') ?>">

                                            <?= form_error('tanggalgabung', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-6">

                                            <label>Tahun Gabung</label>

                                            <input type="number" class="form-control" id="tahungabung" name="tahungabung" placeholder="Masukkan tahun gabung" value="<?= set_value('tahungabung') ?>">

                                            <?= form_error('tahungabung', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <label>NRP</label>

                                            <div class="input-group">

                                                <span class="input-group-addon" id="basic-addon1">G</span>

                                                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan nrp" value="<?= set_value('nrp') ?>">

                                            </div><?= form_error('nrp', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-6">

                                            <label>divisi</label>

                                            <select type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan divisi">

                                                <option value="">-Pilih Divisi-</option>

                                                <?php foreach ($divisi as $d) : ?>

                                                    <option value="<?= $d['id'] ?>"><?= $d['nama_divisi'] ?></option>

                                                <?php endforeach; ?>

                                            </select>

                                            <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <label>Jabatan</label>

                                            <select type="text" class="form-control" id="jabatan" name="jabatan" value="<?= set_value('jabatan') ?>">

                                                <option value="">-Pilih Jabatan-</option>

                                                <option value=""></option>

                                            </select>

                                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-6">

                                            <label>Alamat Email</label>

                                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?= set_value('email') ?>">

                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <label>Akun</label>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" value="<?= set_value('username') ?>">

                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-6">

                                            <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan password" value="<?= set_value('password') ?>">

                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <label>Nomor KTP</label>

                                            <input type="text" class="form-control" id="ktp" name="ktp" placeholder="Masukkan ktp" value="<?= set_value('ktp') ?>">

                                            <?= form_error('ktp', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-6">

                                            <label>Nomor NPWP</label>

                                            <input type="text" class="form-control" id="npwp" name="npwp" placeholder="Masukkan npwp" value="<?= set_value('npwp') ?>">

                                            <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <label>BPJS Kesehatan</label>

                                            <input type="text" class="form-control" id="kese" name="kese" placeholder="Masukkan BPJS kesehatan" value="<?= set_value('kese') ?>">

                                            <?= form_error('kese', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="col-md-6">

                                            <label>BPJS Ketenagakerjaan</label>

                                            <input type="text" class="form-control" id="kete" name="kete" placeholder="Masukkan BPJS ketenagakerjaan" value="<?= set_value('kete') ?>">

                                            <?= form_error('kete', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- /.box-body -->

                        <div class="col-md-12">

                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary pull-right" style="margin-right: 30px;"><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan</button>

                            </div>

                        </div>

                    </div>

                    </form>

                </div>

                <!-- /.box -->

            </div>

        </div>

    </section>

</div>

<script src="<?= base_url('assets/admin/plugins') ?>jQuery/jquery-2.2.3.min.js"></script>