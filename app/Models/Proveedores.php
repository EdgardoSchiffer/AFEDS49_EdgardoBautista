<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'codigo',
        'nombre',
        'direccion',
        'telefono'
    ];
}
