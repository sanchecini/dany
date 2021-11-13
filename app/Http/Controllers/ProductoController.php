<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
        return view('admin.producto.index', compact('productos'));
    }

    
    public function create()
    {
        $producto = new Producto();
        return view('admin.producto.create', compact('producto'));
    }

   
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
        ->with('success', 'Producto creado correctamente.');

    }

    
    public function show(Producto $producto)
    {
       

        return view('admin.producto.show', compact('producto'));
    }

    
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('admin.producto.edit', compact('producto'));
    }

    
    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado correctamente');
    }
}
