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

        $items = CaseModel::query()->orderBy('id', 'DESC');

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
            ->where('status', 'CONFIRMED')
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();

        $agentWidget = User::query()
            ->limit(3)
            ->get();

        return view('cases/cases', compact('items', 'request', 'caseWidget', 'agentWidget'));
    }

    public function create()
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
//        $inputs['user_id'] = Auth::user()->id;
        $inputs['user_id'] = Auth::id();
        $inputs['status'] = 'NEW';

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        $result = CaseModel::create($inputs);
        if ($result) {
            return redirect('/cases')->with('success', 'با موفقیت ارسال شد, در حال انتظار برای تایید.');
        } else {
            return redirect('/cases')->with('error');
        }
    }



    public function show(Request $request, $id)
    {
        $item = CaseModel::with(['agent','user'])->find($id);

        $related_cases = CaseModel::query()
            ->where('title', 'like', '%' . $item->title . '%')
            ->where('id', '<>', $item->id)
            ->limit(2)
            ->get();

        return view('cases/show', compact('item', 'related_cases'));
    }

    public function edit($id)
    {
        //
//        $this->checkPermission('cases_update');

        $query = CaseModel::where('id', $id)->first();
        return view('admin.cases.edit', ['item' => $query]);
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


        $query = $request->only(
            'title',
            'price',
            'user_id',
            'address',
            'room_number',
            'parking_number',
            'bath_number',
            'area',
            'deposit',
            'rent',
            'type',
            'contract',
            'is_vip',
            'description',
            'status',
            'avatar_path',
            'video_path',
            'details'
        );
        if ($request->file('avatar_path'))
            $query['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        CaseModel::where('id', $id)->update($query);
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
        CaseModel::query()->where('id', $id)->delete();
        return back();
    }



public function myCases(){
    $myCases = CaseModel::query()
        ->where('user_id',Auth::id())
        ->get();

      if ($myCases){
          return view('cases.myCases', compact('myCases'));
      }
      else{
          return view('/pages/empty');
      }
}




}
