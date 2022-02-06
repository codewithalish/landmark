<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Agent;
use App\Models\CaseModel;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(Request $request)
    {
        $items = User::query()
            ->with(['roles'])
           ->paginate(3);

        $agentWidget=User::query()
            ->limit(3)
            ->get();


        return view('agents/agents', compact('items', 'agentWidget'));
    }


    public function create(Request $request )
    {
        return view('agents/create');
    }

    public function store(ContactRequest $request)
    {
        $inputs=$request->only(
            'name',
            'email',
            'password',
            'mobile',
            'bio',
            'address',
            'whatsapp',
            'telegram',
            'avatar_path',
            'message'
        );

#ارسال پیام در صفحه agent/show
        $result = Contact::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }
    }


    public function show($id)
    {
        $item = User::query()
            ->with(['roles'])
            ->find($id);

        $cases = CaseModel::query()
            ->limit(2)
            ->get();

        return view('agents/show', compact('item', 'cases'));
    }

}
