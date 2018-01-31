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
            'status'=>'Arreglo Pendiente'
        ]);
        StatusArray::create([
            'status'=>'Arreglo en Contruccion'
        ]);
        StatusArray::create([
            'status'=>'Arreglo Terminado'
        ]);
    }
}
