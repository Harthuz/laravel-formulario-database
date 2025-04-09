<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Produto;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar', function (Request $request) {
    //dd($request->all());

    Produto::create([
        'nome' => $request->input('nome'),
        'valor' => $request->input('valor'),
        'quantidade' => $request->input('quantidade', 0), // Valor padrão de 0 se não fornecido
    ]);
    
    echo "Produto criado com sucesso!";
});
// Editar produto (GET)
Route::get('/editar-produto/{id}', function($id){
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

// Editar produto (POST)
Route::post('/editar-produto/{id}', function(Request $request, $id){
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'quantidade' => $request->quantidade
    ]);

    echo "Produto editado com sucesso!";
});
