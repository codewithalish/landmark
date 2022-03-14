<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Agent;
use App\Models\CaseModel;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    public function index(Request $request)
    {
        $items = User::query()
            ->role(['agent','admin'])
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

    public function store(ContactRequest $request )
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
//        $inputs['password'] = Hash::make($inputs['password']);

#ارسال پیام در صفحه agent/show
        $inputs['user_id'] = auth()->user()->id;
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

    public function edit($id)
    {
        //
        $query = Agent::where('id', $id)->first();
        return view('agents.edit', ['item' => $query]);
    }

    public function update(Request $request, $id)
    {
        //
        $query = $request->only(
            'name',
            'mobile',
            'password',
            'email',
            'address',
            'bio',
            'avatar_path',
            'telegram',
            'whatsapp'
        );

        if ($request->file('avatar_path')){
            $query['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }
        Agent::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }

}
