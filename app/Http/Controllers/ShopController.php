<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('frontend.shop.index', compact('products'));
    }

    public function single(Product $product) {
        if(auth()->check()) {
            return view('frontend.shop.single', compact('product'));
        } else {
            Session::put('previous_url', url()->full());
            return view('frontend.shop.single', compact('product'));
        }
        
    }
}
