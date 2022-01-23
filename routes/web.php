<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| test
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin_create', function () {
    return view('admin.create_case');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

Route::get('case_list', function () {
    return view('pages.case_list');
});

Route::view('shop','pages/shop');
Route::view('cart','pages/cart');
Route::view('cart_empty','pages/cart_empty');
Route::view('checkout','pages/checkout');
Route::view('gallery','pages/gallery');
Route::view('my_account','pages/my_account');
Route::view('shop_detail','pages/shop_detail');
Route::view('partner','pages/partner');
Route::view('services','pages/services');
Route::view('agent_list','pages/agent_list');
Route::view('agent_detail','pages/agent_detail');
Route::view('case_detail','pages/case_detail');
Route::view('about_us','pages/about_us');
Route::view('contact_us','pages/contact_us');
Route::view('create','pages/create_case');
Route::view('create_user','pages/create_user');
Route::view('cases','pages/cases');


/*
|--------------------------------------------------------------------------
| dev
|--------------------------------------------------------------------------
|
*/

Route::get('cases', [\App\Http\Controllers\CaseController::class , 'search']);
Route::get('case_list', [\App\Http\Controllers\CaseController::class , 'allCases']);
Route::get('/', [\App\Http\Controllers\CaseController::class , 'lastCases']);
//Route::get('/', [\App\Http\Controllers\CaseController::class , 'indexSearch']);

Route::post('/contact_us', [\App\Http\Controllers\ContactController::class , 'store']);


Route::get('agent_list', [\App\Http\Controllers\AgentController::class , 'allAgents']);
Route::get('agent_detail/{id}', [\App\Http\Controllers\AgentController::class , 'show']);
Route::get('case_detail/{id}', [\App\Http\Controllers\CaseController::class , 'show']);
Route::get('shop_detail/{id}', [\App\Http\Controllers\ShopController::class , 'show']);
/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
*/
Route::get('login', [LoginController::class , 'login'])->name('login');
Route::get('register', [LoginController::class , 'register'])->name('register');
Route::post('login', [LoginController::class , 'login']);
Route::post('register', [LoginController::class , 'register']);
Route::get('logout',function (){
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
Route::get('/admin',[AdminController::class,'dashboard'])->middleware('auth');
Route::resource('/admin/contacts',\App\Http\Controllers\ContactController::class)->middleware('auth');
