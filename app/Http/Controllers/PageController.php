<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function welcome(Request $request)
    {


        $items=CaseModel::query()
            ->limit(9)
            ->orderBy('created_at', 'desc')
            ->get();



        return view('pages/index', compact('items'));
    }




}
