<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {   
        $registros = Curso::paginate(10);
                
        return view('cursos.index', compact('registros'));
    }

    public function adicionar()
    {

        return view('cursos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);
        Curso::create($dados);
        return redirect()->route('cursos');
    }
}
