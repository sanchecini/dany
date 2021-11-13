<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::get();
        return view('admin.cliente.index', compact('clientes'));
    }

    
    public function create()
    {
        $cliente = new Cliente();
        return view('admin.cliente.create', compact('cliente'));
    }

   
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.index')
        ->with('success', 'Cliente creado correctamente.');

    }

    
    public function show(Cliente $cliente)
    {
       

        return view('admin.cliente.show', compact('cliente'));
    }

    
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('admin.cliente.edit', compact('cliente'));
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente');
    }

    
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado correctamente');
    }
}
