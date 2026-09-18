<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Client Side Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [ClientController::class, 'showHome'])
    ->name('home');

Route::get('/about', [ClientController::class, 'showAbout'])
    ->name('about');

Route::get('/services', [ClientController::class, 'showServices'])
    ->name('services');

Route::get('/pricing', [ClientController::class, 'showPricing'])
    ->name('pricing');

Route::get('/blog', [ClientController::class, 'showBlog'])
    ->name('blog');

Route::get('/contact', [ClientController::class, 'showContact'])
    ->name('contact');

Route::post('/store/contact', [ClientController::class, 'storecontact'])
    ->name('storecontact');

Route::get('/service-detail/{id}', [ClientController::class, 'serviceDetail'])
    ->name('service.detail');

Route::get('/blog-detail/{id}', [ClientController::class, 'blogDetail']) 
    ->name('blog.detail');


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [ClientController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [ClientController::class, 'login'])
    ->name('login.submit');


/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [ClientController::class, 'logout'])
    ->name('logout');



/*
|--------------------------------------------------------------------------
| Admin Side Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


Route::get('/dashboard', [AdminController::class, 'dashboard'])
    ->name('dashboard.home');


/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/blogs/create', [AdminController::class, 'addblog'])
    ->name('admin.blogs.create');

Route::post('/admin/blogs/store', [AdminController::class, 'storeblog'])
    ->name('admin.blogs.store');

Route::get('/admin/blogs/manage', [AdminController::class, 'manageBlogs'])
    ->name('admin.blogs.manage');

Route::get('/admin/blogs/{id}/edit', [AdminController::class, 'editblog'])
    ->name('admin.blogs.edit');

Route::put('/admin/blogs/{id}', [AdminController::class, 'updateblog'])
    ->name('admin.blogs.update');

Route::delete('/admin/blogs/{id}/delete', [AdminController::class, 'deleteblog'])
    ->name('admin.blogs.delete');


/*
|--------------------------------------------------------------------------
| Service Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/services/create', [AdminController::class, 'addservice'])
    ->name('admin.services.create');

Route::post('/admin/services/store', [AdminController::class, 'storeservice'])
    ->name('admin.services.store');

Route::get('/admin/service/manage', [AdminController::class, 'manageservice'])
    ->name('admin.service.manage');

Route::get('/admin/service/{id}/edit', [AdminController::class, 'editservice'])
    ->name('admin.service.edit');

Route::put('/admin/service/{id}/update', [AdminController::class, 'updateservice'])
    ->name('admin.service.update');

Route::delete('/admin/service/{id}/delete', [AdminController::class, 'deleteservice'])
    ->name('admin.service.delete');


/*
|--------------------------------------------------------------------------
| Website Settings Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/website-settings', [AdminController::class, 'settings'])
    ->name('admin.website.settings');

Route::post('/admin/website-settings/save', [AdminController::class, 'savesettings'])
    ->name('admin.website.settings.save');


/*
|--------------------------------------------------------------------------
| Contact Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/contacts', [AdminController::class, 'contactslist'])
    ->name('admin.contacts');

});