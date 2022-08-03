<?php

namespace App\Http\Requests\Front\Checkout;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutStoreRequest extends FormRequest
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
            'fname'=>'required|string|min:3|max:255',
            'lname'=>'required|string|min:3|max:255',
            'email'=>'required|email',
            'address'=>'required|string',
            'state'=>'required|string',
            'country'=>'required|string',
            'payment_method'=>'required|string',
            'zip'=>'required|integer',
        ];
    }
}
