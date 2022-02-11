<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

     public function create(Request $request)
        {
            return view('users/create');
        }

        public function store(UserRequest $request)
    {
        $inputs = $request->only('name', 'email', 'message', 'mobile','password');
        $inputs['password'] = Hash::make($inputs['password']);

        $result=User::create($inputs);
        if ($result){
            return redirect('/users/create')->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/users/create')->with('error');
        }

    }
}
