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
        return view('auth.login');
    }

    public function checklogin(LoginRequest $request)
    {
        $login_field = $request->only(['email', 'password']);
        $result = auth::attempt($login_field);
        if ($result) {
            return redirect('/admin');
        } else {
            return redirect('/login')->with('error', 'نام کاربری یا کلمه عبور اشتباه است');
        }
    }

    public function create()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $inputs = $request->only(['name', 'email', 'password']);
        $inputs['password'] = Hash::make($inputs['password']);
        User::create($inputs);
        return redirect('/login')->with('success', 'با موفقیت ثبت شد');
    }
}
