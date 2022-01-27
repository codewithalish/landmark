<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\CaseModel;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function allAgents(Request $request)
    {
        $items=Agent::query()
            ->paginate(3);


        return view('agents/agents', compact('items'));
    }



    public function show($id)
    {
        $item=User::find($id);

        $cases=CaseModel::query()
            ->limit(2)
            ->get();
        return view('agents/agent_detail',compact('item','cases'));
    }


}
