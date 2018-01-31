<?php

use Illuminate\Database\Seeder;
use App\StatusOrder;

class StatusOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusOrder::create([
            'status' => 'En construcción'
        ]);

        StatusOrder::create([
            'status' => 'Listo para entrega'
        ]);

        StatusOrder::create([
            'status' => 'En camino'
        ]);

        StatusOrder::create([
            'status' => 'Entregado'
        ]);

        StatusOrder::create([
            'status' => 'Entrega fallida'
        ]);
    }
}
