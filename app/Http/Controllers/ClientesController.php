<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

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
        $cliente = new Clientes
        ([
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
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
