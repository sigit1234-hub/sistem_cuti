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

                    <?php foreach ($lihat->result() as $d) { ?>

                        <?php echo form_open_multipart('Hrd/update_k') ?>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="box-header with-border">

                                    <h3 class="box-title">Data Pribadi</h3>

                                </div>

                                <div class="box-body">

                                    <div class="form-group">

                                        <div class="row">

                                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $d->id; ?>">

                                            <div class="col-md-8">

                                                <label>nama Lengkap</label>

                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $d->nama; ?>">

                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-4">

                                                <label>Status</label>

                                                <select type="text" class="form-control" id="aktif" name="aktif">

                                                    <option selected value="<?= $d->is_active ?>"><?php if ($d->is_active == 1) {

                                                                                                        echo "Aktif";
                                                                                                    } else if ($d->is_active == 0) {

                                                                                                        echo "Non-aktif";
                                                                                                    }

                                                                                                    ?></option>

                                                    <option value="1">Aktif</option>

                                                    <option value="0">Non-Aktif</option>

                                                </select>

                                                <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>



                                    </div>

                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-4">

                                                <label>Tempat</label>

                                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan tanggal lahir" value="<?= $d->tempat ?>">

                                                <?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-2">

                                                <label>Tanggal</label>

                                                <input type="text" class="form-control datepicker2" id="tanggallahir" name="tanggallahir" placeholder="Masukkan tanggal lahir" value="<?= $d->ttl ?>">

                                                <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-2">

                                                <label>Tahun</label>

                                                <input type="text" class="form-control" id="tahunlahir" name="tahunlahir" placeholder="Masukkan tahun lahir" value="<?= $d->tahun_lahir ?>">

                                                <?= form_error('tahunlahir', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class=" col-md-4">

                                                <label>Nomor Telepon</label>

                                                <input type="text" class="form-control" id="notlp" name="notlp" placeholder="Masukkan nomor telepon" value="<?= $d->tlp ?>">

                                                <?= form_error('notlp', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class=" form-group">

                                        <label>Pendidikan</label>

                                        <div class="row">

                                            <div class="col-md-3">

                                                <select type="text" class="form-control" id="jenjang" name="jenjang">



                                                    <option selected><?= $d->jenjang; ?></option>

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

                                                <input type="text" class="form-control" id="sekolah" name="sekolah" value="<?= $d->pendidikan; ?>">

                                                <?= form_error('sekolah', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class=" form-group">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <label>Golongan Darah</label>

                                                <select type="text" class="form-control" id="goldar" name="goldar">

                                                    <option selected><?= $d->gol_darah; ?></option>

                                                    <option>A</option>

                                                    <option>B</option>

                                                    <option>AB</option>

                                                    <option>O</option>

                                                </select>

                                                <?= form_error('goldar', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <label>User Role</label>

                                                <select type="text" class="form-control" id="role_id" name="role_id">
                                                    <option selected value="<?= $d->role_id ?>"><?php if ($d->role_id == 1) {
                                                                                                    echo "ADMIN";
                                                                                                } elseif ($d->role_id == 2) {
                                                                                                    echo "HRD";
                                                                                                } elseif ($d->role_id == 3) {
                                                                                                    echo "GA";
                                                                                                } elseif ($d->role_id == 4) {
                                                                                                    echo "SUPER";
                                                                                                } elseif ($d->role_id == 5) {
                                                                                                    echo "USER";
                                                                                                }
                                                                                                ?></option>
                                                    <?php foreach ($role as $rol) : ?>
                                                        <option value="<?= $rol['id'] ?>"><?= $rol['role'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                                <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>



                                    </div>

                                    <div class=" form-group">

                                        <label>Alamat</label>

                                        <textarea type="text" class="form-control" id="alamat" name="alamat"><?= $d->alamat; ?></textarea>

                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>

                                    </div>

                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-4">

                                                <img src="<?= base_url('assets/img/profile/') . $d->foto; ?>" class="img-thumbnail">

                                            </div>

                                            <div class="col-md-8">

                                                <div class="custom-file">

                                                    <label for="foto" class="custom-file-label">Gambar 1</label>

                                                    <input type="file" class="custom-file-input" id="foto" name="foto" value="<?= $d->foto; ?>">

                                                    <?php foreach ($lihat->result() as $g) : ?>

                                                        <input type="text" class="custom-file-input" id="fotoasli" name="fotoasli" value="<?= $g->foto; ?>">

                                                    <?php endforeach; ?>

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

                                                <input type="text" class="form-control  datepicker2" id="tanggalgabung" name="tanggalgabung" value="<?= $d->tanggal_gabung; ?>">

                                                <?= form_error('tanggalgabung', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <label>Tahun Gabung</label>

                                                <input type="number" class="form-control" id="tahungabung" name="tahungabung" placeholder="Masukkan tahun gabung" value="<?= $d->tahun_gabung ?>">

                                                <?= form_error('tahungabung', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <label>NRP</label>

                                                <div class="input-group">

                                                    <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $d->nrp; ?>">

                                                </div><?= form_error('nrp', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <label>divisi</label>

                                                <select type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan divisi">

                                                    <option selected value="<?= $d->divisi ?>"><?php if ($d->divisi == 1) {

                                                                                                    echo "FINANCE";
                                                                                                } elseif ($d->divisi == 2) {

                                                                                                    echo "LOGISTIC";
                                                                                                } elseif ($d->divisi == 13) {

                                                                                                    echo "SERVICE";
                                                                                                } elseif ($d->divisi == 14) {

                                                                                                    echo "WAREHOUSE";
                                                                                                } elseif ($d->divisi == 15) {

                                                                                                    echo "GENERAL AFFAIR";
                                                                                                } elseif ($d->divisi == 17) {

                                                                                                    echo "IT";
                                                                                                } elseif ($d->divisi == 18) {

                                                                                                    echo "MANUFAKTURE & PABRICATION";
                                                                                                } elseif ($d->divisi == 22) {

                                                                                                    echo "MARKETING";
                                                                                                } else {

                                                                                                    echo "HRD";
                                                                                                }

                                                                                                ?></option>

                                                    <?php foreach ($divisi as $f) { ?>

                                                        <option value="<?= $f['id'] ?>"><?= $f['nama_divisi'] ?></option>

                                                    <?php } ?>

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

                                                    <option selected><?= $d->jabatan ?></option>

                                                    <option value=""></option>

                                                    <option value=""></option>

                                                </select>

                                                <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <label>Alamat Email</label>

                                                <input type="text" class="form-control" id="email" name="email" value="<?= $d->email; ?>">

                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label>Akun</label>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <input type="text" class="form-control" id="username" name="username" value="<?= $d->username; ?>">

                                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <input type="text" class="form-control" id="password" name="password" value="<?= $d->password; ?>">

                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <label>Nomor KTP</label>

                                                <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $d->ktp; ?>">

                                                <?= form_error('ktp', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <label>Nomor NPWP</label>

                                                <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $d->npwp; ?>">

                                                <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="row">

                                            <div class="col-md-6">

                                                <label>BPJS Kesehatan</label>

                                                <input type="text" class="form-control" id="kese" name="kese" value="<?= $d->bpjs_kese; ?>">

                                                <?= form_error('kese', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                            <div class="col-md-6">

                                                <label>BPJS Ketenagakerjaan</label>

                                                <input type="text" class="form-control" id="kete" name="kete" value="<?= $d->bpjs_kete; ?>">

                                                <?= form_error('kete', '<small class="text-danger pl-3">', '</small>'); ?>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- /.box-body -->

                            <div class="col-md-12">

                                <div class="box-footer">

                                    <button type="submit" class="btn btn-primary pull-right" style="margin-right: 30px;"><i class="fa fa-floppy-o" aria-hidden="true"></i> UPDATE</button>

                                </div>

                            </div>

                        </div>

                        </form>

                    <?php } ?>

                </div>

                <!-- /.box -->

            </div>

        </div>

    </section>

</div>