<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                "nombre" => "Nintendo Switch", 
                "descripcion" => "Consola", 
                "precioUnitario" => 400, 
                "id_proveedor" => 1
            ],
            [
                "nombre" => "PS5", 
                "descripcion" => "Consola de Sony", 
                "precioUnitario" => 500, 
                "id_proveedor" => 2
            ],
        ];
        foreach ($productos as $key => $value) {
            Productos::create($value);
        }
    }
}
