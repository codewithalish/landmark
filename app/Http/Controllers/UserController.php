<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\UserRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(UserRequest $request)
    {
        $inputs=$request->only('name','email','password','mobile','whatsapp','telegram','avatar_path');
        $result=ContactUs::create($inputs);
        if ($result){
            return redirect('/create_user')->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/create_user')->with('error');
        }



    }
}
