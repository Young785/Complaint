<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/conadmin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('login');
Route::get('/authenticate', [App\Http\Controllers\AdminController::class, 'authe'])->name('authe');                                                                                                                                                                                                  
Route::post('/complaints', [App\Http\Controllers\HomeController::class, 'comp'])->name('comp')->middleware('auth');
Route::get('/conadmin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/conadmin/complaint', [App\Http\Controllers\AdminController::class, 'comp'])->name('comp')->middleware('auth');
Route::get('/conadmin/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/conadmin/account', [App\Http\Controllers\AdminController::class, 'account'])->name('account')->middleware('auth');
Route::get('/conadmin/complaint/{id}', [App\Http\Controllers\AdminController::class, 'oneComp'])->name('oneComp')->middleware('auth');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/conadmin/login');
});

// Route::get('/test', function () {
//         $notifications = Auth::user()->unreadNotifications;

//         foreach ($notifications as $notification) {
//             dd($notification->data['name']);
//         }
//     });
Route::get('/markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect("/");
});