<?php

use App\User;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\MunicipalitySeeder;
use Database\Seeders\ProductosSeeder;
use Database\Seeders\ProveedoresSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(ProveedoresSeeder::class);
        $this->call(ProductosSeeder::class);
    }
}
