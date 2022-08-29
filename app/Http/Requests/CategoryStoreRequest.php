<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name_fa' => 'required|unique:categories',
            'name_en' => 'required|unique:categories',
            'environment_id' => 'integer|exists:environments,id',
        ];
    }

    public function messages()
    {
        return [
            'name_fa.unique' => 'نوع اقامتگاه تکراری است',
            'name_fa.required' => 'نوع اقامتگاه الزامی است',
            'name_en.unique' => 'نوع اقامتگاه تکراری است',
            'name_en.required' => 'نوع اقامتگاه الزامی است',
            'environment_id.exists'=>'دسته والد وجود ندارد',
        ];
    }
}
