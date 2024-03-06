<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::paginate(15);
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function blog($slug, Blog $blog) {
        return view('frontend.blogs.blog', compact('blog'));
    }
}
