<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\CaseModel;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function create(Request $request)
    {
        return view('users/create');
    }

    public function store(UserRequest $request)
    {
        $inputs = $request->only('name', 'email', 'message', 'mobile', 'password');
        $inputs['password'] = Hash::make($inputs['password']);

        $result = User::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }

    }

    public function show($id)
    {
        //
        $query = User::find($id);
        return view('users.show', ['item' => $query]);
    }

    public function edit($id)
    {
        //
        $query = User::where('id', $id)->first();
        return view('users.edit', ['item' => $query]);
    }

    public function update(Request $request, $id)
    {
        //
        $query = $request->only(
            'name',
            'mobile',
            'password',
            'email',

        );
        User::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }





    public function bookmarks()
    {
        $items = CaseModel::isLiked()->get();

        return view('bookmarks.show')->with('items', $items);

    }
}
