<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    protected function register(Request $request)
    {
        // ddd($request);
        $validatedDoc = request()->validate([
        'name' => 'required',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:doctors'],
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
        // ddd($request);
        $credentials = $request->only('email', 'password');
		
		if (Auth::guard('doctors')->attempt($credentials)) {
            return redirect()->intended('/doctor/invoice');
            // return('login dokter sukses');
		}
		else {
			return back()->withErrors(['field_name' => ['LOGIN GAGAL']]);
		}
    }
    
    public function indexInvoice(){
        $all_invoice = DB::table('invoices')
								->get();
		return view('doctor.invoice',[
			'invoice' => $all_invoice,
		]);
    }
    
    public function indexInvoiceNotTaken(){
        $notTaken = DB::table('invoices')
                                ->where('doctor_id', '=', 1)
                                ->where('status', '=', 'on_hold')
								->get();
		return view('doctor.invoice',[
			'invoice' => $notTaken,
		]);
    }

    public function indexInvoiceAccepted(){
        $taken = DB::table('invoices')
                            ->where('status', '=', 'accepted')
								->get();
		return view('doctor.invoice',[
			'invoice' => $taken,
		]);
    }
    
    public function indexInvoiceCompleted(){
        $done = DB::table('invoices')
                                ->where('status', '=', 'done')
								->get();
		return view('doctor.invoice',[
			'invoice' => $done,
		]);
	}
}
