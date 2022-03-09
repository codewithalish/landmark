<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'name', 'operation'];
        $query = \Spatie\Permission\Models\Permission::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.permissions.index',
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
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        $gaurd_name='web';
//        $inputs = $request->only('name',$gaurd_name);
//        $result=\Spatie\Permission\Models\Permission::create($inputs);
//        if ($result){
//            return back()->with('success','با موفقیت ارسال شد');
//        } else{
//            return back()->with('error');
//        }

        $inputs = $request->only('permission_id','model_id','model_type');

        $permission_id=\Spatie\Permission\Models\Permission::all();
        $model_id = User::find();
        $model_id->assignRole($permission_id);

        return back()->with([
            'permission_id' =>  $permission_id,
            'model_id' => $model_id
        ]);

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
        $query = \Spatie\Permission\Models\Permission::find($id);
        return view('admin.permissions.show', ['item' => $query]);
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
        $query = \Spatie\Permission\Models\Permission::where('id', $id)->first();
        return view('admin.permissions.edit', ['item' => $query]);
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
        $query = $request->only('name');
        \Spatie\Permission\Models\Permission::where('id', $id)->update($query);
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
        \Spatie\Permission\Models\Permission::query()->where('id', $id)->delete();
        return back();
    }
}
