<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Report;
use App\Models\Doctor;

class ReportController extends Controller
{
    public function makeReport (Request $request)
	{
        // ddd($request);
		$validatedReport = request()->validate([
			'name' => 'required',
			'lokasi' => ['required'],
			'keluhan' => ['required'],
        ]);
        
		$user = auth()->user();
		$newReport = Report::create([
			'name' => $validatedReport['name'],
			'lokasi' => $validatedReport['lokasi'],
            'keluhan' => $validatedReport['keluhan'],
            'user_id' => $user['id'],
        ]);
        $fakedoc = Doctor::find(1);
		$newInvoice = Invoice::create([
			'status' => 'on_hold',
			'user_id' => $newReport['user_id'],
			'doctor_id' => $fakedoc['id'],
			'report_id' => $newReport['id'],
		]);
		
		return redirect()->intended('waiting');
	}
}
