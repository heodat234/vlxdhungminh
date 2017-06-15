<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Product extends Model
{
    protected $table='products';
    public  function type_products(){
    	return $this->belongsTo('App\TypeProduct','id_type','id');
    }
    public function bill(){
    	return $this->hasManyThrough('App\Bill','App\BillDetail','id_product','id');
    }


    public static function Product_All(){
    		$product=DB::table('products')
    					->join('type_products','products.id_type','=','type_products.id')
   						->select('type_products.name as type_name','products.id','products.name','products.unit_price',	
   								 'products.promotion_price','products.image','products.unit','products.created_at',
   								 'products.updated_at','products.description');
    			

    	return $product;
  }

}
