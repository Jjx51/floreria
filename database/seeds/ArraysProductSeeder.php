<?php

use Illuminate\Database\Seeder;
use App\ArrayProduct;

class ArraysProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArrayProduct::create([
            'array_id' => 1,
            'product_id' => 2,
            'Cantidad' =>12,
        ]);

        ArrayProduct::create([
            'array_id' => 1,
            'product_id'=> 1,
            'Cantidad' => 12,
        ]);

        ArrayProduct::create([
            'array_id' => 2,
            'product_id'=> 2,
            'Cantidad' => 2,
        ]);

        ArrayProduct::create([
            'array_id' => 2,
            'product_id'=> 20,
            'Cantidad' => 1,
        ]);

        ArrayProduct::create([
            'array_id' => 3,
            'product_id'=> 100,
            'Cantidad' => 1,
        ]);

        ArrayProduct::create([
            'array_id' => 3,
            'product_id'=> 2,
            'Cantidad' => 12,
        ]);
        ArrayProduct::create([
            'array_id' => 4,
            'product_id'=> 100,
            'Cantidad' => 1,
        ]);
    }
}
