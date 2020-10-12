<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = [
        'user_id', 'status', 'agendamento_id', 'relatorio', 'anexo'
    ];
}
