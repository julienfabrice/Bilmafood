<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('blog');
    }
}
