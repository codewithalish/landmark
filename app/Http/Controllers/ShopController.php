<?php

namespace App\Http\Controllers;

use App\Models\CaseModel;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $query=Shop::get();
        return view('pages.shop',['items'=>$query]);
    }

    public function show($id)
    {
        $item =Shop::find($id);
        return view('pages/shop_detail',compact('item'));
    }
}
