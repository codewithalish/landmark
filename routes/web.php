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
use \Illuminate\Support\Facades\Mail;

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
Route::resource('tests', App\Http\Controllers\Dev\TestController::class)->only(['store', 'index']);

#-----------------livewire-----------------
Route::get('/live', [\App\Http\Controllers\Dev\TestController::class, 'livewire']);

#-----------------email--------------------
Route::get('/test/mail', function () {

    $emails = \App\Models\User::query()->pluck('email');

    foreach ($emails as $email) {
        \Illuminate\Support\Facades\Mail::send('emails.first', [], function ($message) use ($email) {
            $message->to($email, 'landmark')->subject('test mail');
            $message->from('fa.mozaffarii111@gmail.com', 'landmark');
        });
    }
});

#--------------relation----------------
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
| currentUser
|--------------------------------------------------------------------------
|
*/
Route::prefix('users/current')->middleware('auth')->group(function () {
    Route::get('bookmarks', [\App\Http\Controllers\UserController::class, 'bookmarks']);
    Route::get('/', [\App\Http\Controllers\UserController::class, 'show']);
    Route::get('/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit']);
    Route::put('/update', [\App\Http\Controllers\UserController::class, 'update']);
});


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
Route::get('cases', [CaseController::class, 'search']);
Route::get('cases/create', [CaseController::class, 'create']);
Route::post('cases', [CaseController::class, 'store']);
Route::get('cases/{id}', [CaseController::class, 'show']);
Route::get('/bookmarks',[\App\Http\Controllers\UserController::class,'bookmarks']);
Route::get('/cases/myCases',[CaseController::class,'myCases']);

/*
|--------------------------------------------------------------------------
|users Authentication Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/users/login', [LoginController::class, 'login'])->name('login');
Route::get('/users/register', [LoginController::class, 'create']);
Route::post('/users/login', [LoginController::class, 'checklogin']);
Route::post('/users/register', [LoginController::class, 'register']);
Route::get('/users/logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
|Admin Authentication Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->group(function () {
    Route::get('login', [\App\Http\Controllers\admin\LoginController::class, 'login'])->name('login');
    Route::get('register', [\App\Http\Controllers\admin\LoginController::class, 'create']);
    Route::post('login', [\App\Http\Controllers\admin\LoginController::class, 'checklogin']);
    Route::post('register', [\App\Http\Controllers\admin\LoginController::class, 'register']);
    Route::get('logout', [\App\Http\Controllers\admin\LoginController::class, 'logout']);
});

/*
|--------------------------------------------------------------------------
| Admin panel Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard']);

    Route::get('assign', [\App\Http\Controllers\admin\RoleController::class, 'assignPermissionForm']);
    Route::post('assign', [\App\Http\Controllers\admin\RoleController::class, 'syncPermission']);

    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('menu', \App\Http\Controllers\Admin\MenuController::class);
    Route::resource('agents', \App\Http\Controllers\Admin\AgentController::class);
    Route::resource('cases', \App\Http\Controllers\Admin\CaseController::class);
    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class);
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
    Route::resource('bookmarks', \App\Http\Controllers\Admin\BookmarkController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('comments', \App\Http\Controllers\Admin\CommentController::class);
    Route::resource('features', \App\Http\Controllers\Admin\FeatureController::class);
    Route::resource('feedbacks', \App\Http\Controllers\Admin\FeedbackController::class);
    Route::resource('newsletters', \App\Http\Controllers\Admin\NewsletterController::class);
    Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
    Route::resource('variables', \App\Http\Controllers\Admin\VariableController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('assign', \App\Http\Controllers\admin\AssignController::class);
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);


});


/*
|--------------------------------------------------------------------------
| newsletter mail
|--------------------------------------------------------------------------
|
*/

Route::get('/admin/newsletters/create', function () {
    $emails = \App\Models\Newsletter::query()->pluck('email');

    foreach ($emails as $email) {

        $address = new \App\Mail\NewsletterMail($email);
        Mail::send($address);
    }
});

