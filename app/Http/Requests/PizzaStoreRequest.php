<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaStoreRequest extends FormRequest
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
            'name'=>'Required|string|min:3|max:5',
            'Decription'=>'Required',
            'small_price'=>'Required|number',
            'medium_price'=>'Required|number',
            'large_price'=>'Required|number',
            'category'=>'Required',
            'image'=>'Required|mimes=png,jpeg,jpg'
        ];
    }
}
