<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?= date('Y') ?> <a href="https://www.garudamart.com/" target="_blank">GMI</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Prasetyo S <i class="mdi mdi-heart text-danger"></i></span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- jQuery 2.2.3 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/vendor/admin/') ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- plugins:js -->
<script src="<?= base_url('assets/vendor/majestic/') ?>vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url('assets/vendor/majestic/') ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url('assets/vendor/majestic/') ?>js/off-canvas.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets/vendor/majestic/') ?>js/dashboard.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>js/data-table.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>js/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/vendor/majestic/') ?>js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page-->

<!-- admin-->
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
        var Baris = '<tr class="table-primary">';
        Baris += '<td class ="text-center">' + Nomor + '</td>';
        Baris += '<input type="hidden" name="kode_mr[]" class="form-control" value="<?= $kode_mr; ?>">';
        Baris += '<td>';
        Baris += '<input type="text" name="part_number[]" class="form-control" placeholder="Part Number" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="deskripsi[]" class="form-control" placeholder="deskripsi" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="qty[]" class="form-control" placeholder="qty" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="ouv[]" class="form-control" placeholder="ouv" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="lokasi[]" class="form-control" placeholder="lokasi" required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="note[]" class="form-control" placeholder="note" required="">';
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
        var Baris = '<tr class="table-primary">';
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