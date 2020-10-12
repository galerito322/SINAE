@extends('layouts.temp')

@section('titulo', 'Editar Discentes')

@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="tab-pane col-9" id="settings">
            <form class="form-horizontal" action="{{route('discentes.atualizar', $registro->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('discentes._form')
                
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn-lg btn-block btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection