<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'name', 'mobile','email', 'operation'];
        $query = Agent::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.agents.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );

//
//        $query=Post::get();
//        return view('admin.posts.index',['items'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CaseRequest $request)
    {
        $inputs = $request->only(
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
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }
        $result=Agent::create($inputs);

        $roleUser = Role::where('name', 'agent')->first();
        $result->assignRole($roleUser);


        if ($result){
            return back()->with('success','با موفقیت ارسال شد');
        } else{
            return back()->with('error');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query = Agent::find($id);
        return view('admin.agents.show', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query = Agent::where('id', $id)->first();
        return view('admin.agents.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Agent::query()->where('id', $id)->delete();
        return back();
    }

    public function uploadMedia($file)
    {
        $path='\images';
        $fileName=uniqid().'-'.$file->getClientOriginalName();
        $destination=public_path().'/'.$path;
        $file->move($destination,$fileName);

        return $path.'/'.$fileName;
    }
}
