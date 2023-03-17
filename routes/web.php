<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sevico;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $meuPrimeiroServico = new Sevico;
    $meuPrimeiroServico->nome = "pintura";
    $meuPrimeiroServico->telefone = "123456789";
    $meuPrimeiroServico->save();

    return view('welcome');
});


