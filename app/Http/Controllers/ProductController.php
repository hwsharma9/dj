<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class ProductController extends Controller
{
	//https://github.com/henrymbuguak/Laravel-5.4-Shopping-Cart
    public function addProductPage()
    {
    	$categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
    	return view('admin.add-product',compact('categories','allCategories'));
    }

    public function addProductAction()
    {
    	echo "<pre>";
    	print_r ($_POST);
    	echo "</pre>";
    }
}
