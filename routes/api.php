<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

//Listar todos
Route::get('/produtos',[ProdutoController::class, 'index']);

//Criar
Route::post('/produtos', [ProdutoController::class, 'store']);

//Listar por id
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);

//Alterar
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);

//Deletar
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);

