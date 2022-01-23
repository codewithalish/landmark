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

        $items=User::query()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages/agent_list', compact('items'));
    }

//    public function index()
//    {
//        //
//        $query=User::get();
//        return view('pages.index',['items'=>$query]);
//    }


    public function show($id)
    {
        $query=User::find($id);
        return view('pages/agent_detail',['item'=>$query]);
    }


}
