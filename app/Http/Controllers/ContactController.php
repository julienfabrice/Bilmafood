<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ContactController extends Controller
{
    public function index(){
        $products = Product::all();
        
        return view('contact', compact('products'));
    }
}
