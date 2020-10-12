@extends('layouts.temp')

@section('titulo', 'Atendimento')

@section('content')

<table class="table table-striped projects">
    <thead>
        <tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{$registro->relatorio}}
            </td>
        </tr>
    </tbody>
</table>
@endsection