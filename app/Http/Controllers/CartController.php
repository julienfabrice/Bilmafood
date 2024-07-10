<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('cart', compact('product'));
    }
    //     }

    //     session()->put('cart', $cart);

    //     $cartTotal = array_sum(array_map(function ($item) {
    //         return $item['quantity'];
    //     }, $cart));

    //     return response()->json(['cartTotal' => $cartTotal, 'productName' => $product->name]);
    // }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
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
    


    public function update(Request $request, $id)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return response()->json($cart);
    }
}
