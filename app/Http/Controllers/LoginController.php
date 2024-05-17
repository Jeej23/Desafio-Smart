<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $validado = $request->validate([
            'email'=> 'required|email|string',
            'senha'=>'required|min:1'//A senha seria maior se estivesse em um ambiente de produção
        ],[
            'email.required'=>'coloca o email porfavor',
            'email.email'=>'email invalido',
            'email.string'=>'O email precisa conter texto',

            'senha.required'=>'Coloque uma senha porfavor',
            'senha.min'=>'a senha precisa ter no minimo min: caractere'
        ]);

        dd($validado);

    }

    public function cadastroUsuario(Request $request){

    }

    public function logout(){


    }

    public function showLogin(){
        return view('dashboard.autenticacao.login');

    }
}
