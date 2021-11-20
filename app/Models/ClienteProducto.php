<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteProducto extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'producto_id', 'precio'];

    
}
