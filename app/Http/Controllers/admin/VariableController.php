<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Variable;
use Illuminate\Http\Request;

class VariableController extends Controller
{
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'key', 'value','operation'];
        $query = Variable::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.variables.index',
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
        return view('admin.variables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CaseRequest $request)
    {
        $inputs = $request->only('key');
        $result=Variable::create($inputs);
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
        $query = Variable::find($id);
        return view('admin.variables.show', ['item' => $query]);
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
        $query = Variable::where('id', $id)->first();
        return view('admin.variables.edit', ['item' => $query]);
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
        $query = $request->only('key', 'value');
        Variable::where('id', $id)->update($query);
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
        Variable::query()->where('id', $id)->delete();
        return back();
    }
}
