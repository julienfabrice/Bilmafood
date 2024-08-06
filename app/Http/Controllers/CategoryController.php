<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
class CategoryController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('category', compact('categories'));
    }

    public function getProductsByCategory($id)
    {
        $products = Product::where('category_id', $id)->get();
        return response()->json($products);
    }
}
