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


// SELECT cliente_productos.cliente_id, cliente_productos.producto_id 
// FROM cliente_productos
// INNER JOIN clientes ON cliente_productos.cliente_id = clientes.id
// INNER JOIN productos ON cliente_productos.producto_id = productos.id
  

  $precios = ClienteProducto::select('clientes.cliente','productos.producto')
  ->join('clientes', 'cliente_productos.cliente_id', '=', 'clientes.id')
  ->join('productos', 'cliente_productos.producto_id', '=', 'productos.id')
  ->get();

  
 
   return view("welcome", compact('precios'));

}
// SELECT clientes.name, productos.name 
// FROM cliente_productos 
// JOIN clientes ON clientes.id = cliente_productos.cliente_id 
// JOIN productos ON productos.id = cliente_productos.producto_id;

}

// SELECT Tabla1.OrderID, Tabla2.CustomerName, Tabla3.OrderDate
// FROM Tabla1
// INNER JOIN Tabla2 ON Tabla1.CustomerID=Tabla2.CustomerID
// INNER JOIN Tabla3 ON Tabla1.CustomerID=Tabla3.CustomerID