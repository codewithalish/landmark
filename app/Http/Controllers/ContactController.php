<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(ContactRequest $request)
    {
        $inputs=$request->only('name','email','message');
        $result=ContactUs::create($inputs);
        if ($result){
            return redirect('/contact_us')->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/contact_us')->with('error');
        }



    }
}
