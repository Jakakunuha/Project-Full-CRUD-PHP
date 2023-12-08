 <!-- /.content-wrapper -->
 <footer class="main-footer">
   <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
     <b>Version</b> 3.2.0
   </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="assets-template/plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="assets-template/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
   $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="assets-template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="assets-template/lugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="assets-template/plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="assets-template/plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="assets-template/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="assets-template/plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="assets-template/plugins/moment/moment.min.js"></script>
 <script src="assets-template/plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="assets-template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="assets-template/plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="assets-template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="assets-template/dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes -->
 <!-- <script src="assets-template/dist/js/demo.js"></script> -->
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="assets-template/dist/js/pages/dashboard.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="assets-template/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="assets-template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="assets-template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="assets-template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="assets-template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="assets-template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

 <script>
   $(function() {

     $('#example2').DataTable();
   });
 </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

 <!-- asset plugin datatables -->
 <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

 <!-- load cdn ckeditor -->
 <script src="https://cdn.ckeditor.com/4.19.0/full-all/ckeditor.js"></script>

 <script>
   CKEDITOR.replace('alamat', {
     filebrowserBrowseUrl: 'assets/ckfinder/ckfinder.html',
     filebrowserUploadUrl: 'assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
     height: '400px'
   });
 </script>

 <!-- load fontawesome with CDN -->
 <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


 <script>
   new DataTable('#table');
 </script>

 </body>

 </html>