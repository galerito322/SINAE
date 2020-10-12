@extends('layouts.temp')

@section('titulo', 'Cursos')

@section('content')
    
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
            <h1>Cursos</h1>
            </div>
            <div class="col-sm-3">
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-block" href="{{route('cursos.adicionar')}}">
                        <i class="fas fa-plus">
                        </i>
                        &emsp;Adicionar Curso
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
                <tr>
                    <th style="width: 30%">
                        Cursos
                    </th>
                    <th style="width: 25%">
                        Nível
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $registro->curso}}</td>
                        <td>{{ $registro->nivel}}</td>
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