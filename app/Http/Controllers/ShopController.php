<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ShopController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('frontend.shop.index', compact('products'));
    }

    public function single(Product $product) {
        return view('frontend.shop.single', compact('product'));
    }
}
