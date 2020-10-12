@extends('layouts.temp')

@section('titulo', 'Agenda')

@section('content')
    
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Agendamentos</h1>
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
                    <th style="width: 30%">
                        Discente
                    </th>
                    <th style="width: 20%">
                        Área
                    </th>
                    <th style="width: 30">
                        Data do atendimento
                    </th>
                    <th style="width: 20">
                        <a class="btn btn-danger btn-block" href="{{route('agenda.search')}}">
                            Ver todos 
                        </a>                            
                    </td>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $dis[$registro->discente_id-1]->nome}}</td>
                        <td>{{ $area[$registro->area_id-1]->nome}}</td>
                        <td>{{ $registro->datAtendimento}} &emsp; {{$registro->hora}}</td>
                        <td class="project-actions text-right">
                            @if ($registro->datAtendimento == date('Y-m-d'))
                                @if ($registro->area_id == Auth::user()->area_id)
                                    <a class="btn btn-primary btn-block" href="{{route('atendimento.atendimento',$registro->id)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Realizar Atendimento
                                    </a>
                                @endif
                                @if (Auth::user()->area_id == 4)
                                    <a class="btn btn-primary btn-block" href="{{route('atendimento.atendimento',$registro->id)}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Realizar Atendimento
                                    </a>
                                @endif
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