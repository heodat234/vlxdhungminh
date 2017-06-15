<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;

class Product_Controller extends Controller
{
   public function ShowDetail()
   {
   	return view('page.chitiet');
   }
}
