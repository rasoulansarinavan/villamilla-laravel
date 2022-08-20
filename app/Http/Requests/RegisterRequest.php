<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'mobile' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5|max:20|confirmed',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'نام و نام خانوادگی الزامی است',
            'mobile.required'=>'شماره موبایل الزامی است',
            'mobile.unique'=>'شماره موبایل تکراری است',
            'email.unique'=>'ایمیل تکراری است',
            'email.required'=>'وارد کردن ایمیل الزامی است',
            'email.email'=>' ساختار ایمیل وارد شده اشتباه است',
            'password.required'=>'وارد کردن پسورد الزامی است',
            'password.min'=>'حداقل طول پسورد باید 5 کاراکتر باید باشد',
            'password.max'=>'حداکثر طول پسورد باید 20 کاراکتر باید باشد',
            'password.confirmed'=>'پسورد و تاییدیه یکسان نیست',
        ];
    }
}
