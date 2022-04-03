<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dash'])->middleware(['auth'])->name('dashboard');

Route::post('/tarefa', [TarefaController::class, 'store'])->name('create-tarefa');
Route::get('/index/tarefa', [TarefaController::class, 'index'])->name('show-tarefa');
Route::get('/edit/tarefa/{id}', [TarefaController::class, 'edit'])->name('edit-tarefa');
Route::post('update/tarefa/{id}', [TarefaController::class, 'update'])->name('update-tarefa');

require __DIR__ . '/auth.php';
