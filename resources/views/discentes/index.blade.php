@extends('layouts.temp')

@section('titulo', 'Discentes')

@section('content')
    
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
            <h1>Discentes</h1>
            </div>
            <div class="col-sm-3">
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-block" href="{{route('discentes.adicionar')}}">
                        <i class="fas fa-plus">
                        </i>
                        &emsp;Adicionar Discente
                    </a>                            
                </td>
            </div>
        </div>    
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card-body p-0">
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3" action="{{route('discentes.search')}}" method="POST">
            {{ csrf_field() }}
            <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="search" type="search" placeholder="Procurar discente" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
                </button>
            </div>
            </div>
        </form>
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        
                    </th>
                    <th style="width: 17%">
                        Discente
                    </th>
                    <th style="width: 13%">
                        Nível
                    </th>
                    <th style="width: 25">
                        Curso
                    </th>
                    <th style="width: 10%">
                        Turma
                    </th>
                    <th style="width: 10%" class="text-center">
                        Status
                    </th>
                    <th style="width: 11%">
                        
                    </th>
                    <th style="width: 13%">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>
                        <img alt="Foto" class="table-avatar" src="{{asset ($registro->foto)}}">
                        </td>
                        <td>{{ $registro->nome}}</td>  
                        <td>{{ $cursos[$registro->curso_id-1]->nivel}}</td>
                        <td>{{ $cursos[$registro->curso_id-1]->curso}}</td>
                        <td>{{ $registro->turma}}</td>
                        <td class="project-state">
                            <span @if ($registro->estado == 'Ativo') class="badge badge-success"
                                @endif class="badge badge-danger">&emsp;{{ $registro->estado}}&emsp;
                            </span>
                        </td>
                        <td class="project-actions text-right">
                        <a class="btn btn-danger btn-sm" href="{{route('agenda.adicionar',$registro->id)}}">
                                <i class="fas fa-calendar-alt">
                                </i>
                                Agendar
                            </a>                            
                        </td>
                        <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{route('discentes.perfil',$registro->id)}}">
                                <i class="fas fa-folder">
                                </i>
                                Visualizar
                            </a>                            
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