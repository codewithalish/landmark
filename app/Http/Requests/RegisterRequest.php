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
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:5']
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'نام',
            'email' => 'ایمیل',
            'password' => 'رمز عبور'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد',
            'email' => 'ایمیل با فرمت معتبر وارد کنید'
        ];
    }
}
