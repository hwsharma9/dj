<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;
class ProductCategory extends Model
{
	protected $table = "category_products";
    public $fillable = ['product_id','category_id'];

    public function products()
    {
    	return $this->hasOne(Products::class,'id','product_id');
    }

    public function productImages()
    {
    	return $this->hasOne(Products::class,'id','product_id')->select('id')->with('images');
    }
}
