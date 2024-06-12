<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products');
    }
    public function productDetails(){
        // $product    =   Product::where('slug',$slug)->first();
        return view('details');
    }
}
