<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
class Admin_Controller extends Controller
{
   public function ViewContent_Admin()
   {
   	return view('Admin.Content_Admin');
   }
      
   public function Select_Product(){
   	$product=Product::Product_All()->paginate(1);
  
   	return view('Admin.Product_Admin',compact('product'));
   }
}
