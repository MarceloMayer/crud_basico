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

    function show($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto'=>$produto]);
    }

    function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto'=>$produto]);
    }

    function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome'=>$request->nome,
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade
        ]);

        return 'Produto atualizado com sucesso!';
    }

    function delete($id){
        $produto = Produto::findOrFail($id);
        
        return view('produtos.delete', ['produto'=>$produto]);
    }

    function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return 'Produto excluído com sucesso!';
    }
}
