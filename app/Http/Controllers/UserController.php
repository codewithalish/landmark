<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\CaseModel;
use App\Models\Contact;
use App\Models\User;
use App\Traits\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
use Action;

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
            return back()->with('success','با موفقیت ارسال شد');
        } else{
            return back()->with('error');
        }

    }
    public function bookmarks(){

         $items=CaseModel::query()->limit('5')->get();
         return view('/bookmarks/show', compact('items'));


    }
}
