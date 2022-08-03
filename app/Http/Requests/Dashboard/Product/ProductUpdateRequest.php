<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
        $id = $this->route('product');
        return [
            'category_id'=>'required|integer',
            'name'=>'required|string|unique:products,name,'.$id,
            'price'=>'required|integer|min:1',
            'description'=>'required|string',
            'image'=>'nullable|file|mimes:jpeg,jpg,png|max:2500',
        ];
    }
}
