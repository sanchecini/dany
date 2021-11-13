<?php

namespace App\Models;

use App\Http\Controllers\ProductoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'cliente',
        'direccion',
        'municipio',
        'telefono',
        'whatsapp',
        
    ];

    //Relacion muchos a muchos
    // public function productos(){
    //     return $this->belongsToMany('App\Models\Producto');
    // }
    public function productos(){
        return $this->belongsToMany('App\Models\Productos')->using('App\Models\ClienteProducto');
}

    
}
