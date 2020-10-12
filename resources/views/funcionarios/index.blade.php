@extends('layouts.temp')

@section('titulo', 'Servidores - Naes')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
            <h1>Servidores - Naes</h1>
            </div>
            @if (Auth::user()->area_id == '4')        
            <div class="col-sm-3">
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-block" href="{{route('area')}}">
                        &emsp;Áreas de atuação
                    </a>                            
                </td>
            </div>
            @endif
        </div>    
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                @foreach ($registros as $registro)
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        @if (isset($registro->foto))
                            <div class="text-center">
                                <img width="150" src="{{$registro->foto}}" alt="Foto" class="img-circle img-fluid">
                            </div>
                        @else
                        <div class="text-center">
                            <img width="100" src="{{asset('Temp/dist/img/ifaclogo.png')}}" alt="Foto" class="img img-fluid">
                        </div>
                        @endif
                    
                        <div class="card-header text-center border-bottom-0">
                            <span class="fa-spam">Área de atuação</span>
                            <h5>{{$area[$registro->area_id-1]}}</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                            <div class="col-12">
                                <h4 class="lead"><b>{{$registro->name}}&emsp;&emsp;&emsp;</b><br>
                                <span class="fa-spam">Matricula: </span>{{$registro->matricula}}  
                            </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                            <a href="{{route('funcionarios.perfil',$registro->id)}}" class="btn btn-block btn-primary">
                                <i class="fas fa-user"></i> Ver mais
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach    
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                {{$registros->links()}}
                </ul>
            </nav>
        </div>
        <!-- /.card-footer -->
    <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->


@endsection