<?php

namespace Database\Seeders;

use App\Models\Proveedores;
use Illuminate\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    public function run()
    {
        $proveedores = [
            ['codigo' => 'p01', 'nombre' => 'Nintendo', 'direccion' => 'Japon', 'telefono' => '22223333'],
            ['codigo' => 'p02', 'nombre' => 'Sony', 'direccion' => 'Estados Unidos', 'telefono' => '22224444']
        ];
        foreach ($proveedores as $key => $value) {
            Proveedores::create( $value );
        }
    }
}
