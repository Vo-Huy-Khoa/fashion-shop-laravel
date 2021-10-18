<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassifyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Classify;
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

Route::get('/', function () {
    return view('welcome');
});


//Route Login
Route::get('admin/login',[UserController::class,'getAdmin_Login']);
Route::post('admin/login',[UserController::class,'postAdmin_login'])->name('login');

//Route Register
Route::get('admin/register',[UserController::class,'getAdmin_Register']);
Route::post('admin/register',[UserController::class,'postAdmin_register'])->name('register');

//Route Index


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
    Route::get('index',[UserController::class,'__construct'])->name('index');
    
    Route::prefix('users')->group(function () {
        Route::get('list',[UserController::class,'list'])->name('users_list');
        Route::get('add',[UserController::class,'add'])->name('users_add');
        Route::post('add',[UserController::class,'postAdd'])->name('users_add');

        Route::get('edit/{id}',[UserController::class,'edit']);
        Route::post('edit/{id}',[UserController::class,'postEdit'])->name('edit');

        Route::get('delete/{id}',[UserController::class,'delete'])->name('delete');

    });

    Route::prefix('classify')->group(function () {
        Route::get('list',[ClassifyController::class,'list'])->name('classify_list');
        Route::get('add',[ClassifyController::class,'add'])->name('classify_add');
        Route::post('add',[ClassifyController::class,'postAdd'])->name('classify_add');

        Route::get('edit/{id}',[ClassifyController::class,'edit'])->name('classify_edit');
        Route::post('edit/{id}', [ClassifyController::class,'postEdit'])->name('classify_edit');

        Route::get('delete/{id}',[ClassifyController::class,'delete']);

    });


    Route::prefix('categories')->group(function () {
        Route::get('list', [CategoryController::class,'list'])->name('categories_list');
        Route::get('add',[CategoryController::class,'add'])->name('categories_add');
        Route::post('add',[CategoryController::class,'postAdd'])->name('categories_add');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('categories_edit');
        Route::post('edit/{id}', [CategoryController::class,'postEdit'])->name('categories_edit');
        Route::get('delete/{id}', [CategoryController::class,'delete']);
    });


    Route::prefix('products')->group(function () {
        Route::get('list',[ProductController::class,'list'])->name('products_list');
        Route::get('add',[ProductController::class,'add'])->name('products_add');
        Route::post('add',[ProductController::class,'postAdd']);
        Route::get('edit/{id}', [ProductController::class,'edit']);
        Route::post('edit/{id}',[ProductController::class,'postEdit']);
        Route::get('delete/{id}',[ProductController::class,'delete']);
        Route::get('delete_comments/{id}',[ProductController::class,'delete_comments']);

    });

    });



    Route::prefix('oders')->group(function () {
        Route::get('list',[OderController::class,'list'])->name('oders_list');
        Route::get('edit/{id}',[OderController::class,'edit']);
        Route::post('edit/{id}',[OderController::class,'postEdit']);
        Route::get('delete/{id}',[OderController::class,'delete']);
    });


    
});