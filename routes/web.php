<?php

use App\Http\Controllers\userController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication;
use App\Http\Controllers\makeAdmin;

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
Route::get('/login',[authentication::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/register',[authentication::class,'register'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[authentication::class,'registerUser'])->name('register-user');
Route::post('/login-user',[authentication::class,'userLogin'])->name('login-user');
Route::get('/dashboard',[userController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/adminDashboard',[authentication::class,'adminDashboard'])->middleware('adminCheck');
Route::get('/logout',[authentication::class,'logout']);
Route::get('/admin/make-admin/{id}', [makeAdmin::class, 'makeAdmin'])->name('admin.make-admin')->Middleware('adminCheck');
Route::get('/admin/show-unApproved', [makeAdmin::class, 'usersNotApproved'])->Middleware('adminCheck');
Route::get('/admin/make-approve/{id}', [makeAdmin::class, 'makeApprove'])->name('admin.make-approve')->Middleware('adminCheck');
Route::get('/admin/make-user/{id}', [makeAdmin::class, 'makeUser'])->name('admin.make-user')->Middleware('adminCheck');
Route::get('/admin/delete-user/{id}', [makeAdmin::class, 'deleteUser'])->name('admin.delete-admin')->Middleware('adminCheck');
Route::get('/admin/users', [makeAdmin::class, 'users'])->name('admin.make-admin')->Middleware('adminCheck');
Route::get('/edit/{id}', [userController::class, 'profileEdit']);
Route::post('/editConfirmed', [userController::class, 'editConirmed'])->name('editConfirmed');
Route::get('/addBs/{id}', [userController::class, 'addBs'])->middleware('isLoggedIn');
Route::get('/deleteBs/{id}', [userController::class, 'deleteBs'])->middleware('isLoggedIn');
Route::get('/addMs/{id}', [userController::class, 'addMs'])->middleware('isLoggedIn');
Route::get('/deleteMs/{id}', [userController::class, 'deleteMs'])->middleware('isLoggedIn');
Route::get('/addMa/{id}', [userController::class, 'addMa'])->middleware('isLoggedIn');
Route::get('/deleteMa/{id}', [userController::class, 'deleteMa'])->middleware('isLoggedIn');
Route::get('/addPhd/{id}', [userController::class, 'addPhd'])->middleware('isLoggedIn');
Route::get('/deletePhd/{id}', [userController::class, 'deletePhd'])->middleware('isLoggedIn');

