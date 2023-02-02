<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Welcome back,</h2>
                            <p class="mb-md-0">Website Info of Garuda Mart Indonesia</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body dashboard-tabs p-0">
                        <ul class="nav nav-tabs px-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Pengajuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Sedang Proses</a>
                            </li>
                        </ul>
                        <div class="tab-content py-0 px-0">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-motorbike icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Kendaraan</small>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5 class="mb-0 d-inline-block"><?= number_format($peminjam, 0, ",", "."); ?></h5>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                    <?php foreach ($tampil_data_peminjaman as $p) : ?>
                                                        <?php
                                                        $kendaraan = $p['kendaraan'];
                                                        $this->db->where('id', $kendaraan);
                                                        $query = $this->db->get('kendaraan')->result_array();
                                                        ?>
                                                        <?php foreach ($query as $q) : ?>
                                                            <a class="dropdown-item" href="#"><?= $p['nama'] . '<br>' . $q['nama'] ?></a>
                                                        <?php endforeach; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-sofa mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Cuti</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($cuti, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-human-handsup mr-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Izin</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($izin, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-weight mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">MR</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($mr, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-motorbike icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Kendaraan</small>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5 class="mb-0 d-inline-block"><?= number_format($peminjam_, 0, ",", "."); ?></h5>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                    <?php foreach ($tampil_pemin as $p) : ?>
                                                        <?php
                                                        $kendaraan = $p['kendaraan'];
                                                        $this->db->where('id', $kendaraan);
                                                        $query = $this->db->get('kendaraan')->result_array();
                                                        ?>
                                                        <?php foreach ($query as $q) : ?>
                                                            <a class="dropdown-item" href="#"><?= $p['nama'] . '<br>' . $q['nama'] ?></a>
                                                        <?php endforeach; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-sofa mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Cuti</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($cuti_, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-human-handsup mr-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Izin</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($izin_, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-archive mr-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">SPL</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($spl_, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-weight mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">MR</small>
                                            <h5 class="mr-2 mb-0"><?= number_format($mr_, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md 6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ulang Tahun</h4>
                        <p class="card-description">
                            Beri ucapan selamat dan doa untuk teman kita yuk
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Divisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($ulangtahun as $ul) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td class="py-1"><img src="<?= base_url('assets/img/profile/') . $ul['foto'] ?>" alt="<?= $ul['nama'] ?>" /></td>
                                            <td><?= $ul['nama']; ?></td>
                                            <td>
                                                <?php $divisi = $ul['divisi']; ?>
                                                <?php
                                                $query = $this->db->get_where('devisi', ['id' => $divisi])->result_array();
                                                ?>
                                                <?php foreach ($query as $devisi) : ?>
                                                    <?= $devisi['nama_divisi']; ?>
                                                <?php endforeach; ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Kuota Cuti</p>
                        <h1><?= $user['kuota_cuti']; ?> - Hari</h1>
                        <h4>Sisa cuti kamu buat tahun ini</h4>
                        <p class="text-muted">Cuti belum termasuk pemotongan untuk hari raya dan libur bersama </p>
                        <div id="total-sales-chart-legend"></div>
                    </div>
                    <canvas id="total-sales-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Status Kendaraan</p>
                        <p class="mb-4">Status Kendaraan dan driver</p>
                        <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                        <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Driver</th>
                                        <th>Tujuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kend as $d) : ?>
                                        <tr>
                                            <th scope=#><?= $i; ?></th>
                                            <td><?= $d['nama'] ?></td>
                                            <td>
                                                <?php if ($d['actived'] == 1) {
                                                    echo "Tersedia";
                                                } else {
                                                    echo "Tidak Tersedia";
                                                } ?>
                                            </td>
                                            <td>
                                                <?php
                                                $id = $d['driver'];
                                                $this->db->where('id', $id);
                                                $query = $this->db->get('driver')->result_array();
                                                ?>
                                                <?php foreach ($query as $dri) {
                                                    echo $dri['nama'];
                                                } ?>
                                            </td>
                                            <td><?= $d['tujuan'] ?></td>
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