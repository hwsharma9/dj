<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
class Category extends Model
{
    public $fillable = ['title','parent_id'];

    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany('App\Category','parent_id') ;
    }
    public function category() {
        return $this->hasMany(ProductCategory::class,'product_id')->with('products');
    }
}


// select `products`.*, `category`.`product_category_id` as `pivot_product_category_id`, `category`.`products_id` as `pivot_products_id` 
// from `products` 
// inner join `category` on `products`.`id` = `category`.`products_id` 
// where `category`.`product_category_id` in (2, 4)