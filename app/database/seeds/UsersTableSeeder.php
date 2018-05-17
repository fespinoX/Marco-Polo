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
			'name' => 'kodos',
			'email' => 'kodos@kodos.com',
			'planeta' => 'nidea',
			'password' => \Hash::make('123'),
			'id_rol'=>1
		]);
		User::create([
			'name' => 'Alf',
			'email' => 'Alf@alf.com',
			'planeta' => 'Melmac',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
		User::create([
			'name' => 'ET',
			'email' => 'et@et.com',
			'planeta' => 'Home',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);


    }
}