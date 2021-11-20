<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\ClienteProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class RelacionController extends Controller
{
    public function index(){

  //  $precios = ClienteProducto::get();
  
//   $precios = ClienteProducto::select('clientes.cliente','productos.producto', 'cliente_productos.precio')
//   ->join('clientes', 'cliente_productos.cliente_id', '=', 'clientes.id')
//   ->join('productos', 'cliente_productos.producto_id', '=', 'productos.id')
//   ->where('clientes.id', '=', 1)
//   ->get();

//   $array = array(
//     "foo" => "danny.png"
   
// );

  
 
//    return view("admin.precio.index", compact('precios','array'));

}

public function create()
    {
      
//       $precio = new ClienteProducto();
//     $productos = Producto::pluck('producto','id');
//    $clientes = Cliente::pluck('cliente','id');
//    $precios = ClienteProducto::select('clientes.cliente','productos.producto', 'cliente_productos.precio','clientes.cliente')
//    ->join('clientes', 'cliente_productos.cliente_id', '=', 'clientes.id')
//    ->join('productos', 'cliente_productos.producto_id', '=', 'productos.id')
//    ->where('clientes.id', '=', 1)
//    ->get();
 
//  $select = Cliente::find(1);

   return view('admin.precio.create');

    }


 public function agregar($id){

  $cliente = Cliente::find($id);

  $productos = Producto::pluck('producto','id');

  $precios = ClienteProducto::select('clientes.cliente','clientes.id','productos.producto', 'cliente_productos.precio')
     ->join('clientes', 'cliente_productos.cliente_id', '=', 'clientes.id')
     ->join('productos', 'cliente_productos.producto_id', '=', 'productos.id')
     ->where('clientes.id', '=', $id)
     ->get();
  
     $array = array(
           "foo" => "danny.png"
          
       );
  
     return view('admin.precio.create', compact('cliente','precios','productos','array'));
 }

    public function store(Request $request)
    {
        

      $precio = ClienteProducto::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Precios created successfully.');
    }
    

    public function edit($id)
    {
  //    $array = array(
  //      "foo" => "danny.png"
      
  //  );
  $cliente = Cliente::find($id);

  

  $productos = Producto::pluck('producto','id');
  

  $precios = ClienteProducto::select('clientes.cliente','clientes.id','productos.id','productos.producto', 'cliente_productos.precio')
     ->join('clientes', 'cliente_productos.cliente_id', '=', 'clientes.id')
     ->join('productos', 'cliente_productos.producto_id', '=', 'productos.id')
     ->where('clientes.id', '=', $id)
     ->get();
  
 
  
     return view('admin.precio.edit', compact('cliente','precios','productos'));
    }

    public function update(Request $request, ClienteProducto $precio )
    {
      $precio->update($request->all());
      return redirect()->route('clientes.index')
          ->with('success', 'Cliente actualizado correctamente');
    }

    

}
