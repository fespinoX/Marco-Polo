<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;

class IndexController extends Controller
{
    public function home() {
    	return view('index');
    }
}