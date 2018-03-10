<?php

use Illuminate\Database\Seeder;
use App\My_Array;

class ArreglosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        My_Array::create([
            'Codigo'=>'FA-01',
            'Nombre' => 'Romance 1',
            'imagen' => 'img/arreglos/FA-01.jpg',
        ]);

        My_Array::create([
            'Codigo'=>'FA-02',
            'Nombre' => 'Romance 2',
            'imagen' => 'img/arreglos/FA-02.jpg',
        ]);

        My_Array::create([
            'Codigo'=>'FA-03',
            'Nombre' => 'Romance 3',
            'imagen' => 'img/arreglos/FA-03.jpg',
        ]);

        My_Array::create([
            'Codigo'=>'FA-04',
            'Nombre' => 'Romance 4',
            'imagen' => 'img/arreglos/FA-04.jpg',
        ]);
    }
}
