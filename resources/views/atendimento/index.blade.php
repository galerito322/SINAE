@extends('layouts.temp')

@section('titulo', 'Atendimentos')

@section('content')
    
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Atendimentos</h1>
            </div>
        </div>    
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 20%">
                        Discente
                    </th>
                    <th style="width: 20%">
                        Area
                    </th>
                    <th style="width: 20%">
                        Servidor responsável
                    </th>
                    <th style="width: 17">
                        Data do atendimento
                    </th>
                    <th style="width: 7%">
                        Status
                    </th>
                    <th style="width: 16">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $dis[$agenda[$registro->agendamento_id-1]->discente_id-1]->nome}}</td>
                        <td>{{ $area[$agenda[$registro->agendamento_id-1]->area_id-1]->nome}}</td>
                        <td>{{ $user[$registro->user_id-1]->name}}</td>
                        <td>{{ $agenda[$registro->agendamento_id-1]->datAtendimento}}&emsp;{{ $agenda[$registro->agendamento_id-1]->hora}}</td>
                        <td>
                            <span @if ($registro->status == 'Realizado') class="badge badge-success"
                                @endif class="badge badge-danger">{{ $registro->status}}
                            </span>
                            
                        </td>
                        <td class="project-actions text-right">
                        @if ($agenda[$registro->agendamento_id-1]->area_id == Auth::user()->area_id)
                            <a class="btn btn-primary btn-block" href="{{route('atendimento.visualizar', $registro->id)}}">
                                <i class="fas fa-folder">
                                </i>
                                Viualizar
                            </a>     
                        @endif
                        @if (Auth::user()->area_id == 4)
                            <a class="btn btn-primary btn-block" href="{{route('atendimento.visualizar', $registro->id)}}">
                                <i class="fas fa-folder">
                                </i>
                                Viualizar
                            </a>    
                        @endif
                        
                                                        
                        </td>
                    </tr>
                @endforeach
            </tbody> 
        </table>
        <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
            {{$registros->links()}}
            </ul>
        </nav>
        </div>
    </div>
    <!-- /.card-body -->
    <!-- /.card-footer -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection