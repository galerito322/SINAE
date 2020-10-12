@extends('layouts.temp')

@section('titulo', 'Adicionar Discente')

@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="tab-pane col-9" id="settings">
            <form class="form-horizontal" action="{{route('discentes.salvar')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('discentes._form')
                
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection