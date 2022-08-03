<?php

namespace App\Http\Controllers\front;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    function index() {
        $categories = Category::with('products')->get()->map(function($category) {
            $category->setRelation('products', $category->products->take(3));
            return $category;
        });
        $slider = Slider::all();
        // return response()->json($categories);
        return view('front.pages.index',compact('categories','slider') );
    }
}
