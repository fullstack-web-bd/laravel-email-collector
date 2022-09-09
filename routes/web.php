<?php

use App\Http\Controllers\EmailController;
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

Route::get('/', [EmailController::class, 'index'])->name('index');
Route::post('/store', [EmailController::class, 'store'])->name('emails.store');
Route::delete('/destroy/{email}', [EmailController::class, 'destroy'])->name('emails.destroy');