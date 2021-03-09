<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;


class RegisterController extends Controller
{

	public function __construct() {
        $this->middleware('guest');  // !
    }

    //
    public function register(){
    	return view('auth.register');
    }

    public function create(Request $request){

    	// TODO:  валидировать данные
     	$request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

    	// TODO:  добавить пользователя
    	User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

    	return redirect()
            ->route('auth.login')
            ->with('success', 'Вы успешно зарегистрировались');
    }
}
