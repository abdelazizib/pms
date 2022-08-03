<?php

namespace App\Http\Controllers\front;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.pages.user.profile.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('front.pages.user.profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $userId = Auth::user()->id;
        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => "required|email|unique:users,email,$userId",
            'user_phone' => "required|unique:users,phone,$userId"
        ]);
        
        $userprofile = User::findOrFail($userId);
        if($userprofile){
            $userprofile->name = $request->name;
            $userprofile->email = $request->email;
            $userprofile->phone = $request->user_phone;
            $userprofile->save();
        }
        return Redirect::back()->with(['success' => ['Data Was Changed Successfully']]);
    }
}
