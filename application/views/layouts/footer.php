</div>
<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>HIMATEKNO</b>
    </div>
    <strong>Copyright &copy; 2022
</footer>


</div>

<!-- ./wrapper -->
<!-- DataTables -->



<!-- jQuery -->

<script src="<?php echo base_url('/assets/vendor/js/jquery.js'); ?>"></script>
<!-- Bootstrap -->


<script src="<?php echo base_url('/assets/vendor/js/bootstrap.bundle.js'); ?>"></script>


<!-- jQuery custom content scroller -->
<script src="<?php echo base_url('/assets/vendor/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>

<!-- jQuery Ck editor -->
<script src="<?php echo base_url('/assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('/assets/vendor/js/custom.js'); ?>"></script>

<!-- DataTables -->
<script src="<?= base_url('vendor'); ?>/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('vendor'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>






<script>
    $(function() {
        $("#tabelKriteria").DataTable({
            "paging": false,
            // atur banyak data yang ditampilkan
            "pageLength": 10,
            "lengthChange": false,
            "autoWidth": false,
            "ordering": false
        });
        // Tabel Sub Menu
        $("#submenu").DataTable({
            "ordering": false,
            "paging": true,
            "pageLength": 5,
            "lengthChange": false,
        });
        $('#tabelAlternatif').DataTable({
            "paging": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $('#tabelLaporan').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $('#tabelMatriks').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });
        $('#tabelNormalisasi').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
        });

    });
</script>


</body>

</html>