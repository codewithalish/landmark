<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function create()
    {
        return view('contacts.create');

    }


    public function store(ContactRequest $request)
    {

        $inputs = $request->only('name', 'mobile', 'message',);
        $inputs['user_id'] = Auth::user()->id;

        $result = Contact::create($inputs);

        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        }

        return back()->with('error', 'خطا');


    }




}
