<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display front page of site.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front/index');
    }

    /**
     * Display shop page of site.
     *
     * @return \Illuminate\Http\Response
     */
    public function shopPage()
    {
        return view('front/shop');
    }

    /**
     * Display Product detail page of site.
     *
     * @return \Illuminate\Http\Response
     */
    public function productDetailPage()
    {
        return view('front/product-details');
    }

    /**
     * Display Cart of site.
     *
     * @return \Illuminate\Http\Response
     */
    public function cartPage()
    {
        return view('front/cart');
    }
}
