<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show($id)
    {
        $query=Shop::find($id);
        return view('pages/shop_detail',['item'=>$query]);
    }
}
