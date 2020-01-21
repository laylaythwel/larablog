<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
            
            'title' => 'required',
            'description' => 'required',
            'image' => "required|image|mimes:jpeg,jpg,png,gif",
           
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title field is required',
            'description.required' => 'The description field is required',
            'image.required' => 'The image field is required',
        ];
    }
}
