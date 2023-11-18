<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Crud de Alunos

Route::group(['prefix' => 'alunos', 'as' => 'alunos'], function () {
    Route::get('read', [AlunoController::class, 'read'])->name('alunos.read');
    Route::post('create', [AlunoController::class, 'create'])->name('alunos.read');
    Route::get('update', [AlunoController::class, 'update'])->name('alunos.read');
    Route::get('delete', [AlunoController::class, 'delete'])->name('alunos.read');
});

// Crud de Matérias

Route::group(['prefix' => 'materia', 'as' => 'materia'], function () {
    Route::get('read', [MateriaController::class, 'read'])->name('alunos.read');
    Route::get('create', [MateriaController::class, 'create'])->name('alunos.read');
    Route::get('update', [MateriaController::class, 'update'])->name('alunos.read');
    Route::get('delete', [MateriaController::class, 'delete'])->name('alunos.read');
});
