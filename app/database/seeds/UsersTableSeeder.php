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
        //usuarios iniciales
		User::create([
			'user' => 'kodos',
			'nombre' => 'Kodos',
			'planeta' => 'nidea',
			'password' => \Hash::make('123'),
			'id_rol'=>1
		]);
		User::create([
			'user' => 'alf',
			'nombre' => 'Alf',
			'planeta' => 'Melmac',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
		User::create([
			'user' => 'et',
			'nombre' => 'ET',
			'planeta' => 'Home',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
    }
}