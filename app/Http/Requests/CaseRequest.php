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
            'price' => ['numeric'],
            'body' => ['string', 'min:5'],
            'details' => [ 'string', 'min:10'],
        ];
    }
    public function attributes()
    {
        return [
            'title'=>'عنوان',
            'price'=>'قیمت',
            'detail'=>'جزئیات',
            'body'=>'توضیحات',
        ];
    }

    public function messages()
    {
        return [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد :attribute باید حداقل :min تا کاراکتر داشته باشد'
        ];

    }
}
