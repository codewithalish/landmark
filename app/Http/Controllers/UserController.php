<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

     public function create(Request $request)
        {
            return view('users/create');
        }

        public function store(UserRequest $request)
    {
        $inputs = $request->only('name', 'email', 'message', 'mobile');

        $result=User::create($inputs);
        if ($result){
            return redirect('/users/create')->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/users/create')->with('error');
        }

    }
}
