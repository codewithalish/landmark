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
    public function allAgents(Request $request)
    {
        $items = Agent::query()
            ->paginate(3);

        return view('agents/agents', compact('items'));
    }


    public function create(Request $request)
    {
        return view('agent_detail');
    }

    public function store(ContactRequest $request)
    {
        $inputs = $request->only('name', 'email', 'message', 'mobile');
        $result = Contact::create($inputs);
        if ($result) {
            return redirect('/agent_detail/{id}')->with('success', 'با موفقیت ارسال شد');
        } else {
            return redirect('/agent_detail')->with('error');
        }

    }
    public function show($id)
    {
        $item = User::find($id);

        $cases = CaseModel::query()
            ->limit(2)
            ->get();
        return view('agents/agent_detail', compact('item', 'cases'));
    }

}
