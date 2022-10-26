<?php

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

use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms/create', [FormController::class,'create']);

Route::post('/forms',[FormController::class,'store']);

Route::get('/registered', [FormController::class,'index']);
