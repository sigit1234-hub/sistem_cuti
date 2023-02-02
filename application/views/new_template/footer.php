<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0.0
    </div>
    Copyright &copy; PT Garuda Mart Indonesia <?= date('Y') ?>
</footer>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<!-- <script src="<?= base_url('assets/vendor/admin/') ?>plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- multiple -->
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('assets/vendor/admin/') ?>/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/vendor/admin/') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/vendor/admin/') ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/vendor/admin/') ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/vendor/admin/') ?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/vendor/admin/') ?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/vendor/admin/') ?>/dist/js/demo.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
<!-- sweetaler -->
<script src="<?= base_url() ?>assets/js/sweetalert/sweetalert2.all.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets') ?>/plugins/select2/select2.full.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?= base_url('assets/vendor/admin/') ?>/plugins/chartjs/Chart.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?= base_url('assets/vendor/admin/') ?>plugins/morris/morris.min.js"></script>
<!-- page script -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<script src="<?= base_url('assets/') ?>js/sweetalert/sweetalert2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sweetalert/myscript.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        for (B = 1; B <= 1; B++) {
            Barisbaru();
        }
        $('#Barisbaru').click(function(e) {
            e.preventDefault();
            Barisbaru();
        });
        $("tableLoop tbody").find('input[type=text]').filter(':visible:first').focus();
    });

    function Barisbaru() {
        $(document).ready(function() {
            $("[data-toggle='tooltip']").tooltip();
        });
        var Nomor = $("#tableLoop tbody tr").length + 1;
        var Baris = '<tr>';
        Baris += '<td class ="text-center">' + Nomor + '</td>';
        Baris += '<input type="hidden" name="kode_mr[]" class="form-control kode_mr" value="<?= $kode_mr; ?>">';
        Baris += '<td>';
        Baris += '<input type="text" name="part_number[]" class="form-control part_number" placeholder="Part Number" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="deskripsi[]" class="form-control deskripsi" placeholder="deskripsi" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="qty[]" class="form-control qty" placeholder="qty" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="ouv[]" class="form-control ouv" placeholder="ouv" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="lokasi[]" class="form-control lokasi" placeholder="lokasi" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="note[]" class="form-control note" placeholder="note" required="">';
        Baris += '</td>';
        Baris += '<td class="text-center">';
        Baris += '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Baris" id="HapusBaris"><i class="fa fa-times" aria-hidden="true"></i></a>';
        Baris += '</td>';
        Baris += '</tr';
        $("#tableLoop tbody").append(Baris);
        $("#tableLoop tbody tr").each(function() {
            $(this).find('td:nth-child(2) input').focus();
        });
    }
    $(document).on('click', '#HapusBaris', function(e) {
        e.preventDefault();
        var Nomor = 1;
        $(this).parent().parent().remove();
        $('tableLoop tbody tr').each(function() {
            $(this).find('td:nth-child(1)').html(Nomor);
            Nomor++;
        });
    });
</script>
<!-- // spl -->

<script type="text/javascript">
    $(document).ready(function() {
        for (B = 1; B <= 1; B++) {
            BarisbaruSPL();
        }
        $('#TambahAnggota').click(function(e) {
            e.preventDefault();
            BarisbaruSPL();
        });
        $("LoopTableSPL tbody").find('input[type=text]').filter(':visible:first').focus();
    });

    function BarisbaruSPL() {
        $(document).ready(function() {
            $("[data-toggle='tooltipSPL']").tooltip();
        });
        var Nomor = $("#tableLoopSPL tbody tr").length + 1;
        var Baris = '<tr>';
        Baris += '<td class ="text-center">' + Nomor + '</td>';
        Baris += '<input type="hidden" name="kode_spl[]" class="form-control" value="<?= $kode_spl; ?>">';
        Baris += '<td>';
        Baris += '<select class="form-control" name="anggota[]" id="anggota" data-placeholder="Pilih Anggota" style="width: 100%;">';
        Baris += '<option>Pilih Nama</option>';
        Baris += '<?php foreach ($karyawan as $kar) : ?>';
        Baris += '<option value="<?= $kar['id']; ?>"><?= $kar['nama']; ?></option>';
        Baris += ' <?php endforeach; ?>';
        Baris += '</select>';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="pekerjaan[]" class="form-control" placeholder="Pekerjaan" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="note[]" class="form-control" placeholder="Catatan" required="">';
        Baris += '<td class="text-center">';
        Baris += '<a class="btn btn-sm btn-danger" data-toggle="tooltip" id="HapusBarisSPL"><i class="fa fa-times" aria-hidden="true"></i></a>';
        Baris += '</td>';
        Baris += '</tr';
        $("#LoopTableSPL tbody").append(Baris);
        $("#LoopTableSPL tbody tr").each(function() {
            $(this).find('td:nth-child(2) input').focus();
        });
    }
    $(document).on('click', '#HapusBarisSPL', function(e) {
        e.preventDefault();
        var Nomor = 1;
        $(this).parent().parent().remove();
        $('LoopTableSPL tbody tr').each(function() {
            $(this).find('td:nth-child(1)').html(Nomor);
            Nomor++;
        });
    });
</script>
<!-- // spl -->

<!-- // $(document).ready(function() {
// $('#SimpanData').submit(function(e) {
// e.preventDefault();
// mr();
// });
// });
// function mr() {
// $.ajax({
// url: $("#SimpanData").attr('action'),
// type: 'post',
// cache: false,
// dataType: "json",
// data: $("#SimpanData").serialize(),
// success: function(data) {
// if (data.success == true) {
// $('.part_number').val('');
// $('.deskripsi').val('');
// $('.qty').val('');
// $('.ouv').val('');
// $('.lokasi').val('');
// $('.note').val('');
// $('#notif').fadeIn(800, function() {
// $("#notif").html(data.notif).fadeOut(5000).delay(800);
// });
// } else {
// $('#notif').html('<div class="alert alert-danger"> Data Gagal disimpan</div>');
// }
// },
// error: function(error) {
// alert(error);
// }
// });
// } -->

<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-m-dd',
            todayHighlight: true,
            multidate: true,
            startDate: '-3d',
            endDate: '+4d',
            todayHighlight: true,
            autoclose: true,
        }).datepicker("setDate", "0");
    });
</script>
<script type="text/javascript">
    $('.input-daterange').datepicker({
        format: 'D dd-M-yyyy',
        startDate: '-3d',
        endDate: '+4d',
        todayHighlight: true,
        autoclose: true,

    });
</script>
<script type="text/javascript">
    $(function() {
        $(".datepicker2").datepicker({
            format: 'd-M',
            autoclose: true,
            todayHighlight: false,
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $(".datepicker3").datepicker({
            format: 'yyyy',
            viewMode: "years",
            minViewMode: "years"
        });
    });
</script>
<script type="text/javascript">
    $(function() {
        $('.datepicker4').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    });
</script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $(".select2").select2();
        var get = document.getElementById('anggota[]');
        return get;
    });
</script>
<!-- dropdown jabatan -->
<script>
    $(function() {
        $.ajaxSetup({
            type: 'POST',
            url: '<?= base_url("Hrd/ambil_jabatan") ?>',
            cache: false
        });
        $("#divisi").change(function() {
            var value = $(this).val();
            if (value > 0) {
                $.ajax({
                    data: {
                        modul: 'jabataN',
                        id: value
                    },
                    success: function(respon) {
                        $("#jabatan").html(respon);
                    }
                });
            }
        });
    });
</script>
<!-- penjumlahan -->
<script>
    function sum() {
        var txtFirstNumberValue = document.getElementById('kasbon').value;
        var txtSecondNumberValue = document.getElementById('durasikasbon').value;
        var result = parseInt(txtFirstNumberValue) / parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('jumlah_bayar').value = result;
        }
    }
</script>
<script>
    function kali() {
        var txtFirstNumberValue = document.getElementById('ea').value;
        var txtSecondNumberValue = document.getElementById('qty').value;
        var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('total').value = result;
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                url: "<?= base_url('User/get_tot') ?>",
                type: "POST",
                dataType: "Json",
                data: {},
                success: function(data) {
                    $("#tot-pem").html(data.tot);
                    $("#tot-mr").html(data.mr);
                    $("#tot-mr_user").html(data.mr_user);
                    $("#tot-cuti").html(data.cuti);
                    $("#tot-cuti-acc").html(data.cuti2);
                    $("#tot-izin").html(data.izin);
                    $("#tot-spl").html(data.spl);
                    $("#tot-kasbon").html(data.ks);
                }
            })
        }, 200);
    });
</script>
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script>
    $(function() {
        $("#example3").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script>
    $(function() {
        $("#example4").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<!-- multiple karyawan -->
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');
        $.ajax({
            url: "<?= base_url('Admin/changeAccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleAccess/') ?>" + roleId;
            }
        });
    });
</script>

</body>

</html>