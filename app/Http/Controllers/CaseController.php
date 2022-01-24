<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaseController extends Controller
{
    public function search(Request $request)
    {
//
//        if( ! in_array('view_posts' , $user->permissions))
//            abort(401);
//            Cases::query()->where('user_id',  Auth::user()->id);

        $items=CaseModel::query();

        if ($request->get('q'))
            $items=$items->where('title','like','%'.$request->get('q').'%');

        if ($request->get('area_min'))
            $items=$items->where('area','>=',$request->get('area_min'));

        if ($request->get('area_max'))
            $items=$items->where('area','<=',$request->get('area_max'));

        if ($request->get('parking_number'))
            $items=$items->where('parking_number','>=',$request->get('parking_number'));

        if ($request->get('room_number'))
            $items=$items->where('room_number','>=',$request->get('room_number'));

        if ($request->get('type'))
            $items=$items->where('type',$request->get('type'));

        if ($request->get('contract'))
            $items=$items->where('contract',$request->get('contract'));

        if ($request->get('price_min'))
            $items=$items->where('price','>=',$request->get('price_min'));

        if ($request->get('price_max'))
            $items=$items->where('price','<=',$request->get('price_max'));

        $items=$items->get();

        return view('pages/cases', compact('items' , 'request'));
    }





    public function allCases(Request $request)
    {
        $items=CaseModel::query()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages/case_list', compact('items'));
    }

    public function show($id)
    {
        $query=CaseModel::find($id);
        return view('pages/case_detail',['item'=>$query]);
    }

}
