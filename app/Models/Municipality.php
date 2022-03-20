<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'municipality',
        'department_id'
    ];
}
