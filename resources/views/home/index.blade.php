@extends('layouts.charts')

@section('titulo', 'SINAE')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-8">
            <h3 class="m-0 text-dark">SISTEMA DO NÚCLEO DE ASSISTÊNCIA AO ESTUDANTE</h3>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$discentes->count()}}</h3>

                <p>Discentes Cadastrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/discentes" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$atendimentos->count()}}</h3>

                <p>Atendimentos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/atendimento" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$atendimentos->count()}}</h3>

                <p>Atendimentos este Mês</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/atendimento" class="small-box-footer">Relatório Mensal <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$agendamentos->count()}}</h3>

                <p>Agendamentos</p>
              </div>
              <div class="icon">
                <i class="ion ion-calendar"></i>
              </div>
              <a href="/agenda" class="small-box-footer">Mais informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
      
    <!-- Main content -->
    <section class="content">

        <canvas id="myChart"></canvas>

    </section>
@endsection

