<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:8'],
            'body' => ['string', 'min:5'],
            'details' => [ 'string'],
            'area'=>['required'],
            'contract'=>['required'],
            'type'=>['required'],
            'address'=>['required'],
        ];
    }
    public function attributes()
    {
        return [
            'title'=>'عنوان',
            'price'=>'قیمت',
            'detail'=>'جزئیات',
            'body'=>'توضیحات',
            'type'=>' نوع ملک',
            'area'=>'مساحت',
            'contract'=>'نوع قرارداد',
            'address'=>'آدرس',

        ];
    }

    public function messages()
    {
        return [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد',
            'numeric'=>'مبلغ را به عدد وارد کنید.'
        ];

    }
}
