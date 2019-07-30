<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::paginate(10);
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        return view('admin/products-list',compact('categories','allCategories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        return view('admin/add-product',compact('categories','allCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'product_name' => 'required',
            'product_price' => 'required',
            'product_desc' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id = Products::max('id');
        $image = $request->file('image_path');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $p = '/admin/product_images/'.$id;
        $path = public_path($p);
        if (!is_dir($path)) {
            mkdir($path);
        }
        $destinationPath = $path."/";
        $product = new Products;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_desc = $request->product_desc;
        // $product->category = "1,2";
        $product->image_path = $p."/".$input['imagename'];
        $product->save();
        return redirect('/admin/products')->with('success','Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id')->all();
        return view('admin/edit-product',compact('product','categories','allCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $this->validate($request,[
            'product_name' => 'required',
            'product_price' => 'required',
            'product_desc' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image_path');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $p = '/admin/product_images/'.$id;
        $path = public_path($p);
        if (!is_dir($path)) {
            mkdir($path);
        }
        $destinationPath = $path."/";

        $image->move($destinationPath, $input['imagename']);
        $product = Products::find($id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_desc = $request->product_desc;
        // $product->category = "1,2";
        $product->image_path = $p."/".$input['imagename'];
        $product->save();
        return redirect('/admin/products')->with('success','Product Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect('/admin/products')->with('success','Product Deleted Successfully!');
    }
}
