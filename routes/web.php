<?php

use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\CsvToHtmlController;
use App\Http\Controllers\ErrorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterfaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TabelaController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function (){
    return view('Home');
})->name('Home');

//Rota para tabela
Route::get('/addons-tabela',[TabelaController::class,'tabela'])->name('addons.tabela');

//Rota para Gráfico
Route::get('/addons-chart',[TabelaController::class,'chart'])->name('addons.chart');

//Rota para Layout
Route::get('/interface-static',[InterfaceController::class,'static'])->name('interface.static');

//Rota para Layout-Light
Route::get('/interface-light',[InterfaceController::class,'light'])->name('interface.light');

//Rota para login
Route::get('/autenticacao-login',[AutenticacaoController::class,'login'])->name('autenticacao.login');

//Rota para registro
Route::get('/autenticacao-registro',[AutenticacaoController::class,'registro'])->name('autenticacao.registro');

//Rota para recuperação de senha
Route::get('/autenticacao-senha',[AutenticacaoController::class,'senha'])->name('autenticacao.senha');

Route::get('/errors-401',[ErrorController::class,'error401'])->name('errors.401');

Route::get('/errors-404',[ErrorController::class,'error404'])->name('errors.404');

Route::get('/errors-500',[ErrorController::class,'error500'])->name('errors.500');



Route::get('/login-form',[LoginController::class,'showLogin'])->name( 'login.form');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/loguot',[LoginController::class,'logout'])->name('logout');

Route::get('/exibir-usuario',[UsuarioController::class,'index'])->name('usuario.index');

Route::post('/usuario-store',[UsuarioController::class,'store'])->name('usuario.store');

Route::get('/usuario-cadastro',[UsuarioController::class,'create'])->name('usuario.create');

Route::get('/usuario-edit/{id}',[UsuarioController::class,'edit'])->name('usuario.edit');

Route::put('/usuario-update',[UsuarioController::class,'update'])->name('usuario.update');

Route::delete('/usuario-destroy',[UsuarioController::class,'destroy'])->name('usuario.destroy');


