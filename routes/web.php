<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\LoginController;
use App\Http\Controllers\Backend\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->prefix('admin')->name('admin.')->group( function(){

    Route::get('/login', 'adminLogin')->name('login');
    Route::post('/login', 'adminLoginCheck')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

});
