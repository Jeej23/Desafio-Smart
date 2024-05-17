<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function login(){
        return view('dashboard.autenticacao.login');
    }

    public function registro(){
        return view('dashboard.autenticacao.registro');
    }

    public function senha(){
        return view('dashboard.autenticacao.senha');
    }
}
