<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'producto',
        'kilos'
        
    ];

    //Relacion muchos a muchos
    // public function clientes(){
    //     return $this->belongsToMany('App\Models\Cliente')->withPivot('cliente_id','name');
    // }

    public function clientes(){
       return $this->belongsToMany('App\Models\Clientes')->using('App\Models\ClienteProducto');
    }
}
