<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AboutController extends Controller
{
    public function about() {
        $products = Product::latest()->take(3)->get();
        return view('frontend.about.about', compact('products'));
    }

}
