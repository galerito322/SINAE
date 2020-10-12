<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Discente;
use App\Curso;
use App\Agendamento;
use App\Atendimento;
use App\Area;
use App\User;

class DiscenteController extends Controller
{
    public function index()
    {   
        /*$registros = DB::table('discentes')
            ->join('cursos', 'discentes.curso_id', '=', 'cursos.id')
            ->select('discentes.*', 'cursos.curso')
            ->paginate(10);*/
        $registros = Discente::paginate(10);
        $cursos = Curso::get();
        //dd($curso);
        
        return view('discentes.index', compact('registros', 'cursos'));
    }

    public function adicionar()
    {
        return view('discentes.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/Discentes";
            $ex = $req->imagem->extension();
            $nomeImagem = "imagem_".date('m-d-Y')."-".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['foto'] = $dir."/".$nomeImagem;
        }
        //dd($dados);
        Discente::create($dados);
        return redirect()->route('discentes');
    }

    public function search(Request $req)
    {
        $text = $req->search;

        $registros = Discente::where('nome', 'LIKE', "%{$text}%")->paginate(10);
        $cursos = Curso::get();
        return view('discentes.index', compact('registros', 'cursos'));
    }

    public function editar($id)
    {
        $registro = Discente::find($id);
        return view('discentes.editar', compact('registro'));
    }
    
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/Discentes";
            $ex = $req->imagem->extension();
            $nomeImagem = "imagem_".date('m-d-Y')."-".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['foto'] = $dir."/".$nomeImagem;
        }
        //dd($dados);
        Discente::find($id)->update($dados);

        //return redirect()->route('discentes'); retorna diretamente para a listagem
        return redirect()->route('discentes.perfil', ['id' => $id]);
    }
    
    public function perfil($id)
    {
        $i = $id;
        
        $agenda = Agendamento::where('discente_id', 'LIKE', "%{$i}%")->get();
        $cursos = Curso::get();
        $area = Area::get();

        $registro = Discente::find($id);
        $ano = date('Y');
        $mes = date('m');
        $dia = date('d');
        $nascimento = $registro->dataNasc;
        $nascimento = explode('-', $nascimento);
        $dianasc = ($nascimento[2]);
        $mesnasc = ($nascimento[1]);
        $anonasc = ($nascimento[0]);
        $idade = ($ano - $anonasc);
        if ($mes < $mesnasc) // se o mes é menor, só subtrair da idade
        {
            $idade--;
        }
        elseif ($mes == $mesnasc && $dia < $dianasc) // se esta no mes do aniversario mas não passou ou chegou a data, subtrai da idade
        {
            $idade--;
        }
        $cursos = Curso::get();
        //dd($area);
        return view('/discentes/perfil', compact('registro', 'idade', 'cursos', 'agenda', 'area'));
    }


}