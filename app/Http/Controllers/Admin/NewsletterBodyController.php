<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\NewsletterBody;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsletterBodyController extends Controller
{
    public function create()
    {
        $titleCard = 'لیست';
        $th = ['شناسه', 'body', 'operation'];
        $query = NewsletterBody::query()
            ->orderBy('id', 'DESC')
            ->limit(10)
            ->get();
        return view('admin.newsletters.create',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );
//        return view('admin.newsletters.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->only(
            'body'
        );
        $inputs['user_id'] = Auth::user()->id;

        $result = NewsletterBody::create($inputs);

        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
        }

    }
    public function destroy($id)
    {
        $del=NewsletterBody::query()->where('id', $id)->delete();
        return view('admin.newsletters.create',compact('del'));
    }

}
