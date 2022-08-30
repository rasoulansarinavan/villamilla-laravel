<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidenceStoreRequest extends FormRequest
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
            'capacity' => 'required',
            'price' => 'required',
            'wc_en' => 'required',
            'wc_fa' => 'required',
            'bath' => 'required',
            'single_bed' => 'required',
            'double_bed' => 'required',
            'long_desc_en' => 'required',
            'long_desc_fa' => 'required',
            'short_desc_en' => 'required',
            'short_desc_fa' => 'required',
            'category_id' => 'required',
            'environment_id' => 'required',
            'thumbnail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_fa.required' => 'الزامی است',
            'name_en.required' => 'الزامی است',
            'capacity.required' => 'الزامی است',
            'price.required' => 'الزامی است',
            'wc_en.required' => 'الزامی است',
            'wc_fa.required' => 'الزامی است',
            'bath.required' => 'الزامی است',
            'single_bed.required' => 'الزامی است',
            'double_bed.required' => 'الزامی است',
            'long_desc_en.required' => 'الزامی است',
            'long_desc_fa.required' => 'الزامی است',
            'short_desc_en.required' => 'الزامی است',
            'short_desc_fa.required' => 'الزامی است',
            'category_id.required' => 'الزامی است',
            'environment_id.required' => 'الزامی است',
            'thumbnail.required' => 'الزامی است',
        ];
    }
}
