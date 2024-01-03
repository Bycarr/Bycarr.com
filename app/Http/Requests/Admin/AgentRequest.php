<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
            'address' => 'nullable',
            'contact' => 'nullable',
            'email' => 'nullable',
        ];
    }
}
