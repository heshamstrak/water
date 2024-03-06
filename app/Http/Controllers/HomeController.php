<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Product;
class HomeController extends Controller
{

    public function index()
    {
        $blogs = Blog::latest()->take(4)->get();
        $products = Product::latest()->take(3)->get();
        return view('frontend.home', compact('blogs', 'products'));
    }
}
