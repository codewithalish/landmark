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
            'mobile' => ['required', 'string','unique:users,mobile'],
            'email' => ['required','string'],
            'password' => ['required', 'string', 'min:6']
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'نام',
            'mobile' => 'تلفن همراه',
            'password' => 'رمز عبور',
            'email'=>'ایمیل'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد',
            'unique'=>'با این  :attribute  قبلا در سایت عضو شده اید.'
        ];
    }
}
