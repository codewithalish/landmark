<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function rules()
    {
        return [
            //
            'name'=>['required','string'],
            'mobile'=>['required'],
            'message'=>['required','string'],
            'user_id'=>['exists:contacts,user_id,NOT_NULL'],
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'نام',
            'mobile'=>'شماره موبایل',
            'message'=>'پیغام',
            'user_id'=>' برای ارسال پیام ورود به سایت'
        ];
    }

    public function messages()
    {
        return [
            'required'=>' :attribute اجباری است.',

        ];

    }
}
