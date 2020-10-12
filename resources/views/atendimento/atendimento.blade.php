@extends('layouts.editor')

@section('titulo', 'Editor')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Atendimento SINAE
          </h3>
        </div>
        <!-- /.card-header -->
        <form class="form-horizontal" action="{{route('atendimento.salvar')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card-body pad">
            <div class="mb-3">
              <textarea class="textarea" name="relatorio"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              <div class="form-group row">
                <!--<textarea name="relatorio"></textarea>-->
                <div class="col-sm-10 form-img">
                  <div class="btn-block">
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" name="status" value="Realizado">
                    <input type="hidden" name="agendamento_id" value="{{$agenda->id}}">
                    <input type="file" name="anexo">
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Salvar</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
  <!-- /.content -->
      
@endsection
