<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::redirect('/', '/blog-cms');
Route::get('/blog-cms', [BlogController::class, 'index'] )->name('blog.index');
Route::get('/blog-cms/login', [BlogController::class, 'loginForm'] )->name('blog.loginForm');
Route::get('/blog-cms/register', [BlogController::class, 'register'] )->name('blog.register');
Route::post('/blog-cms/register', [BlogController::class, 'registerStore'] )->name('blog.registerStore');
Route::post('/blog-cms/login', [BlogController::class, 'login'] )->name('blog.login');
//user panel
Route::get('/blog-cms/profile', [BlogController::class, 'profileShow'] )->name('blog.profileShow');
Route::get('/blog-cms/upload', [BlogController::class, 'uploadBlog'] )->name('blog.upload');
Route::post('/blog-cms/upload', [BlogController::class, 'storeBlog'] )->name('blog.storeBlog');
Route::get('/blog-cms/{id}', [BlogController::class,'editBlog'])->name('blog.editBlog');
Route::put('/blog-cms/{id}', [BlogController::class,'updateBlog'])->name('blog.updateBlog');
Route::delete('/blog-cms/{id}', [BlogController::class,'destroyBlog'])->name('blog.destroyBlog');
//destination route
Route::get('/index', [DestinationController::class, 'index'] )->name('destination.index');
Route::get('/destination', [DestinationController::class, 'create'] )->name('destination.create');
Route::post('/destination', [DestinationController::class, 'store'] )->name('destination.store');
Route::get('/destination/view/{id}', [DestinationController::class, 'viewDest'] )->name('destination.viewDest');
Route::get('/edit/{id}', [DestinationController::class, 'edit'] )->name('destination.edit');
Route::put('/update/{id}', [DestinationController::class, 'update'] )->name('destination.update');