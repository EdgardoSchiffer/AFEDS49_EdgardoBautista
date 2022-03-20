<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'nombre',
        'descripcion',
        'precioUnitario',
        'id_proveedor'
    ];
}
