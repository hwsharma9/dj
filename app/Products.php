<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImages;

class Products extends Model
{
    public $fillable = ['product_name','product_price','product_desc','category'];

    public function products()
    {
    	return $this->hasMany('App\Category');
    }

    public function images()
    {
    	return $this->hasMany(ProductImages::class,'product_id');
    }
}
