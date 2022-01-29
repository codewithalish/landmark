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
| test & dev
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

Route::get('cases', function () {
    return view('cases/cases');
});
//
//Route::get('shop_detail/{id}', [ShopController::class , 'show']);
//Route::get('shop', [ShopController::class , 'index']);

//Route::view('shop','pages/shop');
//Route::view('cart','pages/cart');
//Route::view('cart_empty','pages/cart_empty');
//Route::view('checkout','pages/checkout');
//Route::view('gallery','pages/gallery');

Route::view('agents','agents/agents');
Route::view('agent_detail','agents/agent_detail');
Route::view('cases','cases/cases');
Route::view('create','pages/create_case');
Route::view('cases','cases/cases');

/*
|--------------------------------------------------------------------------
|shop
|--------------------------------------------------------------------------
|
*/



/*
|--------------------------------------------------------------------------
| pages
|--------------------------------------------------------------------------
|
*/
Route::get('partner', [\App\Http\Controllers\PartnerController::class , 'partner']);
Route::get('gallery', [\App\Http\Controllers\GalleryController::class , 'gallery']);
Route::view('services','pages/services');



/*
|--------------------------------------------------------------------------
| need to sort
|--------------------------------------------------------------------------
|
*/
Route::view('register_user','pages/register_user');
Route::get('register_user/create', [\App\Http\Controllers\UserController::class , 'create']);
Route::post('register_user', [\App\Http\Controllers\UserController::class , 'store']);




/*
|--------------------------------------------------------------------------
| agent
|--------------------------------------------------------------------------
|
*/

Route::get('agents', [AgentController::class , 'allAgents']);
Route::get('agents/create', [AgentController::class , 'create']);
Route::post('agents', [AgentController::class , 'store']);
Route::get('agents/{id}', [AgentController::class , 'show']);
Route::get('agents/{id}/contacts', [ContactController::class , 'create']);
Route::post('agents/{id}/contacts', [ContactController::class , 'store']);


/*
|--------------------------------------------------------------------------
| cases
|--------------------------------------------------------------------------
|
*/


Route::get('/', [PageController::class , 'welcome']);
Route::get('cases', [CaseController::class , 'search']);
Route::get('cases/create', [CaseController::class , 'create']);
Route::post('cases', [CaseController::class , 'store']);
Route::get('cases/{id}', [CaseController::class , 'show']);



/*
|--------------------------------------------------------------------------
| pages & other
|--------------------------------------------------------------------------
|
*/
Route::view('about_us','pages/about_us');
Route::view('contact_us','pages/contact_us');
Route::post('/contact_us', [ContactController::class , 'store']);


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
*/

Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

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
Route::resource('/admin/cases',\App\Http\Controllers\admin\CaseController::class)->middleware('auth');
