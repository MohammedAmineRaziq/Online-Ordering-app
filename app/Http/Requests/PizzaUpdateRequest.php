<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaUpdateRequest extends FormRequest
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
            'name'=>'Required|string|min:3|max:50',
            'description'=>'Required',
            'small_price'=>'Required|numeric',
            'medium_price'=>'Required|numeric',
            'large_price'=>'Required|numeric',
            'category'=>'Required',
            'image'=>'image|mimes:jpg,png,jpeg,gif,svg'
        ];
    }
}
