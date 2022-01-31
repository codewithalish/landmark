<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(ContactRequest $request, $id = null)
    {

        $inputs = $request->only('name', 'mobile', 'message');
        $inputs['user_id'] = $id;

        $result = Contact::create($inputs);


        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        }

        return back()->with('error', 'خطا');


    }

    public function create()
    {
        return view('contacts.create');

    }


}
