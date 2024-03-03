<?php

namespace App\Http\Requests\Admin;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name'              => 'required',
            'main_description'  => 'required',
            'description'       => 'required',
            'count'             => 'required',
            'price'             => 'required',
            'discount'          => 'sometimes|nullable',
            'discount_type'     => 'sometimes|nullable',
            'category_id'       => 'required',
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules['images'] = 'sometimes|nullable';
        }//end of if
 
        return $rules;

    }//end of rules


}//end of request
