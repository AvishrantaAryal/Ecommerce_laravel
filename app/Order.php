<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use Carbon\Carbon;

class Order extends Model
{
   protected $guarded=[];


   public function remove($id)
  {
      DB::table('orders')->where('id',$id)->delete();
      Session::flash('deletesuccess');
  }

}
