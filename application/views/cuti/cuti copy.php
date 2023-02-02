<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Pengajuan Cuti</h2>
                            <p class="mb-md-0">Website Info of Garuda Mart Indonesia</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Cuti&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor"></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        <a href="" class="btn btn-primary mt-2 mt-xl-0" data-toggle="modal" data-target="#newIzinModal">Tambah Pengajuan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="flash-data" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
                    <p class="card-title">Data Pengajuan Cuti</p>
                    <div class="table-responsive">
                        <table id="example1" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">No</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Pengajuan</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Untuk Tanggal</th>
                                    <th scope="col" width="35%">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($cuti as $d) : ?>
                                    <tr>
                                        <th scope=# data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $i; ?></th>
                                        <td class="users-list clearfix text-center" style="width: 10%;" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>">
                                            <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>">
                                            <?php if ($d['status1'] == 1) {
                                                echo "<label class='badge badge-danger'>Menunggu</label>";
                                            } elseif ($d['status1'] == 2) {
                                                echo "<label class='badge badge-success'>Setuju</label>";
                                            } elseif ($d['status1'] == 4) {
                                                echo "<label class='badge badge-warning'>Batal</label>";
                                            } else {
                                                echo "<label class='badge badge-danger'>Batal</label>";
                                            } ?>
                                        </td>
                                        <td class="text-center" data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= date('d M Y', strtotime($d['date_created'])) ?></td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['nama']; ?></td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?php if ($d['tanggal'] == $d['date_end']) {
                                                                                                                        echo date('d M Y', strtotime($d['tanggal']));
                                                                                                                    } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                                                                                                        echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                                                                    } else {
                                                                                                                        echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                                                                                                    }
                                                                                                                    ?></br>
                                            <label class="text-success"><?= $d['durasi'] . " Hari" ?></label>
                                        </td>
                                        <td data-toggle="modal" data-target="#lihatModal<?php echo $d['id']; ?>"><?= $d['keterangan']; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="newIzinModal" tabindex="-1" role="dialog" aria-labelledby="newIzinModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newIzinModalLabel"></h4>
            </div>

            <!-- Nested Row within Card Body -->
            <div class="modal-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Pengajuan Cuti</h1>
                    <h1 class="h6 text-gray-900 mb-4">---Mohon diisi sesuai dengan kebutuhan---</h1>
                </div>
                <form class="user" method="post" action="<?= base_url('User/cuti'); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" class="form-control" id="foto" name="foto" value="<?= $user['foto']; ?>">
                                <input type="hidden" class="form-control" id="divisi" name="divisi" value="<?= $user['divisi']; ?>">
                                <input type="hidden" class="form-control" id="date_created" name="date_created" value="<?= date('d-M-Y H:i:s'); ?>">
                                <input type="hidden" class="form-control" id="nama_id" name="nama_id" value="<?= $user['id']; ?>">
                                <input type="hidden" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                <input type="hidden" class="form-control" id="kuota" name="kuota" value="<?php foreach ($kuota as $kk) {
                                                                                                                echo $kk['kuota_cuti']; ?>
                                                                                                        <?php } ?>">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Cuti</label>
                                <select class="form-control" id="jenis_cuti" name="jenis_cuti">
                                    <?php foreach ($jenis_cuti as $i) : ?>
                                        <option><?= $i['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('jenis_cuti', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Cuti</label>
                                <input type="date" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Tanggal mulai izin">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sampai Tanggal</label>
                                <input type="date" class="form-control datepicker" id="date_end" name="date_end" placeholder="Tanggal akhir izin">
                                <?= form_error('date_end', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Demam /  Kegiatan Kampus / Dll">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="mdi mdi-close-box btn-icon-prepend"></i>
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="mdi mdi-file-check btn-icon-prepend"></i>
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>