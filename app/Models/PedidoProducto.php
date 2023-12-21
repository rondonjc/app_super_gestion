<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoProducto extends Model
{
    use HasFactory;
    protected $table = 'pedidos_productos';
    protected $fillable = ['pedido_id','producto_id','cantidad'];
}
