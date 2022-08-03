<?php

namespace App\Http\Requests\Dashboard\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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

        $id = $this->route('user');
        return [
            'name' => 'required|string|min:3|max:255',
            'email'=> 'required|email|unique:users,email,'.$id,
            'phone'=> 'required|integer',
            'Is_Admin'=> 'required|integer',
            'image'=>'nullable|file|mimes:png,jpg,jpeg|max:2500'
        ];
    }
}
