<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'title', 'body', 'operation'];
        $query = Post::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.posts.index',
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
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {


        $inputs = $request->only('title', 'body');

        if ($request->file('avatar_path')){
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }

        $inputs['user_id'] = Auth::id();

        $result=Post::create($inputs);
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
        $query = Post::find($id);
        return view('admin.posts.show', ['item' => $query]);
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
        $query = Post::where('id', $id)->first();
        return view('admin.posts.edit', ['item' => $query]);
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
        $query = $request->only('title', 'body','user_id','avatar_path');

        if ($request->file('avatar_path')){
            $query['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }
        Post::where('id', $id)->update($query);
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
        Post::query()->where('id', $id)->delete();
        return back();
    }
}
