<div class="input-field">
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" value="{{isset($registro->nome) ? $registro->nome : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-10">
            <select id="sexo" type="text" class="form-control" name="sexo">
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Matricula</label>
        <div class="col-sm-10">
            <input type="text" name="matricula" class="form-control" value="{{isset($registro->matricula) ? $registro->matricula : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Curso</label>
        <div class="col-sm-10">
            <select id="curso_id" type="text" class="form-control @error('curso_id') is-invalid @enderror" name="curso_id" value="{{ old('curso_id') }}" required autocomplete="curso_id" autofocus>
                {{$rg =  DB::table('cursos')->get()}}
                @foreach ($rg as $r)
                    <option value="{{$r->id}}">{{$r->curso}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Turma</label>
        <div class="col-sm-10">
            <input type="text" name="turma" class="form-control" value="{{isset($registro->turma) ? $registro->turma : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="custom-select" name="estado" value="{{isset($registro->estado) ? $registro->estado : ''}}">
                <option value="Ativo">Ativo</option>
                <option value="Encaminhado">Encaminhado</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Data de Nasc.</label>
        <div class="col-sm-10">
            <input type="date" name="dataNasc" class="form-control" value="{{isset($registro->dataNasc) ? $registro->dataNasc : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10 form-img">
            @if (isset($registro->foto))
                <img width="150" src="{{asset($registro->foto)}}">
            @endif
            <div class="btn-block">
            <input type="file" name="imagem">
            </div>
        </div>
    </div>
</div>