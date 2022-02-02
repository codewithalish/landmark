<?php

namespace App\Http\Controllers;

use App\Http\Requests\CaseRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Agent;
use App\Models\Bookmark;
use App\Models\CaseModel;
use App\Models\Contact;
use App\Models\User;
use App\Traits\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Paginator;

class CaseController extends Controller
{
    use Action;

    public function __construct()
    {
        $this->modelName = CaseModel::class;
    }

    public function search(Request $request)
    {
//
//        if( ! in_array('view_posts' , $user->permissions))
//            abort(401);
//            Cases::query()->where('user_id',  Auth::user()->id);

        $items = CaseModel::query();

        if ($request->get('q'))
            $items = $items->where('title', 'like', '%' . $request->get('q') . '%');

        if ($request->get('area_min'))
            $items = $items->where('area', '>=', $request->get('area_min'));

        if ($request->get('area_max'))
            $items = $items->where('area', '<=', $request->get('area_max'));

        if ($request->get('parking_number'))
            $items = $items->where('parking_number', '>=', $request->get('parking_number'));

        if ($request->get('room_number'))
            $items = $items->where('room_number', '>=', $request->get('room_number'));

        if ($request->get('type'))
            $items = $items->where('type', $request->get('type'));

        if ($request->get('contract'))
            $items = $items->where('contract', $request->get('contract'));

        if ($request->get('price_min'))
            $items = $items->where('price', '>=', $request->get('price_min'));

        if ($request->get('price_max'))
            $items = $items->where('price', '<=', $request->get('price_max'));

        $items = $items->where('status', 'CONFIRMED')->paginate(6);

        $caseWidget = CaseModel::query()
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $agentWidget = User::query()
            ->limit(3)
            ->get();


        return view('cases/cases', compact('items', 'request', 'caseWidget', 'agentWidget'));
    }

    public function create(Request $request)
    {

        return view('cases/create');
    }

    public function store(CaseRequest $request)
    {
        $inputs = $request->only([
            'title',
            'room_number',
            'area',
            'parking_number',
            'bath_number',
            'price',
            'deposit',
            'rent',
            'type',
            'avatar_path',
            'contract',
            'description',
            'address',
        ]);


        $inputs['status'] = 'NEW';

        $result = CaseModel::create($inputs);


        if ($result)
            return redirect('/cases/{id}')->with('success', 'با موفقیت ارسال شد');


        return redirect('/cases')->with('error');

    }

    public function show(Request $request, $id)
    {
        $item = CaseModel::find($id);


        $related_cases = CaseModel::query()
            ->where('title', 'like', '%' . $item->title . '%')
            ->where('id', '<>', $item->id)
            ->limit(2)
            ->get();


        # todo wrong cod
        $agent = Agent::query()
            ->first();

        return view('cases/show', compact('item', 'related_cases', 'agent'));
    }



    public function action($id ,$act)
    {
        $user=User::find(1);
        Auth::login($user);

        $actions=['like','dislike'];
        $casesId=CaseModel::pluck('id')->toArray();

        if(!in_array($act ,$actions))
        return 'اکشن مورد نظر اشتباه است';

        if(!in_array($id ,$casesId))
        return 'کیس مورد نظر اشتباه است';

        $bookmarkedCase=Bookmark::query()
            ->where('bookmarkable_id',$id)
            ->where('bookmarkable_type',CaseModel::class)
            ->count();

        if ($act=='like') {
            $bookmark = [
                'bookmarkable_id' => $id,
                'bookmarkable_type' => CaseModel::class,
                'user_id' => Auth::id()
            ];

            if ($bookmarkedCase < 1) {
                Bookmark::create($bookmark);
                return 'با موفقیت لایک شد';
            } else
                return 'قبلا لایک شده';
        }

           elseif ($act=='dislike'){

                if ($bookmarkedCase>0){
                    Bookmark::query()
                        ->where('bookmarkable_id',$id)
                        ->where('bookmarkable_type',CaseModel::class)
                        ->delete();
                    return 'با موفقیت دیس لایک شد';
                }else
                    return 'قبلا همچین کیسی رو لایک نکردی';
               }

    }


}
