<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Agendamento;
use App\Atendimento;
use App\Discente;
use App\Area;

class AgendamentoController extends Controller
{
    public function index()
    {   
        $text = date('Y-m-d');

        $registros = DB::table('agendamentos')
                        ->where('datAtendimento', 'LIKE', $text)
                        ->orderBy('datAtendimento')
                        ->paginate('10');
        $area = Area::get();
        $dis = Discente::get();
        $atendimento = Atendimento::get();
        return view('agenda.index', compact('registros', 'area', 'dis', 'atendimento'));
    }

    public function search(Request $req)
    {
        //$area = DB::table('areas')->pluck('nome');
        $registros = DB::table('agendamentos')
                        ->orderBy('datAtendimento', 'desc')
                        ->paginate('10');
        $area = Area::get();
        $dis = Discente::get();
        $atendimento = Atendimento::get();
        return view('agenda.index', compact('registros', 'area', 'dis', 'atendimento'));
    }

    public function adicionar(Request $registro)
    {   
        $dis = Discente::get();
        $area = Area::where('nivel', 'LIKE', 2)->get();
        
        return view('agenda.adicionar', compact('registro', 'dis', 'area'));
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        
        #$req->datAtendimento = explode("-", $req->datAtendimento);
        #$ano = $req->datAtendimento[0];
        #$mes = $req->datAtendimento[1];
        #$dia = $req->datAtendimento[2];
        #$dat = $dia. '-'. $mes. '-'. $ano;
        #$dados['datAtendimento'] = $dat;
        
        //dd($dados);
        Agendamento::create($dados);
        return redirect()->route('agenda');
    }
}
