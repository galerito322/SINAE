@extends('layouts.temp')

@section('titulo', 'Adicionar Curso')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
                <h1>Adicionar curso</h1>
            </div>
        </div>    
    </div><!-- /.container-fluid -->
</section>
<div class="card-body">
    <div class="container-fluid">
        <div class="tab-pane col-9" id="settings">
            <form class="form-horizontal" action="{{route('cursos.salvar')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('cursos._form')
                
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection