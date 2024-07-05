<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAddProductController extends Controller
{
    public function index()
    {
        return view('admin.addproduct'); 
    }
}
