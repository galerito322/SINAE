<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    public function index()
    {   
        $registros = Area::paginate(6);
                
        return view('funcionarios.area.index', compact('registros'));
    }

    public function adicionar()
    {

        return view('funcionarios.area.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        //dd($dados);
        Area::create($dados);
        return redirect()->route('area');
    }
}
