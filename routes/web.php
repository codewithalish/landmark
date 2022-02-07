<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\PageController;
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

Route::get('cases', function () {
    return view('cases/cases');
});

Route::view('/','pages/index');
Route::view('shop','pages/shop');
Route::view('cart','pages/cart');
Route::view('cart_empty','pages/cart_empty');
Route::view('checkout','pages/checkout');
Route::view('gallery','pages/gallery');
Route::view('my_account','pages/my_account');
Route::view('shop_detail','pages/shop_detail');
Route::view('partner','pages/partner');
Route::view('services','pages/services');
Route::view('agents','agents/agents');
Route::view('agent_detail','agents/agent_detail');
Route::view('case_detail','cases/case_detail');
Route::view('create','pages/create_case');
Route::view('create_user','pages/create_user');
Route::view('cases','cases/cases');

/*
|--------------------------------------------------------------------------
| agent
|--------------------------------------------------------------------------
|
*/
Route::get('agents', [AgentController::class , 'allAgents']);
Route::get('agent_detail/{id}', [AgentController::class , 'show']);

/*
|--------------------------------------------------------------------------
| cases
|--------------------------------------------------------------------------
|
*/
Route::get('/', [PageController::class , 'welcome']);

Route::get('cases', [CaseController::class , 'search']);
Route::get('case_detail/{id}', [CaseController::class , 'show']);

/*
|--------------------------------------------------------------------------
|contact and about
|--------------------------------------------------------------------------
|
*/
Route::view('about_us','pages/about_us');
Route::view('contact_us','pages/contact_us');
Route::post('/contact_us', [ContactController::class , 'store']);
/*
|--------------------------------------------------------------------------
|shop
|--------------------------------------------------------------------------
|
*/


Route::get('shop_detail/{id}', [ShopController::class , 'show']);
Route::get('shop', [ShopController::class , 'index']);


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
*/
Route::get('login', [LoginController::class , 'login'])->name('login');
Route::get('register', [LoginController::class , 'create'])->name('register');
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
Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class,'dashboard'])->middleware('auth');
Route::resource('/admin/contacts',\App\Http\Controllers\ContactController::class)->middleware('auth');
