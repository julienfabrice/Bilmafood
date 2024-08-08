<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;


class CartController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('cart', compact('product'));
    }
    
    public function addToCart($id)
{
    // Debugging line
    Log::info('Adding to cart, product ID: ' . $id);

    $product = Product::find($id);

    if (!$product) {
        // Debugging line
        Log::error('Product not found, ID: ' . $id);
        return response()->json(['error' => 'Product not found'], 404);
    }

    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'main_image' => $product->main_image
        ];
    }

    session()->put('cart', $cart);

    return response()->json([
        'success' => 'Produit ajouté au panier avec succès',
        'cart' => $cart
    ]);
}


    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return response()->json([
            'success' => 'Produit retiré du panier avec succès',
            'cart' => $cart
        ]);
    }

    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return response()->json([
            'success' => 'Quantité mise à jour avec succès',
            'cart' => $cart
        ]);
    }

}
