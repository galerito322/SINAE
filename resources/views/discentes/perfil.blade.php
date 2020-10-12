@extends('layouts.temp')

@section('titulo', 'Perfil Discentes')

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="img-fluid"
                        src="{{asset ($registro->foto)}}"
                        alt="User profile picture">
                </div>

              <h3 class="profile-username text-center">{{$registro->nome}}</h3>

              <p class="text-muted text-center">{{$cursos[$registro->curso_id-1]->nivel}} - {{$cursos[$registro->curso_id-1]->curso}} / {{$registro->turma}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <p><b>Matricula:</b>  {{$registro->matricula}}</p>
                    </li>
                    <li class="list-group-item">
                        <p><b>Curso:</b>  {{$cursos[$registro->curso_id-1]->curso}}</p>
                    </li>
                    <li class="list-group-item">
                        <p><b>Idade: </b> {{$idade}}</p>
                    </li>                
                </ul>
                <a href="{{route('discentes.editar',$registro->id)}}" class="btn btn-primary btn-block"><b>Atualizar</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <span class="profile-username">Relatórios</span>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="relatorios">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 35%">
                                        Área
                                    </th>
                                    <th style="width: 20%">
                                        Data
                                    </th>
                                    <th style="width: 15%">
                                        Horário
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      @isset($agenda[$registro->id-1]->hora)
                                        {{$area[$agenda[$registro->id-1]->area_id-1]->nome}}
                                      @endisset
                                    </td>
                                    <td>
                                      @isset($agenda[$registro->id-1]->hora)
                                        {{$agenda[$registro->id-1]->datAtendimento}}
                                      @endisset
                                    </td>
                                    <td>
                                        @isset($agenda[$registro->id-1]->hora)
                                          {{$agenda[$registro->id-1]->hora}}
                                        @endisset
                                    </td>
                                    <td>

                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="">
                                            Visualizar
                                        </a>                            
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection