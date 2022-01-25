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
        return view('pages/agent_list');
    }



    public function show($id)
    {
        $query=User::find($id);
        return view('pages/agent_detail',['item'=>$query]);
    }


}
