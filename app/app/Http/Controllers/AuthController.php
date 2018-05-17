<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{


    public function showLogin()
    {
    	return view('auth.login');
    }

    public function doLogin(Request $request)
    {
    	$request->validate([
    		'email' => 'required|max:255',
    		'password' => 'required|min:3',
		]);


    	$input = $request->input();




		if(!Auth::attempt(['password' => $input['password'], 'email' => $input['email']])) {
			// Error
			return redirect()->route('login')
				->withInput()
				->with('status', 'OH NO! Algo salió mal ¯\_(ツ)_/¯');
		}


		return redirect()->intended('/');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }
}
