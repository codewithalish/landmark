<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'user_id', 'bookmarkable_id', 'bookmarkable_type', 'operation'];
        $query = Bookmark::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.bookmarks.index',
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
        return view('admin.bookmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CaseRequest $request)
    {
        $inputs = $request->only('user_id', 'bookmarkable_id', 'bookmarkable_type');
        $result = Bookmark::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
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
        $query = Bookmark::find($id);
        return view('admin.bookmarks.show', ['item' => $query]);
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
        $query = Bookmark::where('id', $id)->first();
        return view('admin.bookmarks.edit', ['item' => $query]);
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
        $query = $request->only('user_id', 'bookmarkable_id', 'bookmarkable_type');
        Bookmark::where('id', $id)->update($query);
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
        Bookmark::query()->where('id', $id)->delete();
        return back();
    }
}
