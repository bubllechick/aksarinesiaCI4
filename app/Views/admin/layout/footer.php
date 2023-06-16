  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> -->
  </div>
  <!-- ./wrapper -->

  <!--
You should use either UNPKG or jsDelivr (i.e. only one of the following)

Note that tree shaking is completely unsupported from the CDN. If you want
a small build without build tools, please ask me and I will make one manually
with only the features you need. This build is about 31kB, or 11.5kB gzipped.
-->
  <script src="https://unpkg.com/fflate@0.8.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/fflate@0.8.0/umd/index.js"></script>
  <!-- Now, the global variable fflate contains the library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pako/2.0.4/pako.min.js"></script>

  <!-- If you're going buildless but want ESM, import from Skypack -->
  <script type="module">
    import * as fflate from 'https://cdn.skypack.dev/fflate@0.8.0?min';
  </script>

  <!-- axios  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url('assets/admin') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url('assets/admin') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/admin') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/admin') ?>/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?= base_url('assets/admin') ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/raphael/raphael.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('assets/admin') ?>/plugins/chart.js/Chart.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets/admin') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/admin') ?>/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('assets/admin') ?>/dist/js/pages/dashboard2.js"></script>
  <!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->
  </body>

  </html>