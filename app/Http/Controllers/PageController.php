<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function welcome(Request $request)
    {





        return view('pages/index');
    }




}
