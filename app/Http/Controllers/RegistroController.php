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
        return view('registros/listar');
    }
    public function store(Request $request)
    {
        $input=$request->all();
        Registro::create($input);
        
    }
}
