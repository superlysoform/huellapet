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
        User::create([
        	'nombre' =>'Mario',
            'apellido' =>'Perez',
            'email' =>'marioperez@gmail.com',
            'imagen' =>'https://lorempixel.com/250/250/?22014',
            'nacionalidad' =>'1',
            'password' =>bcrypt('123456'),
            'admin' => true

        ]);
    }
}
