<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Newsletter;
use App\Models\Permission_Role;
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

        $agent = [];

        #-------------------------------------------


        $agent[$id] = User::find($id);

        $agent[$id]->assignRole($roleAdmin);
        $agent[2]->assignRole($roleAgent);
        $agent[3]->assignRole($roleUser);

    }

    public function index()
    {

        $titleCard = 'لیست';
        $th = ['شناسه', 'name', 'title', 'operation'];
        $query = Role::query()
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
//        $inputs = $request->only('role_id','model_id','model_type');

        $model_id = $request->get('model_id');
        $role_id = $request->get('role_id');

       $result= $model_id->assignRole($role_id);
        dd($result);

//        return back()->with([
//            'role_id' =>  $role_id,
//            'model_id' => $model_id
//        ]);

    }
}
