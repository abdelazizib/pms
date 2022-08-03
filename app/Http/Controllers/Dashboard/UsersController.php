<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Http\Traits\Upload;
use Illuminate\Http\Request;
use App\Http\Traits\DeleteFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Dashboard\Users\UserStoreRequest;
use App\Http\Requests\Dashboard\Users\UserUpdateRequest;

class UsersController extends Controller
{
    use Upload;
    use DeleteFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.pages.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $request_data = $request->all();
        $request_data['password'] = Hash::make($request_data['password']);
        if($request->hasFile('image')){
            $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', User::Users_PATH );
        }
        User::create($request_data);
        return back()->with(['SuccessToast'=>["User Created"]]);
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.pages.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $request_data = $request->all();
        $user->name = $request_data['name'];
        $user->phone = $request_data['phone'];
        $user->email = $request_data['email'];
        $user->Is_Admin = $request_data['Is_Admin'];
        if($request->hasFile('image')){
            if(!is_null($user->image)){
                $this->removeImage(User::Users_PATH.$user->image);
            }
            $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', User::Users_PATH );
            $user->image = $request_data['image'];
        }
        $user->save();
        return back()->with(['SuccessToast'=>['Success Update Category']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
