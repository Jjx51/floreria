<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StatusOrderSeeder::class);
        $this->call(StatusArraySeeder::class);
        $this->call(CategoryProductSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
