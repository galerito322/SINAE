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

  </script>
  <!-- Bootstrap 4 -->
  <script src=" {{ asset('Temp/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src=" {{ asset('Temp/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src=" {{ asset('Temp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- ChartJS -->
  <script src=" {{asset('Temp/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src=" {{ asset('Temp/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src=" {{ asset('Temp/dist/js/pages/dashboard.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=" {{ asset('Temp/dist/js/demo.js')}}"></script>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [
                {
                label: 'Agendamentos',
                backgroundColor: 'rgb(210, 214, 222)',
                borderColor: 'rgb(180, 174, 182)',
                data: [45, 170, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                {
                label: 'Atendimentos',
                backgroundColor: 'rgb(34, 142, 58)',
                borderColor: 'rgb(14, 122, 38)',
                data: [45, 167, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                }
            ],
        },

        options: {
            title: {
                display: true,
                fontSize: 20,
                text: "Relatorio anual de atendimentos"
            },
            labels: {
                fontStyle: "bold",

            }
        }
    });
  </script>
  </body>
</html>