<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //

	public function __construct(){
		$this->middleware('guest', ['except' => 'logout']);
	}

    public function login(){
    	return view('auth.login');
    }

    public function autentificate(Request $request){   

    	$request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);



    	$credentials = $request->only('email', 'password');

    
        if(Auth::attempt($credentials)){
        	return redirect()
                ->route('user.index')
                ->with('success', 'Вы вошли в личный кабинет');
        };

 		return redirect()
            ->route('auth.login')
            ->withErrors('Неверный логин или пароль');
    }

    public function logout(){
    	Auth::logout();
        return redirect()
            ->route('auth.login')
            ->with('success', 'Вы вышли из личного кабинета');
    	
    }

}
