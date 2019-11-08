<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SalesReportController extends Controller
{

	public function sales(){
		$data = DB::table('post')->get()->all();
		
		return view('cd-admin.reports.salesreport',compact('data'));
	}


	public function report(){
		Request()->validate([
			'from_date' => 'required',
			'to_date' => 'required',
		]);
		$from = Request()->from_date;
		$to = Request()->to_date;
		$data= DB::table('post')->whereBetween('date',array($from, $to))->get();
		return view('cd-admin.reports.salesreport',compact('data'));
		
	}
}
