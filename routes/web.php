<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassesController;

use Illuminate\Support\Facades\Session;

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


// user management
// Route::get('/', function () {
//     return view('auth/login'); //login page
// });

// Route::get('/login', function () {
//     return view('auth/login'); //login page
// });

// signin and signup
// Route::get('/', 'Auth\AuthController@login')->name('login');
Route::get('/', 'App\Http\Controllers\Auth\AuthController@login')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\AuthController@login')->name('login');
Route::post('/signin', [UserController::class, 'singinAction']);//login action
// Route::post('logout', 'UserController@logout')->name('logout'); //logout action
Route::post('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');


// user details
Route::get('/users', [UserController::class, 'index']); //fetch users
Route::get('/user/{UserId}', [UserController::class, 'show']); //moddify user with userid



Route::get('/fee', function () {
    return view('fees/add');
});




// Route::get('/class', function () {
//     return view('class/list');
// });


Route::get('/addstaff', function () {
    return view('user/add');
});

// Route::get('/locale/{locale}', function (Request $request, $locale) {
//     Session::put('locale', $locale);
//     return redirect()->back();
// })->name('locale');

//LAUNCHES THE LIST FORM FOR RECORDS FROM THE DATABASE

// Route::get('/class', [ClassesController::class, 'index']);

// class details
Route::get('/addclass', [ClassesController::class, 'create']);
Route::get('/editclass', [ClassesController::class, 'edit']);
Route::get('/class', [ClassesController::class, 'index']);

// student details
Route::get('/students', [StudentController::class, 'index']); //list all student
Route::get('/addstudent', [StudentController::class, 'create']); //view student forms
Route::post('studentstore', [StudentController::class, 'store'])->name('student.store'); //save student action

Route::group(['middleware' => 'auth.redirect'], function () {
   Route::get('/dashboard', function () {
    return view('home/dashboard'); //view dashboard
});
});