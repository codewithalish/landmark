<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function login()
    {
        return view('/'); #email, password
    }

    public function checklogin(LoginRequest $request)
    {
        $login_field = $request->only(['mobile', 'password']);
        $result = auth::attempt($login_field);

        if ($result) {

            $userRoles = [];

            return back();
        }
        return redirect('/users/create')->with('error', 'نام کاربری یا کلمه عبور اشتباه است');

    }

    public function create()
    {
        return view('/users/create');
    }

    public function register(RegisterRequest $request)
    {
        $inputs = $request->only(['name', 'mobile', 'password','email']);
        $inputs['password'] = Hash::make($inputs['password']);
        $result=User::create($inputs);

        if ($result){
            return back()->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/users/create')->with('error');
        }
    }
}
