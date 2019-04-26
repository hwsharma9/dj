<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable = ['product_name','product_price','product_desc','category'];
}
