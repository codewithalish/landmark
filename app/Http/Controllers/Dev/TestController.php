<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Models\CaseModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function livewire()
    {
        return view('livewire.users');

    }

    public function index()
    {
        //

        return CaseModel::isVIP()->get();
    }


    public function store(Request $request)
    {
        return $request->all();
    }


}
