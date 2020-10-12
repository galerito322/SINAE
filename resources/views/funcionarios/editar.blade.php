@extends('layouts.temp')

@section('titulo', 'Editar Servidor')

@section('content')
<div class="card-body">
    <div class="container-fluid">
        <div class="tab-pane col-9" id="settings">
            <form class="form-horizontal" action="{{route('funcionarios.atualizar', $registro->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="input-field">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{isset($registro->name) ? $registro->name : ''}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSexo" class="col-sm-2 col-form-label">Sexo</label>
                        <div class="col-sm-10">
                            <select id="sexo" type="text" class="form-control" name="sexo">
                            @if ($registro->sexo == 'Feminino')
                                <option value="Feminino">{{isset($registro->sexo) ? $registro->sexo : ''}}</option>
                                <option value="Masculino">Masculino</option>
                            @else
                                <option value="Masculino">{{isset($registro->sexo) ? $registro->sexo : ''}}</option>                                    
                                <option value="Feminino">Feminino</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTel" class="col-sm-2 col-form-label">Nº Contato</label>
                        <div class="col-sm-10">
                            <input type="text" name="tel" class="form-control" value="{{isset($registro->tel) ? $registro->tel : ''}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputdat" class="col-sm-2 col-form-label">Data de Nasc.</label>
                        <div class="col-sm-10">
                            <input type="date" name="dataNasc" class="form-control" value="{{isset($registro->dataNasc) ? $registro->dataNasc : ''}}">
                        </div>
                    </div>
                    @if (Auth::user()->area_id == '4')    
                    <div class="form-group row">
                        <label for="inputMat" class="col-sm-2 col-form-label">Matricula</label>
                        <div class="col-sm-10">
                            <input type="text" name="matricula" class="form-control" value="{{isset($registro->matricula) ? $registro->matricula : ''}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputArea" class="col-sm-2 col-form-label">Área de atuação</label>
                        <div class="col-sm-10">
                            <select type="text" id="area_id" class="form-control" name="area_id" value="{{ old('area_id') }}" required autocomplete="area_id" autofocus>
                                {{$rg =  DB::table('areas')->get()}}
                                @foreach ($rg as $r)
                                    <option value="{{$r->id}}">{{$r->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @endif
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10 form-img">
                            @if (isset($registro->foto))
                            <div class="text-center">
                                <img width="150" src="{{asset($registro->foto)}}" alt="Foto" class="img-fluid">
                            </div>
                        @else
                        <div class="text-center">
                            <img width="150" src="{{asset('Temp/dist/img/ifaclogo.png')}}" alt="Foto" class="img img-fluid">
                        </div>
                        @endif
                            <div class="btn-block">
                            <input type="file" name="imagem">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn-lg btn-block btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection