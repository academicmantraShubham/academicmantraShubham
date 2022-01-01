<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ContentCategoryController;
use App\Http\Controllers\Admin\ContentTagController;
use App\Http\Controllers\Admin\ContentPageController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\BlogPageController;

//Website Controller
use App\Http\Controllers\Website\WebSiteController;


//Website Routes

Route::get('/clear-cache', function () {
	$exitCode = Artisan::call('cache:clear');
	dd('Cache cleared');
	// return what you want
});
// Route::view('/blog', '/website/pages/blog');

Route::get('/config-cache', function () {
	$exitCode = Artisan::call('config:cache');
	dd('Cache cleared');
	// return what you want
});

Auth::routes(['register' => false]);
Route::get('/blog', [WebSiteController::class, 'blog'])->name('blog');

Route::get('/', [WebSiteController::class, 'index'])->name('home');
Route::get('/about', [WebSiteController::class, 'about'])->name('about');
Route::get('/contact', [WebSiteController::class, 'contact'])->name('contact');
Route::get('/price', [WebSiteController::class, 'price'])->name('price');
Route::get('/privacy-policy', [WebSiteController::class, 'privacyPolicy'])->name('privacy-policy');


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }
    return redirect()->route('admin.home');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Blog
    Route::resource('blog_content', BlogPageController::class);
    // Home Pages
    Route::delete('homepage/destroy', [HomepageController::class, 'massDestroy'])->name('homepage.massDestroy');
    Route::resource('homepage', HomepageController::class);
    Route::get('homepage/{id}/sub', [HomepageController::class, 'subIndex'])->name('homepage.sub');

    // writers
    Route::get('writers', [HomepageController::class, 'writers'])->name('writers');
    //faqs
    Route::get('faqs', [HomepageController::class, 'faqs'])->name('faqs');

    // Menus
    Route::delete('menu/destroy', [MenuController::class, 'massDestroy'])->name('menu.massDestroy');
    Route::resource('menu', MenuController::class);

    //Sub Menus
    Route::get('menu/{id}/sub', [MenuController::class, 'subIndex'])->name('menu.sub');
    Route::get('menu/{id}/sub/create', [MenuController::class, 'subCreate'])->name('menu.sub.create');
    Route::get('menu/{id}/sub/edit', [MenuController::class, 'subEdit'])->name('menu.sub.edit');

    //Child Menus
    Route::get('menu/{id}/child', [MenuController::class, 'childIndex'])->name('menu.child');
    Route::get('menu/{id}/child/create', [MenuController::class, 'childCreate'])->name('menu.child.create');
    Route::get('menu/{id}/child/edit', [MenuController::class, 'childEdit'])->name('menu.child.edit');

    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Content Category
    Route::delete('content-categories/destroy',[ContentCategoryController::class, 'massDestroy'])->name('content-categories.massDestroy');
    Route::resource('content-categories', ContentCategoryController::class);


    // Content Tag
    Route::delete('content-tags/destroy', [ContentTagController::class, 'massDestroy'])->name('content-tags.massDestroy');
    Route::resource('content-tags', ContentTagController::class);

    // Content Page
    Route::delete('content-pages/destroy', [ContentPageController::class, 'massDestroy'])->name('content-pages.massDestroy');
    Route::post('content-pages/media', [ContentPageController::class, 'storeMedia'])->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', [ContentPageController::class, 'storeCKEditorImages'])->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', ContentPageController::class);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password', [ChangePasswordController::class, 'update'])->name('password.update');
        Route::post('profile', [ChangePasswordController::class, 'updateProfile'])->name('password.updateProfile');
        Route::post('profile/destroy', [ChangePasswordController::class, 'destroy'])->name('password.destroyProfile');
    }
});

Route::get('/{slug}', [WebSiteController::class, 'post'])->name('post');
