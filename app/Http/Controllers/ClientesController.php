<?php

namespace App\Http\Controllers;
use App\Models\Clientes;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

 
    public function create()
    {
        return view('clientes.create');
    }


    public function store(Request $request)
    {
        $cliente = new Clientes([
            'nome' =>  $request->input('nome'),
            'email' =>  $request->input('email'),
            'telefone' =>  $request->input('telefone'),
            'endereco' =>  $request->input('endereco')
        ]);

        $cliente->save();
        return redirect()->route('clientes.index');
    }


    public function show(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    
    public function edit(string $id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    
    public function update(Request $request, string $id)
    {
        
        $cliente = Clientes::findOrFail($id);
       
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->endereco = $request->input('endereco');
        $cliente->save();
        return redirect()->route('clientes.index');
    }
/* 
    public function store(Request $request)
    {
        $request->validate([
            'nome' =>'required|string|max:50',
            'email' => 'required',
            'telefone' => 'required|integer',
            'endereco' => 'required'
        ]);
        return

    }
*/
   
    public function destroy(string $id)
    {

        $cliente = Clientes::findOrFail($id);;

        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
