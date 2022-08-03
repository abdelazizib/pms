<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    function index() {
        return view('front.pages.user.profile.changepassword');
    }
}
