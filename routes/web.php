<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
// Route::get('/', [AuthController::class, 'index'])->name('login');

// Route::get('login', [AuthController::class, 'index'])->name('login');

// Route::post('action-login', [AuthController::class, 'actionLogin'])->name('login.action');


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/fee', function () {
    return view('fees/add');
});


Route::get('/dashboard', function () {
    return view('home/dashboard');
});


// Route::get('/students', function () {
//     return view('student/list');
// });


// Route::get('/addstudent', function () {
//     return view('student/add');
// });

Route::get('/addstaff', function () {
    return view('user/add');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/user/{UserId}', [UserController::class, 'show']);

// Route::get('/locale/{locale}', function (Request $request, $locale) {
//     Session::put('locale', $locale);
//     return redirect()->back();
// })->name('locale');

Route::get('/students', [StudentController::class, 'index']);

Route::get('/addstudent', [StudentController::class, 'create']);

Route::post('studentstore', [StudentController::class, 'store'])->name('payer.store');
