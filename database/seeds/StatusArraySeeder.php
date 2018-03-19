<?php

use Illuminate\Database\Seeder;
use App\StatusArray;

class StatusArraySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StatusArray::create([
            'status_array'=>'Arreglo Pendiente'
        ]);
        StatusArray::create([
            'status_array'=>'Arreglo en Contruccion'
        ]);
        StatusArray::create([
            'status_array'=>'Arreglo Terminado'
        ]);
    }
}
