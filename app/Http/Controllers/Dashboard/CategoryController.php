<?php

namespace App\Http\Controllers\Dashboard;

use Brian2694\Toastr\Facades\Toastr;


use App\Models\Category;
use App\Http\Traits\Upload;
use Illuminate\Http\Request;

use App\Http\Traits\DeleteFile;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Requests\Dashboard\Category\CategoryStoreRequest;
use App\Http\Requests\Dashboard\Category\CategoryUpdateRequest;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('dashboard.pages.categories.index',compact('categories'));
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $request_data = $request->all();
        $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', Category::Category_PATH );
        Category::create($request_data);
        // toastr()->success('Success Added Category');
        return back();
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
        $category = Category::findOrFail($id);
        return view('dashboard.pages.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request,Category $category)
    {   
        // dd($request->all());
        $request_data = $request->all();

        if($request->hasFile('image')){
            $this->removeImage(Category::Category_PATH.$category->image);
            $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', Category::Category_PATH );
        }
        $category->update($request_data);
        Toastr::success('Success Update Category', ["positionClass" => "toast-top-right"]);
        return back();
    }
    public function recover()
    {
        $categories = Category::onlyTrashed()->get();
        // dd($categories);
        return view('dashboard.pages.categories.trashed',compact('categories'));
    }
    public function restore($id)
    {
        $categories = Category::where('id', $id)->withTrashed()->first();
        $categories->restore();
        return response()->json(['success'=>true]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['success'=>true]);
    }
    
}
