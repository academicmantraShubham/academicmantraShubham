<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BlogPageController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Website\WebSiteController;
use App\Http\Controllers\Admin\ContentTagController;
use App\Http\Controllers\Admin\ContentPageController;
use App\Http\Controllers\Admin\PermissionsController;

//Website Controller
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\ContentCategoryController;


//Website Routes
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    dd('Cache cleared');
});

Route::get('detail/{id}/', [WebSiteController::class, 'blog'])->name('website.pages.detail');

Auth::routes(['register' => false]);

Route::get('/', [WebSiteController::class, 'index'])->name('home');
Route::get('/services', [WebSiteController::class, 'services'])->name('services');
Route::get('/about', [WebSiteController::class, 'about'])->name('about');
Route::get('/contact', [WebSiteController::class, 'contact'])->name('contact');
Route::get('/price', [WebSiteController::class, 'price'])->name('price');
Route::get('/privacy-policy', [WebSiteController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-&-condition', [WebSiteController::class, 'terms'])->name('terms-condition');
Route::get('/blogs', [WebSiteController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [WebSiteController::class, 'blog'])->name('blog');
Route::get('/category/{slug}', [WebSiteController::class, 'category'])->name('category');
Route::get('/get-your-essay', [WebSiteController::class, 'order'])->name('order');
Route::post('/place-order', [WebSiteController::class, 'placeOrder'])->name('place-order');
Route::get('/experts', [WebSiteController::class, 'experts'])->name('experts');
Route::get('/locations', [WebSiteController::class, 'locations'])->name('locations');
Route::get('/reviews', [WebSiteController::class, 'reviews'])->name('reviews');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }
    return redirect()->route('admin.home');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    // Blog
    Route::resource('blog_content', BlogPageController::class);

    // Home Pages
    Route::delete('homepage/destroy', [HomepageController::class, 'massDestroy'])->name('homepage.massDestroy');
    Route::resource('homepage', HomepageController::class);
    Route::get('homepage/{id}/sub', [HomepageController::class, 'subIndex'])->name('homepage.sub');
    Route::post('homepage-sortable', [HomepageController::class, 'updatePosition'])->name('homepage.updatePosition');

    // writers
    Route::get('writers', [HomepageController::class, 'writers'])->name('writers');

    //faqs
    Route::get('faqs', [HomepageController::class, 'faqs'])->name('faqs');

    //why choose us
    Route::get('why-choose-us', [HomepageController::class, 'whyChooseUs'])->name('why-choose-us');

    //samples

    // Route::get('samples', [HomepageController::class, 'samples'])->name('samples');
    Route::get('reviews', [HomepageController::class, 'samples'])->name('samples');

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

    //Child SUb Menus
    Route::get('menu/{id}/child-sub', [MenuController::class, 'childSubIndex'])->name('menu.child-sub');
    Route::get('menu/{id}/child-sub/create', [MenuController::class, 'childSubCreate'])->name('menu.child-sub.create');
    Route::get('menu/{id}/child-sub/edit', [MenuController::class, 'childSubEdit'])->name('menu.child-sub.edit');

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
    Route::delete('content-categories/destroy', [ContentCategoryController::class, 'massDestroy'])->name('content-categories.massDestroy');
    Route::resource('content-categories', ContentCategoryController::class);


    // Content Tag 
    Route::delete('content-tags/destroy', [ContentTagController::class, 'massDestroy'])->name('content-tags.massDestroy');
    Route::resource('content-tags', ContentTagController::class);

    // Content Page
    Route::delete('content-pages/destroy', [ContentPageController::class, 'massDestroy'])->name('content-pages.massDestroy');
    Route::post('content-pages/media', [ContentPageController::class, 'storeMedia'])->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', [ContentPageController::class, 'storeCKEditorImages'])->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', ContentPageController::class);
    Route::post('blog-pages', [ContentPageController::class, 'blogsStore'])->name('content-pages.blogsStore');
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
