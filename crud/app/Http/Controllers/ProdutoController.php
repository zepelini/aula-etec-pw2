<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function listar() {
        $produtos = Produto::all();

        return view('produto.listar', [
            "produtos" => $produtos
        ]);
    }

    public function inserir() {
        return view('produto.inserir');
    }

    public function salvar(Request $request) {
        $produto = new Produto();
        
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;

        $produto->save();

        return redirect()->route('produto.listar');
    }


    public function alterar(Request $request) {
        $produto = Produto::findOrFail($request->id);
        return view('produto.alterar', [
            "produto" => $produto
        ]);
    }
}
