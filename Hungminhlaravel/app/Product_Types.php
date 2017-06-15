<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Types extends Model
{
    //
	protected $table ="type_products";
	
	public function product()
		{
			return $this->hasMany('App\Product','id_type','id'); //tro toi 1 loai san pham co nhieu loai
		}
}
