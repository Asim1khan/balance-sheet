<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\ProductController;
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
       Route::group(['middleware'=>'auth'], function () {
        Route::resource('business', BusinessController::class);
        Route::resource('income', JournalController::class);
        Route::resource('product', ProductController::class);
        Route::get('/product/buy/{id}', [ProductController::class,'buy']);
        Route::get('/transaction/{id}', [BusinessController::class,'transaction'])->name('business.transactions');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[BusinessController::class,'index'])->name('dashboard');
