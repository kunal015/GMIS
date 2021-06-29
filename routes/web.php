<?php

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
Route::get('/', [App\Http\Controllers\StudentController::class, 'login']);
Route::post('register',[App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::post('/',[App\Http\Controllers\StudentController::class, 'adminlogin'])->name('adminlogin');
Route::get('login',[App\Http\Controllers\StudentController::class, 'login']);
Route::get('register',[App\Http\Controllers\StudentController::class, 'register'])->name('register');
Route::post('check',[App\Http\Controllers\StudentController::class, 'check'])->name('check');
Route::post('checknew',[App\Http\Controllers\StudentController::class, 'checknew'])->name('checknew');
Route::get('admindashboard',[App\Http\Controllers\StudentController::class, 'admindashboard']);
Route::get('profile',[App\Http\Controllers\StudentController::class, 'profile']);
Route::get('logout',[App\Http\Controllers\StudentController::class, 'logout']);
Route::get('delete/{id}',[App\Http\Controllers\StudentController::class, 'delete']);
Route::get('deleterole/{id}',[App\Http\Controllers\StudentController::class, 'deleterole']);
Route::get('deletepermission/{id}',[App\Http\Controllers\StudentController::class, 'deletepermission']);
Route::get('list',[App\Http\Controllers\StudentController::class, 'list']);
Route::get('addpermission',[App\Http\Controllers\StudentController::class, 'addpermission'])->name('addpermission');
Route::get('addrole',[App\Http\Controllers\StudentController::class, 'addrole'])->name('addrole');
Route::get('edit/{id}',[App\Http\Controllers\StudentController::class, 'showdata']);
Route::get('editrole/{id}',[App\Http\Controllers\StudentController::class, 'showroledata']);
Route::get('editpermission/{id}',[App\Http\Controllers\StudentController::class, 'showpermissiondata']);
Route::post('edit',[App\Http\Controllers\StudentController::class, 'update']);
Route::post('editrole',[App\Http\Controllers\StudentController::class, 'updaterole']);
Route::post('editpermission',[App\Http\Controllers\StudentController::class, 'updatepermission']);
Route::get('permission',[App\Http\Controllers\StudentController::class, 'permission'])->name('permission');
Route::post('permission',[App\Http\Controllers\StudentController::class, 'store_role_permission'])->name('store_role_permission');
Route::post('addrole',[App\Http\Controllers\StudentController::class, 'storerole'])->name('storerole');
Route::post('addpermission',[App\Http\Controllers\StudentController::class, 'storepermission'])->name('storepermission');
