<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session;

class AdminController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * show admin dashboard
     * @return void [description]
     */
    public function index()
    {
        // checking changes
    	return view('admin/index');
    }
}
