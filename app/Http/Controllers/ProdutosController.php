<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    function create(){
        return view("produtos.create");
    }

    function store(Request $request){
    
        Produto::create([
            'nome'=>$request->nome,
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade
        ]);

        return 'Produto criado com sucesso!';
    }
}
