<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Atendimento;
use App\Discente;
use App\Area;
use App\Agendamento;
use App\User;

class AtendimentoController extends Controller
{
    public function index()
    {   
        //$registros = Atendimento::paginate(7);
            
        $registros = DB::table('atendimentos')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        //dd($registros);
        $agenda = Agendamento::get();
        $area = Area::get();
        $dis = Discente::get();
        $user = User::get();
        
        return view('atendimento.index', compact('registros', 'agenda', 'area', 'dis', 'user'));
    }

    public function atendimento(Request $req)
    {
        $agenda = Agendamento::find($req->id);
        $area = Area::find($agenda->area_id);
        $dis = Discente::find($agenda->discente_id);

        return view('atendimento.atendimento', compact('agenda', 'area', 'dis'));
    }

    public function salvar(Request $req)
    {   
        $dados = $req->all();

        if($req->hasFile('anexo')){
            $anexo = $req->file('anexo');
            $num = rand(1111,9999);
            $dir = "img/Atendimento";
            $ex = $anexo->extension();
            $nomeanexo = "anexo_".date('m-d-Y')."-".$num.".".$ex;
            $anexo->move($dir,$nomeanexo);
            $dados['anexo'] = $dir."/".$nomeanexo;
        }

        $dados['user_id'] = $req->user_id;
        $dados['status'] = $req->status;
        $dados['agendamento_id'] = $req->agendamento_id;
        $dados['relatorio'] = $req->relatorio;
        //dd($dados);
        Atendimento::create($dados);
        return redirect()->route('atendimento');
    }

    public function visualizar($id)
    {
        $registro = Atendimento::find($id);

        return view('atendimento.visualizar', compact('registro'));
    }

}
