<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvironmentUpdateRequest extends FormRequest
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
            'image' => 'max:50000|mimes:png,jpg,jpeg,svg',
        ];
    }

    public function messages()
    {
        return [
            'name_fa.required' => 'نام محیط الزامی است',
            'name_en.required' => 'نام محیط الزامی است',
            'image.max' => 'حجم تصویر بیش از 5000 کیلوبایت است',
            'image.mimes' => 'فرمت تصویر باید یکی از (png,jpg,jpeg,svg) باشد',
        ];
    }
}
