<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<footer class="footer text-right">
    <?= date('Y') ?> - © GMI | Prasetyo | 2.1.0
</footer>


</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>
<!-- Modal-Effect -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/custombox/js/custombox.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/custombox/js/legacy.min.js"></script>


<!-- jQuery  -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/detect.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/fastclick.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.blockUI.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/waves.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/switchery/switchery.min.js"></script>

<!-- Jquery-Ui -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!--Morris Chart-->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/morris/morris.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/raphael/raphael-min.js"></script>

<!-- Counter Up  -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- App js -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.core.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/js/jquery.app.js"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/moment/moment.js"></script>
<script src='<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/pages/jquery.fullcalendar.js"></script>

<!-- isotope filter plugin -->
<script type="text/javascript" src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/isotope/js/isotope.pkgd.min.js"></script>

<!-- Magnific popup -->
<script type="text/javascript" src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>


<!-- Page specific js -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/pages/jquery.dashboard.js"></script>

<!-- Toastr js -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/toastr/toastr.min.js"></script>

<script src="<?= base_url('assets/') ?>js/sweetalert/sweetalert2.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sweetalert/myscript.js"></script>

<!-- Responsive examples -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<!-- Required datatable js -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Selection table -->
<script src="<?= base_url('vendor/unpin/admin/HTML/vertical/') ?>assets/plugins/datatables/dataTables.select.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        var i = -1;
        var toastCount = 0;
        var $toastlast;

        var getMessage = function() {
            var msgs = ['Login berhasil',
                'Are you the six fingered man?',
                'Inconceivable!',
                'I do not think that means what you think it means.',
                'Have fun storming the castle!'
            ];
            i++;
            if (i === msgs.length) {
                i = 0;
            }

            return msgs[i];
        };

        var getMessageWithClearButton = function(msg) {
            msg = msg ? msg : 'Clear itself?';
            msg += '<br /><br /><button type="button" class="btn btn-secondary clear">Yes</button>';
            return msg;
        };

        $('#showtoast').click(function() {
            var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
            var msg = "login berhasil lho";
            var title = "$('#title').val() || ''";
            var $showDuration = $('#showDuration');
            var $hideDuration = $('#hideDuration');
            var $timeOut = $('#timeOut');
            var $extendedTimeOut = $('#extendedTimeOut');
            var $showEasing = $('#showEasing');
            var $hideEasing = $('#hideEasing');
            var $showMethod = $('#showMethod');
            var $hideMethod = $('#hideMethod');
            var toastIndex = toastCount++;
            var addClear = $('#addClear').prop('checked');

            toastr.options = {
                closeButton: $('#closeButton').prop('checked'),
                debug: $('#debugInfo').prop('checked'),
                newestOnTop: $('#newestOnTop').prop('checked'),
                progressBar: $('#progressBar').prop('checked'),
                positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                preventDuplicates: $('#preventDuplicates').prop('checked'),
                onclick: null
            };

            if ($('#addBehaviorOnToastClick').prop('checked')) {
                toastr.options.onclick = function() {
                    alert('You can perform some custom action after a toast goes away');
                };
            }

            if ($showDuration.val().length) {
                toastr.options.showDuration = $showDuration.val();
            }

            if ($hideDuration.val().length) {
                toastr.options.hideDuration = $hideDuration.val();
            }

            if ($timeOut.val().length) {
                toastr.options.timeOut = addClear ? 0 : $timeOut.val();
            }

            if ($extendedTimeOut.val().length) {
                toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
            }

            if ($showEasing.val().length) {
                toastr.options.showEasing = $showEasing.val();
            }

            if ($hideEasing.val().length) {
                toastr.options.hideEasing = $hideEasing.val();
            }

            if ($showMethod.val().length) {
                toastr.options.showMethod = $showMethod.val();
            }

            if ($hideMethod.val().length) {
                toastr.options.hideMethod = $hideMethod.val();
            }

            if (addClear) {
                msg = getMessageWithClearButton(msg);
                toastr.options.tapToDismiss = false;
            }
            if (!msg) {
                msg = getMessage();
            }

            $('#toastrOptions').text('Command: toastr["' +
                shortCutFunction +
                '"]("' +
                msg +
                (title ? '", "' + title : '') +
                '")\n\ntoastr.options = ' +
                JSON.stringify(toastr.options, null, 2)
            );

            var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
            $toastlast = $toast;

            if (typeof $toast === 'undefined') {
                return;
            }

            if ($toast.find('#okBtn').length) {
                $toast.delegate('#okBtn', 'click', function() {
                    alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                    $toast.remove();
                });
            }
            if ($toast.find('#surpriseBtn').length) {
                $toast.delegate('#surpriseBtn', 'click', function() {
                    alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                });
            }
            if ($toast.find('.clear').length) {
                $toast.delegate('.clear', 'click', function() {
                    toastr.clear($toast, {
                        force: true
                    });
                });
            }
        });

        function getLastToast() {
            return $toastlast;
        }

        $('#clearlasttoast').click(function() {
            toastr.clear(getLastToast());
        });
        $('#cleartoasts').click(function() {
            toastr.clear();
        });
    })
</script>
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
        Baris += '<input type="hidden" name="kode_mr[]" class="form-control kode_mr">';
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
        Baris += '<input type="hidden" name="kode_spl[]" class="form-control">';
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
                    $("#tot-lembur").html(data.lembur);
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
<!-- Ambil nilai untuk update -->
<script>
    $('.tombol-update').on('clik', function() {

    });
</script>

</body>


</html>