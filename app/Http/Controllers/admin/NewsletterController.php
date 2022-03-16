<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Mail\NewsletterMail;
use App\Models\Newsletter;
use App\Models\NewsletterBody;
use App\Models\NewsletterSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{

        public function index()
    {

        $titleCard = 'لیست';
        $th = ['شناسه', 'email', 'operation'];
        $query = Newsletter::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.newsletters.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleCard = 'لیست';
        $th = ['شناسه', 'body', 'operation'];
        $query = NewsletterSent::query()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
      $body=$request->get('body');
      $emails=Newsletter::query()->pluck('email');

      foreach ($emails as $email){
          $address=new NewsletterMail($email,$body);
          Mail::send($address,$body);

      }
        NewsletterSent::create([
            'user_id'=>Auth::id(),
            'body'=>$body,
        ]);

            return back()->with('success', 'با موفقیت ارسال شد');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query = Newsletter::find($id);
        return view('admin.newsletters.show', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query = Newsletter::where('id', $id)->first();
        return view('admin.newsletters.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $query = $request->only('email');
        Newsletter::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Newsletter::query()->where('id', $id)->delete();
        return back();
    }





}
