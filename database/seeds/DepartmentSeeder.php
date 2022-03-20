<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $departamentos = [
            ['department' =>  'Ahuachapán'],
            ['department' =>  'Santa Ana'],
            ['department' =>  'Sonsonate'],
            ['department' =>  'La Libertad'],
            ['department' =>  'Chalatenango'],
            ['department' =>  'San Salvador'],
            ['department' =>  'Cuscatlán'],
            ['department' =>  'La Paz'],
            ['department' =>  'Cabañas'],
            ['department' =>  'San Vicente'],
            ['department' =>  'Usulután'],
            ['department' =>  'Morazán'],
            ['department' =>  'San Miguel'],
            ['department' =>  'La Unión'],
        ];
        foreach ($departamentos as $dep) {
            Department::create($dep);
        }
    }
}
