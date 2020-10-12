<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discente extends Model
{
    protected $fillable = [
        'nome', 'sexo', 'matricula', 'curso_id', 'turma', 'estado', 'dataNasc', 'foto'
    ];
}
