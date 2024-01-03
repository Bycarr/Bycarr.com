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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' =>  'nullable',
            'image' => 'image|max:2048|mimes:jpeg,jpg,bmp,png',
            // 'model_no' => 'required',
            'imei_no_1' => 'required_if:is_imei,1|unique:products,imei_no_1',
            'imei_no_2' => 'required_if:is_imei,1|unique:products,imei_no_2',
            'serial_no' => 'required|unique:products,serial_no',
            'product_category_id' => 'required|exists:product_categories,id',
            'product_model_id' => 'required|exists:product_models,id',
            'regional_distributor'=>'required',
            'retail_store'=>'required',
        ];
    }
}
