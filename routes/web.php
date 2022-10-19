<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
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

Route::get('/', [IndexController::class, 'index']);
Route::post('/buy-foods', [IndexController::class, 'buy_foods']);
Route::get('/thanks', [IndexController::class, 'thanks']);
//product
Route::get('list', [ProductController::class, 'index']);
Route::get('add', [ProductController::class, 'add']);
Route::post('save', [ProductController::class, 'save']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('update/{id}', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'delete']);
//home

Route::post('login-form',[RegisterController::class,'login_form']);
Route::get('index1',[ProductController:: class,'index1']);
Route::get('about1', [ProductController::class, 'about']);
Route::get('blog1',[ProductController:: class,'blog']);
Route::get('contact1',[ProductController::class,'contact']);
Route::get('signin',[ProductController::class,'login']);
Route::get('logout',[RegisterController::class,'logout']);

Route::get('recipe1',[ProductController::class,'recipe']);
Route::get('admin',[AdminController:: class, 'dashboard']);
//producers
Route::get('producers-list', [ProducerController::class, 'index']);
Route::get('producers-add', [ProducerController::class, 'add']);
Route::post('producers-save', [ProducerController::class, 'save']);
Route::get('producers-edit/{id}', [ProducerController::class, 'edit']);
Route::post('producers-update/{id}', [ProducerController::class, 'update']);
Route::get('producers-delete/{id}', [ProducerController::class, 'delete']);



//signin
Route::get('register_customer', [ProductController::class,'register']);
Route::post('register-form', [RegisterController::class,'register_form']);
Route::get('information/{id}', [RegisterController::class,'information']);
Route::post('information-form/{id}', [RegisterController::class,'information_form']);
Route::get('customer-lists', [RegisterController::class,'customer_lists']);
Route::get('delete-customer/{id}', [RegisterController::class,'delete_customer']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Quản lí nhân viên, users
Route::get('add-user',[RolesController::class,'add_user']);
Route::get('create-role/{admin_id}',[RolesController::class,'create_role']);
Route::post('assign-role/{admin_id}',[RolesController::class,'assign_role']);

Route::post('post-user',[RolesController::class,'post_user']);
//manage users
Route::get('users',[RolesController::class,'index']);
Route::get('delete-user/{id}',[RolesController::class,'delete_user']);
Route::get('edit-users/{id}',[RolesController::class,'edit_users']);

Route::post('update-users/{id}',[RolesController::class,'update_users']);