<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| test & dev
|--------------------------------------------------------------------------
|
|
*/
Route::get('/test/mail', function () {

    $emails=\App\Models\User::query()->pluck('email');

    foreach ($emails as $email){
        \Illuminate\Support\Facades\Mail::send('emails.first', [], function ($message) use ($email) {
            $message->to($email, 'landmark')->subject('test mail');
            $message->from('fa.mozaffarii111@gmail.com', 'landmark');
        });
    }



});


Route::resource('tests', App\Http\Controllers\Dev\TestController::class)->only(['store', 'index']);


Route::get('/test/users/{id}', function ($id) {
    return \App\Models\User::where('id', $id)->with('cases', 'comments', 'contacts')->first();
});

Route::get('/test/cases/{id}', function ($id) {
    return \App\Models\CaseModel::where('id', $id)->with('user')->first();
});


/*
|--------------------------------------------------------------------------
| welcome
|--------------------------------------------------------------------------
|
*/
Route::get('/', [PageController::class, 'welcome']);
Route::post('pages/store', [\App\Http\Controllers\PageController::class, 'store']);


/*
|--------------------------------------------------------------------------
| pages
|--------------------------------------------------------------------------
|
*/
Route::get('partner', [\App\Http\Controllers\PartnerController::class, 'partner']);
Route::get('gallery', [\App\Http\Controllers\GalleryController::class, 'gallery']);
Route::view('services', 'pages/services');
Route::view('abouts', 'pages/abouts');


/*
|--------------------------------------------------------------------------
| contact
|--------------------------------------------------------------------------
|
*/
Route::view('contacts', 'pages/contacts');
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('agents/{id}/contacts', [ContactController::class, 'create']);
Route::post('agents/{id}/contacts', [ContactController::class, 'store']);

/*
|--------------------------------------------------------------------------
| user
|--------------------------------------------------------------------------
|
*/

Route::get('agents/create', [\App\Http\Controllers\UserController::class, 'create']);
Route::post('agents/create', [\App\Http\Controllers\UserController::class, 'store']);

/*
|--------------------------------------------------------------------------
| agent
|--------------------------------------------------------------------------
|
*/

Route::get('agents', [AgentController::class, 'index']);
Route::get('agents/create', [AgentController::class, 'create']);
Route::post('agents', [AgentController::class, 'store']);
Route::get('agents/{id}', [AgentController::class, 'show']);

/*
|--------------------------------------------------------------------------
| cases
|--------------------------------------------------------------------------
|
*/

Route::get('cases/{id}/{act}', [CaseController::class, 'action']);
Route::get('cases/{id}/{act}', [CaseController::class, 'action']);
Route::get('/', [PageController::class, 'welcome']);
Route::get('cases', [CaseController::class, 'search']);
Route::get('cases/create', [CaseController::class, 'create']);
Route::post('cases', [CaseController::class, 'store']);
Route::get('cases/{id}', [CaseController::class, 'show']);


/*
|--------------------------------------------------------------------------
| pages & other
|--------------------------------------------------------------------------
|
*/
Route::view('abouts', 'pages/abouts');
Route::view('contacts', 'pages/contacts');
Route::post('/contacts', [ContactController::class, 'store']);


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
*/


Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);
Route::get('logout', function () {
    session::flush();
    auth::logout();
    return redirect('login');
});

/*
|--------------------------------------------------------------------------
| Admin panel Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('agents', \App\Http\Controllers\Admin\AgentController::class);
    Route::resource('cases', \App\Http\Controllers\Admin\CaseController::class);
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class);
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('users', \App\Http\Controllers\Admin\userController::class);

});
