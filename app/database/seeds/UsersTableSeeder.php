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
			'name' => 'Kodos',
			'email' => 'kodos@laika.com',
			'planeta' => 'Rigel VII',
			'foto' => 'kodos.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>1
		]);
		User::create([
			'name' => 'Alf',
			'email' => 'alf@laika.com',
			'planeta' => 'Melmac',
			'foto' => 'alf.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
		User::create([
			'name' => 'E.T.',
			'email' => 'et@laika.com',
			'planeta' => 'Home',
			'foto' => 'et.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
		User::create([
			'name' => 'Yoda',
			'email' => 'yoda@laika.com',
			'planeta' => 'Dagobah',
			'foto' => 'yoda.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
		User::create([
			'name' => 'Kal-El',
			'email' => 'superman@laika.com',
			'planeta' => 'Krypton',
			'foto' => 'superman.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);
		User::create([
			'name' => 'Spock',
			'email' => 'spock@laika.com',
			'planeta' => 'Vulcano',
			'foto' => 'spock.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);	
		User::create([
			'name' => 'Thomas Jerome Newton',
			'email' => 'tjn@laika.com',
			'planeta' => 'Anthea',
			'foto' => 'tjn.jpg',
			'password' => \Hash::make('123'),
			'id_rol'=>2
		]);	

    }
}