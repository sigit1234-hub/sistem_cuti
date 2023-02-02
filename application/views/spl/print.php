<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/admin/') ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/admin/') ?>dist/css/AdminLTE.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body onload="window.print();">

    <!-- <body> -->
    <div class="wrapper">
        <!-- Main content -->
        <section style="margin-top:0px;font-size: 10px;">
            <!-- title row -->
            <div class="row" style="margin-top: -10px;">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <img src="<?= base_url('assets/') ?>images/logo_sm.png" alt=""></i> <?= $title; ?>
                        <small class="pull-right">Tanggal: <?= date('d M Y') ?></small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                    Data pengaju
                    <address>
                        <?php $i = 1; ?>
                        <?php foreach ($spl as $d) : ?>
                            nama :<strong><?= $d['nama'] ?></strong><br>
                            Divisi : <?= $d['divisi'] ?><br>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">
                    <?php $i = 1; ?>
                    <?php foreach ($spl as $d) : ?>
                        Status : <?php if ($d['status'] == 1) {
                                        echo "Menunggu";
                                    } elseif ($d['status'] == 2) {
                                        echo "Setuju";
                                    } else {
                                        echo "batal";
                                    } ?><br>
                        Tanggal Pengajuan : <?= date('d M Y', strtotime($d['tanggal'])) ?><br>
                        Tanggal SPL : <?php if ($d['tanggal'] == $d['date_end']) {
                                            echo date('d M Y', strtotime($d['tanggal']));
                                        } elseif (date(' M', strtotime($d['tanggal'])) == date(' M', strtotime($d['date_end']))) {
                                            echo date('d', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                        } else {
                                            echo date('d M', strtotime($d['tanggal'])) . "-" . date('d M Y', strtotime($d['date_end']));
                                        }
                                        ?> || <?= $d['jam'] . "-" . $d['kembali'] ?>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
                <!-- /.col -->
                <div class="col-sm-2 invoice-col text-center">
                    <address>
                        <?php $i = 1; ?>
                        <?php foreach ($spl as $d) : ?>
                            <!-- <img class="direct-chat-img img-responsive img-circle" src="<?= base_url('assets/img/profile/') . $d['foto'] ?>"> -->
                            <?php $i++; ?>
                            <b style="font-style: itali;">#<?= $d['kode_spl'] ?></b><br>
                            <b style="font-style: itali;">Print by: <?= $user['nama']; ?></b>
                        <?php endforeach; ?>
                    </address>
                </div>
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <div>
                        <h4>Daftar Anggota Lembur</h4>
                    </div>
                    <table style="font-size: 12px;" width="100%">
                        <thead>
                            <tr style="background-color: gray;">
                                <th class="text-center">#</th>
                                <!-- <th>Foto</th> -->
                                <th class="text-center">Nama</th>
                                <th class="text-center">Pekerjaan</th>
                                <th class="text-center">Note</th>
                                <th class="text-center" width="5%">Cek</th>
                                <th class="text-center" width="5%">TTD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($anggota as $sql) : ?>
                                <tr>
                                    <td style="padding: 2px;" class="text-center"><?= $no; ?></td>
                                    <?php
                                    $id = $sql['anggota'];
                                    $this->db->where('id', $id);
                                    $query = $this->db->get('karyawan')->result_array();
                                    ?>
                                    <?php foreach ($query as $q) : ?>
                                        <td><?= $q['nama'] ?></td>
                                    <?php endforeach; ?>
                                    <td><?= $sql['pekerjaan'] ?></td>
                                    <td><?= $sql['note'] ?></td>
                                    <td><?php if ($sql['aksi'] == 1) {
                                            echo "<i class='fa fa-check-square' style='color: blue'></i>";
                                        } else {
                                            echo "<i class='fa fa-hand-pointer-o' style='color: purple'></i> <span style='color: purple'>Yah belum dicek sist</span> <br>";
                                        }; ?></td>
                                    <td></td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Code injected by live-server -->
    <!-- <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script> -->

</body>

</html>