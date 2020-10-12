@extends('layouts.temp')

@section('titulo', 'Agendamento')

@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="tab-pane col-9" id="settings">
            <form class="form-horizontal" action="{{route('agenda.salvar')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('agenda._form')
                
                <div class="offset-sm-1 col-sm-10">
                    <button type="submit" class="btn btn-primary">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection