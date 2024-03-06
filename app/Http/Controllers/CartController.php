<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index() {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('frontend.cart.index', compact('carts'));
    }

    public function addToCart(Request $request) {
        $cart = Cart::where('product_id',$request->product_id)->where('user_id',auth()->user()->id)->first();
        if($cart == null) {
            Cart::create(['product_id'=>$request->product_id,'user_id'=>auth()->user()->id,'quantity'=>$request->quantity,'price'=>$request->price]);
            return redirect()->back()->with('success', 'add to cart successfily');
        } else {
            return redirect()->back()->with('success', 'this product is exist in cart');
        }
    }

    public function update(Request $request) {
        $cart = Cart::find($request->cart_id);
        $cart->update(['quantity' => $request->quantity]);
        return redirect()->back()->with('success', 'update cart successfily');

    }

    public function remove($id) {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('success', 'remove from cart successfily');
    }
}
