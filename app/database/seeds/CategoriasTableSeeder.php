<?php

use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		Categorias::create([
			'categoria' => 'Economía'		
		]);
		Categorias::create([
			'categoria' => 'Política'		
		]);
		Categorias::create([
			'categoria' => 'Invasiones'		
		]);
		Categorias::create([
			'categoria' => 'Humanos'		
		]);
		Categorias::create([
			'categoria' => 'Otros'		
		]);
    }
}
