<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Variable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function __construct()
    {
    }


    public function uploadMedia($file)
    {
        $path = '\images';
        $fileName = uniqid() . '-' . $file->getClientOriginalName();
        $destination = public_path() . '/' . $path;
        $file->move($destination, $fileName);

        return $path . '/' . $fileName;
    }

    public function checkPermission($permission){

      if (! Auth::user()->can($permission))
          abort('419','عدم دسترسی');
    }
}
