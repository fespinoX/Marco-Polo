<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		Roles::create([
			'rol' => 'Presidente'		
		]);
		Roles::create([
			'rol' => 'Comunacho'		
		]);
    }
}
