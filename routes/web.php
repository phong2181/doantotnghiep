<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\UserAdmin;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Middleware\AdminMiddleware;

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


/*login Admin*/
Route::get('admin', [UserAdmin::class, 'admin_login'])->name('admin_login');
Route::post('login', [UserAdmin::class, 'login'])->name('login');


/*logout Admin*/
Route::get('logout', [UserAdmin::class, 'logout'])->name('logout');
/*Success Dashboard*/
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('logouts');