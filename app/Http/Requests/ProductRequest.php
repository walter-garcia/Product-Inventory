<?php

namespace inventory\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

    public function messages()
    {
        return [
            'required' => 'This field can not be empty'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'productName' => 'required|max:100',
            'brand' => 'required|max:50',
            'value' => 'required|numeric',
            'amount' => 'required|numeric',
            'description' => 'required|max:255'
        ];
    }
}
