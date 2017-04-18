<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class RegistroController extends Controller
{
    //
    public function index()
    {
        return view('registros/crear');
    }
    public function listar()
    {
        $r= Registro::all();
        return view('registros/listar', ['todos_los_registros' => $r]);
    }
    public function store(Request $request)
    {
        $input=$request->all();
        Registro::create($input);
        return redirect('/listar');
    }
}
