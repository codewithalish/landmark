<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AssignController extends Controller
{

    public function assignRole($id)
    {
        $roleAdmin = \Spatie\Permission\Models\Role::where('name', 'admin')->first();
        $roleAgent = Role::where('name', 'agent')->first();
        $roleUser = Role::where('name', 'user')->first();

    }

    public function index()
    {

        $titleCard = 'لیست';
        $th = ['شناسه', 'name', 'title', 'operation'];
        $query = \Spatie\Permission\Models\Role::query()
            ->orderBy('id', 'DESC')
            ->get();

        return view('admin.assign.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );
    }

    public function create()
    {
        return view('admin.assign.create');
    }

    public function store(Request $request)
    {


        $user_id = $request->get('user_id');
        $role_id = $request->get('role_id');

        $user=User::find($user_id);
        $role=\Spatie\Permission\Models\Role::find($role_id);

       $result= $user->assignRole($role);
       return back()->with('success','با موفقیت ثبت شد');


    }
}
