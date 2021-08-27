<?php

use App\Http\Controllers\{FuncionarioController};
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now show something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/novo', [FuncionarioController::class, 'create'])->name('funcionarios.novo');
Route::post('/funcionarios/novo', [FuncionarioController::class, 'store'])->name('funcionarios.novo');
Route::get('/funcionarios/{id}', [FuncionarioController::class, 'show'])->name('funcionarios.show');
Route::get('/funcionarios/edit/{id}', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');
