<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class TypeProduct extends Model
{
    protected $table ='type_products';
    public function products(){
    	return $this->hasMany('App\Product','id_type','id');
    }
    public static function Show_Type_product(){
		$Type_product=DB::table('type_products')->select('id','name');
		return $Type_product;
	}
}
