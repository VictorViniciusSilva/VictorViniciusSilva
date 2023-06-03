<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\LogeventController;
use App\Http\Controllers\DatalogController;
use App\Http\Controllers\VisaoGeralController;
use App\Http\Controllers\PainelconfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// rotas da guia de navegação----------------------------------------------------------------
Route::get('/nav/equipamentos', [EquipamentoController::class, 'index'])->name('equipamentos');

Route::get('/nav/logevents', [LogeventController::class, 'index'])->name('logevents');

Route::get('/nav/datalogs', [DatalogController::class, 'index'])->name('datalogs');

Route::get('/nav/visaogeral', [VisaoGeralController::class, 'index'])->name('visaogeral');
Route::get('/realizar-ping', [VisaoGeralController::class, 'realizarPing']);

Route::get('/nav/painelconf', [PainelconfController::class, 'index'])->name('painelconf');

Route::post('/nav/equipamentos', [EquipamentoController::class, 'store'])->name('equipamentos.store');

Route::get('/equipamentos/nao-comunicantes', [EquipamentosController::class, 'getNaoComunicantes'])
    ->name('equipamentos.naoComunicantes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


