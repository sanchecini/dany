<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

use App\Models\ClienteProducto;
use App\Models\Producto;

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
                
        $array = array(
            "foo" => "danny.png",
            "bar" => "logo.png",
        );



        return view('admin.cliente.index', compact('clientes','array'));
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

    
    public function show($id)
    {
        $cliente = Cliente::find($id);
        $producto = Producto::find($id);

        $precios = ClienteProducto::select('clientes.cliente','clientes.id','productos.producto', 'cliente_productos.precio')
     ->join('clientes', 'cliente_productos.cliente_id', '=', 'clientes.id')
     ->join('productos', 'cliente_productos.producto_id', '=', 'productos.id')
     ->where('clientes.id', '=', $id)
     ->get();

        return view('admin.cliente.show', compact('precios','cliente','producto'));
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
