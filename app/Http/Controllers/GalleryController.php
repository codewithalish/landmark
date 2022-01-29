<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Partner;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery()
    {
        $items=Gallery::query()
            ->orderBy('created_at', 'desc')
            ->get();
        return view('/pages/gallery' ,compact('items'));
    }
}
