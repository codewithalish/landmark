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
| spatie
|--------------------------------------------------------------------------
|
|
*/


Route::get('/spatie/add-roles', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'addRoles']);
Route::get('/spatie/updateRoles', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'updateRoles']);
Route::get('/spatie/assign-roles', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'assignRoles']);
Route::get('/spatie/showRoles', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'showRoles']);
Route::get('/spatie/getAllPermissions', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'getAllPermissions']);
Route::get('/spatie/users', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'users']);
Route::get('/spatie/usersByPermission', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'usersByPermission']);
Route::get('/spatie/createUser', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'createUser']);
Route::get('/spatie/afterLogin', [\App\Http\Controllers\Dev\SpatiePermissionController::class, 'afterLogin']);





Route::get('/spatie/role', [\App\Http\Controllers\UserPermissionController::class, 'addRolePermission']);

/*
|--------------------------------------------------------------------------
| test & dev
|--------------------------------------------------------------------------
|
|
*/
Route::get('/live', [\App\Http\Controllers\Dev\TestController::class, 'livewire']);

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
Route::get('/', [PageController::class, 'index']);
Route::post('/', [\App\Http\Controllers\PageController::class, 'store']);

Route::get('/admin_create', function () {
    return view('admin.create_case');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

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
Route::get('users/create', [\App\Http\Controllers\UserController::class , 'create']);
Route::post('users/create', [\App\Http\Controllers\UserController::class , 'store']);

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

Route::get('cases/{id}/{act}', [CaseController::class , 'action']);
Route::get('cases', [CaseController::class , 'search']);
Route::get('cases/create', [CaseController::class , 'create']);
Route::post('cases', [CaseController::class , 'store']);
Route::get('cases/{id}', [CaseController::class , 'show']);

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
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('bookmarks', \App\Http\Controllers\Admin\BookmarkController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('comments', \App\Http\Controllers\Admin\CommentController::class);
    Route::resource('features', \App\Http\Controllers\Admin\FeatureController::class);
    Route::resource('feedbacks', \App\Http\Controllers\Admin\FeedbackController::class);
    Route::resource('newsletters', \App\Http\Controllers\Admin\NewsletterController::class);
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
    Route::resource('variables', \App\Http\Controllers\Admin\VariableController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);


});
