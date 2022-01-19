<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('pages.index');
//});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('create', function () {
    return view('pages.create_case');
});


Route::get('search', [\App\Http\Controllers\CaseController::class , 'search']);
Route::get('/', [\App\Http\Controllers\CaseController::class , 'lastCases']);
