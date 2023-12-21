<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'proveedores';
    protected $fillable = ['nombre','site','uf','email'];


    public function productos():HasMany
    {
        return $this->hasMany(Producto::class,'proveedor_id','id');
    }


}
