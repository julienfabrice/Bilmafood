<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;


class AdminProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function createproduct()
    {
        $categories = Categorie::all();
        return view('admin.createproduct', compact('categories'));
    }

    public function storeproduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $product = new Product($request->all());

        if ($request->hasFile('main_image')) {
            $product->main_image = $request->file('main_image')->store('images', 'public');
        }

        if ($request->hasFile('other_images')) {
            $other_images = [];
            foreach ($request->file('other_images') as $image) {
                $other_images[] = $image->store('images', 'public');
            }
            $product->other_images = $other_images;
        }

        $product->save();

        return redirect()->route('admin.product')->with('success', 'Product created successfully.');
    }

    public function editproduct(Product $product)
    {
        $categories = Categorie::all();
        return view('admin.editproduct', compact('product', 'categories'));
    }

    public function updateproduct(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $product->fill($request->all());

        if ($request->hasFile('main_image')) {
            if ($product->main_image) {
                Storage::disk('public')->delete($product->main_image);
            }
            $product->main_image = $request->file('main_image')->store('images', 'public');
        }

        if ($request->hasFile('other_images')) {
            if ($product->other_images) {
                foreach ($product->other_images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
            $other_images = [];
            foreach ($request->file('other_images') as $image) {
                $other_images[] = $image->store('images', 'public');
            }
            $product->other_images = $other_images;
        }

        $product->save();

        return redirect()->route('admin.product')->with('success', 'Product updated successfully.');
    }

    public function destroyproduct(Product $product)
    {
        if ($product->main_image) {
            Storage::disk('public')->delete($product->main_image);
        }

        if ($product->other_images) {
            foreach ($product->other_images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $product->delete();

        return redirect()->route('admin.product')->with('success', 'Product deleted successfully.');
    }
}
