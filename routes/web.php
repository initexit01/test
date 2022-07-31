<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userControllers;

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

Route::get('/', [userControllers::class, 'mainView']);
Route::get('add', [userControllers::class, 'add']);
Route::post('save', [userControllers::class, 'store']);
Route::get('delete/{id}', [userControllers::class, 'destroy']);
Route::get('up_form/{id}', [userControllers::class, 'update_form']);
Route::post('up',[userControllers::class,'modify']);