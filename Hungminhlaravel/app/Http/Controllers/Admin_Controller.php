<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\User;
class Admin_Controller extends Controller
{
   public function ViewContent_Admin()
   {
   	$MostViewProduct=Product::MostViewProduct();
      $Total_view= $MostViewProduct[1];
      $MostViewProduct=$MostViewProduct[0];
      return view('Admin.Content_Admin',compact('MostViewProduct','Total_view'));
   }
      
     //Hiện tất cả sản phẩm
   public function Select_Product(){
      $product=Product::Show_Product_All()->paginate(5);
      $type=0;
      return view('Admin.Product_Admin',compact('product','type'));
   }
   public function FindProductByType(Request $req){
         $product=Product::Find_Product_By_Type($req->id)->paginate(5);
         $type=1;
      return view('Admin.Product_Admin',compact('product','type'));
   }
   public function Edit_Product( $id, $name, $desc, $unit_price, $pro_price, $image, $unit){
      $pro=Product::Edit_Product($id,$name, $desc, $unit_price, $pro_price, $image, $unit);
      return $pro;
   }
   public function Insert_Product($name, $type, $desc, $unit_price, $pro_price, $image, $unit){
      $getId=Product::Insert_Product($name, $type, $desc, $unit_price, $pro_price, $image, $unit);
       // return view('Admin.User_Admin','getId');
      return $getId;
   } 
   public function Delete_Product( $id){
      $pro=Product::Delete_Product($id);
   }
   

   
   public function Select_User(){
   	$user=User::User_All()->paginate(8);
  
   	return view('Admin.User_Admin',compact('user'));
   }
   public function Edit_User( $id, $group){
      $user=User::Edit_User($id,$group);
   }
   public function Insert_User( $name, $email, $group){
      $getId=User::Insert_User($name,$email,$group);
       // return view('Admin.User_Admin','getId');
      return $getId;
   } 
   public function Delete_User( $id){
      $user=User::Delete_User($id);
   }

}