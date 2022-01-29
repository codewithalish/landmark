<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(UserRequest $request)
    {
        $inputs=$request->only('name','email','password','mobile','bio','address','whatsapp','telegram','avatar_path');
        $result=User::create($inputs);
        if ($result){
            return redirect('/register_user')->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/register_user')->with('error');
        }



    }
}
