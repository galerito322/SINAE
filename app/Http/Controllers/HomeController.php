<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discente;
use App\Agendamento;
use App\Atendimento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {   
        
        $discentes = Discente::all();
        $agendamentos = Agendamento::all();
        $atendimentos = Atendimento::all();
        
        return view('home/index', compact('discentes', 'agendamentos', 'atendimentos'));
    }
}
