<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class ChefsController extends Controller
{
    function index() {
        $chefs = Employee::limit(4)->get();
        // return response()->json($chefs);
        return view('front.pages.chefs',compact('chefs'));
    }
}
