<?php

use Illuminate\Database\Seeder;
use App\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryProduct::create([
            'name'=>'Flores'
        ]);
        CategoryProduct::create([
            'name'=>'Tallos'
        ]);
        CategoryProduct::create([
            'name'=>'Rollos'
        ]);
        CategoryProduct::create([
            'name'=>'Bases'
        ]);
        CategoryProduct::create([
            'name'=>'Papel'
        ]);
        CategoryProduct::create([
            'name'=>'Listones'
        ]);
        CategoryProduct::create([
            'name'=>'Extras'
        ]);
    }
}
