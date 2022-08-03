<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function index() {
        $categories = Category::with('products')->get()->map(function($category) {
            $category->setRelation('products', $category->products->take(3));
            return $category;
        });
        // $categories = array_sort($categories);
        $cartItems = \Cart::getContent();
        // return response()->json($categories);
        return view('front.pages.menu',compact('categories') );
    }
}
