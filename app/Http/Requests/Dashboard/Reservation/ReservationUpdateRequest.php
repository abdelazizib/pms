<?php

namespace App\Http\Requests\Dashboard\Reservation;

use Illuminate\Foundation\Http\FormRequest;

class ReservationUpdateRequest extends FormRequest
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
            'date' => "required|after_or_equal:".date("Y-m-d"),
            'guest' => "required|int|max:5|min:1"
        ];
    }
}
