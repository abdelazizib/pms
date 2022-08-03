<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use App\Http\Traits\Upload;
use Illuminate\Http\Request;
use App\Http\Traits\DeleteFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Slider\SliderStoreRequest;

class SliderController extends Controller
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
        $sliders = Slider::all();
        return view('dashboard.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderStoreRequest $request)
    {
        $request_data = $request->all();
        $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', Slider::Category_PATH );
        Slider::create($request_data);
        return back()->with(['SuccessToast'=>["Slider Added"]]);
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
        $slider = Slider::findOrFail($id);
        return view('dashboard.pages.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->title = $request->slide_title;
        $slider->description = $request->slide_desc;
        $slider->save();
        return back()->with(['SuccessToast'=>['Success Update Slider']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slider::findOrFail($id);
        $slide->delete();
        return response()->json(['success'=>true]);
    }
}
