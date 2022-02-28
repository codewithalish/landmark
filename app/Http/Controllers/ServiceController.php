<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
         $services=Service::query()
            ->limit(4)
            ->get();
         return view('pages.services',compact('services'));
   }
}
