<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
class OrderlistController extends Controller
{
   public function view(){
   	$order=DB::table('orders')->get()->all();
   	
   	$e=Order::all();
   	return view('cd-admin.orderlist.orderlist',compact('order','e'));
   }

   public function details($id){
   	$order=DB::table('orders')->where('id',$id)->get()->all();
   
   	// dd($order);
   	return view('cd-admin.orderlist.orderdetails',compact('order'));
   }

   public function statusupdate(){
   	dd("here");
   }

   
    public function deleteorder($id,Order $p){
    $p->remove($id);
    return redirect('/orderlist');
    }

   
}
