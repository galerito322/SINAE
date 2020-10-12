@includeIf('layouts.head')

@includeIf('layouts.header')

@yield('content')

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

    $(document).ready(function() {
      // @param {String} text
      $('.textarea').summernote({
        lang: 'pt-BR', // default: 'pt-BR'
        height: 350, 
        toolbar: [
        // [groupName, [list of button]]
        ['undo', ['undo', 'redo']],          
        ['style', ['bold', 'italic', 'underline']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['style','ul', 'ol', 'paragraph']],
        ['table', ['table','black']],
      ],
      })
      // @param {String} text
      $('.textarea').summernote('insertText', 'Atendimento na área de {{$area->nome}}'+
      ' realizado pelo servidor {{auth()->user()->name}} prestado ao discente {{$dis->nome}}'+
      ' no Núcleo de Apoio ao estudante (NAES), no dia {{date('d')}}/{{date('m')}}/{{date('Y')}}.');
    });
    
  </script>
  <!-- Bootstrap 4 -->
  <script src=" {{ asset('Temp/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src=" {{ asset('Temp/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src=" {{ asset('Temp/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <script src=" {{ asset('Temp/plugins/summernote/lang/summernote-pt-BR.js')}}"></script>-->
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