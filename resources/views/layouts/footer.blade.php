</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
      <strong>Copyright &copy; 2019 - {{date('Y')}} <a href="#">SINAE</a></strong>
      <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> BETA
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
  <script src=" {{ asset('Temp/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src=" {{ asset('Temp/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src=" {{ asset('Temp/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src=" {{ asset('Temp/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src=" {{ asset('Temp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src=" {{ asset('Temp/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src=" {{ asset('Temp/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=" {{ asset('Temp/dist/js/demo.js')}}"></script>
  </body>
</html>