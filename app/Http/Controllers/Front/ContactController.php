<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function index() {
        return view('front.pages.contact');
    
}
public function store(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255|min:3',
        'email' => "required|email",
        'subject' => "required|string|min:3",
        'message' => "required|string",
    ]);
    $contact = new Messages();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->content = $request->message;
    $contact->status = 0;
    $contact->save();
    return response()->json(["success"=>"Message Send Successfully","send"=>true]);

}

}
