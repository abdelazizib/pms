<?php

namespace App\Http\Requests\Dashboard\Employees;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min:3',
            'job'=>'required|string',
            'phone'=>'required|integer',
            'description'=>'required|string',
            'image' => "required|file|mimes:jpeg,jpg,png|max:2500"
        ];
    }
}
