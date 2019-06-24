<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCar extends FormRequest
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
            'carmake' => 'required|unique:cars|max:255',
            'carmodel' => 'required|unique:cars|max:255',
            'producedon' => 'required|unique:cars|max:255',
        ];
    }

    public function messages()
    {
        return [
            'carmake.required' => 'Car Make is required',
            'carmodel.required'  => 'Car Model is required',
            'producedon.required' => 'Produced on date is required',
        ];
    }
}
