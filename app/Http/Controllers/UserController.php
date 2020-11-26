<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index_view ()
    {
        return view('pages.user.user-data', [
            'user' => User::class
        ]);
    }

	public function register (Request $request)
	{
		$validatedUser = request()->validate([
			'name' => 'required',
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:8'],
			'telephone' => ['required'],
			'address' => ['required', 'string'],
		]);
		
		$newUser = User::create([
			'name' => $validatedUser['name'],
			'email' => $validatedUser['email'],
			'password' => Hash::make($validatedUser['password']),
			'telephone' => $validatedUser['telephone'],
			'address' => $validatedUser['address'],
		]);
		
		return ($newUser);
	}

	public function login (Request $request)
	{
		$credentials = $request->only('email', 'password');
		
		if (Auth::guard('user')->attempt($credentials)) {
            return('login user sukses');
		}
		else {
			return back()->withErrors(['field_name' => ['LOGIN GAGAL']]);
		}
	}
}
