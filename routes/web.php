<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get("/produtos/novo", "ProdutosController@create");
Route::get("/produtos/novo", [ProdutosController::class, "create"]);
Route::post("/produtos/novo", [ProdutosController::class, "store"])->name('registrar_produto');

Route::get("/produto/ver/{id}", [ProdutosController::class, "show"]);
Route::get("/produto/editar/{id}", [ProdutosController::class, "edit"]);
Route::post("/produto/editar/{id}", [ProdutosController::class, "update"])->name('alterar_produto');