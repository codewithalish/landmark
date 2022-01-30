<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Agent;
use App\Models\CaseModel;
use App\Models\Contact;
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

        $items=$items->where('status' , 'CONFIRMED')->paginate(6);

        $caseWidget=CaseModel::query()
            ->orderBy('created_at','desc')
            ->limit(3)
            ->get();

        $agentWidget=User::query()
            ->limit(3)
            ->get();


        return view('cases/cases', compact('items' , 'request' ,'caseWidget' , 'agentWidget'));
    }


    public function create(Request $request){

        return view('cases/create');
    }

    public function store(ContactRequest $request)
    {
        $inputs=$request->only('name','email','message','mobile');
        $result=Contact::create($inputs);
        if ($result){
            return redirect('/cases/{id}')->with('success','با موفقیت ارسال شد');
        } else{
            return redirect('/cases')->with('error');
        }

    }

    public function show(Request $request,$id)
    {
        $item=CaseModel::find($id);


        $related_cases=CaseModel::query()
            ->where('title','like','%'.$item->title.'%' )
            ->where('id','<>',$item->id )
            ->limit(2)
            ->get();


        # todo wrong cod
        $agent=Agent::query()
            ->first();

        return view('cases/show',compact('item' , 'related_cases','agent' ));
    }

}
