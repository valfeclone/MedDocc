<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;

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

	public function indexDoctor(){
		$all_doc = DB::table('doctors')
								->get();
		return view('admin.doctors',[
			'all_doc' => $all_doc,
		]);
	}

	public function indexDoctorUnverif(){
		$unverified_doc = DB::table('doctors')
                                ->select(DB::raw('id, name, path_pract_permit, status_pract_permit, email'))
                                ->where('status_pract_permit', '=', false)
                                ->get();
		return view('admin.doctors',[
			'all_doc' => $unverified_doc,
		]);
	}

	public function indexDoctorVerif(){
		$verified_doc = DB::table('doctors')
                                ->select(DB::raw('id, name, path_pract_permit, status_pract_permit, email'))
                                ->where('status_pract_permit', '=', true)
								->get();
		return view('admin.doctors',[
			'all_doc' => $verified_doc,
		]);
	}

	public function alterDocPermi($id){
        $doctor = Doctor::find($id);
        if ($doctor->path_pract_permit) {
            if ($doctor->status_pract_permit == false) {
                $doctor->status_pract_permit = true;
                $doctor->save();
                return redirect()->back()->with('success', 'Izin dokter berhasil diubah');
			}
			else{
                $doctor->status_pract_permit = false;
                $doctor->save();
                return redirect()->back()->with('success', 'Izin dokter berhasil diubah');
			}
		} 
		else {
            return redirect()->back()->with('error', 'Izin dokter gagal diubah');
        }
	}

    public function verify_pembayaran($id)
    {
        $user = User::find($id);
        if ($user->path_bukti_bayar) {
            if ($user) {
                $user->validasi_pembayaran = true;
                $user->save();
                echo("tim diverifikasi");
            }
        } else {
            return redirect()->back()->with('error', 'Bukti pembayaran belum tersedia');
        }
        // return view('pages.user.user-data', [
        //     'user' => User::class
        // ]);
        return redirect()->back()->with('success', 'Verifikasi sukses');
        ;
    }
}