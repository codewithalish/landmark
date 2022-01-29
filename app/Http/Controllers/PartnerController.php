<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function partner()
    {
        $items=Partner::query()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('/pages/partner' ,compact('items'));
    }

}
