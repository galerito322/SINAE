<div class="input-field">
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Curso</label>
        <div class="col-sm-10">
            <input type="text" name="curso" class="form-control" value="{{isset($registro->curso) ? $registro->curso : ''}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Nivel</label>
        <div class="col-sm-10">
            <input type="text" name="nivel" class="form-control" value="{{isset($registro->nivel) ? $registro->nivel : ''}}">
        </div>
    </div>
</div>