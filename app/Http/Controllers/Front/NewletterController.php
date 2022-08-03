<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewletterController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);
        if(!$validate){
            return response()->json(['error'=>'true','msg'=>'This Email Added Before']);
        }
        $newNewsLetter = new Newsletter();
        $newNewsLetter->email = $request->email;
    }
}
