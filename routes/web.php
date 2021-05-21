<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about/{id}', [AboutController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category-list', [CategoryController::class, 'Category_list'])->name('CategoryList');
Route::post('/category-post', [CategoryController::class, 'Category_post'])->name('CategoryPost');
Route::get('/category-delete/{id}', [CategoryController::class, 'Category_delete'])->name('CategoryDelete');

Route::view('add', 'UserInput');

Route::post('UserController', [UserController::class, 'addData']);

Route::get('show', [UserController::class, 'showData']);
Route::get('showMarried', [UserController::class, 'showMarried']);
Route::get('showUnmarried', [UserController::class, 'showUnmarried']);


Route::get('delete/{id}', [UserController::class, 'delete']);
Route::get('edit/{id}', [UserController::class, 'edit']);

