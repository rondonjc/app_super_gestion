<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoDetalle extends Model
{
    use HasFactory;
    protected $fillable = ['producto_id','anchura','largura','altura','unidad_id'];

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}
