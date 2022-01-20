<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/create', function () {
    return view('admin.create_case');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::get('create2', function () {
    return view('pages.create_case');
});
Route::get('about', function () {
    return view('pages.about_us');
});
Route::get('contact', function () {
    return view('pages.contact_us');
});
Route::get('agent', function () {
    return view('pages.agent_list');
});
Route::get('agent_detail', function () {
    return view('pages.agent_detail');
});
Route::get('case_list', function () {
    return view('pages.case_list');
});


Route::get('search', [\App\Http\Controllers\CaseController::class , 'search']);
Route::get('/', [\App\Http\Controllers\CaseController::class , 'lastCases']);
Route::post('/contact_us', [\App\Http\Controllers\ContactController::class , 'store']);


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
