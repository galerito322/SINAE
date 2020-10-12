@extends('layouts.temp')

@section('titulo', 'Perfil Servidores')

@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                @if (isset($registro->foto))
                <div class="text-center">
                    <img width="150" src="{{asset($registro->foto)}}" alt="Foto" class="img-fluid">
                </div>
                @else
                <div class="text-center">
                    <img width="150" src="{{asset('Temp/dist/img/ifaclogo.png')}}" alt="Foto" class="img img-fluid">
                </div>
                @endif

              <h3 class="profile-username text-center">{{$registro->name}}</h3>

              <p class="text-muted text-center">{{$area[$registro->area_id-1]}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <p><b>Matricula:</b>  {{$registro->matricula}}</p>
                    </li>
                    <li class="list-group-item">
                        <p><b>E-mail:</b>  {{$registro->email}}</p>
                    </li>
                    <li class="list-group-item">
                        <p><b>Contato:</b>  {{$registro->tel}}</p>
                    </li>
                    <li class="list-group-item">
                        <p><b>Idade: </b> {{$idade}}</p>
                    </li>                
                </ul>@if (Auth::user()->id == $registro->id)
                    <a href="{{route('funcionarios.editar',$registro->id)}}" class="btn btn-primary btn-block"><b>Atualizar</b></a>
                @else
                    @if (Auth::user()->area_id == '4')
                    <a href="{{route('funcionarios.editar',$registro->id)}}" class="btn btn-primary btn-block"><b>Atualizar</b></a>
                    @endif
                @endif
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
                <li class="nav-item"><a class="nav-link active" href="#relatorios" data-toggle="tab">Relatórios</a></li>
                <li class="nav-item"><a class="nav-link" href="#formularios" data-toggle="tab">Formulários</a></li>
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
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 15%">
                                        Área
                                    </th>
                                    <th style="width: 15%">
                                        
                                    </th>
                                    <th style="width: 15%">
                                        Data
                                    </th>
                                    <th style="width: 15%">
                                        Horário
                                    </th>
                                    <th style="width: 15%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            Psicologia
                                        </a>
                                    </td>
                                    <td>
                                      <a>
                                          Adriana
                                      </a>
                                  </td>
                                    <td>
                                        <a>
                                            30/11/2019
                                        </a>
                                    </td>
                                    <td>
                                        <a>
                                            10:30 - 11:00
                                        </a>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="/discentes">
                                            <i class="fas fa-folder">
                                            </i>
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
                <div class="tab-pane" id="formularios">
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 15%">
                                        Formulário
                                    </th>
                                    <th style="width: 15%">
                                        Status
                                    </th>
                                    <th style="width: 15%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            Socio Economico
                                        </a>
                                    </td>
                                    <td class="state">
                                        <span class="badge badge-success">Realizado</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="/discentes">
                                            <i class="fas fa-folder">
                                            </i>
                                            Visualizar
                                        </a>                            
                                    </td>
                                </tr>
                                <tr>
                                  <td>
                                      #
                                  </td>
                                  <td>
                                      <a>
                                          Visita
                                      </a>
                                  </td>
                                  <td class="state">
                                      <span class="badge badge-success">Realizado</span>
                                  </td>
                                  <td class="project-actions text-right">
                                      <a class="btn btn-primary btn-sm" href="/discentes">
                                          <i class="fas fa-folder">
                                          </i>
                                          Visualizar
                                      </a>                            
                                  </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
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