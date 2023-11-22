<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //public function index()
    //{
        
        //$produtos = Produto::paginate(10);
        //return view('produtos.index', compact('produtos'));
    //}
    public function index(Request $request)
    {
        $search = $request->input('search');
        $produtos = Produto::where('descricao', 'like', '%' . $search . '%')->paginate(10);
    
        return view('produtos.index', compact('produtos'));
    }
    
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso.');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
    }
}
