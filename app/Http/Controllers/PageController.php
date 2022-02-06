<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\CaseModel;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(Request $request)
    {
        $items = CaseModel::query()
            ->limit(6)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages/welcome', compact('items'));
    }

    public function search(Request $request)
    {
        return view('pages/welcome');
    }

    public function store(Request $request, $id = null)
    {

        $inputs = $request->only('email');
        $inputs['user_id'] = $id;

        $result = Newsletter::create($inputs);

        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        }

    }

}
