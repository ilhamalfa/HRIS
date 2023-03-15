<?php

use App\Http\Controllers\JobseekerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('joobseeker',JobseekerController::class);
Route::post('getKabupaten',[JobseekerController::class,'getKabupaten'])->name('getKabupaten');
Route::post('getKecamatan',[JobseekerController::class,'getKecamatan'])->name('getKecamatan');
Route::post('getDesa',[JobseekerController::class,'getDesa'])->name('getDesa');
