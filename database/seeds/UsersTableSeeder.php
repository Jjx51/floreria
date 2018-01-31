<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
        	'name'=>'Jorge Nuñez',
            'username'=>'jjx51',
        	'rol'=>'user',
        	'email'=>'jjx51@outlook.com',
        	'password'=>bcrypt('admin')
        ]);
        factory(App\User::class)->create([
            'name'=>'Miguel Jimenez',
            'username'=>'kroer17',
            'rol'=>'admin',
            'email'=>'kroer17@gmail.com',
            'password'=>bcrypt('admin')
        ]);

        factory(App\User::class,5)->create();

    }
}
