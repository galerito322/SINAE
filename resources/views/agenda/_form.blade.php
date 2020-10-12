<div class="input-field">
    <h2>Agendar</h2><br>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
            <input type="date" name="datAtendimento" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Horário</label>
        <div class="col-sm-10">
            <input type="time" name="hora" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
            <select id="discente_id" type="text" class="form-control @error('discente_id') is-invalid @enderror" name="discente_id" value="{{ old('discente_id') }}" required autocomplete="discente_id" autofocus>
                <option value="{{$dis[$registro->id-1]->id}}">{{$dis[$registro->id-1]->nome}}</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Área</label>
        <div class="col-sm-10">
            <select id="area_id" type="text" class="form-control @error('area_id') is-invalid @enderror" name="area_id" value="{{ old('area_id') }}" required autocomplete="area_id" autofocus>
                @foreach ($area as $a)
                    <option value="{{$a->id}}">{{$a->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>