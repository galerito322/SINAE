@extends('layouts.temp')

@section('titulo', 'Adicionar Área de atuação')

@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="tab-pane col-11" id="settings">
            <form class="form-horizontal" action="{{route('area.salvar')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('funcionarios.area._form')
                
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">&emsp;&emsp;Adicionar&emsp;&emsp;</button>
                </div>
            </form>
        </div>
        <br><br>
        <div class="tab-pane col-12">
            <p class="project-actions text-left">
                O <b>nível 1</b> Tem todas as permissões do sistema liberada.<br><br>
                O <b>nível 2</b> Adicionar e editar discentes, agendar atendimentos e listar atendimentos,<br>
                permite a realização e visualização de atendimento de sua respectiva área.<br>
            </p>    
        </div>
    </div>
</div>
@endsection