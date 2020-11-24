<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function register(Request $request)
    {
        // ddd($request);
        $validatedDoc = request()->validate([
        'name' => 'required',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8'],
        'bukti-praktik' => 'required',
        ]);
        
        $newDoc = Doctor::create([
            'name' => $validatedDoc['name'],
            'email' => $validatedDoc['email'],
            'password' => Hash::make($validatedDoc['password']),
        ]);
                        
        // define variable buat simpan foto
        $file = $request->file('bukti-praktik');
        $tujuan_upload = storage_path('app/public/bukti-praktik');
        
        // menyimpan file foto ktm yang diupload ke variabel $file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        $newDoc->path_pract_permit = $file->getClientOriginalName();
        $newDoc->save();
                    
        echo($newDoc);
    }

    public function login (Request $request)
	{
        ddd($request);
        $credentials = $request->only('email', 'password');
		
		if (Auth::guard('doctor')->attempt($credentials)) {
            // return redirect()->intended('/dashboard');
            return('login dokter sukses');
		}
		else {
			return back()->withErrors(['field_name' => ['LOGIN GAGAL']]);
		}
	}
}
