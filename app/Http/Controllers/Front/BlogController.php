<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        $blogs = Blog::paginate(5);
        // dd($blogs);
        return view('front.pages.blog.index', compact('blogs'));
    }
}
