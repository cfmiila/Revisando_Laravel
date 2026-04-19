<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        // dd('Bem vindo, fulano');
        $nome= 'gta';
        return view('jogos', ['nome'=>$nome]);
    }
}
