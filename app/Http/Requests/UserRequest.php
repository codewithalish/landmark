<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //
            'name'=>['required','string'],
            'email'=>['required','email'],
            'mobile'=>['required','string'],
            'whatsapp'=>['required','string'],
            'telegram'=>['required','string'],
            'password'=>['required','min:6'],
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'نام کاربری',
            'email'=>'ایمیل',
            'password'=>'رمز عبور',
            'mobile'=>'شماره موبایل',
            'whatsapp'=>'واتساپ',
            'telegram'=>'تلگرام'
        ];
    }

    public function messages()
    {
        return [
            'required'=>'فیلد :attribute اجباری است',
            'min'=>'فیلد :attribute حداقل 6 کاراکتر باشد',
            'email'=>'فیلد :attribute با فرمت معتبر وارد شود',

        ];

    }
}
