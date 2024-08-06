<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Categorie;

class AppController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        $products = Product::all();
        return view('index', compact('products', 'categories'));
    }

    public function getProductsByCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        return response()->json($products);
    }
}
