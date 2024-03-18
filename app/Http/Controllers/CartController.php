<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;

class CartController extends Controller
{
    public function index() {
        if(auth()->check()) {
            $totalPrice = Cart::where('user_id', auth()->user()->id)->sum(\DB::raw('price * quantity'));
            $carts = Cart::where('user_id', auth()->user()->id)->get();
            return view('frontend.cart.index', compact('carts', 'totalPrice'));
        } else {
            return redirect()->route('login.user');
        }
       
    }

    public function addToCart(Request $request) {
        if(auth()->check()) {
            $cart = Cart::where('product_id',$request->product_id)->where('user_id',auth()->user()->id)->first();
            if($cart == null) {
                Cart::create([
                    'product_id'    => $request->product_id,
                    'weight_id'     => $request->weight_id != null ? $request->weight_id : null,
                    'user_id'       => auth()->user()->id,
                    'quantity'      => $request->quantity,
                    'price'         => $request->price,
                ]);
                return redirect()->back()->with('success', 'add to cart successfily');
            } else {
                return redirect()->back()->with('success', 'this product is exist in cart');
            }
        } else {
            return redirect()->route('login.user');
        }
    }

    public function update(Request $request) {
        if(auth()->check()) {
            $cart = Cart::find($request->cart_id);
            $cart->update(['quantity' => $request->quantity]);
            return redirect()->back()->with('success', 'update cart successfily');
        } else {
            return redirect()->route('login.user');
        }

    }

    public function remove($id) {
        if(auth()->check()) {
            $cart = Cart::find($id);
            $cart->delete();
            return redirect()->back()->with('success', 'remove from cart successfily');
        } else {
            return redirect()->route('login.user');
        }
    }
}
