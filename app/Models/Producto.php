<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','peso','unidad_id','proveedor_id'];


    public function productoDetalle(): HasOne
    {
        return $this->hasOne(ProductoDetalle::class);
    }

    public function proveedor():BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function pedidos():BelongsToMany
    {
        return $this->belongsToMany(Pedido::class,'pedidos_productos','producto_id','pedido_id');
    }
}
