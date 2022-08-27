<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name_fa' => 'required',
            'name_en' => 'required',
            'category_id' => 'integer|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name_fa.required' => 'نوع اقامتگاه الزامی است',
            'name_en.required' => 'نوع اقامتگاه الزامی است',
            'category_id.exists'=>'دسته والد وجود ندارد',
        ];
    }
}
