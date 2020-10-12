<div class="input-field">
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-8">
            <input type="text" name="nome" class="form-control" value="{{isset($registro->nome) ? $registro->nome : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Nível</label>
        <div class="col-sm-8">
            <select type="number" name="nivel" class="form-control">
                <option value=1>1 - Permissões de Coordenador</option>
                <option value=2>2 - Criar e visualizar atendimentos de sua área</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-8">
            <input type="text" name="descricao" class="form-control" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
        </div>
    </div>
</div>