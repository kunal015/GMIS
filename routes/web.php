<?php

use Illuminate\Support\Facades\Route;
use App\Events\WebsocketDemoEvent;
use Illuminate\Http\Request;
use App\Http\Controllers;
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
Route::post('admin/register',[App\Http\Controllers\StudentController::class, 'store'])->name('store');
Route::get('admin/login',[App\Http\Controllers\StudentController::class, 'login'])->name('login');
Route::get('admin/register',[App\Http\Controllers\StudentController::class, 'register'])->name('register');
Route::post('admin/check',[App\Http\Controllers\StudentController::class, 'check'])->name('check');
Route::post('admin/checknew',[App\Http\Controllers\StudentController::class, 'checknew'])->name('checknew');
Route::get('admindashboard',[App\Http\Controllers\StudentController::class, 'admindashboard']);
Route::get('admin/profile',[App\Http\Controllers\StudentController::class, 'profile'])->name('profile');
Route::get('admin/logout',[App\Http\Controllers\StudentController::class, 'logout'])->name('logout');
Route::get('admin/studentlogout',[App\Http\Controllers\StudentController::class, 'studentlogout'])->name('studentlogout');
Route::get('admin/delete/{id}',[App\Http\Controllers\StudentController::class, 'delete']);
Route::get('admin/deleterole/{id}',[App\Http\Controllers\StudentController::class, 'deleterole']);
Route::get('admin/deletepermission/{id}',[App\Http\Controllers\StudentController::class, 'deletepermission']);
Route::get('admin/list',[App\Http\Controllers\StudentController::class, 'list'])->name('list');
Route::get('admin/addpermission',[App\Http\Controllers\StudentController::class, 'addpermission'])->name('addpermission');
Route::get('admin/addrole',[App\Http\Controllers\StudentController::class, 'addrole'])->name('addrole');
Route::get('admin/edit/{id}',[App\Http\Controllers\StudentController::class, 'showdata']);
Route::get('admin/editrole/{id}',[App\Http\Controllers\StudentController::class, 'showroledata']);
Route::get('admin/editpermission/{id}',[App\Http\Controllers\StudentController::class, 'showpermissiondata']);
Route::post('admin/edit',[App\Http\Controllers\StudentController::class, 'update'])->name('update');
Route::post('admin/editrole',[App\Http\Controllers\StudentController::class, 'updaterole'])->name('updaterole');
Route::post('admin/editpermission',[App\Http\Controllers\StudentController::class, 'updatepermission'])->name('updatepermission');
Route::get('admin/permission',[App\Http\Controllers\StudentController::class, 'permission'])->name('permission');
Route::post('admin/permission',[App\Http\Controllers\StudentController::class, 'store_role_permission'])->name('store_role_permission');
Route::post('admin/addrole',[App\Http\Controllers\StudentController::class, 'storerole'])->name('storerole');
Route::post('admin/addpermission',[App\Http\Controllers\StudentController::class, 'storepermission'])->name('storepermission');
Route::post('admin/upload',[App\Http\Controllers\StudentController::class, 'uploadfile'])->name('uploadfile');
Route::get('admin/addstudent',[App\Http\Controllers\StudentController::class,'addstudent'])->name('addstudent');
Route::get('student/register',[App\Http\Controllers\StudentController::class,'studentregister'])->name('studentregister');
Route::get('student/login',[App\Http\Controllers\StudentController::class,'studentlogin'])->name('studentlogin');
Route::post('student/check',[App\Http\Controllers\StudentController::class, 'studentcheck'])->name('studentcheck');
Route::post('student/registercheck',[App\Http\Controllers\StudentController::class, 'registercheck'])->name('registercheck');
Route::post('student/createpassword',[App\Http\Controllers\StudentController::class, 'createpassword'])->name('createpassword');
Route::get('student/passwordset',[App\Http\Controllers\StudentController::class,'passwordset'])->name('passwordset');
Route::get('student/profile',[App\Http\Controllers\StudentController::class,'studentprofile'])->name('studentprofile');
Route::get('student/logout',[App\Http\Controllers\StudentController::class,'studentlogout'])->name('studentlogout');
Route::get('student/edit',[App\Http\Controllers\StudentController::class, 'showstudentdata'])->name('showstudentdata');
Route::post('student/addachievement',[App\Http\Controllers\StudentController::class, 'addachievement'])->name('addachievement');
Route::post('student/addpassion',[App\Http\Controllers\StudentController::class, 'addpassion'])->name('addpassion');
Route::post('student/addmoment',[App\Http\Controllers\StudentController::class, 'addmoment'])->name('addmoment');
Route::post('student/addstrength',[App\Http\Controllers\StudentController::class, 'addstrength'])->name('addstrength');
Route::post('student/addlifeline',[App\Http\Controllers\StudentController::class, 'addlifeline'])->name('addlifeline');
Route::post('student/edit',[App\Http\Controllers\StudentController::class, 'updatestudent'])->name('updatestudent');
Route::get('student/deleteachievement/{id}',[App\Http\Controllers\StudentController::class, 'deleteachievement'])->name('deleteachievement');
Route::get('student/deletepassion/{id}',[App\Http\Controllers\StudentController::class, 'deletepassion'])->name('deletepassion');
Route::get('student/deletelifeline/{id}',[App\Http\Controllers\StudentController::class, 'deletelifeline'])->name('deletelifeline');
Route::post('student/userRegistrationPost4',[App\Http\Controllers\StudentController::class, 'userRegistrationPost4'])->name('userRegistrationPost4');
Route::get('student/userRegistrationPost4',[App\Http\Controllers\StudentController::class, 'userRegistrationPost4'])->name('userRegistrationPost4');
Route::post('student/GetLifeLinehtml',[App\Http\Controllers\StudentController::class, 'GetLifeLinehtml'])->name('GetLifeLinehtml');
Route::post('student/updatelifeline',[App\Http\Controllers\StudentController::class, 'updatelifeline'])->name('updatelifeline');
Route::post('student/GetLifeAchievementhtml',[App\Http\Controllers\StudentController::class, 'GetLifeAchievementhtml'])->name('GetLifeAchievementhtml');
Route::post('student/updatelifeachievement',[App\Http\Controllers\StudentController::class, 'updatelifeachievement'])->name('updatelifeachievement');
Route::post('student/GetLifePassionhtml',[App\Http\Controllers\StudentController::class, 'GetLifePassionhtml'])->name('GetLifePassionhtml');
Route::post('student/updatelifepassion',[App\Http\Controllers\StudentController::class, 'updatelifepassion'])->name('updatelifepassion');
