<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function search(Request $request)
    {
        $items=CaseModel::query();

        if ($request->get('parking_number'))
            $items=$items->where('parking_number',$request->get('parking_number'));

        if ($request->get('bath_number'))
            $items=$items->where('bath_number',$request->get('bath_number'));

        if ($request->get('room_number'))
            $items=$items->where('room_number',$request->get('room_number'));

        if ($request->get('type'))
            $items=$items->where('type',$request->get('type'));

        if ($request->get('contract'))
            $items=$items->where('contract',$request->get('contract'));

        $items=$items->get();

        return view('pages/search', compact('items'));
    }

    public function lastCases(Request $request)
    {
        $items=CaseModel::query()
            ->limit(9)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages/index', compact('items'));
    }
}
