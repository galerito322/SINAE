<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'datAtendimento', 'hora', 'discente_id', 'area_id'
    ];
}
