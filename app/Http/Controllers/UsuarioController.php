<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.autenticacao.exibirUsuario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.autenticacao.registro');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarioDate = Usuarios::create([
            'nome'=> $request->input('nome'),
            'apelido'=>$request->input('apelido'),
            'email'=>$request->input('email'),
            'senha'=>$request->input('senha'),
            'cnpj'=>$request->input('cnpj')
        ]);

        return redirect()->route('usuario.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.autenticacao.exibir');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('dashboarda.utenticacao.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('dashboard.autenticacao.delete');
    }
}
