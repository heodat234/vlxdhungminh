<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;

class Home_Controller extends Controller
{
   public function getIndex()
   {
   	return view('page.trangchu');
   }
   public function info(){
   	return view('page.gioithieu');
   }
   public function news(){
   	return view('page.tintuc');
   }
     public function contact(){
   	return view('page.lienhex');
   }
}
