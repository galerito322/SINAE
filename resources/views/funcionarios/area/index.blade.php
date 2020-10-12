@extends('layouts.temp')

@section('titulo', 'Áreas de atuação')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
            <h1>Áreas de atuação</h1>
            </div>
            <div class="col-sm-3">
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-block" href="{{route('area.adicionar')}}">
                        <i class="fas fa-plus">
                        </i>
                        &emsp;Adicionar área de atuação
                    </a>                            
                </td>
            </div>
        </div>    
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr class="text-center">
                    <th style="width: 20%">
                        Área de atuação
                    </th>
                    <th style="width: 10%">
                        Nível
                    </th>
                    <th style="width: 50%">
                        Descrição
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr class="text-center">
                        <td>{{ $registro->nome}}</td>
                        <td>{{ $registro->nivel}}</td>
                        <td>{{ $registro->descricao}}</td>
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
</section>

@endsection