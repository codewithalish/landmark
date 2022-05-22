<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login'); #email, password
    }

    public function checklogin(LoginRequest $request)
    {
        $login_field = $request->only(['mobile', 'password']);
        $result = auth::attempt($login_field);

        if ($result) {

            $userRoles = [];

            return redirect('/admin/dashboard');
        }
        return redirect('/admins/login')->with('error', 'نام کاربری یا کلمه عبور اشتباه است');

    }

    public function create()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $inputs = $request->only(['name', 'mobile', 'password','email']);
        $inputs['password'] = Hash::make($inputs['password']);
        $newUser = User::create($inputs);
        $roleUser = Role::where('name', 'user')->first();
        $newUser->assignRole($roleUser);

        return redirect('admins/login')->with('success', 'با موفقیت ثبت شد');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/admins/login');
    }

}
