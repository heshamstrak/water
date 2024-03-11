<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function checkout() {
        $totalPrice = Cart::where('user_id', auth()->user()->id)->sum(\DB::raw('price * quantity'));
        return view('frontend.checkout.checkout', compact('totalPrice'));
    }

    public function order(Request $request) {
        if(auth()->check()) {
            $carts = Cart::where('user_id', auth()->user()->id)->get();
            foreach($carts as $cart) {
                Order::create([
                    'user_id'=>auth()->user()->id, 
                    'product_id'=>$cart->product_id, 
                    'quantity'=>$cart->quantity,
                    'price'=>$cart->price,
                    'weight_id'=>$cart->weight_id != null ? $cart->weight_id : null,
                    'ingredient_id'=>$cart->ingredient_id != null ? $cart->ingredient_id : null,
                    'notes'=>$request->notes != null ? $request->notes : null,
                ]);
            }
            return redirect()->route('shop')->with('success', 'Order Products is successfily');
        } else {
            return redirect()->route('login.user');
        }
    }
}
