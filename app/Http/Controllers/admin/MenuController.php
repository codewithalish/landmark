<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\UserRequest;
use App\Models\Menu;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MenuController extends Controller
{

    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'routes'];
        $query = Menu::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.menu.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );


    }


    public function create()
    {
        //
        return view('admin.menu.create');
    }


    public function store(MenuRequest $request)
    {
        $inputs = $request->only(
            'route',
        );


        $result=Menu::create($inputs);

        if ($result){
            return back()->with('success','با موفقیت ارسال شد');
        } else{
            return back()->with('error');
        }

    }


    public function show($id)
    {
        //
        $query = Menu::find($id);
        return view('admin.menu.show', ['item' => $query]);
    }


    public function edit($id)
    {
        //
        $query = Menu::where('id', $id)->first();
        return view('admin.menu.edit', ['item' => $query]);
    }


    public function update(MenuRequest $request, $id)
    {
        //
        $query = $request->only(

            'route'
        );

        Menu::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }


    public function destroy($id)
    {
        //
        Menu::query()->where('id', $id)->delete();
        return back();
    }
}
