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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>['required','string'],
            'mobile' => ['required', 'string'],
            'password' => ['required', 'string', 'min:5']
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'نام',
            'mobile' => 'تلفن همراه',
            'password' => 'رمز عبور'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد',
            'mobile' => 'تلفن همراه با فرمت معتبر وارد کنید'
        ];
    }
}
