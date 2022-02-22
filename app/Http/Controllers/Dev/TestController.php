<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Models\CaseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{


    public function livewire()
    {
        return view('livewire.users');

    }

    public function index()
    {
        Auth::loginUsingId(1);


        return CaseModel::isLiked()->get();



    }


    public function store(Request $request)
    {
        return $request->all();
    }


}
