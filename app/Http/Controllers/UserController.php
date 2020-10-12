<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {   
        $area = DB::table('areas')->pluck('nome');
        $registros = User::paginate(3);
        return view('funcionarios.index', compact('registros', 'area'));
    }

    public function editar($id)
    {
        $area = DB::table('areas')->pluck('nome');
        $registro = User::find($id);
        return view('funcionarios.editar', compact('registro', 'area'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(11,99);
            $dir = "img/Funcionario";
            $ex = $req->imagem->extension();
            $nomeImagem = "imagem_".date('m-d-Y')."-".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['foto'] = $dir."/".$nomeImagem;
        }
        User::find($id)->update($dados);

        return redirect()->route('funcionarios.perfil', ['id' => $id]);
    }

    public function perfil($id)
    {
        $area = DB::table('areas')->pluck('nome');
        $registro = User::find($id);
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
        //dd($idade, $ano, $anonasc);
        return view('funcionarios.perfil', compact('registro','idade','area'));
    }
    
}
