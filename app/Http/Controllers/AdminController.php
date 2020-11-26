<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function login (Request $request)
	{
		$credentials = $request->only('email', 'password');
		
		if (Auth::guard('admin')->attempt($credentials)) {
			// return redirect()->intended('dashboard');
			return('login admin sukses');
		}
		else {
			return back()->withErrors(['field_name' => ['LOGIN GAGAL']]);
		}
	}
}