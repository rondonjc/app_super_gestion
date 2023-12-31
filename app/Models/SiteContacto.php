<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContacto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','telefono','email','motivo_contacto_id','mensaje'];
}
