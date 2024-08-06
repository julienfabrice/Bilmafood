<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrders()
    {
        $orders = Order::where('user_id', Auth::id())
            ->with('user', 'orderDetails')
            ->get();

        return view('ordersHistory', compact('orders'));
    }

    public function createOrder(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour passer une commande.');
        }

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Votre panier est vide.');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $deliveryPrice = $request->input('delivery_price', 0);
        $total += $deliveryPrice;

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'delivery_price' => $deliveryPrice,
            'delivery_method' => $request->input('delivery_method'),
            'city' => $request->input('city'),
            'neighborhood' => $request->input('neighborhood'),
            'status' => 'pending',
        ]);

        foreach ($cart as $id => $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('app.index')->with('success', 'Commande passée avec succès.');
    }

    public function orderSuccess($orderId)
    {
        $order = Order::find($orderId);
        return view('order.success', compact('order'));
    }
}
