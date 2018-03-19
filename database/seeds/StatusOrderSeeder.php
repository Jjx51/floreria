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
            'status_order' => 'En espera'
        ]);

        StatusOrder::create([
            'status_order' => 'En construcción'
        ]);

        StatusOrder::create([
            'status_order' => 'Listo para entrega'
        ]);

        StatusOrder::create([
            'status_order' => 'En camino'
        ]);

        StatusOrder::create([
            'status_order' => 'Entregado'
        ]);

        StatusOrder::create([
            'status_order' => 'Entrega fallida'
        ]);
    }
}
