<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassifyController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Oder_DetailController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\UserController;
use App\Models\Brand;
use App\Models\Classify;
use App\Models\Shipping;
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

Route::get('/', [PagesController::class,'home'])->name('admin_home');


//Route Login
Route::get('admin/login',[UserController::class,'getAdmin_Login']);
Route::post('admin/login',[UserController::class,'postAdmin_login'])->name('login');
Route::get('admin/login/facebook', [LoginController::class,'redirectToFacebook']);
Route::get('admin/login/facebook/callback', [LoginController::class,'handleFacebookCallback']);

Route::get('admin/login/google', [LoginController::class,'redirectToGoogle']);
Route::get('admin/login/google/callback', [LoginController::class,'handleGoogleCallback']);

//Route Register
Route::get('admin/register',[UserController::class,'getAdmin_Register']);
Route::post('admin/register',[UserController::class,'postAdmin_register'])->name('register');
Route::get('admin/logout',[UserController::class,'Admin_Logout'])->name('admin_logout');
//Route Index


Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {
    Route::get('home',[UserController::class,'home'])->name('home');
    
    Route::prefix('users')->group(function () {
        Route::get('list',[UserController::class,'list'])->name('users_list');
        Route::get('add',[UserController::class,'add'])->name('users_add');
        Route::post('add',[UserController::class,'postAdd'])->name('users_add');
        Route::get('edit/{id}',[UserController::class,'edit']);
        Route::post('edit/{id}',[UserController::class,'postEdit'])->name('edit');
        Route::get('delete/{id}',[UserController::class,'delete'])->name('delete');
       Route::get('profile/{id}',[UserController::class,'getAdmin_Profile']);
       Route::post('profile/{id}',[UserController::class,'postAdmin_Profile']);

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



    Route::prefix('attributes')->group(function () {
        Route::get('list',[AttributeController::class,'list']);
        Route::get('add',[AttributeController::class,'getAdd']);
        Route::post('add',[AttributeController::class,'postAdd']);
        Route::get('edit/{id}',[AttributeController::class,'getEdit']);
        Route::post('edit/{id}', [AttributeController::class,'postEdit']);
        Route::get('delete/{id}',[AttributeController::class,'delete']);

    });

    Route::prefix('oder_details')->group(function () {
        Route::get('list',[Oder_DetailController::class,'list'])->name('oder_details_list');
        Route::get('delete/{id}',[Oder_DetailController::class,'delete']);
        Route::get('oder_close/{id}',[Oder_DetailController::class,'oder_close']);
        Route::get('un_oder_close/{id}',[Oder_DetailController::class,'un_oder_close']);

    });

    Route::prefix('blogs')->group(function () {
        Route::get('list', [BlogController::class,'list'])->name('blogs_list');
        Route::get('add',[BlogController::class,'getAdd'])->name('blogs_add');
        Route::post('add',[BlogController::class,'postAdd']);
        Route::get('edit/{id}',[BlogController::class,'getEdit']);
        Route::post('edit/{id}', [BlogController::class,'postEdit']);
        Route::get('delete/{id}', [BlogController::class,'delete']);
    });

    Route::prefix('message')->group(function () {
        Route::get('list',[MessageController::class,'list']);
    });

    });






    
});



// Route User


Route::get('user/login',[UserController::class,'getUsers_login'])->name('users_login');
Route::post('user/login',[UserController::class,'postUsers_login'])->name('users_login');

Route::get('user/register',[UserController::class,'getUsers_Register'])->name('users_register');
Route::post('user/register',[UserController::class,'postUsers_Register'])->name('users_register');

Route::get('users/logout',[UserController::class,'users_logout'])->name('users_logout');

Route::get('home',[PagesController::class,'home']);

Route::prefix('user')->group(function () {
    Route::get('home',[PagesController::class,'home'])->name('user_home');
    Route::get('shop',[PagesController::class,'shop'])->name('user_shop');
    Route::get('blog',[PagesController::class,'blog'])->name('user_blog');
    Route::get('blog_details/{id}',[PagesController::class,'blog_details']);

    Route::get('contact',[PagesController::class,'contact'])->name('user_contact');
    Route::get('products_details/{id}',[PagesController::class,'products_details']);
    Route::get('shop_cart',[PagesController::class,'shop_cart'])->name('shop_cart');
    Route::get('check_out',[PagesController::class,'check_out'])->name('check_out');
    Route::get('profile_edit/{id}',[PagesController::class,'getProfile_Edit']);
    Route::post('profile_edit/{id}', [PagesController::class,'postProfile_Edit']);

    Route::post('search',[PagesController::class,'Search']);
    Route::get('search/categories/{id}',[PagesController::class,'Search_categories']);
    Route::get('search/color/{id}/{value}',[PagesController::class,'Search_color']);
    Route::get('search/classify/{id}',[PagesController::class,'Search_classify']);
    Route::get('Search_categories_blogs/{id}',[PagesController::class,'Search_categories_blogs']);



    Route::post('search_blogs',[PagesController::class,'Search_blogs']);

    Route::get('AddToCart/{product_id}',[OderController::class,'AddToCart']);
    Route::post('AddToCart_Detail/{id}',[OderController::class,'AddToCart_Detail']);
    Route::get('out_cart',[Oder_DetailController::class,'out_cart'])->name('out_cart');


    Route::post('shipping',[ShippingController::class,'postShipping'])->name('shipping');

    Route::post('comments/{id}',[CommentController::class,'postcomments']);

    Route::post('message',[MessageController::class,'send'])->name('messages');

    Route::get('oder/delete/{id}',[OderController::class,'delete']);




});