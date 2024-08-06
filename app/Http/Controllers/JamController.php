<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class JamController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('jam', compact('products'));
    }
}
