<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Employees\EmployeesStoreRequest;
use App\Http\Requests\Dashboard\Employees\EmployeesUpdateRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Traits\Upload;
use App\Http\Traits\DeleteFile;
// use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeesController extends Controller
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
        $employees = Employee::paginate(8);
        return view('dashboard.pages.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.employee.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesStoreRequest $request)
    {
        $requestData = $request->all();
        $requestData['image'] = $this->uploadImage($requestData, 'default.jpg', Employee::Employee_PATH );
        Employee::create($requestData);
        return back()->with(['SuccessToast'=>['Success Added Category']]);

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
        $user = Employee::findOrFail($id);
        return view('dashboard.pages.employee.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeesUpdateRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $request_data = $request->all();
        $employee->name = $request_data['name'];
        $employee->job = $request_data['job'];
        $employee->phone = $request_data['phone'];
        $employee->description = $request_data['description'];
        if($request->hasFile('image')){
            $this->removeImage(Employee::Employee_PATH.$employee->image);
            $request_data['image'] = $this->uploadImage($request_data, 'default.jpg', Employee::Employee_PATH);
            $employee->image = $request_data['image'];
        }
        $employee->save();
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
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['success'=>true]);
    }
}
